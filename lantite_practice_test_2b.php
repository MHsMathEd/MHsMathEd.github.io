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

$Q[0] = "For a cross country training event, a teacher needs to take water for all of the students. The teacher needs to take at least 700 mL for each student. There are 18 students in the event. What is the minimum amount of water the teacher needs to take? Give your answer to the nearest litre.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "13";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " L";
$Soln[0] = "Total volume of water needed = 18 \\(\\times \\) 700 mL = 12600 mL = 12600 \\(\\div\\) 1000 L = 12.6 L. To the nearest litre, this is <b>13</b> Litres.";

$Q[1] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table:<br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Marked out of</th><th>Student's Mark</th></tr>
<tr><td style='text-align:center'>Task 1</td><td style='text-align:center'>25</td><td>50</td><td>40</td></tr>
<tr><td>Task 2</td><td>25</td><td>50</td><td>35</td></tr>
<tr><td>Task 3</td><td>50</td><td>40</td><td>30</td></tr>
</table><br>What grade did the student receive for the course?";
$QType[1] = 0;
$QAnswers[1] = "d";
$QOptions[1] = array("0-50 Fail","51-64 Pass","65-74 Credit","75-100 Distinction");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "% mark from test 1 = 40 \\(\\div\\) 50 \\(\\times\\) 25 = 20<br>
% mark from test 2 = 35 \\(\\div\\) 50 \\(\\times\\) 25 = 17.5<br>
% mark from test 1 = 30 \\(\\div\\) 40 \\(\\times\\) 50 = 37.5<br>
Total mark = 20 + 17.5 + 37.5 = 75, which is <b>(d)</b>";

$Q[2] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of Australians who volunteered during the last 12 months.<br><img src='images/PracticeTest2b_1.jpg'><br>True/False: Between ages of 35 and 85 and over the rate of volunteering declined steadily.";
$QType[2] = 0;
$QAnswers[2] = "b";
$QOptions[2] = array("True","False","N/A","N/A");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "False. The rate increases for 65-74 year olds.";

$Q[3] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of Australians who volunteered during the last 12 months.<br><img src='images/PracticeTest2b_1.jpg'><br>What percentage of people volunteered in the 35-44 age group? Give your answer to the nearest five percent.";
$QType[3] = 1;
$QAnswers[3] = "40"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "From the graph about 39% of people in this age group volunteered. To the nearest 5% this is 40%.";

$Q[4] = "In an election for school captain, Isaac received \\(1\\over 3\\) of the votes and Brodie received \\(1\\over 4\\) of the votes. The remaining 105 votes were received by Lawrence. How many votes did Isaac receive?";
$QType[4] = 1;
$QAnswers[4] = "84";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Fraction of votes obtained by Lawrence = 1 - (\\(1\\over 3\\) + \\(1\\over 4\\) ) = \\(5\\over 12\\)<br>\\(5\\over 12\\) = 105 votes<br> \\(1\\over 12\\) = 105 \\(\\div\\) 5 = 21 votes <br> Total number of votes = \\(12\\over 12\\) = 21 \\(\\times\\) 12 = 252 votes<br>Votes obtained by Isaac = \\(1\\over 3\\) \\(\\times\\) 252 = <b>84</b> votes.";

$Q[5] = "A school has four teachers for year 1 students and 76 students enrolled. If the classes are to be as close to equal size as possible, how many students need to be placed in each class?";
$QType[5] = 1;
$QAnswers[5] = "19";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Number of students per class = 76 \\(\\div\\)4 = <b>19</b>";

$Q[6] = "A box contains red, yellow and blue balls. The probability of drawing a red ball is \\(5\\over 8\\) and the probability of drawing a yellow ball is \\(1 \\over 8 \\) . If there are 64 balls, how many of the balls are blue?";
$QType[6] = 1;
$QAnswers[6] = "16";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Probabilty of drawing a blue ball = \\(8\\over 8\\) - (\\(5\\over 8\\)+\\(1\\over 8\\)) = \\(2\\over 8\\)<br>Number of blue balls = \\(2\\over 8\\) \\(\\times \\) 64 = <b>16</b>.";

$Q[7] = "A map of a small town is shown. The school is shown in yellow. <br><img src='images/PracticeTest2b_2.jpg'><br> What is the approximate area of the school (which is coloured yellow)?";
$QType[7] = 0;
$QAnswers[7] = "c";
$QOptions[7] = array("40 500 m<sup>2</sup>","80 500 m<sup>2</sup>","112 500 m<sup>2</sup>","160 000 m<sup>2</sup>");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Area is approximately 350 \\(\\times\\) 350 - 100 \\(\\times\\) 100 = 112 500, which is option <b>(c)</b>";

$Q[8] = "A map of a small town is shown. <br><img src='images/PracticeTest2b_2.jpg'><br> The school is shown in yellow and the playing field is shown as a green circle inside the park. Students from the school are required to walk to the playing field for sport sessions. Which of the following routes will take students from school to the playing field?";
$QType[8] = 0;
$QAnswers[8] = "d";
$QOptions[8] = array("Exit the school onto Blueberry Road. Turn left and walk to the corner. Turn left again and walk to the corner. Turn left and continue to the playing field","Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn left and walk to the corner. Turn left and continue to the playing field.","Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn right and walk to the corner. Turn right and continue to the playing field.","Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn left and walk to the corner. Turn right and continue to the playing field.");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "The correct set of directions is 'Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn left and walk to the corner. Turn right and continue to the playing field', which is option <b>(d)</b>";

$Q[9] = "A map of a small town is shown. <br><img src='images/PracticeTest2b_2.jpg'><br> Which of the following set of driving directions would take you from the corner of Date Road and Tomato Street to the  cul-de-sac where Banana Road meets the pedestrian mall? ";
$QType[9] = 0;
$QAnswers[9] = "c";
$QOptions[9] = array("Drive east along Date Road. Turn North onto Onion Street. Turn West onto Banana Road.","Drive west along Date Road. Turn South onto Onion Street. Turn East onto Banana Road.","Drive north along Tomato Street. Turn west onto Apricot Road. Turn south onto Onion Street. Turn east onto Banana Road.","Drive north along Tomato Street. Turn east onto Apricot Road. Turn north onto Onion Street. Turn west onto Banana Road.");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "The correct set of directions is 'Drive north along Tomato Street. Turn west onto Apricot Road. Turn south onto Onion Street. Turn east onto Banana Road.', which is option <b>(c)</b>";

$Q[10] = "A box contains 6 blue balls, 5 red balls and 8 yellow balls. What is the probability of randomly drawing a ball that is not red? Give your answer as a decimal to 2 decimal places.";
$QType[10] = 1;
$QAnswers[10] = "0.74";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Total number of balls = 6 + 5 + 8 = 19<br>Number of non-red balls = 6 + 8 = 14<br>Proportion of balls that are not red = \\(14\\over 19\\) = 0.7368<br>Probability of randomly drawing a ball that is not red = <b>0.74</b> (to 2 decimal places).";

$Q[11] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'> <br> True/False: There are more than three times as many people employed in Education and training than in Finance and insurance services.";
$QType[11] = 0;
$QAnswers[11] = "b";
$QOptions[11] = array("True","False","N/A","N/A");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "False <b>(b)</b>. There are just over 1 400 000 people employed in education and training, and around 700 000 in finance and insurance services.";

$Q[12] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'> <br> True/False: Retail trade has a median income that is approximately double that for Accommodation and food services";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("True","False","N/A","N/A");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Retail trade median income is around $18 000 and accommodation and food services median is just over $8000, around $9000.";

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