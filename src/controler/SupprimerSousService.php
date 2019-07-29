
<?php include("../entite/Connexion.php"); ?>
<?php
           $id = $_GET["id"];
           

          
                    $delete = "DELETE from sousservice WHERE idSS = $id ";
                    $statement =  $connexion->prepare($delete); 
                    $statement->execute();

                    if($statement)
                    {
                    header("location:../vue/AfficherSousService.php");
                    }
                    else {
                        header("location:../vue/AfficherSousService.php");
                    }      
?>
  