<?php

include('connect.php');

$u_id=$_POST['user_id'];
$time_id=$_POST['time_id'];
$d=$_POST['date'];
$s_type=$_POST['seat_type'];
$json=$_POST['myarr'];

$ob=json_decode($json,true);


if ($conn->connect_error) 
{
	$response["error"] = "Connection failed: " . $conn->connect_error;
	$response["success"] = "";
	echo "error in connection";
}
 
else
{
    $sql=" INSERT INTO `transaction_details` ( `user_id`, `time_id`, `date`, `seat_type`, `travel_insurance`) VALUES ('".$u_id."', '".$time_id."', '".$d."', '".$s_type."', 'yes');";
    
    
   
    
    if($conn->query($sql) == "1")
    {
        //$response["success"]=true;
        
        $last_id = $conn->insert_id;
        $sql1="";
        for($i=0;$i<sizeof($ob);$i++){
        $sql1=$sql1."INSERT INTO `seat_details` (`transaction_id`, `name`, `age`, `gen`, `seat_no`) VALUES ('".$last_id."', '".$ob[$i]['name']."', '".$ob[$i]['age']."', '".$ob[$i]['gender']."', '".$ob[$i]['seat_no']."');";
        }
        // echo $sql1." ";
            if($conn->query($sql1))
        {
            $response["success"]=true;
            // $response["error"]
            //   echo json_encode($response);
            echo "success";
        }else
        {
            echo $conn->query($sql1)." ";
            $response["success1"]=false;
            echo json_encode($response);

            
        }
        
        
        
        // $response["error"]
        // echo json_encode($response);
    }else
    {
                $response["success2"]=false;
        echo json_encode($response);


        // echo "Error updating record: " . $conn->error;
    }
    
$conn->close(); 
}


?>