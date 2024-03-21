<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>National Polling Web</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="index.css">
</head>

<body>
	<!-- <div class="banner"> -->
		<div class="navbar">
			<b class="logo">ELECTION COMMISION</b>
			<ul>
				<li><h3><a href="voter_checking.php"><i class="fa-solid fa-users"></i>Voter</a></h3></li>
				<li><h3><a href="candidate_checking.php"><i class="fa-solid fa-circle-user"></i>Candidate</a></h3></li>
				<li><h3><a href="adminstrator.php"><i class="fa-solid fa-house"></i>Adminstrator</a></h3></li>
			</ul>
		</div>
		<hr>

		<div class="content">
			<!-- <h1>Welcome to National Web Polling</h1> -->
			<div class="">
				<?php
					$ec_id=2001;
					$sql ="select `status` from `adminstrator` where ec_id='$ec_id' ";
					$query=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($query);
					if($row){
						$status=$row['status'];
						if($status==1){
							?>
							<a href="vote_result.php"><button id="resultbtn" >Show result</button></a>
							<?php
						}
						else{
						?>


						<button disabled id="resultbtn" ><h2 style = "color:red;   padding:8x" > The result is not published yet</h2></button>
						<?php
						}
					}
				?>
			</div><br><br><br><br><br><br><br><br><br><br>
			<br><br>
			<div><p style="font-size: 60px;font-weight: bold;color:blue" >Welcome to National Web Polling</p></div>
			

		</div>
	<!-- </div> -->
</body>
</html>