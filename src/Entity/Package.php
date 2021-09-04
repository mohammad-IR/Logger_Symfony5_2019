<?php

namespace App\Entity;

use App\Repository\PackageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PackageRepository::class)
 */
class Package
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique = true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $limit_report;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_app;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity=UserPackage::class, mappedBy="name_package")
     */
    private $userPackages;

    public function __construct()
    {
        $this->userPackages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getLimitReport(): ?int
    {
        return $this->limit_report;
    }

    public function setLimitReport(int $limit_report): self
    {
        $this->limit_report = $limit_report;

        return $this;
    }

    public function getNumberApp(): ?int
    {
        return $this->number_app;
    }

    public function setNumberApp(int $number_app): self
    {
        $this->number_app = $number_app;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|UserPackage[]
     */
    public function getUserPackages(): Collection
    {
        return $this->userPackages;
    }

    public function addUserPackage(UserPackage $userPackage): self
    {
        if (!$this->userPackages->contains($userPackage)) {
            $this->userPackages[] = $userPackage;
            $userPackage->setNamePackage($this);
        }

        return $this;
    }

    public function removeUserPackage(UserPackage $userPackage): self
    {
        if ($this->userPackages->removeElement($userPackage)) {
            // set the owning side to null (unless already changed)
            if ($userPackage->getNamePackage() === $this) {
                $userPackage->setNamePackage(null);
            }
        }

        return $this;
    }
}
