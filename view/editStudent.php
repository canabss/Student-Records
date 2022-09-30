<?php
    include("../model/editStudent.php");
    session_start();

    $student = new EditStudent();

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
        $result = $student->getStudentInfo($studentId);

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
        <title>Update Student Record</title>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
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
        <section class="content">
            <div class="container">
                <div class="card align-items-stretch mb-5" id="card">
                    <div class="card-body">
                        <h1 class="title text-uppercase">Update Student Record</h1></br>
                        <form id="requestForm" method="post" action="../controller/editStudent.php">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="studentId">Student ID:</label>
                                    <input class = "form-control" type="text" name="studentId" id="studentId" value="<?php echo $studentId;?>" readonly/></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="lastName">Last Name:*</label>
                                    <input class = "form-control" type="text" placeholder="Ex. Dela Cruz" name="lastName" id="lastName" value="<?php echo $lastname;?>" required/></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="firstName">First Name:*</label>
                                    <input class = "form-control" type="text" placeholder="Ex. Juan" name="firstName" id="firstName" value="<?php echo $firstname;?>" required/></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="middleName">Middle Name: (Optional)</label>
                                    <input class = "form-control" type="text" placeholder="Ex. Ponce" name="middleName" id="middleName" value="<?php echo $middlename;?>"/></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="birthday">Birthday:*</label>
                                    <input class = "form-control text-uppercase" type="date" name="birthday" id="birthday" value="<?php echo $birthday;?>" required/></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="age">Age: *</label>
                                    <input class = "form-control" placeholder="Age" type="text" name="age" id="age" value="<?php echo $age;?>" required></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="gender">Gender:*</label>
                                    <select name="gender" id="gender" class = "form-control"  required>
                                        <option value="">Select</option>
                                        <option value="Male" <?php if("$gender" == "Male"):?>selected = "selected"<?php endif?>>Male</option>
                                        <option value="Female" <?php if("$gender" == "Female"):?>selected = "selected"<?php endif?>>Female</option>
                                        <option value="Custom" <?php if("$gender" == "Custom"):?>selected = "selected"<?php endif?>>Custom</option>
                                    </select></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="email">Email Address:*</label>
                                    <input class = "form-control" type="email" placeholder="juanponcedelacruz@gmail.com" name="email" id="email"  value="<?php echo $email;?>" required/></br>
                                </div>
                                <div class="col-lg-4">
                                <label class = "form-label" for="year">Year:*</label>
                                    <select name="year" id="year" class = "form-control" required>
                                        <option value="">Select</option>
                                        <option value="1st" <?php if("$year" == "1st"):?>selected = "selected"<?php endif?>>1st</option>
                                        <option value="2nd" <?php if("$year" == "2nd"):?>selected = "selected"<?php endif?>>2nd</option>
                                        <option value="3rd" <?php if("$year" == "3rd"):?>selected = "selected"<?php endif?>>3rd</option>
                                        <option value="4th" <?php if("$year" == "4th"):?>selected = "selected"<?php endif?>>4th</option>
                                    </select></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="section">Section:*</label>
                                    <input class = "form-control" placeholder="Section" type="text" name="section" value="<?php echo $section;?>"/></br>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <label class = "form-label" for="address">Complete Address:(Optional)</label>
                                    <input class = "form-control" placeholder="Complete Address" type="text" name="address" value="<?php echo $address;?>"/></br>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <label class = "form-label" for="course">Course:*</label><br/>
                                    <select name="course" id="course" class = "form-control">
                                    <option value="">Select</option>
                                    <option value="Bachelor of Science in Information Technology" <?php if("$course" == "Bachelor of Science in Information Technology") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Information Technology</option>
                                    <br>
                                    <optgroup label="Bachelor in Industrial Technology">
                                        <option value="Bachelor in Industrial Technology Major in Computer Technology" <?php if("$course" == "Bachelor in Industrial Technology Major in Computer Technology") :?>selected = "selected"<?php endif;?>>Bachelor in Industrial Technology Major in Computer Technology</option>
                                        <option value="Bachelor in Industrial Technology Major in Electronics" <?php if("$course" == "Bachelor in Industrial Technology Major in Electronics") :?>selected = "selected"<?php endif;?>>Bachelor in Industrial Technology Major in Electronics</option>
                                        <option value="Bachelor in Industrial Technology Major in Drafting" <?php if("$course" == "Bachelor in Industrial Technology Major in Drafting") :?>selected = "selected"<?php endif;?>>Bachelor in Industrial Technology Major in Drafting</option>
                                        <option value="Bachelor in Industrial Technology Major in Foods" <?php if("$course" == "Bachelor in Industrial Technology Major in Foods") :?>selected = "selected"<?php endif;?>>Bachelor in Industrial Technology Major in Foods</option>
                                    </optgroup>
                                    <br>
                                    <option value="BEED">Bachelor in Elementary Education General Education</option>
                                    <br>
                                    <optgroup label="Bachelor of Secondary Education">
                                        <option value="Bachelor of Secondary Education Major in English" <?php if("$course" == "Bachelor of Secondary Education Major in English") :?>selected = "selected"<?php endif;?>>Bachelor of Secondary Education Major in English</option>
                                        <option value="Bachelor of Secondary Education Major in Mathematics" <?php if("$course" == "Bachelor of Secondary Education Major in Mathematics") :?>selected = "selected"<?php endif;?>>Bachelor of Secondary Education Major in Mathematics</option>
                                        <option value="Bachelor of Secondary Education Major in Science" <?php if("$course" == "Bachelor of Secondary Education Major in Science") :?>selected = "selected"<?php endif;?>>Bachelor of Secondary Education Major in Science</option>
                                        <option value="Bachelor of Secondary Education Major in Physical Science" <?php if("$course" == "Bachelor of Secondary Education Major in Physical Science") :?>selected = "selected"<?php endif;?>>Bachelor of Secondary Education Major in Physical Science</option>
                                        <option value="Bachelor of Secondary Education Major in Filipino" <?php if("$course" == "Bachelor of Secondary Education Major in Filipino") :?>selected = "selected"<?php endif;?>>Bachelor of Secondary Education Major in Filipino</option>
                                        <option value="Bachelor of Secondary Education Major in Social Studies" <?php if("$course" == "Bachelor of Secondary Education Major in Social Studies") :?>selected = "selected"<?php endif;?>>Bachelor of Secondary Education Major in Social Studies</option>
                                    </optgroup>
                                    <br>
                                    <optgroup label="Bachelor of Science in Business Administration">
                                        <option value="Bachelor of Science in Business Administration Major in General Business Administration" <?php if("$course" == "Bachelor of Science in Business Administration Major in General Business Administration") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Business Administration Major in General Business Administration</option>
                                        <option value="Bachelor of Science in Business Administration Major in Financial Management" <?php if("$course" == "Bachelor of Science in Business Administration Major in Financial Management") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Business Administration Major in Financial Management </option>
                                        <option value="Bachelor of Science in Business Administration Major in Marketing Management" <?php if("$course" == "Bachelor of Science in Business Administration Major in Marketing Management") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Business Administration Major in Marketing Management</option>
                                        <option value="Bachelor of Science in Business Administration Major in Business Economics" <?php if("$course" == "Bachelor of Science in Business Administration Major in Business Economics") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Business Administration Major in Business Economics</option>
                                    </optgroup>
                                    <option value="Bachelor of Science in Entrepeneurship" <?php if("$course" == "Bachelor of Science in Entrepeneurship") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Entrepeneurship</option>
                                    <option value="Bachelor of Science in Hospitality Management" <?php if("$course" == "Bachelor of Science in Hospitality Management") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Hospitality Management</option>
                                    <option value="Bachelor of Science in Hotel Restaurant Management" <?php if("$course" == "Bachelor of Science in Hotel Restaurant Management") :?>selected = "selected"<?php endif;?>>Bachelor of Science in Hotel Restaurant Management</option>
                                    </select><br/>	
                                </div>
                            </div>
                            <div class="footer-button">
                                <a href="../index.php" class="btn btn-primary text-uppercase"><i class="fas fa-chevron-left mr"></i> Back</a>
                                <button class="btn btn-primary text-uppercase" name="update"><i class="fas fa-save"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://oscrs-bulsusc.com/assets/js/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
        <?php if(isset($_SESSION['successfully-updated'])) :?>
            <?php if($_SESSION['successfully-updated'] == true) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Student Info Successfully Updated', 
                        icon:'success', 
                        confirmButtonColor: '#6F37A7', 
                        allowOutsideClick: false
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location.replace('../index.php');
                        }
                    });
                </script>
                <?php unset($_SESSION['successfully-updated']);?>
            <?php endif;?>
        <?php endif; ?>
        <?php if(isset($_SESSION['successfully-updated'])) :?>
            <?php if($_SESSION['successfully-updated'] == false) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Failed to Update Student Info',
                        icon:'error', 
                        confirmButtonColor: '#6F37A7', 
                        allowOutsideClick: false
                    });
                </script>
                <?php unset($_SESSION['successfully-updated']);?>
            <?php endif;?>
        <?php endif;?>
    </body>
</html>