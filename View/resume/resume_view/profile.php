<?php

//retrieved from functions/resume_functions.php
$resume = get_bio($id);

foreach ($resume as $bio){ 

    if(empty($bio['img'])){?>
        <img class='img-circle' src="img/default.png"
             alt="default profile"/> 
        <?php }else{?>
            <img class='img-circle' src="../student/img/<?php echo $bio['img']; ?>"
             alt="<?php echo $bio['img']; ?>"/> 
        <?php }?> 
    <h1 class="name"><?php echo $bio['firstName'].' '.$bio['lastName']; ?></h1>

<?php }