<?php


namespace App\Controller;


use App\Entity\Article;
use App\Entity\Category;
use App\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ArticlesController
 * @IsGranted ("ROLE_ADMIN")
 */
class ArticlesController extends AbstractController
{
    public function list_article() {

        return $this->render('article/list_article.html.twig',['list_article'=> $this->getDoctrine()->getRepository(Article::class) ->findAll()]);
    }


    public function add_article(Request $request) {
        $article = new Article();
        $categories = $this -> getDoctrine() -> getRepository(Category::class)->findAll();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            if ( $request->get('category_article') == null  ) {
                $this->addFlash('category_article', 'باید دسته بندی رو انتخاب کنید');
                return $this->render('article/add_article.html.twig', ['form' => $form->createView(),'categories' => $categories]);
            }
            $category = $this->getDoctrine()->getRepository(Category::class)->find((int)$request->get('category_article'));
            if ($category == null) {
                $this->addFlash('category_article', 'دسته بندی موجود وجود ندارد.');
                return $this->render('article/add_article.html.twig', ['form' => $form->createView(),'categories' => $categories]);
            }
            $article->setCategory($category);
            if ($request->get('publish') == null) {
                $article->setPublish(false);
            }
            else {
                $article->setPublish(true);
            }
            if ($article->getTitle() == null){
                $form->get('title')->addError(new FormError('لطفا title رو وارد کنید'));
                return $this->render('article/add_article.html.twig', ['form' => $form->createView(),'categories' => $categories]);
            }
            $article->setAuther($this->getUser());
            $this->getDoctrine()->getManager()->persist($article);
            $this->getDoctrine()->getManager()->flush();
            return  $this->redirectToRoute('list_article');
        }
        return $this->render('article/add_article.html.twig', ['form' => $form->createView(),'categories' => $categories]);
    }
}