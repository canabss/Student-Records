<?php
    include("../model/addStudent.php");
    session_start();
    $addStudent = new AddStudent();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])){
        $firstname = $_POST['firstName'];
        $middlename = $_POST['middleName'];
        $lastname = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $section = $_POST['section'];

        $isSuccess = $addStudent -> addNewStudent($firstname, $middlename, $lastname, $birthday, $age, $gender, $email, $address, $course, $year, $section);
        
        if($isSuccess){
            $_SESSION['successfully-saved'] = true;
            header("Location: ../view/addStudent.php");
        }
        else{
            $_SESSION['successfully-saved'] = false;
            header("Location: ../view/addStudent.php");
        }
        
    }