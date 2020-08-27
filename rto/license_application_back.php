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

$query2 = "CALL INSERT_DATA_APPLICANT('".$ID."', '".$A."', '".$B."', '".$C."', '".$D."', '".$E."')";

if(mysqli_query($conn, $query2)){
  header('location:home.php');
}
else{
  die(mysqli_error($conn));
}
echo "string";
}
?>

<!-- 
<?php 
//insert.php
//$connect = mysqli_connect("localhost", "root", "", "project");
//if(isset($_POST["framework"]))
//  {
//  $framework = '';
//  foreach($_POST["framework"] as $row)
//  {
//   $framework .= $row . ', ';
//  }
//  $framework = substr($framework, 0, -2);
//  $query = "INSERT INTO license(A) VALUES('".$framework."')";
//  if(mysqli_query($connect, $query))
//  {
//    echo 'Data Inserted';
//  }
//}

//if (mysqli_connect_error()) {
//  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
//}

//if(isset($_POST["lid"])){
//  $lid = $_POST['lid'];
//  $query2 = "INSERT INTO license(LID) VALUES('$lid')";
//  if(mysqli_query($connect, $query2))
//  {
//    echo 'Data Inserted';
//  }
//  else{
//    echo 'ERROR while inserting data';
//  }
//}

//if(isset($_POST["date"])){
//  $date = $_POST['date'];
//  $query1 = "INSERT INTO license(DATE_OF_ISSUE) VALUES('$date')";
//  if(mysqli_query($connect, $query1))
//  {
//    echo 'Data Inserted';
//  }
//  else{
//    echo 'ERROR while inserting data';
//  }
///}

// if(isset($_POST["framework"]))
// {
//   foreach($_POST["framework"] as $row)
//   {
//     switch ( $_POST['framework'] )
//     {
//       case 'A' :
//         $query = "INSERT INTO license(A) VALUES('Applied')";
//           if(mysqli_query($connect, $query))
//           {
//             echo 'Data Inserted';
//           }
//           break;
//       case 'B' :
//         $query = "INSERT INTO license(B) VALUES('Applied')";
//           if(mysqli_query($connect, $query))
//           {
//             echo 'Data Inserted';
//           }
//           break;
//       case 'C' :
//         $query = "INSERT INTO license(C) VALUES('Applied')";
//           if(mysqli_query($connect, $query))
//           {
//             echo 'Data Inserted';
//           }
//           break;
//       case 'D' :
//         $query = "INSERT INTO license(D) VALUES('Applied')";
//           if(mysqli_query($connect, $query))
//           {
//             echo 'Data Inserted';
//           }
//           break;
//       case 'E' :
//         $query = "INSERT INTO license(E) VALUES('Applied')";
//           if(mysqli_query($connect, $query))
//           {
//             echo 'Data Inserted';
//           }    
//           break;
//       // default:
//       //   $total = $_POST['price'];
//       //   break;
//     }
//   }

// }
// header('location:home.php');
?> -->
