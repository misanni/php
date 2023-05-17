<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php declare(strict_types=1);
    echo 'This is my first php script';
    echo '<br>';
    ////////
    $color='red';
    echo $color;
////////////
    $num=800;
    echo $num;
    $code='php';
    echo 'I love to code '. $code;
    ////////////
    $number=7;
    $secondnumber=14;
    echo $secondnumber - $number;
    //////////////////
    print '<h2>Learning php</h2>';
    ///////////
    //php data types//var_dump//
    $var1=12;
    var_dump($var1);
    $fname='Mary';
    var_dump($fname);
/////////////php array//////////////
$colors=array('red', 'blue', 'pink');
var_dump($colors);
///////////// class object//////////oop/
class car {
    public $color;
    public $model;
   public function __construct($color, $model) {
        $this-> color=$color;
        $this-> model=$model;
    }
    public function message(){
        return 'my car is a '.$this-> color.' '.$this -> model;
    }
};
$mycar=new car ('Pink', 'Toyota');
echo $mycar-> message();
///////////////string functions////////////////////////
echo strlen('Hello World');
echo str_word_count('This is the code i need');
echo strrev('Thank');
echo strpos('Thank you for installing easy auto refresh', 'installing');
echo str_replace('word ', 'soccer ', 'hello word is game');
////php numbers///////////
$var1=568;
$var2=864.555;
var_dump(is_int($var1));
var_dump(is_int($var2));
///////////php math////////
echo (pi());
echo '<br>';
echo (min(5, 4, 3, 2, 1, 9, 8, 7));
echo '<br>';
echo (max(5, 4, 3, 2, 1, 9, 8, 7));
echo (sqrt(81));
echo (round(0.35));
echo '<br>';
echo (rand(5, 10));
/////////////php operators///////addition
$e =56;
$c =21;
$sum =$e +$c;
echo $sum;
//divisions//
echo '<br>';
$d =64;
$i =8;
$div =$d / $i ;
echo $div;
///////////////
$op =65;
$po ='65';
var_dump($op!=$po);
////conditional assignment operator//
echo '<br>';
echo $status= (empty($user))?'anonymous':'loggedin';
echo '<br>';
 $user='Mary Sanni';
 echo $status= (empty($user))?'anonymous':'loggedin';
 //conditional statement//
 $var = 100;
 if ($var<50){
    echo 'the value is less than 50';
 } else {
    echo 'the value is greater than 50';
 }
 echo '<br>';
 ////switch stmnt///
 $fav ='yellow';
 switch($fav){
    case 'blue':
        echo 'your favorite color is blue';
        break;
        case 'red':
            echo 'your favorite color is red';
            break;
            case 'green':
                echo 'your favorite color is green';
                break;
                default:
                    echo 'your favorite color is neither blue, red nor green';

 };
 // for loop///
 for ($r=0; $r<=10; $r++) {
    echo "the number is $r <br>";
 }
 //while loop//
 $wh=1;
 while ($wh<=5){
    echo "the number is $wh <br>";
    $wh++;
 }
 // for each loop////
 $colors = array ('green', 'blue', 'white');
 foreach ($colors as $color){
    echo "$color is selected <br>";
 }
 ///array/////////
 $arr = array ('pencil', 'pen', 'paper', 'markers');
 echo $arr[0];
 echo '<br>';
 echo $arr[2]. ' is  not '. $arr[1];
 echo '<br>';
 echo count($arr);
 echo '<br>';
 var_dump($arr);
 /// php functions///
 function display($fname){
    echo "I am $fname";
 }
  display("mary");
  //caclulation finction//
 
  function calc(int $a, int $b) {
    return $a +$b;
  }
  echo calc(9, '2');




    ?>
</body>
</html>