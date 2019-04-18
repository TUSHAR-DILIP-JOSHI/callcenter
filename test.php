
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  align: right;
  float: right;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  align:center;
}

.col-25 {
  float: left;
  width: 35%;
  margin-top: 6px;
  
}

.col-75 {
  float: left;
  width: 65%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


</style>
</head>
<body>


<div class="container">

<?php

session_start();

 $servername = "localhost";
 $user= "root";
 $passwd = "";
 $db = "callcenter";

 $conn = new mysqli( $servername, $user, $passwd, $db);

$edit_record = $_GET['del'];





//$callernew = " SELECT caller FROM insert_data WHERE id = '1' "; 

//$varcall =mysqli_query($conn,$callernew);

//$row = mysqli_fetch_assoc($varcall);

//$retval = mysqli_query( $callernew , $conn );

//echo "$edit_record";

//echo $varcall;

//echo "$retval";

// $query = "Delete from callcenter.insert_data where id ='$delete_record' ";

//if (mysqli_query($conn,$query)){
//	echo"<script>window.open('view.php?deleted=Record has been Deleted successfully!', '_self')</script>";
//}



if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   else
   {
	 
	   
	 
	   
	   $res = mysqli_query($conn,"SELECT * FROM insert_data WHERE (id=$edit_record)");
	   
	   if ($res){
		   echo"---- CUSTOMER PROFILE ----";
		   
		   echo "<br>";
		   echo "<br>";
	   }
	   
	   $result = mysqli_fetch_array($res);
	   
	   $fetch_caller = $result["caller"];
	   
	   echo "coustomer number=== >>>"."$fetch_caller";
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_channel = $result["channel"];
	   
	   echo "coustomer channel=== >>>"."$fetch_channel";
	   
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_operator = $result["operator"];
	   
	   echo "coustomer operator === >>>"."$fetch_operator";
	   
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_circles = $result["circles"];
	   
	   echo "coustomer circles === >>>"."$fetch_circles";
	   
	   	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_time_date = $result["time&date"];
	   
	   echo "TIME OF CALL === >>>"."$fetch_time_date";
	   
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_name = $result["name"];
	   
	   echo "CUSTOMER NAME === >>>"."$fetch_name";
	   
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_product = $result["product"];
	   
	   echo "PRODUCT ENQUIRY === >>>"."$fetch_product";
	   
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_remark = $result["remark"];
	   
	   echo "REMARK === >>>"."$fetch_remark";
	   
	   
	   echo "<br>";
	   echo "<br>";
	   $fetch_call_attain_by = $result["call_attained_by"];
	   
	   echo "CALL ATTAINED BY === >>>"."$fetch_call_attain_by";
    }
	
	if(isset($_POST['submit'])) { 
	
	//$callername = $_POST['callername'];
    //$channelname = $_POST['channelname'];
    //$operatorname = $_POST['operatorname'];
    //$circlesname = $_POST['circlesname'];
    //$timeofcallname = $_POST['timeofcallname'];
    $nameofname = $_POST['nameofname'];
    $productname = $_POST['productname'];
    $remarkname = $_POST['remarkname'];
    $callattainbyname = $_POST['callattainbyname'];

     //  $sql= "UPDATE insert_data SET caller='$callername', channel='$channelname', operator='$operatorname', circles='$circlesname', name='$nameofname', product='$productname', remark='$remarkname', call_attained_by='$callattainbyname' WHERE id='$edit_record'";
	
	
	$sql= "UPDATE insert_data SET  name='$nameofname', product='$productname', remark='$remarkname', call_attained_by='$callattainbyname' WHERE id='$edit_record'";

	 //$varcaller = SELECT 'caller' FROM insert_data WHERE id = $edit_record;
	   
     // $sql = "UPDATE  insert_data  SET
     // (  caller, channel , operator, circles,  name, product, remark, call_attained_by ) 
      //VALUES ( '$callername', '$channelname', '$operatorname','$circlesname', '$nameofname', '$productname', '$remarkname', '$callattainbyname' ) 
	 // WHERE 'id' = '$edit_record' ";
	  
	   
	  $retval = mysqli_query( $conn, $sql );
	  
	   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($conn));
      }
   
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);
    
   	}
   
	 
?>
  <form action="/action_page.php">
  
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>

  
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  
  
  
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  
  
  
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  
    <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  
  </div>