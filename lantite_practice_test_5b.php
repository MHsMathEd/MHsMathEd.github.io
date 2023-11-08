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

$Q[0] = "The number of students in year 11 at a high school who were studying business studies or economics, or neither, were recorded.<br><br><img src='images/PracticeTest5b_1.jpg'><br><br>How many students were not studying economics?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "105";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Students not studying economics = 82 + 23 = <b>105</b>";

$Q[1] = "The number of students in year 11 at a high school who were studying business studies or economics, or neither, were recorded.<br><br><img src='images/PracticeTest5b_1.jpg'><br><br>How many students were in year 11?";
$QType[1] = 1;
$QAnswers[1] = "170";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Number of students in year 11 = 23 + 82 + 65 = <b>170</b>";

$Q[2] = "A primary school raises funds which are to be divided amongst two charities, A and B, in the ratio A:B = 3:2. The table shows the funds raised by each grade.
<br><table>
<tr><th>Grade</th><th>Money Raised</th></tr>
<tr><td>Kindergarten</td><td>$1220</td></tr>
<tr><td>Year 1</td><td>$2630</td></tr>
<tr><td>Year 2</td><td>$4200</td></tr>
<tr><td>Year 3</td><td>$3115</td></tr>
<tr><td>Year 4</td><td>$2870</td></tr>
<tr><td>Year 5</td><td>$1640</td></tr>
<tr><td>Year 6</td><td>$2980</td></tr>
</table></br>
How much money will be sent to Charity A?
";
$QType[2] = 1;
$QAnswers[2] = "11193";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Total amount raised = $1220 + 2630 + 4200 + 3115 + 2870 + 1640 + 2980 = $18655<br>Ratio 3:2 means that the money is divided into 3 + 2 = 5 parts, and Charity A gets 3 of those parts.<br> 1 of 5 parts = \\(1\\over 5 \\) \\(\\times\\) $18655 = $3731<br>3 parts = $3731 \\(\\times\\) 3 = $<b>11193</b>";

$Q[3] = "A primary school raises funds which are to be divided amongst two charities, A and B, in the ratio A:B = 3:2. The table shows the funds raised by each grade.
<br><table>
<tr><th>Grade</th><th>Money Raised</th></tr>
<tr><td>Kindergarten</td><td>$1220</td></tr>
<tr><td>Year 1</td><td>$2630</td></tr>
<tr><td>Year 2</td><td>$4200</td></tr>
<tr><td>Year 3</td><td>$3115</td></tr>
<tr><td>Year 4</td><td>$2870</td></tr>
<tr><td>Year 5</td><td>$1640</td></tr>
<tr><td>Year 6</td><td>$2980</td></tr>
</table></br>What was the mean amount of money raised by each grade?";
$QType[3] = 1;
$QAnswers[3] = "2665"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Total amount raised = $1220 + 2630 + 4200 + 3115 + 2870 + 1640 + 2980 = $18655<br>Number of grades = 7<br> Mean amount raised by each grade = total \\(\\div\\) number of grades = $18655 \\(\\div\\) 7 = $<b>2665</b>";

$Q[4] = "A primary school raises funds which are to be divided amongst two charities, A and B, in the ratio A:B = 3:2. The table shows the funds raised by each grade.
<br><table>
<tr><th>Grade</th><th>Money Raised</th></tr>
<tr><td>Kindergarten</td><td>$1220</td></tr>
<tr><td>Year 1</td><td>$2630</td></tr>
<tr><td>Year 2</td><td>$4200</td></tr>
<tr><td>Year 3</td><td>$3115</td></tr>
<tr><td>Year 4</td><td>$2870</td></tr>
<tr><td>Year 5</td><td>$1640</td></tr>
<tr><td>Year 6</td><td>$2980</td></tr>
</table></br>What was the median amount of money raised by the grades?";
$QType[4] = 1;
$QAnswers[4] = "2870";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "Moneys in ascending order: 1220, 1640, 2630, 2870, 2980, 3115, 4200<br>Median = $<b>2870</b>";

$Q[5] = "A school field has an area of 4000 square metres. If turf is sold in rolls that are 80 cm wide by 200 cm long, how many rolls are required to cover the field?";
$QType[5] = 1;
$QAnswers[5] = "2500";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Turf dimensions in metres = 0.8 m by 2 m<br>Turf area = 0.8 \\(\\times\\) 2 = 1.6 m<sup>2</sup><br>Number of turf rolls required = 4000 \\(\\div\\) 1.6 = <b>2500</b>";

$Q[6] = "A school bus travels 90 km in 2.25 hours. What is its average speed?";
$QType[6] = 1;
$QAnswers[6] = "40";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "km/h";
$Soln[6] = "speed = distance \\(\\div\\) time = 90 km \\(\\div\\) 2.25 hours = <b>40</b> km/h";

$Q[7] = "A teacher has a roll of stickers. After using 75 of them, \\(1\\over 4\\) of the stickers from the roll are left unused. How many stickers remain on the roll?";
$QType[7] = 1;
$QAnswers[7] = "25";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Proportion used = 1 - \\(1\\over 4\\) = \\(3\\over 4\\)<br>75 stickers = \\(3\\over 4\\)<br>\\(1\\over 4\\) = 75 \\(\\div\\) 3 = 25<br> Number remaining = <b>25</b>";

$Q[8] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of students who studied a VET subject in year 11 in 2006 who had completed a qualification by 2011, compared to the proportions for all students.<br><img src='images/PracticeTest5b_2.jpg'><br>True/False: In 2011 at least 30% of all students were studying for their first qualification.";
$QType[8] = 0;
$QAnswers[8] = "a"; 
$QOptions[8] = array("True","False","N/A","N/A");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "True <b>(a)</b>; Around 40% of students were studying for their first qualification.";

$Q[9] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of students who studied a VET subject in year 11 in 2006 who had completed a qualification by 2011, compared to the proportions for all students.<br><img src='images/PracticeTest5b_2.jpg'><br>True/False: By 2011 most students who had studied VET in school had completed a qualification.";
$QType[9] = 0;
$QAnswers[9] = "b";
$QOptions[9] = array("True","False","N/A","N/A");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Approximate percentage of VET students with a qualification = 5% (Certificate I/II) + 22% (Certificate III/IV) + 8% (Advanced diploma/diploma) + 5% (Bachelor degree or above) = 40%<br>As this is less than 50%, the statement is false <b>(b)</b>";

$Q[10] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of students who studied a VET subject in year 11 in 2006 who had completed a qualification by 2011, compared to the proportions for all students.<br><img src='images/PracticeTest5b_2.jpg'><br>True/False: Students who studied a VET subject in school in year 11 were more likely to complete a Certificate I,II/III or IV than other students.";
$QType[10] = 0;
$QAnswers[10] = "a";
$QOptions[10] = array("True","False","N/A","N/A");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "The statement is true <b>(a)</b>";

$Q[11] = "A box contains 6 blue balls, 6 red balls and 8 yellow balls. What is the probability of randomly drawing a ball that is not red?";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("\\(3\\over 4\\)","\\(3\\over 5\\)","\\(3\\over 10\\)","\\(7\\over 10\\)");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Probability of drawing a not-red ball = fraction of not-red balls = \\((6 + 8)\\over (6 + 6 + 8)\\) = \\(14\\over 20\\) = \\(7\\over 10\\), option <b>(d)</b>";

$Q[12] = "If twelve school students eat six kilograms of fruit in five days, how many days would six kilograms of fruit last fifteen students, if they all ate fruit at the same rate?";
$QType[12] = 1;
$QAnswers[12] = "4";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Note that the fact that there are 6 kg of fruit is irrelevant as this amount does not change.<br>12 students eat the fruit in 5 days<br>1 student eats the fruit in 5 \\(\\times\\) 12 = 60 days<br> 15 students eat the fruit in 60 \\(\\div\\) 15 = <b>4</b> days.";


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