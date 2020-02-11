<?php

$con = mysqli_connect('localhost', 'root', 'nitrr2020mca');
mysqli_select_db($con, 'studentsdb');

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$fatherName=$_POST['fatherName'];
$motherName=$_POST['motherName'];
$gender=$_POST['gender'];
$adhar=$_POST['adhar'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$pass=$_POST['pass'];
$cnf_pass=$_POST['cnf-pass'];

    if($pass != $cnf_pass){
        die("password did not match");
    }else{
        $password="#@nit";
        for ($i = 0; $i < strlen($pass); $i++){
            $password=$password.ord($pass[$i]);
        }
        $password=$password."@#";

        $sql1 = "SELECT * FROM student_record WHERE Email ='$email'" ;
        $sql2 = "SELECT * FROM student_record WHERE Adhar ='$adhar'" ;

        $result1 = mysqli_query( $con, $sql1 ) ;
        $result2 = mysqli_query( $con, $sql2 ) ;

        if( mysqli_num_rows( $result1 ) > 0 )
        {
            header('location:../bootstrap/index.php');
        }
        else if( mysqli_num_rows( $result2 ) > 0 )
        {
            die( "There is already a user with that adhar!" ) ;
        }else{
            $sql="INSERT INTO student_record VALUES ('$fname', '$mname', '$lname', '$fatherName', '$motherName', '$gender', '$adhar', '$dob', '$password', '$email', '$mobile', '$country', '$state', '$city')";
            $result=mysqli_query($con, $sql);
            if($result){
                header('location:../bootstrap/index.php');
                exit;
            }
        }
    }
?>