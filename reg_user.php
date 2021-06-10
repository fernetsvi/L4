<?php
session_start();
if(!isset($_SESSION['id'])) {
    if($_POST['name']!=null) {
        $name = $_POST['name'];
    } 
    else {
        die("Ви не ввели ім'я");
    }
    if($_POST['email']!=null) {
        $email = $_POST['email'];
    } 
    else {
        die("Ви не ввели пошту");
    }
    if($_POST['phone']!=null) {
        $phone = $_POST['phone'];
    } 
    else {
        die("Ви не ввели телефон");
    }
    if($_POST['password']!=null) 
        {$password = $_POST['password'];
    }
    else {
        die("Ви не ввели пароль");
    }
    include("db.php");
    $check= $connect->query("SELECT * FROM Users WHERE name='$name'");
    $myrow = $check->fetch_array();
    if ($myrow['id']) { 
        die("Такий користувач існує.");
    }
    else{
        $connect->query("INSERT INTO Users (name,password,phone_num,email,question) VALUES('$name','$password','$phone','$email','NOTHING')");
    }
}
header("Location: index.php");
?>
