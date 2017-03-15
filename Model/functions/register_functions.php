<?php

function register_user($id, $username, $password){
    global $db;
    $query = "INSERT INTO studentLogin
             (student_id, username, password) 
             VALUES
             (:id, :username, :password)";
    $statement = $db -> prepare($query);
    $statement -> bindValue(':id', $id);
    $statement -> bindValue(':username', $username);
    $statement -> bindValue(':password', $password);
    $statement -> execute();
    $statement -> closeCursor();  
}

function register_bio($id,$firstName, $lastName, $city, $state, $school, $year, $img){
    global $db;
    $query = "INSERT INTO studentBio
             (student_id, firstName, lastName, city, state, year, school, img) 
             VALUES
             (:id, :firstName, :lastName, :city, :state, :year, :school, :img)";
    $statement = $db -> prepare($query);
    $statement -> bindValue(':id', $id);
    $statement -> bindValue(':firstName', $firstName);
    $statement -> bindValue(':lastName', $lastName);
    $statement -> bindValue(':city', $city);
    $statement -> bindValue(':state', $state);
    $statement -> bindValue(':school', $school);
    $statement -> bindValue(':year', $year);
    $statement -> bindValue(':img', $img);
    $statement -> execute();
    $statement -> closeCursor();  
}

function register_scholarship($id, $scholar_academics, $scholar_sports, 
                                    $scholar_arts, $scholar_other){
    global $db;
    $query = 'INSERT INTO studentScholarships
                (student_id, academic, sports, art, others)
              VALUES
                (:id, :academic, :sports, :art, :others)';
    $statement = $db ->prepare($query);
    $statement -> bindValue(':id', $id);
    $statement -> bindValue(':academic',$scholar_academics);
    $statement -> bindValue(':sports',$scholar_sports);
    $statement -> bindValue(':art',$scholar_arts);
    $statement -> bindValue(':others',$scholar_other);
    $statement -> execute();
    $statement -> closeCursor();
    
    echo 'registered scholarship';
}

function register_info($id, $info_intro, $info_interest, $info_work, $info_achievements, 
                            $info_colleges, $info_actScore, $info_satScore){
    global $db;
    $query = "INSERT INTO studentInfo
             (student_id, intro, interests, work_history, achievements, colleges, 
                    act_score, sat_score) 
             VALUES
             (:id, :intro, :interests, :work, :achievements, :colleges, :act, :sat)";
    $statement = $db -> prepare($query);
    $statement -> bindValue(':id', $id);
    $statement -> bindValue(':intro', $info_intro);
    $statement -> bindValue(':interests', $info_interest);
    $statement -> bindValue(':work', $info_work);
    $statement -> bindValue(':achievements', $info_achievements);
    $statement -> bindValue(':colleges', $info_colleges);
    $statement -> bindValue(':act', $info_actScore);
    $statement -> bindValue(':sat', $info_satScore);
    $statement -> execute();
    $statement -> closeCursor();                
}

function contact_id($id){
    global $db;
    $query = "INSERT INTO studentContact
             (student_id) 
             VALUES
             (:id)";
    $statement = $db -> prepare($query);
    $statement -> bindValue(':id', $id);
    $statement -> execute();
    $statement -> closeCursor();  
}