<?php
namespace NKSMOW;

use \DateTime;

interface SpecialityInterface{
    public function getName() : string;

    public function getSrokUchebi() : int;

    // public function getBezPlatno() : int;

    // public function setBezPlatno() : int;

    // public function getPlatno() : int;

    // public function setPlatno() : int;

    // public function skokaVsegoMest() : int;
    
    public function getUchebaLVL() : string;
}

//я не хочу реализововывать методы в коментариях :(
    //(и не буду)
        //:)