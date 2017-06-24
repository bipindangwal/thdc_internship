$(document).ready(function()
{
    // $('#gemail').focusin(function(){
    //     if ($('#gemail').val() === '')
    //      {  $('#email_feedback').text('hi enter EMAIL ADDRESS');
    //      } 
    //      else{
    //     validate_email($('#gemail').val());
    //         }
    // }).blur(function(){
    //     $('#email_feedback').text('');
    //  }).keyup (function() { 
    //     validate_email($('#gemail').val());
    // });

    //      function validate_email(email){
    //     $.post('ajax.php', {email: email},function(data){
    //         $('#email_feedback').text(data);

    //     });

    $("#saveevent").click(function(){    
        console.log("inside click ");                                                                        //button call through id
        var theme = document.getElementById('event_theme').value;                                          // input area id
        var date = document.getElementById('event_date').value;
        var venue = document.getElementById('event_venue').value;
        var datastringe = 'action=event&'+ $('#event_details').serialize();                                                   // data in the form of array
        console.log(datastringe);
        if(theme==''|| date==''||venue==''){
            alert("Please Fill All Fields");
        }
        else{
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: datastringe,
                success: function(result){
                    alert("result");
                    document.getElementById('event_theme').value = '';
                    document.getElementById('event_date').value = '';
                    document.getElementById('event_venue').value = '';
                    
                }
            });
        }
    return false;
});

})