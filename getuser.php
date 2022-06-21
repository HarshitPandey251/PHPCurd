<?php

require_once('config.php');

if(isset($_POST['getuser'])){
    $name = sanitise($_POST['name']);

    $SQL = "SELECT * FROM users WHERE name LIKE '%$name%'";

    $SQLResult = mysqli_query($dbConnection,$SQL);

    if(mysqli_num_rows($SQLResult) > 0){

        $userdata = array();
        while($row = mysqli_fetch_assoc($SQLResult)){
            array_push($userdata,$row);
        }

        $responseArray = array(
            'responseCode' =>'200',
            'responseData' => $userdata
        );

    }else{
        $responseArray = array('responseCode' => '204', 'responseData'=> 'No User was Found');
    }

    print(json_encode($responseArray));
}else{
    print(json_encode(array('responseCode'=>'404','responseData'=>'Access Blocked')));
}

?>