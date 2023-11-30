<?php
require_once 'db/conn.php';
if (!$_GET['id']) {
    include 'include/errormsg.php';
} else {
    $id = $_GET['id'];
    $result = $creud->deleteAttendee($id);
    //

    if ($result) {
        // header is used to redirect to pages
        header("location: viewrecord.php");
    } else {
        include 'include/errormsg.php';
    }
}





?>