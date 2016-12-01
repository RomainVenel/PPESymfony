<?php

namespace rvmg\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraisforfait
 *
 * @ORM\Table(name="FraisForfait")
 * @ORM\Entity
 */
class Fraisforfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="idFraisForfait", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfraisforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=30, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fichefrais", mappedBy="idfraisforfait")
     */
    private $idvisiteur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idvisiteur = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idfraisforfait
     *
     * @return string 
     */
    public function getIdfraisforfait()
    {
        return $this->idfraisforfait;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Fraisforfait
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

    /**
     * Set montant
     *
     * @param string $montant
     * @return Fraisforfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Add idvisiteur
     *
     * @param \rvmg\GSBBundle\Entity\Fichefrais $idvisiteur
     * @return Fraisforfait
     */
    public function addIdvisiteur(\rvmg\GSBBundle\Entity\Fichefrais $idvisiteur)
    {
        $this->idvisiteur[] = $idvisiteur;

        return $this;
    }

    /**
     * Remove idvisiteur
     *
     * @param \rvmg\GSBBundle\Entity\Fichefrais $idvisiteur
     */
    public function removeIdvisiteur(\rvmg\GSBBundle\Entity\Fichefrais $idvisiteur)
    {
        $this->idvisiteur->removeElement($idvisiteur);
    }

    /**
     * Get idvisiteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }
}
