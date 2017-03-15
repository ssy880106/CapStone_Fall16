<?php
session_start();
include '/../../Model/functions/resume_functions.php';

//header
include '../header/default_header.php';

include '../navigation/nav.php'
//?>
<!-- resume_list.php CSS -->  
<link rel="stylesheet" type="text/css" href="resume.css">

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">List of Students</h1>
        </div>
        
        <?php 
            //retrieve function/resume_functions
            $thumb = get_thumbnail();
            foreach ($thumb as $view){ ?>
        <div class="col-lg-3 col-md-3 col-xs-6 thumb">
            <a class="thumbnail" href="<?php echo 'resume_view_depth.php?id='.$view['student_id']; ?>">
                <?php if(empty($view['img'])){?>
                <img class='img-circle' src="img/default.png"
                     alt="default profile"/> 
                <?php }else{?>
                    <img class='img-responsive' src="../student/img/<?php echo $view['img']; ?>"
                     alt="<?php echo $view['img']; ?>"/> 
                <?php }?> 
                <h3><?php echo $view['firstName'].' '.$view['lastName']; ?></h3>               
            </a>      
        </div>
            <?php }//end foreach ?>
    </div>
</div>


<?php
//footer
include '../footer/default_footer.php';  