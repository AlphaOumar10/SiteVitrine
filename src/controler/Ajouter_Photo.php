
<?php include("../entite/Connexion.php"); ?>
<?php
           $nom = $_POST["nom"];
           $photo = $_FILES["photo"]["name"];

           $image_tmp = $_FILES['photo']['tmp_name']; 
           $taille_image = $_FILES['photo']['size'];
           
           
           $destination_image = "../../uploads/galerie/".$photo; // upload directory
           
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
                $insertion = "INSERT INTO galerie(nomG, photoG)
                            VALUES('$nom','$destination_image')";
              $statement =  $connexion->prepare($insertion); 
              $statement->execute();

              if($statement)
              {
                    header("location:../vue/Formulaire_Ajouter_Photo.php?reponse=1");
              }
              else {
                  header("location:../vue/Formulaire_Ajouter_Photo.php?reponse=2");
              }
           }
?>
  