<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 */
class Ville
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codePostal;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Lieu", mappedBy="ville")
     */
    private $lieux;

    public function __construct()
    {
        $this->lieux = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sortie", mappedBy="ville")
     */
    private $sortiesEnVille;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * @param mixed $lieux
     */
    public function setLieux($lieux): void
    {
        $this->lieux = $lieux;
    }

    /**
     * @return mixed
     */
    public function getSortiesEnVille()
    {
        return $this->sortiesEnVille;
    }

    /**
     * @param mixed $sortiesEnVille
     */
    public function setSortiesEnVille($sortiesEnVille): void
    {
        $this->sortiesEnVille = $sortiesEnVille;
    }

    public function __toString()
    {
        return $this->nom;
    }

}
