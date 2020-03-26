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
   session_start();
?>
<?php 
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['show_date']=$_POST['show_date'];
$_SESSION['mname']=$_POST['mname'];
$_SESSION['offer_id']=$_POST['offer_id'];

$query="select m_id from movie where m_name='$_POST[mname]' ";
$result=pg_query($query);
$row=pg_fetch_row($result);
$m_id=$row[0];
echo $m_id;
$query="select start_time,tname from show,theatre where m_id='$m_id' and show.tid=theatre.t_id";
$result=pg_query($query);
while($row=pg_fetch_row($result))
{
	echo $row[1]."----->".$row[0]." </option>"."<br>";
}
$query="select tname from show,theatre where m_id='$m_id' and show.tid=theatre.t_id";
$result=pg_query($query);
$_SESSION['m_id']=$m_id;
echo '<form method="post" action="theatre4.php"><select name="theatre">';
while($row=pg_fetch_row($result))
{
	echo "<option>".$row[0]." </option>";
}
echo"<input type='submit' value='submit'> </form>";

?>

</body>
</html>