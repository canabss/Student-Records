<?php
    include("../model/studentGrades.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header>    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" id="site-name" href="../index.php">
                    <img id="logo" src="../assets/images/logo.png" alt="iPhiTech" />
                </a>
            </div>
        </nav>
    </header>
    <?php
        $studentGrades = new StudentGrades();
        
    
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['view'])){
            $studentId = $_POST['studentId'];
            $result = $studentGrades->getStudentGrades($studentId);
    
            foreach($result as $key => $value){
                $studentId = $value['student_id'];
                $filipino = $value['filipino_grade'];
                $english = $value['english_grade'];
                $mathematics = $value['mathematics_grade'];
                $science = $value['science_grade'];
                $average = $value['general_average'];

            }
            if(!empty($result)){
                
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

                $result1 = $studentGrades->getStudentInfo($studentId);

                foreach($result1 as $key => $value){
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
                echo '<section class="content">
                            <div class="container">
                                <div class="card align-items-stretch mb-5" id="card">
                                    <div class="card-body">
                                        <h1 class="title text-uppercase">Student Grades Record</h1></br>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Student ID: '.$studentId.'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Name: '.$firstname.' '.$middlename.''.$lastname.'</p>
                                            </div>
                                            <div class="col-6">
                                                <p>Course: '.$course.'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Age: '.$age.'</p>
                                            </div>
                                            <div class="col-6">
                                                <p>Yr and Section: '.$year.' - '.$section.'</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 text-center">
                                                <label class = "form-label" for="filipino">Filipino Grade:</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p>'.$filipino.'</p><br>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 text-center">
                                                <label class = "form-label" for="english">English Grade:</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p>'.$english.'</p><br>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 text-center">
                                                <label class = "form-label" for="mathematics">Mathematics Grade:</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p>'.$mathematics.'</p><br>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 text-center">
                                                <label class = "form-label" for="science">Science Grade:</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p>'.$science.'</p><br>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 text-center">
                                                <label class = "form-label" for="science">General Average:</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p>'.$average.'</p><br>
                                            </div>
                                        </div>
                                        <div class="footer-button">
                                            <a href="../index.php" class="btn btn-primary text-uppercase"><i class="fas fa-chevron-left mr"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>';
            }
            else{
                echo '<section class="content" >
                            <div class="container">
                                <div class="card align-items-stretch mb-5" style="margin-top: 5rem;">
                                    <div class="card-body">
                                        <h1 class="title text-uppercase">Encode Student Grades</h1></br>
                                        <form id="requestForm" method="POST" action="../controller/studentGrades.php">
                                            <input type="hidden" value="'.$studentId.'" name = "id">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 text-center">
                                                    <label class = "form-label" for="filipino">Set Filipino Grade:</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class = "form-control" type="text" placeholder="Set Grade" name="filipino" id="filipino" value="" required/></br>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 text-center">
                                                    <label class = "form-label" for="english">Set English Grade:</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class = "form-control" type="text" placeholder="Set Grade" name="english" id="english" value="" required/></br>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 text-center">
                                                    <label class = "form-label" for="mathematics">Set Mathematics Grade:</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class = "form-control" type="text" placeholder="Set Grade" name="mathematics" id="mathematics" value="" required/></br>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 text-center">
                                                    <label class = "form-label" for="science">Set Science Grade:</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class = "form-control" type="text" placeholder="Set Grade" name="science" id="science" value="" required/></br>
                                                </div>
                                            </div>
                                            <div class="footer-button">
                                                <a href="../index.php" class="btn btn-primary text-uppercase"><i class="fas fa-chevron-left mr"></i> Back</a>
                                                <button type="submit" class="btn btn-primary text-uppercase" name="save"><i class="fas fa-save"></i> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>';
            }
        }
    ?>
    
    <script src="https://oscrs-bulsusc.com/assets/js/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
        <?php if(isset($_SESSION['successfully-saved'])) :?>
            <?php if($_SESSION['successfully-saved'] == true) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Student Grades Succesfully Saved', 
                        icon:'success', 
                        confirmButtonColor: '#6F37A7', 
                        allowOutsideClick: false
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location.replace('../index.php');
                        }
                    });
                </script>
                <?php unset($_SESSION['successfully-saved']);?>
            <?php endif;?>
        <?php endif; ?>
        <?php if(isset($_SESSION['successfully-saved'])) :?>
            <?php if($_SESSION['successfully-saved'] == false) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Failed to Save Student Grades',
                        icon:'error', 
                        confirmButtonColor: '#6F37A7', 
                        allowOutsideClick: false
                    });
                </script>
                <?php unset($_SESSION['successfully-saved']);?>
            <?php endif;?>
        <?php endif;?>
</body>
</html>