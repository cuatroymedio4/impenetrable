$('#textarea').keyup(function () {
    var maxLength = 300;
    var text = $(this).val();
    var textLength = text.length;
    if (textLength > maxLength) {
        $(this).val(text.substring(0, (maxLength)));
        alert("Sólo se permiten " + maxLength + " caracteres.");
    }
    else {
        //alert("Required Min. 500 characters");
    }
});

$('#textarea_add_image').keyup(function () {
    var maxLength = 150;
    var text = $(this).val();
    var textLength = text.length;
    if (textLength > maxLength) {
        $(this).val(text.substring(0, (maxLength)));
        alert("Sólo se permiten " + maxLength + " caracteres.");
    }
    else {
        //alert("Required Min. 500 characters");
    }
});

