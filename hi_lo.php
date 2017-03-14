<?php
$firstNum = $argv[1];
$secondNum = $argv[2];

if(sizeof($argv) < 3){
	fwrite(STDERR, "Not enough arguments, please guess a number between 0-100.".PHP_EOL);
	$firstNum = 1;
	$secondNum = 100;
}

do{
	if (!is_numeric($firstNum)){
		fwrite(STDERR, "First argument is not a number, please try again: " .PHP_EOL);
		$firstNum = trim(fgets(STDIN));
	}
	if (!is_numeric($secondNum)){
		fwrite(STDERR, "Second argument is not a number, please try again: " .PHP_EOL);
		$secondNum = trim(fgets(STDIN));
	}
} while (!is_numeric($firstNum) || !is_numeric($secondNum));

$computer = rand($firstNum, $secondNum);

do {
	
	fwrite(STDOUT, "Guess a number: ".PHP_EOL);

	$user = trim(fgets(STDIN));
	if (is_numeric($user)){

		if ($user == $computer){
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
	} else {
		echo "Please use numbers only.".PHP_EOL;
	}

} while ($user != $computer);
