<?php

namespace Formation\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity
 */
class Inscription
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
     * @ORM\Column(name="date_inscri", type="string", length=255)
     */
    private $dateInscri;


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
     * Set dateInscri
     *
     * @param string $dateInscri
     * @return Inscription
     */
    public function setDateInscri($dateInscri)
    {
        $this->dateInscri = $dateInscri;

        return $this;
    }

    /**
     * Get dateInscri
     *
     * @return string 
     */
    public function getDateInscri()
    {
        return $this->dateInscri;
    }
}
