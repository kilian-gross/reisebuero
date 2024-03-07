<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <title>Room Selection</title>
</head>
<body>
    <?php # include "components/header.html";?>
    <?php $hotelname = "great hotel" ;?>
    <?php echo "<h2>" . "Book now " . $hotelname . "<h2\>" ?> <br>
    <?php #echo "<img src='htdocs/reisebuero/resources/images.jpeg'/>" ?> <br>
    <?php echo "<p>" . "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam" . "<p>"?>

    <form action="number_of_rooms.php" method="POST">
    Anzahl Einzelzimmer: <input type="int" name="number_singlerooms"><br>
    Anzahl Doppelzimmer: <input type="int" name="number_doublerooms"><br>
    <input type="submit" value="book">

</body>
</html>