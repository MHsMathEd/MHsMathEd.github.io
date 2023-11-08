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

$Q[0] = "Find 90% of 60 kg";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "54";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " kg";
$Soln[0] = "10% \\(\\times\\) 60 kg = 6 kg<br>90% = 100% - 10% = 60 - 6 = <b>54</b> kg";

$Q[1] = "A textbook costing $30 was discounted by 10%. Find the new cost of the textbook.";
$QType[1] = 1;
$QAnswers[1] = "27";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Discount = 10% \\(\\times\\) $30 = $3<br>New price = $30 - 3 = $<b>27</b>";

$Q[2] = "What number is halfway between 0.3 and 0.8?";
$QType[2] = 1;
$QAnswers[2] = "0.55";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "<b>0.55</b> is halfway between: 0.8 - 0.3 = 0.5<br>0.5 \\(\\div\\) 2 = 0.25<br> 0.3 + 0.25 = 0.55";

$Q[3] = "How many minutes are there in 2.8 hours?";
$QType[3] = 1;
$QAnswers[3] = "168"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " minutes";
$Soln[3] = "2.8 hours \\(\\times\\) 60 minutes = <b>168</b> minutes";

$Q[4] = "2 hours and 45 minutes is equivalent to";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("2.25","2.3 hours","2.45 hours","2.75 hours");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "45 minutes = \\(3\\over 4\\) hour = 0.75 hour<br>2 h 45 min = 2.75 hours = option <b>(d)</b>";

$Q[5] = "How many metres is equivalent to 8300 mm?";
$QType[5] = 1;
$QAnswers[5] = "8.3";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " m";
$Soln[5] = "8300 mm = 830 cm = <b>8.3</b> m";

$Q[6] = "How much change from $20 will I receive if I buy a salad for $7.80 and a coffee for $4.30?";
$QType[6] = 1;
$QAnswers[6] = "7.90";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "Cost of salad + coffee = $7.80 + 4.30 = $12.10<br>Change = $20.00 - 12.10 = $<b>7.90</b>";

$Q[7] = "Find the volume of a box with dimensions 5 cm by 4 cm by 3 cm.";
$QType[7] = 1;
$QAnswers[7] = "60";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "cm<sup>3</sup>";
$Soln[7] = "5 cm \\(\\times\\) 4 cm \\(\\times\\) 3 cm = 60 cm<sup>3</sup>";

$Q[8] = "3 \\(\\div\\) 0.5 = ";
$QType[8] = 1;
$QAnswers[8] = "6"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "3 \\(\\div\\) 0.5 = <b>6</b>";

$Q[9] = "A bus driver drives for 18 hours and covers a distance of 1080 km. What is the average speed of the bus?";
$QType[9] = 1;
$QAnswers[9] = "60";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " km/h";
$Soln[9] = "speed = distance \\(\\div\\) time = 1080 \\(\\div\\) 18 = <b>60</b> km/h";

$Q[10] = "A car uses 8 litres of petrol for every 100 km travelled. The car's fuel tank can hold 56 litres. How far can the car travel on a full tank of petrol?";
$QType[10] = 1;
$QAnswers[10] = "700";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " km";
$Soln[10]= "Distance = 56 \\(\\div\\) 8 \\(\\times\\) 100 = <b>700</b> km ";

$Q[11] = "How much does it cost to buy three sandwiches at $7.65 each and two drinks at $3.30 each?";
$QType[11] = 1;
$QAnswers[11] = "29.55";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "3 \\(\\times\\) $7.65 + 2 \\(\\times\\) $3.30 = $29.55";

$Q[12] = "A box containing 100 markers weighs 1.7 kg. What is the weight of each marker in grams?";
$QType[12] = 1;
$QAnswers[12] = "17";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " g";
$Soln[12] = "Weight of 100 markers = 1.7 kg = 1700 g<br> Weight of 1 marker = 1700 \\(\\div\\) 100 = <b>17</b> g";


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