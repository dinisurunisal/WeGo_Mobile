function headerSearchButtonFunction() {
    var userInputValueInHeaderSearch = document.getElementById("header-search-box").value;

    if (userInputValueInHeaderSearch == "") {
        showFailure("Enter a valid name!");
    } else {
        localStorage.setItem("filterDB", null);
        if (typeof (Storage) !== "undefined") {
            localStorage.setItem("userSearchValue", JSON.stringify({ "type": "search", "value": userInputValueInHeaderSearch }));
            console.log(localStorage)
            // window.location = "browse_kitchen.php";
        } else {
            showFailure("Your browser does not support Frese");
        }
    }
}