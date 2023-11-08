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

$Q[0] = "What is 15% of 140?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "21";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "10% of 140 = 14<br>5% of 140 = 7<br>15% of 140 = 14 + 7 = <b>21</b>";

$Q[1] = "How many centimetres are equivalent to 0.04 kilometres?";
$QType[1] = 1;
$QAnswers[1] = "4000";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " cm";
$Soln[1] = "0.04 km = 0.04 \\(\\times\\) 1000 m = 40 m = 40 \\(\\times\\) 100 cm = <b>4000</b> cm";

$Q[2] = "Compute 18 – 2 \\(\\times\\) S when S = 2";
$QType[2] = 1;
$QAnswers[2] = "14";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "18 - 2 \\(\\times\\) S = 18 - 2 \\(\\times\\) 2 = 18 - 4 = <b>14</b>";

$Q[3] = "How many minutes are there in 2.2 hours?";
$QType[3] = 1;
$QAnswers[3] = "132"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " minutes";
$Soln[3] = "1 hour = 60 minutes<br>2 hours = 120 minutes<br>0.1 hour = 6 minutes<br>0.2 hour = 12 minutes<br>2.2 hours = 120 + 12 minutes = <b>132</b> minutes";

$Q[4] = "In many parts of the United States it is expected that you leave a 10% tip when you pay for your meal. If a person buys a meal costing $25, how much money should the person pay for the meal, including the tip?";
$QType[4] = 1;
$QAnswers[4] = "27.50";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "10% \\(\\times\\) $25 = $2.50<br>Total cost = $25 + 2.50 = $<b>27.50</b>";

$Q[5] = "Calculate 748 multiplied by 0.2";
$QType[5] = 1;
$QAnswers[5] = "149.6";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "748 \\(\\times\\) 0.2 = 748 \\(\\times\\) 2 \\(\\div\\) 10 = 1496 \\(\\div\\) 10 = <b>149.6</b>";

$Q[6] = "Find the area of a rectangle that is 7 m wide and 6 m long.";
$QType[6] = 1;
$QAnswers[6] = "42";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "m<sup>2</sup>";
$Soln[6] = "Area = 7 \\(\\times\\) 6 = <b>42</b> m<sup>2</sup>";

$Q[7] = "A student correctly divided 0.683 by a number and got 683 as her answer. What number did the student divide by?";
$QType[7] = 1;
$QAnswers[7] = "0.001";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "The decimal point has moved to the right 3 places, so Answer = <b>0.001</b>";

$Q[8] = "If you purchase a book for $12.95, a set of whiteboard markers for $7.30 and three pens for $2.35 each, how much change should you receive if you pay  with a $50 note?";
$QType[8] = 1;
$QAnswers[8] = "22.70"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "Total cost = $12.95 + 7.30 + 3 \\(\\times\\) 2.35 = $20.25 + 7.05 = 27.30<br>Change = $50 - 27.30 = $<b>22.70</b>";

$Q[9] = "If a race begins at 2:14 pm and concludes 0.4 hours later, what time does it end? Give your answer in 24-hour time as a 4 digit number. (For example, 5:18 am = 0518)";
$QType[9] = 1;
$QAnswers[9] = "1438";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "1 hour = 60 minutes<br>0.1 hour = 6 minutes<br>0.4 hours = 24 minutes<br>2:14 pm + 24 minutes = 2:38 pm = <b>1438</b> hours";

$Q[10] = "A book costs $14.35. If you pay $20, how much change will you get?";
$QType[10] = 1;
$QAnswers[10] = "5.65";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "Change = $20 - $14.35 = $<b>5.65</b>";

$Q[11] = "Which is the smallest number?";
$QType[11] = 0;
$QAnswers[11] = "b";
$QOptions[11] = array("\\(\\frac{7}{20}\\)","\\(\\frac{7}{25}\\)","\\(\\frac{3}{8}\\)","\\(\\frac{9}{14}\\)");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "\\(\\frac{7}{25}\\) is smaller than \\(\\frac{7}{20}\\)<br>\\(\\frac{3}{8}\\) = \\(\\frac{9}{24}\\), which is bigger than \\(\\frac{7}{25}\\)<br>\\(\\frac{9}{14}\\) is bigger than \\(\\frac{1}{2}\\), which is bigger than \\(\\frac{7}{25}\\)<br>  So the smallest fraction is \\(\\frac{7}{25}\\), which is option <b>(b)</b><br><br> If this does not convince you, you could convert each fraction into a decimal: <br>
\\(\\frac{7}{25}\\) = \\(\\frac{28}{100}\\)=0.28<br>
\\(\\frac{7}{20}\\) = \\(\\frac{35}{100}\\)=0.35<br>
\\(\\frac{3}{8}\\) = \\(\\frac{15}{40}\\) = \\(\\frac{75}{200}\\) = \\(\\frac{37.5}{100}\\) = 0.375<br>
\\(\\frac{9}{14}\\) needs to be done by long division: 9 \\(\\div\\) 14 = 0.6...";

$Q[12] = "Calculate 2614 divided by 6. Give your answer rounded to two decimal places.";
$QType[12] = 1;
$QAnswers[12] = "435.67";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Answer = <b>435.67</b>";

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