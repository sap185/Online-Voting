<?php include('connection.php'); ?>



<html>

<head>
    <title>Voter Login</title>
    <!-- <link rel="stylesheet" type="text/css" href="voter_login.css"> -->
    <style type="text/css">
        body {
            background: whitesmoke;
            font-family: Arial, sans-serif;
            background-image: url('candidate_background.jpg');

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: #fff; */
            background-image: url('login.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 40%;

            padding: 100px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 70px;
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

        .pass {
            text-align: right;
            margin-bottom: 15px;
            color: #1a73e8;
            cursor: pointer;
        }

        button {
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

        .signup_link {
            text-align: center;
            margin-top: 15px;
            color: #999;
        }

        .signup_link a {
            color: #1a73e8;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <div class="center">
        <h1>Voter Login</h1>
        <form action="#" method="POST">
            <div class="txt_field">

                <input name="voter" required><span></span><label>Voter ID</label>
            </div>

            <div class="txt_field">
                <input name="password" type="Password" required><span></span><label>Password</label>
            </div>
            <div class="pass"></div>

            <button class="btn" type="login" name="login">Login</button>

            <div class="signup_link">Haven't Register Yet? <a href="voter_register.php">Sign Up</a>
            </div>
    
         </form>
    </div>



    <?php
    if (isset($_POST['login'])) {
        $voter_vid = $_POST['voter'];
        $voter_password = $_POST['password'];
        $sql = "select * from `voter` where voter='$voter_vid' and password='$voter_password'";
        $result = mysqli_query($con, $sql);
        // $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        // $count=mysqli_num_rows($result);
        // if($count==1){
        if ($result) {
            // echo "<h1><center>Your Data Hasbeen fetched</h1></center>";
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);


                mysqli_close($con);
                session_start();
                $_SESSION['uname'] = $row['name'];
                $_SESSION['vid'] = $row['voter'];
                $_SESSION['cons_number'] = $row['cons_number'];

                header('Location:http://localhost/oops/uhome.php');
            } else {
    ?>
                <div align="center">
                    <h3 style="color:red">Incorrect User</h3>
                </div>
    <?php
            }
        }
    }


    ?>
</body>

</html>