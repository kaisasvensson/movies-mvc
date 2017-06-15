
$("body").on("load", function() {
    console.log("Body loaded");
});

$(document).ready(function() {
    var fields = $(this).find("input:text");
    var checkField = function(field) {
        var fieldValue = $.trim($(field).val());
        return (fieldValue !== "");
    };

    fields.on("keyup", function(e) {
        if (checkField(this)) {
            $(this).removeClass("error");
        }
    });

  //ejnödvändig
    fields.on("focus", function(e) {
        console.log("FOKUS")
    });

    fields.on("blur", function(e) {
        console.log("BLUR", checkField(this));
        if (!checkField(this)) {
            $(this).addClass("error");
        }
    });

    $("#create-movie").on("submit", function(e) {
        var valid = true;

        e.preventDefault();

        $("#error-message").hide();
        fields.removeClass("error");

        fields.each(function() {
            var fieldValue = $.trim($(this).val());
            if (fieldValue === "") {
                valid = false;
                $(this).addClass("error");
            }
        });

        if (!valid) {
            $("#error-message").show();
        }
        else {
            $.post("/create",
            $(this).serialize(),
            function(response) {
                alert("The movie is saved");
            });
        }
    });
});

$('button').click(function(){ //you can give id or class name here for $('button')
    $(this).text(function(i,old){
        return old=='+' ?  '-' : '+';
    });
});