function headerSearchButtonFunction() {
    var userInputValueInHeaderSearch = document.getElementById("mb-header-search-kitchen-food").value;

    if (userInputValueInHeaderSearch == "") {
        showFailure("Enter a food item.");
    } else {
        localStorage.setItem("filterDB", null);
        if (typeof (Storage) !== "undefined") {
            localStorage.setItem("userSearchValue", JSON.stringify({ "type": "search", "value": userInputValueInHeaderSearch }));
            window.location = "browse_kitchen.php";
        } else {
            showFailure("Your browser does not support Frese");
        }
    }
}

function headerBackButtonFunction() {
    $("#mb-header-collapsible").collapsible("option", "collapsed", false);

    parent.history.back();
}
