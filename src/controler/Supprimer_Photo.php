
<?php include("../entite/Connexion.php"); ?>
<?php
           $id = $_GET["id"];
           

          
                    $delete = "DELETE from galerie WHERE idG = $id ";
                    $statement =  $connexion->prepare($delete); 
                    $statement->execute();

                    if($statement)
                    {
                    header("location:../vue/Afficher_Photo.php");
                    }
                    else {
                        header("location:../vue/Afficher_Photo.php");
                    }      
?>
  