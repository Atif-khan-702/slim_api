<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration form</title>
    <link rel="stylesheet" href="..\Bootstrap\css\login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        }
</script>
</head>
<body>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="display-4"><img src="..\Bootstrap\images\nit_logo.jpg" id="heading_image">National Institute Of Technology, Raipur</h2>
            </div>
            <div class="col-sm-2">
                <?php
                    echo "<h4>".$_SESSION['username']."</h4>";
                ?>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-12">
                <div class="topnav" id="myTopnav">
                <a href="student_login_page.php">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="" class="active">Update Profile</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>  
            </div>
        </div>
    </div>
    <div class="container bg-light pt-3">
        <form name="myForm1" id="myForm1" action='http://localhost/php/update_profile_done.php' method="POST">
            <h4>Personal Information:</h4>
            <div class="row">
                <div class="col-md-2">
                    <label for="name">Name:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="1" id="fname" placeholder="Enter First Name" value="<?php print_r($_SESSION['student_data'][0]) ?>" name="fname_update">
                    <label class="error" id="fname_error">First Name is required</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="2" id="mname" placeholder="Enter Middle Name" value="<?php print_r($_SESSION['student_data'][1]) ?>" name="mname_update">
                    <label id="fname_error"></label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="3" id="lname" placeholder="Enter Last Name" value="<?php print_r($_SESSION['student_data'][2]) ?>" name="lname_update">
                    <label class="error" id="lname_error">Last Name is required</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="fatherName">Father's Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="4" id="fatherName" name="fatherName_update" value="<?php print_r($_SESSION['student_data'][3]) ?>" placeholder="Enter Father's Name">
                    <label class="error" id="fatherName_error">Father Name is required</label>
                </div>
                <div class="col-md-2">
                    <label for="motherName">Mother's Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="5" id="motherName" name="motherName_update" value="<?php print_r($_SESSION['student_data'][4]) ?>" placeholder="Enter Mother's Name">
                    <label class="error" id="motherName_error">Mother Name is required</label>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="gender">Gender:</label>
                </div>
                <div class="col-md-4">
                    <select class="form-control" tabindex="6" id="gender" value="<?php print_r($_SESSION['student_data'][5]) ?>" name="gender_update">
                        <option value="">--select--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <label class="error" id="gender_error">Gender is required</label>
                </div>
                <div class="col-md-2">
                    <label for="adhar">Adhar:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="7" id="adhar" name="adhar_update" value="<?php print_r($_SESSION['student_data'][6]) ?>" placeholder="Enter Adhar Number" name="lname">
                    <label class="error" id="adhar_error">Invalid Adhar</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="dob">DOB:</label>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" tabindex="7" id="dob" value="<?php print_r($_SESSION['student_data'][7]) ?>" name="dob_update">
                    <label class="error" id="dob_error">DOB is required</label>
                </div>
                <div class="col-md-5">
                    <label class="error" id="dob_error1">Age should be in between 16-40</label>
                </div>
            </div>
            <h4 class="notice">Contacts:</h4>
            <div class="row">
                <div class="col-md-2">
                    <label for="email">Email:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="8" id="email" value="<?php print_r($_SESSION['student_data'][8]) ?>" name="email_update" readonly>
                    <label class="error" id="email_error">Invalid Email</label>
                </div>
                <div class="col-md-2">
                    <label for="phone">Phone:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" tabindex="9" id="mobile" value="<?php print_r($_SESSION['student_data'][9]) ?>" name="mobile_update" placeholder="Enter Phone Number">
                    <label class="error" id="mobile_error">Invalid Mobile Number</label>
                </div>
            </div>
            <h4 class="notice">Address:</h4>
            <div class="row">
                <div class="col-md-2">
                    <label for="country">Country:</label>
                </div>
                <div class="col-md-4">
                    <select name="country_update" tabindex="9" class="form-control" value="<?php print_r($_SESSION['student_data'][10]) ?>" tabindex="10" id="country">
                        <option value="" >--select--</option>
                        <option value="India">India</option>
                        <option value="Australia">Australia</option>
                        <option value="America">America</option>
                        </select>
                        <label class="error" id="country_error">Country is required</label>
                </div>
                <div class="col-md-2">
                    <label for="state">State:</label>
                </div>
                <div class="col-md-4">
                    <select name="state_update" tabindex="10" class="form-control" value="<?php print_r($_SESSION['student_data'][11]) ?>" tabindex="11" id="state">
                    </select>
                    <label class="error" id="state_error">State is required</label>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="city">City:</label>
                </div>                               
                <div class="col-md-4">
                    <select tabindex="11" class="form-control" tabindex="12" id="city" value="<?php print_r($_SESSION['student_data'][12]) ?>" name="city_update">
                    </select>
                    <label class="error" id="city_error">City is required</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <!-- <button class="btn btn-primary" type="button" id="reset">Reset</button> -->
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-4">
                    <button class="btn btn-outline-primary btn-block" tabindex="14" type="submit" id="update">Update</button>
                </div>
            </div>
            <br>
            </form>

    </div>
<script src="..\Bootstrap\JQuery\register.js"></script>
</body>
</html>