<?php 

	libxml_use_internal_errors(true);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$answer1 = $_POST["Battleship"];
	$answer2 = $_POST["AI"];
	$answer3 = $_POST["Design"];
	$answer4 = $_POST["Incrementation"];
	$answer5 = $_POST["60"];

	$score = 0;

	if($answer1 == "Battleship"){
		$score += 20;
	}
	if($answer2 == "AI"){
		$score += 20;
	}
	if($answer3 == "Design"){
		$score += 20;
	}
	if($answer4 == "Incrementation"){
		$score += 20;
	}
	if($answer5 == "60"){
		$score += 20;
	}

	$result1 = "<p class='answer'>Question 1: What was the game we were required to build in the first project?<br>";
	$result1 .= "&emsp;You answered: ". $answer1;
	$result1 .= "<br>&emsp;Correct answer: Battleship</p>";

	$result2 = "<p class='answer'>Question 2: What was the custom addition to the game required by all teams for project 2?<br>";
	$result2 .= "&emsp;You answered: ". $answer2;
	$result2 .= "<br>&emsp;Correct answer: AI Opponent</p>";

	$result3 = "<p class='answer'>Question 3: What is the third stage in Design life-cyle model?<br>";
	$result3 .= "&emsp;You answered: ". $answer3;
	$result3 .= "<br>&emsp;Correct answer: Design</p>";

	$result4 = "<p class='answer'>Question 4: What does it mean to construct an artifact piece-by-piece?<br>";
	$result4 .= "&emsp;You answered: ". $answer4;
	$result4 .= "<br>&emsp;Correct answer: Incrementation</p>";

	$result5 = "<p class='answer'>Question 5: What is the percentage of effort devoted to implementation and testing workflows in iteration and incrementation?<br>";
	$result5 .= "&emsp;You answered: ". $answer5;
	$result5 .= "<br>&emsp;Correct answer: 60</p>";

    
    echo "<p><h1><b><i><u> Results!!! </u></i></b></h1></p>";
    echo "{$result1}";
	echo "{$result2}";
	echo "{$result3}";
	echo "{$result4}";
	echo "{$result5}";
	echo "<p class='score'><strong>You got " . $score/20 . "/5 answers correct. <br>You earned " . $score . "%.</strong></p>";

	

?>