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

$Q[0] = "A crate containing 250 reams of paper weighs 125 kg. What is the weight of each ream of paper, in grams?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "500";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " g";
$Soln[0] = "Each ream weighs 125 kg \\(\\div\\) 250 = 0.5 kg<br>1 kg = 1000 g, so 0.5 kg = <b>500</b> g";

$Q[1] = "How many millilitres of liquid are required to fill a rectangular container with dimensions 5 cm \\( \\times \\) 4 cm \\( \\times \\) 7 cm?";
$QType[1] = 1;
$QAnswers[1] = "140";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " mL";
$Soln[1] = "Volume in cm\\(^3\\) = \\(5\\times 4 \\times 7 = 140 \\)cm\\(^3\\)<br> 1 cm\\(^3\\) = 1 mL, so<br>140 cm\\(^3\\) = <b>140</b> mL";

$Q[2] = "The weights of five students in a class are shown in the following table. <br> <table><tr><td>23.71 kg</td></tr><tr><td>25.228 kg</td></tr><tr><td>21.437 kg</td></tr><tr><td>26.002 kg</td></tr><tr><td>24.875 kg</td></tr></table><br>What is the difference in weight in grams between the heaviest student and the lightest student?";
$QType[2] = 1;
$QAnswers[2] = "4565";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " g";
$Soln[2] = "Heaviest weight = 26.002 kg = 26 002 g<br>Lightest weight = 21.437 kg = 21 437 g<br>Difference = 26 002 - 21 437 = <b>4 565</b> g";

$Q[3] = "How many litres of liquid are required to fill a container that has a volume of 2500 cm\\(^3\\)? Give your answer to 1 decimal place.";
$QType[3] = 1;
$QAnswers[3] = "2.5"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " L";
$Soln[3] = "1 cm\\(^3\\) = 1 mL so<br> 2500 cm\\(^3\\) = 2500 mL<br>1000 mL = 1 L so<br> 1 mL = 0.001 L so <br> 2500 mL = 2.5 L<br><b>2.5</b> litres of liquid are required.";

$Q[4] = "A Duke of Edinburgh Award group need to cycle 100 km. They have a list of towns and distances between them. <br>
<table>
<tr><th>Location A</th><th>Location B</th><th>Distance (km)</th></tr>
<tr><td>Albe</td><td>Bedro</td><td>25</td></tr>
<tr><td>Albe</td><td>Carran</td><td>36</td></tr>
<tr><td>Albe</td><td>Dorrila</td><td>45</td></tr>
<tr><td>Bedro</td><td>Carran</td><td>18</td></tr>
<tr><td>Bedro</td><td>Dorrila</td><td>30</td></tr>
<tr><td>Carran</td><td>Dorrila</td><td>71</td></tr>
</table>
<br>Which of the following routes will allow them to cycle at least 100 km, but not further than they have to?";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("Albe-Bedro-Carran-Albe","Albe-Carran-Dorrila-Albe","Albe-Carran-Albe","Albe-Dorrila-Bedro-Albe");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Distance Albe-Dorrila-Bedro-Albe = 45 + 30 + 25 = 100 km. This is the best option. This is option <b>(d)</b>.";

$Q[5] = "How many grams is equivalent to 6 kg and 15 g?";
$QType[5] = 1;
$QAnswers[5] = "6015";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " g";
$Soln[5] = "6 kg = 6000 g so 6 kg + 15 g = 6000 + 15 g = <b>6015</b> g";

$Q[6] = "Find the perimeter of the grassy field shown. <br><img src='images/BasicTest9_1.jpg'>";
$QType[6] = 1;
$QAnswers[6] = "3100";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " m";
$Soln[6] = "Perimeter in metres = 600 + 550 + 600 + 550 + 400 + 400 = <b>3100</b>m";

$Q[7] = "Find the area of the grassy field shown. <br><img src='images/BasicTest9_1.jpg'>";
$QType[7] = 1;
$QAnswers[7] = "250000";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " m\\(^2\\)";
$Soln[7] = "Method A: This can be done by adding three rectangles.<br>Area = 600 \\(\\times (550-200) + 200 \\(\\times\\) (600 - 400) = 250 000 m\\(^2\\)<br>Method B: It can also be done by computing the area of the outside (green) rectangle and subtracting the area of the inside (white) rectangle.<br>Area = 600 \\(\\times\\) 550 - 200 \\(\\times\\) 400 = 250 000 m\\(^2\\)";

$Q[8] = "A train departed at 8.49 am and travelled until 6.19 pm. If the train travelled 665 km, what was its average speed?";
$QType[8] = 1;
$QAnswers[8] = "70"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " km/h";
$Soln[8] = "Time between 8.49 am and 6.19 pm = 11 minutes + 9 hours + 19 minutes = 9 hours and 30 minutes = 9.5 hours.<br>Speed = Distance \\(\\div\\) Time = 665 km \\(\\div\\) 9.5 hours = 70 km/h.<br>Its average speed is <b>70</b> km/h.";

$Q[9] = "How many litres are equivalent to 6 litres and 8 millilitres?";
$QType[9] = 1;
$QAnswers[9] = "6.008";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " L";
$Soln[9] = "1000 mL = 1 L so 1 mL = 0.001 L so 8 mL = 0.008 L<br>1 + 0.008 = <b>1.008</b> L";

$Q[10] = "At the school athletics carnival a student runs the 1500 m in 7.2 minutes. Running at this same speed, how many seconds would it take the student to run 200 m? Give your answer to the nearest whole number of seconds.";
$QType[10] = 1;
$QAnswers[10] = "58";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " s";
$Soln[10]= "Student runs 1500 m in 7.2 minutes.<br> Student runs 1 m  in 7.2 \\(\\div\\) 1500 minutes.<br> Student runs 200 m in 7.2 \\(\\div\\) 1500 \\(\\times\\) 200 minutes = 0.96 minutes.<br>1 minute = 60 seconds, so <br> 0.96 minutes = 60 \\(\\times\\)0.96 minutes = 57.6 seconds.<br>Rounded to the nearest second, the student will take <b>58</b> seconds to run 200 m.";

$Q[11] = "A student who ran the 50 m sprint at the school athletics carnival took 81 steps to cover the distance. What was the average length of each step, to the nearest tenth of a centimetre?";
$QType[11] = 1;
$QAnswers[11] = "61.7";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " cm";
$Soln[11] = "The student took 83 steps to cover 50 m<br>The student took 1 step to cover 50 \\(\\div\\) 81 m = 0.61728395... m<br>0.61728395 m = 0.61728395 \\(\\times\\) 100 cm = 61.728395 cm<br>Rounded to the nearest tenth of a centimetre (i.e. to the nearest millimetre) the answer is <b>61.7</b> cm.";

$Q[12] = "A rectangle has an area of 56 cm\\(^2\\) and a length of 8 cm. What is its width?";
$QType[12] = 1;
$QAnswers[12] = "7";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " cm";
$Soln[12] = "Area = length \\(\\times\\) width. <br>56 cm\\(^2\\) = 8 \\(\\times\\) width<br> Its width is <b>7</b> cm because 7 \\(\\times\\) 8 = 56.";

$Q[13] = "A playing field is 100 m long. A scale model is built of the field where 1 m represents 1 km. How many centimetres long is the model of the field?";
$QType[13] = 1;
$QAnswers[13] = "10";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " cm";
$Soln[13] = "1 m represents 1 km<br>i.e. 1 m represents 1000 m<br> Divide by 10 to get that 0.1 m represents 100 m.<br>So the model field is 0.1 m long = 0.1 \\(\\times\\) 100 cm = <b>10</b> cm long.";

$Q[14] = "What is the time 7 \\(1\\over4\\) hours before 3:25 pm?";
$QType[14] = 0;
$QAnswers[14] = "c";
$QOptions[14] = array("7:10 am","7:40 am","8:10 am","8:40 am");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "The correct answer is 8:10 am, which is option <b>(c)</b>.";

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