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

$Q[0] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<table><tr><th></th><th>Task Value (%)</th><th>Student's Mark</th></tr><tr><td>Task 1</td><td>10</td><td>40/50</td></tr><tr><td>Task 2</td><td>30</td><td>55/60</td></tr><tr><td>Task 3</td><td>60</td><td>32/40</td></tr></table><br>What grade did the student receive for the course?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[0] = "d";
$QOptions[0] = array("Fail (0-49%)","Pass (50-64%)","Credit (65-74%)","Distinction (75-100%)");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "40 \\( \\div \\) 50  \\( \\times \\) 10 + 55  \\( \\div \\) 60  \\( \\times \\) 30 + 32  \\( \\div \\) 40  \\( \\times \\) 60 = 83.5<br>This is a distinction, which is answer <b>d</b>.";

$Q[1] = "1.	The streets of a particular town are laid out on a rectangular grid. The length of the grid is 2.7 km and the width is 800 m. What is the area of the town in square metres?";
$QType[1] = 1;
$QAnswers[1] = "2160000";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " m \\(^2 \\)";
$Soln[1] = "Area = 2700 m \\( \\times \\) 800 = <b>2 160 000</b> square metres.";

$Q[2] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(3 \\over 5\\). The probability that it is white is equal to the probability that it is green. If there are 9 black marbles, how many marbles are in the bag?";
$QType[2] = 1;
$QAnswers[2] = "15";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "\\(3 \\over 5\\) of the marbles = 9 marbles.<br> \\(1 \\over 5 \\) of the marbles = 9 \\( \\div \\) 3 = 3 marbles.<br> \\(5 \\over 5\\) of the marbles = all of the marbles = 3 \\( \\times \\) 5 = <b>15</b> marbles.";

$Q[3] = "A teacher is taking a geology field trip to examine a glacier and a volcano in New Zealand. She has computed the cost of the trip per person as follows:<br> Airfare = $1280 Australian dollars<br>Expenses in New Zealand = $2300 New Zealand dollars.<br>If the exchange rate is 1 Australian dollar = 1.07 New Zealand dollars, what is the cost of the trip, per person, in Australian dollars? Give your answer rounded to the nearest cent.";
$QType[3] = 1;
$QAnswers[3] = "3429.53"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Expenses in Australian dollars = $2300 \\( \\div \\) 1.07 = $2149.53 (rounded to the nearest cent)<br>Cost of trip in Australian dollars = $2149.53 + $1280 = $<b>3429.53</b>";

$Q[4] = "A maths subject consisted of two assignments and a final exam. The assignments together were worth 50% and the final exam was also worth 50%. The assignment and test marks for fifteen students are shown in the following graph:<br><br><img src='images/PracticeTest1d_1.jpg'> <br>What was the modal score (out of 50) for the assignment?";
$QType[4] = 1;
$QAnswers[4] = "40";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "To find the mode for the assignment, we look for the number of dots (students) in each vertical column (assignment mark). The vertical column with the most dots is the mode. This is <b>40</b>, which was achieved by three students.";

$Q[5] = "A maths subject consisted of two assignments and a final exam. The assignments together were worth 50% and the final exam was also worth 50%. The assignment and test marks for fifteen students are shown in the following graph:<br><br><img src='images/PracticeTest1d_1.jpg'><br>What was the range of marks for the exam?";
$QType[5] = 0;
$QAnswers[5] = "a";
$QOptions[5] = array("27","30","50","78");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "range = highest exam mark - lowest exam mark = 49 - 22 = 27, which is answer <b>a</b>";

$Q[6] = "A maths subject consisted of two assignments and a final exam. The assignments together were worth 50% and the final exam was also worth 50%. The assignment and test marks for fifteen students are shown in the following graph:<br><br><img src='images/PracticeTest1d_1.jpg'><br>True/False: Less than one third of students performed better in the exam than in the assignment.";
$QType[6] = 0;
$QAnswers[6] = "b";
$QOptions[6] = array("True","False","N/A","N/A");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Exactly one third of students (5 students) performed better in the exam than in the assignment. Several more students performed equally well in the assignment and the exam. So the correct answer is false (option <b>b</b>)";

$Q[7] = "Five students decided to raise money for charity. The amounts that each of them raised are shown in the following table. The amount raised by student E is missing. <br><table><tr><th>Student</th><th>Dollars raised</th></tr><tr><td>A</td><td>70</td></tr><tr><td>B</td><td>30</td></tr><tr><td>C</td><td>50</td></tr><tr><td>D</td><td>60</td></tr><tr><td>E</td><td></td></tr></table><br>If the students raised an average of $50 each, how much money was raised by student E?";
$QType[7] = 0;
$QAnswers[7] = "a";
$QOptions[7] = array("$40","$45","$50","$55");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "If the average amount raised by each student was $50, then the sum of the amounts they raised was 5 \\( \\times \\) $50 = $250<br> Amount raised by E = $250 - (70 + 30 + 50 + 60) = $40, which is option <b>a</b>";

$Q[8] = "1.	The ratio of male to female students in a class is 5:3. If there are 20 boys, how many girls are there?";
$QType[8] = 1;
$QAnswers[8] = "12"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Number of girls = 20 \\( \\div \\) 5 \\( \\times \\) 3 = 12<br>There are <b>12</b> girls in the class.";

$Q[9] = "The amount of money raised by each grade in a school walkathon are shown in the following table. <table><tr><th>Grade</th><th>Amount</th></tr><tr><td>Kindergarten</td><td>$350</td></tr><tr><td>1</td><td>$270</td></tr><tr><td>2</td><td>$330</td></tr><tr><td>3</td><td>$300</td></tr><tr><td>4</td><td>$290</td></tr><tr><td>5</td><td>$260</td></tr><tr><td>6</td><td>$400</td></tr></table><br>What was the median amount raised?";
$QType[9] = 1;
$QAnswers[9] = "300";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "$";
$suffix[9] = "";
$Soln[9] = "Amounts in order: 260, 270, 290, 300, 330, 350, 400 <br> The median = the middle amount = $<b>300</b> ";

$Q[10] = "A subject required students to complete three assessment tasks. The table below shows the value of each task, and also a student’s mark for each of the tasks.<br><table><tr><th>Task</th><th>Value</th><th>Student's Mark</th></tr><tr><td>1</td><td>20%</td><td>36/40</td></tr><tr><td>2</td><td>30%</td><td>70%</td></tr><tr><td>3</td><td>50%</td><td>40/50</td></tr></table><br>What was the student’s final mark, as a percentage? Give your answer to the nearest whole percentage.";
$QType[10] = 1;
$QAnswers[10] = "79";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "%";
$Soln[10]= "20 \\( \\times \\) \\(36 \\over 40\\) + 30 \\( \\times \\) 70 \\( \\div \\) 100 + 50 \\( \\times \\) \\(40 \\over 50\\) = 79 / 100 = <b>79</b>%";

$Q[11] = "A box contains red, yellow and blue balls. The probability of drawing a red ball is 5/8 and the probability of drawing a yellow ball is 1/8 . What is the probability of drawing a blue ball?";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("\\(1 \\over 8\\)","\\(5 \\over 8\\)","\\(1 \\over 4\\)","\\(3 \\over 5\\)");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Probability of drawing a blue ball = \\(8 \\over 8\\) - \\(5 \\over 8 \\) - \\(1 \\over 8\\) = \\(2 \\over 8 \\) = \\(1 \\over 4\\), which is option <b>c</b>";

$Q[12] = "A square paddock has an area of 1 square kilometre. What is the length of each side in metres?";
$QType[12] = 1;
$QAnswers[12] = "1000";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " m";
$Soln[12] = "Each side of the paddock is 1 km = <b>1000</b> m long.";

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