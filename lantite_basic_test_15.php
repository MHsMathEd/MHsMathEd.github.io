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

$Q[0] = "A bag contains 5 red balls, 3 white balls and 2 blue balls. What percentage of the balls are white?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "30";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "%";
$Soln[0] = "Fraction of white balls = \\(\\frac{3}{5 + 3 + 2} = \\frac{3}{10}\\)<br>Percentage of white balls = \\(\\frac{3}{10} \\times 100\\)% = <b>30</b>%";

$Q[1] = "In a bag that contains only orange balls and grey balls, \\(\\frac{2}{5}\\) of the balls are orange. If there are 35 balls in the bag, how many balls are orange?";
$QType[1] = 1;
$QAnswers[1] = "14";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "\\(\\frac{2}{5} \\times\\) 35 = <b>14</b>";

$Q[2] = "A bag contains only red, orange and yellow balls. The probability of randomly drawing a red ball is 0.5. The probability of drawing an orange ball is equal to the probability of drawing a yellow ball. What is the probability of drawing a yellow ball?";
$QType[2] = 1;
$QAnswers[2] = "0.25";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The probabilties must add up to 1, so Probability(red) + Probability(orange) + Probability(yellow) = 1<br> 0.5 + Probability(orange) + Probability(yellow) = 1<br> Probability(orange) + Probability(yellow) = 0.5<br>Probability(orange) = Probability(yellow) = 0.5 \\(\\div\\) 2 = <b>0.25</b>";

$Q[3] = "A bag contains only blue, green and indigo cubes. The probability of randomly drawing a blue cube is 0.6. The probability of randomly drawing a green cube is 0.2. What is the probability of drawing an indigo cube?";
$QType[3] = 1;
$QAnswers[3] = "0.2"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Probabilty of drawing an indigo cube = 1 - 0.6 - 0.2 = <b>0.2</b>";

$Q[4] = "A box contains 20 alphabet cubes. Each cube is printed either with an 'A' or a 'B' or a 'C'. 10 cubes are printed with 'A' and 4 cubes are printed with 'B'. What is the probability of randomly drawing a cube printed with a 'C'? Give your answer as a decimal rounded to 2 decimal places.";
$QType[4] = 1;
$QAnswers[4] = "0.3";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Number of 'C' cubes = 20 - (10 + 4) = 6<br>Proportion of 'C' cubes = \\(\\frac{6}{20} = \\frac{3}{10}\\)<br>Probability of randomly drawing a 'C' cube = 3 \\(\\div\\) 10 = <b>0.3</b>";

$Q[5] = "A bag contains 12 red marbles, 6 black marbles and 2 green marbles. What percentage of the marbles are black?";
$QType[5] = 1;
$QAnswers[5] = "30";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "%";
$Soln[5] = "Fraction of black marbles = \\(\\frac{6}{12+6+2}\\)<br>Percentage of black marbles = \\(\\frac{6}{20} \\times 100\\)% = <b>30</b>%";

$Q[6] = "In a bag that contains only oranges and apples, the probability of randomly selecting an orange is \\(\\frac{3}{7}\\). If there are 35 pieces of fruit in the bag, how many are apples?";
$QType[6] = 1;
$QAnswers[6] = "20";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Fraction of oranges = \\(\\frac{3}{7}\\)<br>Fraction of apples = \\(\\frac{7}{7} - \\frac{3}{7} = \\frac{4}{7}\\)<br>Number of apples = \\(\\frac{4}{7} \\times\\) 35 = <b>20</b>";

$Q[7] = "A bag contains only topaz, emerald and sapphire gemstones. The probability of randomly drawing a topaz is 0.6. The probability of randomly drawing an emerald is 0.2. If there are 10 gemstones in the bag, how many of them are sapphires?";
$QType[7] = 1;
$QAnswers[7] = "2";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Proportion of sapphires = 1 - (0.6 + 0.2) = 0.2<br> Number of sapphires = 0.2 \\(\\times\\) 10 = <b>2</b>";

$Q[8] = "A sack contains red, yellow and green capsicums. The probabilty of randomly choosing a yellow capsicum is one in five. If there are 15 yellow capsicums in the sack, how many capsicums are there in the sack in total?";
$QType[8] = 1;
$QAnswers[8] = "75"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "\\(\\frac{1}{5}\\) = 15 capsicums<br>All the capsicums = \\(\\frac{5}{5}\\) = 5 \\(\\times\\) 15 = <b>75</b> capsicums.";

$Q[9] = "If there are 80 chocolates in a box and the probability of randomly choosing a strawberry-centred one is 0.25, how many strawberry-centred chocolates are there in the box?";
$QType[9] = 1;
$QAnswers[9] = "20";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "0.25 \\(\\times\\) 80 = <b>20</b>";

$Q[10] = "A bag contains 5 yellow jellybeans, 4 pink jellybeans and 8 purple jellybeans. What percentage of the jellybeans are purple? Give your answer to the nearest percent.";
$QType[10] = 1;
$QAnswers[10] = "47";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "%";
$Soln[10]= "Fraction of purple jellybeans = \\(\\frac{8}{5+4+8} = \\frac{8}{17}\\)<br>Percentage of purple jellybeans = \\(\\frac{8}{17} \\times\\) 100% = <b>47</b>%";

$Q[11] = "If five balls in a box of one hundred are blue, what is the probability of randomly selecting a blue ball from the box? Give your answer as a decimal.";
$QType[11] = 1;
$QAnswers[11] = "0.05";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Fraction of blue balls = \\(\\frac{5}{100}\\)<br>Probability of randomly selecting a blue ball = 5 \\(\\div\\) 100 = <b>0.05</b>";

$Q[12] = "The probability of randomly selecting a purple ball from a bag of 60 coloured balls is 0.4. How many purple balls are in the bag?";
$QType[12] = 1;
$QAnswers[12] = "24";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Number of purple balls = 0.4 \\(\\times\\) 60 = <b>24</b>";

$Q[13] = "The probability of randomly selecting a white ball from a bag of coloured balls is 0.3, and the probability of randomly selecting a black ball is 0.2. If there are 12 white balls in the bag, how many black balls are there?";
$QType[13] = 1;
$QAnswers[13] = "8";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "0.3 of the total = 12 balls<br>Total number of balls = 12 \\(\\div\\) 0.3 = 40 balls<br> Number of black balls = 0.2 of the total = 40 \\(\\times\\) 0.2 = <b>8</b>";

$Q[14] = "At a raffle, 180 red, 220 pink and 160 orange tickets are sold. What is the probability of randomly drawing a red ticket? Give your answer as a percentage, to the nearest percent.";
$QType[14] = 1;
$QAnswers[14] = "32";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "%";
$Soln[14] = "Fraction of red tickets = \\(\\frac{180}{180+220+160} = \\frac{180}{560}\\)<br>Percentage of red tickets = 180 \\(\\div\\) 560 \\(\\times\\) 100% = <b>32</b>%";

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