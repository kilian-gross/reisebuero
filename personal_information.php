<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forms.css">
    <title>Personal Information</title>
</head>
<body>
    <?php include "components/header.html"; ?>
    <div class="form-container">
        <form action="<?php __FILE__ ?>" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" required>

            <label for="date-of-birth">Date of birth</label>
            <input type="date" id="date-of-birth" name="date_of_birth" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone-number">Phone number</label>
            <input type="tel" id="phone-number" name="phone_number" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" required>

            <label for="postal-code">Postal code</label>
            <input type="text" id="postal-code" name="postal_code" required>

            <?php 
                $total = $_POST["number_singlerooms"]*200 + $_POST["number_doublerooms"]*320 + $_POST["number_suites"]*400; 
                echo $total;
            ?>

            <input type="submit" value="Book" id="submit-button">
        </form>
    </div>

    <?php
        $config = parse_ini_file("config.ini");

        $servername = $config["db_url"];
        $username = $config["db_username"];
        $password = $config["db_password"];

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST['name'])) {
 
        // Create database
            $sql = "CREATE DATABASE IF NOT EXISTS Touch_Grass;
                    CREATE TABLE IF NOT EXISTS Bookings(
                        id INT,
                        hotel VARCHAR,
                        amount_suite SMALLINT,
                        amount_single_room SMALLINT,
                        amount_double_room SMALLINT,
                        price INT,
                        first_name VARCHAR,
                        surname VARCHAR,
                        date_of_birth DATE,
                        email VARCHAR,
                        phone_number VARCHAR,
                        home_address VARCHAR,
                        city VARCHAR,
                        postal_code VARCHAR,
                        PRIMARY KEY (id)
                    );
                    INSERT INTO Bookings VALUES(
                        {$_POST['hotel_selection']}, 
                        {$_POST['amount_suite']}, 
                        {$_POST['amount_single_room']},
                        {$_POST['amount_double_room']},
                        {$total},
                        {$_POST['name']},
                        {$_POST['surname']},
                        {$_POST['date_of_birth']},
                        {$_POST['email']},
                        {$_POST['phone_number']},
                        {$_POST['address']},
                        {$_POST['city']},
                        {$_POST['postal_code']},
                    );";
            if ($conn->multi_query($sql) === TRUE) {
            echo "Set up successful";
            } else {
            echo "Error setting database up: " . $conn->error;
            }
        }

        $conn->close();
    ?> 
</body>
</html>