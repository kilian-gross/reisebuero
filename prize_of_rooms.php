<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prize of rooms</title>
</head>
<body>
  <?php $Total = $_POST["number_singlerooms"]*200 + $_POST["number_doublerooms"]*320; ?>
  Prize:<br>
  prize single rooms: <?php echo $_POST["number_singlerooms"]*200; ?> CHF<br>
  prize double rooms: <?php echo $_POST["number_doublerooms"]*320; ?> CHF<br>
  total: <?php echo $Total; ?> CHF
</body>
</html>