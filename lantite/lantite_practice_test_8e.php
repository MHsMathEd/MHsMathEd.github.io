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

$Q[0] = "Find 25% of $16.40";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "4.10";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "50% = $8.20<br>25% = $<b>4.10</b>";

$Q[1] = "A school was quoted $5000 plus 10% g.s.t. to re-pave the basketball courts. What was the total cost for the work, including g.s.t.?";
$QType[1] = 1;
$QAnswers[1] = "5500";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "10% \\(\\times\\) 5000 = 500<br>Total cost = $5000 + $500 = $<b>5500</b>";

$Q[2] = "Which is the smallest number?";
$QType[2] = 0;
$QAnswers[2] = "b";
$QOptions[2] = array("0.100","0.0990","0.2","0.10");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "0.0990, option <b>b</b> is the smallest number (it is the only number to have a 0 in the tenths column)";

$Q[3] = "Jozefine bought three samosas for $2.40 each and a naan for $3.00. How much money did she spend altogether?";
$QType[3] = 1;
$QAnswers[3] = "10.20"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Total cost = 2.40 + 2.40 + 2.40 + 3.00 = $<b>10.20</b>";

$Q[4] = "A child was 1.5 m tall. One year later she was 10% taller. What is her new height, in metres and centimetres?";
$QType[4] = 1;
$QAnswers[4] = "65";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "1 metre and ";
$suffix[4] = " cm";
$Soln[4] = "10% \\(\\times\\) 1.5 m = 0.15 m<br>New height = 1.5 + 0.15 = 1.65 m = 1 m <b>65</b> cm";

$Q[5] = "Write 743 cents in dollars.";
$QType[5] = 1;
$QAnswers[5] = "7.43";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "743 c = $<b>7.43</b>";

$Q[6] = "16 kilograms is equivalent to how many tonnes?";
$QType[6] = 1;
$QAnswers[6] = "0.016";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " t";
$Soln[6] = "16 kg = 16 \\(\\div\\) 1000 t = <b>0.016</b> t";

$Q[7] = "What is 668 cm expressed in metres, and rounded to the nearest metre?";
$QType[7] = 1;
$QAnswers[7] = "7";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " m";
$Soln[7] = "668 cm = 6.68 m. <br>Rounded to the nearest metre, 6.68 m becomes <b>7</b> m";

$Q[8] = "Lucrecia bought a magazine for $12.95 and a pack of lollies for $2.45. How much change should she receive if she pays with a $20 note?";
$QType[8] = 1;
$QAnswers[8] = "4.60"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "12.95 + 2.45 = 15.40<br>20.00 - 15.40 = 4.60<br>Change = $<b>4.60</b>";

$Q[9] = "James ran 3 km at an average speed of 12 km/h. How many hours did the run take him?";
$QType[9] = 1;
$QAnswers[9] = "0.25";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " hours";
$Soln[9] = "time in hours = 3 km \\(\\div\\) 12 km/h = 0.25 hours";

$Q[10] = "There are 1280 students enrolled in a school. 85 of them are studying advanced mathematics. What percentage of the school students are studying advanced mathematics?";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("5.5%","6.6%","7.7%","8,8%");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "You can use long division, or you can do the following:<br>
85 \\(\\div\\) 1280 \\(\\times\\) 100% = 8500 \\(\\div\\) 1280 = 850 \\(\\div\\) 128<br> 
Now write out the 128 times table: <br>
1x = 128, 2x = 256, 4x = 512, 6x = 768, 7x = 890<br>So the answer is a bit less than 7%. Choose 6.6%, option <b>b</b>.";

$Q[11] = "If a crate with 100 tubs of yoghurt weighs 25 kg, what is the weight of each tub of yoghurt?";
$QType[11] = 1;
$QAnswers[11] = "0.25";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " kg";
$Soln[11] = "25 \\(\\div\\) 100 = <b>0.25</b> kg";

$Q[12] = "Calculate 23 \\(\\times\\)  0.1";
$QType[12] = 1;
$QAnswers[12] = "2.3";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "23 \\(\\times\\)  0.1 = <b>2.3</b>";


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