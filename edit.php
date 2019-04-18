
<html>
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
  height:40px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  align: right;
  float: right;
}
input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size : 25px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/*div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  align: center;
  height: 75%;
  align : center;
  margin : 60px;
}*/

input[type=text], select {
  width: 25%;
  padding: 5px 5px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 7px;
  box-sizing: border-box;
}

.container {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 20px;
  align:center;
  margin: 40px;
    margin-top: 10px;
	  padding-bottom: 0px;
	 
}

.col-25 {
  float: left;
  width: 50%;
 
  font-weight: bold;
font-style: italic;
  
}

.col-75 {
  
  width: 50%;
  margin-top: 6px;
  length : 30px;
 font-weight: bold;
font-style: italic;

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
input { font-size: 18px;font-weight: bold;
font-style: italic;   }

</style>
<head>
</head>
<body bgcolor="#ffffff">

<div class="container" align= "center">




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
		   echo"<h1><b><i><a>---- CUSTOMER PROFILE ----</a></i></b></h1>";
		   
		 //  echo "<br>";
		  // echo "<br>";
	   }
	   
	   $result = mysqli_fetch_array($res);
	   
	   $fetch_caller = $result["caller"];
	   
	  // echo "<b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUSTOMER NUMBER :- &nbsp;&nbsp;&nbsp;"."$fetch_caller</i></b>";
	   
	   //echo "<br>";
	  // echo "<br>";
	   $fetch_channel = $result["channel"];
	   
	 //  echo "<b><i>CUSTOMER CHANNEL :- &nbsp;&nbsp;&nbsp;"."$fetch_channel</i></b>";
	   
	   
	 //  echo "<br>";
	 //  echo "<br>";
	   $fetch_operator = $result["operator"];
	   
	 //  echo "<b><i>CUSTOMER OPERATOR :- &nbsp;&nbsp;&nbsp;"."$fetch_operator</i></b>";
	   
	   
	  // echo "<br>";
	 //  echo "<br>";
	   $fetch_circles = $result["circles"];
	   
	  // echo "<b><i>CUSTOMER CIRCLES :- &nbsp;&nbsp;&nbsp;"."$fetch_circles</i></b>";
	   
	   	   
	  // echo "<br>";
	  // echo "<br>";
	   $fetch_time_date = $result["time&date"];
	   
	  // echo "<b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TIME OF CALL :- &nbsp;&nbsp;&nbsp;"."$fetch_time_date</i></b>";
	   
	   
	  // echo "<br>";
	  // echo "<br>";
	   $fetch_name = $result["name"];
	   
	  // echo "<b><i>CUSTOMER NAME :- &nbsp;&nbsp;&nbsp;"."$fetch_name</i></b>";
	   
	   
	 //  echo "<br>";
	  // echo "<br>";
	   $fetch_product = $result["product"];
	   
	  // echo "<b><i>PRODUCT ENQUIRY :- &nbsp;&nbsp;&nbsp;"."$fetch_product</i></b>";
	   
	   
	  // echo "<br>";
	  // echo "<br>";
	   $fetch_remark = $result["remark"];
	   
	  // echo "<b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REMARK :- &nbsp;&nbsp;&nbsp;"."$fetch_remark</i></b>";
	   
	   
	   //echo "<br>";
	  // echo "<br>";
	   $fetch_call_attain_by = $result["call_attained_by"];
	   
	 //  echo "<b><i>CALL ATTAINED BY :- &nbsp;&nbsp;&nbsp;"."$fetch_call_attain_by</i></b>";
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

<form  method = "post"   a href ='callbook.php' >


<div class="row">
<div class="col-25">
<label for="cnname" >CUSTOMER NUMBER-</label>
</div>
 <div class="col-75">
<input type="text" name="cncname" placeholder= "<?php echo $fetch_caller; ?>" style="width:300px"disabled  "  align : "center" >
 </div><br>
  </div>

<div class="row">
<div class="col-25">
<label for="cucname" >CUSTOMER CHANNEL-</label>
</div>
 <div class="col-75">
<input type="text" name="cucuname" placeholder= "<?php echo $fetch_channel; ?>" style="width:300px"disabled  "  align : "center" >
 </div><br>
  </div>

<div class="row">
<div class="col-25">
<label for="coname" >CUSTOMER OPERATOR-</label>
</div>
 <div class="col-75">
<input type="text" name="cooname" placeholder= "<?php echo $fetch_operator; ?>" style="width:300px"disabled  "  align : "center" >
 </div><br>
  </div>	

<div class="row">
<div class="col-25">
<label for="cccname" >CUSTOMER CIRCLES-</label>
</div>
 <div class="col-75">
<input type="text" name="cocname" placeholder= "<?php echo $fetch_circles; ?>" style="width:300px"disabled  "  align : "center" >
 </div><br>
  </div>	

 <div class="row">
<div class="col-25">
<label for="tocname" >TIME OF CALL-</label>
</div>
 <div class="col-75">
<input type="text" name="toconame" placeholder= "<?php echo $fetch_time_date; ?>" style="width:300px"disabled  "  align : "center" >
 </div><br>
  </div>	

 <div class="row">
<div class="col-25">
<label for="fname" >ID-</label>
</div>
 <div class="col-75">
<input type="text" name="idname" placeholder= "<?php echo $_GET['del'] ?>" style="width:300px"disabled  "  align : "center" >
 </div><br>
  </div>	
<!--CALLER<input type="text" name="callername" placeholder="<?php echo '$varcaller' ?>" > <br><br><br>
CHANNEL<input type="text" name="channelname" placeholder="First name"><br><br><br>
OPERATOR<input type="text" name="operatorname" placeholder="First name"><br><br><br>
CIRCLES<input type="text" name="circlesname" placeholder="First name"><br><br><br>
TIMEOF CALL<input type="text" name="timeofcallname" placeholder="First name"><br><br><br>
-->
<div class="row">
<div class="col-25">
<label for="cname">CUSTOMER NAME-</label>
</div>
 <div class="col-75">
 <input type="text" name="nameofname" placeholder="<?php echo $fetch_name ?>"style="width:300px"align : "center" >
 </div>
 </div><br>
 
<div class="row">
<div class="col-25">
<label for="pname">PRODUCT-</label>
</div>
 <div class="col-75">
 <input type="text" name="productname" placeholder="<?php echo $fetch_product ?>"style="width:300px"align : "center" >
 </div>
 </div><br>
 
<div class="row">
<div class="col-25">
<label for="rname">REMARK-</label>
</div>
 <div class="col-75">
 <input type="text" name="remarkname" placeholder="<?php echo $fetch_remark ?>" style="width:300px"  align : "center" >
 </div>
 </div><br>
 
 <div class="row">
<div class="col-25">
<label for="caname">CALL ATTAIN BY-</label>
</div>
 <div class="col-75"><input type="text" name="callattainbyname" placeholder="<?php echo $fetch_call_attain_by; ?>"style="width:300px" align : "center" ><br><br><br>
</div>
 </div>
 
 
<input type="submit" name ="submit" value = "submit"  style="width:300px" align : "center"   >


</form>
</div>

</div>
<h1><a href= "attainedcallsnew.php">view record <<<</a></h1>
</body>

</html>



