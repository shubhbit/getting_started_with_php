<?php
$file_name = "sample.txt";
$file_handle = fopen($file_name, "r");
if ($file_handle == false){
    print("error opening file..");
}
else {
    $size = filesize($file_name);
    print("\nfile size: " . $size);
    $text = fread($file_handle, $size);
    print("\nfile text: " . $text);
    fclose($file_handle);
}
?>