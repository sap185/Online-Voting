<?php include("connection.php"); ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adminstrator Home Page</title>
</head>
<body>

	<div id="headersection">
		<form action="" method="get"><button id="logoutbtn" name="logout">Log out</button></form>
		<h2 align="center" style="color:red"> Welcome to Adminstration Page </h2><hr>
	</div>
		<p align="center"><a href="vote_declaration.php">Click Here For Declare Vote in an particular constitution Number</a></p>






		<div class="vote-result" align="right">
			<a href="vote_result.php"><button id="resultbtn" >Show result</button></a>
		</div>

		<form action="#" method="POST">
		<div class="show_result" align="left">
			<button class="btn-1" type="submit" value="1" name="show_result">Publish Result</button>
			<button class="btn-1" type="submit" value="0" name="stop_result">Stop show Result</button>

		</div>
	</form>

		<?php
		if(isset($_POST['show_result'])){
			$status=$_POST['show_result'];
			$sql = "update `adminstrator` set `status`='$status' ";
			$query=mysqli_query($con,$sql);
			if($query){
				echo "<center>done</center>";
			}
		}
		if(isset($_POST['stop_result'])){
			$status=$_POST['stop_result'];
			$sql1="update `adminstrator` set `status`='$status' ";
			$query1=mysqli_query($con,$sql1);
			if($query1){
				echo "<center>result showing stop</center>";
			}
		}
		?>

		<div class="show_candidate" align="center">
			<a href="display_candidate.php"><button id="show_canbtn">Listed Candidates</button></a>
		</div>
		<div class="give_approval">
			<a href="approved_list.php"><button id="show_approvalbtn">Candidates Approval</button>
		</div>







		<style type="text/css">
		#logoutbtn {
            padding: 5x;
            font: size 15px;
            margin: 14px;
            background-color: blueviolet;
            color: white;
            border-radius: 5px;
            float: right;
        }
        button{
			width:150px;
			padding:10px;
			text-align:center;
			margin:20px 10px;
			border-radius: 20px;
			font-weight:bold;
			border:2px solid 0 0 5px #FF0000, 0 0 5px black;;
			background:transparent;
			color:orange;
			cursor:pointer;
			position:relative;
			overflow:hidden;
		/*	text-decoration: none;*/
		}
		.btn-1{
		    display: inline-block;
		    padding: 10px 8px;
		    background-color: #4CAFFD;
		    color: white;
		    text-decoration: none;
		    font-size: 15px;
		    border-radius: 4px;
		    border: none;
		    cursor: pointer;
		}

		.btn-1:hover {
  			background-color: #45a049;
		}


		
	</style>

</body>
</html>


<?php
	
	
	session_start();

	if(isset($_GET['logout'])){
		session_destroy();
		header("location: http://localhost/oops/adminstrator.php");
		exit();
	}

?>