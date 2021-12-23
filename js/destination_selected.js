const dollarSign = "$ "
var destinationId;
var destination;

$(document).on("pageinit", function () {
    initialize();
});

function initialize() {
    destinationId = localStorage.getItem("clickedDestinationId");
    console.log(destinationId);
    var destinations = JSON.parse(localStorage.getItem("destinations"));
    destination = destinations.find(obj => obj.destinationId === destinationId);
    loadData();
    // renderList();
    // setHeight();
    // document.getElementById("#nav_bar_search").classList.add("ui-btn-active");
}

function loadData(){
    $('.sel-dest-image').attr('src', destination.destinationImage);
    $('#dest_sel_heading_name').text(destination.destinationName);
    $('#dest_sel_star_score').text(destination.destinationRating);
    $('#dest_sel_about').text(destination.destinationCardDetails);
    $('#dest_sel_time').text(destination.time);
    $('#dest_sel_address').text(destination.location.addressName);
    $('#dest_sel_crowd').text(destination.crowdRange);
    $('#dest_sel_price').text(dollarSign + ' ' + destination.price);

    // var categoryText = '';
    // $.each(seller.categories,function(index, category){
    //     // $('#kitchen-category').text();
    //     categoryText += '\u25CF' + "\xa0" +category + "\xa0\xa0\xa0\xa0";
    //     console.log(categoryText);
    // });
    // $('#kitchen-category').text(categoryText);
    // $('#kitchen-description').text(seller.kitchenDescription);
    // $('#kitchen-time').text(seller.time);
    // $('#kitchen-ratings').text((seller.kitchenRatingTotal/seller.kitchenRatingUserNumber).toFixed(1));
    // $('#kitchen-address').text(seller.location.addressName);
}