$(function initialization(){
    if(window.location.pathname.endsWith("homepage.php")){
        selectHome();
    } else if (window.location.pathname.endsWith("my_hunts.php")) {
        selectHunts();
    } else if (window.location.pathname.endsWith("treasure_hunt.php")) {
        selectGame();
    } else if (window.location.pathname.endsWith("awards.php")){
        selectAwards();
    } else {
        document.getElementById("nav_home").style.color = "#c4c4c4";
        document.getElementById("nav_hunts").style.color = "#c4c4c4";
        document.getElementById("nav_game").style.color = "#c4c4c4";
        document.getElementById("nav_awards").style.color = "#c4c4c4";
    }
});

function selectHome() {
    document.getElementById("home_img").src = "images/icons/homeIconSelected.png";
    document.getElementById("hunts_img").src = "images/icons/huntsIcon.png";
    document.getElementById("game_img").src = "images/icons/gameIcon.png";
    document.getElementById("awards_img").src = "images/icons/awardsIcon.png";
    document.getElementById("nav_home").style.color = "#0174cf";
    document.getElementById("nav_hunts").style.color = "#c4c4c4";
    document.getElementById("nav_game").style.color = "#c4c4c4";
    document.getElementById("nav_awards").style.color = "#c4c4c4";
}

function selectHunts() {
    document.getElementById("hunts_img").src = "images/icons/huntsIconSelected.png";
    document.getElementById("home_img").src = "images/icons/homeIcon.png";
    document.getElementById("game_img").src = "images/icons/gameIcon.png";
    document.getElementById("awards_img").src = "images/icons/awardsIcon.png";
    document.getElementById("nav_home").style.color = "#c4c4c4";
    document.getElementById("nav_hunts").style.color = "#0174cf";
    document.getElementById("nav_game").style.color = "#c4c4c4";
    document.getElementById("nav_awards").style.color = "#c4c4c4";
}

function selectGame() {
    document.getElementById("game_img").src = "images/icons/gameIconSelected.png";
    document.getElementById("home_img").src = "images/icons/homeIcon.png";
    document.getElementById("hunts_img").src = "images/icons/huntsIcon.png";
    document.getElementById("awards_img").src = "images/icons/awardsIcon.png";
    document.getElementById("nav_home").style.color = "#c4c4c4";
    document.getElementById("nav_hunts").style.color = "#c4c4c4";
    document.getElementById("nav_game").style.color = "#0174cf";
    document.getElementById("nav_awards").style.color = "#c4c4c4";
}

function selectAwards() {
    document.getElementById("awards_img").src = "images/icons/awardsIconSelected.png";
    document.getElementById("home_img").src = "images/icons/homeIcon.png";
    document.getElementById("hunts_img").src = "images/icons/huntsIcon.png";
    document.getElementById("game_img").src = "images/icons/gameIcon.png";
    document.getElementById("nav_home").style.color = "#c4c4c4";
    document.getElementById("nav_hunts").style.color = "#c4c4c4";
    document.getElementById("nav_game").style.color = "#c4c4c4";
    document.getElementById("nav_awards").style.color = "#0174cf";
}