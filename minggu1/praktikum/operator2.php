<?php
$a = 5;
$b = 1;
echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br> ($a == $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
echo "<br> ($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));
?>