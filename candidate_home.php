<?php	include('connection.php');   ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candidate HomePage</title>
    <style>
        #logbtn {
            padding: 5x;
            font: size 15px;
            margin: 14px;
            background-color: blueviolet;
            color: white;
            border-radius: 5px;
            float: left;
        }
		body{
          position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: #fff; */
            background-image: url('candidate_background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100% ;

            padding: 100px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 20px rgba(0, 0, 0, 0.1);

        }
		

    </style>
</head>
<body>
<div id="headersection" >
			<a href="logout.php"><button id="logbtn">Logout </button></a>
			<h1 align="center" style="color:blue;">Candidate Page</h1>
		</div>
		<hr>
	<?php

	$cd = date('Y-m-d');

	session_start();
	$candidate_gmail=$_SESSION['mail'];
	$voter_id=$_SESSION['vid'];
	echo "<p align='center'>Welcome " . $_SESSION['candidate']."</p>";

		// $expireDate=date("Y-m-d",strtotime("+2 days"));
		// echo $expireDate;

	?>
       <h3> <p align="center" style="color:red;">Submit Your Nomination Form for Select Your Party : <a href="nomination.php">Candidate Nomination</a></h3>
		</p>

        <?php
    
    // else{

        $sql1="select * from candidate,nomination where candidate.gmail='$candidate_gmail' and nomination.gmail='$candidate_gmail' and candidate.gmail=nomination.gmail";
        $result1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_array($result1);

        if($row1){
            // echo $row1['cons_number'];
            $_SESSION['cons_number']=$row1['cons_number'];
            $cons_number=$_SESSION['cons_number'];
            // echo " it is the cons_number ".$cns_num;


            $sql2 = "select * from declaration where cons_number='" . $cons_number . "' and election_date='" . $cd . "'";
            $result2 = mysqli_query($con,$sql2);
            $row2 = mysqli_fetch_array($result2);

            $sql3 = "select * from votter_status where cons_number='" . $cons_number . "' and Vdate='" . $cd . "' and voter_vid='" . $voter_id . "'";
            $result3 = mysqli_query($con,$sql3);
            $row3 = mysqli_fetch_array($result3);

            if($row2==true && $row3==false)
            {
                echo "<br><br><a href ='vote.php'>Vote</a>";
            }

                }

	echo "<h4 align='right'><a href ='logout.php'>Logout</a></h4>";

	?>

</body>
</html>