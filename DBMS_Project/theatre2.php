<html>
<head>
<style>
body{
	padding:50px;
	background-image:url(ticket1.jpg);
	font-size:200%;
	background-repeat:no-repeat;
	background-position:center;
}
</style>
</head>
<body>
<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = mdbms";
   $credentials = "user = postgres password=darshana";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   $options="";
   $query="";
?>
<form method="post" action="theatre3.php">
email-id:<input type="email" name="email"><br>
Enter your Password:<input type="password" name="password"><br>
show date:<input type="date" name="show_date"><br>
offer:<select name="offer_id"><br>
<option>none</option>
<option>icici bank</option>
<option>axis bank</option>
<option>MAGIC</option>
<option>1_ON_2</option>
</select><br>
movies:<select name="mname"><br>
<option value="Captain Marvel">Captain Marvel</option>
<option value="Badla">Badla</option>
<option value="Kesari">Kesari</option>
<option value="Gully Boy">Gully Boy</option>
<option value="118">118</option>
<option value="Yajamana">Yajamana</option>
<option value="LKG">LKG</option>
<option value="Band Vaaje">Band Vaaje</option>
<option value="Mukherjee Dar Bou">Mukherjee Dar Bou</option>
<option value="URI">URI</option>
</select><br>
<input type="submit" value="theatres in which the movie is avaliable">


</body>
</html>