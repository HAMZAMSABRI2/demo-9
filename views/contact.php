<?php


class Etudiant {
    public string $first_name;

    public string $last_name;

    public string $filiere;



    public function __construct($f , $l)
    {
        $this->first_name = $f;

        $this->last_name = $l;
    }


    public function getFullName(){
        return $this->first_name . '' .$this->last_name;
    }


    
    
    
}
$e1 = new Etudiant("Hamza" , "Msabri");

$e2 = new Etudiant("Majdouline" , "Msabri");


echo $e1->getFullName();