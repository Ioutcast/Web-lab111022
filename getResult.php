<?php


function getResult($x, $y, $r)
{

    $ans = "Точка не в заданной области";

    if ($x <= 0) {
        if ($y >= 0 && $y <= $x - $r / 2)
            $point = true;
    } else {
        if ($y <= 0 && $x <= $r && $y >= $r * (-1))
            $point = true;

        if ($y >= 0 && ($y * $y + $x * $x) <= ($r * $r))
            $point = true;

    }

    if ($point == true)
        $ans = "Точка в заданной области";

    return $ans;
}

?>