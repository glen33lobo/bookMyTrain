<?php

include('connect.php');

// print_r($_POST);

$u_name=$_POST['u_name'];
$pass=$_POST['pass'];
$lang=$_POST['lang'];
$sec_ques=$_POST['sec_ques'];
$sec_ans=$_POST['sec_ans'];
$fname=$_POST['fname'];
$midname=$_POST['midname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];


if ($conn->connect_error) 
{
	$response["error"] = "Connection failed: " . $conn->connect_error;
	$response["success"] = "";
	echo "error in connection";
}
 
else
{
    $sql="INSERT INTO `User_Details` (`user_name`, `password`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `language`, `nationality`, `security_question`, `security_answer`) VALUES ('".$u_name."', '".$pass."', '".$fname."', '".$midname."', '".$lname."', '".$dob."', '".$gender."', '".$lang."', '".$nationality."', '".$sec_ques."', '".$sec_ans."')";
    
    
    if($conn->query($sql) === TRUE)
    {
        $response["success"]=true;
        // $response["error"]
        echo json_encode($response);
    }else
    {
                $response["success"]=false;
        echo json_encode($response);


        // echo "Error updating record: " . $conn->error;
    }
    
$conn->close(); 
}


?>