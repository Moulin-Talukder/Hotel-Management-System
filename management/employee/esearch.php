<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	<!DOCTYPE html>
<html>
   <head>
      
	  <style>
	    body{
		
	font-family:Arial;
	
	
}
body {

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
	margin: 0% 0%;
	font-size: 84%;

font-weight: unset;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
   height: 83px;
    margin-top: -10%;
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
form {
    margin: 20% 36%;
    background-color: cadetblue;
    height: 190px;
    border-radius: 70px;
}
input[type="submit"] {
    margin: 9% 32%;
    width: 33%;
    height: 28px;
    border-radius: 19px;
    border-color: black;
}
input[type="text"] {
    width: 72%;
    height: 26px;
    border-radius: 17px;
    margin: -2% 12%;
    background-color: paleturquoise;
    border-color: black;
}
p {
    font-size: x-large;
    font-weight: 600;
    margin: 0% 28%;
    padding-top: 25px;
}
	  </style>
</head>
<body>
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

	<form method="POST" action="search.php">
     
        <p>Search Employee</p><br>
        <input type="text" name="searchKeyword" placeholder="Search By Employee ID"></br>
        <input type="submit" value="submit"></br>
    </form>
	<div class="uu">
	   
	   <p>Created By:Talukder Makid Uddin Moulin
           <br>ID:17103345</br></p>
	   </div>

</body>
</html>