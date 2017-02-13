<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>

	<style>
		html{font-family: Verdana, Tahoma, Arial; font-size: 14px; line-height: 1.6;}
		.Quiz{margin-bottom: 15px; border-bottom: 1px Black solid;}
		.Quiz > .Question{margin-bottom: 15px; font-weight: bold;}
		.Quiz > .Choice{margin-left: 15px;}
		.Quiz > .Choice > .Answer{margin-bottom: 5px;}
		.Quiz > .Choice > .Answer > label{cursor: pointer;}

		.QuizResultMessage{margin: auto; margin-top: 15px; width: 250px; border: 1px Blue solid; padding: 15px; text-align: center;}
		.QuizResultMessage > .Title{margin-bottom: 15px; border-bottom: 1px Blue solid; padding-bottom: 15px; color: Blue; font-weight: bold;}
	</style>
</head>

<body><?php
$Quiz = array(
	array(
		"Question" => "What is your preferred activity for hangout?",
		"AnswerChoice" => array(
			array(
				"Answer" => "Walk together",
				"Weight" => 10
			),
			array(
				"Answer" => "Watch a movie together",
				"Weight" => 2.5
			),
			array(
				"Answer" => "Go for a long drive",
				"Weight" => 5
			),
		)
	),
	array(
		"Question" => "What would be your favorite dish to share with your beloved one?",
		"AnswerChoice" => array(
			array(
				"Answer" => "Baked Salmon",
				"Weight" => 5
			),
			array(
				"Answer" => "Cashew nut Salad",
				"Weight" => 10
			),
			array(
				"Answer" => "Cheesy Pasta/Pizza",
				"Weight" => 2.5
			),
		)
	),
	array(
		"Question" => "What  is your favorite vacation plan with your valentine?",
		"AnswerChoice" => array(
			array(
				"Answer" => "Relaxing on beach",
				"Weight" => 2.5
			),
			array(
				"Answer" => "Shopping items from your wish list",
				"Weight" => 5
			),
			array(
				"Answer" => "Trekking hills and mountains",
				"Weight" => 10
			),
		)
	),
	array(
		"Question" => "What drink would you like to enjoy with your partner?",
		"AnswerChoice" => array(
			array(
				"Answer" => "Lemonade",
				"Weight" => 10
			),
			array(
				"Answer" => "Milkshake",
				"Weight" => 5
			),
			array(
				"Answer" => "Soft Drink",
				"Weight" => 2.5
			),
		)
	),
	array(
		"Question" => "What type of articles do you prefer reading with your partner?",
		"AnswerChoice" => array(
			array(
				"Answer" => "Fashion",
				"Weight" => 5
			),
			array(
				"Answer" => "Technology",
				"Weight" => 2.5
			),
			array(
				"Answer" => "Health & Lifestyle",
				"Weight" => 10
			),
		)
	),
);

if(isset($_POST["btnSubmit"])){
	$TotalWeight = 0;
	foreach($Quiz as $ThisQuizKey => $ThisQuiz)$TotalWeight = $TotalWeight + $ThisQuiz["AnswerChoice"][$_POST["Answer"][$ThisQuizKey]]["Weight"];

	if($TotalWeight < 20){
		$Message["Title"] = "Caution!!!";
		$Message["Detail"] = "(your lifestyle needs major changes. Look after your love immediately.)";
	}
	elseif($TotalWeight < 30){
		$Message["Title"] = "You love is at risk";
		$Message["Detail"] = "(Time to be a little more careful to your love through changes in your lifestyle)";
	}
	else{
		$Message["Title"] = "Healthy Love.";
		$Message["Detail"] = "(congratulation, you are perfectly taking care of your Valentine)";
	}

	print "<div class=\"QuizResultMessage\"><div class=\"Title\">{$Message["Title"]}</div>{$Message["Detail"]}</div>";
}
else{
	foreach($Quiz as $ThisQuizKey => $ThisQuiz){
		$HTML_AnswerChoice = null;
		foreach($ThisQuiz["AnswerChoice"] as $ThisAnswerChoiceKey => $ThisAnswerChoice)$HTML_AnswerChoice[] = "<div class=\"Answer\"><label><input type=\"radio\" name=\"Answer[{$ThisQuizKey}]\" value=\"{$ThisAnswerChoiceKey}\"" . ($ThisAnswerChoiceKey == 0 ? " checked" : null) . ">{$ThisAnswerChoice["Answer"]}</label></div>";

		$HTML[] = "<div class=\"Quiz\">
			<div class=\"Question\">Q." . ($ThisQuizKey + 1) . ": {$ThisQuiz["Question"]}</div>
			<div class=\"Choice\">" . implode(null, $HTML_AnswerChoice) . "</div>
		</div>";
	}

	print "<form action=\"./\" method=\"POST\">" . implode(null, $HTML) . "<button name=\"btnSubmit\" value=\"1\">Submit</button></button></form>";
}
?></body>
</html>