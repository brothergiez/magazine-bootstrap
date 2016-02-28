<?php

$x 			= json_decode('{"apnames":["DPRTOP00031/03-01AI-Br-AsrDesign","DPRTOP00031/03-01AI-TR-AsrDesign"]}');
$jml_data	= count($x->apnames);

//Fetch Data
// for($i=0; $i<=$jml_data; $i++){
// 	echo $x->apnames[$i]."<br>";
// }
echo json_encode($x->apnames);
?>