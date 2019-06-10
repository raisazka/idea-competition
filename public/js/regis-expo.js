
var flag1 = 0,flag2 = 0;
var dis_1;
var dis_2;
var email_error ='email must be gmail or yahoo and include @ and .';

$(document).ready(function(){
    
    function showPage() {
        alert("ada");
        $('#loader').css({"display": "flex", "filter": "opacity(1)"});
    }
    var email_v = new RegExp(/^[a-z0-9](\.?[a-z0-9]){5,}@((?:(g(oogle)?mail)|yahoo)\.com)$/);
    var phone_v = new RegExp(/^[0-9]{10,12}$/);
    var name_v = new RegExp(/^[A-z]*((\s)*[A-z]){3,}$/);
    
    $('#btn-register').click(function(){
        var group;
        group = participant();
        if(group === true){
            showPage();
            $('.form_wrong').empty();
            $('#btn-register').prop('type','submit');
        }
        else{
            $('#btn-register').prop('type','button');
            $('.form_wrong').html("there is some error please check your input thoroughly").css('font-size','.8em');
        }
    });
    
    
    function participant(){
        var dob = validate_dob($('#dob'));
        var email = validate_email($('#email'));
        var name = validate_name($('#name'));
        var phone = validate_phone($('#Whatsapp'));
        if (dob===true && email===true && name === true && phone === true){
            return true;
        }
        return false;
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
    function validate_phone(a){
        $(a).parent().find('.phone_wrong').empty();
        if(!phone_v.test(a.val())){
            $(a).parent().find('.phone_wrong').append("min 10 max 12 numeric and must be numeric").css('font-size','.8em');
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