<?php
include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Newborn</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <?php
    $error_message = "";
    $success_message = "";


    if (isset($_POST['btn_signup'])) {
        $f_name = trim($_POST['f_name']);
        $l_name = trim($_POST['l_name']);
        $dob =trim($_POST['dob']);


        $isValid = true;

        // Check fields are empty or not
        if ($f_name == '' || $l_name == '' || $dob == '') {
            $isValid = false;
            $error_message = "Please fill all fields.";
        }

        // Insert records
        if ($isValid) {
            $sql = "INSERT INTO born (first_name,last_name,dob) VALUES ( '$f_name' , '$l_name' , '$dob' )";

            if (mysqli_query($con, $sql)) {
                header("Location: index.php");


            } else {
                echo "ERROR Could not able to execute $sql" . mysql_error($con);
            }


            mysqli_close($con);


        }

    }
    ?>
</head>
<body>
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2></h2>
        </div>

        <div class='col-md-6'>

            <form method='post' action=''>

                <h1>Newborn</h1>
                <?php
                // Display Error message
                if (!empty($error_message)) {
                    ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?= $error_message ?>
                    </div>

                    <?php
                }
                ?>

                <?php
                // Display Success message
                if (!empty($success_message)) {
                    ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?= $success_message ?>
                    </div>

                    <?php
                }
                ?>

                <div class="form-group">
                    <label for="f_name">First Name:</label>
                    <input type="text" class="form-control" name="f_name" id="f_name" required="required"
                           maxlength="80">
                </div>
                <div class="form-group">
                    <label for="l_name">Last Name:</label>
                    <input type="text" class="form-control" name="l_name" id="l_name" required="required"
                           maxlength="80">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Bird:</label>
                    <input type="date" class="form-control" name="dob" id="dob" required="required" maxlength="80">
                </div>


                <button type="submit" name="btn_signup" class="btn btn-default">Submit</button>
            </form>
        </div>


    </div>
</div>
</body>
</html>






