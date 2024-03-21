<?php include('connection.php') ?>

<?php
	session_start();

	
	
		$voter_id=$_SESSION['vid'];
		//echo $voter_id;
		$cons_number=$_SESSION['cons_number'];
		//echo $cons_number;
		$cd=date("Y-m-d");
		//echo $cd;
		$party_name=$_POST['party_name'];


		$sql="INSERT INTO `votting`(`Vdate`,`cons_number`,`party_name`) VALUES('$cd','$cons_number','$party_name');";
		$res=mysqli_query($con,$sql);

		$sql1="INSERT INTO `votter_status`(`voter_vid`,`Vdate`,`cons_number`)VALUES('$voter_id','$cd','$cons_number');";
		$res1=mysqli_query($con,$sql1);

		if($res){
			echo "<h1 style='color:red'><center>Your vote is done</h1></center>";
			if($res1){
				echo "<h1><center>Your status is updated</center></h1>";
			}
		}
		
		$checking = "select voter_vid from votter_status where voter_vid='$voter_id'";
		$check=mysqli_query($con,$checking);
		if($check){
			echo "<h1 align='center'>Your Vote hasbeen Collected </h1>";
		}
		$sql="select * from candidate where voter='$voter_id'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		if(!$row){
			 header("location:http://localhost/oops/uhome.php");
			 exit();
			 mysqli_close($con);
			 session_destroy();
		}
		else{
			 header("location:http://localhost/oops/candidate_home.php");
			 exit();
			 mysqli_close($con);
			 session_destroy();
		}






	
?>