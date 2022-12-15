<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Package;
use App\Services\Category\CategotyServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Services\Logger\LoggerServices;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndexController extends AbstractController
{
    public function index(  SessionInterface $session): Response
    {
        $package = $this -> getDoctrine()
            -> getRepository(Package::class)
                -> findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findBy(['status'=>true, 'parent'=>null]);

        return $this->  render('fornt_page/index.html.twig',
        [
            'categories' => $categories, 'packages' => $package
        ]);
    }
    public function  logger(Request  $request, LoggerServices $services){
        $result = $services ->request_for_log($request);
        return new Response($result);
    }

    public function category_of_article($name){
        $category = $this->getDoctrine()->getRepository(Category::class) ->findBy(['name'=>$name]);
        $categories = $this->getDoctrine()->getRepository(Category::class)->findBy(['status'=>true, 'parent'=>null]);
        if ($category == null) {
            throw new NotFoundHttpException('دسته بندی پیدا نشد');
        }
        $article = $this->getDoctrine()->getRepository(Article::class)->findBy(['category'=>$category, 'status'=>true, 'publish'=>true]);
        return $this->render('fornt_page/category_of_article/category_of_article.html.twig', [
             'categories'=>$categories, 'articles'=>$article
                , 'name'=>$name]);
    }

    public function page_article($title)
    {
        if ($title){
            $article = $this->getDoctrine()->getRepository(Article::class)->findOneBy(['title' => $title, 'status'=>true, 'publish'=>true]);
            if ($article == null) {
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }
        $categories = $this->getDoctrine()->getRepository(Category::class)->findBy(['status'=>true, 'parent'=>null]);
        return $this->render('fornt_page/category_of_article/page_article.html.twig',
        [
            'categories'=>$categories, 'article'=>$article
        ]);
    }

}