<?php

$title = 'successful';
require 'include/header.php';
require 'db/conn.php';

$results = $creud->getSpecialties();

?>

<h1 class="text-center">Registration for IT Conference</h1>


<form method="post" action="success.php">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Fname"
            required>

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Lname"
            required>

    </div>

    <div class="mb-3">
        <label for="datepicker" class="form-label">Date of birth</label>
        <input type="text" class="form-control" id="datepicker" aria-describedby="emailHelp" name="dob" required>

    </div>
    <label for="specialty">Area of specialty</label>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="specialty"
        name="inlineRadioOptions" required>
        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {


            ?>

            <option value="<?php echo $r['specialty_id'] ?>">
                <?php echo $r['name']; ?>
            </option>

        <?php } ?>
    </select>

    <p></p>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
            required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="phonenumber" aria-describedby="PhoneHelp" name="Pnumber" required>
        <div id="PhoneHelp" class="form-text">We'll never share your Number with anyone else.</div>
    </div>
    <p>
    </p>
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>

    <p></p>
    <br />
    <br>

</form>





<?php
echo '<p></p>';
require 'include/footer.php';
/**   
 *  <option value="1" selected>Database admin</option>
 *  <option value="2">Software engineer</option>
 *   <option value="3">Web developer</option>
 * <option value="4">Others</option>**/
?>