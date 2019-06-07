$(document).ready(function(){
    
var email_error ='email must be gmail and include @ and .';
var email_v = new RegExp(/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/);
var phone_v = new RegExp(/^[0-9]{10,12}$/);
var line_v = new RegExp(/^[a-zA-Z0-9]*[a-zA-Z0-9|\.|\_|\-|\@]{3,}$/);
var name_v = new RegExp(/^[A-z]*((\s)*[A-z]){3,}$/);

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
    $('#btn-add-member').click(function(){
        var dob = validate_dob($('#dob_add'));
        var email = validate_email($('#email_add'));
        var file = validate_file_ktp($('#ktp_add'));
        var line = validate_line($('#Line_add'));
        var name = validate_name($('#name_add'));
        var phone = validate_phone($('#Whatsapp_add'));
        if (dob===true && email===true && file === true && line === true && name === true && phone === true){
            $(this).prop('type','submit');
        }
        else{
            $(this).prop('type','button');
        }
    });
    $('#btn-proposal').click(function(){
        var propo;
        propo = validate_file($('#proposal'));
        if(propo === true){
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
            $(a).parent().find('.phone_wrong').append("min 10 max 12 numeric and no symbol").css('font-size','.8em');
            return false;
        }
        return true;
    }
    function validate_file(a){
        $(a).parent().find('.cv_wrong').empty();
        var ext = a.val().split('.').pop().toLowerCase();
        if(a.val()===""){
            var temp;
            var idf = a.attr('id');
            if(idf === "cv"){
                temp = '#cv_old';
            }
            else if(idf === "cv1"){
                temp = '#cv1_old';
            }
            else if(idf === "cv2"){
                temp = '#cv2_old';
            }
            else{
                $(a).parent().find('.cv_wrong').append("something is wrong").css('font-size','.8em');
                return false;
            }
            if($(temp).val()===""){
                $(a).parent().find('.cv_wrong').append("please upload your cv").css('font-size','.8em');
                return false;
            }
            else{
                return true;
            }
        }
        else{
            if($.inArray(ext, ['png','jpg','jpeg','pdf']) == -1) {
                return true;
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
    function validate_file_ktp(a){
        $(a).parent().find('.ktp_wrong').empty();
        var ext = a.val().split('.').pop().toLowerCase();
        if(a.val()===""){
            $(a).parent().find('.ktp_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
            return false;
        }
        else{
            if($.inArray(ext, ['png','jpg','jpeg','pdf']) == -1) {
                $(a).parent().find('.ktp_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
                return false;
            }
            else{
                if(a[0].files[0].size>2197152){
                    $(a).parent().find('.ktp_wrong').append("File size must be below 2MB").css('font-size','.8em');
                    return false;
                }
                return true;
            }
        }
        
    }
    function validate_email(a){
        $(a).parent().find('.email_wrong').empty();
        if(!email_v.test(a.val())){
            $(a).parent().find('.email_wrong').append(email_error).css('font-size','.8em');
            return false;
        }
        return true;
    }
    function validate_name(a){
        $(a).parent().find('.name_wrong').empty();
        if(!name_v.test(a.val())){
            $(a).parent().find('.name_wrong').append("must not contain symbols").css('font-size','.8em');
            return false;
        }
        return true;
    }
    function validate_dob(a){
        var year = new Date(a.val()).getFullYear();
        var month = new Date(a.val()).getMonth();
        var day = new Date(a.val()).getDay();
        $(a).parent().find('.dob_wrong').empty();
        if(isNaN(year)||isNaN(month)||isNaN(day)){
            $(a).parent().find('.dob_wrong').append("please fill the blank").css('font-size','.8em');
            return false;
        }
        else{
            if(year < 1994 || year > 2005 ){
                $(a).parent().find('.dob_wrong').append("must be around 15-24 years old").css('font-size','.8em');
                return false;
            }
            return true;
        }
    }

});