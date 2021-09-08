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
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        foreach ($categories  as $category) {
            foreach ($category)
        }
    }
    private function searchig_parent(Category $category) {

    }
}