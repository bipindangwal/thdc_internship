<html>
	<head>
	<title>ColoredCow SOIREE</title>
	</head>

	<body>
  
  <!--   <nav style="background-color: #3AAC76;">
  
	 	<div class="container">

	 		<div class="row">	
			 	<h1 class="navbar-brand"><b>ColoredCow SOIREE </b></h1>  -->
<nav class="navbar navbar-default" style="background-color: #4c8ca9";>
          
<div class='container-fluid'>
<div class= "col-sm-1 col-md-3 col-lg-12"> 
          <div class="navbar-header">
              <a class="navbar-brand" style="color: white" href="#"></b> ColoredCow</b></a>
        </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		       <ul class="nav navbar-nav navbar-right">
			      <li><a href="guest.php"><button type="button"   value=guestbttn name="guest" class="btn btn-primary">guest</button></a></li>
			      <li><a href="event.php"><button type="button"   value=eventbttn name="event" class="btn btn-primary">soiree</button></a></li>
			    </ul>
			    </div>
    		</div>
    		</div>
    </nav>
     <div class="container">
    <div align="center">
    <div class= "col-sm-1 col-md-3 col-lg-12">  <h1><b>WELCOME TO ColoredCow's SOIREE</b></h1> <hr>
    </div>
    </div>
    </div>

    <div class="container">
     <div calss= "row">
     
     		<div class= "col-sm-5 col-md-3 col-lg-12"> 
           
            
          
                 	<?php

				      $con= mysqli_connect('localhost','root','','event') or die("error in connection");

					  $sql= "select * from eventinfo";

					  $record= mysqli_query($con,$sql);

				 		$data = mysqli_fetch_array($record);
				 		   
				 			echo "<h2>";
				 			echo " THEME :- ".$data['theme_name'];
				 			echo "<br>";
				 			echo " DATE :- ".$data['date'];
				 			echo "<br>";
				 			echo " VENUE :- ".$data['venue'];
				 			echo "<br>";
				 			echo "</h2>"; 
				 		
   			        ?>
   			<hr>
                 	

   	

            </div>
            </div>

     </div>
    </div>


     <div class= "container">
     		<div class= "col-sm-12 col-lg-6"> 
       
           <button type="button"  value=RSVPbttn name="guest" class="btn btn-lg btn-success" data-toggle="modal" 
   data-target="#rsvpModal" >RSVP</button> &nbsp&nbsp&nbsp&nbsp&nbsp
	      <button type="button"   value=REQUESTbttn name="event" class="btn btn-primary" data-toggle="modal" 
   data-target="#requestModal">REQUEST</button>
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
                <form>
                	 <label for="example-email-input" class=" col-form-label"> Email</label>
				      
				       <input class="form-control" type="email" placeholder="people@coloredcow.com" name="gemail" id="gemail">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Get link</button>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>
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
				                	 <label for="GUESTNAME-name" col-form-label">GUESTNAME</label>
				                	  <input class="USERNAME-name form-control" type="text" placeholder="guestname" name="guestname" id="guestname"> <br>
				 				        
				               
				                	  <label for="example-email-input" class=" col-form-label"> Email</label>
								    	<input class="form-control" type="email" placeholder="people@coloredcow.com" name="gemail" id="gemail"> <br>
				 				 <label class="radio-inline">
				      				<input type="radio" name="optradio"> male </label>
								<label class="radio-inline">
				      					<input type="radio" name="optradio"> female </label>
				 				</div>    
				       				 </div>
				            </div>
					            <div class="modal-footer">
					                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                <button type="button" class="btn btn-primary"> Request link</button> <br>
					            </div>
		            </div>
		       </div>
		    </div>
		 </div>
	   </div>
   </div>






  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    </body>
</html>