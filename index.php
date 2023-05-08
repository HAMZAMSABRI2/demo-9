<?php



include 'includes/functions.php';






include_once 'views/partials/header.php';


$uri = $_SERVER['REQUEST_URI'];

echo($uri);



switch ($uri) {
    case '/':
        include 'views/home.php';
        break;

    case '/contact':
        include 'views/contact.php';
        break;

    default:
        echo "404 NOT FOUND";
        break;
}


include_once 'views/partials/footer.php';

?>

