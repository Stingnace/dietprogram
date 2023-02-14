<?php
function Femme_base($poids, $taille, $age)
{
    $formule = 10 * $poids + 6.25 * $taille - 5 * $age - 161;
    return $formule;
}

function Homme_base($poids, $taille, $age)
{
    $formule = 10 * $poids + 6.25 * $taille - 5 * $age + 5;
    return $formule;
}

function Sédentaire($formule)
{
    $totalCalorique = $formule * 1.2;
    return $totalCalorique;
}

function Actif_léger($formule)
{
    $totalCalorique = $formule * 1.375;
    return $totalCalorique;
}

function Actif_modéré($formule)
{
    $totalCalorique = $formule * 1.55;
    return $totalCalorique;
}

function Très_actif($formule)
{
    $totalCalorique = $formule * 1.725;
    return $totalCalorique;
}
function Super_actif($formule)
{
    $totalCalorique = $formule * 1.9;
    return $totalCalorique;
}
