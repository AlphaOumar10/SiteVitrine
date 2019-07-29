<?php include("../page/header_admin.php");?>
<?php
     include("../entite/Connexion.php");
    $id = $_GET["id"];
    $requete = "SELECT * FROM sousservice WHERE idSS = $id";
    $statement = $connexion->prepare($requete);
    $statement->execute();  $service = $statement->fetch();

    $id2 = $service["idservice"];
    $requete1 = "SELECT * FROM service WHERE idS = $id2";
    $statement1 = $connexion->prepare($requete1);
    $statement1->execute();  $service1 = $statement1->fetch();
  
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
        <div class="content mt-3">
         <div class="animated fadeIn">
    
        <div class="col-lg-12">
      <div class="card">
        <div class="card-header">Modifier un sous-service</div>
            <div class="card-body card-block">
                <form action="../controler/ModifierSousService.php" method="post" class="" enctype="multipart/form-data"> 
                     <div class="form-group">
                     <div class="input-group">
                          
                                <input type="hidden"  name="id" value="<?php echo $service["idSS"]?>" class="form-control">
                        
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                                <input type="text" id="username" name="nom" value="<?php echo $service["nomSS"]?>" placeholder="Nom du service" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"></i></div>
                                     <input type="text" name="description" value="<?php echo $service["descriptionSS"]?>" placeholder="Description" class="form-control"/>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"></div>
                                    <input type="file"  name="photo" class="form-control"> <img src="../../uploads/sousservice/<?php echo $service["photoSS"]?>" width="70px"
                                            height="60px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            Service :
                            <select name="service">
                            <option value="<?php echo $service["idservice"];?>"><?php echo $service1["nomS"];?></option>
                               <?php 
                                    $requete2 = "SELECT DISTINCT * FROM service";
                                    $statement2 = $connexion->prepare($requete2);
                                    $statement2->execute();                            
                                    while($valeur = $statement2->fetch())
                                    { ?>
                                       <option value="<?php echo $valeur["idS"];?>"><?php 
                                            echo $valeur["nomS"];  ?>
                                        </option>
                               <?php } ?>
                            </select>
                        </div>
                            <br/>
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Enregistrer</button></div></form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
<?php include("../page/footer_admin.php");?>