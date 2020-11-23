<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     .muk {    margin: -28% 42%;
    color: black;}
		 
		 h1 {margin: 7% 15%;padding-top: 21px;}
		 form {margin: -8% 8%;}
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
input {

    background-color: paleturquoise;

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
		color: black;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 53px;
    margin-top: 40%;
    text-align: center;
}

.heading {
    
    text-align: center;
    Color: Black;
    
    margin-top: 9%;
	color: darkturquoise;
}
.a {
    position: absolute;
    margin-top: 7%;
    text-align: center;
    margin-left: 35%;
    z-index: 0;
    font-size: 18px;
}
p {
    height: 32px;
	color: white;
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
	   <h2 class =" heading">Edit Date Information</h2>
			<form action="updatedate.php" method="POST">
	<div class="a">
	<p>Date ID<br>
	<input type="number" name="date_id" value="<?php print $_GET['Date_ID'];?>" style="text-align:center;opacity:0.8;"readonly/>
	<p>Starting Date<br>
		<input type="text" name="starting_date" value=""></p>
	<p>Ending Date<br>
		<input type="text" name="ending_date" value=""></p>
	
		<input type="Submit" value="Submit">
	</div>
	</form>
<div class="uu">
	   
	   <p>Created By:Talukder Makid Uddin Moulin
           <br>ID:17103345</br></p>
	   </div>
</div>
</body>
</html>