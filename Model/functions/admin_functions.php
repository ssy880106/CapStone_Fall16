<?php

include "/../database/sql.php";

function get_admin(){//used in admin/adminList.php
    global $db;
    $query='SELECT * FROM admin';
    $statement = $db->prepare($query);
    $statement -> execute();
    $list = $statement->fetchAll();
    $statement->closeCursor();
    return $list;
}

function get_studentlist(){//used in admin/studentList.php
    global $db;
    $query='SELECT * FROM studentbio';
    $statement = $db->prepare($query);
    $statement -> execute();
    $list = $statement->fetchAll();
    $statement->closeCursor();
    return $list;
}

function get_img($id){
    global $db;
    $query='SELECT * 
            FROM admin
            WHERE admin_id = :id';
    $statement = $db->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement->execute();
    $list = $statement->fetchAll();
    $statement->closeCursor();
    return $list;
}

function add_admin($id, $last, $first, $email, $phone, $user, $pw, $img){
    global $db;
    $query = 'INSERT INTO admin
                (admin_id, lastName, firstName, email, phone, username, password, img)
              VALUES
                (:id, :last, :first, :email, :phone, :user, :pw, :img)';
    $statement = $db ->prepare($query);
    $statement -> bindValue(':id',$id);
    $statement -> bindValue(':last',$last);
    $statement -> bindValue(':first',$first);
    $statement -> bindValue(':email',$email);
    $statement -> bindValue(':phone',$phone);
    $statement -> bindValue(':pw',$pw);
    $statement -> bindValue(':user',$user);
    $statement -> bindValue(':img',$img);
    $statement -> execute();
    $statement -> closeCursor();
}

function delete_admin($id){
    global $db;
    $query = 'DELETE FROM admin
              WHERE admin_id = :id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":id", $id);
    $statement -> execute();
    $statement -> closeCursor();
}

/* ----------------------------------------------------------------------------
 *                      Student Delete
 ----------------------------------------------------------------------------*/
function delete_student_bio($id){
    global $db;
    $query = 'DELETE FROM studentbio
              WHERE student_id = :id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":id", $id);
    $statement -> execute();
    $statement -> closeCursor();
}

function delete_student_info($id){
    global $db;
    $query = 'DELETE FROM studentinfo
              WHERE student_id = :id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":id", $id);
    $statement -> execute();
    $statement -> closeCursor();
}
              
function delete_student_login($id){
    global $db;
    $query = 'DELETE FROM studentlogin
              WHERE student_id = :id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":id", $id);
    $statement -> execute();
    $statement -> closeCursor();
}

function delete_student_scholarships($id){
    global $db;
    $query = 'DELETE FROM studentscholarships
              WHERE student_id = :id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":id", $id);
    $statement -> execute();
    $statement -> closeCursor();
}