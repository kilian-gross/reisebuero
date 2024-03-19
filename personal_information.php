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
                if (isset($_POST["amount_suite"])) {
                    $total = $_POST["amount_single_room"]*200 + $_POST["amount_double_room"]*320 + $_POST["amount_suite"]*400;
                    setcookie("amount_suite", $_POST["amount_suite"]);
                    setcookie("amount_single_room", $_POST["amount_single_room"]);
                    setcookie("amount_double_room", $_POST["amount_double_room"]);
                    setcookie("price", $total);
                    echo "<p>Total: {$total} CHF</p>";
                }
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
            /*$db_drop = $conn->prepare("DROP DATABASE Touch_Grass");
            $db_drop->execute();
            $db_drop->close();*/
            $db_setup = $conn->prepare("CREATE DATABASE IF NOT EXISTS Touch_Grass");
            $db_setup->execute();
            $db_setup->close();

            $conn->select_db("Touch_Grass");

            $table_setup = $conn->prepare("CREATE TABLE IF NOT EXISTS Bookings(
                id INT NOT NULL AUTO_INCREMENT,
                hotel VARCHAR(255),
                amount_suite INT,
                amount_single_room INT,
                amount_double_room INT,
                price INT,
                first_name VARCHAR(255),
                surname VARCHAR(255),
                date_of_birth DATE,
                email VARCHAR(255),
                phone_number VARCHAR(255),
                home_address VARCHAR(255),
                city VARCHAR(255),
                postal_code VARCHAR(255),
                PRIMARY KEY(id)
            )");
            $table_setup->execute();
            $table_setup->close();

            $db_insertion = $conn->prepare("INSERT INTO Bookings (
                                                                hotel, 
                                                                amount_suite, 
                                                                amount_single_room, 
                                                                amount_double_room,
                                                                price,
                                                                first_name,
                                                                surname,
                                                                date_of_birth,
                                                                email,
                                                                phone_number,
                                                                home_address,
                                                                city,
                                                                postal_code
                                                                ) 
                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $db_insertion->bind_param("siiiissssssss", 
                                    $_COOKIE['hotel_selection'], 
                                    $_COOKIE['amount_suite'], 
                                    $_COOKIE['amount_single_room'],
                                    $_COOKIE['amount_double_room'],
                                    $_COOKIE['price'],
                                    $_POST['name'],
                                    $_POST['surname'],
                                    $_POST['date_of_birth'],
                                    $_POST['email'],
                                    $_POST['phone_number'],
                                    $_POST['address'],
                                    $_POST['city'],
                                    $_POST['postal_code'],
            );
            if ($db_insertion->execute() === TRUE) {
                echo "<script> window.location.href = 'homepage.php'; </script>";
            } else {
                echo "Error setting database up: " . $conn->error;
            }
        }

        $conn->close();
    ?> 
</body>
</html>