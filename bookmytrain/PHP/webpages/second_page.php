<?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    
} else {
    header("Location: ../../../index.php");
    exit;
}

$d=$_POST['date1'];
$tmid=$_POST['timeid'];

include('../get_tmid_details.php');

?>










<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link href=" https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../css/first_page.css"/>
        
        

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
	
	
	<style type="text/css">
		body{
			background-image: url("../../images/bg1.jpeg");
			background-size:cover;
			background-repeat:no-repeat;
			background-position:center;

		}
		#d1 
		{
			
			font-size: 35px;
			background-color: #1F2833;
			height: 150px;
			color: #66FCF1;
		}
		#d2{
			border:1px solid #66FCF1 ;
			border-radius: 25px;
			
			margin-top:100px;
			padding: 15px;
			line-height: 2.6;

		}
		#d3
		{
			border:1px solid #66FCF1 ;
			border-radius: 25px;
			margin: 15px;
			padding: 15px;
			line-height: 2.6;
			color: #66FCF1;
			background-color: rgba(0,0,0,0.9);


		}
		label{
			color: #66FCF1;
		}
		hr{
			 color: #1F2833;
		}
		table, th, td { 
            border:1px solid #66FCF1 ;
            color:#66FCF1;
            border-collapse: collapse; 
            padding: 6px; 
            text-align:center; 
        } 
        .col-50 {
 			 -ms-flex: 50%; /* IE10 */
 			 flex: 50%;
		}
		
		input{
		    color:black;
		}



		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 20px; /* Location of the box */
		  padding-bottom: 70px;
		  margin-top:100px;
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Fu100l height */
		  overflow: scroll; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  background-color: rgba(69, 162, 158,0.5); 
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 60%;
		   overflow: auto;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  margin-top: 20px;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		
		label{
		    font-size:22px;
		}
		

	</style>
</head>



















    <body style="background-color: #1f2833">




            
      <!--      <div style="background-image: url('../../../images/bg.jpeg'); width: 100%;background-position: center;-->
      <!--      background-repeat: no-repeat;width: 100%;filter: blur(3px);-->
      <!---webkit-filter: blur(3px); background-size: cover;-->
      <!--height:100%;position: absolute;top: 0%;left: 0%;position:fixed;-->
      <!--z-index: -2;" ></div>-->
      
    

        <header class="header fixed-top">
            <nav class="navbar navbar-style">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 id="name" onclick="goto(<?php echo isset( $_SESSION['user_id'] ) ?>)" >  BOOK MY TRAIN</h1> 
                    </div>
                    <div class="collapse navbar-collapse" id="micon">
                        <ul class="nav navbar-nav navbar-right"> 
                        <li>
                        <button onclick="logout_fxn()">LOG OUT</button></li>
                        </ul>


                        

                    </div>

                </div>
            </nav>
        </header>
        
        
        
        <br>
        
        <div class="container" id="d2">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
		            <label>USER ID : </label>
		        </div>
		        <div class="col-sm-1">
		            <label id="nam"> <?php echo $_SESSION['user_id']; ?>  </label>
		        </div>
		        <div class="col-sm-3 col-sm-offset-2">
		            <strong><label id="date1"> <?php echo $d; ?>  </label></strong>
		        </div>
		    </div>
		
		<?php echo "<input type='hidden' id='time_id' value=$tmid />" ?>
		<?php echo "<input type='hidden' id='date1' value=$d />" ?>
		    <div class="row">
		        <div class="col-sm-3 col-sm-offset-1" >
		            <label>Select Seat Type:</label>
                </div>
                <div class="col-sm-3">
		            <select class="btn btn-secondary dropdown-toggle" id="seat_type" name="type" style="background-color: #C5C6C7;color:#0B0C10;margin-top:3vh">
			            <option class="dropdown-item" value="sleeper">sleeper</option>
			            <option class="dropdown-item" value="AC">AC</option>
		              </select>
                </div>
		    </div>
            <div class="row">
		        <div class="col-sm-3 col-sm-offset-1" >
		            <label>From : </label> <label><?php echo $src ?></label>
                </div>
                <div class="col-sm-3">
		            <label >To : </label> <label><?php echo $dest ?></label>
                </div>
		    </div>
            <div class="row">
		        <div class="col-sm-3 col-sm-offset-1" >
            		<label>Departure : </label>
		            <label id="Departure"> <?php echo $src ?> </label>
                </div>
		    </div>
             <div class="row">
                 <div class="col-sm-3 col-sm-offset-1" >
        		<label>Arrival : </label>
        		<label id="Arrival" > <?php echo $dest ?> </label>
        
        		<br>
        		</div>
		    </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1" >
            		<label>Boarding Time : </label>
            		<label id="Boarding_time" > <?php echo $src_time ?> </label>
                </div>

		<br>
		</div>
		<hr>

		<!--<center>-->
		<!--	<label style="font-style: italic;">Do you wish to take travel Insurance? :</label>-->
			
		<!--	<button style="border-radius: 12px;;" onclick="">Yes</button>-->
		<!--	<button style="border-radius: 12px;;" onclick="">No</button>-->
		<!--</center>-->
		<!--<hr>-->

		<br>
		<center><button id="add_p" style="background-color: #4CAF50;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                }" onclick="addSeat()" disabled="true">ADD PASSENGERS</button>
		<br><br>
		<table id="table1">
			<tr>
				<th><u>NAME</u></th>
				<th><u>AGE</u></th>
				<th><u>GENDER</u></th>
				<th><u>SEAT NO</u></th>
			</tr>
			
		</table>
		</center>	

		<div id="d3">
			
			<div class="col-50">
            <center><h3><u>Payment:</u> </h3></center>
            <label>Total cost is:</label>
            <label id="cost"></label>
            <br>
            <center>
            	<label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            </center>
            <br>
            <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
            
                    <label for="cname">Name on Card:</label>
                    <input type="text" id="cname" name="cardname" placeholder="Ex:Glen Lobo">
                 	<br><br>
                 </div>
                
                 <div class="col-sm-5">
                     
                    <label for="ccnum">Credit card number:</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <br><br>
                 </div>
                <div class="row">
                 <div class="col-sm-5 col-sm-offset-1">
                     
                    <label for="expmonth"> Expiry Details:</label>
                    <input type="text" id="expyear" name="expyear" placeholder="01/20">
        
                    <br><br>
                 </div>
            
                <div class="col-sm-5">
                 
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                    <br><br>
                </div>
                </div>
            
            </div>
            </div>
            <br>
            <center><button style="background-color: #4CAF50;
                  border: none;
                  color: white;
                  padding: 15px 32px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
                  margin: 4px 2px;
                  cursor: pointer;" onclick="book_details(<?php echo $_SESSION['user_id']?>)">PROCEED TO PAY</button></center>
            
          </div>

		</div>
		
	</div

		<!-- The Modal -->
		<div id="myModal" class="modal">

  			<!-- Modal content -->
  			<div class="modal-content">
    			<span class="close">&times;</span>
    		
    				
    				<label>Name :</label>
    				<input type="text" id="p_name" name="p_name" required>
    				<br>
    				<label>Age :</label>
    				<input type="text" id="p_age" name="age" required>
    				<br>
    				<label>Gender :</label>
    				<label><input type="radio" id="p_g_m" name="g" value="M">Male</label>
    				<label><input type="radio" id="p_g_f" name="g" value="F">Female</label>
    				<label><input type="radio" id="p_g_o" name="g" value="O">Others</label>
    				<br>
    				
    				<div class="container" style="width:60%;">
    					<div style="display: grid;
                             grid-template-columns: 1fr 2fr 1fr; " class="row">
    						<div class="col-sm-4 ">
    							
    							<div class="coach">
    								<img src="../../../images/train_coach.png" >
    							</div>
    						
    							<div class="seats">
    								<div class="top-left-row">
    									<img id="s_01" style="position: absolute;left: 30px;top:193px;" src="../../../images/seat_grey_right.png" >
    									<img id="s_02" style="position: absolute;left: 30px;top:219px;" src="../../../images/seat_grey_right.png" >
				    					<img id="s_03" style="position: absolute;left: 30px;top:245px;" src="../../../images/seat_grey_right.png" >
    									<img id="s_04" style="position: absolute;left: 30px;top:271px;" src="../../../images/seat_grey_right.png" >
    								</div>

    								<div class="top-right-row">
    									<img id="s_05" style="position: absolute;left: 134px;top:193px;" src="../../../images/seat_grey_left.png" >
    									<img id="s_06" style="position: absolute;left: 134px;top:219px;" src="../../../images/seat_grey_left.png" >
				    					<img id="s_07" style="position: absolute;left: 134px;top:245px;" src="../../../images/seat_grey_left.png" >
    									<img id="s_08" style="position: absolute;left: 134px;top:271px;" src="../../../images/seat_grey_left.png" >
    								</div>
    								
    								<div class="f1-left">
    									<img id="s_09" style="position: absolute;left: 20px;top:313px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_10" style="position: absolute;left: 45px;top:313px;" src="../../../images/seat_grey_up.png" >
    								</div>
    								<div class="f1-right">
    									<img id="s_11" style="position: absolute;left: 88px;top:313px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_12" style="position: absolute;left: 113px;top:313px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_13" style="position: absolute;left: 138px;top:313px;" src="../../../images/seat_grey_up.png" >
    								</div>
    								<div class="f2-left">
    									<img id="s_14" style="position: absolute;left: 20px;top:337px;" src="../../../images/seat_grey_down.png" >
    									<img id="s_15" style="position: absolute;left: 45px;top:337px;" src="../../../images/seat_grey_down.png" >
				    				</div>
				    				<div class="f2-right">
    									<img id="s_16" style="position: absolute;left: 88px;top:337px;" src="../../../images/seat_grey_down.png" >
    									<img id="s_17" style="position: absolute;left: 113px;top:337px;" src="../../../images/seat_grey_down.png" >
    									<img id="s_18" style="position: absolute;left: 138px;top:337px;" src="../../../images/seat_grey_down.png" >
    								</div>
    								<div class="f3-left">
    									<img id="s_19" style="position: absolute;left: 20px;top:385px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_20" style="position: absolute;left: 45px;top:385px;" src="../../../images/seat_grey_up.png" >
    								</div>
    								<div class="f3-right">
    									<img id="s_21" style="position: absolute;left: 88px;top:385px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_22" style="position: absolute;left: 113px;top:385px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_23" style="position: absolute;left: 138px;top:385px;" src="../../../images/seat_grey_up.png" >
    								</div>
    								<div class="f4-left">
    									<img id="s_24" style="position: absolute;left: 20px;top:409px;" src="../../../images/seat_grey_down.png" >
    									<img id="s_25" style="position: absolute;left: 45px;top:409px;" src="../../../images/seat_grey_down.png" >
				    				</div>
				    				<div class="f4-right">
    									<img id="s_26" style="position: absolute;left: 88px;top:409px;" src="../../../images/seat_grey_down.png" >
    									<img id="s_27" style="position: absolute;left: 113px;top:409px;" src="../../../images/seat_grey_down.png" >
    									<img id="s_28" style="position: absolute;left: 138px;top:409px;" src="../../../images/seat_grey_down.png" >
    								</div>
    								<div class="f4-left">
    									<img id="s_29" style="position: absolute;left: 20px;top:467px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_30" style="position: absolute;left: 45px;top:467px;" src="../../../images/seat_grey_up.png" >
    								</div>
    								<div class="f4-right">
    									<img id="s_31" style="position: absolute;left: 88px;top:467px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_32" style="position: absolute;left: 113px;top:467px;" src="../../../images/seat_grey_up.png" >
    									<img id="s_33" style="position: absolute;left: 138px;top:467px;" src="../../../images/seat_grey_up.png" >
    								</div>



    							</div>

    						</div>
    						
    					</div>
    					<div class="row">
    					    <div class="col-sm-3 ">
    						    <button style="background-color: #4CAF50;
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                } " id="store_seat" onclick="store()">DONE</button>
    						 </div>
    					</div>
    				</div>

    					


    					

    			
    				</center>
    				</div>
    		
  			</div>
  			
		</div>
		</body>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("add_p");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    t=document.getElementById('seat_type').value;
    if(t==="sleeper")
    {
        t='SL';
    }
    else
    {
        t='AC';
    }
    addSeat();
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
      
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    
    
    
    total_seats_b--;
    
    t=document.getElementById('seat_type').value;
    if(t==="sleeper")
    {
        t='SL';
        disp_cost=total_seats_b*50;
    }
    else
    {
        t='AC';
        disp_cost=total_seats_b*100;
    }
    document.getElementById('cost').innerHTML=disp_cost;
    // seats=all_booked_seats[t];
	seats.pop(s_id);
    
  }
}

function goto(x)
{
    alert(x);
    if(x=="1")
    {
        location.href="first_page.php";
    }
    else
    {
        location.href="../../../index.php";
    }
}
</script>





 

            
            <script src="../../javascript/second_page.js"></script>
</html>