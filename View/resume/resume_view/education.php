<?php

//retrieved from functions/resume_functions.php
$resume = get_bio($_SESSION['resume_id']);

foreach ($resume as $bio){ ?>

    <h4 class="degree"><?php echo $bio['school']; ?></h4>
    <h5 class="meta"><?php echo $bio['city'].', '.$bio['state']; ?></h5>
    <div class="time">Graduation: <?php echo $bio['year']; ?></div>

<?php }
