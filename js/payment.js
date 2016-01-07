var test;

$("document").ready(function() {
    //thank you page
    imgRight();
    var width = $(".main-content").width() - $("#thankyou").width();
 
    function imgLeft() {
        $("#thankyou").animate({left: "+=" + width}, 3000, "swing", imgRight);
    }
    function imgRight() {
        $("#thankyou").animate({left: "-=" + width}, 3000, "swing", imgLeft);
    }
    
   
    
    $("#pickup").hide();

    //radio deivert/pickup click
    $("input[name$='ship']").click(function() {
        test = $(this).val();
        if(test=="pickup"){
            $("#delivery").hide();
            $("#"+test).show();
        }else if(test=="delivery"){
            $("#pickup").hide();
            $("#"+test).show();
        }
    });

    // check if the name is valid
    function name_validator(test) {
        var name = $("#" + test + " [name=name]").val();
        var pattern = /^[a-z\s]+$/i;
        return pattern.test(name);
    }

    // check if the email is valid
    function email_validator(test) {
        var email = $("#" + test + " [name=email]").val();
        var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return pattern.test(email);
    }

    // check if the zip is valid
    function zip_validator(test) {
        var zip = $("#" + test + " [name=zip]").val();
        var pattern = /^[0-9]{5}$/i;
        return pattern.test(zip);

    }

    // check if the card number, expire date is valid
    function card_validator(test) {
        var card_type = $( "#card-type option:selected" ).text();
        var card = $("#" + test + " [name=card-number]").val();
        switch (card_type) {
            case "American Express":
                var pattern = /^3[47][0-9]{13}$/;
                return pattern.test(card);
                break;

            case "Discover":
                var pattern = /^6(?:011|5[0-9]{2})[0-9]{12}$/;
                return pattern.test(card);
                break;

            case "MasterCard":
                var pattern = /^5[1-5][0-9]{14}$/;
                return pattern.test(card);
                break;

            case "Visa":
                var pattern = /^4[0-9]{12}(?:[0-9]{3})?$/;
                return pattern.test(card);
                break;
        }
    }

    function expire_date_validator() {
        var mm = document.querySelector('[name="mm"]').value;
        var yy = document.querySelector('[name="yy"]').value;
        if (parseInt(mm) < 1 || parseInt(mm) > 12 || parseInt(yy) < 15 || parseInt(yy) > 99) {
            return false;
        }
        return true;
    }


    $("#pickup-pay-form").submit(function(event) {
        if (!name_validator(test)) {
            alert("The name is incorrect!");
            event.preventDefault();
            return;
        }
        
        if (!card_validator(test)) {
            alert("The card number is incorrect!");
            event.preventDefault();
            return;
        }

        if (!expire_date_validator(test)) {
            alert("The expire date is incorrect!");
            event.preventDefault();
            return;
        }
    });

    $("#delivery-pay-form").submit(function(event) {
        if (!name_validator(test)) {
            alert("The name is incorrect!");
            event.preventDefault();
            return;
        }

        if(test=="delivery"){
            if (!email_validator(test)) {
                alert("The Email is incorrect!");
                event.preventDefault();
                return;
            }

            if (!zip_validator(test)) {
                alert("The zip code is incorrect!");
                event.preventDefault();
                return;
            }
        }
        
        if (!card_validator(test)) {
            alert("The card number is incorrect!");
            event.preventDefault();
            return;
        }

        if (!expire_date_validator(test)) {
            alert("The expire date is incorrect!");
            event.preventDefault();
            return;
        }
    });



});