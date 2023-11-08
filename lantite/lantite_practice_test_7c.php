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

$Q[0] = "The 87 students of kindergarten at a school need to be divided into three equal teams for some novelty races. How many students should be placed into each team?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "29";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Students per team = 87 \\(\\div\\) 3 = 29";

$Q[1] = "A teacher is taking the school band on a tour to Botswana. The exchange rate is 1 Australian dollar = 7.61 Botswanan Pula. The teacher wants to hire a bus for the band during their trip. The cost of bus hire is 18 888 Pula. What is the cost to hire the bus in Australian dollars? Give your answer to the nearest dollar.";
$QType[1] = 1;
$QAnswers[1] = "2482";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "7.61 Pula = $1<br>1 Pula = $1 \\(\\div\\) 7.61<br>18888 Pula = $\\(1 \\div 7.61 \\times 18888\\) = $<b>2482</b>";

$Q[2] = "A teacher is taking the school band on a tour to Botswana. At the end of the trip the teacher has 1522 Pula, which she wishes to convert to Australian dollars. An exchange offers a rate of 1 Pula = 13 cents Australian. How many Australian dollars will the teacher receive? Give your answer to the nearest cent.";
$QType[2] = 1;
$QAnswers[2] = "197.86";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "1 Pula = 13 cents<br>1522 Pula = 13 \\(\\times\\) 1522 cents = 19786 cents = 19786 \\(\\div\\) 100 dollars = $197.86";

$Q[3] = "A box contains red, yellow and blue balls. The probability of drawing a red ball is \\(\\frac{5}{8}\\) and the probability of drawing a yellow ball is \\(\\frac{1}{8}\\). If there are 8 balls, how many of the balls are blue? ";
$QType[3] = 1;
$QAnswers[3] = "2"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Probability of drawing a blue ball = \\(\\frac{8}{8}\\) - \\(\\frac{5}{8}\\) - \\(\\frac{1}{8}\\) = \\(\\frac{2}{8}\\)<br> So \\(\\frac{2}{8}\\) of the balls are blue.<br>Number of blue balls = \\(\\frac{2}{8} \\times 8 \\) = <b>2</b>";

$Q[4] = "The graph shows the growth in the rate of attainment of higher level qualifications for 20-64 year olds between 2001 and 2011.<br><img src='images/PracticeTest7c_1.jpg'><br>True/False: This graph shows that the rate of attainment of higher level qualifications increased in every region of Australia over the period.";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "false: less than 10% can include increases of 0%, and even decreases.";

$Q[5] = "The number of students who tried out for school teams in soccer, volleyball and tennis were recorded in a Venn diagram. Only 15 students did not try out for any team.<br><img src='images/PracticeTest7c_2.jpg'><br>How many students did not try out for the school tennis team.";
$QType[5] = 1;
$QAnswers[5] = "132";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Number of students who did not try out for tennis = the sum of all the numbers not inside the tennis circle<br>= 83 + 12 + 22 + 15 = <b>132</b>";

$Q[6] = "The number of students who tried out for school teams in soccer, volleyball and tennis were recorded in a Venn diagram. Only 15 students did not try out for any team.<br><img src='images/PracticeTest7c_2.jpg'><br>How many students tried out for exactly two teams?";
$QType[6] = 1;
$QAnswers[6] = "21";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Number of students who tried out for exactly two teams = sum of numbers in exactly 2 circles <br> = 4 + 12 + 5 = <b>21</b>";

$Q[7] = "A teacher is reviewing the final results for the year 10 students in history. He observes that the median mark was 60% and the interquartile range was 15%. The assessment was made up of three tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task value (%)</th><th>Marked out of</th><th>Student's mark</th></tr>
<tr><td>Task 1</td><td>25</td><td>50</td><td>40</td></tr>
<tr><td>Task 2</td><td>30</td><td>60</td><td>35</td></tr>
<tr><td>Task 3</td><td>45</td><td>40</td><td>30</td></tr>
</table><br>The teacher needs to determine which grade to award this student based on the overall mark. Which grade should the student be awarded?";
$QType[7] = 0;
$QAnswers[7] = "b";
$QOptions[7] = array("A: 86-100%","B: 71-85%","C: 51-70%","D: 0-49%");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Student's overall mark = 40\\(\\div\\) 50 \\(\\times\\) 25 + 35 \\(\\div\\) 60 \\(\\times\\) 30 + 30 \\(\\div\\) 40 \\(\\times\\) 45 = 71.25<br>Grade to be awarded = B, 71-85%, which is option <b>b</b>.";

$Q[8] = "The dimensions of four rectangular desks are given in the following table. Which desk has the greatest area?<br>
<table>
<tr><th></th><th>Length (cm)</th><th>Width (cm)</th></tr>
<tr><td>Desk A</td><td>80</td><td>80</td></tr>
<tr><td>Desk B</td><td>120</td><td>60</td></tr>
<tr><td>Desk C</td><td>110</td><td>70</td></tr>
<tr><td>Desk D</td><td>180</td><td>40</td></tr>
</table><br>";
$QType[8] = 0;
$QAnswers[8] = "c"; 
$QOptions[8] = array("A","B","C","D");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "<table>
<tr><th></th><th>Length (cm)</th><th>Width (cm)</th><th>Area</th></tr>
<tr><td>Desk A</td><td>80</td><td>80</td><td>80 \\(\\times\\) 80 = 6400</td></tr>
<tr><td>Desk B</td><td>120</td><td>60</td><td>120 \\(\\times\\) 60 = 7200</td></tr>
<tr><td>Desk C</td><td>110</td><td>70</td><td>110 \\(\\times\\) 70 = 7700</td></tr>
<tr><td>Desk D</td><td>180</td><td>40</td><td>180 \\(\\times\\) 40 = 7200</td></tr>
</table><br>Therefore the desk with the largest area is C, which is option <b>(c)</b>.";

$Q[9] = "A trip taking 4 hours and 48 minutes started at 1100 hours. At what time did it finish? ";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("1548 hours","1448 hours","1248 hours","0348 hours");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "1100 hours + 4 hours and 48 minutes = 1548 hours, which is option <b>(a)</b>";

$Q[10] = "80 students need to be transported to the Performing Arts Centre for a performance. The students need to be at the Performing Arts Centre by 12:30 pm. The bus can only hold 64 students so the bus will need to take some of the students to the Centre, then return to school to collect and take the remaining students. The bus trip from school to the Centre takes 15 minutes when the bus travels at an average speed of 40 km/h. How far will the bus travel from the time it first arrives at the school to the time when all of the students are at the Performing Arts Centre?";
$QType[10] = 1;
$QAnswers[10] = "30";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " km";
$Soln[10]= "The bus will need to travel between the school and the Arts Centre 3 times: once to take the first load, once back, and once to take the second load.<br>15 minutes = 15 \\(\\div\\) 60 hours = 0.25 hours<br>Distance between school and Arts Centre = speed \\(\\times\\) time = 40 km/h \\(\\times\\) 0.25 h (note that the speed is per hour and the time is in hours - the time units must be the same)<br> = 10 km<br>Total trip distance = 3\\(\\times\\) 10 km = <b>30</b> km.";

$Q[11] = "Students needed to complete an adventure course that involved crossing a raised swing bridge. The bridge was rated for a maximum load of 0.2 tonnes. If the students each weigh no more than 35 kg, what is the maximum number of students that could go on the bridge at any one time?";
$QType[11] = 1;
$QAnswers[11] = "5";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "0.2 tonnes = 0.2 \\(\\times\\) 1000 = 200 kg<br>Maximum number of students = 200 \\(\\div\\) 35 = 5.71<br>As we cannot have a fraction of a student we need to round down: rounding up would take us over the limit for the bridge.<br>The bridge can hold up to <b>5</b> students.";

$Q[12] = "A person earns $70300 a year. They pay $370 a week in rent, $150 a quarter on utilities (electricity and water), $150 a week in groceries and other expenses. What percentage of their income is not spent on these necessities? Round your answer to the nearest percent.";
$QType[12] = 1;
$QAnswers[12] = "61";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "%";
$Soln[12] = "You need to convert everything to annual income or to weekly income. I will convert everything to annual income.<br>Total weekly expenditure = 370 + 150 = 520<br>Total annual expenditure = \\(520 \\times 52 + 150 \\times 4 = 27640\\)<br>Annual income remaining after expenses = 70300 - 27640 = 42660<br>Income remaining as a proportion of total income = 42660 \\(\\div\\) 70300 = 60.68, which rounds to <b>61</b>%.";

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