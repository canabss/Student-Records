<?php
    include("../model/studentGrades.php");
    session_start();

    $student = new StudentGrades();

    $studentId = "";
    $firstname = "";
    $middlename = "";
    $lastname = "";
    $birthday = "";
    $age = "";
    $gender = "";
    $email = "";
    $address = "";
    $course = "";
    $year = "";
    $section = "";

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])){
        $student = new EditStudent();
        $studentId = $_POST['studentId'];
        $result = $student->getStudentGrades($studentId);

        foreach($result as $key => $value){
            $firstname = $value['first_name'];
            $middlename = $value['middle_name'];
            $lastname = $value['last_name'];
            $birthday = $value['birthday'];
            $age = $value['age'];
            $gender = $value['gender'];
            $email = $value['email'];
            $address = $value['address'];
            $course = $value['course'];
            $year = $value['year'];
            $section = $value['section'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Grades</title>
    </head>
    <body>
        <section class="content">
            <div class="container">
                <div class="card align-items-stretch mb-5" id="card">
                    <div class="card-body">
                        <h1 class="title text-uppercase">Student Grades Record</h1></br>
                        <div class="row">
                            <div class="col-6">
                                <p>Student ID: <?php echo $studentId;?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Name: <?php echo $firstname." ".$middlename." ".$lastname;?></p>
                            </div>
                            <div class="col-6">
                                <p>Course: <?php echo $course;?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Age: <?php echo $age;?></p>
                            </div>
                            <div class="col-6">
                                <p>Yr and Section: <?php echo $year." - ".$section;?></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>