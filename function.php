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

function updatingguest()
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
				
		return ($a.",".$b.",".$c);

}
			 
?>