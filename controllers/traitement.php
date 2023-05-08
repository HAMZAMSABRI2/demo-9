
<?php 

$conn = new mysqli('localhost','root','','page'); 
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}

$nom = $_POST['nom'];


$email = $_POST['email'];


$passwords = "monMotDePasseSecret";


$password = password_hash($passwords, PASSWORD_BCRYPT);



$sql = "INSERT INTO form (nom, email, password)
VALUES ('$nom', '$email', '$password')";
    $query = $conn->prepare($sql);






    

    


    if($conn->query($sql) === TRUE){
        echo "data inserted";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }