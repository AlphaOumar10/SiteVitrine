<?php include("../page/header_admin.php");?>
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
             <?php 
            if(isset($_GET["reponse"]) == 1)
             {
                 echo "Bien ajouté";
             }
             
             if(isset($_GET["reponses"]) == 1)
             {
                 echo "Bien modifié";
             }
             
             
             ?>
        <div class="col-lg-12">
      <div class="card">
        <div class="card-header">Ajouter un service</div>
            <div class="card-body card-block">
                <form action="../controler/AjouterService.php" method="post" class="" enctype="multipart/form-data"> 
                     <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                                <input type="text" id="username" name="nom" placeholder="Nom du service" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"></i></div>
                                     <textarea type="text" name="description" placeholder="Description" class="form-control"></textarea>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"></div>
                                    <input type="file"  name="photo" class="form-control">
                                </div>
                            </div><br/>
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Envoyer</button></div></form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
</body>
<?php include("../page/footer_admin.php");?>