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
$query = "insert into customer (f_name,l_name,password,email_id,phone_no) values('$_POST[fname]','$_POST[lname]','$_POST[password]','$_POST[myemail]','$_POST[mynumber]')";
$result=pg_query($query);
if($result)
{
	
	echo "Congratulations!!!"."<br>"."You have signed in successfully!!!"."<br/>";
	echo"<a href='login.php'>login</a>";
}
else
	echo"please enter valid details";
?>

</body>
</html>