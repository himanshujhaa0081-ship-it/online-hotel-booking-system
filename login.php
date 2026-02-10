<?php
include "config.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if($result->num_rows > 0){
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        echo "Login Success";
    } else {
        echo "Wrong Password";
    }
}else{
    echo "User not found";
}
?>
<h2>Login</h2>

<form method="POST">
    <input name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button name="login">Login</button>
</form>

<p><a href="register.php">Create account</a></p>