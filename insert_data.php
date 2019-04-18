<html>
<?php


session_start();

 $servername = "localhost";
 $user= "root";
 $passwd = "";
 $db = "callcenter";

 $conn = new MYSQLi( $servername, $user, $passwd, $db);



      $varg = $_GET["caller"];

      $vart = $_GET["channel"];

      $varu = $_GET["operator"];

      $varo = $_GET["circle"];

      
     echo $varg;

     echo "<br>";
  
     echo $vart;

     echo "<br>";

     echo $varu;
    
     echo "<br>";

     echo $varo;

     if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 } 

 else {
     $insert = $conn ->query("INSERT INTO insert_data ( caller, channel, operator,circles ) VALUES ( '$varg', '$vart','$varu','$varo' )");

     }

?>

</html>