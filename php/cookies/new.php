<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start session</title>
</head>
<body>
    <?php
    echo 'user name is'.$_SESSION['username'];
    ///create a structure of a medicle firm with its table and write the field of the table  : Note that table should not be less than 3 tables
    ?>
</body>
</html>