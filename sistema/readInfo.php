<?php

$ghi = $_GET["id"];

$jkl = file("cadastros/$ghi");

foreach($jkl as $mno){
    echo $mno."<br>";
}

