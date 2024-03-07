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
        <input type="text" id="name" >

        <label for="surname">Surname</label>
        <input type="text" id="surname" >

        <label for="email">Email</label>
        <input type="email" id="email" >

        <label for="date-of-birth">Date of birth</label>
        <input type="date" id="date-of-birth" >

        <label for="phone-number">Phone number</label>
        <input type="tel" id="phone-number" >

        <label for="address">Address</label>
        <input type="text" id="address" >

        <label for="postal-code">Postal code</label>
        <input type="text" id="postal-code" >

        <label for="city">City</label>
        <input type="text" id="city" >

        <input type="submit" value="Book">
    </form>
</body>
</html>