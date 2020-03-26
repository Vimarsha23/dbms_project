<html>
<head>
<style>
body{
	padding:50px;
	font-size:200%;
	background-image:url(ticket1.jpg);
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
  
   $query="select seat_no from seat_no,ticket where seat_no.ticket_no=ticket.ticket_no and ticket.tid='$_SESSION[tid]'and seat_no.show_id=$_SESSION[show_id]";
   $result=pg_query($query);
   $flag=0;
    while($row=pg_fetch_row($result))
   {
	  if($row[0]==$_POST["theatre1"])
	  {
		  echo "this seat is already booked... please book another seat!";
		  $flag=1;
	  }
		
	}
	if($flag==0)
	{
		$query=" select password from customer where email_id='$_SESSION[email]'";
		$result=pg_query($query);
		$row=pg_fetch_row($result);
		if($_SESSION["password"]==$row[0])
		{

		$query="select price from discount where offer_id='$_SESSION[offer_id]'";
		$result=pg_query($query);
		$row=pg_fetch_row($result);
		$offer=$row[0];
		$price=(1*250)-$offer;
		$today=date("y-m-d");
		$tid='1';
		$query="insert into ticket(show_date,tid,price,offer_id,booking_date,no_of_tickets,m_name,password,email_id,show_id,m_id) values('$_SESSION[show_date]','$_SESSION[tid]',$price,'$_SESSION[offer_id]','$today',1,'$_SESSION[mname]','$_SESSION[password]','$_SESSION[email]',$_SESSION[show_id],'$_SESSION[m_id]')";
		$result=pg_query($query);
		
		if($result)
		{	
			$q="select ticket_no from ticket where email_id='$_SESSION[email]'and password='$_SESSION[password]'";
			$r=pg_query($q);
			$ro=pg_fetch_row($r);
			$query="insert into seat_no values($ro[0],$_POST[theatre1],$_SESSION[show_id])";
			$result=pg_query($query);
			$i = 0;
			echo '<html><body><table><tr>';
	

				echo '<tr style="font-size:250%">'.'Email_id : '.$_SESSION['email'].'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'show_date :'. $_SESSION['show_date'].'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'price :'. $price.'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'offer_id :'. $_SESSION['offer_id'].'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'booking_date :'. $today.'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'no_of_tickets : 1'.'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'Ticket no :'. $ro[0].'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'Movie name :'. $_SESSION['mname'].'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'Seat number:'. $_POST['theatre1'].'</tr>'.'<br/>';
				echo '<tr style="font-size:250%">'.'Show id:'. $_SESSION['show_id'].'</tr>'.'<br/>';
				echo"please pay the required price at the theatre!!";
		}
		}
		else
			echo "you have entered invalid credentials";
	}
   
?>
<a href="index.html">home</a>
</body>
</html>