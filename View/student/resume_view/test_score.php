<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
//retrieved from functions/resume_functions.php
$resume = get_info($id);

foreach ($resume as $info){ ?>
    <ul class="list-unstyled test-list">
        <?php  
            if ($info['act_score'] !=0){ ?>
                <li>ACT: &nbsp;<span class="test_score"><?php echo $info['act_score']; ?></span></li>
        <?php    }   //end if 
            
            if ($info['sat_score'] !=0){ ?>
        <li>SAT: &nbsp;<span class="test_score"><?php echo $info['sat_score']; ?></span></li>
    </ul>            
<?php }//end if
}//end foreach

                