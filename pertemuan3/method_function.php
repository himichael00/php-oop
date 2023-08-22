<?php
class cars {
    function greeting(){

    }
    function greeting2(){
        
    }
}

$the_method = get_class_methods('cars');

foreach ($the_method as $result) {
    echo $result."<br>";
}
?>