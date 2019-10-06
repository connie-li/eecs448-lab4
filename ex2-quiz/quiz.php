<?php
	$score = 0;
    $q1answer = $_POST["1"];
    $q2answer = $_POST["2"];
    $q3answer = $_POST["3"];
    $q4answer = $_POST["4"];
    $q5answer = $_POST["5"];

    if($q1answer == "Sandy")
    {
    	$score++;
    }
    if($q2answer == "Ignotus")
    {
    	$score++;
    }
    if($q3answer == "Japanese Wood Pigeon")
    {
    	$score++;
    }
    if($q4answer == "Temple of Mara")
    {
    	$score++;
    }
    if($q5answer == "March 2019")
    {
    	$score++;
    }

    echo '<h4>You scored ', $score / 5 * 100, '% with ', $score, ' correct answers.</h4>';

    echo "<div><p>Question 1: Who is Basil the basil's best friend?</p>";
    echo '<p>You answered: ', $q1answer, '</p>';
    echo '<p>Correct answer: Sandy</p></div>';

    echo "<div><p>Question 2: Which Peverell brother owned the Invisibility Cloak?</p>";
    echo '<p>You answered: ', $q2answer, '</p>';
    echo '<p>Correct answer: Ignotus</p></div>';

    echo '<div><p>Question 3: Which species of bird belongs to the <em>Columbidae</em> family?</p>';
    echo '<p>You answered: ', $q3answer, '</p>';
    echo '<p>Correct answer: Japanese Wood Pigeon</p></div>';

    echo '<div><p>Question 4: Which temple should you visit when you want to get married?</p>';
    echo '<p>You answered: ', $q4answer, '</p>';
    echo '<p>Correct answer: Temple of Mara</p></div>';

    echo '<div><p>Question 5: When did Basil the basil sprout?</p>';
    echo '<p>You answered: ', $q5answer, '</p>';
    echo '<p>Correct answer: March 2019</p></div>';
?>
