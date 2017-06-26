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
	    
		$sql2= "INSERT INTO guestlist (guestname,email,gender) VALUES ('$guestname','$gemail','$vv')";

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
	    
		$sql2= "INSERT INTO  newguest (guestname,email,gender,response) VALUES ('$guestname','$gemail','$ss','pending')";

   		if(!mysqli_query($con1,$sql2))
			{
				return " data not inserted".mysqli_error($con1);  //return is used to remove null
			} 
		else {
				return "data is inserted in guest";

			}			
	}


?>