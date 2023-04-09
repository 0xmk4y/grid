$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = sanitizeInput($("#client_name").val());
    var email = sanitizeInput($("#email").val());
    var no_guests = sanitizeInput($("#no_guests").val());
    var message = sanitizeInput($("#message").val());
    

    $.ajax({
        type: "POST",
        url: "form/form-process.php",
        data: "client_name=" + name + "&email=" + email + "&no_guests=" + no_guests + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function sanitizeInput(input) {
    input = input.trim();
    input = $('<div>').text(input).html();
    return input;
}

function hide(){
    $("#msgSubmit").hide()
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
    setTimeout(hide, 2000);
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
    setTimeout( hide, 900);
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "mt-4 h3 text-center tada animated text-success";
    } else {
        var msgClasses = "mt-4 h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}