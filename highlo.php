<?PHP
// High Low Game!

// Welcome to the world of game development!

// You are going to build a game using the CLI.

// The specs for the game are:

// game picks a random number between 1 and 100.
// prompts user to guess the number
// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"
// Hints:

// Using conditionals and loops here is important
// Random numbers can be made with the internal rand() function
// If user is right, tell them they won
// While they are wrong, give them hints and keep asking
// Use exit(0) to end the game
// If you get stuck in game, ctrl-c will exit.

// Look up mt_rand() on PHP.net and use it in place of rand().

// Display number of guesses it took after outputting 'Good Guess!'

// !isNumberic($userGuess)

//Open your high-low game and add this feature. Commit and push to GitHub.

// TODO
// If there are 2 arguments passed, and both are numbers,
//  use the numbers to set the min and max on the random number generator.


$minNumber = $argv[1];
$maxNumber = $argv[2];

$number =  mt_rand($minNumber, $maxNumber);
	echo $number .  PHP_EOL;	
$guesses = 0;

do {
	$guesses++;
	fwrite(STDOUT,"Guess?");
	$userGuess = fgets(STDIN);

	// if (! is_numeric($userGuess)) {
	// 	echo "Please enter numbers only!" . PHP_EOL;
	// 	continue;
	// }
	
	
	if ($userGuess < $number) {
		echo "Higher!" . PHP_EOL;
	} else if($userGuess > $number) {
		echo "Lower" . PHP_EOL;
	} else {
		echo "You Win!!" . PHP_EOL;
		echo "It took you " . $guesses . " guesses." . PHP_EOL;	
	}

	} while ($userGuess != $number);


	