<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'nitrr2020mca');
mysqli_select_db($con, 'studentsdb');

$fname_update=$_POST['fname_update'];
$mname_update=$_POST['mname_update'];
$lname_update=$_POST['lname_update'];
$fatherName_update=$_POST['fatherName_update'];
$motherName_update=$_POST['motherName_update'];
$gender_update=$_POST['gender_update'];
$adhar_update=$_POST['adhar_update'];
$dob_update=$_POST['dob_update'];
$email_update=$_POST['email_update'];
$mobile_update=$_POST['mobile_update'];
$country_update=$_POST['country_update'];
$state_update=$_POST['state_update'];
$city_update=$_POST['city_update'];

$sql= "UPDATE student_record SET First_Name='$fname_update', Middle_Name='$mname_update', Last_Name='$lname_update', Father_Name='$fatherName_update', Mother_Name='$motherName_update', Gender='$gender_update', Adhar='$adhar_update', DOB='$dob_update', Email='$email_update', Phone='$mobile_update', Country='$country_update', State='$state_update', City='$city_update' WHERE Password='".$_SESSION['pass']."'";
$result=mysqli_query($con, $sql);
if($result){
    session_unset();
    if($mname==""){
        $_SESSION['username'] = $fname_update." ".$lname_update;
    }else{
        $_SESSION['username'] = $fname_update." ".$mname_update." ".$lname_update;  
    }
    $_SESSION['email']=$email_update;
    header('location:student_login_page.php');
    exit;
}
?>