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

$Q[0] = "1.	A teacher recorded a set of test scores as follows: 3, 4, 5, 5, 6, 7, 10. She accidentally left out one score which was one more than the mode of this set of scores. What is the median of this set of scores?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[0] = "5.5";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Mode = 5<br> Missing score = 6<br> Median is the middle score, which is halfway between 5 and 6 = <b>5.5</b>";

$Q[1] = "1.	A teacher recorded a set of test scores as follows: 3, 4, 5, 5, 6, 7, 10. She accidentally left out one score which was one more than the mode of this set of scores. What is the mean of this set of scores?";
$QType[1] = 1;
$QAnswers[1] = "5.75";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Mode = 5<br> Missing score = 6<br>Mean = (3 + 4 + 5 + 5 + 6 + 6 + 7 + 10) \\( \\div \\) 8 = 46 \\( \\div \\) 8 = <b>5.75</b>";

$Q[2] = "A student has a reading level is 5 months below his actual age. If his actual age is 8 years and 3 months, what is his reading age in years and months?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("7 years and 5 months","7 years and 8 months","7 years and 10 months","8 years and 8 months");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "8 years and 3 months - 5 months = 7 years and 10 months, which is option <b>c</b>";

$Q[3] = "1.	A recipe that serves 4 people uses 1 cup flour, 1 cup milk, \\(1 \\over 4 \\) cup sugar, and 2 eggs. How many eggs are needed to make servings for 6 people? ";
$QType[3] = 1;
$QAnswers[3] = "3"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "4 people need 2 eggs<br>1 person needs 2 \\( \\div \\) 4 eggs <br>= \\(1 \\over 2\\) egg<br>6 people need 3 \\( \\times \\) \\(1 \\over 2\\) = <b>3</b> eggs.";

$Q[4] = "The graph (sourced from the Australian Bureau of Statistics) shows the Australian average weekly total cash earnings by industry.<img src='images/PracticeTest1c_1.jpg'> <br> True/False: Across all industries, the mean weekly earnings are approximately $1300.";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "True (option <b>a</b>). The bottom row of the graph shows All industries, and the mean weakly earnings are about $1300.";

$Q[5] = "The graph (sourced from the Australian Bureau of Statistics) shows the Australian average weekly total cash earnings by industry.<img src='images/PracticeTest1c_1.jpg'> <br>True/ False: Out of the categories shown, retail trade has the lowest annual earnings.";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("True","False","N/A","N/A");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "False (option <b>b</b>). Accommodation and Food services has the lowest annual earnings.";

$Q[6] = "The graph (sourced from the Australian Bureau of Statistics) shows the Australian average weekly total cash earnings by industry.<img src='images/PracticeTest1c_1.jpg'> <br>The average weekly income for education and training is in between the incomes for which two categories?";
$QType[6] = 0;
$QAnswers[6] = "a";
$QOptions[6] = array("Arts and recreation services, and Transport, postal and warehousing","Accommodation and food services, and Arts and recreation services","Transport, postal and warehousing, and Mining","Health care and social assistance, and Administrative and support services");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Option <b>a</b>";

$Q[7] = "Classes 5C and 2R make 96 bird feeders. For every 6 made by 5C, 2R made 2. How many did 5C make? ";
$QType[7] = 1;
$QAnswers[7] = "72";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Feeders were built in the ratio 5C:2R = 6:2<br> 6 + 2 = 8 so the 96 feeders are divided into 8s<br> Sets of 8 feeders that were made = 96 \\( \\div \\) 8 = 12<br> 6 of each 8 were made by 5C:<br> Feeders made by 5C = 12 \\( \\times \\) 6 = <b>72</b>";

$Q[8] = "A school used rainwater tanks to supply water for its gardens. During a period of drought, a science class decided to measure the school’s usage of rainwater over a 5-day period. At the start of the study, the tank held 3400 L of water. The following table shows how much water was used on each day of the study:<br><table><tr><th>Day</th><th>Volume of water used (litres)</th></tr><tr><td>1</td><td>115</td></tr><tr><td>2</td><td>95</td></tr><tr><td>3</td><td>55</td></tr><tr><td>4</td><td>90</td></tr><tr><td>5</td><td>110</td></tr></table><br>How much water remained in the tank at the end of the 5 days?";
$QType[8] = 1;
$QAnswers[8] = "2935"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "3400 - 115 - 95 - 55 - 90 - 110 = 2935";

$Q[9] = "The graph shows the percentage of Australia’s population living in each of the states and territories. The percentage for Victoria is missing from the graph. At the time these data were collected, the population of Australia was 22 693 600. <br><br><img src='images/PracticeTest1c_2.jpg'> <br>What percentage of the Australian population live in Victoria? ";
$QType[9] = 1;
$QAnswers[9] = "25";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " %";
$Soln[9] = "Percentage in Victoria = 100 - (1+2+2+7+11+20+32) = <b>25</b>%";

$Q[10] = "A student completed a 4-part test and scored 18, 16, 12 and 17 in each of the parts. If each part of the test was out of 25, what was the student’s total mark, as a percentage?";
$QType[10] = 1;
$QAnswers[10] = "63";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "%";
$Soln[10]= "Mark out of 100 = 18 + 16 + 12 +17 = 63<br>Student's mark is <b>63</b>%";

$Q[11] = "The figure shows the speedometer for a car. <img src='images/PracticeTest1c_3.jpg'> <br> At what speed is the car travelling?";
$QType[11] = 1;
$QAnswers[11] = "55";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " km/h";
$Soln[11] = "each line on the gauge represents 5 km/h. So the car's speed is <b>55</b> km/h.";

$Q[12] = "A school principal is ordering pavers for a new courtyard area for the senior students. 11 pavers covers 1 square metre. The area to be paved is 6 square metres. Each paver weighs 1.2 kg. What will be the total weight of the pavers required?";
$QType[12] = 1;
$QAnswers[12] = "79.2";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " kg";
$Soln[12] = "Number of pavers = 6 \\( \\times \\) 11 = 66<br> Weight = 66 \\( \\times \\) 1.2 = <b>79.2</b> kg";

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