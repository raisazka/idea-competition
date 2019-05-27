$(document).ready(function(){
    $('#btn-login').click(function(){
        var line = validate_line($('#username'));
        var pass = validate_password($('#password'));
        if(line === true && pass === true){
            $('#btn-login').prop('type','submit');
            
        }
        else{
            $('#btn-login').prop('type','button');
            
        }
    });
    var line_v = new RegExp(/^[a-zA-Z0-9]*[a-zA-Z0-9|\.|\_|\-|\@]{3,}$/);
    function validate_line(a){
        $(a).parent().find('.line_wrong').empty();
        if(!line_v.test(a.val())){
            $(a).parent().find('.line_wrong').append("must be alphanumeric or . - _").css({'font-size':'.8em','margin-left':'1em'});
        return false;
        }
        return true;
    }
    function validate_password(a){
        $(a).parent().find('.pass_wrong').empty();
        if($('#password').val().length < 8){
            $(a).parent().find('.pass_wrong').append("must be at 0least 8").css({'font-size':'.8em','margin-left':'1em'});   
            return false;
        }
        return true;    
    }

});