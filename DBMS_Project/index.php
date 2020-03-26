<html>
<head>
<link rel="stylesheet" type="text/css" href="mylink.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
		
			<style type="text/css">
			body 
			{
				background-image: url(homebg1.jpg);
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		margin: 0px;
				font-size:200%;
			}
	</style>
	<script>
		function openNav() {
  			document.getElementById("myNav").style.width = "100%";
		}

		function closeNav() {
  			document.getElementById("myNav").style.width = "0%";
		}
		</script>
	
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
<div id="header" align="right">
			<table>
				<tr>
					<td class="nav-tab">
						<a href="index.php" ><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</td>
					<td class="nav-tab">
						<a href="theatre.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Theatres</a>						
					</td>
					<td class="nav-tab destinations">
							<a href="booking_tickets.php"><i class="fa fa-location-arrow" aria-hidden="true"></i> Book tickets</a>
							
					</td>
					<td class="nav-tab destinations">
							<a href="movies.html"><i class="fa fa-location-arrow" aria-hidden="true"></i> Movies</a>
							
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</table>
			
		</div>
		<script>
			function openNav() {
	  		document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
	  		document.getElementById("myNav").style.width = "0%";
			}
		</script>
		
</body>
</html>