<?php


namespace App\Controller\Admin;

use App\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \Symfony\Component\HttpFoundation\Request;

/**
 * @IsGranted ("ROLE_ADMIN")
 */
class CategoryController extends AbstractController
{
    public function list_category() {
        $category = $this -> getDoctrine()->getRepository(Category::class)->findAll();
        $category_array = array();
        foreach($category as $cat){
            if($cat -> getParent() != null) {
                array_push($category_array, [$cat->getId(), $cat->getName(), $cat->getParent()->getName()]);
            }
            else {
                array_push($category_array, [$cat->getId(), $cat->getName(), 'ندارد']);
            }
        }

        return $this -> render("Admin/Category/Category.html.twig", [ 'category' => $category_array]);
    }
    public function edit_category($id) {
        $cat = $this -> getDoctrine()-> getRepository(Category::class) ->find(id);

        return $this -> render('Admin/Category/edit_category.html.twig'[]);
    }
    public function delete_category($id){
        return $this -> redirectToRoute('list_category');
    }
}