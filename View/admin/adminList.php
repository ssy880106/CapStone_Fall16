<?php
session_start();
include '/../../Model/functions/admin_functions.php';
//checking to see if logged in as admin
if(!isSet($_SESSION['admin'])) {
    header("Location:../login/login.php");	                
}
//header
include '../header/dashboard_header.php';

//nav bar
include 'dashboard/navbar.php';

//top of the content 
include 'dashboard/content-top.php';

$admin = get_admin();
?>
<!-- List.php CSS -->  
<link rel="stylesheet" type="text/css" href="css/list.css">


<div id="content-admin">
    <header>
        <h2 class="page_title">Admin List</h2> 
    </header>  
    <div class="content-inner"><!-- padding -->
        <div class='row'>           
            <!-- context -->
            <div class='col-md-12' id='list'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th class='hidden-xs'>image</th>
                            <th>id</th>
                            <th>name</th>
                            <th>phone</th>
                            <th class='hidden-xs'>email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($admin as $view){ ?>
                        <tr>
                            <th class='hidden-xs'>
                                <?php if(empty($view['img'])){?>
                                    <img class='img-circle' src="img/default.png"
                                     alt="default profile"/> 
                                <?php }else{?>
                                    <img class='img-circle' src="img/<?php echo $view['img']; ?>"
                                     alt="<?php echo $view['img']; ?>"/> 
                                <?php }?>
                            </th>
                            <th><?php echo $view['admin_id']; ?></th>
                            <th><?php echo $view['lastName'].", ".$view['firstName']; ?></th>
                            <th><?php echo $view['phone']; ?></th>
                            <th class='hidden-xs'><?php echo $view['email']; ?></th>
                            <td>
                                <form method="post" action="../../Controller/controller.php">
                                    <input type="hidden" name="action" value="delete_admin">
                                    <button type='sumbit' name='id' value="<?php echo $view['admin_id']; ?>" class='pull-right btn btn-primary-outline'>
                                        <span class='glyphicon glyphicon-remove'></span>
                                    </button>
                                </form>
                            </td>
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