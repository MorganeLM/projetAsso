<?php

// use PHPMailer\PHPMailer\Exception;

require_once '../include/navbar.php';

// AJOUTER LES DONNéES DE LA BASE 
    if(!empty($_POST)){
        if(
            isset($_POST['name']) && !empty($_POST['name'])
            && isset($_POST['email']) && !empty($_POST['email'])
            && isset($_POST['pass']) && !empty($_POST['pass']) 
            && isset($_POST['pass2']) && !empty($_POST['pass2'])  
            && isset($_POST['purpose']) && !empty($_POST['purpose'])  
        ){
            if(filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)){

                if(($_POST['pass']) === ($_POST['pass2'])){

                    $name = strip_tags($_POST['name']);
                    $email = strip_tags($_POST['email']);
                    $hashed_pass = password_hash($_POST['pass'], PASSWORD_ARGON2I);
                    $purpose = htmlspecialchars($_POST['purpose']);
                    if(isset($_POST['site']) && !empty($_POST['site'])){
                        $site = strip_tags($_POST['site']);
                    }else{
                        $site = null ;
                    }

                    require_once '../include/connect.php';

                    $sql =  "INSERT INTO `assos`(`name`, `email`, `password`, `web_site`, `purpose`) VALUES (:name, :email,:password, :web_site, :purpose);";

                    $query = $db->prepare($sql);

                    $query->bindValue(':name', $name, PDO::PARAM_STR);
                    $query->bindValue(':email', $email, PDO::PARAM_STR);
                    $query->bindValue(':password', $hashed_pass, PDO::PARAM_STR);
                    $query->bindValue(':web_site', $site, PDO::PARAM_STR);
                    $query->bindValue(':purpose', $purpose, PDO::PARAM_STR);

                    $query->execute();
                    
                    header('Location: '.URL);
                }
            }
        else{             
            // Au moins un des champs est invalide
            $_SESSION['message'][] = 'Le formulaire est incomplet.';
        }
    }
} 

?>


<main>
<section>

    <h2>S'inscrire</h2>

    <?php 
    // AFFICHAGE DES MESSAGES DE SESSION D'ERREUR 
        if(isset($_SESSION['message'])  && !empty($_SESSION['message'])):
            foreach($_SESSION['message'] as $message):
            ?>
                <p class="message_erreur"><?=$message?></p>
            <?php
            endforeach;
            unset($_SESSION['message']);
        endif;
    ?>

    <form method="post">
        <div >
            <label for="name">Nom :</label>
            <div>
                <input type="text" name="name" id="name" />
            </div>
        </div>
        <div >
            <label for="email">Email :</label>
            <div>
                <input type="email" name="email" id="email" />
            </div>
        </div>
        <div >
            <label for="pass">Mot de passe :</label>
            <div>
                <input type="password" name="pass" id="pass" />
            </div>
        </div>
        <div >
            <label for="pass2">Confirmer le mot de passe :</label>
            <div>
                <input type="password" name="pass2" id="pass2" />
            </div>
        </div>
        <div >
            <label for="site">Site web (option) :</label>
            <div>
                <input type="text" name="site" id="site" />
            </div>
        </div>
        <div >
            <label for="purpose">Objectif de l'asso :</label>
            <div>
                <textarea name="purpose" id="purpose"></textarea>
            </div>
        </div>

        <button>S'inscrire</button>
        
    </form>
</section>


