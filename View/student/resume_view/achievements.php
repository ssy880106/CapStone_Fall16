<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
//retrieved from functions/resume_functions.php
$resume = get_info($id);

foreach ($resume as $info){ ?>
    <div class="item">
        <div class="details">
            <p><?php echo $info['achievements']; ?></p>
        </div><!--//details-->
    </div><!--//item-->
<?php }