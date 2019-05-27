$(document).ready(function(){

$('#btn-payment').click(function(){
    var file ;
    file = validate_file($('#payment'));
    if(file===true){
        $(this).prop('type','submit');
    }
    else{
        $(this).prop('type','button');
    }
});

function validate_file(a){
    $(a).parent().find('.pay_wrong').empty();
    var ext = a.val().split('.').pop().toLowerCase();
    if(a.val()===""){
        $(a).parent().find('.pay_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
        return false;
    }
    else{
        if($.inArray(ext, ['png','jpg','jpeg','pdf']) == -1) {
            $(a).parent().find('.pay_wrong').append("must be .png .pdf .jpg or .jpeg").css('font-size','.8em');
            return false;
        }
        else{
            if(a[0].files[0].size>2197152){
                $(a).parent().find('.pay_wrong').append("File size must be below 2MB").css('font-size','.8em');
                return false;
            }
            return true;
        }
    }
    
}
});