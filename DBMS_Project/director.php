<html>
<head>
<style>
body{
	background-image:url(director.jpg);
	background-repeat:no-repeat;
	background-position:center;
	background-size:100% 100%;
	height:100%;
	font-size:200%;
	color:#000000;
}
</style>
</head>
<body>
<form method="GET">
<input type="radio" name="movier" value="Captain Marvel">Captain Marvel<br>
<input type="radio" name="movier" value="Badla">Badla<br>
<input type="radio" name="movier" value="Kesari">Kesari<br>
<input type="radio" name="movier" value="Gully Boy">Gully Boy<br>
<input type="radio" name="movier" value="118">118<br>
<input type="radio" name="movier" value="Yajamana">Yajamana<br>
<input type="radio" name="movier" value="LKG">LKG<br>
<input type="radio" name="movier" value="Band Vaaje">Band Vaaje<br>
<input type="radio" name="movier" value="Mukherjee Dar Bou">Mukherjee Dar Bou<br>
<input type="radio" name="movier" value="URI">URI<br>
<input type="submit" name="movieradio">
</form>
<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = mdbms";
   $credentials = "user = postgres password=darshana";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   $options="";
   $query="";
?>
<?php
if(isset($_GET['movier']))
{
	$query = "select director from MOVIE where m_name='".$_GET['movier']."'";
	$result = pg_query($query);
	$row = pg_fetch_row($result);
	echo $row[0];
}
?>
</body>
<html>