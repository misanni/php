<?php
//write an if else , else if statement to display Good morning, good afternoon and good night with date function**
//use a switch statement to check if the variable password value is any of the casses==>
//succesful login &
//incorrect password
//3 write a function to multiply 2 numbers 
date_default_timezone_set('America/Chicago'); // Set the timezone to Houston, Texas
$currentTime = date("H"); // Get the current hour in 24-hour format
if ($currentTime >= 5 && $currentTime < 12) {
    echo "Good morning!";
} elseif ($currentTime >= 12 && $currentTime < 18) {
    echo "Good afternoon!";
} else {
    echo "Good night!";
}
echo '<br>';
//////////
function calc(int $a, int $b) {
  return $a * $b;
}
echo calc(7, 64);
echo '<br>';
///////////////////////////////
echo '<br>';
$psw ='password';
 switch($psw){
    case 'password':
        echo 'Succesful password';
        break;
        case 'pswd':
            echo 'incorrect password';
            break;
                default:
                    echo 'password space can not be blank';
 };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
  <h3>This is a contact page</h3>  
</body>
</html>