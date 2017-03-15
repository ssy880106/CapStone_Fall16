<?php
//retrieved from functions/resume_functions.php
$contact = get_contact($id);

foreach ($contact as $con){ ?>
<ul class="list-unstyled contact-list">
    
    <?php if (isset($con['email']) && $con['email']!='') { //if variable is not set hide?>
    <li class="email"><i class="fa fa-envelope"></i>
        <a href="<?php echo $con['email']; ?>"><?php echo $con['email']; ?></a></li>
    <?php }//end if 
    
        if (isset($con['website']) && $con['website']!='') {?>
    <li><i class="fa fa-globe"></i>
        <a href="<?php echo $con['website']; ?>"><?php echo $con['website']; ?></a></li>
    <?php }//end if 

        if (isset($con['facebook']) && $con['facebook']!='') {?>    
    <li class="fb"><i class="fa fa-facebook"></i>
        <a href="https://www.<?php echo $con['facebook']; ?>"><?php echo $con['facebook']; ?></a></li>
    <?php }//end if 
    
        if (isset($con['instagram']) && $con['instagram']!='') {?>
    <li><i class="fa fa-instagram"></i>
        <a href="https://www.<?php echo $con['instagram']; ?>"><?php echo $con['instagram']; ?></a></li>
    <?php }//end if 
    
        if (isset($con['twitter']) && $con['twitter']!='') {?>
    <li><i class="fa fa-twitter"></i>
        <a href="https://www.<?php echo $con['twitter']; ?>"><?php echo $con['twitter']; ?></a></li>
    <?php }//end if 
    
        if (isset($con['youtube']) && $con['youtube']!='') {?>
    <li><i class="fa fa-youtube"></i>
        <a href="https://www.<?php echo $con['youtube']; ?>" target="_blank"><?php echo $con['youtube']; ?></a></li> 
    <?php }//end if ?>
</ul>
<?php }
