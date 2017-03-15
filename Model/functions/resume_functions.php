<?php
include "/../database/sql.php";

function get_thumbnail() {//used in resume_view/
    global $db;        
    $query = 'SELECT * 
              FROM studentbio ';
    $statement = $db->prepare($query);
    $statement->execute();
    $student = $statement->fetchAll();
    $statement->closeCursor();
    return $student;
}//used in resume/resume_list.php

function get_student() {//used in resume_view/
    global $db;
    $query = 'SELECT * 
              FROM studentbio ';
    $statement = $db->prepare($query);
    $statement->execute();
    $student = $statement->fetchAll();
    $statement->closeCursor();
    return $student;
}

function get_contact($id) {
    global $db;
    $query = 'SELECT * 
              FROM studentContact
              WHERE student_id = :id';
    $statement = $db->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement->execute();
    $student = $statement->fetchAll();
    $statement->closeCursor();
    return $student;
}//used from student/resume_view/contact.php

function get_bio($id) {
    global $db;        
    $query = 'SELECT * 
              FROM studentbio 
              WHERE student_id = :id';
    $statement = $db->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement->execute();
    $student = $statement->fetchAll();
    $statement->closeCursor();
    return $student;
}//used from student/resume_view/profile.php
 //used from student/resume_view/education.php

function get_info($id){
    global $db;        
    $query = 'SELECT * 
              FROM studentinfo 
              WHERE student_id = :id';
    $statement = $db->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement -> execute();
    $student = $statement->fetchAll();
    $statement->closeCursor();
    return $student;
}//used from student/resume_view/achievement.php
 //used from student/resume_view/colleges.php
 //used from student/resume_view/interest.php
 //used from student/resume_view/test_score.php
 //used from student/resume_view/work_history.php
 //used from student/resume_view/contact.php

function get_scholarship($id){
    global $db;
    $query = 'SELECT * 
              FROM studentscholarships 
              WHERE student_id = :id';
    $statement = $db->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement -> execute();
    $student = $statement->fetchAll();
    $statement->closeCursor();
    return $student;
}//used from student/resume_view/scholarship.php
