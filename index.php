<html>
	<head>
	<title>ColoredCow SOIREE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	</head>

	<body style="background-color: ">
  
 
<nav class="navbar " style="background-color: #ADD8E6"; "position: fixed";>
          

          <div class="navbar-header">
              <a class="navbar-brand"  href="#"> <img src="https://coloredcow.com/wp-content/themes/ColoredCow/dist/img/logo.png" width="190" height="50" class="d-inline-block align-top" alt=""> </a>
        </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		       <ul class="nav navbar-nav navbar-right">
			      <li><a href="guest.php"><button type="button"   value=guestbttn name="guest" class="btn btn-primary" style="width: 10em;  height: 3em;"><span class="glyphicon glyphicon-user">&nbsp;GUEST</button></a></li>
			      <li><a href="event.php"><button type="button"   value=eventbttn name="event" class="btn btn-primary" style="width: 10em;  height: 3em;"> <span class="glyphicon glyphicon-cutlery"></span> &nbsp EVENT</button></a></li>
			    </ul>
	</div>
   </div>
   
    </nav>
     
    <div align="center">
    <div class= "col-sm- col-md- col-lg-12" style="font-family: Tangerine;" >  <h1><b>WELCOME&nbsp&nbspTO&nbsp&nbsp <img src="https://coloredcow.com/wp-content/themes/ColoredCow/dist/img/logo.png" width="170" height="48" class="d-inline-block align-bottom" alt="">  &nbsp&nbsp&nbspSOIREE</b></h1> <hr>
    </div>
    </div>
   

    <div class="container" >
     
     <div calss= "row">
    <!--  <div class= "col-sm- col-md-3 col-lg-12"> 
     <div id="eventbgimg"> -->

   
     		<div class= "col-sm- col-md- col-lg-12"> 
           
           <H2 style="color:" ><b> UPCOMING SOIREE</b></H2> <br> 
           
            <div class="transbox" style="color: #B11C54;">
              
                 	<?php

				      $con= mysqli_connect('localhost','root','','event') or die("error in connection");

					  $sql= "SELECT * from eventinfo ORDER BY date DESC limit 1";

					  $record= mysqli_query($con,$sql);

				 		$data = mysqli_fetch_array($record);
				 		   echo "<center>";
				 		   echo "<div font-size: 250%>";
				 			echo "<h1 >";
				 			echo " DATE :- ".$data['date'];
				 			echo "<br>";
				 			echo " THEME :- ".$data['theme_name'];
				 			echo "<br>";
				 			echo " VENUE :- ".$data['venue'];
				 			echo "<br>";
				 			echo "</h1>"; 
				 			echo "</div>";
				 		echo "</center>";
   			        ?>
   			
                 	
   			        <!-- </div>
			        </div> -->
   			</div>

            </div>
            </div>

     </div> <br>
     <hr>


     <div class= "container">
     	<div class= "col-sm-3 col-lg-6"> 
            <div>
             <h4>  <b>I WANT TO BE THERE </h4>
	           <button type="button"  value=RSVPbttn name="guest" class="btn btn-lg btn-success" data-toggle="modal" 
	  			 data-target="#rsvpModal" style="width: 8em;  height: 2.4em;" >GET LINK</button>  &nbsp;&nbsp;&nbsp;
	  			 </div>
	  		</div>
	  		<div class= "col-sm- col-lg-6"> 	 
	  		<div style="margin-left: 70%">
	  		<h4><B>IF YOU ARE NEW</B> </h4> 
		      <button type="button"  id="requestbttn" value=REQUESTbttn name="event" class="btn btn-primary" data-toggle="modal" 
	   			data-target="#requestModal" required  style="width: 10em;  height: 3em;">CLICK HERE</button>
		</div>
		</div>
	</div>

    <!-- fcoding modals -->
    <div class= "container">
     		<div class= "col-sm-12 col-lg-6"> 
 <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X close</button>
            <h4 class="modal-title" id="myModalLabel">verify your email</h4>
            </div>
            <div class="modal-body">
            <form id="getlink">
                	 <label for="example-email-input" class=" col-form-label"> Email</label>
				      
				       <input class="form-control" type="email" placeholder="people@coloredcow.com" name="savedemail" id="savedemail" required>
            </form>
            <p id="linkmsg"></p>
            </div>
            
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  id="getlinkrsvp">Get link</button>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>

<





<!-- modal code for request -->
  <div class= "container">
	<div class= "col-sm-12 col-lg-6"> 
		 <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModal" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X close</button>
		            <h4 class="modal-title" id="myModalLabel"> NEW GUEST DETAILS</h4>
		            </div>

		            <div class="modal-body">
		            <div class='container'>
		            <div class='row'>
		                
				                <div class= "col-sm-3 col-lg-4">
				                 <form id="guest_details">
				                	 <label for="GUESTNAME-name" col-form-label">GUESTNAME</label>
				                	  <input class="USERNAME-name form-control" type="text" placeholder="guestname" name="guestname" id="guestname" required> <br>
				                	  <label for="example-email-input" class=" col-form-label"> Email</label>
								    	<input class="form-control" type="email" placeholder="people@coloredcow.com" name="nemail" id="nemail" required> <br>
								    	<div>
				 				 <label class="radio-inline">
				      				<input type="radio" name="ngender" value="male" required> male </label>
								<label class="radio-inline">
				      					<input type="radio" name="ngender" value="female" required> female </label>
				 				</div>  
				 				<div>
				 				<br>
				 				<p id="requestpara" style="color: Red"></p>
				 				</div>  
					            <div class="modal-footer">
					                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                <button type="button" class="btn btn-primary" id="unknownguest"> REQUEST </button> <br>
					            </div>
					         </form>
		            </div>
		       </div>
		    </div>
		 </div>
	   </div>
   </div>





  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
    </body>
</html>