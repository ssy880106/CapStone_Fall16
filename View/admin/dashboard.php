<?php
session_start();
include '/../../Model/functions/admin_functions.php';
//checking to see if logged in as admin
if(!isSet($_SESSION['admin'])) {
    header("Location:../login/login.php");	                
}
//header
include '../header/dashboard_header.php';

//nav bar
include 'dashboard/navbar.php';

//top of the content 
include 'dashboard/content-top.php';
?>


<?php
//content of the bottom
include 'dashboard/content-bot.php';

//footer
include '../footer/dashboard_footer.php';