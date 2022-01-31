<?php

namespace App\Entity;

use App\Repository\ReponsesQuestionnaireGeneralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponsesQuestionnaireGeneralRepository::class)
 */
class ReponsesQuestionnaireGeneral
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Question1;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Question2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Question3;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $Question4 = [];

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Question5;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Question6;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Question7;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Question8;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $Question9 = [];

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="reponsesQuestionnaireGeneral", cascade={"persist", "remove"})
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion1(): ?int
    {
        return $this->Question1;
    }

    public function setQuestion1(?int $Question1): self
    {
        $this->Question1 = $Question1;

        return $this;
    }

    public function getQuestion2(): ?bool
    {
        return $this->Question2;
    }

    public function setQuestion2(?bool $Question2): self
    {
        $this->Question2 = $Question2;

        return $this;
    }

    public function getQuestion3(): ?bool
    {
        return $this->Question3;
    }

    public function setQuestion3(?bool $Question3): self
    {
        $this->Question3 = $Question3;

        return $this;
    }

    public function getQuestion4(): ?array
    {
        return $this->Question4;
    }

    public function setQuestion4(?array $Question4): self
    {
        $this->Question4 = $Question4;

        return $this;
    }

    public function getQuestion5(): ?bool
    {
        return $this->Question5;
    }

    public function setQuestion5(?bool $Question5): self
    {
        $this->Question5 = $Question5;

        return $this;
    }

    public function getQuestion6(): ?bool
    {
        return $this->Question6;
    }

    public function setQuestion6(?bool $Question6): self
    {
        $this->Question6 = $Question6;

        return $this;
    }

    public function getQuestion7(): ?bool
    {
        return $this->Question7;
    }

    public function setQuestion7(?bool $Question7): self
    {
        $this->Question7 = $Question7;

        return $this;
    }

    public function getQuestion8(): ?bool
    {
        return $this->Question8;
    }

    public function setQuestion8(?bool $Question8): self
    {
        $this->Question8 = $Question8;

        return $this;
    }

    public function getQuestion9(): ?array
    {
        return $this->Question9;
    }

    public function setQuestion9(?array $Question9): self
    {
        $this->Question9 = $Question9;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
