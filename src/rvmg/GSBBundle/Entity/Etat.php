<?php

namespace rvmg\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="Etat")
 * @ORM\Entity(repositoryClass="rvmg\GSBBundle\Entity\EtatRepository")
 */
class Etat
{
    /**
     * @var string
     *
     * @ORM\Column(name="idEtat", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idetat;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=30, nullable=true)
     */
    private $libelle;



    /**
     * Get idetat
     *
     * @return string 
     */
    public function getIdetat()
    {
        return $this->idetat;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Etat
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
