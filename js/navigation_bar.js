$(function initialize() {
    resetColor();
    if(window.location.pathname.endsWith("homepage.php")){
        selectHome();
    } else if (window.location.pathname.endsWith("my_hunts.php")) {
        selectHunts();
    } else if (window.location.pathname.endsWith("treasure_hunt.php")) {
        selectGame();
    } else if (window.location.pathname.endsWith("awards.php")){
        selectAwards();
    }
});

function selectHome() {
    document.getElementById("home_icon").style.fill = "#0174cf";
}

function selectHunts() {
    document.getElementById("hunts_icon").style.fill = "#0174cf";
}

function selectGame() {
    document.getElementById("game_icon").style.fill = "#0174cf";
}

function selectAwards() {
    document.getElementById("awards_icon").style.fill = "#0174cf";
}

function resetColor() {
    document.getElementById("home_icon").style.fill = "#c4c4c4";
    document.getElementById("hunts_icon").style.fill = "#c4c4c4";
    document.getElementById("game_icon").style.fill = "#c4c4c4";
    document.getElementById("awards_icon").style.fill = "#c4c4c4";
}