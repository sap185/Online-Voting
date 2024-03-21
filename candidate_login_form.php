<?php include('connection.php');  ?>



<html>

<head>
    <title>Candidate Login</title>
    <link rel="stylesheet" href="candidate_login.css">
</head>

<body>


    <div class="center">
        <h1>Candidate Login</h1>

        <form action="#" method="POST">
            <div class="txt_field">

                <input name="gmail" required><span></span><label>Gmail</label>

            </div>

            <div class="txt_field">
                <input name="voter" required><span></span><label>Voter ID</label>
            </div>
            <div class="pass"></div>

            <input type="submit" name="login" value="login">
            <div class="signup_link">Haven't Register Yet?<a href="candidate_register.php">Sign Up</a></div>

    
        </form>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $candidate_gmail = $_POST['gmail'];
        $candidate_voter = $_POST['voter'];
        $sql = "select * from `candidate` where gmail='$candidate_gmail' and voter='$candidate_voter' and status = 'approved'";
        $result = mysqli_query($con, $sql);

        if ($result) {

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);


                mysqli_close($con);
                session_start();
                $_SESSION['candidate'] = $row['name'];
                $_SESSION['vid'] = $row['voter'];
                $_SESSION['mail'] = $row['gmail'];
                // $_SESSION['cons_number']=$row['cons_number'];

                header('Location:http://localhost/oops/candidate_home.php');
            } else {
    ?>


    <?php
            }
        }
    }


    ?>


</body>

</html>