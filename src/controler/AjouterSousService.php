
<?php include("../entite/Connexion.php"); ?>
<?php
           $nom = $_POST["nom"];
           $desc = $_POST["description"];
           $photo = $_FILES["photo"]["name"];
           $idser = $_POST["service"];

           $image_tmp = $_FILES['photo']['tmp_name']; 
           $taille_image = $_FILES['photo']['size'];
           
           
           $destination_image = "../../uploads/sousservice/".$photo; // upload directory
           
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
           
           // Si il n'y a pas d'erreur..on continue
           if (!isset($errMSG))
           {
                $insertion = "INSERT INTO sousservice(nomSS, descriptionSS, photoSS,idservice)
                            VALUES('$nom','$desc','$destination_image',$idser)";
              $statement =  $connexion->prepare($insertion); 
              $statement->execute();

              if($statement)
              {
                    header("location:../vue/Formulaire_Ajouter_SousService.php?reponse=1");
              }
              else {
                  header("location:../vue/Formulaire_Ajouter_SousService.php?reponse=2");
              }
           }
?>
  