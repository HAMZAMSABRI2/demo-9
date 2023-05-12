<?php
require_once 'vendor/autoload.php';

use src\Ecole\Etudiant as EcoleEtudiant;
use src\Formation\Etudiant;

require_once 'includes/functions.php';

$et_formation = new Etudiant();

$e3 = new EcoleEtudiant("Hamza", "Hamza");

var_dump($e3);

var_dump($et_formation);




// spl_autoload_register(function($class){
   
    
//     $filename = './class/Autoload/Autoload.php';

//     if(file_exists( $filename)){
//        require $filename;


//     }

//     else {
//         echo "NO";
//     }


// });


// $autoload = new Autoload("HAMZA");

// echo $autoload->getColor();
