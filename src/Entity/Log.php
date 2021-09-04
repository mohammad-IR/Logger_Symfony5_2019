<?php

namespace App\Entity;

use App\Repository\LoggerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use PHPUnit\Util\Json;

/**
 * @ORM\Entity(repositoryClass=LoggerRepository::class)
 * @ORM\Table(name = "log")
 */
class Log
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $type;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Application::class, inversedBy="loggers")
     * @ORM\JoinColumn (onDelete="CASCADE")
     */
    private $app;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="loggers")
     */
    private $user;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $parameters = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
    

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getApp(): ?Application
    {
        return $this->app;
    }

    public function setApp(?Application $app): self
    {
        $this->app = $app;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    public function setParameters(?Object $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }


}
