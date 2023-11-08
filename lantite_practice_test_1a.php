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

$Q[0] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs and the median income for each job, separated by age and gender. <br><br> <img src='images/PracticeTest1a_1.jpg'> <br> True or False: The median income for a 45 year old female is between $45000 and $60000";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[0] = "b";
$QOptions[0] = array("True","False","N/A","N/A");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "False <b>(b)</b>: The median income for a 45 year old female is between $30000 and $45000";

$Q[1] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs and the median income for each job, separated by age and gender. <br><br> <img src='images/PracticeTest1a_1.jpg'> <br> True or False: The number of males and females in the workforce is very similar for 50 to 54 year olds.";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("True","False","N/A","N/A");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "True <b>(a)</b>: There are just over 800 000 males and just over 800 000 females between 50 and 54 years old in the workforce.";

$Q[2] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs and the median income for each job, separated by age and gender. <br><br> <img src='images/PracticeTest1a_1.jpg'> <br> True or False: The median income is lowest for people aged over 80 years.";
$QType[2] = 0;
$QAnswers[2] = "b";
$QOptions[2] = array("true","False","N/A","N/A");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "False (<b>b</b>): Income is lowest for people aged 14 years and under.";

$Q[3] = "The school assembly began at 11.23 am and concluded at 1.08 pm. How many minutes long was the assembly?";
$QType[3] = 1;
$QAnswers[3] = "105"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "minutes";
$Soln[3] = "There are 7 minutes to 11.30; 30 minutes to 12.00; 8 minutes to 12.08 and 60 more minutes to 1.08. <br> 7 + 30 + 8 + 60 = <b>105</b> minutes";

$Q[4] = "8 shirts cost $56. What would 10 shirts cost? ";
$QType[4] = 1;
$QAnswers[4] = "70";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "8 shirts cost $56. <br> 1 shirt costs $56 \\( \\div \\) 8 = $7 <br> 10 shirts cost $7 \\( \\times \\) 10 = $<b>70</b>";

$Q[5] = "A teacher wishes to buy a particular book. He has looked online and found four different suppliers, as shown in the following table. <table style='border: 1px solid black;'><tr><th>Country of Supplier</th><th>Cost of book plus delivery</th><th>Exchange Rate</th></tr><tr><td>Australia</td><td>268 Australian dollars</td><td></td></tr><tr><td>UK</td><td>138 British pounds</td><td>$1 Au = 0.55 British pounds</td></tr><tr><td>USA</td><td>187 US dollars</td><td>$1 Au = 0.72 US dollars</td></tr><tr><td>Canada</td><td>280 Canadian dollars</td><td>$1 Au = 0.96 Canadian dollars</td></tr></table><br>Which supplier offers the cheapest price for the teacher?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("Australian","UK","USA","Canadian");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Cost in Australian dollars from<Br> Australia = $268 AU<br>UK = 138 \\( \\div \\) 0.55 = $250.91 AU<br>USA = 187 \\( \\div \\) 0.72 = $259.72 AU<br> Canada = 280 \\( \\div \\) 0.96 = 4291.67 AU<br> So the best value for money is from the UK supplier, which is option (<b>b</b>).";

$Q[6] = "The boxplot below shows the marks achieved by a class of 30 students in a test. <br> <img src='images/PracticeTest1a_2.jpg'> <br>What was the median mark for the class?";
$QType[6] = 1;
$QAnswers[6] = "36";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "The median is indicated by the black line in the middle of the boxplot, which is <b>36</b>.";

$Q[7] = "Stage 3 teachers were organising an incursion for three classes of 27 students and four classes of 29 students. The incursion was going to cost $1280.50 This cost was to be passed on to the students. How much should each student be charged?";
$QType[7] = 1;
$QAnswers[7] = "6.50";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "3 \\( \\times \\) 27 + 4 \\( \\times \\) 29 = 197 <br> $1280.50 \\( \\div \\) 197 = $<b>6.50</b>";

$Q[8] = "1.	A box holds 50 pencils. 15 of the pencils are lead pencils, the rest are coloured pencils. What fraction of the pencils are coloured pencils?";
$QType[8] = 0;
$QAnswers[8] = "d"; 
$QOptions[8] = array("\\(3 \\over 5 \\)","\\(3 \\over 10 \\)","\\(7 \\over 5 \\)","\\(7 \\over 10 \\)");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Number of coloured pencils = 50 - 15 = 35<br> \\(35 \\over 50 \\) = \\(7 \\over 10 \\), which is answer <b>d</b>";

$Q[9] = "A person holds down two casual jobs. He earns $25 per hour from the first job, and $42 per hour from the second job. If he works A hours a week in his first job, and B hours a week in his second job, which formula represents his weekly income in dollars?";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("25A + 42B","25B + 42A","7 x (25A + 42B)","7 x (25B + 42A)");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "<b>a</b>: 25A + 42B";

$Q[10] = "15 students completed an online test. They were allowed up to 1 hour to complete the test. The test was marked out of 40. The following graph shows the amount of time that students took to complete the online test, and their score.<br><img src='images/PracticeTest1a_3.jpg'><br>True/False: The students who used the whole hour working on the test achieved the highest results.";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("True","False","N/A","N/A");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "False (<b>b</b>): the highest results were achieved by two students who used less than the full hour.";

$Q[11] = "15 students completed an online test. They were allowed up to 1 hour to complete the test. The test was marked out of 40. The following graph shows the amount of time that students took to complete an online test, and their score.<br><img src='images/PracticeTest1a_3.jpg'><br>What was the lowest mark achieved, as a percentage?";
$QType[11] = 1;
$QAnswers[11] = "25";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "%";
$Soln[11] = "Lowest mark = \\(10 \\over 40 \\) = <b>25</b>%";

$Q[12] = "If an exercise bike costs three times as much as a basketball hoop, and the hoop costs $387, how much would it cost to buy two hoops and one exercise bike?";
$QType[12] = 1;
$QAnswers[12] = "1935";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "Cost of hoop = $387<br>Cost of bike = 3 \\( \\times \\) $387 = $1161<br> Cost of 2 hoops + 1 bike = 2 \\( \\times \\) $387 + $1161 = $<b>1935</b>";

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