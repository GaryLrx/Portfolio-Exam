
<?php
    include('connexionbdd.php');
    $erreur = FALSE;

    
        // NOM
            if(isset($_POST['name']) && trim($_POST['name'])){
                $titre =  htmlspecialchars(trim(mysqli_real_escape_string($connexion, $_POST['name'])));
            }
            else{
                $erreur .= "<p>Veuillez remplir votre Nom</p>";
            }
        
        // E-mail
            if(isset($_POST['email']) && trim($_POST['email'])){
                $etat =  htmlspecialchars(trim(mysqli_real_escape_string($connexion, $_POST['email'])));
            }
            else{
                $erreur .= "<p>Veuillez remplir votre E-Mail</p>";
            }
            
        // DESCRIPTION  
            if(isset($_POST['message']) && trim($_POST['message'])){
                $desc =  htmlspecialchars(trim(mysqli_real_escape_string($connexion, $_POST['message'])));
            }
            else{
                $erreur .= "<p>Veuillez écrire votre message</p>";
            }
            
            
            echo $titre." ". $etat." ".$desc." ".$date;

        // ERREURS
            if(!$erreur){
                session_start();
                session_id();

                $email = $_SESSION['mailco'];
                $compte = $_SESSION['compteco'];
                echo $compte;
                $reqid = "SELECT ID FROM users WHERE Mail LIKE '$email'";
                
                $exec = mysqli_query($connexion, $reqid);
                $fetch1 = mysqli_fetch_all($exec);

                $idu = $fetch1[0][0];
            
                $req = "INSERT INTO taches(iduser, Titre, Etat, DescriptionTache, Datelimite) VALUES ('$idu', '$titre', '$etat', '$desc', '$date')";
                
                $exec2 = mysqli_query($connexion, $req);

                var_dump($titre);
                echo "<p>Votre tâche à été crée avec succès</p>";
                header('Location: todolist.php');                 
                
            }
            else{
                echo $erreur;
                echo '<a href="todolist.php">Retour à l\'accueil</a>'; 
            }    

            
?>