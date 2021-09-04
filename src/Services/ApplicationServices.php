<?php


namespace App\Services;


use App\Entity\Application;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class ApplicationServices
{
    private EntityManagerInterface $manger;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->manger = $entityManager;
    }
    public function list_App(User $user) {
        return $this -> manger -> getRepository(Application::class) -> findBy(['user' => $user]);
    }


}