<?php

if ($argc == 1){
	$computer = mt_rand(0,100);
} else {
	$computer = mt_rand($argv[1], $argv[2]);
}


do {
	
	fwrite(STDOUT, "Guess a number: ".PHP_EOL);

	$user = fgets(STDIN);
	
	if($user == $computer){
		echo ("GOOD GUESS").PHP_EOL;
		break;
	} 
	if ($user < $computer){
		echo ("HIGHER").PHP_EOL;
		continue;
	}
	if ($user > $computer){
		echo ("LOWER").PHP_EOL;
		continue;
	}
} while ($user != $computer);
