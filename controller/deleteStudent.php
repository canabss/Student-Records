<?php
    include("../model/deleteStudent.php");
    session_start();

    $studentList = new DeleteStudent();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])){
        
        $studentId = $_POST['studentId'];
        $isSuccess = $studentList -> deleteRecord($studentId);

        if($isSuccess){
            $_SESSION['successfully-deleted'] = true;
            header("Location: ../index.php");
        }
        else{
            $_SESSION['successfully-deleted'] = false;
            header("Location: ../index.php");
        }
    }