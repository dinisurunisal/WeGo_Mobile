

function onSearchBtnClick() {
    var destinations = JSON.parse(localStorage.getItem("destinations"));
    var searchResults =[];

    let searchValue = $("#destination-search-input").val();
    let searchValueList = searchValue.split(" ");

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
    localStorage.setItem("sortedDestinations", JSON.stringify(searchResults));
    
    window.location = "destination_list.php";
  }