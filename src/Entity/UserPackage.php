<?php

namespace App\Entity;

use App\Repository\UserPackageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserPackageRepository::class)
 */
class UserPackage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userPackages")
     */
    private $name_user;

    /**
     * @ORM\ManyToOne(targetEntity=Package::class, inversedBy="userPackages")
     */
    private $name_package;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameUser(): ?User
    {
        return $this->name_user;
    }

    public function setNameUser(?User $name_user): self
    {
        $this->name_user = $name_user;

        return $this;
    }

    public function getNamePackage(): ?Package
    {
        return $this->name_package;
    }

    public function setNamePackage(?Package $name_package): self
    {
        $this->name_package = $name_package;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
