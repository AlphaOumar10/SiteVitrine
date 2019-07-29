

<?php include("../page/header_admin.php");?>
<?php 
include("../entite/Connexion.php");

$requete = "SELECT * FROM service";

$statement = $connexion->prepare($requete);
$statement->execute(); 




?>
<body>
<?php include("../page/menu_admin.php");?>
    <!-- Left Panel -->

    <!-- Right Panel --> <!-- Left Panel -->

    <div id="right-panel" class="right-panel">
    <?php include("../page/nav_bar_admin.php");?>
        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><br/><br/><br/><br/>
        <a href="Formulaire_Ajouter_Service.php" class="btn btn-primary btn-sm">Ajouter</a>
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Service</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($liste = $statement->fetch(PDO::FETCH_OBJ))
                                    {?>
                                        <tr>  
                                            <td><?php echo $liste->idS;?></td>
                                            <td><?php echo $liste->nomS;?></td>
                                            <td><?php echo $liste->descriptionS;?></td>
                                            <td><img src="../../uploads/service/<?php echo $liste->photoS;?>" width="60px"
                                            height="60px"></td>
                                            <td>
                                                <a href="Formulaire_Modifier_Service.php?id=<?php echo $liste->idS;?>" class="btn btn-success btn-sm">Modifer</a>
                                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet service?');" href="../Controler/SupprimerService.php?id=<?php echo $liste->idS;?>" class="btn btn-danger btn-sm">Supprimer</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->
      
<?php include("../page/footer_admin.php");?>