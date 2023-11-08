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

$Q[0] = "A bus travels 300 km in 3 hours and 45 minutes. What is its average speed in kilometres per hour?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "80";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " km/h";
$Soln[0] = "3 hours and 45 minutes = 3.75 hours. <br> speed = distance \\( \\div \\) time = 300 km \\( \\div \\) 3.75 hours = 80 km/h. <br> The bus has an average speed of <b>80</b> kilometres per hour.";

$Q[1] = "A box weighs 50 g. A crate contains 3000 of these boxes. When empty, the crate weighs 15 kg. What is the weight of the filled crate in kilograms?";
$QType[1] = 1;
$QAnswers[1] = "165";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " kg";
$Soln[1] = "Weight of 3000 boxes = 50 \\( \\times \\) 3000 = 150 000 g<br> Divide by 1000 to go from grams to kilograms, so 150 000 g = 150 kg.<br>Weight of crate + boxes = 150 kg + 15 kg = 165 kg.<br>The filled crate weighs <b>165</b>kg.";

$Q[2] = "3.2 m\\(^3\\) is equal to how many litres?";
$QType[2] = 1;
$QAnswers[2] = "3200";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " L";
$Soln[2] = "1 m\\(^3\\) = 1000 L<br> 3.2 \\( \\times \\) 1 m\\(^3\\) = 3.2 \\(\\times \\) 1000 L = <b>3 200</b> litres.";

$Q[3] = "An unloaded truck weighs 2.8 tonnes. When filled, it weighs 3.7 tonnes. What is the weight of its load, in kilograms?";
$QType[3] = 1;
$QAnswers[3] = "900"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " kg";
$Soln[3] = "Load weight = full weight - empty weight = 3.7 - 2.8 = 0.9 tonnes. <br> Multiply by 1000 to go from tonnes to kilograms<br> 0.9 tonnes = 0.9 \\( \\times \\) 1000 = <b>900</b> kg.";

$Q[4] = "Which of the following is the largest volume?";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("1.01 litre","400 mL","\\(1 \\over 4 \\) of 2 litres","\\(2 \\over 3 \\) of 1.5 L");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "We need to convert all the options to the same units. It doesn't matter whether we use litres or millilitres. Let's use litres.<br> 1 litre = 1000 mL.<br> (a) 1.01 L <br> (b) 400 mL = 400 \\(\\div\\) 1000 L = 0.4 L <br> (c) \\(1 \\over 4 \\times 2 \\) L = 0.5 L <br> (d) \\(2 \\over 3 \\times \\) 1.5 L = 1 L<br> So the greatest volume is 1.01 L, which is option <b>(a)</b>";

$Q[5] = "A map has a scale where 1 cm represents 4 km. Two places on the map are 7 cm apart. What is the actual distance between the two places?";
$QType[5] = 1;
$QAnswers[5] = "28";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " km";
$Soln[5] = "1 cm represents 4 km<br>7 \\(\\times\\) 1 cm represents 7 \\(\\times \\) 4 km = 28 km<br>So the two places are <b>28</b> km apart.";

$Q[6] = "A car uses petrol at the rate of 8.8 litres per 100 km travelled. How much petrol will it use to travel 880 km? Give your answer to 2 decimal places.";
$QType[6] = 1;
$QAnswers[6] = "77.44";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " L";
$Soln[6] = "100 km uses 8.8 L of fuel<br>1 km uses 8.8 \\(\\div\\) 100 L = 0.088 L of fuel<br> 880 km uses 880 \\(\\times\\) 0.088 L = 77.44 L<br>The car will use <b>77.44</b> litres of fuel.";

$Q[7] = "A school bus trip to the Southern Flinders Ranges passes a road sign stating<br><p style='text-indent: 2.0em;'><b>Port Augusta 137 km</b></p> They know that their destination is 56 km before Port Augusta. How far do they have left to travel?";
$QType[7] = 1;
$QAnswers[7] = "81";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " km";
$Soln[7] = "Distance remaining = 137 - 56 = <b>81</b> km.";

$Q[8] = "How many litres are equivalent to 3 L and 25 mL?";
$QType[8] = 1;
$QAnswers[8] = "3.025"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "1000 mL = 1 L<br>1 mL = 1 \\(\\div\\) 1000 = 0.001 L<br> 25 mL = 0.001 \\(\\times\\) 25 L = 0.025 L<br> 3 L + 0.025 L = <b>3.025</b> L";

$Q[9] = "A square has a perimeter of 80 cm. What is the length of each side?";
$QType[9] = 1;
$QAnswers[9] = "20";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " cm";
$Soln[9] = "All sides are equal length on a square. <br>So perimeter = 4 \\(\\times\\) length = 80 <br> Length = 80 \\(\\div\\) 4 = 20<br> The length of each side is <b>20</b> cm.";

$Q[10] = "Find the area of the grassy field shown. <br><img src='images/BasicTest6_1.jpg'>";
$QType[10] = 1;
$QAnswers[10] = "2775";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " m\\(^2\\)";
$Soln[10]= "We need to chop the field into 3 rectangles <br><b>Method 1</b>: Area = 10  \\(\\times\\) 50 + 10  \\(\\times\\) 70 + 35 \\(\\times\\) (70-25) = 2775<br> <b>Method 2</b>: Area = 5 \\(\\times\\) 10 + 25  \\(\\times\\) 10 + (35 + 10 + 10) \\(\\times\\) (50 - 5) = 2775<br>The area is <b>2 775</b>m\\(^2\\)";

$Q[11] = "Find the perimeter of the grassy field shown. <br><img src='images/BasicTest6_1.jpg'>";
$QType[11] = 1;
$QAnswers[11] = "260";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " m";
$Soln[11] = "Perimeter = 50 + (10 + 35 + 10) + 70 + 10 + 25 + 35 + 5 + 10 = 260 m";

$Q[12] = "A class are growing seeds. They have a number of 400 mL plant pots and a 20 litre bag of soil. How many of their plant pots can be filled using the bag of soil?";
$QType[12] = 1;
$QAnswers[12] = "50";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "400 mL = 0.4 L<br>20 L \\(\\div\\) 0.4 L = 50<br><b>50</b> pots can be filled.";

$Q[13] = "A school has decided to pave the pathway to the front office. The path is to be 6 metres long and 80 cm wide. Each paver is 40 cm long and 20 cm wide. How many pavers are required?";
$QType[13] = 1;
$QAnswers[13] = "60";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "6 m = 600 cm <br> Number of pavers across width = 80 \\(\\div\\) 20 = 4<br> Number of pavers along length = 600 \\(\\div\\) 40 = 15<br> Total number of pavers required = 4 \\(\\times\\) 15 = 60<br><b>300</b> pavers are required.";

$Q[14] = "What is the time 2\\(3\\over 4\\) hours after 11:35 am?";
$QType[14] = 0;
$QAnswers[14] = "b";
$QOptions[14] = array("1:20 pm","2:20 pm","1:55 pm","2:55 pm");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "11:35 am + 2 hours = 1:35 pm<br>1:35 pm + 45 minutes = 2:20 pm, which is answer <b>(b)</b>.";

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