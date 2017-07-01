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
?>
<center><button class="updateresponse btn btn-info" style="width: 30em;  height: 10em;" id="<?php echo $outputtt;?>">CONFIRM</button></center>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>
</html>


