<?php
header('Content-Type: application/json');

    $aResult = array();
    if( !isset($_POST['list']) ) { $aResult['error'] = 'No items in list'; }
    if( !isset($_POST['email']) ) { $aResult['error'] = 'No email found'; }

    if( !isset($aResult['error']) ) {
        $to = $_POST['email'];
        $subject = "Favourites List";
        $body = $_POST['list'];
        mail($to,$subject,$body);
    }
?>