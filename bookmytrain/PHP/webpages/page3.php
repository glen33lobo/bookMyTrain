<?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $uid=$_SESSION['user_id'];
} else {
    header("Location: ../../../index.php");
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style type="text/css">
		body{
			/*background-image:  url('../../images/black.png');*/
			/*height: 100vh;*/
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;

			 

		}
		#d1 
		{
			padding: 40px;
			font-size: 35px;
			background-color: #1F2833;
			position:fixed;
			width:100vw;
			margin-top:0vh;
            top: 0vh;
            color: #66FCF1;
		}
		#d2{
			border:1px solid #66FCF1 ;
			border-radius: 25px;
			background-color: rgba(102, 252, 241,0.3);
			margin: 15px;
			margin-top:160px;
			padding: 15px;
			line-height: 2.6;
		}
		label,h3{
			color: #66FCF1;
			font-size:20px
		}

		#tab{
			border:1px solid #66FCF1 ;
			border-collapse: collapse;
 			 width: 100%;
		}
		#tab th,td{
				padding-top: 12px;
				padding-left: 12px;
			  padding-bottom: 12px;
			  text-align: left;
			  width:20vw;
			  background-color: #1F2833;
			  color: #66FCF1;
		}
		#tab tr:nth-child(even){background-color: rgba(31, 40, 51,0.9);}
		#tab tr:nth-child(odd){background-color: rgba(48, 62, 79,0.9);}
		

	</style>
	
</head>
<body>
    
    <div style="background-image: url('../../images/black.png'); width: 100%;background-position: center;
            background-repeat: no-repeat;width: 100%;filter: blur(3px);
      -webkit-filter: blur(3px); background-size: cover;
      height:100%;position: absolute;top: 0%;left: 0%;position:fixed;
      z-index: -2;" ></div>
    
	<div id="d1">

		<h1 onclick="goto(<?php echo isset( $_SESSION['user_id'] ) ?>)" >BOOK MY TRAIN</h1>
	</div>
	
	<?php
	    include("../get_all_bookings.php");
	?>

</body>

<script>

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
</html>