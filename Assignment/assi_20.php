<?php
$cities=array("Dubai","Rajkot","Paris");
rsort($cities);
foreach($cities as $city)
{
    print_r($city);
    echo "<br>";
}
?>