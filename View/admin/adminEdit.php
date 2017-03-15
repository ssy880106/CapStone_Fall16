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
<!-- Resume.php CSS -->  
<link rel="stylesheet" type="text/css" href="css/admin.css">

<div id="dashboard-con">
    <div class="row">
        <!-- BIO -->
        <div class="col-md-7">
            <div class="admin-content-purple">
                <header class="clearfix">
                    <h3>Admin Add</h3>
                </header>
                <form method="post" action="../../Controller/controller.php" enctype="multipart/form-data" class='form-horizontal'>
                    <input type="hidden" name="action" value="add_admin">
                    
                    <!-- id -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>ID</label>
                        <div class='col-xs-9'>
                            <input type='text' class='form-control' name="id" placeholder="ID">
                        </div>
                    </div> 
                    
                    <!-- Username -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>User Name</label>
                        <div class='col-xs-9'>
                            <input type='text' class='form-control' name="user" placeholder="USERNAME" required>
                        </div>
                    </div> 

                    <!-- Password -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>Password</label>
                        <div class='col-xs-9'>
                            <input type='password' class='form-control' name="pw" type="PASSWORD" required>
                        </div>
                    </div>                     

                    <!-- First Name -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>First Name</label>
                        <div class='col-xs-9'>
                             <input type='text' class='form-control' name="firstName" placeholder="FIRST NAME">
                        </div>
                    </div> 

                    <!-- Last Name -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>Last Name</label>
                        <div class='col-xs-9'>
                             <input type='text' class='form-control' name="lastName" placeholder="LAST NAME">
                        </div>
                    </div>  

                    <!-- Email -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>Email</label>
                        <div class='col-xs-9'>
                             <input type='text' class='form-control' name="email" placeholder="k12tocollege@K12.COM">
                        </div>
                    </div> 

                    <!-- Phone -->
                    <div class='form-group row'>
                        <label class='col-xs-2 col-form-label'>Phone</label>
                        <div class='col-xs-9'>
                           <input type='text' class='form-control' name="phone" placeholder="000-111-2222">
                        </div>
                    </div> 
                    
                    <!-- Image -->
                    <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                                <input  style='color: #C4C4C9' type="file" name="img" />
                        </div>
                    </div>

                    <!-- submit button -->
                    <div class='clearfix'>
                        <button type="submit" value="add_admin" class='btn btn-md btn-success pull-right'>ADD</button>
                    </div> 
                </form> 
            </div><!-- end admin-content -->  
         </div><!-- end dashboard left cell --> 
    </div>
</div>


<?php
//content of the bottom
include 'dashboard/content-bot.php';

//footer
include '../footer/dashboard_footer.php';    