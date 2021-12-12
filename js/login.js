$(document).on("pageinit", function () {
    init();
});

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

    var users = [

    ]

    if (typeof (Storage) !== "undefined") {
        localStorage.setItem("posters", JSON.stringify(posters));
        localStorage.setItem("bookings", JSON.stringify(bookings));
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
