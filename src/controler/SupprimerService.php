
<?php include("../entite/Connexion.php"); ?>
<?php
           $id = $_GET["id"];
           

          
                    $delete = "DELETE from service WHERE idS = $id ";
                    $statement =  $connexion->prepare($delete); 
                    $statement->execute();

                    if($statement)
                    {
                    header("location:../vue/Afficher_Service.php");
                    }
                    else {
                        header("location:../vue/Afficher_Service.php");
                    }      
?>
  