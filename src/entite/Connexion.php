<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> </title>
    </head>
    <body>
    <?php
            $serveur = "localhost";
            $login = "root";
            $pass = "";

            try{
                $connexion = new PDO("mysql:host=$serveur;dbname=gestionservices", $login, $pass);
                $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            }

            catch(PDOException $e){
                echo 'Echec de la connexion : ' .$e->getMessage();
            }
        ?>
    </body>
</html>