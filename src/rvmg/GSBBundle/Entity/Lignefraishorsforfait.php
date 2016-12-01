<?php

namespace rvmg\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraishorsforfait
 *
 * @ORM\Table(name="LigneFraisHorsForfait", indexes={@ORM\Index(name="idVisiteur", columns={"idVisiteur", "mois"})})
 * @ORM\Entity
 */
class Lignefraishorsforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLigneFraisHorsForfait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlignefraishorsforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepense", type="date", nullable=true)
     */
    private $datedepense;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="idVisiteur"),
     *   @ORM\JoinColumn(name="mois", referencedColumnName="mois")
     * })
     */
    private $idvisiteur;



    /**
     * Get idlignefraishorsforfait
     *
     * @return integer 
     */
    public function getIdlignefraishorsforfait()
    {
        return $this->idlignefraishorsforfait;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Lignefraishorsforfait
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
     * Set datedepense
     *
     * @param \DateTime $datedepense
     * @return Lignefraishorsforfait
     */
    public function setDatedepense($datedepense)
    {
        $this->datedepense = $datedepense;

        return $this;
    }

    /**
     * Get datedepense
     *
     * @return \DateTime 
     */
    public function getDatedepense()
    {
        return $this->datedepense;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Lignefraishorsforfait
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
     * Set idvisiteur
     *
     * @param \rvmg\GSBBundle\Entity\Fichefrais $idvisiteur
     * @return Lignefraishorsforfait
     */
    public function setIdvisiteur(\rvmg\GSBBundle\Entity\Fichefrais $idvisiteur = null)
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    /**
     * Get idvisiteur
     *
     * @return \rvmg\GSBBundle\Entity\Fichefrais 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }
}
