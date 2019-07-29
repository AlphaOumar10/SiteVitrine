
<?php include("../entite/Connexion.php"); ?>
<?php
           $id = $_POST["id"];
           $nom = $_POST["nom"];
           $desc = $_POST["description"];
           $photo = $_FILES["photo"]["name"];

           $image_tmp = $_FILES['photo']['tmp_name']; 
           $taille_image = $_FILES['photo']['size'];
           
           
           $destination_image = "../../uploads/service/".$photo; // upload directory
           
           $extension_image = strrchr($photo, ".");
           $valid_extensions_image = array('.jpeg', '.JPEG', '.jpg', '.JPG', '.png', '.PNG', '.gif', '.GIF');
           
           // Vérifier les formats et extensions..
           if (in_array($extension_image, $valid_extensions_image))
           {
                if($taille_image < 5000000)
                {
                   move_uploaded_file($image_tmp, $destination_image);
                }
                else
                {
                   $errMSG = "Fichier trop grand";
                }
           }
           else
           {
               $errMSG = "Mauvais formats";
           }
           if ($photo != "")
           {
                // Si il n'y a pas d'erreur..on continue
                if (!isset($errMSG))
                {
                    $update = "UPDATE service SET nomS = '$nom', descriptionS = '$desc', photoS = '$destination_image' WHERE idS = $id ";
                    $statement =  $connexion->prepare($update); 
                    $statement->execute();

                    if($statement)
                    {
                    header("location:../vue/Formulaire_Ajouter_Service.php?reponses=1");
                    }
                    else {
                       header("location:../vue/Formulaire_Ajouter_Service.php?reponses=2");
                    }
                }
           }
           else {
                $update = "UPDATE service SET nomS = '$nom', descriptionS = '$desc' WHERE idS = $id ";
                $statement =  $connexion->prepare($update); 
                $statement->execute();

                if($statement)
                    {
                    header("location:../vue/Formulaire_Ajouter_Service.php?reponses=1");
                    }
                    else {
                       header("location:../vue/Formulaire_Ajouter_Service.php?reponses=2");
                    }
           }
           
           
?>
  