<?php
session_start();
include("../config.php");
include("../class/user.class.php");
include("../class/admin.class.php");


// structure de la page : 
// On inclue le header : 
// Titre De la page : 
$titre_page_act = "Admin Dashboard";
include("../includes/header.inc.php");


// On envoit le menu de la page : 

include("../includes/nav.inc.php");
$user = new User();

if ($user->already_connect() == 1 AND $_SESSION['user_type'] == 1)
{
$admin = new admin();


if(isset($_POST['form_reinit_site'])) // Si le formulaire de reinitalisation a été envoyé : 
{
    $retour_reinit_site = $admin->reinit_site();

}
if(isset($_FILES['bdd_csv'])) // si un fichier à été envoyé
{
    $retour_insert_csv = $admin->import_file();
}
    
$nbFormation= $admin->getNbFormation();
$nbMention = $admin->getNbMention();
$nbDomaine = $admin->getNbDomaine();
$nbUsers = $admin->getNbUsers();





// Body :
?>
                <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-road fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbFormation; ?></div>
                                    <div>Formation(s)</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbMention; ?></div>
                                    <div>Mention(s)</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-asterisk fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbDomaine; ?></div>
                                    <div>Domaine(s)</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-male fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbUsers; ?></div>
                                    <div>Utilisateur(s)</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-arrow-right fa-2x"></i> <i class="fa fa-database fa-2x"></i>  Import CSV dans la base
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                            <form role="form" id="form_import_data" method="post" action="admin-dashboard.php" enctype="multipart/form-data">
                                        <div class="well">
                                            <h4>Fichier CSV sous la forme:</h4>
                                            Annee;Niveau; Domaine;Mention; Groupe_accreditation;Parcours; Parcours_Etab;Parcours_Part; Partenariats_UBL;Partenariats_Autres
                                            <br><b style="color:red;"><i class="fa fa-warning fa-1x"></i> Attention: l'importation d'un fichier CSV implique la surppression des anciennes données de la base</b>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Fichier (CSV | max. 2 Mo | Encodage UTF-8) :</label>
                                            
                                            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                            <input type="file" name="bdd_csv" id="bdd_csv" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Vérification des doublons</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="verifdoublons" id="verifdoublons" value="">Trouver et supprimer automatiquement les doublons
                                                </label>
                                            </div>
                                        </div>
                                      
                                        <button type="submit" name="submit" value="Importer" class="btn btn-success">Importer</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </form>
                                    <?php
                                    if(isset($_FILES['bdd_csv'])) // si un fichier à été envoyé
                                    {
                                        echo $retour_insert_csv;
                                    }
                                    ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>


                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-times fa-2x"></i> <i class="fa fa-database fa-2x"></i>  Effacer la base
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                     <form role="form" id="form_reinit_site" method="post" action="admin-dashboard.php">
                                        <div class="well">
                                            <h4>Effacer la base de données:</h4>
                                            <br><b style="color:red;"><i class="fa fa-warning fa-1x"></i> Attention: La réinitialisation est irréversible pour la base de données.</b>
                                        </div>

                                        <div class="form-group">
                                            <label>Souhaitez vous réinitialiser le site ? </label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="reinit_site" id="reinit_site" value="">OUI
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" name="form_reinit_site" value="Réinitialiser" class="btn btn-danger">Réinitialiser</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </form>

                                    <?php
                                    if(isset($_POST['form_reinit_site'])) // Si le formulaire de reinitalisation a été envoyé : 
                                    {
                                        echo $retour_reinit_site;
                                    }
                                    ?>

                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
// Fin Body 

}
else {
    echo'<script language="javascript">window.location.href = "../pages/index.php"</script>';
}

// On envoit le footer : 
include("../includes/footer.inc.php");

?>