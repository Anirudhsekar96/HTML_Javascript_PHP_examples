<?php
$b[] ="Anirudh";
$b[] = "Mridul";
$b[] = "Megha";
$b[] = "Arjit";

$hint = "";
$a = $_REQUEST['t'];
// lookup all hints from array if $q is different from "" 
if ($a !== "") {
    $a = strtolower($a);
    $len=strlen($a);
    foreach($b as $name) {
        if (stristr($a, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
} 
//$a = $_REQUEST['t'];
var_dump($hint);

?>