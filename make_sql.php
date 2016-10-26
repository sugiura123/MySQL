<?php

$file = "tokyo_post 5.csv";
$fp = fopen($file, "r");

$out = "output_text.sql";
$output = fopen($out, "w");

while (($array = fgetcsv($fp)) !=false) {
      $hundle = "insert into test1.yubin(number, kana1, kana2, kana3, kannji1, kannji2, kannji3 ) values ('{$array[2]}', '{$array[3]}','{$array[4]}', '{$array[5]}','{$array[6]}', '{$array[7]}','{$array[8]}');";

//var_dump($array);

      fputs($output, $hundle."\n");
}

      fclose($fp);

?>