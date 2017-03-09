<?php

namespace rvmg\GSBBundle\Formulaires\Data;

/**
 * Description of ConnexionClass
 *
 * @author eleve
 */
class ChangeMdpClass {
    
    private $ancienMdp;
    private $nouveauMdp; 
    
    function __construct() {
        ;
    }
    
    function getAncienMdp() {
        return $this->ancienMdp;
    }

    function getNouveauMdp() {
        return $this->nouveauMdp;
    }

    function setAncienMdp($ancienMdp) {
        $this->ancienMdp = $ancienMdp;
    }

    function setNouveauMdp($nouveauMdp) {
        $this->nouveauMdp = $nouveauMdp;
    }
    
}


