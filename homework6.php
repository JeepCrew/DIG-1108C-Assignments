<?php

// 1. User enters a number between 1-100
// 2. Computer randomly selects a number 1-100
// 3. The values of the two numbers are comapred
// 4. If the user number is higher than the computer number, they win
// 5. If the user number is lower, they lose
// 6. If the numbers are the same they draw
// 7. The outcome of the hand is displayed
// 8. The running total of each hand is displayed

//User generated number
function user_number(){
	$user_number = 50;
	if ($user_number <= 100 && $user_number >= 1) {
		return $user_number;
	} else {
		echo 'Invalid User Number';
	}
}

//Computer generated number
function comp_number() {
	$comp_number = rand(1, 100);
	return $comp_number;
}

//Compare number values
$user = user_number();
$comp = comp_number();
function compare_numbers($user, $comp){
	if ($user < $comp) {
		$outcome = 'Lose';
	} elseif ($user > $comp) {
		$outcome = 'Win';
	} elseif ($user === $comp) {
		$outcome = 'Draw';
	} else {
		$outcome = 'Error';
	}
	
	return $outcome;	
}

$outcome = compare_numbers($user, $comp);

function display($user, $comp, $outcome) {
	return 'User: ' . $user . ' Computer: ' . $comp . ' Outcome: ' . $outcome;
}

echo display($user, $comp, $outcome);

