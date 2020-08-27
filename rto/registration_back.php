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
$PURPOSE = $_POST['PURPOSE'];
if(isset($_POST['submit'])){
//$query2 = "INSERT INTO registration(VID, ID, PURPOSE) VALUES('$VID', '$ID', '$PURPOSE')";
$query2 = "CALL INSERT_DATA_REGISTRATION('".$VID."', '".$ID."', '".$PURPOSE."')";
if(mysqli_query($conn, $query2)){
  header('location:home.php');
}
else{
  die(mysqli_error($conn));
}
echo "string";
}    
?>    