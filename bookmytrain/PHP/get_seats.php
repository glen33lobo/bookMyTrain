<?php

// session_start();

include('connect.php');

// print_r($_POST);

$time_id=$_POST['time_id'];
$d=$_POST['date1'];
// if(isset($_POST['seattype'])){
//     $s_type=$_POST['seattype'];
// }
// else
// {
//     $s_type='SL';
// }

// $time_id='TM01';
// $d="2019-11-30";

if ($conn->connect_error) 
{
	$response["error"] = "Connection failed: " . $conn->connect_error;
	$response["success"] = "";
	echo "error in connection";
}
else
{
    $ob=array();
    $sql="SELECT `seat_no` FROM `transaction_details` as td,`seat_details` as sd WHERE td.`transaction_id`=sd.`transaction_id` and td.`time_id`='".$time_id."' and `date`='".$d."' and td.seat_type='SL';";
    
    
    $res = $conn->query($sql);
    $a1=array();
        if ($res->num_rows > 0) {
            while($row=$res->fetch_assoc()){
                $a1[]=$row['seat_no'];
            }

        }else
        {
            $response="failure";
        }
    // $a1=json_encode($a1);
    $ob['SL']=$a1;
    
    $sql="SELECT `seat_no` FROM `transaction_details` as td,`seat_details` as sd WHERE td.`transaction_id`=sd.`transaction_id` and td.`time_id`='".$time_id."' and `date`='".$d."' and td.seat_type='AC';";
    
    
    $res = $conn->query($sql);
    $a2=array();
        if ($res->num_rows > 0) {
            while($row=$res->fetch_assoc()){
                $a2[]=$row['seat_no'];
            }

        }else
        {
            $response="failure";
        }
    $ob['AC']=$a2;
    
    echo(json_encode($ob));

$conn->close(); 
}


?>