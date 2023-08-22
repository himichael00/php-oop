<?php
class fruits {
    function greeting(){
        echo "Hello Losers ";
    }
}


new fruits();

$apple = new fruits;
$grape = new fruits;

$apple->greeting();
// $the_method = get_class_methods('cars');

// foreach ($the_method as $result) {
//     echo $result."<br>";
// }
?>