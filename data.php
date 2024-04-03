<?php
$var = array("hemil" => 20, "jay" => 15, "Hemal" => 34);

foreach ($var as $key => $value) {
    $var[$key] = rand(1, 100);
    
}


echo  json_encode($var);

?>
