<?php
session_start();
$id = mysqli_connect("localhost:3306", "root", "", "qcmv2");

include("connextion.php");

if (isset($_POST["button"])) {
    $mdp = $_POST["mdp"];
    $mail = $_POST["mail"];

    try {
        $req = "INSERT INTO users (email, mdp) VALUES ('$mail', '$mdp')";
        $res = mysqli_query($id,$req);
    } catch(\Exception $e) {
        echo $e->getMessage();
    }

    if ($res) {
        // L'insertion dans la base de données a réussi
        echo "Insertion réussie. Redirection...";
        header("Location:QCM.php");
    } else {
        // L'insertion a échoué, peut-être afficher un message d'erreur
        echo "Erreur lors de l'insertion. Redirection...";
        header("Location: connextion.php?error=$res");
        exit();
    }
}
?>