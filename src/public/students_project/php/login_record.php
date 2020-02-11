<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'nitrr2020mca');
mysqli_select_db($con, 'studentsdb');

$email=$_POST['email_login'];
$pass=$_POST['pass_login'];

$password="#@nit";
for ($i = 0; $i < strlen($pass); $i++){
    $password=$password.ord($pass[$i]);
}
$password=$password."@#";

    $sql = "SELECT * FROM student_record WHERE (Email='$email' AND Password='$password')" ;

    $result = mysqli_query( $con, $sql ) ;

    if( mysqli_num_rows( $result ) > 0 )
    {
        while($row = $result->fetch_assoc()) {
            $fname=$row['First_Name'];
            $mname=$row['Middle_Name'];
            $lname=$row['Last_Name'];
            $fatherName=$row['Father_Name'];
            $motherName=$row['Mother_Name'];
            $gender=$row['Gender'];
            $adhar=$row['Adhar'];
            $dob=$row['DOB'];
            $email=$row['Email'];
            $mobile=$row['Phone'];
            $country=$row['Country'];
            $state=$row['State'];
            $city=$row['City'];
            $pass=$row['Password'];
            if($mname==""){
                $_SESSION['username'] = $fname." ".$lname;
            }else{
                $_SESSION['username'] = $fname." ".$mname." ".$lname;  
            }
            $_SESSION['email'] = $email;
            $record = array($fname,$mname,$lname,$fatherName,$motherName,$gender,$adhar,$dob,$email,$mobile,$country,$state,$city);
            $_SESSION['student_data']= $record;
            $_SESSION['pass']=$pass;
        }
        
        header('location:student_login_page.php');
        exit;
    }else{
        echo "oops.. something went wrong" ;
    }
?>