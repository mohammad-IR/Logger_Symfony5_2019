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
        $categories  = $this->entityManager -> getRepository(Category::class) -> findAll();
        $parent = array();
        foreach ($categories as $category){
                if ($category->getParent() != null) {
                    try {
                        array_push($parent[$category->getParent() ->getName()], $category->getName());
                    }
                    catch (\Exception $exception){
                        $parent[$category->getParent() ->getName()] = [];
                        array_push($parent[$category->getParent() ->getName()] , $category->getName());
                    }
                }
                else {
                    if ($category->getParent() == null)
                    $parent[$category->getName()] = $category->getName();
                }
            }
        return $parent;
    }
}