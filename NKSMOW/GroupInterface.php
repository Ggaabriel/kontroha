<?php
namespace NKSMOW;

use \DateTime;
interface GroupInterface{
    public function addStudent(Student $newStudent) :void;
    public function getStudents():array;
    public function getLeader():Leader;
    public function getSpeciality():Speciality;
    public function dismissial(string $firstName,string $lastName, Datetime $date) : void;
    public function transfer(string $firstName,string $lastName,Group $group, Datetime $date) : void;
    public function vacation(string $firstName,string $lastName, Datetime $date) : void;
    public function reestablish(string $firstName,string $lastName, Datetime $date) : void;
    public function getByBirthMonth(int $month) : array ;
    public function changeLeader(Leader $newLeader) : void;
}