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

$Q[0] = "What is \\(2 \\over 3\\) of $66?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "44";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "\\(2 \\over 3\\) \\( \\times \\) $66 = $66 \\( \\div \\) 3 \\( \\times \\) 2 = $22 \\( \\times \\) 2 = $<b>44</b>";

$Q[1] = "How much change will I receive from $20 if I buy a magazine for $8.65 and two pens for $2.45 each?";
$QType[1] = 1;
$QAnswers[1] = "6.45";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Change = 20 - (8.65 + 2 \\(\\times\\) 2.45) = 20 - (8.65 + 4.90) = 20 - (13.55) = $<b>6.45</b>";

$Q[2] = "How many minutes after midday is 14:28 hours?";
$QType[2] = 1;
$QAnswers[2] = "148";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " minutes";
$Soln[2] = "14:28 is 2 hours and 28 minutes past midday = 2 \\(\\times \\) 60 + 28 = 120 + 28 = <b>148</b> minutes.";

$Q[3] = "14 kilograms and 889 grams is equivalent to ";
$QType[3] = 0;
$QAnswers[3] = "a"; 
$QOptions[3] = array("14.889 kg","22.89 kg","102.9 kg","14.0889 kg");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "option <b>(a)</b>: 14 kg + 889 g = 14 kg + 0.889 kg = 14.889 kg.";

$Q[4] = "Which is largest?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("2 \\( \\times \\) 3 + 6","2 \\( \\times \\) 6 + 3","2 + 3 \\( \\times \\) 6","6 + 3 \\( \\times \\) 2");
$prefix[4] = "";
$suffix[4] = " m\\(^2\\)";
$Soln[4] = "(a) 2 \\( \\times \\) 3 + 6 = 6 + 6 = 12 <br> (b) 2 \\( \\times \\) 6 + 3 = 12 + 3 = 15 <br> (c) 2 + 3 \\( \\times \\) 6 = 2 + 18 = 20 <br> (d) 6 + 3 \\( \\times \\) 2 = 6 + 6 = 12 <br> So the largest one is <b>(c)</b>";

$Q[5] = "A school was quoted a price of $22000 for a some new smartboards. However, this price did not include g.s.t. Find the cost of the smartboards once 10% g.s.t. is included.";
$QType[5] = 1;
$QAnswers[5] = "24200";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "Cost = $22000 + 2200 + $<b>24200</b>";

$Q[6] = "Find the area of a rectangular garden measuring 2.8 m by 3.4 m";
$QType[6] = 1;
$QAnswers[6] = "9.52";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " m<sup>2</sup>";
$Soln[6] = "Area = 2.8 \\(\\times\\) 3.4 = <b>9.52</b> m<sup>2</sup>";

$Q[7] = "Find 20% of $12.";
$QType[7] = 1;
$QAnswers[7] = "2.40";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "10% = $1.20 so 20% = $<b>2.40</b>";

$Q[8] = "2.4 kg is equivalent to how many grams?";
$QType[8] = 1;
$QAnswers[8] = "2400"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " g";
$Soln[8] = "2.4 kg = <b>2400</b> g.";

$Q[9] = "A teacher buys five notepads for $1.35 each, and an eraser for $2.20. What is the total cost of her purchases?";
$QType[9] = 1;
$QAnswers[9] = "8.95";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "$";
$suffix[9] = "";
$Soln[9] = "Total cost = 5 \\(\\times\\) $1.35 + $2.20 = $8.95";

$Q[10] = "Which number is the largest? ";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("0.209","0.27","0.0987","0.0990");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "0.27 is the largest: option <b>(b)</b>";

$Q[11] = "How many centimetres is equivalent to 830 mm?";
$QType[11] = 1;
$QAnswers[11] = "83";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " cm";
$Soln[11] = "830 mm = <b>83</b> cm";

$Q[12] = "In a school of 1200 students, 873 students catch the bus to and from school. What percentage of students catch the bus to and from school? Give your answer rounded to two decimal places.";
$QType[12] = 1;
$QAnswers[12] = "72.75";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "%";
$Soln[12] = "873 \\(\\div\\) 1200 \\(\\times\\) 100% = <b>72.75</b>%";

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