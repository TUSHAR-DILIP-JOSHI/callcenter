<?php

session_start();

 $servername = "localhost";
 $user= "root";
 $passwd = "";
 $db = "callcenter";

 $conn = new MYSQLi( $servername, $user, $passwd, $db);

$delete_record = $_GET['del'];

$query = "Delete from callcenter.insert_data where id ='$delete_record' ";

if (mysqli_query($conn,$query)){
	echo"<script>window.open('view.php?deleted=Record has been Deleted successfully!', '_self')</script>";
}

?>