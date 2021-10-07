<?php

$data = "text.txt";
$bukafile = fopen($data, "r");
if (!$bukafile)
{
    print ("File $data gagal dibuka!");
    exit;
}
while (!feof($bukafile))
{
    $data = fgets($bukafile,50);
    print("$data <br>");
}
fclose($bukafile);
?>