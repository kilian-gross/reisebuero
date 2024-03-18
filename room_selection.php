<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <title>Room Selection</title>
</head>
<body>
    <?php # include "components/header.html";?>
    <?php $hotelname = "great hotel" ; ?>
    <?php echo "Book now"  ; $hotelname ; #"<h2\>"; ?> <br>
    <?php #echo "<img src='htdocs/reisebuero/resources/images.jpeg'/>" ?> <br>

    <form action="room_selection.php" method="POST">
    Number of singlerooms: <input type="number" name="number_singlerooms" required><br>
    Number of doublerooms: <input type="number" name="number_doublerooms" required><br>
    Number of suites: <input type="number" name="number_suites" required><br>
    <input type="submit">

    <?php
    if (isset($_POST['number_suites'])) {
        $Total = $_POST["number_singlerooms"]*200 + $_POST["number_doublerooms"]*320 + $_POST["number_suites"]*400; 
        setcookie("amount_suite", $_POST["number_suites"]);
        setcookie("amount_single_room", $_POST["number_singlerooms"]);
        setcookie("amount_double_room", $_POST["number_doublerooms"]);
        setcookie("price", $Total);
        
    }
    ?>
</body>
</html>