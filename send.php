<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "there are some problem while connecting the database";
}

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$qry = "INSERT INTO `table`(`name`, `email`, `gender`, `date`) VALUES ('$name', '$email', '$gender', CURRENT_TIME())";
$insert = mysqli_query($con,$qry);
if(!$insert){
    echo "there are some problem while inserting data";
}
else{
    echo "data inserted";
}

function redirect() {
    header('Location: http://localhost/form-2/welcome.php');
    die();
}
redirect();

?>