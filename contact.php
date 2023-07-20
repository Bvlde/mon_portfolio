<?php 

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once(__DIR__.'/vendor/autoload.php');
    use \Mailjet\Resources;

    define('API_USER', '56ba4027b0e3320e131495092e342d37');
    define('API_LOGIN', '3a616ad6328647c24f181fdf0b73c925');

    $mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);

    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["commentaire"])) {

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['commentaire']);

        //verifier si l'email est valide
        if(filter_var($email , FILTER_VALIDATE_EMAIL)){

            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => $email,
                            'Name' => "Nouveau visiteur"
                        ],
                        
                        'To' => [
                            [
                                'Email' => "baldemarc225@gmail.com",
                                'Name' => "Propriétaire"
                            ]
                        ],
                        'Subject' => "Demande de renseignement",
                        'TextPart' => "$email , $message",
                    ]
                ]
            ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès merci (:";

        }else{
            echo "Email non valide ";
        }

    }else{
        //si tout les champs ne sont pas rempli on se redirige vers index.php
        echo "erreur rempli tout les champs !";
        header('Location:index.php');
        die();
    }


?>