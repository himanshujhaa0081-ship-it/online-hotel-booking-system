<?php
include "config.php";
$name =$_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users(name,email,password)
        VALUES('$name','$email','$password')";

if($conn->query($sql)){
    echo "Registered Successfully";
}else{
    echo "Error";
}
?>


<h2>Register</h2>

<form method="POST">
    <input name="name" placeholder="Name" required><br><br>
    <input name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button name="register">Register</button>
</form>