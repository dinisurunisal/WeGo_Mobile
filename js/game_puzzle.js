var g = [1,2,3,4,5,6,7,8,0];
var l = [];
var boxNames = ["box1", "box2", "box3", "box4", "box5", "box6", "box7", "box8", "box9"];
var n = 0;
var won = false;

$(document).on("pageinit", function () {
    initialize();
});

function initialize(){
    // do {
    //     ri = Math.floor(Math.random()*(g.length));
    //     r = g[ri];

    //     if(r!=-1) {
    //         l.push(r);
    //         g[ri] = -1;
    //         n+=1;
    //     }

    // } while(n<9);
    l = [1,2,3,4,0,6,7,5,8];

    drawPuzzle();
}


function drawPuzzle() {
    // imagesrc = "images/destinations/Big%20Ben.jpg";
    // var percentage = 100 / (3 - 1);
    // for (var i = 0; i < 3 * 3; i++) {
    //     var xpos = (percentage * (i % 3)) + '%';
    //     var ypos = (percentage * Math.floor(i / 3)) + '%';
        
    //     document.getElementsByTagName('td')[i].innerHTML = '<div class="switch_img" style="background-image: url(' + imagesrc +'); background-size: 300%; background-position: ' + xpos + ' ' + ypos +'; width: ' + 400 / 3  + '; height: ' + 400 / 3 + ';"></div>';
    // }

    // document.getElementsByTagName('td')[l.indexOf(0)].innerHTML = '<div class="switch_img" style="background-color: white; width: ' + 400 / 3  + '; height: ' + 400 / 3 + ';"></div>';
    
    for(i=0;i<9;i++) {
        document.getElementsByTagName('td')[i].innerHTML = '<img src="images/game/bigben/'+l[i]+'.jpg">';
    }
    chkWin();
}

function boxClick(id) {
    
    boxNumber = boxNames.indexOf(id);
    emptyBoxNumber = l.indexOf(0);
    
    if(won == false) {
        if(emptyBoxNumber == (boxNumber + 3)) {
            mvDown();
        }
    
        if(emptyBoxNumber == (boxNumber - 3)) {
            mvUp();
        }
    
        if((emptyBoxNumber == (boxNumber + 1)) & !(emptyBoxNumber == 0 || emptyBoxNumber == 3 || emptyBoxNumber == 6)) {
            mvRight();
        }
    
        if((emptyBoxNumber == (boxNumber - 1)) & !(emptyBoxNumber == 2 || emptyBoxNumber == 5 || emptyBoxNumber == 8))  {
            mvLeft();
        }
    }
    
}

function mvDown() {
    i = l.indexOf(0);
    j = i - 3;
    t = l[i];
    l[i] = l[j];
    l[j] = t;
    drawPuzzle();
}
function mvUp() {
    i = l.indexOf(0);
    j = i + 3;
    t = l[i];
    l[i] = l[j];
    l[j] = t;
    drawPuzzle();
}

function mvRight() {
    i = l.indexOf(0);
    j = i - 1;
    t = l[i];
    l[i] = l[j];
    l[j] = t;
    drawPuzzle();
}

function mvLeft() {
    i = l.indexOf(0);
    j = i + 1;
    t = l[i];
    l[i] = l[j];
    l[j] = t;
    drawPuzzle();
}

function chkWin() {
    var a = 1;
    for(i=0; i<8; i++) {
        if(l[i]!=i+1) {a = 0;}
    }

    if(a==1) {
        won = true;
        document.getElementsByTagName('td')[8].innerHTML = '<img src="images/game/bigben/missing.jpg">';
        showSuccess('Game Completed')
        UpdatePoints();
    }
}

function UpdatePoints(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    console.log(1);
    currentlySignedInUser.currentPoints = currentlySignedInUser.currentPoints + 10;
    console.log(2);
    localStorage.setItem('currentlySignedInUser',JSON.stringify(currentlySignedInUser))
    console.log(3);
    showSuccess("Game Completed.<br>You earned 10 points.");
}