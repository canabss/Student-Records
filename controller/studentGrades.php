<?php
    include("../model/studentGrades.php");
    session_start();

    $studentGrades = new StudentGrades();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])){
        $studentId = $_POST['id'];
        $filipino = $_POST['filipino'];
        $english = $_POST['english'];
        $mathematics = $_POST['mathematics'];
        $science = $_POST['science'];
        $average = (($filipino + $english + $mathematics + $science) / 4);

        $isSuccess = $studentGrades -> addStudentGrade($studentId, $filipino, $english, $mathematics, $science, $average);

        if($isSuccess){
            $_SESSION['successfully-saved'] = true;
            header("Location: ../view/addStudentGrades.php");
        }
        else{
            $_SESSION['successfully-saved'] = false;
            header("Location: ../view/addStudentGrades.php");
        }
    }
