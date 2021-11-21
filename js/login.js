var sellers = [];

$(document).on("pageinit", function () {
    initJsonFiles();
});

function initJsonFiles() {
    // localStorage.clear();
    $.getJSON("json-files/sellers.json", function (jsonFile) {
        if (typeof (Storage) !== "undefined") {
            sellers = JSON.parse(localStorage.getItem("sellers"));
            if (sellers == null) {
                sellers = jsonFile;
            }
            localStorage.setItem("sellers", JSON.stringify(sellers));

        } else {
            showFailure("Your browser does not support Frese.");
        }

        init();
    });
}

function init() {
    var currentlySignedIn = null;
    var categories = [
        { 'title': 'Italian', 'imageUrl': 'https://media.cntraveler.com/photos/586eb8449d2b725a71af8123/4:3/w_420,c_limit/hot-dogs-gene-and-judes-photo-credit-Nick-Holmes.jpg' },
        { 'title': 'Mexican', 'imageUrl': 'https://cdn.vox-cdn.com/thumbor/0c1Mmb4glZ9CjRU4N_tbsuhYCqg=/0x0:750x500/1200x900/filters:focal(315x190:435x310)/cdn.vox-cdn.com/uploads/chorus_image/image/59012905/noanoa.0.png' },
        { 'title': 'Sri Lankan', 'imageUrl': 'https://farm7.static.flickr.com/6051/6298117449_100301a062_o.jpg' },
        { 'title': 'Chinese', 'imageUrl': 'https://media.cntraveler.com/photos/586eb8449d2b725a71af8123/4:3/w_420,c_limit/hot-dogs-gene-and-judes-photo-credit-Nick-Holmes.jpg' },
        { 'title': 'Turkish', 'imageUrl': 'https://media.cntraveler.com/photos/586eb8449d2b725a71af8123/4:3/w_420,c_limit/hot-dogs-gene-and-judes-photo-credit-Nick-Holmes.jpg' },
    ]

    var articles = [
        { 'aricleId': "1", "sellerId": "kitchenId1", 'title': '20% Off Crab', 'imageUrl': 'https://www.gfdining.co.uk/wp-content/uploads/2013/04/photo-40.jpg', 'description': '@ What the Crab', 'code': "40OFFPIZZA", 'discount': "40" },
        { 'aricleId': "2", "sellerId": "kitchenId2", 'title': '30% Off Burgers', 'imageUrl': 'https://hips.hearstapps.com/del.h-cdn.co/assets/cm/15/10/54f94761aff6f_-_reddit-wendys-baconator.jpg?fill=320:242&resize=480:*', 'description': 'Cheap Baconators!', 'code': "BURGERDEAL", 'discount': "40" },
        { 'aricleId': "3", "sellerId": "kitchenId3", 'title': '10% Off Noodles', 'imageUrl': 'https://cherishinghopesanddreams.com/wp-content/uploads/2015/01/noodles-square-1024x1024.jpg', 'description': 'Get a good bowl for', 'code': "NOODLEDEAL", 'discount': "40" },
        { 'aricleId': "4", "sellerId": "kitchenId4", 'title': '10% Off Noodles', 'imageUrl': 'https://cherishinghopesanddreams.com/wp-content/uploads/2015/01/noodles-square-1024x1024.jpg', 'description': 'Get a good bowl for', 'code': "NOODLEDEAL", 'discount': "40" },
    ]

    var pendingOrder = {
    }

    var users = [

    ]

    var sellerOrders = [
        {
            "sellerId": "kitchenId1",
            "outstandingOrders": [

            ],
            "completedOrders": [

            ]
        },
        {
            "sellerId": "kitchenId2",
            "outstandingOrders": [],
            "completedOrders": []
        },
        {
            "sellerId": "kitchenId3",
            "outstandingOrders": [],
            "completedOrders": []
        }
    ]

    if (typeof (Storage) !== "undefined") {
        localStorage.setItem("articles", JSON.stringify(articles));
        localStorage.setItem("categories", JSON.stringify(categories));
        localStorage.setItem("pendingOrder", JSON.stringify(pendingOrder));
        if (localStorage.getItem("users") == null) {
            localStorage.setItem("users", JSON.stringify(users));
        }
        localStorage.setItem("sellerOrders", JSON.stringify(sellerOrders));
    } else {
        showFailure("Your browser does not support Frese.");
    }
}


function login() {
    var contactNumber = document.getElementById("contactNumberForm").value;
    var password = document.getElementById("passwordForm").value;
    var users = JSON.parse(localStorage.getItem('users'));
    console.log(users);
    if (users == null) {
        showFailure("Invalid credentials. ");
        return;
    }
    var isSignedIn = false;
    users.forEach(function (user, index) {
        if (user.contactNumber === contactNumber && user.password === password) {
            window.location.href = "search_screen.php";
            isSignedIn = true;
            localStorage.setItem("currentlySignedInUser", JSON.stringify(user));
        }
    })
    if (!isSignedIn) {
        showFailure("Invalid credentials. ");
    }

}
