<?php
class creud
{
    // private database object\

    private $db;

    //constructor to initialise private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }
    public function insert($fname, $lname, $dob, $email, $contact, $specialty)
    {
        try {
            //define sql statement to be executed
            $sql = "INSERT INTO attendee(Firstname, lastname,dateofbirth,Emailaddress,phonenumber,specialty_id) VALUES(:fname,:lname,:email,:contact,:dob,:specialty)";
            //prepare the sql statement for executio
            $stnt = $this->db->prepare($sql);
            //bind all placeholder to the actual value
            $stnt->bindparam('fname', $fname);

            $stnt->bindparam('lname', $lname);

            $stnt->bindparam('dob', $dob);
            $stnt->bindparam('email', $email);
            $stnt->bindparam('contact', $contact);
            $stnt->bindparam('specialty', $specialty);

            $stnt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();

            // throw new PDOException($e->getMessage());
        }

    }
    public function deleteAttendee($id)
    {
        try {
            $sql = "DELETE FROM `attendee` WHERE attendee_id=:id";
            $stnt = $this->db->prepare($sql);
            //bind all placeholder to the actual value
            $stnt->bindparam(':id', $id);
            $stnt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty)
    {
        try {
            $sql = " UPDATE `attendee` SET `Firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`Emailaddress`=:email,`phonenumber`=:contact,`specialty_id`=:specialty WHERE attendee_id = :id";

            $stnt = $this->db->prepare($sql);
            //bind all placeholder to the actual value
            $stnt->bindparam(':id', $id);
            $stnt->bindparam('fname', $fname);
            $stnt->bindparam('lname', $lname);

            $stnt->bindparam('dob', $dob);
            $stnt->bindparam('email', $email);
            $stnt->bindparam('contact', $contact);
            $stnt->bindparam('specialty', $specialty);

            $stnt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getAttendees()
    {
        try {
            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getSpecialties()
    {
        try {
            $sql = "SELECT * FROM `specialties`;";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getAttendeeDetails($id)
    {
        try {
            $sql = "select * from attendee  a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id= :id";
            $stnt = $this->db->prepare($sql);
            $stnt->bindparam(':id', $id);
            $stnt->execute();
            $result = $stnt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }
}

?>