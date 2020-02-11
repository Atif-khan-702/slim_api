<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration form</title>
    <link rel="stylesheet" href="..\css\login.css">
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
                <h2 class="display-4"><a href="..\index.php"><img src="..\images\nit_logo.jpg" id="heading_image"></a>National Institute Of Technology, Raipur</h2>
            </div>
           <!-- <div class="col-sm-2">
                <?php
                    //echo "<h4>".$_SESSION['username']."</h4>";
                ?> 
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div> -->
        </div>
        <div class="row pt-3">
            <div class="col-md-12">
                <div class="topnav" id="myTopnav">
                <a href="#" class="active">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="update_profile.php">Update Profile</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="card bg-light text dark">
                    <div class="card2_heading">
                        <h4 id="form_heading">Student Details</h4>
                    </div>
                    <h4 class="level_style">Personal Information:</h4>
                    <?php
                         $con = mysqli_connect('localhost', 'root', 'nitrr2020mca');
                         mysqli_select_db($con, 'studentsdb');
                         $sql = "SELECT * FROM student_record WHERE Email='".$_SESSION['email']."'" ;
                         $result = mysqli_query( $con, $sql ) ;
                         if( mysqli_num_rows( $result ) > 0){
                            while( $row = $result->fetch_assoc()){
                                echo "<div class='row'>" ;
                                echo "<div class='col-md-2'>" ;
                                echo "<h6 class='level_style'>Name:</h6></div>" ;
                                echo "<div class='col-md-8'>" ;
                                echo $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name']."</div></div>" ;
                                echo "<div class='row'>" ;
                                echo "<div class='col-md-2'>" ;
                                echo "<h6 class='level_style'>Father's Name:</h6></div>" ;
                                echo "<div class='col-md-4'>" ;
                                echo $row['Father_Name']."</div>" ;
                                echo "<div class='col-md-2'>" ;
                                echo "<h6 class='level_style'>Mother's Name:</h6></div>" ;
                                echo "<div class='col-md-4'>" ;
                                echo $row['Mother_Name']."</div> </div>" ;
                                echo "<div class='row'>";
                                echo "<div class='col-md-2'>" ;
                                echo "<h6 class='level_style'>Gender:</h6></div>";
                                echo "<div class='col-md-4'>";
                                echo $row['Gender']."</div>";
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>Adhar:</h6></div>";
                                echo "<div class='col-md-4'>";
                                echo $row['Adhar']."</div></div>" ;
                                echo "<div class='row'>" ;
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>DOB:</h6></div>";
                                echo "<div class='col-md-4'>";
                                echo $row['DOB']."</div></div>";
                                echo "<h4 class='level_style'>Contacts:</h4>" ;
                                echo "<div class='row'>";
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>Email:</h6></div>";
                                echo "<div class='col-md-4'>" ;
                                echo $row['Email']."</div>";
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>Phone:</h6></div>" ;
                                echo "<div class='col-md-4'>";
                                echo $row['Phone']."</div></div>";
                                echo "<h4 class='level_style'>Address:</h4>";
                                echo "<div class='row'>";
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>Country:</h6></div>";
                                echo "<div class='col-md-4'>";
                                echo $row['Country']."</div>";
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>State:</h6></div>";
                                echo "<div class='col-md-4'>";
                                echo $row['State']."</div></div>";
                                echo "<div class='row'>";
                                echo "<div class='col-md-2'>";
                                echo "<h6 class='level_style'>City:</h6></div>";                               
                                echo "<div class='col-md-4'>";
                                echo $row['City']."</div></div>";
                             }
                         }
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light text dark">
                    <div class="card-header">
                        <h5>Subscribe to our official Newsletter <kbd>Mirror</kbd> for instant notification.</h5>
                    </div>
                    <div class="card-body">
                    <form name="subs_form">
                            <div class="row">
                                <div class="col-md">
                                    Name:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    Email:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <input type="text" placeholder="Enter Your Email" class="form-control" id="email_subscribe">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <button class="btn btn-outline-primary btn-block" id="subscribe" type="button">Subscribe</button>
                            </div>
                            <div class="row">
                                <div class="alert alert-success alert-dismissible" id="subscribe_correct">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Thanks</strong> for Subscribe Mirror
                                </div>
                                <div class="alert alert-danger alert-dismissible" id="subscribe_incorrect">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Oops!</strong> This seems Invalid Email
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

<script src="..\JQuery\register.js"></script>
</body>
</html>