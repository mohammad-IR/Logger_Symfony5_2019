<?php


namespace App\Controller\Users;


use App\Entity\Application;
use App\Entity\Log;
use App\Entity\Package;
use App\Entity\UserPackage;
use App\Form\PackagesType;
use App\Services\ApplicationServices;
use App\Services\Logger\LoggerServices;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @IsGranted ("ROLE_USER")
 */
class UsersController extends AbstractController
{

    public function dashbord(Request $request, LoggerServices $logger, ApplicationServices $app, SessionInterface $session){
        $session -> set('id_log', null);
        $session -> set('number_log', 0);
        $log_info = $logger -> logs_user($this ->  getUser(), 'INFO');
        $log_error = $logger -> logs_user($this ->  getUser(), 'ERROR');
        $log_warning = $logger -> logs_user($this ->  getUser(), 'WARNING');
        $log_danger = $logger -> logs_user($this ->  getUser(), 'DANGER');
        $list_app = $app -> list_App($this -> getUser());
        $last_logs = $this -> getDoctrine() -> getRepository(Log::class)
                -> createQueryBuilder('log')
                -> where("log.user=".$this->getUser()->getId())
                ->orderBy('log.id', 'DESC')
                -> getQuery()
                -> getResult();

        return $this -> render ("/User/doshbord_user.html.twig",
                                ['user' => $this -> getUser(), "INFO" => count($log_info), "ERROR"=> count($log_error)
                                , 'WARNING' => count($log_warning), 'DANGER' => count($log_danger)
                                , 'last_logs' => $last_logs
                                , 'total_logs' => count($last_logs)
                                , 'log_week_ago'=> count($logger -> log_week_ago($this -> getUser()))
                                , 'log_month_ago'=> count($logger -> log_month_ago($this -> getUser()))]);
    }
    public function buy_package($id, Request $request){
        if ($id == null) {
            $package = $this->getDoctrine()->getRepository(Package::class)
                ->findBy(['status' => true]);
            return $this->render("User/Logger_html/packages/buy_package.html.twig", [
                'user' => $this->getUser(),
                'packages' => $package
            ]);
        }
        $package = $this->getDoctrine()-> getRepository(Package::class) -> find($id);

        $user_package = new UserPackage();
        $user_package -> setNamePackage($package);
        $user_package -> setNameUser($this -> getUser());
        $user_package -> setDate(new \DateTime('UTC'));
        $this -> getDoctrine() -> getManager()->persist($user_package);
        $this -> getDoctrine() -> getManager()->flush();
        return $this -> redirectToRoute('dashbord');
    }

}