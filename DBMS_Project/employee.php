<html>
<head>
<style>
body{
	background-image:url(theatre.jpg);
	color:#FFFFFF;
	font-size:200%;
}
</style>
</head>
<body>
<form method="GET">
<input type="radio" name="employee" value="PVR: 4DX, Orion Mall, Dr Rajkumar Road">PVR: 4DX, Orion Mall, Dr Rajkumar Road<br>
<input type="radio" name="employee" value="PVR: 4DX, Phoenix Marketcity Mall, Whitefield Road">PVR: 4DX, Phoenix Marketcity Mall, Whitefield Road<br>
<input type="radio" name="employee" value="PVR: 4DX, Vega City, Bannerghatta Road">PVR: 4DX, Vega City, Bannerghatta Road<br>
<input type="radio" name="employee" value="PVR: Arena Mall, Doddanakundi, Marthalli Ring Road">PVR: Arena Mall, Doddanakundi, Marthalli Ring Road<br>
<input type="radio" name="employee" value="PVR: Central Spirit Mall, Bellandur">PVR: Central Spirit Mall, Bellandur<br>
<input type="radio" name="employee" value="PVR: Forum Mall, Koramangala">PVR: Forum Mall, Koramangala<br>
<input type="radio" name="employee" value="PVR: MSR Elements Mall, Tanisandhra Main Road">PVR: MSR Elements Mall, Tanisandhra Main Road<br>
<input type="radio" name="employee" value="PVR: Vaishnavi Sapphire Mall, Yeshwanthpur">PVR: Vaishnavi Sapphire Mall, Yeshwanthpur<br>
<input type="radio" name="employee" value="PVR: VR Bengaluru, Whitefield Road">PVR: VR Bengaluru, Whitefield Road<br>
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
if(isset($_GET['employee']))
{
	$query = "select E.f_name,E.l_name from THEATRE as T,EMPLOYEE as E where T.tname='".$_GET['employee']."' and T.t_id=E.t_id";
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
			echo '<td style="font-size:300%;color:#FFFFFF">' . $c_row . '</td>';
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