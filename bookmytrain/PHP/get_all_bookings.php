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
    $sql="SELECT ud.first_name,ud.middle_name,ud.last_name,ud.date_of_birth,ud.gender,ud.language,ud.nationality,td.transaction_id,td.date,td.seat_type,sd.name,sd.age,sd.gen,sd.seat_no FROM `User_Details` as ud,transaction_details as td,seat_details as sd WHERE ud.`u_id`=td.user_id and td.transaction_id=sd.transaction_id and ud.u_id='".$uid."' order by td.transaction_id DESC;";
    
    
    $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            
            $t_id="";
            for($i=0;$i<$res->num_rows;){
                $row=$res->fetch_assoc();
                if($t_id!=$row['transaction_id'])
                {
                    $t_id=$row['transaction_id'];
                if($i==0){
                    
                    ?>
                    
                    <div id="d2">
		<label>Name:</label>
		<label id="name"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];?></label>
		<br>

		<label>Date of birth:</label>
		<label id="dob"><?php echo $row['date_of_birth'];?></label>
		

		<label style="margin-left: 50px;">Gender:</label>
		<label id="gender"><?php echo $row['gender'];?></label>
		<br>

		<label>Nationality:</label>
		<label id="Nationality"><?php echo $row['nationality'];?></label>
		<br>
		<hr style="background-color:#66FCF1 ">
		
		<div id="d3" style="overflow-x:auto;">
                    <table>
                  
                    <?php
                
                
                
                }
                
                ?>
                </table>
                <label>Booked on:</label>
                <label id="date"><?php echo $row['date'];?></label>
			
			<table id="tab">
				<tr>
					<th>NAME</th>
					<th>AGE</th>
					<th>GENDER</th>
					<th>SEAT-TYPE</th>
					<th>SEAT-NUMBER</th>

				</tr>
				
				
				<?php
                    
                    echo "<tr>
					<td>".$row['name']."</td>
					<td>".$row['age']."</td>
					<td>".$row['gen']."</td>
					<td>".$row['seat_type']."</td>
					<td>".$row['seat_no']."</td>

				</tr>";
				
                }else
                {
                    
                     echo "<tr>
					<td>".$row['name']."</td>
					<td>".$row['age']."</td>
					<td>".$row['gen']."</td>
					<td>".$row['seat_type']."</td>
					<td>".$row['seat_no']."</td>

				</tr>";
            
                // print_r($row);
                // echo "<br><br>";
            }
            $i++;
            }
            
            ?>




		

			
				
			</table>
		</div>







	
	</div>








<?php
        }else
        {
            echo "Connection Timed Out!!!!";
        }
    
    
    
    
    
    
       
   
    
$conn->close(); 
}


?>