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
</body>
</html>