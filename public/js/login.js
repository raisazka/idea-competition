$(document).ready(function(){
    $('#btn-login').click(function(){
        validate_line($('#username'));
        validate_password($('#password'));
    });
    var line_v = new RegExp(/^[a-zA-Z0-9]*[a-zA-Z0-9|\.|\_|\-|\@]{3,}$/);
    function validate_line(a){
        $(a).parent().find('.line_wrong').empty();
        if(!line_v.test(a.val())){
            $(a).parent().find('.line_wrong').append("must be alphanumeric or . - _").css({'font-size':'.8em','margin-left':'1em'});
        }
    }
    function validate_password(a){
        $(a).parent().find('.pass_wrong').empty();
        if($('#password').val().length < 8){
            $(a).parent().find('.pass_wrong').append("must be at 0least 8").css({'font-size':'.8em','margin-left':'1em'});   
        }    
    }

});