<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * series
 *
 * @ORM\Table(name="series")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\seriesRepository")
 */
class series
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSaisons", type="integer")
     */
    private $nbSaisons;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return series
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return series
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set nbSaisons
     *
     * @param integer $nbSaisons
     *
     * @return series
     */
    public function setNbSaisons($nbSaisons)
    {
        $this->nbSaisons = $nbSaisons;

        return $this;
    }

    /**
     * Get nbSaisons
     *
     * @return int
     */
    public function getNbSaisons()
    {
        return $this->nbSaisons;
    }
}

