<?php
   $x = "https://en.wikipedia.org/w/api.php?format=json&action=query&titles=Steve%20Jobs";
   $y = file_get_contents($x);
   echo "<pre>";
   $z = (json_decode($y,true));
   $id = array_keys($z['query']['pages']);
   print_r($id);
   exit();

?>