<?php

//retrieved from functions/resume_functions.php
$resume =  get_info($id);

foreach ($resume as $info){ ?>
    <div class="item">
        <div class="details">
            <p><?php echo $info['interests']; ?></p>
        </div><!--//details-->
    </div><!--//item-->
<?php }