<?php
session_start();
include '/../../Model/functions/admin_functions.php';

//header
include '../header/default_header.php';

include '../navigation/nav.php';
//?>
<!-- CSS -->  
<link rel="stylesheet" type="text/css" href="register.css">

<div id="background"></div>

<div class="col-md-5 col-sm-6 col-xs-12 right">  
    <div class="panel panel-default">
        <div class="panel-header">
            <p class="panel-title">
                <bold>sign up</bold> as a member
            </p>
        </div>
        
        <div class="panel-body bg-white">
            <div class="row">
            <div class="col-md-12">
                <form method="post" action="../../Controller/controller.php" enctype="multipart/form-data">
                <input type="hidden" name="action" value="register">
                
<!-----------------------------------------------------------------------------
                            User Name / Password 
------------------------------------------------------------------------------>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">UserName</label>
                  <div>
                    <input class="underline" name="username" type="text" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <div>
                    <input class="underline" name="password" type="password" required>
                  </div>
                </div>
              </div>    
        </div>
<!-----------------------------------------------------------------------------
                            Student Bio 
------------------------------------------------------------------------------>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">First Name</label>
                  <div>
                    <input class="underline" name="firstName" type="text" placeholder="eg: Jane" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <div>
                    <input class="underline" name="lastName" type="text" placeholder="eg: Doe" required>
                  </div>
                </div>
              </div>    
        </div> 
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">City</label>
                  <div>
                    <input class="underline" name="city" type="text" placeholder="eg: Springfield">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">State</label>
                  <div>
                    <input class="underline" name="state" type="text" placeholder="eg: MO">
                  </div>
                </div>
              </div>    
        </div> 
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">School</label>
                  <div>
                    <input name="school" type="text" class="underline"
               placeholder="eg: Kickapoo High School" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-group">
                  <label class="control-label">Year of Graduation</label>
                  <div>
                    <input class="num" name="year" type="text" maxlength="4" placeholder="eg: 2020">
                  </div>
                </div>
              </div>    
        </div>
<!-----------------------------------------------------------------------------
                            student information 
------------------------------------------------------------------------------>
        <div class="row">
            <div class="col-sm-8 lower">
                <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                                <input size="7" style='color:#D7D7D7;' type="file" name="img" />
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label">SAT SCORE</label>
                  <div>
                    <input class="num" name="info_satScore" type="text" maxlength="4" placeholder="eg: 1600">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="control-label">ACT SCORE</label>
                  <div>
                    <input class="num" name="info_actScore" type="text" maxlength="4" placeholder="eg: 36">
                  </div>
                </div>
              </div>    
        </div>  
                            
        <div class='form-group col-md-12'>
            <label class='col-form-label'>Introduction</label>
            <textarea class='form-control' rows='4' name="info_intro"></textarea>
        </div>                     

        <div class='form-group col-md-12'>
            <label class='col-form-label'>Interests</label>
            <textarea class='form-control' rows='4' name="info_interests"></textarea>
        </div> 

        <div class='form-group  col-md-12'>
            <label class='col-form-label'>Work History</label>
            <textarea class='form-control' rows='4' name="info_work"></textarea>
        </div> 

        <div class='form-group  col-md-12'>
            <label class='col-form-label'>Achievements</label>
            <textarea class='form-control' rows='4' name="info_achievements"></textarea>
        </div>  

        <div class='form-group  col-md-12'>
            <label class='col-form-label'>Colleges</label>
            <textarea class='form-control' rows='4' name="info_colleges"></textarea>
        </div> 
<!-----------------------------------------------------------------------------
                            Student Scholarship 
------------------------------------------------------------------------------>                           
    <div class='form-group  col-md-12'>
        <label class='col-form-label'>Academic</label>
        <textarea class='form-control' rows='4' name="scholar_academics"></textarea>
    </div> 
 
    <div class='form-group  col-md-12'>
        <label class='col-form-label'>Sports</label>
        <textarea class='form-control' rows='4'  name="scholar_sports"></textarea>
    </div>     
    
    <div class='form-group  col-md-12'>
        <label class='col-form-label'>Performance Arts</label>
        <textarea class='form-control' rows='4'  name="scholar_arts"></textarea>
    </div> 
        
    <div class='form-group  col-md-12'>
        <label class='col-form-label'>Others</label>
        <textarea class='form-control' rows='4'  name="scholar_other"></textarea>
    </div> 
    
    <div class="btn-group right" role="group" aria-label="...">
      <button type="submit" class="btn btn-success" value="Register">Register</button>
    </div>                        
                      
                </form>                   
            </div>
            </div>  
        </div> 
        
    </div> <!-- end panel default -->   
</div> 


<?php
//footer
include '../footer/default_footer.php';  