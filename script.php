
<?php
    include('connexionbdd.php');
    $erreur = FALSE;

    
        // NOM
            if(isset($_POST['name']) && trim($_POST['name'])){
                $name =  htmlspecialchars(trim(mysqli_real_escape_string($connexion, $_POST['name'])));
            }
            else{
                $erreur .= "<p>Veuillez remplir votre Nom</p>";
            }
        
        // E-mail
            if(isset($_POST['email']) && trim($_POST['email'])){
                $email =  htmlspecialchars(trim(mysqli_real_escape_string($connexion, $_POST['email'])));
            }
            else{
                $erreur .= "<p>Veuillez remplir votre E-Mail</p>";
            }
            
        // Message  
            if(isset($_POST['message']) && trim($_POST['message'])){
                $message =  htmlspecialchars(trim(mysqli_real_escape_string($connexion, $_POST['message'])));
            }
            else{
                $erreur .= "<p>Veuillez écrire votre message</p>";
            }
            
            
?>