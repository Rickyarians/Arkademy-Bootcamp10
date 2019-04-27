<?php



$datalain = [
    ['g','h','i','j'],
    ['a','c','b','e','d'],
    ['g','e','f']
];


function sortarray($datalain)
{
    array_multisort($datalain);
    print_r($datalain);


}


sortarray($datalain);


?>