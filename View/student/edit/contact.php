<!-----------------------------------------------------------------------------
                            Contact
------------------------------------------------------------------------------>
<form method="post" action="../../Controller/controller.php" 
      enctype="multipart/form-data">
    
    <input type="hidden" name="action" value="student_contact">

    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Email</label>
        <div class='col-xs-9'>
            <input name="contact_email" type="text" class='form-control' placeholder="eg: ...@email.com">
        </div>
    </div>    
    
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Web</label>
        <div class='col-xs-9'>
            <input name="contact_web" type="text" class='form-control' placeholder="eg: k12toCollege.com/#">
        </div>
    </div> 
   
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Facebook</label>
        <div class='col-xs-9'>
            <input name="contact_fb" type="text" class='form-control' placeholder="eg: facebook.com/#">
        </div>
    </div>  
    
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Instagram</label>
        <div class='col-xs-9'>
            <input name="contact_insta" type="text" class='form-control' placeholder="eg: instagram.com/#">
        </div>
    </div> 
 
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Twitter</label>
        <div class='col-xs-9'>
            <input name="contact_twitter" type="text" class='form-control' placeholder="eg: twitter.com/#">
        </div>
    </div> 
 
    <div class='form-group row'>
        <label class='col-xs-3 col-form-label'>Youtube</label>
        <div class='col-xs-9'>
            <input name="contact_youtube" type="text" class='form-control' placeholder="eg: youtube.com/#">
        </div>
    </div>    

    <div class='clearfix'>
        <button type="submit" value="Edit" class='btn btn-md btn-success pull-right'>Edit</button>
    </div>    
</form>