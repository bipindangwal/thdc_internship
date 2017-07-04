<?php
	

function event(){
  		$con1=mysqli_connect('localhost','root','','event');
			 if (!$con1) //connection esblished/not established
				 {
				 return "not connected to server";
				}
			if(!mysqli_select_db($con1,'event'))	//error when dbnot selected
				{
				 return "not connected to db";
				}
    				$theme=@$_POST['event_theme'];   //call by id
				    $date=@$_POST['event_date'];
				    $venue=@$_POST['event_venue'];
			$sql1 = "INSERT INTO eventinfo (theme_name,date,venue) VALUES ('$theme','$date','$venue')";

			   if(!mysqli_query($con1,$sql1))
					{
						return " data not inserted".mysqli_error($con1);;
					} 
				else { 
					return "data is inserted in event";
					}
			}

   
function guest() {
    $con1=mysqli_connect('localhost','root','','guestinfo');
	

 	if(!mysqli_select_db($con1,'guestinfo'))	//error when dbnot selected
		{
				 return "not connected to db";
     	}

   $guestname=$_POST['guestname'];
	    $gemail=$_POST['gemail'];
	    $vv=$_POST['gender'];
	    
		$sql2= "INSERT INTO guestlist (guestname,email,gender,status,code) VALUES ('$guestname','$gemail','$vv','pending','')";

   		if(!mysqli_query($con1,$sql2))
			{
				return" data not inserted".mysqli_error($con1);
			} 
		else {
				return "data is inserted in guest";	
			}			
	}
	
function unknownguest()
 {
   $con1=mysqli_connect('localhost','root','','guestinfo');
	

 	if(!mysqli_select_db($con1,'guestinfo'))	//index.guest modal
		{
				 return "not connected to db";
     	}

   $guestname=$_POST['guestname'];
	    $gemail=$_POST['nemail'];
	    $ss=$_POST['ngender'];
	    
		$sql2= "INSERT INTO  newguest (guestname,email,gender,status) VALUES ('$guestname','$gemail','$ss','pending')";

   		if(!mysqli_query($con1,$sql2))
			{
				return " data not inserted".mysqli_error($con1);  //return is used to remove null
			} 
		else {
				return "data is inserted in guest";

			}	

	}

function rsvplink()
  {
	$con1=mysqli_connect('localhost','root','','guestinfo');
	

 	if(!mysqli_select_db($con1,'guestinfo'))	//index.guest modal
		{
				 return "not connected to db";
     	}
     	$x=$_POST["savedemail"];
	  $sql="SELECT email from guestlist WHERE email= '$x'";
		$data= mysqli_query($con1,$sql);
		$value= mysqli_fetch_assoc($data);
		 $a=$value['email'];


		 if($a=='')
			{
				return "YOU ARE NEW TO US KINDLY PRESS 'CLICK HERE' button"; //return is used to remove null
			} 
		else {
			    
			    $randomcode= rand();
			    $con1=mysqli_connect('localhost','root','','guestinfo');
	
			 	if(!mysqli_select_db($con1,'guestinfo'))	//index.guest modal
					{
							 return "not connected to db";
			     	}
				  $sql2="UPDATE guestlist SET randomcode='$randomcode' WHERE email= '$x'";
				  $data2= mysqli_query($con1,$sql2);
				  $out= base64_encode($randomcode);




				$output= ''; //to make blank variable
				$output .="<a href='secure.php?code=$out'>Click Here</a>"; 
				echo $output;
			}
	


}

function idupdates(){

      $codeid=$_POST['idupdates'];

      $con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}

			  $sql="UPDATE guestlist SET status='CONFIRM' where randomcode= '$codeid'";
			  	if(!$data2= mysqli_query($con1,$sql))
			  	{
			  		return 'error , either your presence is confirmed or your url is wrong';
			  	}
			  	else
			  	{
			  		return 'you status is confirmed please close the window';
			  	}


}



 if (isset ($_POST['newguestid']))
    {

			$newguestid= $_POST['newguestid'];
			$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}


			$sqla=" SELECT * FROM newguest where id='$newguestid' ";
			$data2= mysqli_query($con1,$sqla);
			$row = mysqli_fetch_assoc($data2);  //fetch
				    $a= $row['guestname'];
				    $b = $row['email'];
				    $d=$row['gender'];
			 $sqlb="INSERT INTO guestlist (guestname,email,status,gender) VALUES ('$a','$b','CONFIRM','$d')";
			

				if(!mysqli_query($con1,$sqlb))
					{ echo"error";
					}
				else
				{		
			$sqld= "DELETE FROM newguest WHERE id='$newguestid'"; 

						 if(!mysqli_query($con1,$sqld))
						 {
							echo "data is not inserted in guest";
						}

						else{ 
							echo "data is inserted and deleted in guest";
						}	
           
						}
}

function updating_guest()
{
	$guestid=$_POST['id'];
	$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}
             $sqla=" SELECT guestname,email,gender,status FROM guestlist where id='$guestid' ";
             $data2= mysqli_query($con1,$sqla);
			$row = mysqli_fetch_assoc($data2);  //fetch
				
				    $a= $row['guestname'];
				    $b = $row['email'];
				    $c= $row['status'];
				    $d=$row['gender'];
				
		echo $a.",".$b.",".$c;

}

function updating()

		{
			$con1=mysqli_connect('localhost','root','','guestinfo');
			 if (!$con1) //connection esblished/not established
				 {
				 return "not connected to server";
				}
			if(!mysqli_select_db($con1,'guestinfo'))	//error when dbnot selected
				{
				 return "not connected to db";
				}
   		$guestname=$_POST['mguestname'];
	    $gemail=$_POST['memail'];
	    $sex=$_POST['mgender'];
	    $status=$_POST['mstatus'];
	    
		$sql2= "UPDATE guestlist SET guestname='$guestname',gender='$sex',status='$status'
						WHERE email='$gemail' ";

   		if(!mysqli_query($con1,$sql2))
			{
				return" data is not updateded".mysqli_error($con1);
			} 
		else {
				return "data is updated";	
			}			
	    

}	
function eventupdate()
	{
		$eventid=$_POST['id'];
		$con1=mysqli_connect('localhost','root','','event');
				if(!mysqli_select_db($con1,'event'))	
					{
							 return "not connected to db";
			     	}
             $sqla=" SELECT * FROM eventinfo where id='$eventid' ";
             $data2= mysqli_query($con1,$sqla);
			$row = mysqli_fetch_assoc($data2);  //fetch
				
				    $a= $row['theme_name'];
				    $b = $row['date'];
				    $c= $row['venue'];
				   	$d= $row['id'];
				
		echo $a.",".$b.",".$c.",".$d;

	}

function event_delete()
	{
		$eventid=$_POST['event_id'];
		$con1=mysqli_connect('localhost','root','','event');
		if(!mysqli_select_db($con1,'event'))	
					{
							 return "not connected to db";
			     	}
			 $query= "DELETE FROM eventinfo WHERE id= '$eventid' ";

			if(!mysqli_query($con1,$query))
			{
				echo "query is not executed";
			}
			else{

				echo "event is deleted";
			}			
	}

	
function guest_delete()
	{
		$guestid=$_POST['guest_id'];
			$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}


			$sqla=" SELECT * FROM guestlist where id='$guestid' ";
			$data2= mysqli_query($con1,$sqla);
			$row = mysqli_fetch_assoc($data2);  //fetch
				    $a= $row['guestname'];
				    $b = $row['email'];
				    $c=$row['gender'];
			 $sqlb="INSERT INTO deletedrecords(name,email,gender) VALUES ('$a','$b','$c')";
			 
				if(!mysqli_query($con1,$sqlb))
					{ echo $con1->error; //checking error
					}
				else
				{		
			$sqld= "DELETE FROM guestlist WHERE id='$guestid'"; 

						 if(!mysqli_query($con1,$sqld))
						 {
							echo "data is not deletedt";
						}

						else{ 
							echo "data is moved to bin";
						}	
           
						}
	}	 
function deleterequestingguest()
	{
		$guestid=$_POST["guest_id"];
			$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}


			$sqla=" SELECT * FROM newguest where id='$guestid' ";
			
			$data4= mysqli_query($con1,$sqla);
			$row = mysqli_fetch_assoc($data4);  //fetch
				    $a= $row['guestname'];
				    $b = $row['email'];
				    $c=$row['gender'];
			 $sqlb="INSERT INTO deletedrecords(name,email,gender) VALUES ('$a','$b','$c')";
			 
				if(!mysqli_query($con1,$sqlb))
					{ echo $con1->error; //checking error
					}
				else
				{		
					$sqld= "DELETE FROM newguest WHERE id='$guestid'"; 

						 if(!mysqli_query($con1,$sqld))
						 {
							echo "data is not deleted";
						}

						else{ 
							echo "data is moved to bin from newguest table";
						}	
           
				}
	}

function fetch_guest_db(){
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
										echo "gender";
									echo "</th>";
									echo "<th>";
										echo "status";
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
								        echo "<td>".$data['guestname']."</td>";
								        echo "<td>".$data['email']."</td>";
								        echo "<td>".$data['gender']."</td>"; 
								        echo "<td>".$data['status']."</td>";

								        echo "<td><button id=".$data['id']." type='button' data-toggle='modal' data-target='#editmodal' class='guestupdate btn btn-primary' >Edit</button> </td>";
								        echo "<td><button id=".$data['id']." type='button' class='deleteguest btn btn-danger' >Delete</button> </td>";

								         echo "</tr>";




									}

							echo"</table>";
							}
?>



