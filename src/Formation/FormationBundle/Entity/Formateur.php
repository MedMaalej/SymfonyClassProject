<?php

namespace Formation\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity
 */
class Formateur
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
     * @ORM\Column(name="nom_formateur", type="string", length=255)
     */
    private $nomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_formateur", type="string", length=255)
     */
    private $prenomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_formateur", type="string", length=255)
     */
    private $mailFormateur;


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
     * Set nomFormateur
     *
     * @param string $nomFormateur
     * @return Formateur
     */
    public function setNomFormateur($nomFormateur)
    {
        $this->nomFormateur = $nomFormateur;

        return $this;
    }

    /**
     * Get nomFormateur
     *
     * @return string 
     */
    public function getNomFormateur()
    {
        return $this->nomFormateur;
    }

    /**
     * Set prenomFormateur
     *
     * @param string $prenomFormateur
     * @return Formateur
     */
    public function setPrenomFormateur($prenomFormateur)
    {
        $this->prenomFormateur = $prenomFormateur;

        return $this;
    }

    /**
     * Get prenomFormateur
     *
     * @return string 
     */
    public function getPrenomFormateur()
    {
        return $this->prenomFormateur;
    }

    /**
     * Set mailFormateur
     *
     * @param string $mailFormateur
     * @return Formateur
     */
    public function setMailFormateur($mailFormateur)
    {
        $this->mailFormateur = $mailFormateur;

        return $this;
    }

    /**
     * Get mailFormateur
     *
     * @return string 
     */
    public function getMailFormateur()
    {
        return $this->mailFormateur;
    }
}
