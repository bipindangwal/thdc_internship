<html>
<head>

</head>

<body>
<nav class="navbar navbar-default" style="background-color: #4c8ca9";>
          
<div class='container-fluid'>
<div class= "col-sm-1 col-md-6 col-lg-12"> 
          <div class="navbar-header">
              <a class="navbar-brand" style="color: white" href="#"></b> ColoredCow</b></a>
        </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		       <ul class="nav navbar-nav navbar-right">
			      <li><a href="event.php"><button type="button"   value=eventbttn name="event" class="btn btn-primary">EVENT</button></a></li>
			    </ul>
    </div>
  </div>
 </div>
    </nav>


    <div class="container">
     <div calss= "row">
     
     		<div class= "col-sm-5 col-md-6 col-lg-12"> 
           
            
          
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


<div class="container">
     <div calss= "row">
     
     		<div class= "col-sm-5 col-md-4 col-lg-8"> 


				<?php
								    $con= mysqli_connect('localhost','root', '','guestinfo') or
								die ("not connected");
							echo "<table class= table table-bordered >";
								echo "<tr>";
									echo "<th>";
										echo "ID";
									echo "</th>";
									echo "<th>";
										echo "GUEST NAME";
									echo "</th>";
									echo "<th>";
										echo "EMAIL ID";
									echo "</th>";
								echo "</tr>";
								$con= mysqli_connect('localhost','root', '','guestinfo') or
								die ("not connected");

								$sql = "SELECT * FROM guestlist ORDER BY id DESC ";

								$record = mysqli_query($con,$sql);

								while ($data= mysqli_fetch_assoc($record))
								 {
									echo "<tr>";
									echo "<td>".$data['id']."</td>";
									echo "<td>".$data['guestname']."</td>";  //same as mentioned in db
									echo "<td>".$data['email']."</td>";
									echo "<td>".$data['gender']."</td>";
									echo "</tr>";
									}

							echo"</table>";
				 ?> 
				</div>
				<div class= "col-sm-12 col-md-4 col-lg-3"> 
						<button type="button"   value="addguestbttn" name="event" class="btn btn-primary" data-toggle="modal" data-target="#addguestModal">+ADD NEW GUEST</button>
    			</div>
			</div>
		</div>
   
    <!-- adding guest through modal -->

    <div class= "container">
     	<div class= "col-sm-3 col-lg-2"> 
		    <div class="modal fade" id="addguestModal" tabindex="-1" role="dialog" aria-labelledby="addguestModal" aria-hidden="true">
		        <div class="modal-dialog">
		           <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X close</button>
		                <h4 class="modal-title" id="myModalLabel">ADD GUEST</h4>
		            </div>
		           
			            
		            <div class="modal-body">
		            <div class='container'>
		            <div class='row'>
		                
				          <div class= "col-sm-3 col-lg-4">
			                  <form id="guest_details">
					   				 <label for="guest-name" class="col-8 col-form-label"> GUEST's NAME</label>
									 <div class="col-12">
					   				 <input class="theme-name form-control" type="text" placeholder="guest's name" name="guestname" id="guestname"> 
					   				 </div><br>	  
					   				  <label for="example-email-input" class=" col-form-label"> Email</label>
								     <div class="col-12">
					   				 <input class="guest-email form-control" type="text" placeholder="guest email" name="gemail" id="gemail">
				                	</div><br>
				                	<label class="radio-inline">
								      <input type="radio"  value="male"  name="gender"> male </label>
									<label class="radio-inline">
								      	<input type="radio"  value="female" name="gender"> female </label>

				            		<div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				                <button type="button" class="btn btn-primary" id="addnewguest"> add new guests </button>
				           			 </div>
			            	</form >

			            
			            </div>
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
  <script type="text/javascript" src="main.js"></script>
</body>
</html>