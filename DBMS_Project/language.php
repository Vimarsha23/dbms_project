<html>
<head>
<style>
body{
	background-image:url(language.jpg);
	font-size:200%;
	color:#000000;
	background-size:100% 100%;
	background-repeat:no-repeat;
	background-position:center;
}
</style>
</head>
<body>
<form method="GET">
<input type="radio" name="language" value="Captain Marvel">Captain Marvel<br>
<input type="radio" name="language" value="Badla">Badla<br>
<input type="radio" name="language" value="Kesari">Kesari<br>
<input type="radio" name="language" value="Gully Boy">Gully Boy<br>
<input type="radio" name="language" value="118">118<br>
<input type="radio" name="language" value="Yajamana">Yajamana<br>
<input type="radio" name="language" value="LKG">LKG<br>
<input type="radio" name="language" value="Band Vaaje">Band Vaaje<br>
<input type="radio" name="language" value="Mukherjee Dar Bou">Mukherjee Dar Bou<br>
<input type="radio" name="language" value="URI">URI<br>
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
if(isset($_GET['language']))
{
	$query = "select L.language from MOVIE as M,LANGUAGE as L where M.m_name='".$_GET['language']."' and M.m_id=L.m_id";
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