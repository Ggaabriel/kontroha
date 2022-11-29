<?php

namespace NKSMOW;

use \DateTime;
class TimeManager{
    
    private string $comment;
    public function __construct(
        private string $ivent,
        private Datetime $time
    ){}

    public function getComment() : string{
        return $this->comment;
    }
    public function setComment(string $comm) : void{
        $this->comment = $comm;
    }
}

//класс хранящий в себе события при нужде можно добавить комментарий