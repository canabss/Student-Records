<?php
    include("autoload.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Records</title>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" id="site-name" href="index.php">
                        <img id="logo" src="assets/images/logo.png" alt="iPhiTech" />
                    </a>
                </div>
            </nav>
        </header>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header" style = "background-color: #FFFFFF;">
                        <div class="row">
                            <h1 class="table-title text-uppercase">Student Records</h1>
                            <a href="view/addStudent.php" class='btn btn-primary add-button' name = 'add'>
                                <i class='fas fa-plus'></i> Add Student
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-striped nowrap text-center" style="width: 100%;">
                            <thead class="table-dark">
                                <tr>
                                    <th>Student ID</th>
                                    <th>Full Name</th>
                                    <th>Birthday</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Course</th>
                                    <th>Year and Section</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $studentList = new StudentListView();
                                    $studentList->showStudentList();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://oscrs-bulsusc.com/assets/js/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
        <?php if(isset($_SESSION['successfully-deleted'])) :?>
            <?php if($_SESSION['successfully-deleted'] == true) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Record Successfully Deleted', 
                        icon:'success', 
                        confirmButtonColor: '#6F37A7', 
                        allowOutsideClick: false
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location.replace('index.php');
                        }
                    });
                </script>
                <?php unset($_SESSION['successfully-deleted']);?>
            <?php endif;?>
        <?php endif; ?>
        <?php if(isset($_SESSION['successfully-deleted'])) :?>
            <?php if($_SESSION['successfully-deleted'] == false) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Failed to Delete Record',
                        icon:'error', 
                        confirmButtonColor: '#6F37A7', 
                        allowOutsideClick: false
                    });
                </script>
                <?php unset($_SESSION['successfully-deleted']);?>
            <?php endif;?>
        <?php endif;?>
    </body>
</html>