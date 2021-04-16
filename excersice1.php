<?php
function checkRepeat($numbers,$value)
{
    $arr = [];
for($i=0;$i <count($numbers); $i++)
{
    if ($numbers[$i] == $value)
    {
        array_push($arr, $numbers[$i]);
    }
}
return count($arr);
}
$array = [1,23,3,2,4,5,6,8,5,3,6,7,0,9,8,0,3,2,1];
$repeat = checkRepeat($array,3);
echo "2 repeat: "."$repeat"." "."agains";