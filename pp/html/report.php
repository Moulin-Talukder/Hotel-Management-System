<!DOCTYPE html>
<html>
   <head>
      
	  <style>
	    body{
	background-color: #252851;	
	font-family:Arial;
	
	
}
 ul{
	margin: 0% 0%;
	padding:0px;
	list-style:none;
}
ul li{
	float:left;
	width:200px;
	height:40px;
	background-color:black;
	opacity:.6;
	line-height:40px;
	text-align:center;
	font-size:20px;
	margin-top:-3%;
	
	
	
	
}
ul li a {
    text-decoration: none;
    color: white;
	display:block;
	background-color: steelblue;
}
ul li a:hover{
	background-color:green;
}
ul li ul li{
	display:none;
}
ul li:hover ul li{
	display:block;
}
.ta {
    margin: -3% 7%;
}
.ta h1 {
    margin: 5% 0%;
    color: blue;
}
.uu p {
    padding-top: 18px;
    color: black;
    font-weight: 500;
	font-size: 84%;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
    height: 81px;
    margin-top: 5%;
    text-align: center;
}
input {

    margin: 0% 48%;

}


	  </style>
	</head>
    <body >
	
	
     <div class="ta">
	   	   <h1>Hotel Management System For Room Booking</h1>
	   
	   <ul>
	   
	     <li><a href="http://localhost/pp/html/hotel.php">Home</a></li>
		  <li><a>Insert</a>
		     <ul>
			   <li><a href="http://localhost/management/guest/guest.php">Guest</a></li>
			   <li><a href="http://localhost/management/room/room.php">Room</a></li>
			   <li><a href="http://localhost/management/date/date.php">Date</a></li>
			   <li><a href="http://localhost/management/employee/employee.php">Employee</a></li>
			 </ul>
                  <li><a>View</a>
		     <ul>
               <li><a href="http://localhost/management/guest/view.php">Guest</a></li>
			   <li><a href="http://localhost/management/room/view.php">Room</a></li>
			   <li><a href="http://localhost/management/date/view.php">Date</a></li>
			   <li><a href="http://localhost/management/employee/view.php">Employee</a></li>
			 </ul>
		  </li>
		  <li><a>Search</a>
		     <ul>
               <li><a href="http://localhost/management/guest/gsearch.php">Guest</a></li>
			   <li><a href="http://localhost/management/room/rsearch.php">Room</a></li>
			   <li><a href="http://localhost/management/date/dsearch.php">Date</a></li>
			   <li><a href="http://localhost/management/employee/esearch.php">Employee</a></li>
			 </ul>
		  </li>
		  
		  <li><a href="http://localhost/pp/html/report.php">Result</a></li>
		  
                     
		 
		  </li>
	   </ul>
	   
	   </div>
	   <div class="table"><div id="printableArea">
<?php

$conn = mysqli_Connect('localhost','root','','db_hotel');
$sql="SELECT tb_guest.Guest_ID,tb_guest.Guest_Name,tb_room.Room_No,tb_room.Type,tb_date.Starting_Date,tb_date.Ending_Date,tb_room.Rent,tb_employee.Employee_Name
  FROM tb_guest 
  INNER JOIN tb_room ON tb_guest.Guest_ID = tb_room.Room_ID
  INNER JOIN tb_date ON tb_room.Room_ID = tb_date.Date_ID
  INNER JOIN tb_employee ON tb_date.Date_ID = tb_employee.Employee_ID
  WHERE tb_guest.Guest_ID = tb_room.Room_ID";
$result = mysqli_query($conn,$sql);

?>
<style>
table, th, td {
    border: 1px solid black; text-align: center;margin: -26% 14%; background-color: paleturquoise;
    

}
</style>
</head>
<body style="background-image:url('')">
<table style="width:74%">
  <tr style="color:blue">
  	<center>
  	<h1 style="margin: 17% 15%;padding-top: 0px;color: darkturquoise;">Hotel Pan Pacific</h1></center>
	<th>Guest ID</th>
	<th>Guest Name</th>
	<th>Room No</th>
	<th>Room Type</th>
    <th>Starting Date</th>
	<th>Ending Date</th>
	<th>Room Rent</th>
	<th>Signature</th>
	
	
    
  
  </tr>
  

<?php
while ($accused=mysqli_fetch_assoc($result)) 
{
	echo "<tr>";
	echo"<td>".$accused['Guest_ID']."</td>";
	echo"<td>".$accused['Guest_Name']."</td>";
	echo"<td>".$accused['Room_No']."</td>";
	echo"<td>".$accused['Type']."</td>";
	echo"<td>".$accused['Starting_Date']."</td>";
	echo"<td>".$accused['Ending_Date']."</td>";
	echo"<td>".$accused['Rent']."</td>";
	echo"<td>".$accused['Employee_Name']."</td>";
	
	
	
	
	
	echo "</tr>";
	}
	
?>
<input type="button" onclick="printDiv('printableArea')" value="PRINT" />

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script><br>
<div class="uu">
	   
	   <p>Created By:Talukder Makid Uddin Moulin
              <br>ID:17103345</br></p>
              
	   </div>
    

</body>
</html>
