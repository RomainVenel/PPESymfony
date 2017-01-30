<?php

namespace rvmg\GSBBundle\Formulaires\Data;

/**
 * Description of FollowClass
 *
 * @author Romain Venel & Maxime Genevier
 */
class FollowClass {
    
    private $fichefrais;
    
    function __construct() {
        ;
    }
    
    function getFichefrais() {
        return $this->fichefrais;
    }

    function setFichefrais($fichefrais) {
        $this->fichefrais = $fichefrais;
    }

}
