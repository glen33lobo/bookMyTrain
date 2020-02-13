<?php

session_start();

include('connect.php');

// print_r($_POST);

$u_name=$_POST['u_name'];
$pass=$_POST['pass'];


if ($conn->connect_error) 
{
	$response["error"] = "Connection failed: " . $conn->connect_error;
	$response["success"] = "";
	echo "error in connection";
}
else
{
    $sql="SELECT * FROM `User_Details` WHERE user_name='".$u_name."' and password='".$pass."';";
    
    
    $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            $row=$res->fetch_assoc();
        $response="success";
        
        $_SESSION['user_id'] = $row['u_id'];

        }else
        {
            $response="failure";
        }
    
    
        echo json_encode($response);
   
    
$conn->close(); 
}


?>