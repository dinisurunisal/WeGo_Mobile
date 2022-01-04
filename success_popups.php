<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
#message_box {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
    border-radius: 25px !important;
    position: fixed;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 200px;
    height: 200px;
    z-index: 1101;
    padding: 5px;
    padding-top: 50px;
    background-color: #ffffff;
    display: none;
}

#icon{
    height:73px;
    width:58px;
}
</style>


<script>
function showSuccess(message) {
    $("#message_box").fadeIn();
    $("#popup_custom_message").html(message)
    $("#popup_custom_icon").html("check_circle")
    $("#message_box").css("background", "#ffffff")
    setTimeout(function() {
        $("#message_box").fadeOut();
    }, 2000);
}

function showFailure(message) {
    $("#message_box").fadeIn();
    $("#popup_custom_message").html(message)
    $("#popup_custom_icon").html("close")
    $("#message_box").css("background", "red")
    setTimeout(function() {
        $("#message_box").fadeOut();
    }, 2000);

}
</script>

<div id="message_box" style="text-align:center">
    <ion-icon id="icon" name="shield-checkmark" style="color:#0174cf;"></ion-icon>
    <h4 id="popup_custom_message" style="color: #0174cf;">Success
    </h4>
</div>