<!DOCTYPE html>
<html>
   <head>
      
	  <style>
	    body{
	background-color: #252851;	
	font-family:Arial;
	
	
}
h1 {

    color: darkturquoise;

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
	color:black;
	font-size: 84%;

}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 83px;
    margin-top: 7%;
    text-align: center;
}

.y h3 {
    margin: 18% 30%;
}
.y {
    color: black;
    margin: -28% 65%;
    width: 27%;
}
.y p {
    margin: -15% 0%;
}
.ll {

    margin: -22% 0%;

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
<div id="printableArea">
     <style>
table, th, td {
    border: 1px solid black; text-align: center;margin: 12% 11%; background-color: paleturquoise;
}
</style>
</head>
<body style="background-image:url('')"> 
<table style="width:80%">
  <tr style="color:blue">
    <center>
    <h1 style="margin: 16% 0%">Room Information</h1></center>
    <th>Room_ID</th>
    <th>Room_No</th> 
    <th>Type</th>
    <th>Rent</th>
  </tr>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_hotel"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }

  $searchKeyword = $_POST["searchKeyword"]; 
  $SQL = "SELECT * FROM `tb_room` WHERE '".$searchKeyword."' IN (Room_ID,Room_No,Type,Rent);";
  $result = mysqli_query($connection, $SQL);
  if (!$result || mysqli_num_rows($result) > 0) {
   
   while($row = mysqli_fetch_assoc($result)) 
   {
  echo "<tr>";
  echo"<td>".$row['Room_ID']."</td>";
  echo"<td>".$row['Room_No']."</td>";
  echo"<td>".$row['Type']."</td>";
  echo"<td>".$row['Rent']."</td>";
  echo "</tr>";
  }
  } 
  else 
  {
    echo "0 Result";
  }
?>

      <div class="uu">
	   
	   <p>Created By:Talukder Makid Uddin Moulin
           <br>ID:17103345</br></p>
	   </div>
       </div>
	   <div class="ll"><br><h3 align="center"></h3><center><input type="button" onclick="printDiv('printableArea')" value="Print Data!" /></center></div>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
    </body>
     
</html> 
  