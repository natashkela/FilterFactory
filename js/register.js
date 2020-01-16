$(document).ready(function(){
    $('.register-now').on('click', function(){
        var serialized = 'request_name=register_user&'+$('#signup-submit').serialize();
        $.ajax({
            url : 'ajax/ajax_register.php',
            type : 'POST',
            data : serialized,
            dataType:'json',
            success : function(data) {
                //Success Response
                console.log(data);
            },
            error : function(request,error)
            {
                //Errors
            }
        });
    });
});