<?php //
session_start();

include '/../Model/database/sql.php';
include '/../View/login/studentLogin.php';

include '/../Model/functions/resume_functions.php';
include '/../Model/functions/register_functions.php';
include '/../Model/functions/edit_functions.php';
include '/../Model/functions/admin_functions.php';

    //retrieve name='action' from the forms
    $action = filter_input(INPUT_POST, 'action');
    
    //retrieve student_id to be used in the edit section
    $edit_id = $_SESSION['student'];
   
    switch($action){
/*-----------------------------------------------------------------------------
                            Log In
-----------------------------------------------------------------------------*/
        case 'login_student':
            $name = filter_input(INPUT_POST, 'name');
            $password = filter_input(INPUT_POST, 'password');

                    $query = 'SELECT * 
                    FROM studentLogin
                    WHERE username = :student_name and password = :student_pw';
                    $statement = $db->prepare($query);
                    $statement -> bindValue(":student_name", $name);
                    $statement -> bindValue(":student_pw", $password);
                    $statement->execute();
                    $student = $statement->fetch();
                    $statement -> closeCursor();
                                                  
            if($student){
                //place the student id data into a variable
                $_SESSION['student'] = $student['student_id']; 
                $_SESSION['student_name'] = $student['username']; 
                
                header('Location: ../View/student/dashboard.php');
            }else{ 
                $_SESSION['student'] = '';
                header('Location: ../View/login/login.php');
            }
            break;        
        case 'login_admin':
            $name = filter_input(INPUT_POST, 'name');
            $password = filter_input(INPUT_POST, 'password');
            
                    $query = 'SELECT * 
                    FROM admin
                    WHERE username = :user and password = :pw';
                    $statement = $db->prepare($query);
                    $statement -> bindValue(":user", $name);
                    $statement -> bindValue(":pw", $password);
                    $statement->execute();
                    $admin = $statement->fetch();
                    $statement -> closeCursor();
              
            if($admin){
                //place the admin id data into a variable
                $_SESSION['admin'] = $admin['admin_id'];    
                $_SESSION['admin_name'] = $admin['firstName'];
                
                header('Location: ../View/admin/dashboard.php');
            }else{ 

                $_SESSION['admin'] = '';
                header('Location: ../View/login/login.php');

            }            
            break;
            
/*-----------------------------------------------------------------------------
                            Student Register
-----------------------------------------------------------------------------*/
        case 'register':
            //creating a unique ID by using PHP's md5()
            $a = filter_input(INPUT_POST, 'firstName');
            $b = filter_input(INPUT_POST, 'lastName');
            $id = md5($a.$b);
            
            //username
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');            
            //adding into database
            //goes to register_functions.php
            register_user($id, $username, $password);
            
            //bio
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $school = filter_input(INPUT_POST, 'school');
            $year = filter_input(INPUT_POST, 'year');  
            
            //image
            $img = ($_FILES['img']['name']);                       
            //checking to see if the img is in file
            if(isset($_FILES['img'])){
                //moves the file to a location
                $target = "../View/student/img/";
                $target = $target . basename( $_FILES['img']['name']);
                $file_tmp =$_FILES['img']['tmp_name'];

                move_uploaded_file($file_tmp,$target);
            }
            
            //adding into database
            //goes to register_functions.php
            register_bio($id, $firstName, $lastName, $city, 
                            $state, $school, $year, $img);
            
            //info
            $info_intro = filter_input(INPUT_POST, 'info_intro');
            $info_interests = filter_input(INPUT_POST, 'info_interests');
            $info_work = filter_input(INPUT_POST, 'info_work');
            $info_achievements = filter_input(INPUT_POST, 'info_achievements');
            $info_colleges = filter_input(INPUT_POST, 'info_colleges');
            $info_actScore = filter_input(INPUT_POST, 'info_actScore');
            $info_satScore = filter_input(INPUT_POST, 'info_satScore');           
            //adding into database
            //goes to register_functions.php
            register_info($id, $info_intro, $info_interests, $info_work, $info_achievements, 
                            $info_colleges, $info_actScore, $info_satScore);          
            
            //scholarship
            $scholar_academics = filter_input(INPUT_POST, 'scholar_academics');
            $scholar_sports = filter_input(INPUT_POST, 'scholar_sports');
            $scholar_arts= filter_input(INPUT_POST, 'scholar_arts');
            $scholar_other = filter_input(INPUT_POST, 'scholar_other');
            
            //adding into database
            //goes to register_functions.php
            register_scholarship($id, $scholar_academics, $scholar_sports, 
                                    $scholar_arts, $scholar_other);
            
            
            //places ID into student_contact table
            contact_id($id);
            
            header('Location:../View/register/thankyou.php');
            break;
       
/*-----------------------------------------------------------------------------
                            Student Edit
-----------------------------------------------------------------------------*/
        case 'student_contact':
            //retrieves from student dashboard's edit
            $con_email = filter_input(INPUT_POST, 'contact_email');
            $con_web = filter_input(INPUT_POST, 'contact_web');
            $con_fb = filter_input(INPUT_POST, 'contact_fb');
            $con_insta = filter_input(INPUT_POST, 'contact_insta');
            $con_twitter = filter_input(INPUT_POST, 'contact_twitter');
            $con_youtube = filter_input(INPUT_POST, 'contact_youtube');
            
            //sends to functions/edit_functions.php
            edit_student_contact($con_email, $con_web, $con_fb, $con_insta, 
                                        $con_twitter, $con_youtube, $edit_id);
            
            header('Location:../View/student/dashboard.php');
            break;   
            
        case 'edit_student_password':         
            //retrieves from resume_edit.php
            $user = filter_input(INPUT_POST, 'username');
            $pw = filter_input(INPUT_POST, 'password');
            
            //sends to edit_functions.php
            edit_student_password($user, $pw, $edit_id, $img);
           
            header('Location:../View/student/dashboard.php');
            break;
        
        case 'edit_student_bio':
            //retrieves from resume_edit.php
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $school = filter_input(INPUT_POST, 'school');
            $year = filter_input(INPUT_POST, 'year');
            //image
            $img = ($_FILES['img']['name']);
            //checking to see if the img is in file
            if(isset($_FILES['img'])){
                //moves the file to a location
                $target = "../View/student/img/";
                $target = $target . basename( $_FILES['img']['name']);
                $file_tmp =$_FILES['img']['tmp_name'];

                move_uploaded_file($file_tmp,$target);
            }
            //sends to edit_functions.php
            edit_student_bio($firstName, $lastName, $city, $state, $school,
                                $year, $edit_id, $img);
            
            header('Location:../View/student/dashboard.php');
            break;
        
        case 'edit_student_info':
            //retrieves from resume_edit.php
            $intro = filter_input(INPUT_POST, 'info_intro');
            $interests = filter_input(INPUT_POST, 'info_interests');
            $work = filter_input(INPUT_POST, 'info_work');
            $achievements = filter_input(INPUT_POST, 'info_achievements');
            $colleges = filter_input(INPUT_POST, 'info_colleges');
            $act = filter_input(INPUT_POST, 'info_actScore');
            $sat = filter_input(INPUT_POST, 'info_satScore');
            
            //sends to functions/edit_functions.php
            edit_student_info($edit_id, $intro, $interests, $work, $achievements, 
                                    $colleges, $act, $sat);
            
            header('Location:../View/student/dashboard.php');
            break;
        
        case 'edit_student_scholarship' :
            //retrieves from resume_edit.php
            $academics = filter_input(INPUT_POST, 'scholar_academics');
            $sports = filter_input(INPUT_POST, 'scholar_sports');
            $arts= filter_input(INPUT_POST, 'scholar_arts');
            $other = filter_input(INPUT_POST, 'scholar_other');
            
            //sends to edit_functions.php
            edit_student_scholarship($edit_id, $academics, $sports, $other, $arts);
            
            header('Location:../View/student/dashboard.php');
            break;
        
        case 'delete_student':
            //retrieves from adminEdit.php
            $id = filter_input(INPUT_POST, 'id');

            //sends to admin_functions.php
              delete_student_bio($id);
              delete_student_info($id);
              delete_student_login($id);
              delete_student_scholarships($id);
             
              header('Location: ../View/admin/studentList.php'); 
                      
            break;
/*-----------------------------------------------------------------------------
                            Admin Edit
-----------------------------------------------------------------------------*/
    
        case 'add_admin':
            //retrieves from adminEdit.php
            $id = filter_input(INPUT_POST, 'id');
            $last = filter_input(INPUT_POST, 'lastName');
            $first = filter_input(INPUT_POST, 'firstName');
            $email = filter_input(INPUT_POST, 'email');
            $phone = filter_input(INPUT_POST, 'phone');
            $user = filter_input(INPUT_POST, 'user');
            $pw = filter_input(INPUT_POST, 'pw');
            //image
            $img = ($_FILES['img']['name']);
            
            //sends to Model/functions/admin_functions.php
            add_admin($id, $last, $first, $email, $phone, $user, $pw, $img);
            
            //checking to see if the img is in file
            if(isset($_FILES['img'])){
                //moves the file to a location
                $target = "../view/admin/img/";
                $target = $target . basename( $_FILES['img']['name']);
                $file_tmp =$_FILES['img']['tmp_name'];

                move_uploaded_file($file_tmp,$target);
            }
            echo $img;
            header('Location: ../View/admin/adminList.php');
            break;
        
        case 'delete_admin':
            //retrieves from adminEdit.php
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            
            //sends to admin_functions.php
            delete_admin($id);

            header('Location: ../View/admin/adminList.php');
            break;

    }
    
    

