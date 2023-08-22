<?php
class gunpla {
    var $handcount = 2;
    var $footcount = 2;

    function gunpladetail(){
        echo "this gunpla has ".$this->handcount." hand";
    }
    function gunpladetail2(){
        echo "and this gunpla has ".$this->footcount." foot";
    }
}

$freedom = new gunpla();
$destiny = new gunpla();

// assigned value (value dari spesifik instance dapat diubah)
echo $freedom->handcount = 10;

echo "<br>";

// value yang diambil berdasarkan value awal pada blueprint (class gunpla)
echo $freedom->footcount;

echo "<br>";

echo $destiny->gunpladetail();

echo "<br>";

echo $destiny->gunpladetail2();
?>

