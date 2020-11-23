<!DOCTYPE html>
<html>
   <head>
       <title>Hotel Management System</title>
	   <style>
	     .muk {    margin: -31% 42%;
    color: black;}
		 input {width: 84%;height: 19px;}
		 input[type="submit"] {width: 47%;margin: 9% 19%;}
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 form {

    width: 175%;
    padding-left: 45px;
    margin: 0% -35%;
    color: white;

}
		 body{
		color:white;	
	font-family:Arial;
	
	
}
input {

    background-color: paleturquoise;

}
p {

    color: black;

}
body {

    background-color: #252851;
    font-family: Arial;

}
h2 {

    color: darkturquoise;

}
p {
    font-size: 84%;
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
	background-color:steelblue;
	opacity:.6;
	line-height:40px;
	text-align:center;
	font-size:20px;
	margin-top: -3%;
	
	
}
ul li a {
    text-decoration: none;
    color: white;
	display:block;
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
    
    padding-top: 20px;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 67px;
    margin-top: 20%;
    text-align: center;
}

	   </style>
   </head>
   <body >
   <style>input[type="submit"] {
    width: 47%;
    margin: 1% 19%;
}</style>
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
<br><br><br><br><br><br><br><br>
	   <center>
<?php
$Servername="localhost";
$Username="root";
$Password="";
$db_name="db_hotel";
$conn=mysqli_connect($Servername,$Username,$Password,$db_name);
if(!$conn)
{
  die("Error");
}
  echo"successfull";
$sql="INSERT INTO tb_employee 
(Employee_ID,Employee_Name,Phone,Address) 
VALUES('$_POST[employee_id]','$_POST[employee_name]','$_POST[phone]','$_POST[address]')" ;
if(mysqli_query($conn,$sql)) 
{
	echo"New Record Inserted";
}
else
{
	echo"Error";
}

?>  
</center>
<br><br><br><br>

<div class="uu">
	   
	   <p>Created By:Talukder Makid Uddin Moulin
           <br>ID:17103345</br></p>
	   </div>
	</body>
</html>
