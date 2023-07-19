<?php 

    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["commentaire"])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['commentaire']);

        //verifier si l'email est valide
        if(filter_var($email , FILTER_VALIDATE_EMAIL)){
            
        }else{
            echo "Email non valide ";
        }

    }else{
        //si tout les champs ne sont pas rempli on se redirie vers index.php
        header('Location:index.php');
        die();
    }


?>