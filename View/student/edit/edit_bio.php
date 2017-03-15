<!-----------------------------------------------------------------------------
                            Student Bio
------------------------------------------------------------------------------>
<form method="post" action="../../Controller/controller.php" 
      enctype="multipart/form-data">
    
    <input type="hidden" name="action" value="edit_student_bio">

    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>First Name</label>
        <div class='col-xs-9'>
            <input name="firstName" type="text" class='form-control' placeholder="eg: Jane">
        </div>
    </div>    
    
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Last Name</label>
        <div class='col-xs-9'>
            <input name="lastName" type="text" class='form-control' placeholder="eg: Doe">
        </div>
    </div> 
   
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>City</label>
        <div class='col-xs-9'>
            <input name="city" type="text" class='form-control' placeholder="eg: Springfield">
        </div>
    </div>  
    
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>State</label>
        <div class='col-xs-9'>
            <input name="state" type="text" class='form-control' placeholder="eg:MO">
        </div>
    </div> 
 
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>School</label>
        <div class='col-xs-9'>
            <input name="school" type="text" class='form-control' placeholder="eg:Kickapoo High School">
        </div>
    </div> 
 
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Graduation Year</label>
        <div class='col-xs-9'>
            <input name="year" type="text" class='form-control' placeholder="eg:2018">
        </div>
    </div>    
    
        
    <!-- Image -->
    <div class="form-group row">
        <label class="col-xs-3 col-form-label">Image</label>
        <div class="col-sm-9">
                <input  style='color: #C4C4C9' type="file" name="img" />
        </div>
    </div>

    <div class='clearfix'>
        <button type="submit" value="Edit" class='btn btn-md btn-success pull-right'>Edit</button>
    </div>    
</form>