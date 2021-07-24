<?php
	$engine1 =  0;
    $engine2 =  0;
    $engine3 =  0;
    $engine4 =  0;
    $engine5 =  0;
    $engine6 =  0; 
?> 
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['run'])) {
$sql = "SELECT engine1, engine2, engine3, engine4, engine5, engine6 FROM motor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $engine1 =  $row["engine1"];
    $engine2 =  $row["engine2"];
    $engine3 =  $row["engine3"];
    $engine4 =  $row["engine4"];
    $engine5 =  $row["engine5"];
    $engine6 =  $row["engine6"];
  }
}
}

?>

<?php 
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update'])) {

      $engine1 = $_POST['engine1'];
      $engine2 = $_POST['engine2'];
      $engine3 = $_POST['engine3'];
      $engine4 = $_POST['engine4'];
      $engine5 = $_POST['engine5'];
      $engine6 = $_POST['engine6'];

      $sql = "UPDATE motor SET engine1='$engine1', engine2='$engine2',  engine3='$engine3',  engine4='$engine4',  engine5='$engine5',  engine6='$engine6' WHERE id=1";

      if ($conn->query($sql) === TRUE) {
        //echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }

      $conn->close();

  }
 ?>

 <?php 
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['right'])) {

      $direction = "right";


      $sql = "UPDATE panel SET direction='$direction' WHERE id=1";

      if ($conn->query($sql) === TRUE) {
        //echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }

      $conn->close();

  }
 ?>
 <?php 
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['left'])) {

      $direction = "left";


      $sql = "UPDATE panel SET direction='$direction' WHERE id=1";

      if ($conn->query($sql) === TRUE) {
        //echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }

      $conn->close();

  }
 ?>
 <?php 
 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['backward'])) {

     $direction = "backward";


     $sql = "UPDATE panel SET direction='$direction' WHERE id=1";

     if ($conn->query($sql) === TRUE) {
       //echo "Record updated successfully";
     } else {
       echo "Error updating record: " . $conn->error;
     }

     $conn->close();

 }
?>
<?php 
 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['forward'])) {

     $direction = "forward";


     $sql = "UPDATE panel SET direction='$direction' WHERE id=1";

     if ($conn->query($sql) === TRUE) {
       //echo "Record updated successfully";
     } else {
       echo "Error updating record: " . $conn->error;
     }

     $conn->close();

 }
?>
<?php 
 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['stop'])) {

     $status = "stop";


     $sql = "UPDATE panel SET status='$status' WHERE id=1";

     if ($conn->query($sql) === TRUE) {
       //echo "Record updated successfully";
     } else {
       echo "Error updating record: " . $conn->error;
     }

     $conn->close();

 }
?>