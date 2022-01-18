<?php
$filename = 'sample.txt';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);

    $pattern ="lorem ipsum";
    if(strpos($contents, $pattern) !== false){
        echo "<script>
                console.log('$pattern');
             </script>";
    }else{
        echo "Match not found.";
    } 
}
?>