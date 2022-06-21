<?php

require_once('config.php');

if(isset($_POST['adduser'])){
    $name = sanitise($_POST['name']);
    $email = sanitise($_POST['email']);
    $phone = sanitise($_POST['phone']);

    $SQL = "INSERT INTO users(name,email,phone)VALUES('$name','$email','$phone')";

    if(mysqli_query($dbConnection,$SQL)){
        $responseArray = array('responseCode' => '201', 'responseData'=> 'new user has been addded successfully');
    }else{
        $responseArray = array('responseCode' => '501', 'responseData'=> 'Failed to add new user');
    }
    print(json_encode($responseArray));
}else{
    print(json_encode(array('responseCode'=>'404','responseData'=>'Access Blocked')));
}

?>