<?php

namespace Tuto\AnimeauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuto\AnimeauxBundle\Entity\voiture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tuto\AnimeauxBundle\Entity\voitureRepository")
 */
class voiture
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $model
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var string $gamme
     *
     * @ORM\Column(name="gamme", type="string", length=255)
     */
    private $gamme;

    /**
     * @var datetime $date_fabrication
     *
     * @ORM\Column(name="date_fabrication", type="datetime")
     */
    private $date_fabrication;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set gamme
     *
     * @param string $gamme
     */
    public function setGamme($gamme)
    {
        $this->gamme = $gamme;
    }

    /**
     * Get gamme
     *
     * @return string 
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    /**
     * Set date_fabrication
     *
     * @param datetime $dateFabrication
     */
    public function setDateFabrication($dateFabrication)
    {
        $this->date_fabrication = $dateFabrication;
    }

    /**
     * Get date_fabrication
     *
     * @return datetime 
     */
    public function getDateFabrication()
    {
        return $this->date_fabrication;
    }
}