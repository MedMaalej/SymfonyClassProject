<?php

namespace Formation\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_form", type="string", length=255)
     */
    private $nomForm;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_form", type="string", length=255)
     */
    private $descForm;

    /**
     * @var string
     *
     * @ORM\Column(name="nbr_heure", type="string", length=255)
     */
    private $nbrHeure;


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
     * Set nomForm
     *
     * @param string $nomForm
     * @return Formation
     */
    public function setNomForm($nomForm)
    {
        $this->nomForm = $nomForm;

        return $this;
    }

    /**
     * Get nomForm
     *
     * @return string 
     */
    public function getNomForm()
    {
        return $this->nomForm;
    }

    /**
     * Set descForm
     *
     * @param string $descForm
     * @return Formation
     */
    public function setDescForm($descForm)
    {
        $this->descForm = $descForm;

        return $this;
    }

    /**
     * Get descForm
     *
     * @return string 
     */
    public function getDescForm()
    {
        return $this->descForm;
    }

    /**
     * Set nbrHeure
     *
     * @param string $nbrHeure
     * @return Formation
     */
    public function setNbrHeure($nbrHeure)
    {
        $this->nbrHeure = $nbrHeure;

        return $this;
    }

    /**
     * Get nbrHeure
     *
     * @return string 
     */
    public function getNbrHeure()
    {
        return $this->nbrHeure;
    }
}
