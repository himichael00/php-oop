<?php
class gunpla {
    function greeting(){
        echo "Hello Losers ";
    }
}


new gunpla();

$the_method = get_class_methods('gunpla');

foreach ($the_method as $result) {
    echo $result."<br>";
}
?>