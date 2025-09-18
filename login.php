<?php
$conn = mysqli_connect ("localhost", "root", "", "bajande");
if(!$conn){
    die("Connection failed");
}
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM staff WHERE email='$email' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result ) > 0 ){
    header("Location: home.html");
    exit();
} else{
    echo "Login Failed";
}

mysqli_close($conn);




?>