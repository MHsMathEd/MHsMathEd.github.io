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

$Q[0] = "A person earns $70304 a year. They pay $370 a week in rent, $780 a year on utilities (electricity and water), $150 a week in groceries and other expenses. Each week, how much money is left for recreation and saving?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "817";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Weekly income = $70304 \\(\\div\\) 52 = $1352<br>Weekly utility expense = $780 \\(\\div\\) 52 = $15<br>Total weekly expense = $370 + 15 + 150 = $535<br>Weekly spare money = $1352 - 535 = $<b>817</b>";

$Q[1] = "There are four runners in the school team in the 4 x 100 m relay. The average speed of each runner is given in the following table.<br><br>
<table>
<tr><th>Runner</th><th>Averages Speed</th></tr>
<tr><td>1</td><td>5 ms<sup>-1</sup></td></tr>
<tr><td>2</td><td>6 ms<sup>-1</sup></td></tr>
<tr><td>3</td><td>4 ms<sup>-1</sup></td></tr>
<tr><td>4</td><td>8 ms<sup>-1</sup></td></tr>
</table><br><br>How long will it take the team to complete the relay? Give your answer to the nearest hundredth of a second.";
$QType[1] = 1;
$QAnswers[1] = "74.17";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " s";
$Soln[1] = "Runner 1 time = 100 m \\(\\div\\) 5 ms<sup>-1</sup> = 20 s<br>
Runner 2 time = 100 m \\(\\div\\) 6 ms<sup>-1</sup> = 16.667 s<br>
Runner 3 time = 100 m \\(\\div\\) 4 ms<sup>-1</sup> = 25 s<br>
Runner 4 time = 100 m \\(\\div\\) 8 ms<sup>-1</sup> = 12.5 s<br>
Total running time = 20 + 16.667 + 25 + 12.5 = <b>74.17</b> s";

$Q[2] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of Australians holding multiple jobs, and their median income.<br><br><img src='images/PracticeTest8b_1.jpg'><br><br>Approximately how many thousands of females held 3 concurrent jobs?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("50","100","150","200");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "About 150 000 females held 3 concurrent jobs, which is option <b>(c)</b>";

$Q[3] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of Australians holding multiple jobs, and their median income.<br><br><img src='images/PracticeTest8b_1.jpg'><br><br>What is the most precise statement that can be made about the income of males holding 2 concurrent jobs? ";
$QType[3] = 0;
$QAnswers[3] = "d"; 
$QOptions[3] = array("over $45000","between $45000 and $60000","between $45000 and $50000","between $45000 and $48000");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "The markings on the money scale are $3000 apart. So the median income of males holding 2 concurrent jobs is between $45000 and $48000, which is option <b>(d)</b>";

$Q[4] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of Australians holding multiple jobs, and their median income.<br><br><img src='images/PracticeTest8b_1.jpg'><br><br>True/False: From this graph you can conclude that holding more concurrent jobs leads to a higher income.";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Holding more concurrent jobs appears to result in a lower median income, so the assertion is false <b>(b)</b>";

$Q[5] = "A box contains green balls and white balls. There are twice as many green balls as there are white balls. What is the probability of drawing a white ball?";
$QType[5] = 0;
$QAnswers[5] = "c";
$QOptions[5] = array("\\(\\frac{1}{4}\\)","\\(\\frac{1}{2}\\)","\\(\\frac{1}{3}\\)","\\(\\frac{2}{3}\\)");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "The ratio of green:white = 2:1, so \\(\\frac{1}{3}\\) of the balls are white, so the probability of drawing a white ball is also \\(\\frac{1}{3}\\), which is option <b>(c)</b>.";

$Q[6] = "It takes two students 30 minutes to collect and empty all of the recycling bins from the school’s classrooms. How many minutes would it take three students, working at the same rate, to complete the work?";
$QType[6] = 1;
$QAnswers[6] = "20";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " minutes";
$Soln[6] = "2 students take 30 minutes, so<br>1 student would take 2 \\(\\times\\) 30 minutes = 60 minutes, so<br> 3 students would take 60 \\(\\div\\) 3 minutes = <b>20</b> minutes.";

$Q[7] = "A seminar started at 11:30 am and concluded at 2:15 pm. How many hours long was the seminar?";
$QType[7] = 1;
$QAnswers[7] = "2.75";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " hours";
$Soln[7] = "11:30 am to 1:30 pm is 2 hours.<br>1:30 pm to 2:15 pm is 45 minutes = 45 \\(\\div\\) 60 hours = 0.75 hours.<br> Seminar length = 2 + 0.75 hours = <b>2.75</b> hours.";

$Q[8] = "A student ran a 4 km cross country course at an average speed of 15 kilometres per hour. The cutoff time for the regional team was 14 minutes and 38 seconds. How many seconds to slow was the student’s time?";
$QType[8] = 1;
$QAnswers[8] = "82"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " seconds";
$Soln[8] = "Student's time in hours = 4 km \\(\\div\\) 15 km/hour<br> Student's time in minutes = 4 km \\(\\div\\) 15 km/hour \\(\\times\\) 60 minutes = 16 minutes.<br>Time over = 16 minutes - 14 minutes and 38 seconds = 1 minute and 22 seconds.<br>Time over in seconds = 60 + 22 seconds = <b>82</b> seconds.";

$Q[9] = "A science teacher needs 2 litres of a compound that is made up of two chemicals, A and B in the ratio 3:2. How many millilitres of chemical A are required to make up the compond?";
$QType[9] = 1;
$QAnswers[9] = "1200";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " mL";
$Soln[9] = "The total 2 L = 2000 mL is made up of 2 parts in the ration 3:2. <br> This means that the whoe 2000 mL is divided into 3 + 2 = 5 parts. <br> 1 part = 2000 mL \\(\\div\\) 5 = 400 mL<br>Chemical A makes up 3 parts = 400 mL \\(\\times\\) 3 = <b>1200</b> mL";

$Q[10] = "The graph below contains boxplots showing the achievement of Year 3 students in reading by state and territory in 2018.<br><br><img src='images/PracticeTest8b_2.jpg'><br><br>True/False: More students sat the test in the NT than in any other state or territory.";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("True","False","N/A","N/A");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "This is false (option <b>(b)</b>). This graph does not tell us anything about the number of students who sat the test.";

$Q[11] = "The graph below contains boxplots showing the achievement of Year 3 students in reading by state and territory in 2018.<br><br><img src='images/PracticeTest8b_2.jpg'><br><br>True/False: The median for the whole of Australia was in Band 5.";
$QType[11] = 0;
$QAnswers[11] = "a";
$QOptions[11] = array("True","False","N/A","N/A");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "From the graph, this is True <b>(a)</b>.";

$Q[12] = "The graph below contains boxplots showing the achievement of Year 3 students in reading by state and territory in 2018.<br><br><img src='images/PracticeTest8b_2.jpg'><br><br>True/False: All the Victorian students in the 25th-50th percentiles outperformed all the NT students in the 25th-50th percentiles.";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("True","False","N/A","N/A");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "From the graph, this is True <b>(a)</b>.";


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