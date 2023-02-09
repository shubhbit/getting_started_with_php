<?php
$file_name = "sample.txt";
$file_to_wright = "sample_wright.txt";

// reading file..
function file_read($file){
    $file_handle = fopen($file, "r");
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
}

function file_wright($file){
    $file_handle = fopen($file, "w");
    if ($file_handle  == false){
        print("error opening file..");
    }
    else {
        print("writing data into file..");
        fwrite($file_handle, "this is new text being written to file\nso that can be written");
        fclose($file_handle);
    }

}

// file writing
file_read($file_name);
file_wright($file_to_wright);
file_read($file_to_wright);

?>