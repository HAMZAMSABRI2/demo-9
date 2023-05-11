
<?php 

$conn = new mysqli('localhost','root','','page'); 
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}

$nom = $_POST['nom'];


$email = $_POST['email'];


$pass = $_POST['password'];;


$password = password_hash($pass, PASSWORD_BCRYPT);



$sql = "INSERT INTO form (nom, email, password)
VALUES ('$nom', '$email', '$password')";
    

    


    if($conn->query($sql) === TRUE){
        echo "data inserted";
    }
    else{
        echo "Error" ;
    }