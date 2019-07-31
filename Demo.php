<?php
require 'vendor/autoload.php';
class Demo{
    public $faker ;
    public $number;

    public  function __construct($number)
    {
        $this->number= $number;
        $this->faker = Faker\Factory::create();

    }

    public function information(){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        for ($i = 0; $i < $this->number; $i++) {
            $txt[]= $this->faker->name . "\n";
            $txt[]= $this->faker->phoneNumber."\n";
            $txt[]= $this->faker->address . "\n";
            $txt[]= "========================="."\n";
            foreach ($txt as $txt1){
                fwrite($myfile, $txt1);
            }

        }
        fclose($myfile);

    }
}

$file= new Demo(5);
$file->information();