<?php

$computerGuess = rand (0,100);

do {
	
	fwrite(STDOUT, "Guess a number".PHP_EOL);

	$userGuess = fgets(STDIN);
	
	if($userGuess == $computerGuess){
		echo ("GOOD GUESS").PHP_EOL;
		break;
	} 
	if ($userGuess < $computerGuess){
		echo ("HIGHER").PHP_EOL;
		continue;
	}
	if ($userGuess > $computerGuess){
		echo ("LOWER").PHP_EOL;
		continue;
	}
} while ($userGuess != $computerGuess);
