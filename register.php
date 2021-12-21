<?php
session_start();

require "connection.php";

if(!empty($_POST['user'])){
    $user = $_POST['user']; 
}else{
    $_SESSION['insert_data'] = true;
    header("Location: index.php");
    exit();
}
if(!empty($_POST['email'])){ 
    $email = $_POST['email'];
}else{
    $_SESSION['insert_data'] = true;
    header("Location: index.php");
    exit();
} 
if(!empty($_POST['phone'])){
     $phone = $_POST['phone'];
}else{
    $_SESSION['insert_data'] = true;
    header("Location: index.php");
    exit();
}
if(!empty($_POST['password'])){
     $pasw = md5($_POST['password']); 
}else{
    $_SESSION['insert_data'] = true;
    header("Location: index.php");
    exit();
}

$query = $pdo->prepare("select count(*) as total from register where nameRegister = '$user' ");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);

if($row['total'] == 1){
    $_SESSION['user_already'] = true;
    header("Location: index.php");
    exit();
}
$sql = $pdo->prepare("INSERT INTO register(nameRegister,passwRegister, phoneRegister, emailRegister) VALUES('$user', '$pasw', '$phone', '$email')");
if($sql->execute() === true){
    $_SESSION['register_successful'] = true;
    header("Location: index.php");
}

    
