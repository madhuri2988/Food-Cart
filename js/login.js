$(document).ready(function() {
    // open the login window
    $(".login-show").click(function() {
        $(".ontop").show();
        $("#login").show();
        $("#signup").hide();
        return false;
    });

    // close the login window
    $(".btn-close").click(function() {
        $(".ontop").hide();
        $("#login").hide();
        $("#signup").hide();
        return false;
    });

    // open the sign up window
    $(".signup-show").click(function() {
        $(".ontop").show();
        $("#login").hide();
        $("#signup").show();
        return false;
    });

});











