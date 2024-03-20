<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <title>Room Selection</title>
</head>
<body>
    <?php include "components/header.html";?>
    <div class="form-container">
        <form action="personal_information.php" method="POST">
        Number of singlerooms: <input type="number" name="amount_single_room" required min="0"><br>
        Number of doublerooms: <input type="number" name="amount_double_room" required min="0"><br>
        Number of suites: <input type="number" name="amount_suite" required min="0"><br>
        <input type="submit" id="submit-button" value="Book">

    </div>
    <?php include "components/footer.html"; ?>
</body>
</html>