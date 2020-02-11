<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Firebase\JWT as auth;
use Firebase\Bearer as token;

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

// Get All students records
$app->get('/api/students', function(Request $request, Response $response, array $args)
{
    $secret = "secretkey";
    $body = $response->getBody();
    try{
        $token = new token\bearer();
        $tok = $token->getBearerToken();
        $jwt = new auth\jwt();
        $payload = $jwt->decode($tok, $secret, ['HS256']);
    
        $sql = "select * from student_record where (Email='$payload->userName' OR User_Name='$payload->userName')";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);

        if($student != null){
            $stat = $request->getParam("sort");
            $sql = "select * from student_record ORDER BY ID $stat LIMIT 20";
            $students = [];

            $stmt = $db->query($sql);
            $record = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            return $response->withJson($record);
        }
    }catch(EXception $e){
        $data_unfound = array('message' => 'Authorization error');
        return $newResponse = $response->withJson($data_unfound, 401);
    }
});

//get single student record
$app->get('/api/students/{id}', function(Request $request, Response $response, array $args)
{
    $secret = "secretkey";
    $body = $response->getBody();

    try{
        $token = new token\bearer();
        $tok = $token->getBearerToken();
        $jwt = new auth\jwt();
        $payload = $jwt->decode($tok, $secret, ['HS256']);

        $sql = "select * from student_record where (Email='$payload->userName' OR User_Name='$payload->userName')";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);

        if($student != null){
            $id =$request->getAttribute('id');
            $sql = "select * from student_record where ID=$id";

            $stmt = $db->query($sql);
            $student_record = $stmt->fetch(PDO::FETCH_OBJ);
            if ($student_record != null) {
                return $newResponse = $response->withJson($student_record);
            }else{
                $data_unfound = array('message' => 'Record Not Found');
                return $newResponse = $response->withJson($data_unfound, 404);
            }
        }
    }catch(EXception $e){
        $data_unfound = array('message' => 'Authorization error');
        return $newResponse = $response->withJson($data_unfound, 401);
    }
});

//Add/signup student
$app->post('/api/students', function(Request $request, Response $response, array $args)
{
    $secret = "secretkey";
    $body = $response->getBody();

    try{
        $token = new token\bearer();
        $tok = $token->getBearerToken();
        $jwt = new auth\jwt();
        $payload = $jwt->decode($tok, $secret, ['HS256']);

        $sql = "select * from student_record where (Email='$payload->userName' OR User_Name='$payload->userName')";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);

        if($student != null){
            
            $flag_adhar = true;
            $flag_email = true;
            $flag_user = true;

            $fname =$request->getParam('fname');
            $mname =$request->getParam('mname');
            $lname =$request->getParam('lname');
            $fatherName =$request->getParam('fatherName');
            $motherName =$request->getParam('motherName');
            $gender =$request->getParam('gender');
            $adhar =$request->getParam('adhar');
            $dob =$request->getParam('dob');
            $user_name = $request->getParam('user_name');
            $pass =$request->getParam('password');
            $cnf_pass = $request->getParam("cnf-pass");
            $email =$request->getParam('email');
            $phone =$request->getParam('mobile');
            $country =$request->getParam('country');
            $stat =$request->getParam('state');
            $city =$request->getParam('city');

            if($pass == $cnf_pass){
                $sql = "select * from student_record";
                $stmt = $db->query($sql);
                $students = $stmt->fetchAll(PDO::FETCH_OBJ);

                foreach($students as $record){
                    if ($record->Email == $email){
                        $data_unfound = array('message' => 'Email is already Taken');
                        return $newResponse = $response->withJson($data_unfound, 400);
                        $flag_email = false;
                    }
                    if ($record->Adhar == $adhar){
                        $data_unfound = array('message' => 'Adhar is already Taken');
                        return $newResponse = $response->withJson($data_unfound, 400);
                        $flag_adhar = false;
                    }
                    if ($record->User_Name == $user_name){
                        $data_unfound = array('message' => 'User Name is already Taken');
                        return $newResponse = $response->withJson($data_unfound, 400);
                        $flag_user = false;
                    }
                }

                if($flag_email == true && $flag_adhar == true && $flag_user == true){
                    $salt = "usernameDOBlocation";
                    $pass_secure = hash('gost', $pass.$salt);
            
                    $sql="INSERT INTO student_record(First_Name,Middle_Name,Last_Name,Father_Name,Mother_Name,Gender,Adhar,DOB,User_Name,Password,Email,Phone,Country,State,City) VALUES (:fname, :mname, :lname, :fatherName, :motherName, :gender, :adhar, :dob, :user_name, :pass, :email, :phone, :country, :stat, :city)";
            
                    $stmt = $db->prepare($sql);
        
                    $stmt->bindParam(':fname', $fname);
                    $stmt->bindParam(':mname', $mname);
                    $stmt->bindParam(':lname', $lname);
                    $stmt->bindParam(':fatherName', $fatherName);
                    $stmt->bindParam(':motherName', $motherName);
                    $stmt->bindParam(':gender', $gender);
                    $stmt->bindParam(':adhar', $adhar);
                    $stmt->bindParam(':dob', $dob);
                    $stmt->bindParam(':user_name', $user_name);
                    $stmt->bindParam(':pass', $pass_secure);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':phone', $phone);
                    $stmt->bindParam(':country', $country);
                    $stmt->bindParam(':stat', $stat);
                    $stmt->bindParam(':city', $city);
        
                    $stmt->execute();
                    $data_unfound = array('message' => 'record added');
                    return $newResponse = $response->withJson($data_unfound, 201);
                }
            }else{
                $data_unfound = array('message' => 'password did  not match');
                return $newResponse = $response->withJson($data_unfound, 400);
            }
        }
    }catch(EXception $e){
        $data_unfound = array('message' => 'Authorization error');
        return $newResponse = $response->withJson($data_unfound, 401);
    }
});

//update single student
$app->put('/api/students/{id}', function(Request $request, Response $response, array $args)
{
    $secret = "secretkey";
    $body = $response->getBody();

    try{
        $token = new token\bearer();
        $tok = $token->getBearerToken();
        $jwt = new auth\jwt();
        $payload = $jwt->decode($tok, $secret, ['HS256']);

        $sql = "select * from student_record where (Email='$payload->userName' OR User_Name='$payload->userName')";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);

        if($student != null){
            
            $id =$request->getAttribute('id');
            $flag_adhar = true;
            $flag_email = true;
            $flag_user = true;

            $fname =$request->getParam('fname');
            $mname =$request->getParam('mname');
            $lname =$request->getParam('lname');
            $fatherName =$request->getParam('fatherName');
            $motherName =$request->getParam('motherName');
            $gender =$request->getParam('gender');
            $adhar =$request->getParam('adhar');
            $dob =$request->getParam('dob');
            $user_name = $request->getParam('user_name');
            $pass =$request->getParam('password');
            $email =$request->getParam('email');
            $phone =$request->getParam('mobile');
            $country =$request->getParam('country');
            $stat =$request->getParam('state');
            $city =$request->getParam('city');

            $sql = "select * from student_record";
            $stmt = $db->query($sql);
            $students = $stmt->fetchAll(PDO::FETCH_OBJ);

            foreach($students as $record){
                if($record->ID == $id){
                    continue;
                }else{
                    if ($record->Email == $email){
                        $data_unfound = array('message' => 'Email is already Taken');
                        return $newResponse = $response->withJson($data_unfound, 400);
                        $flag_email = false;
                    }
                    if ($record->Adhar == $adhar){
                        $data_unfound = array('message' => 'Adhar is already Taken');
                        return $newResponse = $response->withJson($data_unfound, 400);
                        $flag_adhar = false;
                    }
                    if ($record->User_Name == $user_name){
                        $data_unfound = array('message' => 'User Name is already Taken');
                        return $newResponse = $response->withJson($data_unfound, 400);
                        $flag_user = false;
                    }
                }
            }

            if($flag_email == true && $flag_adhar == true && $flag_user == true){
                $salt = "usernameDOBlocation";
                $pass_secure = hash('gost', $pass.$salt);

                $sql = "UPDATE student_record SET
                        First_Name =  :fname,
                        Middle_Name = :mname,
                        Last_Name = :lname,
                        Father_Name = :fatherName,
                        Mother_Name = :motherName,
                        Gender = :gender,
                        Adhar = :adhar,
                        DOB = :dob,
                        User_name = :user_name,
                        Password = :pass,
                        Email = :email,
                        Phone = :phone,
                        Country = :country,
                        State = :stat,
                        City = :city
                        WHERE ID = $id";

                $stmt = $db->prepare($sql);

                $stmt->bindParam(':fname', $fname);
                $stmt->bindParam(':mname', $mname);
                $stmt->bindParam(':lname', $lname);
                $stmt->bindParam(':fatherName', $fatherName);
                $stmt->bindParam(':motherName', $motherName);
                $stmt->bindParam(':gender', $gender);
                $stmt->bindParam(':adhar', $adhar);
                $stmt->bindParam(':dob', $dob);
                $stmt->bindParam(':user_name', $user_name);
                $stmt->bindParam(':pass', $pass_secure);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':country', $country);
                $stmt->bindParam(':stat', $stat);
                $stmt->bindParam(':city', $city);

                $stmt->execute();
                $data_unfound = array('message' => 'record updated');
                return $newResponse = $response->withJson($data_unfound, 201);
            }
        }
    }catch(EXception $e){
        $data_unfound = array('message' => 'Authorization error');
        return $newResponse = $response->withJson($data_unfound, 401);
    }
});

//delete single student
$app->delete('/api/students/{id}', function(Request $request, Response $response, array $args)
{
    $secret = "secretkey";
    $body = $response->getBody();

    try{
        $token = new token\bearer();
        $tok = $token->getBearerToken();
        $jwt = new auth\jwt();
        $payload = $jwt->decode($tok, $secret, ['HS256']);

        $sql = "select * from student_record where (Email='$payload->userName' OR User_Name='$payload->userName')";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);

        if($student != null){
            $id =$request->getAttribute('id');
            $sql = "select * from student_record where ID=$id";
            $stmt = $db->query($sql);
            $student_record = $stmt->fetch(PDO::FETCH_OBJ);
            if($student_record != null){
                $sql = "delete from student_record where ID=$id";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $data_unfound = array('message' => 'Delete Successfully');
                return $newResponse = $response->withJson($data_unfound, 200);
            }else{
                $data_unfound = array('message' => 'Record Not Found');
                return $newResponse = $response->withJson($data_unfound, 404);
            }
        }
    }catch(EXception $e){
        $data_unfound = array('message' => 'Authorization error');
        return $newResponse = $response->withJson($data_unfound, 401);
    }
});

//student login api
$app->post('/api/students/login', function(Request $request, Response $response, array $args)
{

    $user_name =$request->getParam('user_name');
    $pass =$request->getParam('password');
    $secret = "secretkey";

    $salt = "usernameDOBlocation";
    $pass_secure = hash('gost', $pass.$salt);

    $sql = "SELECT * FROM student_record WHERE (Email ='".$user_name."' OR User_Name ='".$user_name."') AND Password ='".$pass_secure."'";
    try{
        $db = new db();
        $db = $db->connect();

        $stmt = $db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);
 
        if($student != null){
            $payload = array(
                'iat' => time(),
                'iss' => 'slimproject',
                'exp' => time() + (60*30),
                'userName' => $user_name
            );
            $jwt = new auth\jwt();
            $token = $jwt->encode($payload, $secret);
            $data = array('User_Name' => "$user_name", 'token' => "$token");

           return $newResponse = $response->withJson($data);
        }else{
            $body = $response->getBody();
            $body->write('record not found');
        }   
    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}}';
    }
});

?>