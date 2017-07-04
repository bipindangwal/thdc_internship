<html>
<head>
	<title>ColoredCow SOIREE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
</head>

<body>

<nav class="navbar " style="background-color: #ADD8E6"; "position: fixed";>
          
<nav class="navbar navbar-default" style="background-color: #ADD8E6; position: fixed; top: 0; width: 100%;z-index: 1;">
          <div class='container-fluid'>
			
          		<div class="navbar-header">
              			 <a class="navbar-brand"  href="#"> <img src="https://coloredcow.com/wp-content/themes/ColoredCow/dist/img/logo.png" width="190" height="50" class="d-inline-block align-top" alt=""> </a>
        		</div>
	    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    			<ul class="nav navbar-nav navbar-right">
				      		<li><a href="index.php"><button type="button"   value=eventbttn name="home" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Home</button></a></li>
				    	</ul>
	    	
 		   </div>
 		   </div>

   
 </nav>
</nav>
		<br><br>
<center> <h1>THANKS FOR YOUR VALUABLE TIME</h1></center>


<?php
$recievedcode= @$_GET['code'];
echo'<br>';
$outputtt= base64_decode($recievedcode);




 
								$con= mysqli_connect('localhost','root', '','guestinfo') or
								die ("not connected");

								$sql = "SELECT * FROM guestlist where randomcode='$outputtt' ";

								$record = mysqli_query($con,$sql);

								while ($row= mysqli_fetch_assoc($record))
								 {
								echo 	'<div class="transbox">';
								 	 echo "<center>";
				 		   echo "<div font-size: 250%>";
				 			echo "<h1 >";
				 			echo " name :- ".$row['guestname'];
				 			echo "<br>";
				 			echo " email :- ".$row['email'];
				 			echo "<br>";
				 			echo " gender :- ".$row['gender'];
				 			echo "<br>";
				 			echo "</h1>"; 
				 			echo "</div>";
				 		echo "</center>";
				 		echo '</div>';
								}



?>
<br>
<br>
<center><button class="updateresponse btn btn-success" style="width: 15em;  height: 5em; font-size: 100%" id="<?php echo $outputtt;?>">R.S.V.P</button></center>
<br>
<br>
<div class='container-fluid'>
<div class= "col-sm-1 col-md- col-lg-12">
<h2><center><b>Please Match your details if any there is any error contact us</b></center></h2>
</div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>
</html>


