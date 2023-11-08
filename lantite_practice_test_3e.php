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

$Q[0] = "Find 125% of 200 cm in metres.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "2.50";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " m";
$Soln[0] = "100% \\(\\times\\) 200 = 200 <br> 25% \\(\\times\\) 200 = 50<br> 125% \\(\\times\\) 200 cm = 200 cm + 50 cm = 250 cm = 250 \\(\\div\\) 100 m = <b>2.5</b> m";

$Q[1] = "A school was quoted a price of $5000 to paint the classrooms. However, this price did not include g.s.t. Find the cost of the painting once 10% g.s.t. is included.";
$QType[1] = 1;
$QAnswers[1] = "5500";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "10% \\(\\times\\) $5000 = $500<br>$5000 + $500 = $<b>5500</b>";

$Q[2] = "Calculate 6 + 5  \\(\\times\\) 7";
$QType[2] = 1;
$QAnswers[2] = "41";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "6 + 5  \\(\\times\\) 7 = 6 + 35 = <b>41</b>";

$Q[3] = "Find 25% of $16.20 in cents";
$QType[3] = 1;
$QAnswers[3] = "405"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " cents";
$Soln[3] = "$16.20 = 1620 cents<br> 50% \\(\\times\\) 1620 cents = 810 cents<br> 25% \\(\\times\\) 1620 cents = <b>405</b> cents.";

$Q[4] = "7 kilometres and 44 metres is the same as";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("70.44 m","744 m","7 044 m","70 044 m");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "7 km = 7000 m<br> 7000 + 44 m = 7044 m, which is option <b>(c)</b>";

$Q[5] = "0.2 tonnes is equivalent to how many kilograms?";
$QType[5] = 1;
$QAnswers[5] = "200";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " kg";
$Soln[5] = "1 tonne = 1000 kg<br> 0.2 tonnes = 0.2 \\(\\times\\) 1000 kg = <b>200</b> kg";

$Q[6] = "A teacher pays $10 for a sandwich costing $7.85. How much change will he receive?";
$QType[6] = 1;
$QAnswers[6] = "2.15";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "10.00 - 7.85 = <b>2.15</b>";

$Q[7] = "\\(5\\over 6\\) - \\(1\\over 12\\) =";
$QType[7] = 0;
$QAnswers[7] = "d";
$QOptions[7] = array("\\(-4\\over 6\\)","\\(4\\over 6\\)","\\(4\\over 9\\)","\\(3\\over 4\\)");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "\\(5\\over 6\\) = \\(10\\over 12\\)<br>\\(10\\over 12\\)\\) - \\(1\\over 12\\) = \\(9\\over 12\\) = \\(3\\over 4\\), which is option <b>(d)</b>";

$Q[8] = "At a certain school, five of the 23 the students in class 7V are in the zone cross country team. What percentage of 7V are in the cross country team?";
$QType[8] = 0;
$QAnswers[8] = "c"; 
$QOptions[8] = array("15.46","18.83","21.74","22.02");
$prefix[8] = "";
$suffix[8] = "%";
$Soln[8] = "We need to compute 5 \\(\\div\\) 23 \\(\\times\\) 100 = 500 \\(\\div\\) 23 = 21.739.<br>So the answer is 21.74, which is option <b>(c)</b>";

$Q[9] = "A rectangle has area 56 cm<sup>2</sup>. If the length is 8 cm, what is the width?";
$QType[9] = 1;
$QAnswers[9] = "7";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " cm";
$Soln[9] = "Length  \\(\\times\\) width = area<br> 8 \\(\\times\\) 7 = 56, so<br>width = <b>7</b> cm.";

$Q[10] = "The g.s.t. tax is equal to 10% of the value of a good or service. What is the g.s.t. payable on a good costing $76.40?";
$QType[10] = 1;
$QAnswers[10] = "7.64";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "10% \\(\\times\\) $76.40 = $<b>7.64</b>";

$Q[11] = "The formula for simple interest is given by <i>I = PRN</i>. Calculate <i>I</i> if <i>P</i> = 100, <i>R</i> = 0.05, and <i>N</i> = 3";
$QType[11] = 1;
$QAnswers[11] = "15";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "100 \\(\\times\\) 0.05 \\(\\times\\) 3 = <b>15</b>";

$Q[12] = "210 seconds is equal to how many minutes?";
$QType[12] = 1;
$QAnswers[12] = "3.5";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " minutes";
$Soln[12] = "60 seconds = 1 minute<br>120 seconds = 2 minutes<br> 180 seconds = 3 minutes<br> 30 seconds = 0.5 minute<br>210 seconds = 180 seconds + 30 seconds =  3 minutes + 0.5 minutes = <b>3.5</b> minutes";

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