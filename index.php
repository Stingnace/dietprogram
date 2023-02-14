<?php
require("includes/header.php");
require("includes/navbar.php");
require("actions/form_back.php");

if (isset($_GET['objectif']) && $_GET['objectif'] == "perte")

    // REPARTITION DES MACROS PAR DEFAUT
    $proteines = $_SESSION['calories'] * 0.25;
$glucides = $_SESSION['calories'] * 0.55;
$lipides = $_SESSION['calories'] * 0.2;
$part_proteines = $proteines / 4;
$part_glucides = $glucides / 4;
$part_lipides = $lipides / 9;

// REPARTITION DES MACROS POUR PERTE DE POIDS
$calories_perte = $_SESSION['calories'] * 0.75;
$proteines_perte = $calories_perte * 0.25;
$glucides = $calories_perte * 0.55;
$lipides_perte = $calories_perte * 0.2;
$part_proteines_perte = $proteines_perte / 4;
$part_glucides_perte = $glucides_perte / 4;
$part_lipides_perte = $lipides_perte / 9;

// REPARTITION DES MACROS POUR GAINS DE POIDS
$calories_gain = $_SESSION['calories'] * 1.25;
$proteines_gain = $calories_gain * 0.25;
$glucides_gain = $calories_gain * 0.55;
$lipides_gain = $calories_gain * 0.2;
$part_proteines_gain = $proteines_gain / 4;
$part_glucides_gain = $glucides_gain / 4;
$part_lipides_gain = $lipides_gain / 9;



?>

<div class="super_container">
    <div class="container1">
        <div class="formulaire">
            <form action="actions/form_back.php" method="POST">
                <label for="">Vous êtes : </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault1" value="femme">
                    <label class="form-check-label" for="flexRadioDefault1">
                        une femme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault2" value="homme">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Un homme
                    </label>
                </div>
                <div class="poids">
                    <label for="poids">Votre poids (en kg)</label>
                    <input type="text" name="poids">
                </div>
                <div class="taille">
                    <label for="poids">Votre taille (en cm)</label>
                    <input type="text" name="taille">
                </div>
                <div class="age">
                    <label for="age">Votre age (en année)</label>
                    <input type="text" name="age">
                </div>


                <label for="pet-select">Votre activité</label>
                <div class="activité">
                    <select name="activité" id="pet-select">
                        <option value="">Sélectionnez votre niveau d'activité</option>
                        <option value="sédentaire">sédentaire</option>
                        <option value="actif_léger">légèrement actif</option>
                        <option value="actif_modéré">actif modéré</option>
                        <option value="très_actif">très actif</option>
                        <option value="super_actif">>2h de sport/jour</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success" name="validate">Valider</button>
                <h4>Votre besoin quotidien en calories est de : <?= $_SESSION['calories'] ?> kcal </h4>



            </form>

        </div>

    </div>
    <div class="container2">
        <div>
            <h2>Vos objectif :</h2>
        </div>
        <div class="objectif">
            <a href="" class="btn btn-success">perdre du poids</a>
            <a href="" class="btn btn-secondary">prendre du poids</a>
        </div>
        <div class="macro">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Macros</th>
                        <th scope="col">Proteine</th>
                        <th scope="col">Glucides</th>
                        <th scope="col">Lipides</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>



    <?php
    require("includes/footer.php"); ?>