<?php

namespace App\Controller\Users;

use App\Entity\Application;
use App\Entity\Package;
use App\Entity\UserPackage;
use App\Form\AddPackageType;
use App\Form\PackagesType;
use ContainerJNVfWKW\getPackagesControllerService;
use phpDocumentor\Reflection\Types\This;
use PHPUnit\Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Packages;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use function Composer\Autoload\includeFile;


/**
 * @IsGranted ("ROLE_USER")
 */
class PackagesController extends AbstractController
{
    public function list_packages(){
        $list = $this -> getDoctrine() ->getRepository(Package::class) -> findBy(['status'=>true]);
        return $this -> render('User/Logger_html/packages/package_list.html.twig', ['list_packages' => $list, 'user' => $this -> getUser()]);
    }

    /**
     * @IsGranted ("ROLE_ADMIN")
     */
    public function add_packages(Request $request) {
        $package = new Package();
        $form = $this -> createForm(AddPackageType::class, $package);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form -> isValid()) {
            if(!is_numeric($package-> getPrice())) {
                $form -> get('price')->addError(new FormError('قیمت باید عدد وارد شود'));
                return $this -> render('User/Logger_html/packages/add_package.html.twig', ['form'=> $form->createView()]);
            }
            if (!is_numeric($package->getLimitReport())) {
                $form -> get('limit_report')->addError(new FormError('تعداد لاگ ها باید عدد وارد شود'));
                return $this -> render('User/Logger_html/packages/add_package.html.twig', ['form'=> $form->createView()]);
            }
            if (!is_numeric($package->getNumberApp())) {
                $form -> get('')->addError(new FormError('تعدادداپ ها باید عدد وارد کنید'));
                return $this -> render('User/Logger_html/packages/add_package.html.twig', ['form'=> $form->createView()]);
            }
            $package->setStatus(true);
            $this -> getDoctrine() -> getManager()-> persist($package);
            $this -> getDoctrine() -> getManager()->flush();
            return $this -> redirectToRoute('list_packages');
        }
        else {
            return $this -> render('User/Logger_html/packages/add_package.html.twig', ['form'=> $form->createView()]);
        }
    }
    /**
     * @IsGranted ("ROLE_ADMIN")
     */
    public function edit_packages( $id, Request $request) {
        $package = $this->getDoctrine()->getRepository(Package::class)->find($id);
        if (!$package -> getStatus()) {
            return $this -> redirectToRoute('list_packages');
        }
        $form = $this -> createForm(PackagesType::class);
        $form->handleRequest($request);
        if ($form-> isSubmitted()) {
            if (is_numeric($request->get('packages')['price']))
            $package -> setPrice($request->get('packages')['price']);
            else {
                $form->get('price')->addError(new FormError('باید عدد وارد کنید'));
                return $this->render('User/Logger_html/packages/edit_package.html.twig', ['user' => $this->getUser(), 'form' => $form->createView(), 'package' => $package]);
            }
            try {
                $package -> setNumberApp((int)$request->get('packages')['number_app']);
            }
            catch (\Exception $exception){
                $form-> get('number_app')->addError(new FormError('باید عدد وارد کنید'));
                return $this->render('User/Logger_html/packages/edit_package.html.twig', ['user' => $this->getUser(), 'form'=>$form->createView(), 'package'=>$package]);
            }
            try {
                $package -> setLimitReport((int)$request->get('packages')['limit_report']);
            }
            catch (\Exception $exception){
                $form-> get('limit_report')->addError(new FormError('باید عدد وارد کنید'));
                return $this->render('User/Logger_html/packages/edit_package.html.twig', ['user' => $this->getUser(), 'form'=>$form->createView(), 'package'=>$package]);
            }
            $this -> getDoctrine() -> getManager() ->persist($package);

            $this -> getDoctrine() -> getManager() ->flush();
            return $this -> redirectToRoute('list_packages');
        }
        else {
            return $this->render('User/Logger_html/packages/edit_package.html.twig', ['user' => $this->getUser(), 'form'=>$form->createView(), 'package'=>$package]);
        }

    }

    public  function delete_packages($id) {
        $package = $this->getDoctrine()->getRepository(Package::class) -> find($id);
        $package -> setStatus(false);
        $this -> getDoctrine() -> getManager() -> persist($package);
        $this -> getDoctrine() -> getManager() -> flush();
        return $this -> redirectToRoute('list_packages');
    }

    public function bought_package() {
        $bought_packages = $this -> getDoctrine() -> getRepository(UserPackage::class)->findBy(['name_user'=>$this -> getUser()], array('id'=>'DESC'));
        return $this -> render('User/Logger_html/packages/bought_package.html.twig',['bought_packages' =>$bought_packages]);
    }
    public function searching_package(Request $request) {
        if ($request-> get('word') == "all") {
            $value = $this-> render('User/Logger_html/packages/searching.html.twig',['list_packages'=> $this->getDoctrine()->getRepository(Package::class)->createQueryBuilder('p')-> where('p.status = true') ->getQuery()->getResult()]);
            return new JsonResponse($value->getContent());
        }

        $entity = $this-> getDoctrine()->getRepository(Package::class)->createQueryBuilder('p');
        $packages = $entity->where($entity->expr()->like('p.name', ":data"))
            ->andWhere('p.status = true')
            ->setParameter('data', "%".$request->get('word')."%")
                ->getQuery()
                ->getResult();
        $value =  $this->render('User/Logger_html/packages/searching.html.twig',['list_packages'=>$packages]);
        return new JsonResponse($value->getContent());
    }

    public function searching_bought_package(Request  $request){
        $entity = $this-> getDoctrine()->getRepository(UserPackage::class)->createQueryBuilder('p');
        if ($request->get('word') == 'all') {
            $value = $this -> render('User/Logger_html/packages/searching_bought_package.html.twig',
                ['bought_packages' =>
                    $entity -> where('p.name_user = :user')
                        -> setParameter('user', $this->getUser())
                        ->orderBy('p.id', "DESC")
                        ->getQuery()
                        ->getResult()
                ]);
            return new JsonResponse($value->getContent());
        }
        $packages = array();
        foreach ($entity ->andWhere('p.name_user = :user')
                     -> setParameters(['user'=>$this->getUser()]) ->orderBy('p.id', "DESC") ->getQuery()->getResult() as $item) {
            if (strstr($item -> getNamePackage() -> getName(), $request -> get('word')) != false) {
                array_push($packages, $item);
            }
        }
        $value = $this -> render('User/Logger_html/packages/searching_bought_package.html.twig',
            ['bought_packages' => $packages
                ]);
        return new JsonResponse($value->getContent());
    }
}