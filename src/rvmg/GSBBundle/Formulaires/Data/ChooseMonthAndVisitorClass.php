<?php

namespace rvmg\GSBBundle\Formulaires\Data;

/**
 * Description of ChooseMonthAndVisitorClass
 *
 * @author Romain Venel & Maxime Genevier
 * 
 * Class that's define form's constants
 */
class ChooseMonthAndVisitorClass {
    
    private $visitor;
    private $month;
    
    function __construct() {
        ;
    }

    function getVisitor() {
        return $this->visitor;
    }

    function getMonth() {
        return $this->month;
    }

    function setVisitor($visitor) {
        $this->visitor = $visitor;
    }

    function setMonth($month) {
        $this->month = $month;
    }

}
