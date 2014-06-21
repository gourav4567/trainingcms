<?php
     $dbhost="localhost";
	 $dbuser="root";
	 $dbpass="";
	 $dbname="lynda";
     $connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	 
     
	 
	 if(mysqli_connect_errno())
{
die("database connection failed:" .
mysqli_connect_error() .
"(" .mysqli_connect_errno() .")"

    );
	}
	?>
<?php	
	$query  ="SELECT * ";
	$query .="From subjects ";
	$query .="Where id = 1 ";
	$query .="order by position ASC";
	$result = mysqli_query($connection, $query);

		if(!$result) {
		die("database query failed");
		}
?>
<html>
<head>
<title>lynda</title>
<link href="styleseets/public.css" media="all" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div id="header">
	<h1>lynda</h1>
	</div>
<div id="main">
  <div id="navigation">
  <ul>
		<?php
			
			while($subject = mysqli_fetch_assoc($result)) {
				
		?>
				<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
	  <?php
			}
		?>
		</ul>
		<br />
		<a href="admin.php">&rsaquo; Main menu</a><br />
		
		
		<br />
		
  </div>
  
</div>
<div id="footer">copyright 2014, lynda</div>
</body>
</html>