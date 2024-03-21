<?php include('connection.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vote</title>
    <style>
        #all{
            display: flex;
        }
        #votting{
            margin-top: 100px;
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
  /*#firstTable {
      float: left;
      margin-right: 20px;
      margin-top: 50px;
    }

    /* CSS styles for the second table */
    /*#secondTable {
      background-color: #f2f2f2;
      border-collapse: collapse;
      width: 100%;
    }

    #secondTable th {
      background-color: #333;
      color: #fff;
      border: 1px solid #ddd;
      padding: 8px;
    }

    #secondTable td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #secondTable tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #secondTable tr:hover {
      background-color: #ddd;
    }*/
</style>


</head>
<body>

<?php
session_start();
$voter_id = $_SESSION['vid'];
$cons_number = $_SESSION['cons_number'];
$cd = date("Y-m-d");

$sql1 = "SELECT * FROM declaration WHERE `election_date` = '$cd' ";
$query1 = mysqli_query($con, $sql1);
$row2 = mysqli_fetch_array($query1);
$declare_date = $row2['declare_date'];
$election_date = $row2['election_date'];

$sql = "SELECT nomination.party_name FROM declaration, nomination WHERE declaration.cons_number = nomination.cons_number AND election_date = '$cd' AND nomination.cons_number = '$cons_number' AND nomination.date BETWEEN '$declare_date' AND '$election_date'";
$result = mysqli_query($con, $sql);

echo "<div id='all'>";
echo "<div id='votting'>";
echo "<form action='votting.php' method='post'>";
echo "<input type='hidden' value='" . $cons_number . "'  name='cons_number'>";
echo "<table id='firstTable' align='center' border='1' cellpadding='20'>";
echo "<tr>";
echo "<th>Select Candidate</th>";
echo "<th>";
echo "<select name='party_name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['party_name'] . "'>" . $row['party_name'] . "</option>";
}
echo "</select>";
echo "</th>";
echo "</tr>";

echo "<tr>";
echo "<th colspan='2'><input type='submit'></th>";
echo "</th>";
echo "</tr>";
echo "</table>";
echo "</form>";
echo "</div>";
?>

<!-- <div align="center"> -->
    <div class="filter">
                <table id="secondTable">
                    <thead>
                    <tr>
                        <th>Party</th>
                        <th>Name</th>
                        <th>Constitution Number</th>
                        <th>Photo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM nomination, candidate WHERE candidate.gmail = nomination.gmail AND nomination.cons_number = '$cons_number' AND nomination.date BETWEEN '$declare_date' AND '$election_date' AND candidate.status = 'approved'";
                    $res = mysqli_query($con, $sql);
                    while ($row1 = mysqli_fetch_array($res)) {
                        ?>
                        <tr>
                            <td><?php echo $row1['party_name']; ?> </td>
                            <td><?php echo $row1['name']; ?> </td>
                            <td><?php echo $row1['cons_number']; ?> </td>
                            <td><img src="<?php echo $row1['photo']; ?>" loading="lazy" width="100" height="100"></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
    </div>
</div>



</body>
</html>
