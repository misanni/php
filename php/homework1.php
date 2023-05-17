<?php
print
 '<h2>
Lorem ipsum dolor sit amet, 
consectetur adipiscing elit, 
sed do eiusmod tempor incididunt 
ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis 
 nostrud exercitation ullamco 
 laboris nisi ut aliquip ex ea 
 commodo consequat. Duis aute irure
  dolor in reprehenderit in 
  voluptate velit esse cillum 
  dolore eu fugiat nulla pariatur.
   Excepteur sint occaecat 
   cupidatat non proident, sunt 
   in culpa qui officia deserunt 
   mollit anim id est laborum.
   </h2>'; 
   echo '<br>';
   print
    '<p>
    Until recently, the prevailing view
     assumed lorem ipsum was born as a 
     nonsense text.its not Latin, though
      it looks like it, and it actually says
       nothing,” Before & After magazine
        answered a curious reader, “Its words
         loosely approximate the frequency with 
         which letters occur in English, which
          is why at a glance it looks pretty real.”
            As Cicero would put it, “Um, not so fast.”
                The placeholder text, beginning with the
                 line “Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit”, looks like Latin because
                   in its youth, centuries ago, it was Latin.
    </p>';
    echo '<button>Next Here</button>';
    echo '<br>';
    ///////////////////2//////////
    class human {
        public $fname;
        public $lname;
        public $developer;
        public $uiux;

       public function __construct($fname, $lname, $UIUX, $Developer) {
            $this-> fname=$fname;
            $this-> lname=$lname;
            $this-> role=$UIUX;
            $this-> job=$Developer;
        }
        public function message(){
            return 'My first name is  '.$this-> fname.' my last name is '
            .$this -> lname. ' and I work as a '  .$this-> role.$this -> job;
        }
    };
    $myjob=new human ('Mary,', 'Sanni', 'UI/UX ', 'Designer');
    echo $myjob-> message();

    ////////assignment/////////////////
//1............create a file for php: create the h2 tag with a sentence and p tag with 
//sentence add a br tag to it still inside the file create a button tag
//2...create a class call it human and let the object be firstname--last name--& career
//write a function to display my name is the 'object last name' concartenated with the 'first name' 
//  and i work as a object career 
?>