$(document).on("pageinit", initialize);

function initialize(){
    document.getElementById("back_btn").addEventListener("click", function(){
        window.history.back();
    });
};