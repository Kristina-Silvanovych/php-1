<?php
$x = rand(-20, 35);
$n = round($x);
echo "Температура $n";
if ($x < 0)
    echo "<h1 color=red>Мороз!";
if ($x == 0)
    echo "<h1 color=red>Не мороз и не тепло…";
if ($x > 0)
    echo "<h1 color=red>Тепло!";      

?>
