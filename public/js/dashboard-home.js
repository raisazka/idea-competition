$(document).ready(function(){
    var phone_v = new RegExp(/^[0-9]{10,14}$/);
    var line_v = new RegExp(/^[a-zA-Z0-9]*[a-zA-Z0-9|\.|\_|\-|\@]{3,}$/);
    $('#btn-up').click(function(){
        var line, phone, cv;
        line = validate_line($('#Line'));
        phone = validate_phone($('#Whatsapp'));
        cv = validate_file($('#cv'));
        if(line === true && phone === true && cv === true){
            $(this).prop('type','submit');
        }
        else{
            $(this).prop('type','button');
        }
    });
    $('#btn-up-1').click(function(){
        var line, phone, cv;
        line = validate_line($('#Line1'));
        phone = validate_phone($('#Whatsapp1'));
        cv = validate_file($('#cv1'));
        if(line === true && phone === true && cv === true){
            $(this).prop('type','submit');
        }
        else{
            $(this).prop('type','button');
        }
    });
    $('#btn-up-2').click(function(){
        var line, phone, cv;
        line = validate_line($('#Line2'));
        phone = validate_phone($('#Whatsapp2'));
        cv = validate_file($('#cv2'));
        if(line === true && phone === true && cv === true){
            $(this).prop('type','submit');
        }
        else{
            $(this).prop('type','button');
        }
    });
    $('#btn-proposal').click(function(){
        var propo
        propo = validate_file($('#proposal'));
        if(line === true && phone === true && cv === true){
            $(this).prop('type','submit');
        }
        else{
            $(this).prop('type','button');
        }
    });
    function validate_line(a){
        $(a).parent().find('.line_wrong').empty();
        if(!line_v.test(a.val())){
            $(a).parent().find('.line_wrong').append("must be alphanumeric or . - _").css('font-size','.8em');
            return false;
        }
        return true;   
    }
    function validate_phone(a){
        $(a).parent().find('.phone_wrong').empty();
        if(!phone_v.test(a.val())){
            $(a).parent().find('.phone_wrong').append("min 10 character and no symbol").css('font-size','.8em');
            return false;
        }
        return true;
    }
    function validate_file(a){
        $(a).parent().find('.cv_wrong').empty();
        var ext = a.val().split('.').pop().toLowerCase();
        if(a.val()===""){
            $(a).parent().find('.cv_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
            return false;
        }
        else{
            if($.inArray(ext, ['png','jpg','jpeg','pdf']) == -1) {
                $(a).parent().find('.cv_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
                return false;
            }
            else{
                if(a[0].files[0].size>2197152){
                    $(a).parent().find('.cv_wrong').append("File size must be below 2MB").css('font-size','.8em');
                    return false;
                }
                return true;
            }
        }
        
    }
});