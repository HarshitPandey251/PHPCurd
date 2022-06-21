<?php

require_once('config.php');

if(isset($_POST['deleteuser'])){
    $email = sanitise($_POST['email']);

    $SQL = "DELETE FROM users WHERE email = '$email'";

    if(mysqli_query($dbConnection,$SQL)){
        $responseArray = array('responseCode' => '202', 'responseData'=> 'User Deleted Successfully.');
    }else{
        $responseArray = array('responseCode' => '501', 'responseData'=> 'Failed to delete user');
    }
    print(json_encode($responseArray));
}else{
    print(json_encode(array('responseCode'=>'404','responseData'=>'Access Blocked')));
}

?>