<?php




if(array_key_exists('button2', $_POST)) {
    button2();
}

function button2() {
    include('config.php');
    $dob =trim($_POST['dob']);

    $selectQuery = ("SELECT * FROM born WHERE dob = '$dob' ");


    $result = mysqli_query($con,$selectQuery);




    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Firstname</th>";
        echo "<th>Lastname</th>";
        echo "<th>DOB</th>";
        echo "</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $res->free();
    } else {
        echo "No matching records are found.";
    }


    mysqli_close($con);

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search</title>

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
<section>
    <h1>Newborn</h1>



    <form method="post">

        <input type="date"  name="dob" id="dob" required="required" maxlength="80">
        <input type="submit" name="button2"
               class="button" value="Button2" />
    </form>

</section>
</body>

</html>