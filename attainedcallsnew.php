<?php

session_start();



 $servername = "localhost";
 $user= "root";
 $passwd = "";
 $db = "callcenter";

 $conn = new mysqli( $servername, $user, $passwd, $db);
 
 
 
if(!isset($_SESSION['use'])||$_SESSION['use']==false){
       header("Location:login.php");
  }

?>

<html>
<head>
<style>

.fixed_header th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #333745;
  color: white;
 
}

.fixed_header {
	margin-all: 20px;
	margin-right: 120px;
	align:center;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

.fixed_header td, .fixed_header th {
  border: 1px solid #ddd;
  padding: 8px;
 
}

.fixed_header tr:nth-child(even){background-color: #f2f2f2;}



.fixed_header tr:hover {background-color: #ddd;}

.button {
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 25px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
  padding-top: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
  hover
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #4CAF50;
}
li a.active {
  background-color: #4CAF50;
  color: white;
}

.ulclass{
	position:fixed;
	width:100%;
}

p {

 position:static;

  
}
.theadclass{
	position:fixed;
	width:100%;
	
}
.fixed_header{
    width: 400px;
    table-layout: fixed;
    border-collapse: collapse;
}

.fixed_header tbody{
  display:block;
  width: 100%;
  overflow: auto;
  height: 100px;
}

.fixed_header thead tr {
   display: block;
}

.fixed_header thead {
  background: black;
  color:#fff;
}

.fixed_header th, .fixed_header td {
  padding: 5px;
  text-align: left;
  width: 200px;
}

.glow {
 
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
</head>
<body>
<ul class="ulclass">
  <li><a  href="allcallsnew.php">ALL CALLS NEW</a></li>
  <li><a href="allcallsold.php">ALL CALLS OLD</a></li>
  <li><a class="active" href="attainedcallsnew.php">ATTAINED CALLS NEW</a></li>
  <li><a href="attainedcallsold.php">ATTAINED CALLS OLD</a></li>
  <li><a href="nonattainedcallsold.php">NON ATTAINED CALLS OLD </a></li>
  <li><a href="nonattainedcallsnew.php"><h10 class="glow">+"NON ATTAINED CALLS NEWS"+</h10></a></li>
      <li><a href="logout.php">LOGOUT</a></li>
</ul>



</div>

<font color ='red' size='8'><?php echo @$_GET['deleted'];?></font>
<P>
<br><br>
<table style="width:100%" border= "1px solid black" font size="16"  class="fixed_header"  ;>
<thead bgcolor= "blue" class="theadclass">	
<tr>
<th><strong>ID OF CALLER</strong></th>
<th><strong>CALLER NUMBER</strong></th>
<th><strong>CHANNEL</strong></th>
<th><strong>OPERATOR</strong></th>
<th><strong>CIRCLES</strong></th>
<th><strong>TIME,DATE</strong></th>
<th><strong>CUSTOMER NAME</strong></th>
<th><strong>PRODUCT ENQUIRY</strong></th>
<th><strong>REMARK</strong></th>
<th><strong>ATTAIN BY</strong></th>
<th><strong>EDIT_RECORD</strong></th>
<!--<th><strong>DELETE</strong></th>-->
</tr>
</thead>	

<tbody>
<?php
$count=1;
//$sel_query = " Select * from insert_data  ORDER BY id  ;";

$sel_query = " Select * from insert_data WHERE !(call_attained_by IS NULL OR call_attained_by = '') ORDER BY id desc ;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<!--<td align="center"><?php echo $count; ?> </td>-->
<td align="center"><?php echo $row["id"]; ?> </td>
<td> <?php echo $row["caller"]; ?></td>
<td> <?php echo $row["channel"]; ?></td>
<td> <?php echo $row["operator"]; ?></td>
<td> <?php echo $row["circles"]; ?></td>
<td> <?php echo $row["time&date"]; ?></td>
<td> <?php echo $row["name"]; ?></td>
<td> <?php echo $row["product"]; ?></td>
<td> <?php echo $row["remark"]; ?></td>
<td> <?php echo $row["call_attained_by"]; ?></td>
<td><a href = 'edit.php?del=<?php echo $row["id"] ; ?>'> <button class="button button1"  style="vertical-align:middle"><span>EDIT</span></button></a></td>
<!--<td><a href = 'delete.php?del=<?php echo $count ; ?>'> DELETE</a></td>-->
</tr>
<?php $count++; } ?>

</tbody>
</table>
</P>
</body>
</html>