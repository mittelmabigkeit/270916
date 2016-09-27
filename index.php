<?php
$arr= array (
	"one"=>"1",
	"two"=>"2",
	"three"=>"3",
	"four"=>"4",
	"five"=>"5",
	);
print_r ($arr);
echo "<br>";
$array=array_flip($arr);
print_r ($array);
echo "<br>";
$a=array_keys($arr);
print_r ($a);
echo "<br>";
print_r (array_values($arr));
echo "<br>";
$asd=array_count_values($arr);
print_r ($asd);
echo "<br>";
print_r (array_slice($arr,2));
?>