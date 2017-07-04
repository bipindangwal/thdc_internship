<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav class="navbar navbar-default" style="background-color: #ADD8E6; position: fixed; top: 0; width: 100%;z-index: 1;">
          <div class='container-fluid'>
			
          		<div class="navbar-header">
              			 <a class="navbar-brand"  href="#"> <img src="https://coloredcow.com/wp-content/themes/ColoredCow/dist/img/logo.png" width="190" height="50" class="d-inline-block align-top" alt=""> </a>
        		</div>
	    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    			<ul class="nav navbar-nav navbar-left">
				      		<li><a href="index.php"><button type="button"   value=eventbttn name="home" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Home</button></a></li>
				    	</ul>

			       		<ul class="nav navbar-nav navbar-right">
				      		<li><a href="event.php"><button type="button"   value=eventbttn name="event" class="btn btn-primary"> <span class="glyphicon glyphicon-cutlery"></span> EVENT</button></a></li>
				    	</ul>
	    	
 		   </div>

 </nav><hr>

 <hr><br> <br> <br> <br>

 <h1> <center>ADMIN PANEL</center></h1>

<br> <br> 


   	<div> <center>
						<button type="button"   value="addguestbttn" name="event" class="btn btn-success" data-toggle="modal" data-target="#addguestModal">ADD NEW GUEST</button> <br> <br>
	</center></div> 

    <div class="container-fluid">
     <div calss= "row">
      <form id="confirmtable">
     
     		<div class= "col-sm-11 col-md-8 col-lg-6"> 

     		<h3 style="font-family: georgia;">UPCOMING EVENT GUEST LIST </h3><br>
     		<div id="guest_list"></div>
		</form>


</div>

<div class= "col-sm-11 col-md-8 col-lg-6"> 
		<div style="margin-left: 1px">

     		   <h3 style="font-family: georgia;"">REQUESTED INVITES </h3> <br>


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
									echo "<th>";
										echo "GENDER";
									echo "</th>";
									echo "<th>";
										echo "STATUS";
									echo "</th>";
								echo "</tr>";
								$con= mysqli_connect('localhost','root', '','guestinfo') or
								die ("not connected");

								$sql = "SELECT * FROM newguest ORDER BY id DESC ";

								$record = mysqli_query($con,$sql);

								while ($row= mysqli_fetch_assoc($record))
								 {
									echo '<tr>
											<td class="newguestid"> '.$row['id']. '</td>
											<td> '.$row['guestname']. '</td>
											<td> '.$row['email']. '</td>
											<td> '.$row['gender']. '</td>
											<td> '.$row['status']. '</td>
											<td> <button type=button  class="edit btn btn-success"> Approve </button></td>';
											
											echo "<td><button id=".$row['id']." type='button' class='deletrequestingguest btn btn-danger' >Reject</button> </td>";
										echo	'</tr>';
									}
							echo"</table>"; 
				 ?> 
				</div>	
				</div>
			</form>
				
			
		</div>
	</div>
  <br><hr><br> 



<div class="container-fluid">


 <h3 style="font-family: georgia;"">DELETED REQUESTS AND GUEST </h3> <br>
<div class= "col-sm-11 col-md-8 col-lg-6"> 

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
									echo "<th>";
										echo "GENDER";
									echo "</th>";
									

								echo "</tr>";
								$con= mysqli_connect('localhost','root', '','guestinfo') or
								die ("not connected");

								$sql = "SELECT * FROM deletedrecords ORDER BY id DESC ";

								$record = mysqli_query($con,$sql);

								while ($row= mysqli_fetch_assoc($record))
								 {
									echo '<tr>
											<td class="newguestid"> '.$row['id']. '</td>
											<td> '.$row['name']. '</td>
											<td> '.$row['email']. '</td>
											<td> '.$row['gender']. '</td>';
											
										echo	'</tr>';
									}
							echo"</table>"; 
				 ?> 
				</div>
				</div>	
				</div>

			</form>




<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<form id="guestin">
       	<label for="guest-name" class="col-form-label"> GUEST's NAME</label>
			 <div class="col-12">
				 <input class="form-control" type="text" name="mguestname" id="mguestname" > 
				 </div><br>	  
				  <label for="email" class=" col-form-label"> Email</label>
		     <div class="col-12">
				 <input class="guest-email form-control" type="email"  name="memail" id="memail" >
        	</div><br>
        	<label class="radio-inline">
		      <input type="radio"  value="male"  name="mgender" required> male </label>
			<label class="radio-inline">
		      	<input type="radio"  value="female" name="mgender" required> female </label>
		     <div class="col-12">
		    <input class="guest-status form-control" type="text"  name="mstatus" id="mstatus">
            </form>	
            	</div>	
            	<div>
				 				<br>
				 				<p id="updateinfopara" style="color: Red"></p>
				 				</div> 		                			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateinfo">UPDATE</button>
      </div>
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
					   				 <label for="guest-name" class="col-form-label"> GUEST's NAME</label>
									 <div class="col-12">
					   				 <input class="theme-name form-control" type="text" placeholder="guest's name" name="guestname" id="guestname" required> 
					   				 </div><br>	  
					   				  <label for="example-email-input" class=" col-form-label"> Email</label>
								     <div class="col-12">
					   				 <input class="guest-email form-control" type="email" placeholder="guest email" name="gemail" id="gemail" required>
				                	</div><br>
				                	<label class="radio-inline">
								      <input type="radio"  value="male"  name="gender" required> male </label>
									<label class="radio-inline">
								      	<input type="radio"  value="female" name="gender" required> female </label>
								      <div><br>
								      <p id="addguestpara" style="color: red;"></p>
								      </div>


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

		<br>		


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>

</html>