<html>
<head>
<style>
body{
	background-image:url(film.jpg);
	color:#000000;
	height:100%;
	width:100%;
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
 <?php


$query = 'select * from movie';

$result = pg_query($query);

$i = 0;
echo '<html><body><table><tr>';
while ($row = pg_fetch_row($result)) 
{
	
		echo '<tr>';
		echo '<td style="font-size:250%">'. $row[0].'</td>';
		echo '</tr>';
	
}
pg_free_result($result);

echo '</table></body></html>';

?>
</body>
</html>