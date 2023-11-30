<?php
$title = 'index';
require 'include/header.php';
require_once 'db/conn.php';

if (isset($_POST['submit'])) {
    //extract values from post array
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    $contact = $_POST['Pnumber'];

    $specialty = $_POST['inlineRadioOptions'];
    $isSuccess = $creud->insert($fname, $lname, $email, $dob, $contact, $specialty);

    if ($isSuccess) {
        include 'include/successmsg.php';
    } else {
        include 'include/errormsg.php';
    }

}


?>




<?php
function myfunc()
{
    echo 'First Name : ' . $_POST['Fname'] . '<br/>';
    echo 'Last Name : ' . $_POST['Lname'] . '<br/>';
    echo 'Date of birth :  ' . $_POST['dob'] . '<br/>';
    echo 'Area of Expertise : ' . $_POST['inlineRadioOptions'] . '<br/>';
    echo 'Email address : ' . $_POST['email'] . '<br/>';
    echo 'Mobile Number : ' . $_POST['Pnumber'] . '<br/>';

    echo '' . $_POST['pic'];
}


?>

<!--<div class="card" style="width: 18rem;" align="center">
    <div class="card-body">
        <h5 class="card-title">
            <?php //echo $_POST['Fname'] . ' ' . $_POST['Lname'] ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php //echo $_POST['inlineRadioOptions']; ?>
        </h6>
        <p class="card-text">
            Date of Birth:
            <?php //echo $_POST['dob']; ?>
        </p>
        <p class="card-text">
            Email Address:
            <?php //echo $_POST['email']; ?>
        </p>
        <p class="card-text">
            Mobile Number:
            <?php //echo $_POST['Pnumber']; ?>
        </p>

        </h6>

    </div>
</div>
-->

<div class="card" style="width: 18rem;" align="center">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST['Fname'] . ' ' . $_POST['Lname'] ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $_POST['inlineRadioOptions']; ?>
        </h6>
        <p class="card-text">
            Date of Birth:
            <?php echo $_POST['dob']; ?>
        </p>
        <p class="card-text">
            Email Address:
            <?php echo $_POST['email']; ?>
        </p>
        <p class="card-text">
            Mobile Number:
            <?php echo $_POST['Pnumber']; ?>
        </p>

        </h6>

    </div>
</div>

<?php
include 'about.php';
?>

<?php
echo '<p></p>';
require 'include/footer.php';
?>