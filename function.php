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

   
   function guest(){
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
	
 function unknownguest(){
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


 if (isset ($_POST['newguestid']))
 {

			$newguestid= $_POST['newguestid'];
			$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}

			  $sql="UPDATE newguest SET status='confirm' WHERE id='$newguestid'";
			   		$data= mysqli_query($con1,$sql);

			$sqla=" SELECT guestname,email,gender,status FROM newguest where status='confirm' ";
			$data2= mysqli_query($con1,$sqla);
			while ($row = mysqli_fetch_assoc($data2))  //fetch
				{
				    $a= $row['guestname'];
				    $b = $row['email'];
				    $c= $row['status'];
				    $d=$row['gender'];
				}
			 $sqlb="INSERT INTO guestlist (guestname,email,status,gender,code) VALUES ('$a','$b','$c','$d','') ";
			$data3= mysqli_query($con1,$sqlb);

			$sqld= "DELETE FROM newguest WHERE status='confirm'"; 

						 if(!mysqli_query($con1,$sqld))
						 {
							echo "data is not inserted in guest";
						}

						else{ 
							echo "data is inserted and deleted in guest";
						}	
           

}
if (isset ($_POST['add']))
 {
 	    $guestemail= $_POST['add'];
 	   


			$con1=mysqli_connect('localhost','root','','guestinfo');
				if(!mysqli_select_db($con1,'guestinfo'))	
					{
							 return "not connected to db";
			     	}

			  $sql="SELECT email from guestlist WHERE email='$guestemail'";
			   		$data= mysqli_query($con1,$sql);
			   	
			   		$row = mysqli_fetch_assoc($data);
			   		$x=$row["email"];



			  $sql2= "SELECT guestname From guestlist WHERE email='$guestemail' ";
			  $data2= mysqli_query($con1,$sql2);
			
			   		$row2 = mysqli_fetch_assoc($data2);
			   		$y=$row2["guestname"];

			   if($x=="")
			   {
			   	 echo "YOU ARE NEW TO US KINDLY PRESS 'CLICK HERE' button";
			   }

			   else if ($x==$guestemail)
			   {

			   	$token= hash('sha512',$x.$y);
			  				
			   	$sql3= "UPDATE guestlist SET code='$token' WHERE email='$guestemail' ";
			   	$data3= mysqli_query($con1,$sql3);

			   	$sql4="SELECT code from guestlist where code='$token'";
			   	$data4= mysqli_query($con1,$sql4);
			   	$row3 = mysqli_fetch_assoc($data4);
			   	$code= $row3["code"];
				die(http://localhost/rsvpproject/);



			   	}
}
			 
?>