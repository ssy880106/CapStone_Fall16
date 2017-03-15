<!-----------------------------------------------------------------------------
                            User Name / Password 
------------------------------------------------------------------------------>
<form method="post" action="../../Controller/controller.php" 
      enctype="multipart/form-data">
    
    <input type="hidden" name="action" value="edit_student_password">

        <div class='form-group row'>
            <label class='col-xs-3 col-form-label'>User Name</label>
            <div class='col-xs-9'>
            <input name="username" type="text" class='form-control' required>
            </div>
        </div>  
  
        <div class='form-group row'>
            <label class='col-xs-3 col-form-label'>Password</label>
            <div class='col-xs-9'>
            <input name="password" type="password" class='form-control' required>
            </div>
        </div>   


        <div class='clearfix'>
            <button type="submit" value="Edit" class='btn btn-md btn-success pull-right'>Edit</button>
        </div>   
</form>
                           