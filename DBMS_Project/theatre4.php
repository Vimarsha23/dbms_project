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
<form method="post" action="theatre1.2.php">

<input type="submit" name="theatre1"  value="01">
<input type="submit"  name="theatre1"  value="02">
<input type="submit"  name="theatre1"  value="03">
<input type="submit"  name="theatre1"  value="04">
<input type="submit"  name="theatre1"  value="05">
<input type="submit"  name="theatre1"  value="06">
<input type="submit"  name="theatre1"  value="07">
<input type="submit"  name="theatre1"  value="08">
<br/>
<input type="submit"  name="theatre1"  value="09">
<input type="submit"  name="theatre1"  value="10">
<input type="submit"  name="theatre1"  value="11">
<input type="submit"  name="theatre1"  value="12">
<input type="submit"  name="theatre1"  value="13">
<input type="submit"  name="theatre1"  value="14">
<input type="submit"  name="theatre1"  value="15">
<input type="submit"  name="theatre1"  value="16">
<br/>
<input type="submit"  name="theatre1"  value="17">
<input type="submit"  name="theatre1"  value="18">
<input type="submit"  name="theatre1"  value="19">
<input type="submit"  name="theatre1"  value="20">
<input type="submit"  name="theatre1"  value="21">
<input type="submit"  name="theatre1"  value="22">
<input type="submit"  name="theatre1"  value="23">
<input type="submit"  name="theatre1"  value="24">
<br/>
<input type="submit"  name="theatre1"  value="25">
<input type="submit"  name="theatre1"  value="26">
<input type="submit"  name="theatre1"  value="27">
<input type="submit"  name="theatre1"  value="28">
<input type="submit"  name="theatre1"  value="29">
<input type="submit"  name="theatre1"  value="30">
<input type="submit"  name="theatre1"  value="31">
<input type="submit"  name="theatre1"  value="32">
<br/>
<input type="submit"  name="theatre1"  value="33">
<input type="submit"  name="theatre1"  value="34">
<input type="submit"  name="theatre1"  value="35">
<input type="submit"  name="theatre1"  value="36">
<input type="submit"  name="theatre1"  value="37">
<input type="submit"  name="theatre1"  value="38">
<input type="submit"  name="theatre1"  value="39">
<input type="submit"  name="theatre1"  value="40">
<br/>
<input type="submit"  name="theatre1"  value="41">
<input type="submit"  name="theatre1"  value="42">
<input type="submit"  name="theatre1"  value="43">
<input type="submit"  name="theatre1"  value="44">
<input type="submit"  name="theatre1"  value="45">
<input type="submit"  name="theatre1"  value="46">
<input type="submit"  name="theatre1"  value="47">
<input type="submit"  name="theatre1"  value="48">
<br/>
</form>
<?php

  $query="select t_id from theatre where tname='$_POST[theatre]'";
$result=pg_query($query);
$row=pg_fetch_row($result);
$tid=$row[0];
$_SESSION['tid']=$tid;
 $query="select show_id from show where tid='$tid' and m_id='$_SESSION[m_id]'";
$result=pg_query($query);
$row=pg_fetch_row($result);
  $show_id=$row[0];
 $_SESSION['show_id']=$show_id;
   $query="select seat_no from seat_no,ticket where seat_no.ticket_no=ticket.ticket_no and ticket.tid='$tid'and seat_no.show_id=$show_id";
   $result=pg_query($query);
   echo"the seats that are already booked:"."<br>";
   while($row=pg_fetch_row($result))
   {
	  echo $row[0]."<br/>";
   }
		
   
   
?>
</body>
</html>