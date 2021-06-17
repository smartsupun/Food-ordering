$(document).ready(function(){
    $('#login-eye-slash').click(function(){

        
            $('#login-password').attr('type','text');
            $('#login-eye').css("display","block");
            $('#login-eye-slash').css("display","none");

        
            // $('#login-password').attr('type', 'password');
        
    });
    $('#login-eye').click(function(){
        $('#login-password').attr('type','password');
        $('#login-eye').css("display","none");
        $('#login-eye-slash').css("display","block");

    });

    $('#btn_btn').click(()=>{
        alert('Hey');
    })

});