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
$A=$_POST['A'];
$B=$_POST['B'];
$C=$_POST['C'];
$D=$_POST['D'];
$E=$_POST['E'];
if(isset($_POST['submit'])){
//$query2 = "INSERT INTO applicant(APPLICATION_NUMBER, A, B, C, D, E) VALUES('$ID', '$A', '$B', '$C', '$D', '$E')";

$query2 = "CALL INSERT_DATA_PASS('".$ID."', '".$A."', '".$B."', '".$C."', '".$D."', '".$E."')";

if(mysqli_query($conn, $query2)){
  header('location:license_clearance.php');
}
else{
  die(mysqli_error($conn));
}
echo "string";
}
?>