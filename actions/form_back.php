<?php
session_start();
require("fonction.php");
if (isset($_POST['validate'])) {
    if (!empty($_POST['sexe']) && !empty($_POST['poids'])  && !empty($_POST['taille']) && !empty($_POST['age']) && !empty($_POST['activité'])) {

        $sexe = $_POST['sexe'];
        $poids = $_POST['poids'];
        $taille = $_POST['taille'];
        $age = $_POST['age'];
        $activité = $_POST['activité'];


        if ($sexe == "femme") {
            $formule = 10 * $poids + 6.25 * $taille - 5 * $age - 161;
        } else if ($sexe == "homme") {
            $formule = 10 * $poids + 6.25 * $taille - 5 * $age + 5;
        }

        if ($activité == "sédentaire") {
            $totalCalorique = $formule * 1.2;
        } else if ($activité == "actif_léger") {
            $totalCalorique = $formule * 1.375;
        } else if ($activité == "actif_modéré") {
            $totalCalorique = $formule * 1.55;
        } else if ($activité == "très_actif") {
            $totalCalorique = $formule * 1.725;
        } else if ($activité == "super_actif") {
            $totalCalorique = $formule * 1.9;
        }
        $_SESSION['sexe'] = $sexe;
        $_SESSION['taille'] = $taille;
        $_SESSION['poids'] = $poids;
        $_SESSION['age'] = $age;
        $_SESSION['activité'] = $activité;
        $_SESSION['formule'] = $formule;
        $_SESSION['calories'] = $totalCalorique;

        header("location: ../index.php?success=validé");
    } else {
        header("location: ../index.php?error=champs");
    }
}
