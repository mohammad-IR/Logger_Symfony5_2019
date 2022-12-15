<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ErrorHandler\Error\ClassNotFoundError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Mime\Exception\InvalidArgumentException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticlesController
 * @IsGranted ("ROLE_ADMIN")
 */
class CategoryController extends AbstractController
{
    public function add_category(Request $request ) {
        $category = new Category();
        if ($request->get('name') == null or
            $request->get('parent') == null ) {
            return $this->render('category/add_category.html.twig',['categories'=> $this->getDoctrine()->getRepository(Category::class) ->findAll()]);
        }
        if ($request->get('name') == null) {
            $this->addFlash('name', 'نام را وارد نکرده اید');
            return $this->render('category/add_category.html.twig',['categories'=> $this->getDoctrine()->getRepository(Category::class) ->findAll()]);
        }
        $category->setName($request->get('name'));
        if ($request->get('parent') == null) {
            $this->addFlash('parent', 'دسته بندی را وارد نکرده اید');
            return $this->render('category/add_category.html.twig',['categories'=> $this->getDoctrine()->getRepository(Category::class) ->findAll()]);
        }
        $category_parent = $this->getDoctrine() ->getRepository(Category::class)->find((int)$request->get('parent'));
        if ($category_parent != null and $category_parent->getParent() != null) {
            $this->addFlash('parent', 'دسته بندی راس خود یک راس دارد.');
            return $this->render('category/add_category.html.twig',['categories'=> $this->getDoctrine()->getRepository(Category::class) ->findAll()]);
        }
        else {
            $category->setParent($category_parent);
        }
        if ($request->get('status') != null) {
            $category->setStatus(true);
        }
        else {
            $category->setStatus(false);
        }
        $this-> getDoctrine()->getManager()->persist($category);
        $this-> getDoctrine()->getManager()->flush();
        return $this-> redirectToRoute('list_category');
    }

    public function edit_category(Request $request) {
        $entity = $this->getDoctrine()->getRepository(Category::class);
        $category = $entity ->find((int)$request->get('id'));
        if ($category == null) {
            throw new InvalidArgumentException();
        }
        if ($request->get('name') == null or
            $request->get('parent') == null ) {

            $categoies = $entity->createQueryBuilder('p')
            ->where('(p.name != :name AND p.parent != :category) OR p = :parent')
                -> setParameters(['name' => $category->getName(), 'parent' => $category->getParent(), 'category'=>$category])
                ->getQuery()
                ->getResult();
            return $this->render('category/edit_category.html.twig', ['categories'=>$categoies, 'category_edit' => $category]);
        }
        $category_parent = $entity->find((int)$request->get('parent'));
        if ($category_parent == null) {
            $category->setParent(null);
        }
        else {
            $category->setParent($category_parent);
        }

        $category->setName($request->get('name'));
        if ($request->get('status') == null) {
            $category->setStatus(false);
        }
        else {
            $category->setStatus(true);
        }
        $this->getDoctrine()->getManager()->persist($category);
        $this->getDoctrine()->getManager()->flush();
        return  $this->redirectToRoute('list_category');
    }

    public function list_category(Request $request) {
        return $this->render('category/list_category.html.twig', ['categories' => $this -> getDoctrine() -> getRepository(Category::class) -> findAll()]);
    }

    public function delete_category(Request $request){
        if ($request->get('id') == null) {
            throw new \http\Exception\InvalidArgumentException();
        }
        $category = $this->getDoctrine()->getRepository(Category::class)->find($request->get('id'));
        if ($category == null) {
            throw new ClassNotFoundError();
        }
        $this->getDoctrine()->getManager()->remove($category);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('list_category');
    }
}
