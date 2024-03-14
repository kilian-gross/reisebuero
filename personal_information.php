<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>
<body>
    <form action="<?php __FILE__ ?>" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" required>

        <label for="surname">Surname</label>
        <input type="text" id="surname" required>

        <label for="date-of-birth">Date of birth</label>
        <input type="date" id="date-of-birth" required>

        <label for="email">Email</label>
        <input type="email" id="email" required>

        <label for="phone-number">Phone number</label>
        <input type="tel" id="phone-number" required>

        <label for="address">Address</label>
        <input type="text" id="address" required>

        <label for="city">City</label>
        <input type="text" id="city" required>

        <label for="postal-code">Postal code</label>
        <input type="text" id="postal-code" required>

        <input type="submit" value="Book">
    </form>

    <?php
        $servername = "localhost:8889";
        $username = "root";
        $password = "root";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

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
                );";
        if ($conn->multi_query($sql) === TRUE) {
        echo "Set up successful";
        } else {
        echo "Error creating database: " . $conn->error;
        }

        $conn->close();
    ?> 
</body>
</html>