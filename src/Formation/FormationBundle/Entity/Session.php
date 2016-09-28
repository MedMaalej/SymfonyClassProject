<?php

namespace Formation\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
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
     * @ORM\Column(name="date_session", type="string", length=255)
     */
    private $dateSession;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_session", type="integer")
     */
    private $prixSession;


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
     * Set dateSession
     *
     * @param string $dateSession
     * @return Session
     */
    public function setDateSession($dateSession)
    {
        $this->dateSession = $dateSession;

        return $this;
    }

    /**
     * Get dateSession
     *
     * @return string 
     */
    public function getDateSession()
    {
        return $this->dateSession;
    }

    /**
     * Set prixSession
     *
     * @param integer $prixSession
     * @return Session
     */
    public function setPrixSession($prixSession)
    {
        $this->prixSession = $prixSession;

        return $this;
    }

    /**
     * Get prixSession
     *
     * @return integer 
     */
    public function getPrixSession()
    {
        return $this->prixSession;
    }
}
