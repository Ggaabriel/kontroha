<?php
namespace NKSMOW;

use \DateTime;


class Group implements \NKSMOW\GroupInterface{
    private array $studentsArray = [];
    public function __construct(
        private string $groupName,
        private Leader $leader,
        private Datetime $yearOfFormirovaniya,
        private Speciality $speciality
    ){}

    
    public function addStudent(Student $newStudent) : void{
        $this->studentsArray[] = $newStudent;
    }
    public function getStudents() : array{
        return $this->studentsArray;
    }
    public function getLeader() : Leader{
        return $this->leader;
    }
}


