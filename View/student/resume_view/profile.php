<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
//retrieved from functions/resume_functions.php
$resume = get_bio($id);

foreach ($resume as $bio){ 

    if(empty($view['img'])){?>
        <img class='img-circle' src="img/default.png"
             alt="default profile"/> 
        <?php }else{?>
            <img class='img-circle' src="img/<?php echo $view['img']; ?>"
             alt="<?php echo $view['img']; ?>"/> 
        <?php }?> 
    <h1 class="name"><?php echo $bio['firstName'].' '.$bio['lastName']; ?></h1>

<?php }