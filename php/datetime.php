<?php
echo 'Today is '.date('Y-m-d');
echo '<br>';
//////letter L is for the letter of the date
echo 'Today is '.date('l');
echo '<br>';
//i ==minutes  sa=seconds am or pm
echo 'The time is '.date('H:i:sa');
echo '<br>';
///openup a text file
$myFile= fopen('txt.txt', 'r') or die('unable to open file');
echo fread($myFile,filesize('txt.txt'));
fclose($myFile);
////////////////////// to create and write in a file
$var=fopen('theFile.txt', 'w') or die ('unable to open file');
//    \n is to move a text to a new line
$txt="The simplest way to post your jobs \n ";
fwrite($var, $txt);
$txt="Use this template";
fwrite($var, $txt);
fclose($var);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and time in php</title>
</head>
<body>

</body>
</html>