
<?php 

$host="localhost";
$user="root";
$password="";
$db="project";

$conn = new mysqli($host, $user, $password, $db);
    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from employee_details where EID ='".$uname."'AND ID='".$password."' limit 1";
    
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header('location:home2.php');
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        header('location:home.php');
        exit();
    }
        
}
?>
