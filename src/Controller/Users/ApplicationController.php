<?php

namespace App\Controller\Users;

use App\Entity\Application;
use App\Entity\Package;
use App\Entity\UserPackage;
use App\Form\AddApplicationType;
use App\Form\ApplicationType;
use ContainerPv9bAFu\getRouter_CacheWarmerService;
use ContainerPv9bAFu\getWebProfiler_Controller_ExceptionPanelService;
use Doctrine\Common\Collections\ArrayCollection;
use mysql_xdevapi\Exception;
use PHPUnit\Util\Json;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Translation\Exception\InvalidArgumentException;
use function MongoDB\BSON\fromJSON;
use function PHPUnit\Framework\isEmpty;

/**
 * @IsGranted    ("ROLE_USER")
 */
class ApplicationController extends AbstractController
{
    public function add_app(Request $request)
    {
        $app = new Application();
        $form = $this->createForm(AddApplicationType::class, $app);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            if ($app->getName() == null) {
                $form->get('name')->addError(new FormError('name را باید وارد کنید.'));
                return $this->render("User/Logger_html/Applications/add_applications.html.twig", ['form' => $form->createView(), 'user' => $this->getUser()]);
            }
            if ($app->getUrl() == null) {
                $form->get('url')->addError(new FormError('url را باید وارد کنید.'));
                return $this->render("User/Logger_html/Applications/add_applications.html.twig", ['form' => $form->createView(), 'user' => $this->getUser()]);
            }
            if (!preg_match('/^[\w\s?]+$/si', $app->getName())) {
                $form->get('name')->addError(new FormError('ورودی باید انگلیسی باشد.'));
                return $this->render("User/Logger_html/Applications/add_applications.html.twig", ['form' => $form->createView(), 'user' => $this->getUser()]);

            }
            if (!preg_match('/^[\w\s?]+$/si', $app->getUrl())) {
                $form->get('url')->addError(new FormError('ورودی باید انگلیسی باشد'));
                return $this->render("User/Logger_html/Applications/add_applications.html.twig", ['form' => $form->createView(), 'user' => $this->getUser()]);
            }
            $sum = 0;
            foreach ($this -> getDoctrine() -> getRepository(UserPackage::class)
                 -> findBy(['name_user' => $this -> getUser()]) as $item) {
                $sum += $item -> getNamePackage() -> getNumberApp();
            }
            $apps = $this -> getDoctrine() -> getRepository(Application::class)-> findBy(['user'=>$this-> getUser()]);
            if (count($apps) >= $sum) {
                $this -> addFlash('notice','باید پکیج خود را ارتقاع بدهید. ');
                return $this->render("User/Logger_html/Applications/add_applications.html.twig", ['form' => $form->createView(), 'user' => $this->getUser()]);
            }

            $app->setUser($this->getUser());
            $app->setStatus(true);
            $app->setDate(new \DateTime('UTC'));
            $app -> setToken(random_int(10000,99999));
            $entity = $this->getDoctrine()->getManager();
            $entity->persist($app);
            $entity->flush();
            return $this->redirectToRoute('list_app');
        }
        return $this->render("User/Logger_html/Applications/add_applications.html.twig", ['form' => $form->createView(), 'user' => $this->getUser()]);
    }

    public function list_app()
    {
        $user = $this->getUser();
        $apps = array();
        foreach ($this->getDoctrine()->getRepository(Application::class)->findAll() as $item) {
            if ($item->getUser() -> getUserIdentifier() == $user->getUserIdentifier() ) {
                array_push($apps, ['name_app' => $item->getName(), 'user_name' => $item->getUser()->getUsername(), 'date' => $item->getDate(),
                                          'id' => $item -> getId(), 'status' => $item -> getStatus(), 'token' => $item->getToken()]);
            }
        }
        return $this->render('/User/Logger_html/Applications/list_app.html.twig', [ 'apps' => $apps]);
    }

    public function remove_app($id, Request $request)
    {
        $entity = $this->getDoctrine()->getRepository(Application::class)->find($id);
        if ($entity->getUser()->getUsername() == $this->getUser()->getUsername()) {
            $entity -> setStatus(!$entity -> getStatus());
            $this->getDoctrine()->getManager()->persist($entity);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->redirectToRoute('list_app');
    }

    public function edit_app($id, Request $request)
    {
        $entity = $this->getDoctrine()->getManager();
        $filed = $this->getDoctrine()->getRepository(Application::class)->find($id);
        $packages = $this->getDoctrine()->getRepository(Package::class)->findAll();
        $form = $this->createForm(AddApplicationType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            if ($filed[0]->getUser()->getUserIdentifier() == $this->getUser()->getUserIdentifier()) {
                try {
                    if (preg_match('/[^A-Za-z0-9]+/', $request->request->get('add_application')['url'])) {
                        $form->get('url')->addError(new FormError('ورودی باید انگلیسی باشد'));
                        return $this->render('User/Logger_html/Applications/edit&detail_app.html.twig', [
                            'form' => $form->createView(),
                            'user' => $this->getUser(), 'name_app' => $filed[0]->getName(),
                            'url_app' => $filed->getUrl(), 'packages' => $packages]);
                    }
                    $filed->setName($request->request->get('add_application')['name']);
                    $filed->setUrl($request->request->get('add_application')['url']);
                    $entity->persist($filed);
                    $entity->flush();
                    return $this->redirectToRoute('list_app');
                } catch (\Exception $exception) {
                    $form->get('url')->addError(new FormError('یک جا اشتباه عمل کردید'));
                    return $this->render('User/Logger_html/Applications/edit&detail_app.html.twig', ['form' => $form->createView(), 'user' => $this->getUser(),
                        'name_app' => $filed->getName(), 'url_app' => $filed->getUrl()
                        , 'packages' => $packages]);
                }
            } else {
                $form->get('url')->addError(new FormError('یک جا اشتباه عمل کردید'));
                $form->addError(new FormError("این اپ در لیست شما وجود ندارد"));
                return $this->render('User/Logger_html/Applications/edit&detail_app.html.twig', [
                    'form' => $form->createView(), 'user' => $this->getUser(),
                    'name_app' => $filed->getName(), 'url_app' => $filed->getUrl()
                    , 'packages' => $packages]);
            }
        }
        return $this->render('User/Logger_html/Applications/edit&detail_app.html.twig', [
            'form' => $form->createView(), 'user' => $this->getUser(), 'name_app' => $filed->getName(),
            'url_app' => $filed->getUrl(), 'packages' => $packages]);
    }

    public function add_package_app(Request $request)
    {
        if ($request->get('name_package') == -1) {
            $package = null;
        } else {
            $package = $this->getDoctrine()->getRepository(Package::class)
                ->find($request->get('name_package'));
        }

        $app = $this->getDoctrine()->getRepository(Application::class)
            ->findBy(['name' => $request->request->get('name_app')]);
        $status = new Status();
        $status->setDate(new \DateTime('UTC'));
        $status->setNameApp($app[0]);
        $status->setNamePackage($package);
        $status->setBill('5000');
        $this->getDoctrine()->getManager()->persist($status);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('list_app');


    }

    public function change_token(Request  $request){
        if ($request->get('id') != null and $this-> getDoctrine()-> getRepository(Application::class)->find($request->get('id')) ->getUser() == $this-> getUser())
        $app = $this-> getDoctrine()-> getRepository(Application::class)->find($request->get('id'));
        $app-> setToken(random_int(10000,99999));
        $this-> getDoctrine() -> getManager()->persist($app);
        $this-> getDoctrine() -> getManager()->flush();
        return $this->redirectToRoute('list_app');
    }

    public function searching_app(Request $request){
        $entity = $this->getDoctrine()->getRepository(Application::class)->createQueryBuilder('p');
        if ($request->get('word') == "all") {
            $value = $this->render('User/Logger_html/Applications/searching_app.html.twig', ['apps'=>$entity -> where('p.user = :user') -> setParameter('user', $this->getUser()) -> getQuery()->getResult()]);
            return new JsonResponse($value->getContent());
        }
        $value = $this->render('User/Logger_html/Applications/searching_app.html.twig', ['apps'=>$entity -> where($entity->expr()->like('p.name', ":data")) -> andWhere('p.user = :user')-> setParameter('user', $this->getUser()) ->setParameter('data', "%".$request->get('word')."%")-> getQuery()->getResult()]);
        return new JsonResponse($value->getContent());
    }
}