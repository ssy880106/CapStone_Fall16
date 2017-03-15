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
<!-- Resume.php CSS -->  
<link rel="stylesheet" type="text/css" href="css/dashboard.css">

<div id="dashboard-con">
    <div class="row">
        <!-- BIO -->
        <div class="col-md-4 dashboard-left-cell">
            <div class="admin-content-violet">
                <header class="clearfix">
                    <h3>Bio</h3>
                </header>
                <?php include 'display_student/student_bio.php'; ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard left cell --> 
         
         <!-- Contact -->
         <div class="col-md-4 dashboard-left-cell">
            <div class="admin-content-greenyellow">
                <header class="clearfix">
                    <h3>Contact</h3>
                </header>
                <?php include 'display_student/student_contact.php'; ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard right cell --> 
         
         <!-- INFO -->
         <div class="col-md-6 dashboard-left-cell">
            <div class="admin-content-greenyellow">
                <header class="clearfix">
                    <h3>Info</h3>
                </header>
                <?php include 'display_student/student_info.php'; ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard mid cell --> 
         
         <!-- Scholar -->
         <div class="col-md-6 dashboard-right-cell">
            <div class="admin-content-skyblue">
                <header class="clearfix">
                    <h3>Scholarship</h3>
                </header>
                <?php include 'display_student/student_scholar.php'; ?>
            </div><!-- end admin-content -->  
         </div><!-- end dashboard right cell --> 
         
         
         
    </div><!-- end row --> 
</div><!-- end dashboard-con --> 

<?php

//content of the bottom
include 'dashboard/content-bot.php';

//footer
include '../footer/dashboard_footer.php';    