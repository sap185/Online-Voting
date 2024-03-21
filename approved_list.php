<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Candidates Approval List</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family:sans-serif;
    }
    body{
      min-height: 100vh;
      background: url('candidate_background.jpg') center/cover ;
/*      background-repeat: no-repeat;*/
      background-size: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    td img{
      width: 80px;
      height: 80px;
      margin-right: .5rem;
      border-radius: 17%;
      vertical-align: middle;
    }
    table,th,td{
      border-collapse: collapse;
      padding: 0.1rem;
      text-align: left;
    }
    main.table{
      width: 82vw;
      height: 90vh;
      background-color: #fff5;
      backdrop-filter: blur(7px);
      box-shadow: 0 .4rem .8rem #0005;
      border-radius: .8rem;
      overflow: hidden;
    }
    .table_header{
      width: 100%;
      height: 10%;
      background-color: #fff4;
      padding: .8rem 1rem;
/*      margin: .8rem 1rem;*/
    }
    .table_body{
      width: 95%;
      max-height: calc(89% - 1.6rem);
      background-color: #fffb;
      margin: .8rem auto;
      overflow: auto;
    }
    .table_body::-webkit-scrollbar{
      width: 0.5rem;
      height: 0.5rem;
    }
    .table_body::-webkit-scrollbar-thumb{
      border-radius: .5rem;
      background-color: #0004;
      visibility: hidden;
    }
    .table_body:hover::-webkit-scrollbar-thumb{
      visibility: visible;
    }
    table{
      width: 100%;
    }
    thead th{
      position: sticky;
      top: 0;
      left: 0;
      background-color: #d5d1defe;
    }
    tbody tr:nth-child(even){
      background-color: #0000000b;
    }
    tbody tr:hover{
      background-color: #fff6;
    }
    tr{
      letter-spacing: 0.1px;
    }
    .status{
      padding: .4rem 7px;
      border-radius: 16rem;
    }
    .status.approved{
      background-color: #86e49d;
      color: #006b21;
    }
    .status.pending{
      background-color: #d893a3;
      color: #b30021;
    }
    @media (max-width:1000px){
      td:not(:first-of-type){
        min-width:12.1rem;
      }
    }
    a{
      text-decoration: none;
    }


  </style>
</head>
<body>
  <main class="table">
    <section class="table_header">
        <h1 style="text-decoration: underline;color:blue;text-align:center">Candidates Approval List :</h1>
    </section>
<section class="table_body">
  <table>
    <thead>
    <tr>
      <th>Name</th>
      <th>Voter ID</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Gmail</th>
      <th>Phone No</th>
      <th>Address</th>
      <th>Aadhaar No</th>
      <th>Photo</th>
      <th>Approval</th>
    </tr>
    </thead>
    <tbody>
    <?php
      $cd = date("Y-m-d");
      $tenDaysbefore = date("Y-m-d", strtotime($cd."-10 days"));
      $sql = "SELECT * FROM candidate WHERE dateofsubmit >= '$tenDaysbefore'";
      $query = mysqli_query($con, $sql);
      if ($query) {
        while ($row = mysqli_fetch_array($query)) {
          // echo "<tbody>";
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['voter'] . "</td>";
          echo "<td>" . $row['age'] . "</td>";
          echo "<td>" . $row['gender'] . "</td>";
          echo "<td>" . $row['gmail'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['aadhaar'] . "</td>";
          echo "<td class='center'><img src='" . $row['photo'] . "' loading='lazy'></td>";
          if ($row['status'] == 'pending') {
            echo "<td><a href='approve_candidate.php?voter_id=" . $row['voter'] . "'><p class='status pending'>Pending</p></a></td>";
          } else {
            echo "<td><p class='status approved'>Approved</p></td>";
          }
          echo "</tr>";
          // echo "</tbody>";
        }
      }
    ?>
  </tbody>
  </table>
  </section>
</main>

  <?php mysqli_close($con); ?>
</body>
</html>
