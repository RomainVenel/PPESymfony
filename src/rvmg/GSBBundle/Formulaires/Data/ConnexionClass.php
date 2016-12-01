<?php

namespace rvmg\GSBBundle\Formulaires\Data;

/**
 * Description of ConnexionClass
 *
 * @author eleve
 */
class ConnexionClass {
    
    private $login;
    private $mdp;
    private $profil; 
    
    function __construct() {
        ;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getProfil() {
        return $this->profil;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setProfil($profil) {
        $this->profil = $profil;
    }
    
}
