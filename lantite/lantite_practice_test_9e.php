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

$Q[0] = "Find 75% of $18.00";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "13.50";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "50% of $18.00 = $9.00<br>50% of $9.00 = $4.50 = 25% of $18.00<br>75% of $18.00 = $9.00 + 4.50 = $<b>13.50</b>";

$Q[1] = "A school paid $1100 to have basketball hoops installed. This price included 10% g.s.t. How much g.s.t. did the school pay to have the hoops installed?";
$QType[1] = 1;
$QAnswers[1] = "100";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Price + gst = 100% + 10% = 110% = $1100 <br> 10% gst = $1100 \\(\\div\\) 110 \\(\\times\\) 10 = $<b>100</b>";

$Q[2] = "A teacher bought three pens for $6.15. What was the average price of each pen?";
$QType[2] = 1;
$QAnswers[2] = "2.05";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "$6.15 \\(\\div\\) 3 = $<b>2.05</b>";

$Q[3] = "Compute 3 + 6 \\(\\times\\) M when M = 3";
$QType[3] = 1;
$QAnswers[3] = "21"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "3 + 6 \\(\\times\\) 3 = 3 + 18 = <b>21</b>";

$Q[4] = "How many kilograms is 1.8 tonnes?";
$QType[4] = 1;
$QAnswers[4] = "1800";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " kg";
$Soln[4] = "1.8 tonnes = 1.8 \\(\\times\\) 1000 = <b>1800</b> kg";

$Q[5] = "How many millilitres are equal to 3 cubic centimetres?";
$QType[5] = 1;
$QAnswers[5] = "3";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " mL";
$Soln[5] = "1 cm<sup>3</sup> = 1 mL, so 3 cm<sup>3</sup> = <b>3</b> mL";

$Q[6] = "48 cm is equivalent to how many metres?";
$QType[6] = 1;
$QAnswers[6] = "0.48";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " m";
$Soln[6] = "48 cm = 48 \\(\\div\\) 100 m = <b>0.48</b> m";

$Q[7] = "Calculate 228 divided by 0.01";
$QType[7] = 1;
$QAnswers[7] = "22800";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "228 \\(\\div\\) 0.01 = <b>22800</b>";

$Q[8] = "If \\(\\frac{3}{5}\\) of a number is 9, what is the number?";
$QType[8] = 1;
$QAnswers[8] = "15"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "\\(\\frac{3}{5}\\) is 9<br>\\(\\frac{1}{5}\\) is 9 \\(\\div\\) 3 = 3<br>\\(\\frac{5}{5}\\) = 5 \\(\\times\\) 3 = <b>15</b>";

$Q[9] = "\\(\\frac{1}{4} + \\frac{7}{20}\\) =";
$QType[9] = 0;
$QAnswers[9] = "b";
$QOptions[9] = array("\\(\\frac{3}{4}\\)","\\(\\frac{3}{5}\\)","\\(\\frac{3}{10}\\)","\\(\\frac{3}{20}\\)");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "\\(\\frac{1}{4} + \\frac{7}{20} = \\frac{1\\times 5}{4 \\times 5} + \\frac{7}{20} = \\frac{5}{20} + \\frac{7}{20} = \\frac{12}{20} = \\frac{4 \\times 3}{4 \\times 5} = \\frac{3}{5}, option <b>(b)</b>";

$Q[10] = "Calculate two thirds of 11 357 496 228";
$QType[10] = 1;
$QAnswers[10] = "7571664152";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "By long division, 11 357 496 228 \\(\\div\\) 3 = 3 785 832 076<br>3 785 832 076 \\(\\times\\) 2 = <b>7 571 664 152</b>";

$Q[11] = "Subtract fifty lots of 27.2 from 27.7 \\(\\times\\) 50";
$QType[11] = 1;
$QAnswers[11] = "25";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "27.7 \\(\\times\\) 50 - 27.2 \\(\\times\\) 50 = (27.7 - 27.2) \\(\\times\\) 50 = 0.5 \\(\\times\\) 50 = <b>25</b>";

$Q[12] = "A town has a total of 5243 school students. The school principals collaborated to set up a program in which all the children were given the opportunity to visit a local regional industry. 23 industries agreed to participate. If the children were to be divided equally amongst the industries, how many children were to visit each industry? Give your answer rounded to the nearest whole number.";
$QType[12] = 1;
$QAnswers[12] = "228";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "By long division, 5243 \\(\\div\\) 23 = 227.9, which rounds to <b>228</b>";

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