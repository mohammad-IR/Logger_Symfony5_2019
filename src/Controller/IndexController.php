<?php

namespace App\Controller;

use App\Entity\Package;
use App\Services\Category\CategotyServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Services\Logger\LoggerServices;

class IndexController extends AbstractController
{
    public function index(CategotyServices $categotyServices,  SessionInterface $session): Response
    {
        $package = $this -> getDoctrine()
            -> getRepository(Package::class)
                -> findAll();
        $categories = $categotyServices -> category();

        return $this->  render('fornt_page/index.html.twig',
        [
            'categories' => $categories, 'packages' => $package
        ]);
    }
    public function  category(){

        return new Response("hello");

    }
    public function  logger(Request  $request, LoggerServices $services){
        $result = $services ->request_for_log($request);
        return new Response($result);
    }

}