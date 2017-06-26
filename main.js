$(document).ready(function()
{

    $("#saveevent").click(function(){    
        console.log("inside click ");                                                                        //button call through id
        var theme = document.getElementById('event_theme').value;                                          // input area id
        var date = document.getElementById('event_date').value;
        var venue = document.getElementById('event_venue').value;
        var datastringe = 'action=event&'+ $('#event_details').serialize();                                                   // data in the form of array
        console.log(datastringe);
        if(theme=='')
        {
            alert("Please Fill theme");
            return false;
        }
        else if (date=='')
        {
            alert('please fill date');
            return false;
        }
        else if(venue=='')
         {
            alert('please fill venue');
            return false;
         }
        else{
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
        }
    return false;
});


    $("#addnewguest").click(function(){    
        console.log("inside click ");                                                                        //button call through id
        var name = document.getElementById('guestname').value;                                          // #not worjking
        var email = document.getElementById('gemail').value;
        var gender =  document.getElementsByName('gender').value;
        var validEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var datastringg = 'action=guest&'+ $('#guest_details').serialize();                                                   // data in the form of array
        console.log(datastringg);

        if(name=='')
       {
            alert("Please fill name");
            return false;
            
        }
        else if(email=='')
        {
            alert("Please Fill email");
            return false;
            
        }
        else if (validEmail.test(email)==false)
        {
           alert ("please enter valid email address" );
           return false;
        }
         else if(gender==''){
            alert("Please select gender");
            return false;

        }
       
        else{
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
        }
    return false;
});


$("#guestacceptbtn").click(function(){
    console.log('xyz');
     
                                  
 });











 $("#unknownguest").click(function(){    //button call through id
        console.log("inside click ");                                                                        
        var name = document.getElementById('guestname').value;                                          
        var email = document.getElementById('nemail').value;
        var gender =  document.getElementsByName('ngender').value;
        var validEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var datastringu = 'action=newguest&'+ $('#guest_details').serialize();                                                   // data in the form of array
        console.log(datastringu);
        // if(name==''|| email==''||gender=='')
        // {
        //     alert("Please Fill All Fields");
        //     return false;
            
        // }
         if(name=='')
       {
            alert("Please fill name");
            return false;
            
        }
        else if(email=='')
        {
            alert("Please Fill email");
            return false;
            
        }
        else if (validEmail.test(email)==false)
        {
           alert ("please enter valid email address" );
           return false;
        }
         else if(gender==''){
            alert("Please select");
            return false;

        }

        else{
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
        }
    return false;
});

})