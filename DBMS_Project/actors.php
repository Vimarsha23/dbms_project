<html>
<head>
<link rel="stylesheet" type="text/css" href="format.css">
<style>
body{
	background-image:url(actors.jpg);
	font-size:200%;
	color:#FFFF00;
}
</style>
</head>
<body>
<form method="GET">
<input type="radio" name="actor" value="Captain Marvel">Captain Marvel<br>
<input type="radio" name="actor" value="Badla">Badla<br>
<input type="radio" name="actor" value="Kesari">Kesari<br>
<input type="radio" name="actor" value="Gully Boy">Gully Boy<br>
<input type="radio" name="actor" value="118">118<br>
<input type="radio" name="actor" value="Yajamana">Yajamana<br>
<input type="radio" name="actor" value="LKG">LKG<br>
<input type="radio" name="actor" value="Band Vaaje">Band Vaaje<br>
<input type="radio" name="actor" value="Mukherjee Dar Bou">Mukherjee Dar Bou<br>
<input type="radio" name="actor" value="URI">URI<br>
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
if(isset($_GET['actor']))
{
	$query = "select A.actor from MOVIE as M,ACTORS as A where M.m_name='".$_GET['actor']."' and M.m_id=A.m_id";
	$result = pg_query($query);
	$i=0;
	echo '<html><body><table><tr>';	
	while ($row = pg_fetch_row($result)) 
	{
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo '<td style="font-size:300%;color:#FF0000">' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		$i = $i + 1;  	
}

}
?>
</body>
<html>