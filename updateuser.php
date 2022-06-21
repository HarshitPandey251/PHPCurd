<?php

require_once('config.php');

if(isset($_POST['updateuser'])){
    $name = sanitise($_POST['name']);
    $email = sanitise($_POST['email']);
    $phone = sanitise($_POST['phone']);

    $SQL = "UPDATE users SET name = '$name', phone = '$phone' WHERE email = '$email'";

    if(mysqli_query($dbConnection,$SQL)){
        $responseArray = array('responseCode' => '202', 'responseData'=> 'User updated successfully');
    }else{
        $responseArray = array('responseCode' => '501', 'responseData'=> 'Failed to update user');
    }
    print(json_encode($responseArray));
}else{
    print(json_encode(array('responseCode'=>'404','responseData'=>'Access Blocked')));
}

?>