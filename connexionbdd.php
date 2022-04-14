<?php
    //CONNEXION BDD
        $connexion = mysqli_connect('localhost','root','azerty');

        if($connexion){ }
        else{
            mysqli_connect_errno();
            mysqli_connect_error();
        }

?>