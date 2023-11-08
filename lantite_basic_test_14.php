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

$Q[0] = "Calculate 10% of 86";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "8.6";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "10% of 88 = 8.6";

$Q[1] = "Calculate 20% of 44";
$QType[1] = 1;
$QAnswers[1] = "8.8";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "10% = 4.4, so 20% = 8.8";

$Q[2] = "Calculate 0.75 of 16";
$QType[2] = 1;
$QAnswers[2] = "12";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "0.75 \\(\\times\\) 16 = 12";

$Q[3] = "Calculate 125% of 72";
$QType[3] = 1;
$QAnswers[3] = "90"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "50% of 72 = 36, so 25% of 72 = 18<br>125% of 72 = 72 + 18 = 90";

$Q[4] = "A box contains some balls. 25% of the balls in the box were counted and this was 20 balls. How many balls make up 50% of all the balls?";
$QType[4] = 1;
$QAnswers[4] = "40";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "If 20 balls = 25%, then 40 balls = 50%";

$Q[5] = "A box contains only red and white balls. The probability of randomly drawing a red ball is 0.75. There are 12 red balls. How many white balls are there?";
$QType[5] = 1;
$QAnswers[5] = "4";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "A probabilty of 0.75 means that 0.75 (or 75%) of the balls are red, so 0.25 (or 25%) of the balls are white. That is, one quarter of the balls are white and three quarters are red.<br>\\(\\frac{3}{4}\\) = 12 balls, so \\(\\frac{1}{4}\\) = 12 \\(\\div\\) 3 = 4 balls.<br> There are 4 white balls.";

$Q[6] = "Find \\(\\frac{3}{4}\\) of 0.88";
$QType[6] = 1;
$QAnswers[6] = "0.66";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "\\(\\frac{1}{4}\\) \\(\\times\\) 0.88 = 0.22, so \\(\\frac{3}{4}\\) \\(\\times\\) 0.88 = 0.66";

$Q[7] = "Find \\(\\frac{1}{2}\\) of 120";
$QType[7] = 1;
$QAnswers[7] = "60";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "\\(\\frac{1}{2}\\) \\(\\times\\) 120 = 60";

$Q[8] = "Find 20% of 2.2";
$QType[8] = 1;
$QAnswers[8] = "0.44"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "10% = 0.22, so 20% = 0.44";

$Q[9] = "Find 90% of 150";
$QType[9] = 1;
$QAnswers[9] = "135";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "10% = 15, so 90% = 100% - 10% = 150 - 15 = 135";

$Q[10] = "Find 5% of 140";
$QType[10] = 1;
$QAnswers[10] = "7";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "10% of 140 = 14, so 5% of 140 = 7";

$Q[11] = "Write \\(\\frac{9}{10}\\) as a percentage.";
$QType[11] = 1;
$QAnswers[11] = "90";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "%";
$Soln[11] = "\\(\\frac{9}{10}\\) = 90%";

$Q[12] = "The probability of randomly drawing a green ball from a bag of balls is 0.5. If there are 20 green balls in the bag, how many balls are there altogether?";
$QType[12] = 1;
$QAnswers[12] = "40";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Half the balls are green = 20 balls, so there are 40 balls in total.";

$Q[13] = "Calculate 0.25 \\(\\times\\) 64";
$QType[13] = 1;
$QAnswers[13] = "16";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "One quarter of 64 = 16";

$Q[14] = "Calculate 75% of 240";
$QType[14] = 1;
$QAnswers[14] = "180";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "50% = 120, so 25% = 60, so 75% = 180 (120 + 60, or 3 \\(\\times\\) 60)";

$_SESSION["Q"] = $Q;
$_SESSION["Qtype"] = $QType;
$_SESSION["QAnswers"] = $QAnswers;
$_SESSION["QOptions"] = $QOptions;
$_SESSION["prefix"] = $prefix;
$_SESSION["suffix"] = $suffix;
$_SESSION["Soln"] = $Soln;
$_SESSION["QNo"] = 0;
$_SESSION["QCorrect"] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
$_SESSION["YourAnswer"] = array("","","","","","","","","","","","","","","");

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