<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check Your Details</title>
	<style type="text/css">
		.div{
			display: flex;
			font-size: 16px;
		}
		.a{
			text-decoration: none;
		}
	</style>
</head>
<body>

	<div class="header">
			<div class="heading" align="left" style="color:orange">Pofile</div>
			<div align="right" style="color:blue"><a href="uhome.php">Back</a></div>
	</div>
	<hr>

	<?php

	include ("connection.php");


	session_start();
	$voter_id=$_SESSION['vid'];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Retrieve the user details from the form
    	$name = $_POST["name"];
		$aadhaar = $_POST["aadhaar"];
		$father_name = $_POST["father_name"];
		$dob=$_POST['dob'];
		// $voter=$_POST['voter'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$cons_number=$_POST['cons_number'];


    // Update the user details in the database
    $sql = "UPDATE voter SET name='$name', aadhaar='$aadhaar', father_name='$father_name' dob='$dob', gender='$gender', address='$address', cons_number='$cons_number', WHERE voter='$voter_id' ";
    if ($con->query($sql) === TRUE) {
        echo "User details updated successfully.";
    } else {
        echo "Error updating user details: " . $con->error;
    }
}

	$sql="SELECT * FROM voter WHERE voter='$voter_id'";
	$result=mysqli_query($con,$sql);
	if($result){
		while ($row=mysqli_fetch_array($result)) {
			$name = $row["name"];
		    $aadhaar = $row["aadhaar"];
		    $father_name = $row["father_name"];
		    $dob=$row['dob'];
		    $voter=$row['voter'];
		    $gender=$row['gender'];
		    $address=$row['address'];
		    $cons_number=$row['cons_number'];
		}
	}
	else {
    	echo "User not found.";
	}
	$con->close();

	?>

	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<label for="name">Name:</label>
        <input name="name" value="<?php echo $name; ?>"><br><br>

        <label for="aadhaar">Aadhaar No:</label>
        <input name="aadhaar" value="<?php echo $aadhaar; ?>"><br><br>

        <label for="father_name">Father_name:</label>
        <input name="father_name" value="<?php echo $father_name; ?>"><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>"><br><br>

        <label for="voter">Voter ID:</label>
        <input name="voter" value="<?php echo $voter; ?>" disabled><br><br>

        <label for="gender">Gender:</label>
        <input name="gender" value="<?php echo $gender; ?>"><br><br>

        <label for="address">Address:</label>
        <input name="address" value="<?php echo $address; ?>"><br><br>

        <label for="cons_number">Constitution Number:</label>
        <input name="cons_number" value="<?php echo $cons_number; ?>"><br><br>

        <input type="submit" value="Save">
    </form>



</body>
</html>