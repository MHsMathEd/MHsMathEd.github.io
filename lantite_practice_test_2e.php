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

$Q[0] = "Find 25% of 168 cm";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "42";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " cm";
$Soln[0] = "25% = \\(1\\over 4\\)<br> 168 \\(\\div\\) 4 = <b>42</b>";

$Q[1] = "A school was quoted a price of $2200 for a set of outdoor furniture. However, this price did not include g.s.t. Find the cost of the furniture once 10% g.s.t. is included.";
$QType[1] = 1;
$QAnswers[1] = "2420";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "10% \\(\\times\\) $2200 = $220<br>$2200 + $220 = $<b>2420</b>";

$Q[2] = "Calculate 3 + (4 \\(\\times\\) 5) − (9 + 8)";
$QType[2] = 1;
$QAnswers[2] = "6";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "3 + (4 \\(\\times\\) 5) - (9 + 8) = 3 + 20 - 17 = <b>6</b>";

$Q[3] = "Find 20% of 1.7 kg in grams";
$QType[3] = 1;
$QAnswers[3] = "340"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " g";
$Soln[3] = "1.7 kg = 1700 g<br>10% \\(\\times\\) 1700 g = 170 g<br>20% \\(\\times\\) 1700 g = 2 \\(\\times\\) 170 g = <b>340</b> g<br>";

$Q[4] = "43 kilograms and 78 grams is the same as";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("43.78 kg","43.078 kg","43.0078 kg","43780 g");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "78 g = 0.078 kg<br> 43 + 0.078 = 43.078, which is <b>(b)</b>";

$Q[5] = "A school buys 200 ping pong balls at the start of the year. If 10% of them are lost during the year, how many remain at the end of the year?";
$QType[5] = 1;
$QAnswers[5] = "180";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Balls lost: 10% of 200 = 20<br>Balls remaining = 200 - 20 = <b>180</b>";

$Q[6] = "A box of 100 identical textbooks weighs 20 kg. How much does each textbook weigh?";
$QType[6] = 1;
$QAnswers[6] = "0.2";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " kg";
$Soln[6] = "20 \\(\\div\\) 100 = <b>0.2</b> kg";

$Q[7] = "Convert 0.05 metres to centimetres.";
$QType[7] = 1;
$QAnswers[7] = "5";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " cm";
$Soln[7] = "0.05 m = 0.05 \\(\\times\\) 100 cm = <b>5</b> cm";

$Q[8] = "What is 5% of twenty three thousand?";
$QType[8] = 1;
$QAnswers[8] = "1150"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "10% \\(\\times\\) 23000 = 2300<br>5% \\(\\times\\) 23000 = 2300 \\(\\div\\) 2 = <b>1150</b>";

$Q[9] = "If a teacher buys three coffees for $4.15 each, how much change will she receive from $20?";
$QType[9] = 1;
$QAnswers[9] = "7.55";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "$";
$suffix[9] = "";
$Soln[9] = "3 \\(\\times\\) $4.15 = $12.45<br>$20.00 - $12.45 = $<b>7.55</b>";

$Q[10] = "In 2016 it was estimated that 786,689 of the 24.21 million Australians identified as Aboriginal or Torres Strait Islander. Approximately what percentage of the population identify as Aboriginal or Torres Strait Islander? ";
$QType[10] = 0;
$QAnswers[10] = "a";
$QOptions[10] = array("3%","23%","43%","63%");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "786 689 \\(\\div\\) 24 210000 is close to 750 000 \\(\\div\\) 25 000 000<br>This is the same as 75 \\(\\div\\) 2500 = 0.03 = 3%, which is <b>(a)</b>";

$Q[11] = "Find the area of a square with side length 8 cm.";
$QType[11] = 1;
$QAnswers[11] = "64";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " cm<sup>2</sup>";
$Soln[11] = "8 \\(\\times\\) 8 = <b>64</b>";

$Q[12] = "What is 75% of $80?";
$QType[12] = 1;
$QAnswers[12] = "60";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "75% = \\(3\\over 4\\)<br>\\(1\\over 4 \\times 80 = \\)20<br> \\(3\\over 4 \\times 80 \\) = 3 \\(\\times\\) 20 = <b>60</b>";

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