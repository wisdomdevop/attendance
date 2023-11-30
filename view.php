<?php
$title = "view record";

require 'include/header.php';
require 'db/conn.php';

//get attendee by id 
if (!isset($_GET['id'])) {
    include 'include/errormsg.php';

} else {
    $id = $_GET['id'];

    $result = $creud->getAttendeeDetails($id);


    ?>

    <div class="card" style="width: 18rem;" align="center">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['Firstname'] . ' ' . $result['lastname'] ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
                <?php echo $result['name']; ?>
            </h6>
            <p class="card-text">
                Date of Birth:
                <?php echo $result['dateofbirth']; ?>
            </p>
            <p class="card-text">
                Email Address:
                <?php echo $result['Emailaddress']; ?>
            </p>
            <p class="card-text">
                Mobile Number:
                <?php echo $result['phonenumber']; ?>
            </p>

            </h6>

        </div>
    </div>

    <?php
}

?>
<br>
<br>
<br>


<?php
require 'include/footer.php';

?>