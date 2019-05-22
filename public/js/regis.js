var flag1 = 0,flag2 = 0;
var dis_1;
var dis_2;
var int = 0;
var email_error ='Email Must be gmail and include @'
$(document).ready(function(){
    $('#member1').hide();
    $('#member2').hide();
    function add_people(){
        if(flag1 === 0){
            flag1 = 1;
            $('#member1').show();
            if(flag2 === 1){
                $('#plus').hide(1000);
            }
        }
        else {
            if(flag2 === 0){
                flag2 = 1;
                $('#member2').show();
                if(flag1 === 1){
                    $('#plus').hide(1000);
                }
            }
        }
    }
    
    $("#dis_1").click(function(){
        $("#member1").hide(2000);
        flag1 = 0;
        $('#member1 input').val("");
        $('#member1 .form-group>span').hide();
        $('#plus').show(1000);
    });
    $("#dis_2").click(function(){
        $("#member2").hide(2000);
        flag2 = 0;
        $('#member2 input').val("");
        $('#member2 .form-group>span').hide();
        $('#plus').show(1000);
    });
    $('#plus').click(function(){
        add_people(); 
    });

    var email_v = new RegExp(/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/);
    var phone_v = new RegExp(/^[0-9]{10,14}$/);
    var line_v = new RegExp(/^[a-zA-Z0-9]*[a-zA-Z0-9|\.|\_|\-|\@]{3,}$/);
    var name_v = new RegExp(/^[A-z]*((\s)*[A-z]){3,}$/);
    
    $('#btn-register').click(function(){
        leader();
        member1();
        member2();
        validate_group();
    });
    function validate_group(){
        validate_name($('#Group'));
        validate_line($('#username'));
        validate_password($('#password'));
    }
    function validate_password(a){
        $(a).parent().find('.pass_wrong').empty();
        if($('#password').val().length < 8){
            $(a).parent().find('.pass_wrong').append("must be at least 8").css('font-size','.8em');   
        }
        else
        {
            $('#c-password').parent().find('.passc_wrong').empty();
            if(a.val() !== $('#c-password').val()){
                $('#c-password').parent().find('.passc_wrong').append("confirmastion is wrong").css('font-size','.8em');
            }
        }
    }
    function leader(){
        validate_dob($('#dob'));
        validate_email($('#email'));
        validate_file($('#ktp'));
        validate_line($('#Line'));
        validate_name($('#name'));
        validate_phone($('#Whatsapp'));
    }
    function member1(){
        if(flag1 === 1){    
            validate_dob($('#dob1'));
            validate_email($('#email1'));
            validate_file($('#ktp1'));
            validate_line($('#Line1'));
            validate_name($('#name1'));
            validate_phone($('#Whatsapp1'));
        }
    }
    function member2(){
        if(flag2 === 1){
            validate_dob($('#dob2'));
            validate_email($('#email2'));
            validate_file($('#ktp2'));
            validate_line($('#Line2'));
            validate_name($('#name2'));
            validate_phone($('#Whatsapp2'));
        }
    }
    function validate_line(a){
        $(a).parent().find('.line_wrong').empty();
        if(!line_v.test(a.val())){
            $(a).parent().find('.line_wrong').append("must be alphanumeric or . - _").css('font-size','.8em');
        }
    }
    
    function validate_email(a){
        $(a).parent().find('.email_wrong').empty();
        if(!email_v.test(a.val())){
            $(a).parent().find('.email_wrong').append(email_error).css('font-size','.8em');
        }
    }
    function validate_name(a){
        $(a).parent().find('.name_wrong').empty();
        if(!name_v.test(a.val())){
            $(a).parent().find('.name_wrong').append("not a number or character").css('font-size','.8em');
        }
    }
    function validate_file(a){
        $(a).parent().find('.ktp_wrong').empty();
        var ext = a.val().split('.').pop().toLowerCase();
        if(a.val()==="")
        if($.inArray(ext, ['png','jpg','jpeg','pdf']) == -1) {
            $(a).parent().find('.ktp_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
        }
        
    }
    function validate_phone(a){
        $(a).parent().find('.phone_wrong').empty();
        if(!phone_v.test(a.val())){
            $(a).parent().find('.phone_wrong').append("min 10 character and no symbol").css('font-size','.8em');
        }
    }
    function validate_dob(a){
        var year = new Date(a.val()).getFullYear();
        var month = new Date(a.val()).getMonth();
        var day = new Date(a.val()).getDay();
        $(a).parent().find('.dob_wrong').empty();
        if(isNaN(year)||isNaN(month)||isNaN(day)){
            $(a).parent().find('.dob_wrong').append("please fill the blank").css('font-size','.8em');
        }
        else{
            if(year < 1996 || year > 2002 ){
                $(a).parent().find('.dob_wrong').append("must be around 17-24 years old").css('font-size','.8em');
            }
        }
    }
});