<?php
$bar="user";
$value="Mary";
setcookie($bar, $value, time()+(86400*30));
echo time()+(86400*30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE[$bar])){
     echo "cookie named '".$bar."' is not set";

    } else {
        echo "cookie '".$bar."' is set <br>"; 
      
        echo "value is " .$_COOKIE[$bar];
    }
    ?>
</body>
</html>