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
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam <p>

    <form action="room_selection.php" method="POST">
    number of singlerooms: <input type="number" name="number_singlerooms" required><br>
    number of doublerooms: <input type="number" name="number_doublerooms" required><br>
    number of suites: <input type="number" name="number_suites" rqu><br>
    <input type="submit">

    <?php
    if (isset($_POST['number_suites'])) {
        $Total = $_POST["number_singlerooms"]*200 + $_POST["number_doublerooms"]*320 + $_POST["number_suites"]*400; 
        echo "Price: <br>";
        echo "price single rooms:" . $_POST["number_singlerooms"]*200 . "CHF <br>";
        echo "price double rooms:" . $_POST["number_doublerooms"]*320 . "CHF <br>";
        echo "price suites" . $_POST["number_suites"]*400 . "CHF <br>";
        echo "total:". $Total . "CHF";
        setcookie("amount_suite", $_POST["number_suites"]);
        setcookie("amount_single_room", $_POST["number_singlerooms"]);
        setcookie("amount_double_room", $_POST["number_doublerooms"]);
        setcookie("price", $Total);
        
    }
    ?>
    <script>
        if (document.cookie != "") {
            window.location.href = "personal_information.php";
        }
    </script>
</body>
</html>