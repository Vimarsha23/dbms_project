<html>
<head>
<style>
body{
	background-image:url(movie2.jpg);
	height:100%;
	background-repeat:no-repeat;
	background-position:center;
	font-size:200%;
	color:#000000;
}
form
{
	padding:50px;
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
$query=" select password from customer where f_name='$_POST[fname]' and l_name='$_POST[lname]'";
$result=pg_query($query);
$row=pg_fetch_row($result);
if($_POST["password"]==$row[0])
{
	echo "You have logged in successfully!!!"."<br/>";
	echo "<a href='theatre2.php'>'Go ahead!'</a>";
}

else
	echo"incorrect username or password";
?>

</body>
</html>