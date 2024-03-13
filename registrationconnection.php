<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
//Database connection
$conn = new mysqli('localhost', 'root', '', 'project_db');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into project_table( firstName, lastName, email, password) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
    $stmt->execute();
    header("Location: login.html ?error=Incorect User name or password");

                exit();
    $stmt->close();
    $conn->close();

}



?>