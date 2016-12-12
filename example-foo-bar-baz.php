<?php 

class Example 
{ 
	public $one = 1; 
	public $two = 2; 
	public $three = ["quux" => 3]; 
}

$foo = new Example();

$bar = ["baz" => "one", "qux" => "two", "qax" => "three"];

echo $foo->{$bar["baz"]}; // Outputs: "1"

echo $foo->{$bar["qux"]}; // Outputs: "2"

echo $foo->{$bar["qax"]}; // Outputs: "Array" and causes an error

echo $foo->{$bar["qax"]}["quux"]; // Outputs: "3"

$bar = "three";

echo $foo->$bar["quux"]; // Outputs: "3"