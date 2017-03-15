<?php
session_start();
include '/../../Model/functions/admin_functions.php';
//checking to see if logged in as admin
if(!isSet($_SESSION['admin'])) {
    header("Location:../login/login.php");	                
}
//checking to see if logged in
if(!isSet($_SESSION['admin'])) {
    header("Location:../login/login.php");	                
}
//header
include '../header/dashboard_header.php';

//nav bar
include 'dashboard/navbar.php';

//top of the content 
include 'dashboard/content-top.php';

$student = get_studentlist();
?>
<!-- List.php CSS -->  
<link rel="stylesheet" type="text/css" href="css/list.css">

<div id="content-student">
    <header>
        <h2 class="page_title">Student List</h2> 
    </header>  
    <div class="content-inner"><!-- padding -->
        <div class='row'>           
            <!-- context -->
            <div class='col-md-12' id='list'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th class='hidden-xs'>image</th>
                            <th>name</th>
                            <th class='hidden-xs'>city</th>
                            <th>school</th>
                            <th class='hidden-xs'>year</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($student as $view){ ?>
                        <tr>
                            <th class='hidden-xs'>
                                <!-- If the student does not have a picture, 
                                default.png will be added instead -->
                                <?php if(empty($view['img'])){?>
                                    <img class='img-circle' src="../student/img/default.png"
                                     alt="default profile"/> 
                                <?php }else{?>
                                    <img class='img-circle' src="../student/img/<?php echo $view['img']; ?>"
                                     alt="<?php echo $view['img']; ?>"/> 
                                <?php }?>
                            </th>
                            <th><?php echo $view['lastName'].", ".$view['firstName'] ?></th>
                            <th class='hidden-xs'><?php echo $view['city'].", ".$view['state'] ?></th>
                            <th><?php echo $view['school'] ?></th>
                            <th class='hidden-xs'><?php echo $view['year'] ?></th>
                            <th>
                                <form method="post" action="../../Controller/controller.php">
                                    <input type="hidden" name="action" value="delete_student">
                                    <button type='sumbit' name='id' value="<?php echo $view['student_id']; ?>" class='pull-right btn btn-primary-outline'>
                                        <span class='glyphicon glyphicon-remove'></span>
                                    </button>
                                </form>
                            </th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div><!-- end of row -->
    </div><!-- end of content inner -->
</div><!-- end of content -->

<?php
//content of the bottom
include 'dashboard/content-bot.php';

//footer
include '../footer/dashboard_footer.php';    