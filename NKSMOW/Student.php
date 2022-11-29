<?php
namespace NKSMOW;

use \DateTime;

class Student extends \college2\Entities\Human{
    private string $status='Обучается';
    private ?array $ivents = null;

    public function __construct( 
        $firstName,
        $lastName,
        $birthDate,
        $gender,
        private Speciality $speciality,
        private Group $group,
        private Datetime $spawnYear,
        

    ){
        parent::__construct(
            $firstName,
            $lastName,
            $birthDate,
            $gender
        );
        
    }

    public function getGroup(): Group{
        return $this->group;
    }
    public function getYearOfComing(): DateTime{
        return $this->spawnYear;
    }
    public function setStatus(string $newStatus){
        $this->status = $newStatus;
    }
    public function getStatus(){
           return $this->status; 
    }
    public function addIvent(TimeManager $ivent) : void{
        $this->ivents[] = $ivent;
    }

    public function getIvents(){
        if($this->ivents == null){
            return null;
        }
        else{
            return $this->ivents;
        }
        
    }


    
}   



