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

$Q[0] = "To get to school a teacher walks 15 minutes to the bus stop. He has an 8 minute bus ride, a 6 minute wait, a 22 minute train trip and then a 7 minute walk. How long is the whole trip?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "58";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "minutes";
$Soln[0] = "15 + 8 + 6 + 22 + 7 = 58. <br> The whole trip takes <b>58</b> minutes.";

$Q[1] = "A town has two secondary schools. The first school has 650 students in years 7 to 10, and 118 students in years 11 and 12. The second school has 873 students in total. How many more students does the larger school have?";
$QType[1] = 1;
$QAnswers[1] = "105";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "650 + 118 = 768. <br> 873 - 768 = 105. <br> Thus there are <b>105</b> more students in the larger school.";

$Q[2] = "A teacher is taking a field trip to Mt Gambier. The cost to stay in hostel accommodation is $33 per person per night. What is the total cost for twenty four people to stay for three nights?";
$QType[2] = 1;
$QAnswers[2] = "2376";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "$33 \\( \\times \\) 24 \\( \\times \\) 3 = $<b>2376</b>";

$Q[3] = "How many minutes are in 1.25 hours?";
$QType[3] = 1;
$QAnswers[3] = "75"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "minutes";
$Soln[3] = "1.25 hours = 1.25 \\( \\times \\) 60 minutes = <b>75</b> minutes";

$Q[4] = "\\(1 \\over 4 \\) + \\(1 \\over 2 \\) = ";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("\\(1 \\over 8 \\)","\\(2 \\over 4 \\)","\\(1 \\over 2 \\)","\\(3 \\over 4 \\)");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "\\(1 \\over 4 \\) + \\(1 \\over 2 \\) = \\(1 \\over 4 \\) + \\( (1 \\times 2) \\over (2 \\times 2) \\) = \\( 1 \\over 4 \\) + \\(2 \\over 4 \\) = \\( 3 \\over 4 \\) <br> which is answer <b>(d)</b>.";

$Q[5] = "Stage 2 teachers have taken their 85 students on an excursion to a national park. The park rangers provide a tour of the park for the chidren. Each park ranger will take a group with a maximum of 15 children. How many park rangers are required to provide tours for all of the children?";
$QType[5] = 1;
$QAnswers[5] = "6";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "85 \\( \\div \\) 15 = 5.6666... This means that there are enough children to fill 5 groups, and there will be some children left over who will require a sixth group. <br> So the answer is <b>6</b> groups.";

$Q[6] = "A student decides to train for the 3 km school cross country for one week. He decides to try to run 3 km over the course of the week as follows. He intends to run 100 m the first day, 200 m the second day, 300 m the third day, 400 m the fourth day, 500 m the fifth day, 600 m the sixth day and 700 m on the seventh day. By the end of the week, how many metres less than 3 km will he have run?";
$QType[6] = 1;
$QAnswers[6] = "200";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "m";
$Soln[6] = "100 + 200 + 300 + 400 + 500 + 600 + 700 = 2800 m. <br> 3km = 3000 m. <br> 3000 - 2800 = 200. <br> He will be <b>200</b> m short of his goal.";

$Q[7] = "Two students work together to complete a two-page worksheet. Each page had 20 questions. The first student completes \\(4 \\over 5 \\) of the questions on the first page and \\(3 \\over 10 \\) of the questions on the second page. What percentage of the questions did the second student complete?";
$QType[7] = 1;
$QAnswers[7] = "45";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "%";
$Soln[7] = "On the first sheet the second student completed \\(1 \\over 5 \\) of 20 questions = 4 questions. <br> On the second sheet the student completed \\(7 \\over 10 \\) of 20 questions = 14 questions. <br> So the second student completed 18 of 40 questions. <br> As a percentage, this is 18 \\( \\div \\) 40 \\( \\times \\) 100 = <b>45</b>%";

$Q[8] = "A school has four year 5 classes. The class sizes are <table style='width:30%'><tr><th style='text-align: left'>Class</th><th style='text-align: left'>Size</th></tr><tr><td>5B</td><td>23</td></tr><tr><td>5M</td><td>25</td></tr><tr><td>5J</td><td>22</td></tr><tr><td>5P</td><td>26</td></tr></table> What is the average class size?";
$QType[8] = 1;
$QAnswers[8] = "24"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "(23 + 25 + 22 + 26) \\( \\div \\) 4 = <b>24</b> students on average in each class.";

$Q[9] = "A school buys 200 reams of paper for a photocopier. On average the school administration officer puts two reams of paper twice a day into the photocopier. How many days would the 200 reams be expected to last?";
$QType[9] = 1;
$QAnswers[9] = "50";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "days";
$Soln[9] = "200 \\( \\div \\) (2 + 2) = <b>50</b> days";

$Q[10] = "A small indendent school is charged for its internet usage based on the amount of data that is used. The rate is $5 for 500MB. Over a 1 month period, the school uses 670MB in the first week, 940MB in the second week, 463MB in the third week, and 927MB in the fourth week. What was their internet usage bill for the month?";
$QType[10] = 1;
$QAnswers[10] = "30.00";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "670 + 940 + 463 + 927 = 3000 MB used in the month. <br> 3000 \\( \\div \\) 500 = 6 blocks of data used. <br> $5 \\( \\times \\) 6 = $<b>30.00</b>";

$Q[11] = "Eight tubes of paint last two classes for one term. How many tubes of paint would be required for three similar classes for one term?";
$QType[11] = 1;
$QAnswers[11] = "12";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "8 tubes for 2 classes means<br> (divide both sides by 2) <br> 4 tubes for 1 class <br> (multiply both sides by 3) <br> So <b>12</b> tubes are required for 3 classes.";

$Q[12] = "If six painters paint 10 classrooms in four days, how many days are needed for four painters to paint 30 classrooms?";
$QType[12] = 1;
$QAnswers[12] = "18";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "6 painters need 4 days for 10 classrooms <br> 1 painter will take 6 times as long to do the job. So divide the number of painters by 6 and multiply the number of days by 6. <br> 1 painter needs 24 days for 10 classrooms. <br> Now to do three times as many classrooms will take the painter three times as long: <br> 1 painter needs 24 \\( \\times \\) 3 = 72 days for 30 classrooms. <br> 4 painters will take one quarter the time, so multiply the number of painters by 4 and divide the time by 4. <br> 4 painters need 72 \\( \\div \\) 4 = <b>18</b> days to paint 30 classrooms.";

$Q[13] = "A student worked on an assignment for three quarters of an hour on Friday and three and a half hours on Saturday. How many hours did the student spend on the assignment? Give your answer in decimal format to 2 decimal places.";
$QType[13] = 1;
$QAnswers[13] = "4.25";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "hours";
$Soln[13] = "\\( 3 \\over 4 \\) = 0.75. <br> 3 and \\( 1 \\over 2 \\) = 3.5. <br> 0.75 + 3.5 = <b>4.25</b> hours.";

$Q[14] = "A city has a population of 8 million people. Approximately 12% of the population are from Europe. Approximately how many of the city's residents are from Europe?";
$QType[14] = 0;
$QAnswers[14] = "b";
$QOptions[14] = array("between 800 000 and 900 000","between 900 000 and 1 000 000","between 1 000 and 1 100 000","between  1 100 000 and 1 200 000");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "12 \\( \\div \\) 100 \\( \\times \\) 8000000 = 960000, which fits into answer <b>(b)</b>.";

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