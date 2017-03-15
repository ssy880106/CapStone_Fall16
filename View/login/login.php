<?php
session_start();
include '/../../Model/functions/admin_functions.php';
include '/../../Model/database/sql.php'; 

//header
include '../header/default_header.php';
include '../navigation/nav.php'
?>
<!-- CSS -->
<link rel="stylesheet" href="LogIn.css">

<div class="login-wrap">
    <div class="login-html">
        <!-- tabs -->
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Admin</label>
                    
        <div class="login-form"><!-- Main Form -->
            <!-- student login tab -->
            <?php include 'studentLogin.php'; ?>
            
            <!-- Admin login tab -->
            <?php include 'adminLogin.php'; ?>
                 
        </div><!-- end login form -->
    </div><!-- end login html -->
</div><!-- end login wrap -->

<?php
//footer
include '../footer/default_footer.php';  