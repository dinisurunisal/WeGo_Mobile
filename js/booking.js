var booking = [];

$(document).on("pageinit", function () {
    initJsonFiles();
});

function initJsonFiles() {
    // localStorage.clear();
    $.getJSON("json-files/booking.json", function (jsonFile) {
        booking = jsonFile;
        console.log(booking);
        console.log(booking[0]);
        loadData();
    });
}

function loadData() {
    
}
