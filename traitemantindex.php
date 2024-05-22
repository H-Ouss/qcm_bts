<?php 
session_start();
$id = mysqli_connect("localhost:3306", "root", "", "qcmv2");

include("index.php");
if(isset($_POST["button"])){
    $name = $_POST["name"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdp2"];
    $mail = $_POST["mail"];

$req = "INSERT INTO users (nom,email, mdp) VALUES ('$name', '$mail', '$mdp')";
$res = mysqli_query($id,$req);
}

header("Location: connextion.php");



?>