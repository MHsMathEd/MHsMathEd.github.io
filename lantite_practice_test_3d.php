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

$Q[0] = "A family has a weekly, after-tax income of $1370. They spend $280 each week on groceries and $620 each week on rent. What percentage of their after-tax income is spent on rent? Give your answer to the nearest whole number.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "45";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "%";
$Soln[0] = "Percentage of income spent on rent = \\(620\\over 1370\\) \\(\\times\\) 100% = <b>45</b>%, to the nearest whole number.";

$Q[1] = "The graph shows the percentage of Australia’s population living in each of the states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><img src='images/PracticeTest3d_1.jpg'><br>How many people were living in Western Australia? Give your answer to the nearest whole number.";
$QType[1] = 1;
$QAnswers[1] = "2360134";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "People in Western Australia = 10.4 % \\(\\times\\) 22693600 = <b>2360134</b>";

$Q[2] = "A coach took a class on an excursion to Ceduna. It left the school at 7.30 am and arrived in Ceduna at 1.00 pm. It travelled at an average speed of 60 km/h for the first half hour. Then it travelled at an average speed of 90 km/hour for the remainder of the trip. How many kilometres was the trip?";
$QType[2] = 1;
$QAnswers[2] = "480";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " km";
$Soln[2] = "Trip time = 5 hours and 30 minutes.<br>Distance covered in the first 30 minutes = 0.5 \\(\\times\\) 60 = 30 km<br>Distance covered in the next 5 hours = 5 \\(\\times\\) 90 = 450 km<br>Total distance travelled = 450 + 30 = 480 km<br>The trip was <b>480</b> km long.";

$Q[3] = "The graph shows height for age percentiles for boys.<br><img src='images/PracticeTest3d_2.jpg'><br>A ten-year-old boy who was 135 cm tall would be between which percentiles? ";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("10%-25%","25%-50%","50%-75%","75%-90%");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "A ten-year-old boy who was 135 cm tall would be between the 25% and 50% percentiles, which is option <b>(b)</b>.";

$Q[4] = "The graph shows height for age percentiles for boys.<br><img src='images/PracticeTest3d_2.jpg'><br><br>Which of these heights would result in a 13-year-old boy being on the 25th percentile?";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("150 cm","163 cm","165 cm","170 cm");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "A 13-year-old boy on the 25th percentile is 150 cm tall (option <b>(a)</b>).";

$Q[5] = "The graph shows height for age percentiles for boys.<br><img src='images/PracticeTest3d_2.jpg'><br><br>If a 115 cm tall boy is of average height, how old is he?";
$QType[5] = 1;
$QAnswers[5] = "6";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " years old";
$Soln[5] = "Average = 50th centile. From the graph, the boy is <b>6</b> years old.";

$Q[6] = "Given that 1 millilitre of water weighs 1 gram, what is the weight, in kilograms, of 3 L of water?";
$QType[6] = 1;
$QAnswers[6] = "3";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " kg";
$Soln[6] = "1 mL = 0.001 L<br>1 g 0.001 kg<br> 0.001 L of water weighs 0.001 kg.<br> 1 L of water weighs 1 kg<br> 3 L of water weighs <b>3</b> kg.";

$Q[7] = "A box contains red, white and blue raffle tickets. The probability of randomly drawing each colour of ticket is given in the following table.
<table>
<tr><th>ticket Colour</th><th>Probability of being Randomly Drawn</th></tr>
<tr><td>Red</td><td>0.4</td></tr>
<tr><td>White</td><td>0.35</td></tr>
<tr><td>Blue</td><td>0.25</td></tr>
</table><br>If there are 50 blue tickets in the box, how many white tickets are in the box";
$QType[7] = 1;
$QAnswers[7] = "70";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "50 tickets = 0.25 of the total, so there are 4 \\(\\times\\) 50 = 200 tickets in the box<br>Number of white tickets = 0.35 \\(\\times\\) 200 = <b>70</b>";

$Q[8] = "A teacher bought a book during a sale when 30% was taken off the marked price. If the teacher paid $63, what was the book’s original price";
$QType[8] = 1;
$QAnswers[8] = "90"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "70% of original cost = $63<br> 100% of original cost = $63 \\(\\div\\) 70 \\(\\times\\) 100 = $<b>90</b>";

$Q[9] = "A teacher wanted to compare student results in two assignments for her class of 20 students so she put the data into a scatter plot, as shown.<br><img src='images/PracticeTest3c_3.jpg'><br>True/False: All students got a better mark in the second assignment.";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("True","False","N/A","N/A");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "The statement is true (option <b>(a)</b>).";

$Q[10] = "A teacher wanted to compare student results in two assignments for her class of 20 students so she put the data into a scatter plot, as shown.<br><img src='images/PracticeTest3c_3.jpg'><br>What was the median mark achieved for Assignment 1?";
$QType[10] = 1;
$QAnswers[10] = "74";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Median = middle mark = <b>74</b>";

$Q[11] = "A teacher wanted to compare student results in two assignments for her class of 20 students so she put the data into a scatter plot, as shown.<br><img src='images/PracticeTest3c_3.jpg'><br>What was the range of marks achieved in Assignment 2?";
$QType[11] = 1;
$QAnswers[11] = "33";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Range = largest - smallest = 100 - 67 = <b>33</b>";

$Q[12] = "A course involved four assessment tasks. All tasks were of equal value.
<br>
<table>
<tr><th></th><th>Task Value (%)</th></tr>
<tr><td>Task 1</td><td>40/40</td></tr>
<tr><td>Task 2</td><td>35/40</td></tr>
<tr><td>task 3</td><td>30/40</td></tr>
<tr><td>Task 4</td><td>26/40</td></tr>
</table><br>
What was the student’s overall mark, as a percentage? Give your answer to the nearest whole percent";
$QType[12] = 1;
$QAnswers[12] = "82";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "mark as a percentage = 40 \\(\\div\\) 40 \\(\\times\\) 25 + 35 \\(\\div\\) 40 \\(\\times\\) 25 + 30 \\(\\div\\) 40 \\(\\times\\) 25 + 26 \\(\\div\\) 40 \\(\\times\\) 25 = 25 + 21.875 + 18.75 + 16.25 = <b>82</b> to the nearest whole percent.";

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