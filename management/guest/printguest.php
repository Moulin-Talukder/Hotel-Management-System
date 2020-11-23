<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <style>
	     


.table {
    position: relative;
    height: auto;
    margin-top: -2%;
    text-align: center;
    z-index: 0;
    font-size: 18px;
}
th {
    height: 50px;
    width: 150px;
    border: 1px solid black;
    padding: 8px;
    border-collapse: collapse;
}
td {
    width: 150px;
    border: 1px solid black;
    padding: 8px;
    border-collapse: collapse;
}
.heading {
    
    text-align: center;
    Color: Black;
    
    margin-top: 19%;
}
.afroza a {
    text-decoration: none;
    color: black;
    margin: 8% 26%;
    font-weight: bold;
}
.afroza {
    margin: 2% 48%;
    border: 1px solid;
    width: 75px;
    
    background-color: antiquewhite;
    height: 19px;
    

    
}
.container-table {
    margin: 20% 30%;
	margin-left: 26%;
}


                             
	   </style>
   </head>
   
	   <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body onload="print()">
  <div class="container-table">
    <?php
      $Guest_ID = null;
      $Guest_ID = $_GET["Guest_ID"];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbName = "db_hotel";
      $connected = false;
      $connection = mysqli_connect($servername, $username, $password, $dbName);
      if ($connection) {
        $connected = true;
      } else {
        die("<script type='text/javascript'>alert('Connection Failed!')</script>");
      }
      if ($Guest_ID == null) {
        $SQL = "SELECT * FROM tb_guest";
      } else {
        $SQL = "SELECT * FROM tb_guest WHERE Guest_ID='".$Guest_ID."'";
      }
      $result = mysqli_query($connection, $SQL);
      if (mysqli_num_rows($result) > 0 && $connected) {
        echo "<table><tr><th>Guest_ID</th><th>Guest_Name</th><th>Phone</th><th>Address</th><th>NID_No</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>".$row["Guest_ID"]."</td><td>".$row["Guest_Name"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["NID_No"]."</td></tr>";
          }
          echo "</table>";
        }
      mysqli_close($connection);
    ?>
  </div>


</body>
</html>