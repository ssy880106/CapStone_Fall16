<!-----------------------------------------------------------------------------
                            Student Info
------------------------------------------------------------------------------>
<form method="post" action="../../Controller/controller.php" 
      enctype="multipart/form-data">
    
    <input type="hidden" name="action" value="edit_student_info">

    <div class='form-group row'>
        <label class='col-xs-5 col-form-label'>ACT</label>
        <div class='col-xs-7'>
            <input name="info_actScore" type="number" class='form-control'>
        </div>
    </div>
    
    <div class='form-group row'>
        <label class='col-xs-5 col-form-label'>SAT</label>
        <div class='col-xs-7'>
            <input name="info_satScore" type="number" class='form-control'>
        </div>
    </div> 
    
    <div class='form-group'>
        <label class='col-form-label'>Introduction</label>
        <textarea class='form-control' rows='4' name="info_intro"></textarea>
    </div> 
    
    <div class='form-group'>
        <label class='col-form-label'>Interests</label>
        <textarea class='form-control' rows='4' name="info_interests"></textarea>
    </div> 
    
    <div class='form-group'>
        <label class='col-form-label'>Work History</label>
        <textarea class='form-control' rows='4' name="info_work"></textarea>
    </div> 
        
    <div class='form-group'>
        <label class='col-form-label'>Achievements</label>
        <textarea class='form-control' rows='4' name="info_achievements"></textarea>
    </div>  
            
    <div class='form-group'>
        <label class='col-form-label'>Colleges</label>
        <textarea class='form-control' rows='4' name="info_colleges"></textarea>
    </div>  
    
    <div class='clearfix'>
        <button type="submit" value="Edit" class='btn btn-md btn-success pull-right'>Edit</button>
    </div>  
</form>