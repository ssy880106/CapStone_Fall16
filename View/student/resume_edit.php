<?php 
session_start();
include '/../../Model/functions/resume_functions.php';
//checking to see if logged in as a student
if(!isSet($_SESSION['student'])) {
    header("Location:../login/login.php");	                
}
//header
include '../header/dashboard_header.php';

//nav bar
include 'dashboard/navbar.php';

//top of the content 
include 'dashboard/content-top.php';

?>
<!-- resume edit.php CSS -->  
<link rel="stylesheet" type="text/css" href="css/edit.css">
<link rel="stylesheet" type="text/css" href="../../CSS/dashboard_default.css">

<!-- Each of the forms goes to the controller --> 
<div id="dashboard-con">
    <div class="row">       
<!-----------------------------------------------------------------------------
                            Student Contact
------------------------------------------------------------------------------>
        <div class="col-md-5 dashboard-left-cell">
            <div class="admin-content-pink">
                <header class="clearfix">
                    <h3>Contact</h3>
                </header>
                <?php include 'edit/contact.php' ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard left cell --> 
         
<!-----------------------------------------------------------------------------
                            Student Bio
------------------------------------------------------------------------------>
         <div class="col-md-5 dashboard-right-cell">
            <div class="admin-content-red">
                <header class="clearfix">
                    <h3>Bio</h3>
                </header>
                <?php include 'edit/edit_bio.php' ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard mid cell --> 
         
<!-----------------------------------------------------------------------------
                            Student Info
------------------------------------------------------------------------------>         
         <div class="col-md-5 dashboard-left-cell">
            <div class="admin-content-yellow">
                <header class="clearfix">
                    <h3>Info</h3>
                </header>
                <?php include 'edit/edit_info.php' ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard mid cell --> 
         
<!-----------------------------------------------------------------------------
                            Student Scholarship
------------------------------------------------------------------------------>         
         <div class="col-md-5 dashboard-right-cell">
            <div class="admin-content-mint">
                <header class="clearfix">
                    <h3>Scholarship</h3>
                </header>
                <?php include 'edit/edit_scholar.php' ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard mid cell --> 
         
<!-----------------------------------------------------------------------------
                            User Name / Password 
------------------------------------------------------------------------------>
        <div class="col-md-5 dashboard-right-cell">
            <div class="admin-content-pink">
                <header class="clearfix">
                    <h3>User / Password</h3>
                </header>
                <?php include 'edit/edit_pw.php' ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard left cell -->          
         
    </div><!-- end row --> 
</div><!-- end dashboard-con --> 

<?php
//content of the bottom
include 'dashboard/content-bot.php';

//footer
include '../footer/dashboard_footer.php';     