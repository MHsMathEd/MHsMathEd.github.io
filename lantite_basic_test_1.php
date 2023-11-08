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

$Q[0] = "At a school, 43% of the students study agriculture. What percentage of students do not study agriculture?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "57";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "%";
$Soln[0] = "100% - 43% = <b>57</b>%";

$Q[1] = "Teachers organised an activity for all stage 3 students in the school. If there were three classes of 27 students and one class of 28 students in stage 3, how many students were involved in the activity?";
$QType[1] = 1;
$QAnswers[1] = "109";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "27 \\( \\times \\) 3 + 28 = <b>109</b>";

$Q[2] = "A book costing $120 is discounted by 10%. What is its discounted price?";
$QType[2] = 1;
$QAnswers[2] = "108";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "10% \\( \\times \\) $120 = $12. <br> $120 - $12 = $108. <br> The discounted price is <b>$108</b>";

$Q[3] = "A plant is 1 m and 26 cm high. What is its height in centimetres?";
$QType[3] = 1;
$QAnswers[3] = "126"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "cm";
$Soln[3] = "1 m = 100 cm.<br> The plant is 100 + 26 = <b>126</b> cm tall.";

$Q[4] = "\\(2 \\over 4 \\) + \\(1 \\over 3 \\) = ";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("\\(1 \\over 7 \\)","\\(3 \\over 4 \\)","\\(5 \\over 6 \\)","\\(2 \\over 12 \\)");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "\\(2 \\over 4 \\) + \\(1 \\over 3 \\) = \\((2 \\times 3) \\over (4 \\times 3) \\) + \\( (1 \\times 4) \\over (3 \\times 4) \\) = \\( 6 \\over 12 \\) + \\(4 \\over 12 \\) = \\( 10 \\over 12 \\) = \\( 5 \\over 6 \\)<br> which is answer <b>(c)</b>.";

$Q[5] = "A school has ordered 100 identical boxes of sports equipment. If the weight of one box is 2.73 kg, what is the weight of all 100 boxes in kilograms?";
$QType[5] = 1;
$QAnswers[5] = "273";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "kg";
$Soln[5] = "100 \\( \\times \\) 2.73 = <b>273</b> kg.";

$Q[6] = "A teacher bought three pens costing $1.35 each. If she paid using a $20 note, how much change should she receive?";
$QType[6] = 1;
$QAnswers[6] = "15.95";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "3 \\( \\times \\) 1.35 = 4.05<br> 20 - 4.05 = <b>15.95</b>";

$Q[7] = "A group of four students do two assessments. In the first task, each of the four students scores four marks. In the second task, three of the students score three marks and one student scores two marks. What is the  total number of marks scored by the group in the two assessments?";
$QType[7] = 1;
$QAnswers[7] = "27";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "4 \\( \\times \\) 4 + 3 \\( \\times \\) 3 + 2 = <b>27</b>";

$Q[8] = "A pool has dimensions 3 m \\( \\times \\) 2 m \\( \\times \\) 6 m. What is its volume in litres?";
$QType[8] = 1;
$QAnswers[8] = "36000"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "L";
$Soln[8] = "3 \\( \\times \\) 2 \\( \\times \\) 6 = 36. <br>So the volume is 36 cubic metres. <br>1 cubic metre = 1000 litres. <br>So the volume in litres is 36 \\( \\times \\) 1000 = <b>36000</b> Litres.";

$Q[9] = "A teacher buys a pen for $2.25, an eraser for $3.15, and a ruler for $2.80. What is the total cost of his purchases?";
$QType[9] = 1;
$QAnswers[9] = "8.20";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "$";
$suffix[9] = "";
$Soln[9] = "$2.25 + $3.15 + $2.80 = $<b>8.20</b>";

$Q[10] = "A teacher orders thirty rulers costing 78 cents each. What is the total cost, in dollars, of the order?";
$QType[10] = 1;
$QAnswers[10] = "23.40";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "78 cents = $0.78 <br> 0.78 \\( \\times \\) 30 = $<b>23.40</b>";

$Q[11] = "What is 68490 grams in kilograms? Give your answer to the nearest whole kilogram.";
$QType[11] = 1;
$QAnswers[11] = "68";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "kg";
$Soln[11] = "There are 1000 g in 1 kg. <br> So 68490 g = 68490 \\( \\div \\) 1000 = 68.490 kg <br> To the nearest whole kilogram, this is <b>68</b> kg.";

$Q[12] = "A teacher is planning an excursion to Canberra and the snow for the year 6 students. The cost of the trip per student is $400, and accommodation makes up two fifths of this cost. What is the cost of accommodation, in dollars, for each student?";
$QType[12] = 1;
$QAnswers[12] = "160";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "\\(2 \\over 5 \\) \\( \\times \\) $400 = $<b>160</b>.";

$Q[13] = "In a class test, 3 of 25 students scored full marks. What percentage of students in the class did not score full marks?";
$QType[13] = 1;
$QAnswers[13] = "88";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "%";
$Soln[13] = "\\( 3 \\over 25 \\) = 12%. So 100% - 12% = <b>88</b>% of students did not score full marks.";

$Q[14] = "A city has a population of 12 million people. Approximately 8% of the population are from Oceana. Approximately how many thousands of the city's residents are from Oceana?";
$QType[14] = 0;
$QAnswers[14] = "b";
$QOptions[14] = array("between 800 and 900","between 900 and 1000","between 1000 and 1100","between 1100 and 1200");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "8 \\( \\div \\) 100 \\( \\times \\) 12000000 = 960000, which is 960 thousands of people. This fits into answer <b>(b)</b>.";

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