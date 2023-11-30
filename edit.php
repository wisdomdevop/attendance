<?php

$title = 'Edit-Record';
require 'include/header.php';
require 'db/conn.php';

$results = $creud->getSpecialties();
if (!isset($_GET['id'])) {
    include 'include/errormsg.php';
} else {
    $id = $_GET['id'];
    $attendee = $creud->getAttendeeDetails($id);


    ?>

    <h1 class="text-center">Edit Records</h1>


    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?> " />
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" value="<?php echo $attendee['Firstname']; ?>" class="form-control" id="firstname"
                aria-describedby="emailHelp" name="Fname">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" value="<?php echo $attendee['lastname']; ?>" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="Lname">

        </div>

        <div class="mb-3">
            <label for="datepicker" class="form-label">Date of birth</label>
            <input type="text" value="<?php echo $attendee['dateofbirth']; ?>" class="form-control" id="datepicker"
                aria-describedby="emailHelp" name="dob">

        </div>
        <label for="specialty">Area of specialty</label>
        <select class="form-select form-select-lg mb-3" id="specialty" name="inlineRadioOptions">
            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {


                ?>

                <option value="<?php echo $r['specialty_id'] ?>" <?php if ($r['specialty_id'] == $attendee['specialty_id'])
                       echo 'selected' ?>>
                    <?php echo $r['name']; ?>
                </option>

            <?php } ?>
        </select>

        <p></p>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" value="<?php echo $attendee['Emailaddress']; ?>" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="text" value="<?php echo $attendee['phonenumber']; ?>" class="form-control"
                id="exampleInputPassword1" aria-describedby="PhoneHelp" name="Pnumber">
            <div id="PhoneHelp" class="form-text">We'll never share your Number with anyone else.</div>
        </div>


        <button type="submit" class="btn btn-success btn-lg" name="submit">Save changes</button>

        <p></p>
        <br />
        <br>

    </form>

    <?php
}
?>


<?php
echo '<p></p>';
require 'include/footer.php';
/**   
 *  <option value="1" selected>Database admin</option>
 *  <option value="2">Software engineer</option>
 *   <option value="3">Web developer</option>
 * <option value="4">Others</option>**/
?>