<?php

require_once 'db/conn.php';
$title = 'Edited';



//get values from post operation
if (isset($_POST['submit'])) {
    //extract values from post array
    $id = $_POST['id'];
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    $contact = $_POST['Pnumber'];

    $specialty = $_POST['inlineRadioOptions'];

    // call creud function

    $result = $creud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);


    //redirect to index.php
    if ($result == true) {
        // header is used to redirect to pages
        header("Location:viewrecord.php");
    } else {
        include 'include/errormsg.php';
    }

} else {
    include 'include/errormsg.php';
}

//get values from post operations








?>