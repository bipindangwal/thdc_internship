$(document).ready(function()
{ 


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

$(".guestupdate").click(function(){
var recievedid=$(this).attr("id");
var action= "updateguest";
$.ajax({
        type: "POST",
         url: "ajax.php",
         data: {action:action,id:recievedid},
         success: function(value){
            var data=value.split(",");//split where there is ,
            $('#mguestname').val(data[0]) ;
             $('#memail').val(data[1]) ;
              $('#mstatus').val(data[2]) ;
              document.getelementByName('mgender').val(data[3]);
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
                    alert(result);
                    document.getElementById('guestname').value = '';        //#not n use
                    document.getElementById('gemail').value = '';
                    
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
                    alert(result);
                    document.getElementById('guestname').value = '';        
                    document.getElementById('nemail').value = '';
                    
                }
            });
        
    return false;
});


})
