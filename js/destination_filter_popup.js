var filterDB;
var tempdb;
var checkSorted;
var defaultFilterDB = {
    sort:"ascending",
    parameters: [
        {
            "name": "false",
            "rating": "false",
            "price": "false"
        }
    ]
}



$(document).on("popupafteropen", "#popup_destination_filter", function (event, ui) {
    filterDB = defaultFilterDB;
});


function destinationFilterButton() {
    var checkSorted = JSON.parse(localStorage.getItem("checkSorted"));
    

    var browseKitchenFilterPopupVegetarian = document.getElementById("browse-kitchen-filter-popup-vegetarian").checked;
    var browseKitchenFilterPopupGlutenFree = document.getElementById("browse-kitchen-filter-popup-gluten-free").checked;
    var browseKitchenFilterPopupVegan = document.getElementById("browse-kitchen-filter-popup-vegan").checked;

    // filterDB.sort = browseKitchenFilterPopupLabelDollarCount;
    filterDB.parameters[0].name = browseKitchenFilterPopupVegetarian;
    filterDB.parameters[0].rating = browseKitchenFilterPopupGlutenFree;
    filterDB.parameters[0].price = browseKitchenFilterPopupVegan;

    if (typeof (Storage) !== "undefined") {
        console.log(filterDB);
        localStorage.setItem("filterDB", JSON.stringify(filterDB));
        filtering();
        checkSorted = true;
        $.mobile.back(); // Close popup
    } else {
        showFailure("Your browser does not support Frese");
    }
    localStorage.setItem("checkSorted", JSON.stringify(checkSorted));
     window.location = "destination_list.php";
}

function sortToggle(value){
    // filterDB = defaultDestinationDB;
    filterDB.sort = value;
    console.log(filterDB);
}

////////////////////////////////////////////////////////////////////////////////


function filtering(){

    var destinations = JSON.parse(localStorage.getItem("destinations"));
    tempdb = destinations;

    if(filterDB.parameters[0].name == true &&  filterDB.sort == "ascending"){
    tempdb.sort(sortByAccending("destinationName"))
    }
    else if(filterDB.parameters[0].rating == true && filterDB.sort == "ascending"){
    tempdb.sort(sortByAccending("destinationRating"))
    }
    else if(filterDB.parameters[0].price == true && filterDB.sort == "ascending"){
    tempdb.sort(sortByAccending("price"))
    }
    else if(filterDB.parameters[0].name == true && filterDB.sort == "descending"){
    tempdb.sort(sortByDesending("destinationName"))
    }
    else if(filterDB.parameters[0].rating == true && filterDB.sort == "descending"){
    tempdb.sort(sortByDesending("destinationRating"))
    }
    else if(filterDB.parameters[0].price == true && filterDB.sort == "descending"){
    tempdb.sort(sortByDesending("price"))
    }
    
    console.log(destinations);
    console.log(tempdb);
    localStorage.setItem("sortedDestinations", JSON.stringify(tempdb));
}

function sortByAccending(property){
    return function(a,b){  
  
        let comparison = 0;
      if(a[property] > b[property])  
        comparison = 1;  
      else if(a[property] < b[property])  
         comparison = -1;  
  
      return comparison;  
   }
  }
  
  function sortByDesending(property){
    return function(a,b){  
  
        let comparison = 0;
      if(a[property] > b[property])  
        comparison = 1;  
      else if(a[property] < b[property])  
         comparison = -1;  
  
      return comparison * -1;  
   }
  }

  function closeFilterPopup() {
    // showFailure("Canceled")
    $("#popup_destination_filter").popup("close");

}