<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
//retrieved from functions/resume_functions.php
$resume = get_info($id);

foreach ($resume as $info){ ?>
    <div class="summary">
        <p><?php echo $info['intro']; ?></p>
    </div><!--//summary-->
<?php }
