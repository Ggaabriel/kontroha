<?php
namespace NKSMOW;

use \DateTime;

class Student extends \college2\Entities\Human{
    public function __construct( 
        $firstName,
        $lastName,
        $birthDate,
        $gender,
        // private Speciality $speciality,
        private Group $group,
        // private Datetime $spawnYear

    ){
        parent::__construct(
            $firstName,
            $lastName,
            $birthDate,
            $gender
        );
        
    }
    
}   



