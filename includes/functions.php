<?php

//10
function sayHello()
{

    $prix = 200;

    $prix_red = $prix - (15 / 100) * $prix;

    $tva =  0.2 * $prix;
    if ($prix > 200) {
        echo $prix_red + $tva;
    } else {
        echo $prix + $tva;
    }
}
//11

function photcopie()
{
    $page = 12;

    if ($page <= 10) {
        echo $page * 0.25;
    } elseif ($page <= 20) {
        echo (0.25 * 10) + ($page - 10) * 0.20;
    } else {
        echo (0.25 * 10) + (0.20 * 10) + ($page - 20) * 0.10;
    }
}
//12
function age()
{
    $age = 13;

    if ($age == 7 || $age == 6) {
        echo 'POUSSIN';
    } else if ($age == 8 || $age == 9) {
        echo 'pupille';
    } elseif ($age == 10 || $age == 11) {
        echo 'minime';
    } elseif ($age >= 12) {
        echo 'cadet';
    } else {
        echo 'cet age ne correspond à aucun champs désolé';
    }
}
//13
function mois()
{
    $mois = 1;

    if ($mois == 1) {
        echo 'janvier';
    } elseif ($mois == 2) {
        echo 'février';
    } elseif ($mois == 3) {
        echo 'mars';
    } elseif ($mois == 4) {
        echo 'avril';
    } elseif ($mois == 5) {
        echo 'mai';
    } elseif ($mois == 6) {
        echo 'juin';
    } elseif ($mois == 7) {
        echo 'juillet';
    } elseif ($mois == 8) {
        echo 'août';
    } elseif ($mois == 9) {
        echo 'septembre';
    } elseif ($mois == 10) {
        echo 'octobre';
    } elseif ($mois == 11) {
        echo 'novembre';
    } elseif ($mois == 12) {
        echo 'Décembre';
    } else {
        echo 'Le mois ne correspond pas dans la logique ';
    }
}

//14

function boucle()
{
    $a = 0;
    while ($a < 10) {
        $a++;
        echo '<br>';
        echo 'Bonsoir';
    }
}

//15
function somme()
{
    $a = 0;
    $i = 0;

    while ($i < 13) {

        echo '<br>';
        $i++;
        echo  $a += $i;
    }
}
//16
function somme2()
{
    $a = 0;
    $i = 0;
    $number = 13;
    while ($i < $number) {

        echo '<br>';
        $i++;
        echo  $a += $i;
    }
}
//17
function boucle1()
{
    for ($i = 0; $i < 10; $i++) {
        echo 'bonjour';
    }
}

//18
function somme1()
{
    $a = 0;
    for ($i = 0; $i <= 10; $i++) {
        echo '<br>';
        echo  $a += $i;
    }
}

//19
function somme5()
{
    $a = 0;
    $number = 13;
    for ($i = 0; $i <= $number; $i++) {
        echo '<br>';
        echo  $a += $i;
    }
}

//20
function somme7()
{
    $a = 0;
    for ($i = 0; $i <= 10; $i++) {
        echo '<br>';
        echo $a * 5;
        $a++;
    }
}

function dump($array)
{

    echo '<pre>';
    var_dump($_SERVER);
    echo '<pre/>';
}

function nav_link($uri, $page_name)
{
    
    $active =  $_SERVER['REQUEST_URI']===$uri ? 'active' : "";
    return '<li class="nav-item">
    <a class="nav-link '.$active.'"  href="'.$uri.'">'.$page_name.'</a>
</li>';
}
