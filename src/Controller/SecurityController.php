<?php

namespace App\Controller;

use App\Entity\Log;
use App\Entity\User;
use App\Form\RegisterFormType;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    public function register(Request $request, UserPasswordHasherInterface $hasher)
    {
        $user = new User();
        $form = $this->createForm(RegisterFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $request->get('register_form')['password'];
            $user->setPassword($hasher->hashPassword($user, $password),);
            $user->setRoles(["ROLE_ADMIN"]);
            if (!preg_match('/[^A-Za-z0-9 #$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]+/', $user->getUserIdentifier())
                and !preg_match('/[^A-Za-z0-9 #$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]+/', $user->getPassword())) {
                $user->setNumberLogNow(0);
                $this->getDoctrine()->getManager()->persist($user);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('login');
            } else {
                $form->get('password')->addError(new FormError('ورودی باید انگلیسی باشد'));
                return $this->render('security/register.html.twig',
                    ['form' => $form->createView()]);
            }
        }


        return $this->render('security/register.html.twig',
            ['form' => $form->createView()]
        );
    }

    public function validation_eamil(MailerInterface $mailer, Request $request)
    {
        if ($request->get('email') == null) {
            return $this->render('/security/Validation.html.twig', ['type'=> 'ایمیل', 'item'=> 'email']);
        }
        try {
            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $request->get('email')]);
            if ($user == null) {
                $this->addFlash('notice', 'can not found your email.');
                return $this->render('/security/Validation.html.twig', ['type'=> 'ایمیل', 'item'=> 'email']);
            }
            $number = random_int(100000, 999999);
            $username = $user ->getUserIdentifier();
            $email = (new Email())
                ->from('m.hoseini9266@gmail.com')
                ->to($request->get('email'))
                ->subject('validation ')
                ->text("hi $username \n  your validation number is $number. ");
            $mailer->send($email);
            $user->setValidation($number);
            $this->getDoctrine()->getManager()-> persist($user);
            $this->getDoctrine()->getManager()-> flush();
            return $this->redirectToRoute('validation');
        } catch (Exception $exception) {
            $this->addFlash('notice', 'You made a mistake somewhere.');
            return $this->render('/security/Validation.html.twig', ['type'=> 'ایمیل', 'item'=> 'email']);
        }
        return $this->render('/security/Validation.html.twig', ['type'=> 'ایمیل', 'item'=> 'email']);
    }

    public function validation(Request  $request, SessionInterface $session){
        if ($request->get('validation') == null) {
            return $this->render('security/Validation.html.twig', ['type'=>'اعتبار سنجی', 'item'=>'validation']);
        }
        try {
            $validation = $request->get('validation');
            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['validation'=>$validation]);
            if ($user == null) {
                $this->addFlash('notice', 'validation is not true');
                return $this->render('security/Validation.html.twig', ['type'=>'اعتبار سنجی', 'item'=>'validation']);
            }
            $user->setValidation('');
            $this -> getDoctrine()->getManager()->persist($user);
            $this -> getDoctrine()->getManager()->flush();
            $session -> set('user', $user->getUserIdentifier());
            return $this->redirectToRoute('validation_password', ['user'=>$user->getUserIdentifier()]);
        }
        catch (\Exception $exception) {
            $this->addFlash('notice', 'you made  a mistake somewhere.');
            return $this->render('security/Validation.html.twig', ['type'=>'اعتبار سنجی', 'item'=>'validation']);
        }
    }
    public function validation_password(Request  $request, UserPasswordHasherInterface $hasher, SessionInterface $session) {
        if ($request->get('password') == null) {
            return $this->render('security/Validation.html.twig', ['type'=>'پسورد', 'item'=>'password']);
        }
        try {
            if ($request->get('user') == null and $request->get('user') != $session->get('user')) {
                $this->addFlash('notice', 'we do n\'t have user');
                return $this->render('security/Validation.html.twig', ['type'=>'پسورد', 'item'=>'password']);
            }
            $user = $this->getDoctrine()->getRepository(User::class) -> findOneBy(['username'=>$session->get('user')]);

            $user -> setPassword($hasher->hashPassword($user, $request ->get('password')));
            $this->getDoctrine()->getManager()->persist($user);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('login');
        }
        catch (Exception $exception) {

        }
    }

    public function login(AuthenticationUtils $authenticationUtils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('dashbord');
         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
