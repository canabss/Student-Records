<?php
    include("../model/editStudent.php");
    session_start();

    $studentList = new EditStudent();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])){
        $studentId = $_POST['studentId'];
        $firstname = $_POST['firstName'];
        $middlename = $_POST['middleName'];
        $lastname = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['email'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $section = $_POST['section'];

        $isSuccess = $studentList -> updateStudentInfo($firstname, $middlename, $lastname, $birthday, $age, $gender, $email, $address, $course, $year, $section, $studentId);
        
        if($isSuccess){
            $_SESSION['successfully-updated'] = true;
            header("Location: ../view/editStudent.php");
        }
        else{
            $_SESSION['successfully-updated'] = false;
            header("Location: ../view/editStudent.php");
        }
        
    }