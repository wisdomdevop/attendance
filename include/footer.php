<div>
    <br>
    <br>
    <br>
    <br>

    <?php
    echo '<p align="center">Copyright ' . date('y');
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0",
            dateFormat: "yy/mm/dd"
        });

    });
</script>

<script>
    function myBae() {
        let number = document.getElementById("number");
        if (isNaN(number)) {
            alert('phone number should not include letters');
        }
        else {
            return true;
        }
        console.log('error');
    }
</script>

</div>
</body>

</html>