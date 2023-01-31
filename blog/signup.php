<?php


include "./db.php";

$namef = $_POST['fname'];
$names = $_POST['lname'];
$emai = $_POST['email'];
$no = $_POST['number'];
$passwd = $_POST['password'];
$dob = $_POST['day'];
$city = $_POST['city'];
$cbox = $_POST['cbox'];

if($cbox != 'true'){
    header("location: index.php?error = Agree to the terms and condition");
    exit();
} else{
    $query = "INSERT INTO users (firstname, lastname, email, num, passwrd, dy, city) 
    VALUE('$namef', '$names', '$emai', '$no', '$passwd', '$dob', '$city')";

    mysqli_query($con, $query);
    header("location: index3.php"); 
}

?>
