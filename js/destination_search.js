

function onSearchBtnClick() {

    var checkSorted = JSON.parse(localStorage.getItem("checkSorted"));

    var destinations = JSON.parse(localStorage.getItem("destinations"));
    var searchResults =[];

    let searchValue = $("#destination-search-input").val();
    let searchValueName = searchValue.toLowerCase();
    let searchValueList = searchValueName.split(" ");

    for (let i = 0; i < destinations.length; i++) {
        let name = String(destinations[i].destinationName).toLowerCase(); 
        for (let j = 0; j < searchValueList.length; j++) {

            if (name.includes(searchValueList[j])) {
                let found = false;
                searchResults.forEach(element => {
                    if (element.destinationId == destinations[i].destinationId) {
                        found = true;
                    } 
                });

                if (found == false) {
                    searchResults.push(destinations[i]);
                }
                      
            } 
        }   
    }

    if (searchResults.length > 0) {
        checkSorted = true;
    }else{
        checkSorted = false;
        showFailure("No results.")
    }
    localStorage.setItem("sortedDestinations", JSON.stringify(searchResults));
    localStorage.setItem("checkSorted", JSON.stringify(checkSorted));
    
    setTimeout(function () {
    window.location = "destination_list.php";
  }, 500);
    
  }