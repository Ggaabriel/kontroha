<?php
namespace NKSMOW;

use \DateTime;

class Speciality implements \NKSMOW\SpecialityInterface{
    public function __construct(
        private string $name,
        private int $srokUchebi,
        private string $uchebaLVL
    ){}
    public function getName() : string{
        return $this->name;  
    }

    public function getSrokUchebi() : int{
        return $this->srokUchebi; 
    }

    public function getUchebaLVL() : string{
        return $this->uchebaLVL;
    }
}