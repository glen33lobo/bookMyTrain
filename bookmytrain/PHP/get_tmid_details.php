<?php
include('connect.php');


if ($conn->connect_error) 
{
	$response["error"] = "Connection failed: " . $conn->connect_error;
	$response["success"] = "";
	echo "error in connection";
}
else
{
    $sql="SELECT `source_time`,pd.source,pd.destination FROM `time_details` as td,platform_details as pd WHERE td.`platform_id`=pd.`platform_id` and time_id='".$tmid."'";
    
    
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
            while($row=$res->fetch_assoc()){
                $src_time=$row['source_time'];
                $src=$row['source'];
                $dest=$row['destination'];
                
            }

        }else
        {
            $response="failure";
        }
$conn->close(); 
}


?>