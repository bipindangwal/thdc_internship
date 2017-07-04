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

  case 'rsvp':
        rsvplink($_POST["savedemail"]) ;
        break;


case 'idrupdate':

          print json_encode(idupdates($_POST["idupdates"])) ;
          break;

case 'updateguest':
         updating_guest($_POST["id"]) ;
          break;


  case 'updatingguest':
            print json_encode(updating($_POST["mguestname"],$_POST["memail"],$_POST["mgender"],$_POST["mstatus"])) ;
          break;
  case 'updateevent':
          eventupdate($_POST["id"]);
          break;
  case 'savingeventupdate':
          print json_encode(eventupdatesave($_POST["eventid"],$_POST["eventtheme"],$_POST["eventdate"],$_POST["eventvenue"]));
          break;
   case 'eventdelete':
        event_delete($_POST["event_id"]);
        break;  
  case'guestdelete' :
        guest_delete($_POST["guest_id"]);
        break;  
  case 'reqestingguestdelete' :

        deleterequestingguest($_POST["guest_id"]);
        break;
  case 'guest_list':
        fetch_guest_db();
        break;
  case 'fetch_event':
        fetch_event_db();
        break;
  case 'fetch_request_guest':
        fetch_request_guest_db();
        break;                

 default:  echo"invalid entry";
 	break;

}


 }
?>