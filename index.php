<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
for ($i = 0; $i < 10; $i++) {
    $txt= $faker->name . "\n";
    fwrite($myfile, $txt);
    $txt= $faker->address . "\n";
    fwrite($myfile, $txt);
    $txt= "========================="."\n";
    fwrite($myfile, $txt);
}
fclose($myfile);
?>