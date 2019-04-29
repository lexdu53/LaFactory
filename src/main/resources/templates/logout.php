<?php
session_start();
include("../config.php");
include("../class/user.class.php");

//On inclue la classe de base pour géré le site:
//include("$url_site/class/index.class.php");


// structure de la page : 
// On inclue le header : 
// Titre De la page : 
$titre_page_act = "Index :D";
include("../includes/header.inc.php");

$login = new User();

if ($login->already_connect() == 1 )
{
    $login->logout();
    echo'<script language="javascript">window.location.href = "../pages/index.php"</script>';
}
else
{
	echo'<script language="javascript">window.location.href = "../pages/index.php"</script>';

}

    // Fin Body 

    // On envoit le footer : 
    include("../includes/footer.inc.php");

?>