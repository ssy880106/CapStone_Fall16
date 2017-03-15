<?php

//retrieved from functions/resume_functions.php
$resume = get_scholarship($id);

foreach ($resume as $sch){ 
    
    if ($sch['academic'] !=""){ ?>
    <div class="item">
        <p class="scholar-title">academic</p> - 
        <span class="tagline"><?php echo $sch['academic']; ?></span>
    </div><!--//item-->
    <?php } //end if
    
    if ($sch['sports'] !=""){ ?>
    <div class="item">
        <p class="scholar-title">sports</p> - 
        <span class="tagline"><?php echo $sch['sports']; ?></span>
    </div><!--//item-->
    <?php } //end if
    
    if ($sch['art'] !=""){ ?>
    <div class="item">
        <p class="scholar-title">art</p> - 
        <span class="tagline"><?php echo $sch['art']; ?></span>
    </div><!--//item-->
    <?php } //end if
    
    if ($sch['others'] !=""){ ?>
    <div class="item">
        <p class="scholar-title">Others</p> - 
        <span class="tagline"><?php echo $sch['others']; ?></span>
    </div><!--//item-->

    <?php }//end if
    
    }//end foreach