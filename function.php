<?php
	// $con1=mysqli_connect('localhost','root','','event');
	//  if (!$con1) //connection esblished/not established
	// 	 {
	// 	 echo "not connected to server";
	// 	}
	// if(!mysqli_select_db($con1,'event'))	//error when dbnot selected
	// 	{
	// 			 echo "not connected to db";
 //     	}


  // if (isset($_POST['button1'])) 
  // { 






function event(){
  		$con1=mysqli_connect('localhost','root','','event');
			 if (!$con1) //connection esblished/not established
				 {
				 echo "not connected to server";
				}
			if(!mysqli_select_db($con1,'event'))	//error when dbnot selected
				{
				 echo "not connected to db";
				}
    				$theme=@$_POST['event_theme'];   //call by id
				    $date=@$_POST['event_date'];
				    $venue=@$_POST['event_venue'];
			$sql1 = "INSERT INTO eventinfo (theme_name,date,venue) VALUES ('$theme','$date','$venue')";

			   if(!mysqli_query($con1,$sql1))
					{
						echo " data not inserted";
					} 
				else { 
					echo "data is inserted in event";
					}
			}
	// }

//  else if (isset($_POST['button2'])) 
//  { 
   
   function guest(){
$con1=mysqli_connect('localhost','root','','guestinfo');
	

 	if(!mysqli_select_db($con1,'guestinfo'))	//error when dbnot selected
		{
				 echo "not connected to db";
     	}

   $guestname=$_POST['guestname'];
	    $gemail=$_POST['gemail'];
	    $vv=$_POST['gender'];
	    
		$sql2= "INSERT INTO guestlist (guestname,email,gender) VALUES ('$guestname','$gemail','$vv')";

   		if(!mysqli_query($con1,$sql2))
			{
				echo " data not inserted".mysqli_error($con1);
			} 
		else {
				echo "data is inserted in guest";
			}			
	}
	  function unknownguest(){
$con1=mysqli_connect('localhost','root','','guestinfo');
	

 	if(!mysqli_select_db($con1,'guestinfo'))	//index.guest modal
		{
				 echo "not connected to db";
     	}

   $guestname=$_POST['guestname'];
	    $gemail=$_POST['nemail'];
	    $ss=$_POST['ngender'];
	    
		$sql2= "INSERT INTO  newguest (guestname,email,gender,response) VALUES ('$guestname','$gemail','$ss','pending')";

   		if(!mysqli_query($con1,$sql2))
			{
				echo " data not inserted".mysqli_error($con1);
			} 
		else {
				echo "data is inserted in guest";
			}			
	}
//  }

// else if (isset($_POST['rsvpbttn'])) 
// {
// $con1= mysqli_connect('localhost','root','','guestinfo') or die("error in connection");

// $gmail= $_POST["gemail"];
// $rbttn= $_POST["optradio"];
   
//    $sql2= "SELECT email FROM guestlist WHERE email='$gmail'";
//    $result=mysqli_query($con1,$sql2);
//    $count=mysqli_num_rows($result);

//    if($count>0)
//        {
// 			 if(!mysqli_query($con1,$sql2))
// 				{
// 					echo " data not inserted".mysqli_error($con1);
// 				} 
// 			else {
// 				$sql6= "UPDATE guestlist SET response='confirm'
// 					where email='$gmail'";  
// 					echo "thankyou";
// 			    }
// 	}else{echo"you are not registered";}
// }

// else if (isset($_POST['guestbttn']))
//  {		
// $con= mysqli_connect('localhost','root', '','guestinfo') or
// 		die ("not connected");
// 	echo "<table>";
// 		echo "<tr>";
// 			echo "<th>";
// 				echo "ID";
// 			echo "</th>";
// 			echo "<th>";
// 				echo "GUEST NAME";
// 			echo "</th>";
// 			echo "<th>";
// 				echo "EMAIL ID";
// 			echo "</th>";
// 		echo "</tr>";
// 		$con= mysqli_connect('localhost','root', '','guestinfo') or
// 		die ("not connected");

// 		$sql = "SELECT * FROM guestlist ORDER BY id DESC ";

// 		$record = mysqli_query($con,$sql);

// 		while ($data= mysqli_fetch_assoc($record))
// 		 {
// 			echo "<tr>";
// 			echo "<td>".$data['id']."</td>";
// 			echo "<td>".$data['guestname']."</td>";  //same as mentioned in db
// 			echo "<td>".$data['email']."</td>";
// 			echo "</tr>";
// 			}

// 	echo"</table>";
// }


// else if (isset($_POST['eventbttn']))
//  {	

//  $con1=mysqli_connect('localhost','root','','event');
// 	 if (!$con1) //connection esblished/not established
// 		 {
// 		 echo "not connected to server";
// 		}
// 	if(!mysqli_select_db($con1,'event'))	//error when dbnot selected
// 		{
// 				 echo "not connected to db";
//      	}

// 	echo "<table>";
// 		echo "<tr>";
// 			echo "<th>";
// 				echo "ID";
// 			echo "</th>";
// 			echo "<th>";
// 				echo "theme";
// 			echo "</th>";
// 			echo "<th>";
// 				echo "date";
// 			echo "</th>";
// 			echo "<th>";
// 				echo "venue";
// 			echo "</th>";
// 		echo "</tr>";
		
// 		$sql = "SELECT * FROM eventinfo ORDER BY date DESC ";

// 		$record = mysqli_query($con1,$sql);

// 		while ($data= mysqli_fetch_assoc($record))
// 		 {
// 			echo "<tr>";
// 			echo "<td>".$data['id']."</td>";
// 			echo "<td>".$data['theme_name']."</td>";  //same as mentioned in db
// 			echo "<td>".$data['date']."</td>";
// 			echo "<td>".$data['venue']."</td>";
// 			echo "</tr>";
// 			}

// 	echo"</table>";
// }

?>