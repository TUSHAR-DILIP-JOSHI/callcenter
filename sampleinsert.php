<?php

session_start();

 $servername = "localhost";
 $user= "root";
 $passwd = "";
 $db = "callcenter";

 $conn = new mysqli( $servername, $user, $passwd,$db);
 
  if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   else
   {
	   echo "connected";

      $sql = "INSERT INTO insert_data 
      (  caller, channel , operator, circles,  name, product, remark, call_attained_by) 
      VALUES ( '9898989898', 'XYZoo', 'jioairtel','maharashtra', '', '', '', '' )";
	  
	   
	  $retval = mysqli_query( $conn, $sql );
	  
	   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($conn));
      }
   } 
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);
 
?>