<?php
session_start();
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$errors = [];
//VALIDATION RULE

if(empty($title)){
    $errors['title_error'] = 'You have missed your title';
}elseif (strlen($title) >= 50){
    $errors['title_error'] = 'You have crossed your limit';
}

if(empty($detail)){
    $errors['detail_error'] = 'You have missed your detail';
}

if(count($errors) > 0){
    //* redirect back;
    $_SESSION['form_errors'] = $errors;
    $_SESSION['old'] = $_REQUEST;
    header("Location: ../index.php"); //move from one page to another
}else{
    //* move forward;
}