<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Sign Up</title>
    <link rel="stylesheet" type="text/css" href="candidate_register.css">
</head>

<body>
    <div class="navbar">
        <h1 align="center">Candidate Sign Up</h1>
    </div>
    <div class="container">
        <form id="myForm" action="#" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="abc">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label>VOTER ID:</label>
                    <input type="text" name="voter" placeholder="Enter your Voter ID" required>
                </div>
            </div>
            <div class="abc">
                <div class="form-group">
                    <label>Age:</label>
                     <select name="age" required>
                        <?php
                            // Generate options for ages starting from 18
                            for ($i = 25; $i <= 100; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </div>
            </div>
            <div class="abc">
                <div class="form-group">
                    <label>Gmail:</label>
                    <input type="email" name="gmail" placeholder="Enter your mail" required    
                         style="    border-spacing: 0 10px;
                        padding: 8px;
                        width: 100%;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        font-size: 13px;" >
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="text" name="phone" placeholder="Enter your phone number" required>
                </div>
            </div>
            <div class="abc">
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </div>
                <div class="form-group">
                    <label>Aadhaar Number:</label>
                    <input type="text" name="aadhaar" placeholder="Enter your Aadhaar ID" required>
                </div>
            </div>
            <div class="abcd">
                <div class="form-group">
                    <label>Photo:</label>
                    <label for="imageInput">Select an Image</label>
                    <input type="file" name="photo" id="imageInput" accept=".jpg,.jpeg" placeholder="Enter your photo" required>
                </div>
            </div>
            <br>
            <button class="btnsubmit" type="submit" name="submit" value="Submit">Submit</button><br><br>
            Already User?<a href="candidate_login_form.php">Login here</a>
            <?php
                if (isset($success_message)) {
                    echo '<p class="message">' . $success_message . '</p>';
                }
                if (isset($error_message)) {
                    echo '<p class="error-message">' . $error_message . '</p>';
                }
            ?>
        </form>
    </div>

    <div id="loadingContainer" class="loading-container">
        <div class="loading-icon"></div>
    </div>

    <script>
        function validateForm() {
            var form = document.getElementById("myForm");
            if (!form.checkValidity()) {
                // If the form is invalid, display error messages and prevent form submission
                form.classList.add("was-validated");
                return false;
            }
            // Form is valid, show loading container
            document.getElementById("loadingContainer").style.display = "block";
        }
    </script>
</body>
</html>



<?php

    include 'connection.php';

    if(isset($_POST['submit'])){

        $cd=date("Y-m-d");



        $name=$_POST['name'];
        $voter=$_POST['voter'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $gmail=$_POST['gmail'];

        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $aadhaar=$_POST['aadhaar'];

        $image=$_FILES['photo'];

        $filename=$image['name'];
        $filepath=$image['tmp_name'];
        $fileerror=$image['error'];

        $destfile='candidate/'.$filename;

        if($fileerror==0){
            move_uploaded_file($filepath,$destfile);
        }

        $sql="select * from candidate where voter='$voter' and aadhaar='$aadhaar'";
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);
        if(!$row){       
            $insertQuery="INSERT INTO `candidate` (`name`,`voter`, `age`,`gender`,`gmail`,`phone`,`address`,`aadhaar`,`photo`,`status`,`dateofsubmit`) VALUES ('$name','$voter', '$age','$gender','$gmail','$phone','$address','$aadhaar','$destfile','pending','$cd');";

            $res= mysqli_query($con,$insertQuery);

            if($res){
                
                
                // exit();

                
                echo "<center>Your Registration form is submitted but that's now on Peding Status</center>";
                
                
            }
        }
        else{
           ?>

                <button id="redirectButton">Go to Candidate Login Form</button>

                 <script>
                    document.getElementById("redirectButton").addEventListener("click", function() {
                        window.location.href = "candidate_login_form.php";
                    });
                </script>
                <?php
        }

        $con->close();
    }
?>
