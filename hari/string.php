<?php
$str = "This is";
echo $str; echo "<br>";

$lenn = strlen($str);
echo "The length of this strings=";
echo $lenn; echo "<br>";

echo "The number of this strings is =";
echo str_word_count($str); echo "<br>";

echo "The length of this string is =" . $lenn  .". Thank you" ;  echo "<br>";
echo "The number of words in this string is =" . str_word_count($str);  echo "<br>";
echo "The reversed string is =" . strrev($str);  echo "<br>";
echo "The Search for is in this string is =" . strpos($str, "is");  echo "<br>";
echo "The replace string is =" . str_replace("is","at",$str);  echo "<br>";

?>