<?php
$file = 'art-kleiner-catalogue.pdf'; 
// Avoid caching 
header("Pragma: public"); 
header("Expires: 0"); 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Cache-Control: private",false); 

// Download the file 
header("Content-type: application/force-download"); 
header("Content-Disposition: attachment; filename=\"".basename($file)."\";" ); 
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize($file)); 
readfile("$file"); 
exit();  
?>