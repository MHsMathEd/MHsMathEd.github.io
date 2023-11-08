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

$Q[0] = "A map has a scale where 1 cm represents 5 km. Two places are 12.5 km apart. What is the distance between the two places on the map?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "2.5";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " cm";
$Soln[0] = "1 cm represents 5 km<br>1 \\(\\div\\) 5 cm = 0.2 cm represents 1 km<br>0.2 \\(\\times\\) 12.5 cm = 2.5 cm represents 12.5 km. On the map, the two places are <b>2.5</b> cm apart.";

$Q[1] = "A bus travelled at an average speed of 90 km/h. It drives from 4:37 pm until 7:22 pm. How far did it travel?";
$QType[1] = 1;
$QAnswers[1] = "247.5";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " km";
$Soln[1] = "Compute the difference between the start and finish time to find that the bus travelled for 2 hours and 45 minutes.<br> 2 hours and 45 minutes = 2.75 hours.<br>Distance = speed \\(\\times\\) time = 90 km/h \\(\\times\\) 2.75 hours = 247.5 km<br>The bus travelled <b>247.5</b>";

$Q[2] = "How many litres are equivalent to 2 cubic metres?";
$QType[2] = 1;
$QAnswers[2] = "2000";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " L";
$Soln[2] = "1000 L = 1 m\\(^3\\)<br>2 \\(\\times\\) 1000 L = <b>2000</b> L = 2 m\\(^3\\)";

$Q[3] = "A teacher measures the heights of five students in the class. The heights are shown in the following table. <br><table><tr><td>115 cm</td></tr><tr><td>1.12 m</td></tr><tr><td>1 m and 11 cm</td></tr><tr><td>108 cm</td></tr><tr><td>1.04 m</td></tr></table><br>What is the median height in metres?";
$QType[3] = 1;
$QAnswers[3] = "1.11"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " m";
$Soln[3] = "Heights in metres: 1.15, 1.12, 1.11, 1.08, 1.04<br>The median value is 1.11";

$Q[4] = "1 kilogram and 4 grams is the same as";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("1.004 kg","1.04 kg","1.4 kg","100004 g");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "1 kg = 1000 g<br>0.001 kg = 1 g<br>0.004 kg = 4 g<br>1 + 0.004 = 1.004 kg, which is <b>(a)</b>";

$Q[5] = "A tank that holds 5 cubic metres of water is 90% full. How many litres of water need to be added to fill it?";
$QType[5] = 1;
$QAnswers[5] = "500";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " L";
$Soln[5] = "Percentage empty = 100% - 90% = 10%<br>Volume empty = 10% \\(\\times\\) 5 m\\(^3\\) = 0.5 m\\(^3\\)<br>1 m\\(^3\\) = 1000 L<br>so 0.5 m\\(^3\\) = 1000 \\(\\times\\) 0.5 L = <b>500</b> L";

$Q[6] = "A carton of 12 eggs weighs 0.6 kg. If all the eggs are the same weight, what is the weight of five of the eggs in grams?";
$QType[6] = 1;
$QAnswers[6] = "250";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " g";
$Soln[6] = "12 eggs weigh 600 g<br> 1 egg weighs 600 \\(\\div\\) 12 g = 50 g<br>5 eggs weigh 5 \\(\\times\\) 50 g = <b>250</b> g";

$Q[7] = "A school group are driving around Tasmania, starting and ending in Hobart. The distances between each of their destinations are given in the table. <br><table><tr><th>From</th><th>To</th><th>Distance</th></tr><tr><td>Hobart</td><td>Bicheno</td><td>186 km</td></tr><tr><td>Bicheno</td><td>Scottsdale</td><td>170 km</td></tr><tr><td>Scottsdale</td><td>Launceston</td><td>68 km</td></tr><tr><td>Launceston</td><td>Ross</td><td>79 km</td></tr><tr><td>Ross</td><td>Hobart</td><td>126 km</td></tr></table><br>How far did the group drive between Bicheno and Ross?";
$QType[7] = 1;
$QAnswers[7] = "317";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " km";
$Soln[7] = "Bicheno to Scottsdale to Launceston to Ross = 170 + 68 + 79 km = 317 km.";

$Q[8] = "Three class desks occupy a volume of 0.768 m\\(^3\\). What volume will eight class desks occupy?";
$QType[8] = 1;
$QAnswers[8] = "2.048"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "m<sup>3</sup>";
$Soln[8] = "3 desks occupy 0.768 m\\(^3\\)<br>1 desk occupies 0.768 \\(\\div\\)) 3 = 0.256 m\\(^3\\)<br>8 desks occupy 0.256 \\(\\times\\) 8 m\\(^3\\) = <b>2.048</b> m\\(^3\\)";

$Q[9] = "A jug holds 2L of juice. How many 250 mL cups can be filled from the jug?";
$QType[9] = 1;
$QAnswers[9] = "8";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "2 L = 2000 mL<br>2000 mL \\(\\div\\) 250 mL = 8<br><b>8</b> cups can be filled.";

$Q[10] = "In 24-hour time, 10:13 am is written as 1013 hours. Express 8:45 pm in 24-hour time.";
$QType[10] = 1;
$QAnswers[10] = "2045";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " hours";
$Soln[10]= "Because the time is pm, we need to add 12 to the hour. 8 + 12 = 20, so the time is 2045 hours.";

$Q[11] = "Convert 1660 milligrams to grams.";
$QType[11] = 1;
$QAnswers[11] = "1.66";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " g";
$Soln[11] = "1000 mg = 1 g, so 1660 mg = 1660 \\(\\div\\) 1000 g = <b>1.66</b> g";

$Q[12] = "A square has an area of 64 m \\(^2 \\). What is the length of each side?";
$QType[12] = 1;
$QAnswers[12] = "8";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " m";
$Soln[12] = "Area = length \\(\\times\\) width. For a square, length = width. So the length of each side is 8 m because 8 m \\(\\times\\) 8 m = 64 m\\(^2\\)";

$Q[13] = "Find the area of the grassy field shown. <br><img src='images/BasicTest8_1.jpg'>";
$QType[13] = 1;
$QAnswers[13] = "42";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " m\\(^2\\)";
$Soln[13] = "Area = 8 \\(\\times\\) 3 + 2 \\(\\times\\) 9 = 42 square metres.<br>Or: Area = 2 \\(\\times\\) 12 + 6 \\(\\times\\) 3 = <b>42</b> square metres.";

$Q[14] = "Find the perimeter of the grassy field shown. <br><img src='images/BasicTest8_1.jpg'>";
$QType[14] = 1;
$QAnswers[14] = "40";
$QOptions[14] = array("between 800 and 900","between 900 and 1000","between 1000 and 1100","between 1100 and 1200");
$prefix[14] = "";
$suffix[14] = " m";
$Soln[14] = "Perimeter = 8 + 8 + 12 + 12 = <b>40</b> m ";

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