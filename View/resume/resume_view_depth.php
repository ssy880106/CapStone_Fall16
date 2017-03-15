<?php
session_start();
include '/../../Model/functions/resume_functions.php';

//header
include '../header/default_header.php';

//retrieving the ID from the resume_list.php
//setting the $_SESSION[resume_id] to the clicked profile thumbnail
$id = filter_input(INPUT_GET, 'id');
include '../navigation/nav.php'
?>
<!-- resume_list.php CSS -->  
<link rel="stylesheet" type="text/css" href="resume.css">
<!-- Resume_view_depth.php CSS -->  
<link rel="stylesheet" type="text/css" href="../student/css/resume_view.css">

<div class="wrapper">
    <div class="sidebar-wrapper">
        <!-- PROFILE -->
        <div class="profile-container">                
            <?php include'resume_view/profile.php' ?>
        </div>

        <!-- CONTACT -->
        <div class="contact-container container-block">
            <?php include 'resume_view/contact.php' ?>
        </div>

        <!-- EDUCATION -->
        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <div class="item">
                <?php include'resume_view/education.php' ?>
            </div><!--//item-->
        </div>

        <!-- TEST SCORE -->
        <div class="container-block">
            <h2 class="container-block-title">Admission Tests</h2>
            <?php include'resume_view/test_score.php' ?>
        </div>

    </div><!--//sidebar-wrapper-->

<!-----------------------------------------------------------------------------
                        MAIN WRAPPER
------------------------------------------------------------------------------>       
    <div class="main-wrapper">

        <!-- Self Introduction -->
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Self Intro</h2>
            <?php include'resume_view/introduction.php' ?> 
        </section>

        <!-- WORK HISTORY -->
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Work Experience</h2>               
            <?php include'resume_view/work_history.php' ?>               
        </section>

        <!-- ACHIEVEMENTS -->
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-trophy"></i>Achievements</h2>               
            <?php include'resume_view/achievements.php' ?>               
        </section>

        <!-- COLLEGES -->
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-graduation-cap"></i>Colleges</h2>               
            <?php include'resume_view/colleges.php' ?>               
        </section>

        <!-- INTERESTS -->
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-heart"></i>Interests</h2>               
            <?php include'resume_view/interest.php' ?>               
        </section>

        <section class="section scholar-section">
            <h2 class="section-title"><i class="glyphicon glyphicon-apple"></i>Scholarship</h2>
            <div class="intro">
                <p>I will like to recieve scholarships in these fields:</p>
            </div><!--//intro-->

            <?php include'resume_view/scholarship.php' ?> 

        </section><!--//section-->
    </div><!--//main-body-->
</div><!-- wrapper -->

<?php
//footer
include '../footer/default_footer.php';      