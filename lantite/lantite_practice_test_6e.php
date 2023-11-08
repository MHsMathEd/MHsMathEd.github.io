<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>LANTITE Numeracy Basic Test 1</title>
</head>
<body  onload="loadFunction()">  

<?php
// define some variables.

$Q[0] = "Find 5% of 60 kg.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "3";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " kg";
$Soln[0] = "10% = 6, so 5% = <b>3</b>";

$Q[1] = "Edition 1 of a textbook cost $40. The Second Edition cost 10% more than edition 1. What was the cost of a copy of the Second Edition?";
$QType[1] = 1;
$QAnswers[1] = "44";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "10% = $4<br>New cost = 100% + 10% = $40 + 4 = $<b>44</b>";

$Q[2] = "How many millimetres are equivalent to 3.8 metres?";
$QType[2] = 1;
$QAnswers[2] = "3800";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " mm";
$Soln[2] = "3.8 m = 380 cm = <b>3800</b> mm";

$Q[3] = "Karil buys two muffins for $3.55 each and two bottles of water for $1.70 each. How much change will he receive if he pays with a $20 note?";
$QType[3] = 1;
$QAnswers[3] = "9.50"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "total price = 2 \\(\\times\\) $3.55 + 2 \\(\\times\\) $1.70 = $10.50<br>Change from $20 = $20 - $10.50 = $<b>9.50</b>";

$Q[4] = "\\(3\\over 10\\) + \\(17\\over 100\\) = ";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("0.47","0.20","0.317","0.02");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "\\(3\\over 10\\) + \\(17\\over 100\\) = \\(30\\over 100\\) + \\(17\\over 100\\) = \\(47\\over 100\\) = 0.47, option <b>(a)</b>";

$Q[5] = "Find the volume of a tank that is 20 cm long, 10 cm wide and 20 cm high.";
$QType[5] = 1;
$QAnswers[5] = "4000";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " cm<sup>3</sup>";
$Soln[5] = "Volume = 20 \\(\\times\\) 10 \\(\\times\\) 20 = 4000 cm<sup>3</sup>";

$Q[6] = "How many hours is 165 minutes? Give your answer to 2 decimal places.";
$QType[6] = 1;
$QAnswers[6] = "2.75";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " hours";
$Soln[6] = "1 hour = 60 minutes<br>2 hours = 120 minutes<br>165 minutes = 2 hours and 45 minutes = <b>2.75</b> hours";

$Q[7] = "One ball of string is 50 metres long. How many kilometres of string are in twenty similar balls of string?";
$QType[7] = 1;
$QAnswers[7] = "1";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " km";
$Soln[7] = "length = 50 \\(\\times\\) 20 m = 1000 m = 1 km";

$Q[8] = "A pack of grammar workbooks that normally costs $270 is being sold with a 15% discount. What is the new cost of the pack of workbooks? Give your answer to the nearest cent.";
$QType[8] = 1;
$QAnswers[8] = "229.50"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "10% = $27, 5% = $13.50, 15% = $40.50<br>New cost = $270 - $40.50 = $229.50";

$Q[9] = "A student is sitting a 2 hour exam with 20 questions. After 90 minutes the student has answered 15 questions. How many minutes per question does the student have on average to answer the remaining questions?";
$QType[9] = 1;
$QAnswers[9] = "6";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " minutes";
$Soln[9] = "Time remaining = 30 minutes<br>Questions remaining = 5<br>Minutes per question = 30  \\(\\div\\) 5 = <b>6</b> minutes per question.";

$Q[10] = "A pack of biscuits costs $1.50. How many packs can the teacher buy with $20? Give your answer as a whole number of packs.";
$QType[10] = 1;
$QAnswers[10] = "13";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "1 pack = $1.50<br>2 packs = $3.00<br>4 packs = $6.00<br>8 packs = $12.00<br> 8 + 4 = 12 packs = $18.00<br>13 packs = $19.50<br>The teacher can buy <b>13</b> packs.";

$Q[11] = "1 hour and 18 minutes is equivalent to";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("18 minutes","48 minutes","68 minutes","78 minutes");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "1 h + 18 min = 60 min + 18 min = 78 min, option <b>(d)</b>";

$Q[12] = "220 thousand people voted in an election. 42 000 people voted for candidate A. What percentage of people voted for candidate A?";
$QType[12] = 0;
$QAnswers[12] = "b";
$QOptions[12] = array("17%","19%","21%","23%");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Percentage = 42000 \\(\\div\\) 220000 \\(\\times\\) 100 = 4200 \\(\\div\\) 220 = 420 \\(\\div\\) 22 = 19%, option <b>(b)</b>";


$_SESSION["Q"] = $Q;
$_SESSION["Qtype"] = $QType;
$_SESSION["QAnswers"] = $QAnswers;
$_SESSION["QOptions"] = $QOptions;
$_SESSION["prefix"] = $prefix;
$_SESSION["suffix"] = $suffix;
$_SESSION["Soln"] = $Soln;
$_SESSION["QNo"] = 0;
$_SESSION["QCorrect"] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
$_SESSION["YourAnswer"] = array("","","","","","","","","","","","","");

?>

<div style="<?php echo $EndQuiz;?>">
	<form method="post" action="lantite_test_engine.php" id = "formStartTest">
		<input type="hidden" name="reset" value="reset">
		<input type="submit" value="Start Test">
	</form>
</div>

<script>
	function loadFunction(){
		window.location.replace("lantite_test_engine.php").submit();
	}

</script>

</body>
</html>