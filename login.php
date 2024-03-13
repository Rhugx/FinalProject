<html>


<body>
<div class="container">
<?php
if(isset($_POST["login"])){
$email = $_POST['email'];
$password = $_POST['password'];
 require_once "registrationconnection.php";
 $sql = "SELECT * FROM username WHERE email = '$email'";
 $result = mysqli_query($conn , $sql);
 if ($username)
}
        <h2>Login</h2>
        <form action="login.php" method="post">
<div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

<div class="form-group">
                <label for="password">First Name:</label>
                <input type="password" id="password" name="password" required>
            





?>
</body>
</html>