<?php
//echo "function " .$_GET['callback'] ."() {return ".json_encode(scandir('../dropzone/uploads/'))."}";
echo json_encode(scandir('../dropzone/uploads/'));
?>
