var currentlySignedInUser;
var defaultDestinationDB = [];

$(function initialization(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    UpdatePoints();
});

function UpdatePoints(){
    $('#points').html(currentlySignedInUser.currentPoints);
}

function setdest(){
    var destinations = JSON.parse(localStorage.getItem("destinations"));
    defaultDestinationDB = destinations;
    console.log("1")
    // console.log(defaultDestinationDB)
    // defaultDestinationDB.sort(sortByName("destinationName"))
    // console.log(defaultDestinationDB)
    // console.log("2")
    defaultDestinationDB.sort(sortByNameacending("price"))
    console.log(defaultDestinationDB)
    // console.log("3")
    // defaultDestinationDB.sort(sortByName("destinationRating"))
    // console.log(defaultDestinationDB)
}
function setdestprice(){
    var destinations = JSON.parse(localStorage.getItem("destinations"));
    defaultDestinationDB = destinations;
    // console.log("1")
    // console.log(defaultDestinationDB)
    // defaultDestinationDB.sort(sortByName("destinationName"))
    // console.log(defaultDestinationDB)
    console.log("2")
    defaultDestinationDB.sort(sortByNamedecending("price"))
    console.log(defaultDestinationDB)
    // console.log("3")
    // defaultDestinationDB.sort(sortByName("destinationRating"))
    // console.log(defaultDestinationDB)
}




function sortByNameacending(property){
    return function(a,b){  

        let comparison = 0;
      if(a[property] > b[property])  
        comparison = 1;  
      else if(a[property] < b[property])  
         comparison = -1;  
  
      return comparison;  
   }
  }
function sortByNamedecending(property){
    return function(a,b){  

        let comparison = 0;
      if(a[property] > b[property])  
        comparison = 1;  
      else if(a[property] < b[property])  
         comparison = -1;  
  
      return comparison * -1;  
   }
  }
