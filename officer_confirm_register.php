<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>

    <!-- main -->
    <?php include 'component/main_officer_confirm_register.php' ?>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('#form_enroll_no').submit(function(e) {
            let id_enroll_no = $("#id_enroll_no").val();
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'php/php_officer_confirm_register.php',
                data: {
                    id_enroll_no: id_enroll_no
                },
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.success == true) {
                        $('#info_register_namelname').text(response.company.company_name);
                        $('#info_register_birthday').text(response.company.enroll_start);
                        $('#info_register_citicenid').text(response.company.enroll_no);
                        $('#info_register_phonenumber').text(response.company.company_phone);
                        $('#info_register_email').text(response.company.company_email);
                        $('#info_register_address').text(response.company.company_address);
                        $('#info_register_address_storage').text(response.company.company_address_storage);
                    } else {

                    }
                }
            });
        });
    });
    </script>
</body>

</html>