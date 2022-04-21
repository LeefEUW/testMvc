<?php
include '../utils/connectBdd.php';
include '../model/model_article.php';
include '../vue/vue_article.php';


    if(isset($_POST['nom_article']) AND isset($_POST['prix_article']) AND $_POST['nom_article'] !="" AND $_POST['prix_article'] !=""){
        //récup super globale post
        $nom = $_POST['nom_article'];
        $prix = $_POST['prix_article'];
        addArticle($bdd,$nom,$prix);
        echo "L'article à bien été ajouté en BDD";
    }
    else {
        echo "Veuillez remplir les champs du formulaire ";
    }
?>