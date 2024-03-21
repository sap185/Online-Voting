<?php
include("connection.php");

if (isset($_GET['voter_id'])) {
  $voterId = $_GET['voter_id'];

  // Perform the necessary database update to approve the candidate based on the voter ID

  
  $sql = "UPDATE candidate SET status = 'approved' WHERE voter = '$voterId'";
  mysqli_query($con, $sql);

  mysqli_close($con);

  // Reload the previous page after a short delay
  header("Location: approved_list.php");
  exit();
}
?>
