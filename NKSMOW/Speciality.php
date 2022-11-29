<?php
namespace NKSMOW;

use \DateTime;

class Speciality implements \NKSMOW\SpecialityInterface{
    public function __construct(
        private string $name,
        private int $srokUchebi,
        private int $bezPlatno,
        private int $platno,
        private string $uchebaLVL
    ){}
}