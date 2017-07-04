$(document).ready(function()
{ 
fetch_guest();

    $(".edit").click(function(){
     console.log("inside edit2 event click ");
     var row = $(this).closest("tr");    // Find the row
    var text = row.find(".newguestid").text(); // Find the text      

    $.ajax({
        type: "POST",
         url: "function.php",
         data: {newguestid:text},
         success: function(result){
            alert(result);
         }


    });

return
    });

$(".guestupdate").click(function(){    // retriving data into modal for editing
var recievedid=$(this).attr("id");
var action= "updateguest";
$.ajax({
        type: "POST",
         url: "ajax.php",
         data: {action:action,id:recievedid},
         success: function(value){
            var data=value.split(",");//split where there is ,
            console.log(value);
            console.log(data[0]);
            document.getElementById("mguestname").vaue=data[0];
             document.getElementById("memail").vaue=data[1];
              document.getElementById("mstatus").vaue=data[2];


            $('#mguestname').val(data[0]) ;
             $('#memail').val(data[1]) ;
              $('#mstatus').val(data[2]) ;
                    }


    });

});


$(".updateresponse").click(function(){   ///button call secure.php
    var idupdate=$(this).attr("id");
    var action="idrupdate";
    console.log(idupdate);
    $.ajax({
        type: "POST",
         url: "ajax.php",
         data: {action:action,idupdates:idupdate},
         success: function(result){
            alert(result);
         }


    });
   
});


  
$("#getlinkrsvp").click(function(){
    var emailadd= $("#getlink");
    var action= "rsvp";
     if(!emailadd[0].checkValidity())
        {
            emailadd[0].reportValidity();
            return;
        }
            var savedemail= $('#savedemail').val();
               $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {action:action,savedemail:savedemail},
                success: function(result){

                    document.getElementById("linkmsg").innerHTML=result;
                }
            });

});




    $("#saveevent").click(function(){    
        console.log("inside save event click ");                                                                        //button call through id
      var eventform= $("#event_details");
        var datastringe = 'action=event&'+ $('#event_details').serialize();                                                   // data in the form of array
        
        if(!eventform[0].checkValidity())
        {
            eventform[0].reportValidity();
            return;
        }
   console.log(datastringe);
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: datastringe,
                success: function(result){
                    alert(result);
                    document.getElementById('event_theme').value = '';
                    document.getElementById('event_date').value = '';
                    document.getElementById('event_venue').value = '';
                    
                }
            });
        
    return false;
});


    $("#addnewguest").click(function(){    
        console.log("inside click addnew guest");                            
        var formdata= $('#guest_details');
        if(!formdata[0].checkValidity()){
            formdata[0].reportValidity();
            return;
        }
        
        var datastringg = 'action=guest&'+ $('#guest_details').serialize();                                                   // data in the form of array
        console.log(datastringg);
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: datastringg,
                success: function(result){
                    $("#addguestpara").html(result);
                    document.getElementById('guestname').value = '';        //#not n use
                    document.getElementById('gemail').value = '';
                    fetch_guest();
                }
            });
    return false;
});



 $("#unknownguest").click(function(){    //button call through id 
        console.log("inside unknown guest click ");  
        var formdatau=$('#guest_details')    //urepresents unknown                                                                  
        var datastringu = 'action=newguest&'+ $('#guest_details').serialize();                                                   // data in the form of array
        console.log(datastringu);

        if(!formdatau[0].checkValidity())
            { formdatau[0].reportValidity();
                return;
            }

            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: datastringu,
                success: function(result){
                    $("#requestpara").html(result);

                    document.getElementById('guestname').value = '';        
                    document.getElementById('nemail').value = '';
                    
                }
            });
        
    return false;
});


 $("#updateinfo").click(function(){    //button call through id "modalupdate button "
        console.log("inside guest update buttton click ");  
        var form=$("#guestin");      
        console.log(form);                                                               
        var datastring = 'action=updatingguest&'+$('#guestin').serialize();                                                   // data in the form of array
        console.log(datastring);

            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: datastring,
                success: function(result){
                    $("#updateinfopara").html(result);                }
            });
        
    return false;
});

$(".eventupdate").click(function(){   ///button call secure.php
    var eventid=$(this).attr("id");
    console.log(eventid);
    var action= "updateevent";
$.ajax({
        type: "POST",
         url: "ajax.php",
         data: {action:action,id:eventid},
         success: function(value){
            var data=value.split(",");//split where there is ,
            console.log(value);

            $('#eventtheme').val(data[0]) ;
      console.log(data[1]);
             $('#eventdate').val(data[1]) ;
              $('#eventvenue').val(data[2]) ;
              $('#eventid').val(data[3]);
                    }
    });
    });

$("#updateevent").click(function(){
 var form=$("#eventdetails");
 var datastring = 'action=savingeventupdate&'+$('#eventdetails').serialize();
 console.log(datastring);
  $.ajax({
        type: "POST",
        url: "ajax.php",
        data: datastring,
        success: function(result){
            alert(result);
        }

  });
});

$(".deleteevent").click(function(){
 var event_id=$(this).attr("id");
 var action="eventdelete";
 $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {action:action,event_id:event_id},
        success: function(result){
            alert(result);
        }

});
});

$(".deleteguest").click(function(){
 var guest_id=$(this).attr("id");
 var action="guestdelete";
 $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {action:action,guest_id:guest_id},
        success: function(result){
            alert(result);
        }

});
});
$(".deletrequestingguest").click(function(){
     var guest_id=$(this).attr("id");
     var action="reqestingguestdelete";
     $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {action:action,guest_id:guest_id},
        success: function(result){
            alert(result);
        }

    });

    });

function fetch_guest(){
    var action="guest_list";
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {action:action},
        success:function(value){
            $("#guest_list").html(value);
        }
    });
}
// function fetch_event(){
//     var action="fetch_event";
//     $.ajax({
//         type: "POST",
//         url: "ajax.php",
//         data: {action:action},
//         success:function(value){
//             $.("#").html(value);
//         }
//     })
// }
// function fetch_request_guest(){
//     var action="fetch_request_guest";
//     $.ajax({
//         type: "POST",
//         url: "ajax.php",
//         data: {action:action},
//         success:function(value){
//             $.("#").html(value);
//         }
//     })
// }

})
