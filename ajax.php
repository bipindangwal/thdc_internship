<?php
     require_once "function.php";
 if (isset ($_POST['action']))
{
   
  switch($_POST['action'])
  {

  case 'event':

  			print json_encode(event($_POST["theme"],$_POST["date"],$_POST["venue"])) ;
  			break;

  case 'guest':

  			print json_encode(guest($_POST["guestname"],$_POST["gemail"])) ;
  			break;


 default:  echo"invalid entery";
 	break;

}


 }
?>