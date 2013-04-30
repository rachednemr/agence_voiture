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
     * @ORM\Column(name="gamme", type="string", length=255,nullable=true)
     */
    private $gamme;
    

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set date
     *
     * @param datetime $date
     */
     function __construct()
    {
         
         $this->date =new \DateTime();
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }
}