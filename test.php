<?php

// use Ecole\Etudiant as EcoleEtudiant;
// use Formation\Etudiant;

// require_once 'class/Ecole/Etudiant.php';

// require_once 'class/Formation/Etudiant.php';

// require_once 'includes/functions.php';

// $et_formation = new Etudiant();

// $e3 = new EcoleEtudiant("Hamza", "Hamza");

// var_dump($e3);

// var_dump($et_formation);


spl_autoload_register(function($class){
   
    
    $filename = './class/Autoload/Autoload.php';

    if(file_exists( $filename)){
       require $filename;


    }

    // else {
    //     echo "NO";
    // }


});
// 


$autoload = new Autoload("HAMZA");

echo $autoload->getColor();


