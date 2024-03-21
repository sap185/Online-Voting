<?php
    include("connection.php");
    session_start();
    $gmail = $_SESSION['mail'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Nomination</title>

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
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* background-color: #fff; */
    background-image: url('cand.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 30%;
    padding: 100px;
    border-radius: 8px;
    box-shadow: 0px 0px 20px 20px rgba(0, 0, 0, 0.1);
}

.center h1 {
    text-align: center;
    margin-bottom: 50px;
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
    font-size: 14px;
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
    <!-- <div align="center">
        <form action="#" method="GET">
            <p><label>choose your constitution:</label><input type="number" name="cons_number" placeholder="Enter constitution Number : "></p>
            <p><label>enter  election date:</label><input type="date" name="date"></p>
            <input class="btnsubmit" type="submit" name="check" value="check"><br><br>
        </form>
    </div>  -->
    <div class="center">
        <h1>Nomimation form</h1>

        <form action="#" method="GET">
            <div class="txt_field">

            <input type="number" name="cons_number" placeholder=""required><span></span><label>Choose Constitution Number:</label>

            </div>

            <div class="txt_field">
            <input type="date" name="date"required><span></span><label>Enter Election date:</label>
            </div>
            <br>
            <input class="btnsubmit" type="submit" name="check" value="submit">
            

        </form>
    </div>

<?php
    $cd = date("Y-m-d");
    $expireDate = date("Y-m-d", strtotime($cd . "+2 days"));

    if(isset($_GET['check'])){
        $cons_number = $_GET['cons_number'];
        $date = $_GET['date'];

        $sql1 = "SELECT * FROM declaration WHERE cons_number='$cons_number' AND `declare_date` >='$cd' AND `election_date`<='$expireDate' ";
        $query1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_array($query1);

        if($row1){
            $election_date = $row1['election_date'];
            $declare_date = $row1['declare_date'];

            $sql2 = "SELECT * FROM nomination WHERE `date` BETWEEN '$declare_date' AND '$election_date' AND `cons_number`='$cons_number' AND `gmail`='$gmail' ";
            $query2 = mysqli_query($con, $sql2);
            $row2 = mysqli_fetch_array($query2);

            if($row2){
                echo "<center>Data is already set</center>";
            }
            else{
                ?>
                <div align="center">
                    <form action="#" method="POST">
                        <p><input type="text" name="party_name" placeholder="Enter your Party:" required></p>
                        <input class="btnsubmit" type="submit" name="submit" value="submit"><br><br>
                    </form>
                </div>
            <?php
            }

            if (isset($_POST['submit'])) {
                $party_name = $_POST['party_name'];
                $sql3 = "INSERT INTO `nomination`(`gmail`,`cons_number`,`date`,`party_name`) VALUES ('$gmail','$cons_number','$date','$party_name') ";
                $query3 = mysqli_query($con, $sql3);

                if($query3){
                    echo "<center>Data is entered</center>";
                }
                else{
                    echo "kichu golmal a6e ";
                }
            }
        }
        else{
            echo "<center> r ekbar chek kor</center>";
        }
    }
?>
</body>
</html>
