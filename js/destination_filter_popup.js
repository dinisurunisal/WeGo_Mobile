var filterDB;
var tempdb;
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

// var filterToggleAsending = 0; // Default value
// var filterToggleDsending = 0; // Default value

$(document).on("popupafteropen", "#popup_destination_filter", function (event, ui) {
    // restoreDefaultFilter();
    filterDB = defaultFilterDB;
});

// function restoreDefaultFilter() {
//     filterDB = JSON.parse(localStorage.getItem('filterDB'));

//     if (filterDB.priceRange == "1") {
//         browseKitchenFilterPopupLabelDollarFunction1();
//     } else if (filterDB.priceRange == "2") {
//         browseKitchenFilterPopupLabelDollarFunction2();
//     } else if (filterDB.priceRange == "3") {
//         browseKitchenFilterPopupLabelDollarFunction3();
//     }

//     if (filterDB.ratings == "1") {
//         browseKitchenFilterPopupLabelStarFunction1();
//     } else if (filterDB.ratings == "2") {
//         browseKitchenFilterPopupLabelStarFunction2();
//     } else if (filterDB.ratings == "3") {
//         browseKitchenFilterPopupLabelStarFunction3();
//     } else if (filterDB.ratings == "4") {
//         browseKitchenFilterPopupLabelStarFunction4();
//     } else if (filterDB.ratings == "5") {
//         browseKitchenFilterPopupLabelStarFunction5();
//     }

//     if (filterDB.dietaryRestriction[0].vegetarian == true) {
//         $('#browse-kitchen-filter-popup-vegetarian').filter(':checkbox').prop('checked', true).checkboxradio("refresh");
//     } else {
//         $('#browse-kitchen-filter-popup-vegetarian').filter(':checkbox').prop('checked', false).checkboxradio("refresh");
//     }

//     if (filterDB.dietaryRestriction[0].glutenFree == true) {
//         $('#browse-kitchen-filter-popup-gluten-free').filter(':checkbox').prop('checked', true).checkboxradio("refresh");
//     } else {
//         $('#browse-kitchen-filter-popup-gluten-free').filter(':checkbox').prop('checked', false).checkboxradio("refresh");
//     }

//     if (filterDB.dietaryRestriction[0].vegan == true) {
//         $('#browse-kitchen-filter-popup-vegan').filter(':checkbox').prop('checked', true).checkboxradio("refresh");
//     } else {
//         $('#browse-kitchen-filter-popup-vegan').filter(':checkbox').prop('checked', false).checkboxradio("refresh");
//     }
// }

function destinationFilterButton() {
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
        $.mobile.back(); // Close popup
    } else {
        showFailure("Your browser does not support Frese");
    }

     window.location = "destination_list.php";
}

function sortToggle(value){
    // filterDB = defaultDestinationDB;
    filterDB.sort = value;
    console.log(filterDB);
}

////////////////////////////////////////////////////////////////////////////////

/* function browseKitchenFilterPopupLabelDollarFunction1() {
    browseKitchenFilterPopupLabelDollarCount = 1;

    checkDollarIcon(1, 2, 3);
}

function browseKitchenFilterPopupLabelDollarFunction2() {
    browseKitchenFilterPopupLabelDollarCount = 2;

    checkDollarIcon(2, 1, 3);
}

function browseKitchenFilterPopupLabelDollarFunction3() {
    browseKitchenFilterPopupLabelDollarCount = 3;

    checkDollarIcon(3, 1, 2);
}

////////////////////////////////////////////////////////////////////////////////

function browseKitchenFilterPopupLabelStarFunction1() {
    browseKitchenFilterPopupLabelStarCount = 1;

    addStarIcons(1);
    removeStarIcons(2);
    removeStarIcons(3);
    removeStarIcons(4);
    removeStarIcons(5);
}

function browseKitchenFilterPopupLabelStarFunction2() {
    browseKitchenFilterPopupLabelStarCount = 2;

    addStarIcons(1);
    addStarIcons(2);
    removeStarIcons(3);
    removeStarIcons(4);
    removeStarIcons(5);
}

function browseKitchenFilterPopupLabelStarFunction3() {
    browseKitchenFilterPopupLabelStarCount = 3;

    addStarIcons(1);
    addStarIcons(2);
    addStarIcons(3);
    removeStarIcons(4);
    removeStarIcons(5);
}

function browseKitchenFilterPopupLabelStarFunction4() {
    browseKitchenFilterPopupLabelStarCount = 4;

    addStarIcons(1);
    addStarIcons(2);
    addStarIcons(3);
    addStarIcons(4);
    removeStarIcons(5);
}

function browseKitchenFilterPopupLabelStarFunction5() {
    browseKitchenFilterPopupLabelStarCount = 5;

    addStarIcons(1);
    addStarIcons(2);
    addStarIcons(3);
    addStarIcons(4);
    addStarIcons(5);
}

////////////////////////////////////////////////////////////////////////////////

function checkDollarIcon(id1, id2, id3) {
    $("#radio-dollar-" + id1).attr("checked", true).checkboxradio('refresh');
    $("#radio-dollar-" + id2).attr("checked", false).checkboxradio('refresh');
    $("#radio-dollar-" + id3).attr("checked", false).checkboxradio('refresh');
}

////////////////////////////////////////////////////////////////////////////////

function addStarIcons(id) {
    $("#browse-kitchen-filter-popup-checkbox-star-" + id).prop('checked', true).checkboxradio('refresh');

    document.getElementById("browse-kitchen-filter-popup-label-star-" + id).innerHTML = '<img src="images/star-icon.png" alt="Star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-' + id + '" />';
}

function removeStarIcons(id) {
    $("#browse-kitchen-filter-popup-checkbox-star-" + id).prop('checked', false).checkboxradio('refresh');

    document.getElementById("browse-kitchen-filter-popup-label-star-" + id).innerHTML = '<img src="images/empty-middle-star-icon.png" alt="Empty star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-' + id + '" />';
} */


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