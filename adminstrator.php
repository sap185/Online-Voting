<?php include('connection.php');   ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminstrator Login</title>

    <style>
        body {
            background: lightgrey;
            font-family: Arial, sans-serif;
            background-image: url('candidate_background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }

        .center {
            
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* background-clip: content-box; */
            background-size: 100% 27%;
            padding: 100px;position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: #fff; */
            background-image: url('discover.jpeg');
            border-radius: 8px;
            box-shadow: 0px 0px 20px 20px rgba(0, 0, 0, 0.1);
        }

        .center h1 {
            text-align: center;
            margin-bottom: 70px;
            margin-top: 40px;
        }

        .txt_field {
            position: relative;
            margin-bottom: 30px;
        }

        .txt_field input {
            width: 100%;
            padding: 10px 0;
            font-size: 20px;
            border: none;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
            transition: border-color 0.3s;
        }

        .txt_field input:focus~span::before,
        .txt_field input:valid~span::before {
            width: 100%;
            transition: width 0.3s;
        }

        .txt_field span::before {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 0%;
            height: 1px;
            background-color: #1a73e8;
            transition: width 0.3s;
        }

        .txt_field label {
            position: absolute;
            top: 50%;
            left: 0;
            pointer-events: none;
            transform: translateY(-50%);
            color: #999;
            font-size: 16px;
            transition: all 0.3s;
        }

        .txt_field input:focus~label,
        .txt_field input:valid~label {
            top: 0;
            font-size: 12px;
            color: #1a73e8;
            transform: translateY(-50%);
        }



        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            color: #fff;
            background-color: #1a73e8;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <div align="center" id="headersection">
        <a href="index.php"><button id="backbtn">Back</button></a>
        <h1 style="color:purple;">Adminstrative Login Page</h1>
        <hr>
    </div>

    <div class="center">
        <h2 align="center">Admin Login</h2>

        <form action="#" method="POST">
            <div class="txt_field">

                <input type="text" name="ec_id" required><span></span><label> Election Commission's ID: </label>

            </div>

            <div class="txt_field">
                <input type="email" name="gmail" required><span></span><label>Gmail ID : </label>
            </div>
            <!-- <div class="pass">Forgot PassWord?</div> -->

            <input type="submit" name="login" value="login">
            <!-- <div class="signup_link">Haven't Register Yet?<a href="candidate_register.php">Sign Up</a></div> -->


        </form>
    </div>



    <!-- </div>
		<div class="form-group" align="center">
			<form action="#" method="POST">
				<label>ECID -> </label><input type="text" name="ec_id" placeholder="Enter your Election Commission ECID" required><br><br>
				<label>Gmail ID -> </label><input type="email" name="gmail" placeholder="Enter your Gmail ID" required><br><br>

				<button class="btn" type="login" name="login">Login</button>
			</form>

		
	</div> -->










    <style type="text/css">
        #backbtn {
            padding: 5x;
            font: size 15px;
            margin: 14px;
            background-color: blueviolet;
            color: white;
            border-radius: 5px;
            float: left;
        }
    </style>

</body>

</html>



<?php

if (isset($_POST['login'])) {

    $ec_id = $_POST['ec_id'];
    $admin_gmail = $_POST['gmail'];

    $sql = "select * from `adminstrator` where ec_id='$ec_id' and gmail='$admin_gmail'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result);
        mysqli_close($con);
        if (!$row) {
            // die(mysqli_connect_errno());
?>
            <p align="center" style="color:black;">New Adminstrator ? Want to Register!<a href="admin_register.php">Adminstrator Register !</a></p>
<?php
        } else {

            session_start();
            $_SESSION['ec_id'] = $row['ec_id'];
            $_SESSION['gmail'] = $row['gmail'];

            header("location: http://localhost/oops/admin_page.php");
        }
    }
}

?>