<?php
/* Used in controller/controller.php for the student/resume_edit.php*/

//edits student's username and password
function edit_student_password($id, $user, $pw){
    global $db;
     $query = 'UPDATE studentlogin
              SET username = :user,
                  password = :pw
              WHERE student_id = :id';
        $statement = $db ->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement -> bindValue(':user',$user);
    $statement -> bindValue(':pw',$pw); 
    $statement -> execute();
    $statement -> closeCursor(); 
}

//edits student's contact
function edit_student_contact($con_email, $con_web, $con_fb, $con_insta, 
                                        $con_twitter, $con_youtube, $edit_id){
    global $db;
     $query = 'UPDATE studentcontact
              SET email = :email,
                  website = :web,
                  facebook = :fb,
                  instagram = :insta,
                  twitter = :twitter,
                  youtube = :youtube
              WHERE student_id = :id';
        $statement = $db ->prepare($query);
    $statement -> bindValue(':id',$edit_id);
    $statement -> bindValue(':email',$con_email);
    $statement -> bindValue(':web',$con_web); 
    $statement -> bindValue(':fb',$con_fb);
    $statement -> bindValue(':insta',$con_insta);
    $statement -> bindValue(':twitter',$con_twitter);
    $statement -> bindValue(':youtube',$con_youtube);
    $statement -> execute();
    $statement -> closeCursor();                                        
}

//edits student's bio
function edit_student_bio($firstName, $lastName, $city, $state, $school,
                                $year, $edit_id, $img){
    global $db;
     $query = 'UPDATE studentbio
              SET firstName = :firstName,
                  lastName = :lastName,
                  city = :city,
                  state = :state,
                  year = :year,
                  school = :school, img = :img
              WHERE student_id = :id';
        $statement = $db ->prepare($query);
    $statement -> bindValue(':id',$edit_id);
    $statement -> bindValue(':firstName',$firstName);
    $statement -> bindValue(':lastName',$lastName); 
    $statement -> bindValue(':city',$city);
    $statement -> bindValue(':state',$state);
    $statement -> bindValue(':school',$school);
    $statement -> bindValue(':year',$year);
    $statement -> bindValue(':img',$img);
    $statement -> execute();
    $statement -> closeCursor(); 
}

//edits student's info
function edit_student_info($edit_id, $intro, $interests, $work, $achievements, 
                                    $colleges, $act, $sat){
    global $db;
     $query = 'UPDATE studentinfo
              SET interests = :interests,
                  intro = :intro,
                  work_history = :work,
                  achievements = :achievements,
                  colleges = :colleges,
                  act_score = :act, sat_score = :sat
              WHERE student_id = :id';
        $statement = $db ->prepare($query);
    $statement -> bindValue(':id',$edit_id);
    $statement -> bindValue(':interests',$interests);
    $statement -> bindValue(':intro',$intro);
    $statement -> bindValue(':work',$work); 
    $statement -> bindValue(':colleges',$colleges);
    $statement -> bindValue(':act',$act);
    $statement -> bindValue(':sat',$sat);
    $statement -> bindValue(':achievements',$achievements);
    $statement -> execute();
    $statement -> closeCursor(); 
}

//edits student's scholarship
function edit_student_scholarship($edit_id, $academics, $sports, $other, $art){
    global $db;
     $query = 'UPDATE studentscholarships
              SET academic = :academic,
                  sports = :sports,
                  art = :art,
                  others = :others
              WHERE student_id = :id';
        $statement = $db ->prepare($query);
    $statement -> bindValue(':id',$edit_id);
    $statement -> bindValue(':academic',$academics);
    $statement -> bindValue(':sports',$sports); 
    $statement -> bindValue(':others',$other);
    $statement -> bindValue(':art',$art);
    $statement -> execute();
    $statement -> closeCursor(); 
}
