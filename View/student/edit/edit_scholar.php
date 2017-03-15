<!-----------------------------------------------------------------------------
                            Student Scholarship
------------------------------------------------------------------------------>
<form method="post" action="../../Controller/controller.php" 
      enctype="multipart/form-data">
    
    <input type="hidden" name="action" value="edit_student_scholarship">
    
    <div class='form-group'>
        <label class='col-form-label'>Academic</label>
        <textarea class='form-control' rows='4' name="scholar_academics"></textarea>
    </div> 
 
    <div class='form-group'>
        <label class='col-form-label'>Sports</label>
        <textarea class='form-control' rows='4'  name="scholar_sports"></textarea>
    </div>     
    
    <div class='form-group'>
        <label class='col-form-label'>Performance Arts</label>
        <textarea class='form-control' rows='4'  name="scholar_arts"></textarea>
    </div> 
        
    <div class='form-group'>
        <label class='col-form-label'>Others</label>
        <textarea class='form-control' rows='4'  name="scholar_other"></textarea>
    </div> 
        
    <div class='clearfix'>
        <button type="submit" value="Edit" class='btn btn-md btn-success pull-right'>Edit</button>
    </div>  
</form>