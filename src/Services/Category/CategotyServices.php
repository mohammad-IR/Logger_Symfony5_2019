<?php


namespace App\Services\Category;


use App\Entity\Category;
use App\Entity\Package;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function PHPUnit\Framework\returnCallback;

class CategotyServices extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function category(){
        $categories = $this->getDoctrine()->getRepository(Category::class)->findBy(['status'=>true]);
        $parent = array();
        foreach ($categories  as $category) {
            if ($category->getParent() == null) {
                if ($category->getCategories() != null) {
                    array_push($parent, [$category->getName() =>$this->searchig_parent($category)]);
                }
                else {
                    array_push($parent, [$category->getName() =>$category]);
                }
            }
        }
        return $parent;
    }
    private function searchig_parent(Category $category) {
        $parent = array();
        foreach ($category->getCategories() as $item) {
            if ($item->getCategories() != null) {
                array_push($parent, $this->searchig_parent($item));
            }
            else {
                array_push($parent, $item);
            }
        }
        return $parent;
    }
}