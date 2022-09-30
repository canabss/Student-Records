<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student Form</title>
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
                        <h1 class="title text-uppercase">Add Student Form</h1></br>
                        <form id="requestForm" method="post" action="../controller/addStudent.php">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="lastName">Last Name:*</label>
                                    <input class = "form-control" type="text" placeholder="Ex. Dela Cruz" name="lastName" id="lastName" value="" required/></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="firstName">First Name:*</label>
                                    <input class = "form-control" type="text" placeholder="Ex. Juan" name="firstName" id="firstName" value="" required/></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="middleName">Middle Name: (Optional)</label>
                                    <input class = "form-control" type="text" placeholder="Ex. Ponce" name="middleName" id="middleName" value=""/></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="birthday">Birthday:*</label>
                                    <input class = "form-control text-uppercase" type="date" name="birthday" id="birthday" value="" required/></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="age">Age: *</label>
                                    <input class = "form-control" placeholder="Age" type="text" name="age" id="age" value="" required></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="gender">Gender:*</label>
                                    <select name="gender" id="gender" class = "form-control"  required>
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Custom">Custom</option>
                                    </select></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class = "form-label" for="email">Email Address:*</label>
                                    <input class = "form-control" type="email" placeholder="juanponcedelacruz@gmail.com" name="email" id="email"  value="" required/></br>
                                </div>
                                <div class="col-lg-4">
                                <label class = "form-label" for="year">Year:*</label>
                                    <select name="year" id="year" class = "form-control" required>
                                        <option value="">Select</option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                    </select></br>
                                </div>
                                <div class="col-lg-4">
                                    <label class = "form-label" for="section">Section:*</label>
                                    <input class = "form-control" placeholder="Section" type="text" name="section"/></br>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <label class = "form-label" for="address">Complete Address:(Optional)</label>
                                    <input class = "form-control" placeholder="Complete Address" type="text" name="address"/></br>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <label class = "form-label" for="course">Course:*</label><br/>
                                    <select name="course" id="course" class = "form-control">
                                        <option value="">Select</option>
                                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                    <br>
                                    <optgroup label="Bachelor in Industrial Technology">
                                        <option value="Bachelor in Industrial Technology Major in Computer Technology">Bachelor in Industrial Technology Major in Computer Technology</option>
                                        <option value="Bachelor in Industrial Technology Major in Electronics">Bachelor in Industrial Technology Major in Electronics</option>
                                        <option value="Bachelor in Industrial Technology Major in Drafting">Bachelor in Industrial Technology Major in Drafting</option>
                                        <option value="Bachelor in Industrial Technology Major in Foods">Bachelor in Industrial Technology Major in Foods</option>
                                    </optgroup>
                                    <br>
                                    <option value="BEED">Bachelor in Elementary Education General Education</option>
                                    <br>
                                    <optgroup label="Bachelor of Secondary Education">
                                        <option value="Bachelor of Secondary Education Major in English">Bachelor of Secondary Education Major in English</option>
                                        <option value="Bachelor of Secondary Education Major in Mathematics">Bachelor of Secondary Education Major in Mathematics</option>
                                        <option value="Bachelor of Secondary Education Major in Science">Bachelor of Secondary Education Major in Science</option>
                                        <option value="Bachelor of Secondary Education Major in Physical Science">Bachelor of Secondary Education Major in Physical Science</option>
                                        <option value="Bachelor of Secondary Education Major in Filipino">Bachelor of Secondary Education Major in Filipino</option>
                                        <option value="Bachelor of Secondary Education Major in Social Studies">Bachelor of Secondary Education Major in Social Studies</option>
                                    </optgroup>
                                    <br>
                                    <optgroup label="Bachelor of Science in Business Administration">
                                        <option value="Bachelor of Science in Business Administration Major in General Business Administration">Bachelor of Science in Business Administration Major in General Business Administration</option>
                                        <option value="Bachelor of Science in Business Administration Major in Financial Management">Bachelor of Science in Business Administration Major in Financial Management </option>
                                        <option value="Bachelor of Science in Business Administration Major in Marketing Management">Bachelor of Science in Business Administration Major in Marketing Management</option>
                                        <option value="Bachelor of Science in Business Administration Major in Business Economics">Bachelor of Science in Business Administration Major in Business Economics</option>
                                    </optgroup>
                                    <option value="Bachelor of Science in Entrepeneurship">Bachelor of Science in Entrepeneurship</option>
                                    <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
                                    <option value="Bachelor of Science in Hotel Restaurant Management">Bachelor of Science in Hotel Restaurant Management</option>
                                    </select>	<br/>	
                                </div>
                            </div>
                            <div class="footer-button">
                                <a href="../index.php" class="btn btn-primary text-uppercase"><i class="fas fa-chevron-left mr"></i> Back</a>
                                <button class="btn btn-primary text-uppercase" name="save"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://oscrs-bulsusc.com/assets/js/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
        <?php if(isset($_SESSION['successfully-saved'])) :?>
            <?php if($_SESSION['successfully-saved'] == true) :?>
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'New Student Successfully Added', 
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
                        title: 'Failed to Add New Student',
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