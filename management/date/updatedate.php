<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     .muk {    margin: -28% 42%;
    color: black;}
		 
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 
		 body{
			
	font-family:Arial;
	background-color: #252851;
	
}
		 ul{
	margin: 0% 0%;
	padding:0px;
	list-style:none;
}
ul li{
	float:left;
	width:200px;
	hight:40px;
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
    
    padding-top: 10px;
	    font-size: large;
		color:black
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 53px;
    margin-top: 22%;
    text-align: center;
}
.toast {
    position: absolute;
    display: block;
    border: 2px solid;
    padding: 20px;
    margin-top: 1%;
    margin-left: 37%;
    font-family: sans-serif;
    font-size: 18px;
    box-shadow: 2px 2px;
	background-color: paleturquoise;
}
.heading {
    
    text-align: center;
    color: darkturquoise;
    
    margin-top: 19%;
	
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
	   <h2 class =" heading">Update Date Information</h2>
	<div class="toast">
		<?php
$servername="localhost";
$username="root";
$password="";
$db_name="db_hotel";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Connection failed");
}
else
{
echo nl2br("Successfully connected to the server\n");
}

$sql="UPDATE tb_date SET Starting_Date = '".$_POST['starting_date']."', Ending_Date ='".$_POST['ending_date']."' WHERE Date_ID = '".$_POST['date_id']."'";
if(mysqli_query($conn, $sql))
{
	echo nl2br("Data Updated successfully\n");
}
else
{
	echo nl2br("error");
}
?>
</div>
<div class="uu">
	   
	   <p>Created By:Talukder Makid Uddin Moulin
           <br>ID:17103345</br></p>
	   </div>
</div>
</body>
</html>