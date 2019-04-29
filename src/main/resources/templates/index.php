<?php 
session_start();
include("../config.php");
include("../class/user.class.php");
include("../class/general.class.php");
include("../class/formation.class.php");

//On inclue la classe de base pour géré le site:
//include("$url_site/class/index.class.php");


// structure de la page : 
// On inclue le header : 
// Titre De la page : 
$titre_page_act = "Formations";
include("../includes/header.inc.php");


// On envoit le menu de la page : 

include("../includes/nav.inc.php");




// Body :
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formations</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Année</th>
                                        <th>Niveau</th>
                                        <th>Domaine</th>
                                        <th>Mention</th>
                                        <!-- <th>Groupe d'accréditation</th> -->
                                        <th>Parcours</th>
                                        <th>Etablissement</th>
                                        <!--<th>Parcours Part</th>-->
                                        <th>Partenariats UBL</th>
                                        <th>Partenariats Autres</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $general = new general();
                                    $datatable = $general->getAllFormations();
                                    //print_r ($datatable);
                                    echo $general->getTable($datatable);


                                    ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
// Fin Body 
// On envoit le footer : 
include("../includes/footer.inc.php");

    
?>