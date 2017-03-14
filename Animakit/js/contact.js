$(function(){

    var name = $('#name'),
        first_name = $('#first_name'),
        email = $('#email'),
        subject = $('#subject'),
        message = $('#message');

    // VERIFICATION NOM
    name.keyup(function(){
        if($(this).val().length > 50){
            $(this).css({ borderColor : 'red', color : 'red'});
        }
        else{
            $(this).css({ borderColor : 'green', color : 'green'});
        }
    });

    // VERIFICATION PRENOM
    first_name.keyup(function(){
        if($(this).val().length > 50){
            $(this).css({ borderColor : 'red', color : 'red'});
        }
        else{
            $(this).css({ borderColor : 'green', color : 'green'});
        }
    });

    // VERIFICATION MAIL
    email.keyup(function(){
        if(($(this).val().indexOf('@') == -1) || ($(this).val().indexOf('.') == -1)) {
            $(this).css({ borderColor : 'red', color : 'red'});
        }
        else{
            $(this).css({ borderColor : 'green', color : 'green'});
        }
    });

    // VERIFICATION SUJET
    subject.keyup(function(){
        if($(this).val().length < 5){
            $(this).css({ borderColor : 'red', color : 'red'});
        }
        else{
            $(this).css({ borderColor : 'green', color : 'green'});
        }
    });

    // VERIFICATION MESSAGE
    message.keyup(function(){
        if($(this).val().length < 2){
            $(this).css({ borderColor : 'red', color : 'red'});
        }
        else{
            $(this).css({ borderColor : 'green', color : 'green'});
        }
    });

});
