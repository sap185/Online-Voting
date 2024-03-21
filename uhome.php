<?php	include('connection.php');   ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<style type="text/css">
	*{
		margin: 5px;
		padding: 0;
		font-family: sans-serif;
	}
	body{
/*		background: url(back.jpg) center/cover;*/
	}
	h3{
		color:blue;
/*		font-family: sans-serif;*/
	}
	.navbar{
		display: flex;
		justify-content: space-between;
	}
	ul{
		list-style: none;
		display: inline-flex;
		justify-content: space-between;
		margin:6px;
		font-size: 17px;
	}
	ul li{
		di
	}
	li{
		padding-left: 52px;
	}
	a{
		text-decoration: none;
	}
	button {
	  display: inline-block;
	  padding: 10px 20px;
	  font-size: 18px;
	  color: #fff;
	  background-color: #333;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  transition: background-color 0.3s ease;
	}

	button:hover {
  	  background-color: #555;
	}

	button:disabled {
	  opacity: 0.6;
	  cursor: not-allowed;
	}

</style>
	
<body>

	<?php

	session_start();
	$cons_number = $_SESSION['cons_number'];
	$vid = $_SESSION['vid'];


	echo "<div class='navbar'>";
	echo "<h3 align='left'> Welcome ". $_SESSION['uname']."</h3>";
	echo "<ul>";
	echo "<li><a class='editbtn' href ='edituser.php'>Edit</a><li>";
	echo "<li><a class='logoutbtn' href ='logout.php'><b>Logout</b></a><li>";
	// echo "</div>";
	echo "</ul>";
	echo "</div>";
	echo "<hr>";


	$cd = date('Y-m-d');





    $sql = "select * from declaration where cons_number='" . $cons_number . "' and election_date='" . $cd . "'";


    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);


    $sql = "select * from votter_status where cons_number='" . $cons_number . "' and Vdate='" . $cd . "' and voter_vid='" . $vid . "'";


    $result = mysqli_query($con,$sql);

    $row1 = mysqli_fetch_array($result);


    if($row==true && $row1==false)
    {
		echo "<button class='votebtn'><a href ='vote.php'>Vote</a></button>";
    }
    else{
    	echo "<button disabled class='votebtn'>No Vote</button>";
    }

	?>

	

</body>
</html>


