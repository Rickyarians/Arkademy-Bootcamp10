<?php
$datalain = [
    ['g','h','i','j'],
    ['a','c','b','e','d'],
    ['g','e','f']
];
function sortarray($datalain)
{
    for($i = 0; $i < count($datalain); $i++)
    {
        sort($datalain[$i]);
    }
    array_multisort($datalain);
    print_r($datalain);
}


sortarray($datalain);
?>
