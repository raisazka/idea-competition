
var flag1 = 0,flag2 = 0;
var dis_1;
var dis_2;
var email_error ='Email Must be gmail and include @'
$(document).ready(function(){
    $('#member1').hide();
    $('#member2').hide();
    req_member1(false);
    req_member2(false);
    Be_return();
    // $('#try').click(function(){
    //     auto_isi();
    // });
    function add_people(){
        if(flag1 === 0){
            flag1 = 1;
            $('#member1').show();
            req_member1(true);
            if(flag2 === 1){
                $('#plus').hide(1000);
            }
        }
        else {
            if(flag2 === 0){
                flag2 = 1;
                $('#member2').show();
                req_member2(true);
                if(flag1 === 1){
                    $('#plus').hide(1000);
                }
            }
        }
    }
    function Be_return(){
        if($('#email1').val()!=""){
            flag1 = 1;
            $('#member1').show();
            req_member1(true);
            if(flag2 === 1){
                $('#plus').hide(1000);
            }
        }
        if($('#email2').val()!=""){
            flag2 = 1;
            $('#member2').show();
            req_member2(true);
            if(flag1 === 1){
                $('#plus').hide(1000);
            }
        }
        
    }
    $("#dis_1").click(function(){
        $("#member1").hide(2000);
        flag1 = 0;
        req_member1(false);
        $('#member1 input').val("");
        $('#member1 .form-group>span').hide();
        $('#plus').show(1000);
    });
    $("#dis_2").click(function(){
        $("#member2").hide(2000);
        flag2 = 0;
        req_member2(false);
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
        var lead ,mem1 ,mem2 , group;
        lead = leader();
        if(flag1 === 1){
            mem1 = member1();
        }
        else{
            mem1 = true;
        }
        if(flag2 ===1){
            mem2 = member2();
        }
        else{
            mem2 = true;
        }
        group = validate_group();
        if(lead === true && mem1 === true && mem2 === true && group === true){
            $('#btn-register').prop('type','submit');
        }
        else{
            $('#btn-register').prop('type','button');
        }
    });
    function req_member1(a){
        $("#name1").prop('required',a);
        $("#Whatsapp1").prop('required',a);
        $("#email1").prop('required',a);
        $("#Line1").prop('required',a);
        $("#dob1").prop('required',a);
        $("#ktp1").prop('required',a);
        $("#name1").prop('disabled',!a);
        $("#Whatsapp1").prop('disabled',!a);
        $("#email1").prop('disabled',!a);
        $("#Line1").prop('disabled',!a);
        $("#dob1").prop('disabled',!a);
        $("#ktp1").prop('disabled',!a);
    }
    function req_member2(a){
        $("#name2").prop('required',a);
        $("#Whatsapp2").prop('required',a);
        $("#email2").prop('required',a);
        $("#Line2").prop('required',a);
        $("#dob2").prop('required',a);
        $("#ktp2").prop('required',a);
        $("#name2").prop('disabled',!a);
        $("#Whatsapp2").prop('disabled',!a);
        $("#email2").prop('disabled',!a);
        $("#Line2").prop('disabled',!a);
        $("#dob2").prop('disabled',!a);
        $("#ktp2").prop('disabled',!a);
    }
    function validate_group(){
        var name = validate_name($('#Group'));
        var line = validate_line($('#username'));
        var pass = validate_password($('#password'));
        if(name === true && line === true && pass === true){
            return true;
        }
        return false;
    }
    function validate_password(a){
        $(a).parent().find('.pass_wrong').empty();
        if($('#password').val().length < 8){
            $(a).parent().find('.pass_wrong').append("must be at least 8").css('font-size','.8em');   
            return false;
        }
        else{
            $('#c-password').parent().find('.passc_wrong').empty();
            if(a.val() !== $('#c-password').val()){
                $('#c-password').parent().find('.passc_wrong').append("confirmastion is wrong").css('font-size','.8em');
                return false;
            }
            return true;
        }
    }
    function leader(){
        var dob = validate_dob($('#dob'));
        var email = validate_email($('#email'));
        var file = validate_file($('#ktp'));
        var line = validate_line($('#Line'));
        var name = validate_name($('#name'));
        var phone = validate_phone($('#Whatsapp'));
        if (dob===true && email===true && file === true && line === true && name === true && phone === true){
            return true;
        }
        return false;
    }
    function member1(){
        if(flag1 === 1){    
            var dob = validate_dob($('#dob1'));
            var email = validate_email($('#email1'));
            var file = validate_file($('#ktp1'));
            var line = validate_line($('#Line1'));
            var name = validate_name($('#name1'));
            var phone = validate_phone($('#Whatsapp1'));
            if (dob===true && email===true && file === true && line === true && name === true && phone === true){
                return true;
            }
            return false;
        }
    }
    function member2(){
        if(flag2 === 1){
            var dob = validate_dob($('#dob2'));
            var email = validate_email($('#email2'));
            var file = validate_file($('#ktp2'));
            var line = validate_line($('#Line2'));
            var name = validate_name($('#name2'));
            var phone = validate_phone($('#Whatsapp2'));
            if (dob===true && email===true && file === true && line === true && name === true && phone === true){
                return true;
            }
            return false;
        }
    }
    function validate_line(a){
        $(a).parent().find('.line_wrong').empty();
        if(!line_v.test(a.val())){
            $(a).parent().find('.line_wrong').append("must be alphanumeric or . - _").css('font-size','.8em');
            return false;
        }
        return true;   
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
            $(a).parent().find('.name_wrong').append("not a number or character").css('font-size','.8em');
            return false;
        }
        return true;
    }
    function validate_file(a){
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
            return true;
        }
        
    }
    function validate_phone(a){
        $(a).parent().find('.phone_wrong').empty();
        if(!phone_v.test(a.val())){
            $(a).parent().find('.phone_wrong').append("min 10 character and no symbol").css('font-size','.8em');
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
            if(year < 1996 || year > 2002 ){
                $(a).parent().find('.dob_wrong').append("must be around 17-24 years old").css('font-size','.8em');
                return false;
            }
            return true;
        }
    }
    function same_name(a,b,c,d){
        if(a.val()===b.val()&&b.val()===c.val()){
            console.log("di func1");
            $(a).parent().find(d).append("cannot be the same").css('font-size','.8em');
            $(b).parent().find(d).append("cannot be the same").css('font-size','.8em');
            $(c).parent().find(d).append("cannot be the same").css('font-size','.8em');
            return false;
        }
        else if(a.val()===b.val()){
            console.log("di func2");
            $(a).parent().find('.name_wrong').append("cannot be the same").css('font-size','.8em');
            $(b).parent().find(d).append("cannot be the same").css('font-size','.8em');
            return false;
        }
        else if(a.val()===c.val()){
            console.log("di func3");
            $(a).parent().find(d).append("cannot be the same").css('font-size','.8em');
            $(c).parent().find(d).append("cannot be the same").css('font-size','.8em');
            return false;
        }
        else if(b.val()===c.val()){
            console.log("di func4");
            $(b).parent().find(d).append("cannot be the same").css('font-size','.8em');
            $(c).parent().find(d).append("cannot be the same").css('font-size','.8em');
            return false;
        }
        else{
            return true;
        }
    }
    function auto_isi(){
        $("#name").val('bambang');
        $("#Whatsapp").val('082273774781');
        $("#email").val('peter'+getRandomInt(100)+'@gmail.com');
        $("#Line").val('peterannn');
        $('#Group').val('bambangHidup');
        $('#username').val('mantapjiwa');
        $('#dob').val("2000-02-09");
        $('#password').val('123123123');
        $('#c-password').val('123123123');
        $("#name1").val('bambang');
        $("#Whatsapp1").val('082273774781');
        $("#email1").val('peter'+getRandomInt(100)+'@gmail.com');
        $("#Line1").val('peterannn');
        $('#dob1').val("2000-02-09");
        $("#name2").val('bambang');
        $("#Whatsapp2").val('082273774781');
        $("#email2").val('peter'+getRandomInt(100)+'@gmail.com');
        $("#Line2").val('peterannn');
        $('#dob2').val("2000-02-09");
    }
    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
      }
});