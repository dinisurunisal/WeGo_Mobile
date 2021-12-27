var destinations = [];

$(document).on("pageinit", function () {
    initJsonFiles();
});

function initJsonFiles() {
    //localStorage.clear();
    $.getJSON("json-files/destinations.json", function (jsonFile) {
        if (typeof (Storage) !== "undefined") {
            destinations = JSON.parse(localStorage.getItem("destinations"));
            if (destinations == null) {
                destinations = jsonFile;
            }
            localStorage.setItem("destinations", JSON.stringify(destinations));
            console.log(localStorage)
        } else {
            showFailure("Your browser does not support WeGo Mobile Application.");
        }

        init();
    });
}

function init() {
    var posters = [
        { 'title': 'Italian', 'imageUrl': 'https://media.cntraveler.com/photos/586eb8449d2b725a71af8123/4:3/w_420,c_limit/hot-dogs-gene-and-judes-photo-credit-Nick-Holmes.jpg' },
        { 'title': 'Mexican', 'imageUrl': 'https://cdn.vox-cdn.com/thumbor/0c1Mmb4glZ9CjRU4N_tbsuhYCqg=/0x0:750x500/1200x900/filters:focal(315x190:435x310)/cdn.vox-cdn.com/uploads/chorus_image/image/59012905/noanoa.0.png' },
        { 'title': 'Sri Lankan', 'imageUrl': 'https://farm7.static.flickr.com/6051/6298117449_100301a062_o.jpg' },
        { 'title': 'Chinese', 'imageUrl': 'https://media.cntraveler.com/photos/586eb8449d2b725a71af8123/4:3/w_420,c_limit/hot-dogs-gene-and-judes-photo-credit-Nick-Holmes.jpg' },
        { 'title': 'Turkish', 'imageUrl': 'https://media.cntraveler.com/photos/586eb8449d2b725a71af8123/4:3/w_420,c_limit/hot-dogs-gene-and-judes-photo-credit-Nick-Holmes.jpg' },
    ]

    var bookings = {
    }

    var tempBooking = {

    }

    var users = [

    ]

    var pastHunts = [
        { 'huntId': 'mh1', 'destName': 'Big Ben', 'imageUrl': 'images/destinations/Big Ben.jpg', 'tourDate':'Tour completed on 20-12-2021', 'tourDetails':'MEL - DEL | 3h 11m | One Way'},
        { 'huntId': 'mh2', 'destName': 'Cotswolds', 'imageUrl': 'images/destinations/Cotswolds.jpg', 'tourDate':'Tour completed on 25-12-2021', 'tourDetails':'EUS - DEL | 1h 11m | Two Way'}
    ]

    var upcomingHunts = [
        { 'destName': 'York Minster', 'imageUrl': 'images/destinations/York Minster.jpg', 'tourDate':'Tour completed on 25-12-2021', 'tourRoute':'London - Burmingham', 'tourDuration': '2h 15m', 'tourPassengers': '4 Adults'},
        { 'destName': 'The British Museum', 'imageUrl': 'images/destinations/The British Museum.jpg', 'tourDate':'Tour completed on 25-12-2021', 'tourRoute':'London - Burmingham', 'tourDuration': '6hr 2m', 'tourPassengers': '3 Adults'}
    ]

    if (typeof (Storage) !== "undefined") {
        localStorage.setItem("posters", JSON.stringify(posters));
        localStorage.setItem("bookings", JSON.stringify(bookings));
        localStorage.setItem("tempBooking", JSON.stringify(tempBooking));
        localStorage.setItem("pastHunts", JSON.stringify(pastHunts));
        localStorage.setItem("upcomingHunts", JSON.stringify(upcomingHunts));
        if (localStorage.getItem("users") == null) {
            localStorage.setItem("users", JSON.stringify(users));
        }
    } else {
        showFailure("Your browser does not support Frese.");
    }
}


function login() {
    var contactNumber = document.getElementById("contact_number_form").value;
    var password = document.getElementById("password_form").value;
    var users = JSON.parse(localStorage.getItem('users'));
    console.log(users);
    if (users == null) {
        showFailure("Invalid credentials. ");
        return;
    }
    var isSignedIn = false;
    users.forEach(function (user, index) {
        if (user.contactNumber === contactNumber && user.password === password) {
            window.location.href = "homepage.php";
            isSignedIn = true;
            localStorage.setItem("currentlySignedInUser", JSON.stringify(user));
        }
    })
    if (!isSignedIn) {
        showFailure("Invalid credentials. ");
    }

}
