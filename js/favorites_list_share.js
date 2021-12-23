function showEmailPopup() {
    $('#emailPopup').popup('open');
}

function closeEmailPopup() {
    $('#emailPopup').popup('close');
}
function sendEmail() {
    var email = $("#emailFormShare").val();
    $("#sendBtn").html('Sending....')
    var favourites = "Hey, here are my favourite kitchens on Gedarata FOOD.\nCheck them out:\n";
    $.each(currentlySignedInUser.favouritesList, function (key, item) {
        favourites += item.kitchenName + ",\n"
    });
    jQuery.ajax({
        type: "POST",
        url: 'send_mail_script.php',
        data: { email: email, list: favourites },
        dataType: "json",
        complete: function (response) {
            console.log("done")
            $("#sendBtn").html('Send')
            showSuccess("Favourites Sent")
            closeEmailPopup();

        },
    }
    )
}