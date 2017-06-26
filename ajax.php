<?php
     require_once "function.php";
 if (isset ($_POST['action']))
{
   
  switch($_POST['action'])
  {

  case 'event':     

  			print json_encode(event($_POST["event_theme"],$_POST["event_date"],$_POST["event_venue"])) ; //id
  			break;

  case 'guest':

  			print json_encode(guest($_POST["guestname"],$_POST["gemail"],$_POST["gender"])) ;  //id
  			break;

  case 'newguest':

  			print json_encode(unknownguest($_POST["guestname"],$_POST["nemail"],$_POST["ngender"])) ;
  			break;


 default:  echo"invalid entery";
 	break;

}


 }
?>