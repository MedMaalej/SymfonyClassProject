<?php

namespace Formation\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
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
     * @ORM\Column(name="nom_etud", type="string", length=255)
     */
    private $nomEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_etud", type="string", length=255)
     */
    private $prenomEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_etud", type="string", length=255)
     */
    private $mailEtud;


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
     * Set nomEtud
     *
     * @param string $nomEtud
     * @return Etudiant
     */
    public function setNomEtud($nomEtud)
    {
        $this->nomEtud = $nomEtud;

        return $this;
    }

    /**
     * Get nomEtud
     *
     * @return string 
     */
    public function getNomEtud()
    {
        return $this->nomEtud;
    }

    /**
     * Set prenomEtud
     *
     * @param string $prenomEtud
     * @return Etudiant
     */
    public function setPrenomEtud($prenomEtud)
    {
        $this->prenomEtud = $prenomEtud;

        return $this;
    }

    /**
     * Get prenomEtud
     *
     * @return string 
     */
    public function getPrenomEtud()
    {
        return $this->prenomEtud;
    }

    /**
     * Set mailEtud
     *
     * @param string $mailEtud
     * @return Etudiant
     */
    public function setMailEtud($mailEtud)
    {
        $this->mailEtud = $mailEtud;

        return $this;
    }

    /**
     * Get mailEtud
     *
     * @return string 
     */
    public function getMailEtud()
    {
        return $this->mailEtud;
    }
}
