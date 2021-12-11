var defaultDestinationDB = [];

$(function initialization() {
    $.getJSON("json-files/destinations.json", function (jsonFile) {
        defaultDestinationDB = jsonFile;
        console.log(defaultDestinationDB)

        loadDestinationList();
    });
});

function loadDestinationList() {

    for (var i = 0; i < defaultDestinationDB.length; i++) {
        document.getElementById("card_image").src = defaultDestinationDB[i].destinationImage;
        document.getElementById("card_name").innerHTML = defaultDestinationDB[i].destinationName;
        document.getElementById("card_details").innerHTML = defaultDestinationDB[i].destinationCardDetails;
        // document.getElementById("kitchen-rating-script").innerHTML = (defaultDestinationDB[i].kitchenRatingTotal / defaultDestinationDB[i].kitchenRatingUserNumber).toFixed(1);
    
        $("#card_script_1").clone().appendTo("#card_script_2");
    }
}

$(function () {
  $("i").click(function () {
    $("i").toggleClass("press", 1000);
  });
});
