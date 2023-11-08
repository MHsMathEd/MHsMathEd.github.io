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

$Q[0] = "A car travels for 45 km at 60 km/h. How many minutes does the journey take?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "45";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " minutes";
$Soln[0] = "Time taken = 45 km \\(\\div\\) 60 km/h = 0.75 hours = 0.75 \\(\\times\\) 60 minutes = <b>45</b> minutes<br>OR<br>60 km/h means that 1 km takes 1 minute. So 45 km will take <b>45</b> minutes.";

$Q[1] = "A bag contains 30 coloured balls. The probability of drawing a green ball is one sixth. How many of the balls are not green?";
$QType[1] = 1;
$QAnswers[1] = "25";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Number of green balls = \\(\\frac{1}{6} \\times\\) 30 = 5<br>Number of non-green balls = 30 - 5 = <b>25</b>";

$Q[2] = "Three teachers were intending to mark the year 9 maths tests. They all marked at the same rate. They expected the marking to take them 4 hours. Then one of the teachers became sick and all of the marking needed to be done by the remaining two teachers. How long will it take them?";
$QType[2] = 1;
$QAnswers[2] = "6";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " hours";
$Soln[2] = "3 teachers take 4 hours.<br>1 teacher will take 3 \\(\\times\\) 4 hours = 12 hours<br>2 teachers will take 12 \\(\\div\\) 2 = <b>6</b> hours";

$Q[3] = "An online professional development course costs 110 British Pounds. The exchange rate is 1 Australian dollar = 0.56 British pounds. How much does the course cost in Australian dollars? Give your answer rounded to the nearest dollar.";
$QType[3] = 1;
$QAnswers[3] = "196"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Course cost in AU$ = 110 \\(\\div\\) 0.56 = 196.42857<br>Rounded to the nearest dollar, cost = AU$<b>196</b>";

$Q[4] = "At a particular school, students can choose to study Korean or Japanese, or no foreign language. One fifth of the students study Korean. Three tenths of the students study Japanese. What fraction of the students study no foreign language?";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("\\(1 \\over 10 \\)","\\(1 \\over 5 \\)","\\(2 \\over 5 \\)","\\(1 \\over 2 \\)");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Fraction of students studying a language = \\(\\frac{1}{5} + \\frac{3}{10} = \\frac{2}{10} + \\frac{3}{10} = \\frac{5}{10} = \\frac{1 \\times 5}{2 \\times 5} = \\frac{1}{2}, which is option <b>(d)</b>";

$Q[5] = "Here are a set of marks from a group project: 68, 72, 74, 77, 81, 84. What is the mean mark?";
$QType[5] = 1;
$QAnswers[5] = "76";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "mean = \\(\\frac{68+72+74+77+81+84}{6}\\) = <b>76</b>";

$Q[6] = "Here are a set of marks from a group project: 68, 72, 74, 77, 81, 84. What is the median mark?";
$QType[6] = 1;
$QAnswers[6] = "75.5";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "The median is halfway between 74 and 77 = <b>75.5</b>";

$Q[7] = "Find the volume of a tank with dimensions 10 m by 20 m by 200 cm. Give your answer in litres.";
$QType[7] = 1;
$QAnswers[7] = "400000";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " L";
$Soln[7] = "Dimensions in metres = 10 by 20 by 2<br>Volume in m<sup>3</sup> = 400 m<sup>3</sup><br>1 m<sup>3</sup> = 1000 L, so<br> 400 m<sup>3</sup> = 400 \\(\\times\\) 1000 = <b>400 000</b> L";

$Q[8] = "A test ending at 1:08 pm ran for 2.25 hours. At what time did the test start?";
$QType[8] = 0;
$QAnswers[8] = "b"; 
$QOptions[8] = array("10:43 am","10:53 am","11:23 am","11:33 am");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "2.25 hours = 2 hours and 15 minutes.<br>1:08 pm - 2 hours = 11:08 am<br>11:08 am - 15 minutes = 10:53 am, which is option <b>(b)</b>";

$Q[9] = "Here are a set of marks from a group project: 68, 72, 74, 77, 81, 84. What is the range of the marks?";
$QType[9] = 1;
$QAnswers[9] = "16";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "range = 84 - 68 = <b>16</b>";

$Q[10] = "At a particular school, there are 60 students sitting the HSC. Of these, 24 want to go to university. What percentage of students do not want to go to university?";
$QType[10] = 1;
$QAnswers[10] = "60";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " %";
$Soln[10]= "Number of students who do not want to go to uni = 60 - 24 = 36<br>Fraction of students who do not want to go to uni = \\(\\frac{36}{60}\\)<br>Percentage of students who do not want to go to uni = \\(\\frac{36}{60}\\times \\) 100% = <b>60</b>%";

$Q[11] = "One bus can carry 72 people. How many buses are required to transport 380 people?";
$QType[11] = 1;
$QAnswers[11] = "6";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "380 \\(\\div\\) 72 = 5.2777<br>Number of buses required = <b>6</b> (you MUST round up)";

$Q[12] = "<b>NON-CALCULATOR</b><br><br>Serina buys a bagel for $6.80 and a drink for $3.50. She pays with a $20 note. How much change should she receive?";
$QType[12] = 1;
$QAnswers[12] = "9.70";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "Total expenses = $6.80 + $3.50 = $10.30<br>Change = $20.00 - $10.30 = $<b>9.70</b>";

$Q[13] = "<b>NON-CALCULATOR</b><br>A book costing $80 is discounted by 20%. How much money would you save if you bought the book during the sale?";
$QType[13] = 1;
$QAnswers[13] = "16";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "$";
$suffix[13] = "";
$Soln[13] = "100% = $80<br>10% = $8<br>20% = $16<br>You will save $<b>16</b>";

$Q[14] = "<b>NON-CALCULATOR</b><br><br>A patio has dimensions 200 cm by 300 cm. What is the area of the patio in sqare metres?";
$QType[14] = 1;
$QAnswers[14] = "6";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = " m<sup>2</sup>";
$Soln[14] = "The area needs to be given in m<sup>2</sup> so convert the dimensions to metres.<br>Dimensions in metres = 2 m by 3 m<br> Area = 2 m \\(\\times\\) 3 m = <b>6</b> m<sup>2</sup>";

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