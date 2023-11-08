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

$Q[0] = "Find 20% of 6.4 m in cm";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[0] = "128";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " cm";
$Soln[0] = "10% = 0.64 m = 64 cm. <br> 20% = <b>128</b> cm.";

$Q[1] = "A school was quoted a price of $1500 for a new air conditioning unit. However, this price did not include g.s.t. Find the cost of the unit once 10% g.s.t. is included.";
$QType[1] = 1;
$QAnswers[1] = "1650";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "10% \\( \\times \\) $1500 = $150.<br>$1500+$150 = $<b>1650</b>";

$Q[2] = "Calculate 18 \\( \\div \\) ( 9 - 7 + 1 )";
$QType[2] = 1;
$QAnswers[2] = "6";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "9-7+1 = 3<br>18 \\( \\div \\) 3 = <b>6</b>";

$Q[3] = "Find 10% of 32 metres in centimetres.";
$QType[3] = 1;
$QAnswers[3] = "320"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " cm";
$Soln[3] = "10% = 3.2 m <br> 3.2 \\( \\times \\) 100 = <b>320</b> cm.";

$Q[4] = "3 kilometres and 8 metres is the same as";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("30 008 m","3.008 km","3.08 km","3.8 km");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "8 m = 0.008 km<br>so 3 + 0.008 = 3.008 km, which is option <b>b</b>";

$Q[5] = "A plant is 0.8 m tall. If it grows 10% taller during the year, what is its height, in cm, at the end of the year?";
$QType[5] = 1;
$QAnswers[5] = "88";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " cm";
$Soln[5] = "Starting height = 80 cm<br> 10% \\( \\times \\) 80 cm = 8 cm<br>Finishing height = 80 + 8 = <b>88</b> cm.";

$Q[6] = "A box of tennis balls weighs 2.8 kg. How much would 100 boxes of tennis balls weigh?";
$QType[6] = 1;
$QAnswers[6] = "280";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " kg";
$Soln[6] = "100 \\( \\times \\) 2.8 = <b>280</b> kg.";

$Q[7] = "Convert 0.68 kg to grams.";
$QType[7] = 1;
$QAnswers[7] = "680";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " g";
$Soln[7] = "0.68 kg = 0.68 \\( \\times \\) 1000 = <b>680</b> g";

$Q[8] = "What is 2% of 26 million?";
$QType[8] = 1;
$QAnswers[8] = "520000"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "26 million = 26 000 000<br> 1% of 26 000 000 = 260000<br> 2% of 26 000 000 = <b>520000</b>";

$Q[9] = "Calculate 7.2 \\( \\times \\) 4.3";
$QType[9] = 1;
$QAnswers[9] = "30.96";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "7.2 \\( \\times \\) 4.3 = <b>30.96</b>";

$Q[10] = "If Shu buys a sandwich for $6.20 and a drink for $3.40 how much change will she receive if she pays with a $20 note?";
$QType[10] = 1;
$QAnswers[10] = "10.40";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "$20 - $6.20 - $3.40 = $<b>10.40</b>";

$Q[11] = "Calculate 2612 divided by 6. Give your answer rounded to two decimal places.";
$QType[11] = 1;
$QAnswers[11] = "435.33";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "2612 \\( \\div \\) 6 = <b>435.33</b> to 2 decimal places.";

$Q[12] = "Find the area of a rectangle that is 3 m wide and 7 m long.";
$QType[12] = 1;
$QAnswers[12] = "21";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "m\\(^2\\)";
$Soln[12] = "3 m \\( \\times \\) 7 m = <b>21</b> m\\(^2\\)";

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