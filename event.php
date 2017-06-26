<!DOCTYPE html>
<html>
<head>
	<title>events details</title>
</head>
<body>


<nav class="navbar navbar-default" style="background-color: #4c8ca9";>
          
<div class='container-fluid'>
<div class= "col-sm-1 col-md-3 col-lg-12"> 
          <div class="navbar-header">
              <a href="http://www.coloredcow.com" class="navbar-brand" style="color: white" href="#"></b> ColoredCow</b></a>
        </div>
       
		       <ul class="nav navbar-nav navbar-right">
			      <li><a href="guest.php"><button type="button"   value=guestbttn name="guest" class="btn btn-primary">guest</button></a></li>
			    </ul>
			    <ul class="nav navbar-nav navbar-left">
			      <li><a href="index.php"><button type="button"   value=eventbttn name="home" class="btn btn-primary">HOME</button></a></li>
			    </ul>
    		</div>
    		</div>
    </nav>

<div class='container-fluid'>
<div  class="row">
<div class= "col-sm-1 col-md-5 col-lg-7"> 
<?php
		$con1=mysqli_connect('localhost','root','','event');
			 if (!$con1) //connection esblished/not established
				 {
				 echo "not connected to server";
				}
			if(!mysqli_select_db($con1,'event'))	//error when dbnot selected
				{
						 echo "not connected to db";
		     	}

			echo "<table class= table table-bordered>";
				echo "<tr>";
					echo "<th>";
						echo "ID";
					echo "</th>";
					echo "<th>";
						echo "theme";
					echo "</th>";
					echo "<th>";
						echo "date";
					echo "</th>";
					echo "<th>";
						echo "venue";
					echo "</th>";
				echo "</tr>";
				
				$sql = "SELECT * FROM eventinfo ORDER BY date DESC ";

				$record = mysqli_query($con1,$sql);

				while ($data= mysqli_fetch_assoc($record))
				 {
					echo "<tr>";
					echo "<td>".$data['id']."</td>";
					echo "<td>".$data['theme_name']."</td>";  //same as mentioned in db
					echo "<td>".$data['date']."</td>";
					echo "<td>".$data['venue']."</td>";
					echo "</tr>";
					}

	echo"</table>";


          ?>
       </div>
           <div class= "col-sm-2 col-md-6 col-lg-5"> 
             <button  type="button"  value=eventttn name="event" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#eventModal" >add event</button>
            </div>
      
<!-- code for modal -->
  <div class= "container">
	<div class= "col-sm-12 col-lg-6"> 
		 <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModal" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X close</button>
		            <h4 class="modal-title" id="myModalLabel"> ENTER EVENT DETAILS</h4>
		            </div>

		            <div class="modal-body">
		            <div class='container'>
		            <div class='row'>
		                
				                <div class= "col-sm-3 col-lg-4">
				                <form id="event_details">
				                	 <label for="theme" col-form-label">THEME</label>
				                	  <input class="USERNAME-name form-control" type="text" placeholder="theme" name="event_theme" id="event_theme"> <br>
				 	
				                	  <label for="example-date-input" class=" col-form-label"> DATE</label>
								    	<input class="form-control" type="date" placeholder="dd/mm/yy" name="event_date" id="event_date"> <br>
									<label for="example-venue-input" class=" col-form-label"> VENUE</label>
										<input class="form-control" type="text" placeholder="venue" name="event_venue" id="event_venue"> <br>		 				 				           
					            <div class="modal-footer">
					                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                <button type="button" class="btn btn-primary" id="saveevent"> save</button> <br>
					            </div>
					            </form>
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

</body>
</html>