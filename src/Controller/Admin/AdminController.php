<?php


namespace App\Controller\Admin;


use App\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/**
 * Class AdminController
 * @IsGranted ( "ROLE_ADMIN")
 */
class AdminController extends AbstractController{
    public function sendEmail(MailerInterface $mailer){
        $email = (new Email())
                ->from('m.hoseini9266@gmail.com')
                ->to('mohammad@gmail.com')
                ->subject('hello')
                ->text('wellcome to iran');
        $mailer->send($email);
        dd('mohammadi');
    }
}