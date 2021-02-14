<?php
$x = rand(-20, 35);
$n = round($x);
echo "Температура $n";
if ($x < 0)
    echo "<div style='color:red'>Мороз!</div>";
if ($x == 0)
    echo "<div style='color:yellow'>Не мороз и не тепло…</div>";
if ($x > 0)
    echo "<div style='color:green'>Тепло!</div>";

?>
