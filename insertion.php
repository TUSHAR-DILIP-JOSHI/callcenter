<?php

include 'edit.php';

//session_start();

 $servername = "localhost";
 $user= "root";
 $passwd = "";
 $db = "callcenter";

 $conn = new MYSQLi( $servername, $user, $passwd, $db);
 
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else{
	echo "connected";
	
	$callername = $_POST['callername'];
	
	// $callername = (isset($_POST['callername']) ? $_POST['callername'] : '');
	
//	$idname = mysqli_real_escape_string($conn, $_POST['idname']);
//$callername = mysqli_real_escape_string($conn, $_POST['callername']);
//$channelname = mysqli_real_escape_string($conn, $_POST['channelname']);
//$operatorname = mysqli_real_escape_string($conn, $_POST['operatorname']);
//$circlesname = mysqli_real_escape_string($conn, $_POST['circlesname']);
//$timeofcallname = mysqli_real_escape_string($conn, $_POST['timeofcallname']);
//$nameofname = mysqli_real_escape_string($conn, $_POST['nameofname']);
//$productname = mysqli_real_escape_string($conn, $_POST['productname']);
//$remarkname = mysqli_real_escape_string($conn, $_POST['remarkname']);
//$callattainbyname = mysqli_real_escape_string($conn, $_POST['callattainbyname']);



$sql = "INSERT INTO insert_data (caller)VALUES ($callername)";
 
 $result=mysql_query($sql);
 
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}


 
?>