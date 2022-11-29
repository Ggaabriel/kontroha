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
    public function getSpeciality() : Speciality{
        return $this->speciality;
    }
    //добавляет статус отчислен студенту (работает ток с заглавной буквой)
    public function dismissial(string $firstName,string $lastName, Datetime $date) : void{
        foreach($this->studentsArray as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Отчислен');
                $val->addIvent(new TimeManager('dismissial', $date));
            }
        }
    }
    public function transfer(string $firstName,string $lastName,Group $group, Datetime $date) : void{
        foreach($this->studentsArray as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                unset($this->studentsArray[$k]);
                $val->addIvent(new TimeManager('transfer', $date));
                $group->addStudent($val);
            }
        }
    }
    public function vacation(string $firstName,string $lastName, Datetime $date) : void{
        foreach($this->studentsArray as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('В отпуске');
                $val->addIvent(new TimeManager('vacation', $date));
            }
        }
    }
    public function reestablish(string $firstName,string $lastName, Datetime $date) : void{
        foreach($this->studentsArray as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Обучается');
                $val->addIvent(new TimeManager('reestablish', $date));
            }
        }
    }
    public function getByBirthMonth(int $month) : array {
        return array_filter($this->studentsArray, function($student) use ($month){//use пихает моунз ниже в ретурне
            return $student->getBirthDate()->format('m') == $month;//формате это метод дэйттайм
            });
    }

    public function getByGender(string $writeGender){
        return array_filter($this->studentsArray, function($student) use ($writeGender){
            return $student->getGender() == $writeGender;
            });
    }

    public function getByAge(int $firstValue, ?int $secondValue = null){
        return array_filter($this->studentsArray, function($student) use ($firstValue, $secondValue){
            return date_format(new DateTime(),'Y') - $student->getBirthDate()->format('Y') == $firstValue;
            });
    }

    public function changeLeader(Leader $newLeader) : void
    {
        $this->leader = $newLeader;
    }
}


