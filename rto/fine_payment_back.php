<?php 

$host="localhost";
$user="root";
$password="";
$db="project";
$conn = new mysqli($host, $user, $password, $db);
    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
$ID = $_POST['ID'];
$VID = $_POST['VID'];
$LID = $_POST['LID'];
$RULE_NUMBER = $_POST['RULE_NUMBER'];
$RDATE = $_POST['RDATE'];
if(isset($_POST['PAY'])){
//$query2 = "INSERT INTO rules_contravened(ID, VID, LID, RULE_NUMBER, RDATE) VALUES('$ID', '$VID', '$LID', '$RULE_NUMBER', '$RDATE')";

$query2 = "CALL INSERT_DATA_PAYMENT('".$ID."', '".$VID."', '".$LID."', '".$RULE_NUMBER."', '".$RDATE."', 'PAID')";

if(mysqli_query($conn, $query2)){
  header('location:home2.php');
}
else{
  die(mysqli_error($conn));
}

}
?> 