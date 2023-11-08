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

$Q[0] = "Three year six classes raise $972 for charity. Two classes each want to donate their third of the money to Charity A and the third class wants to donate its third of the money to Charity B. How much money will Charity A receive? Give your answer to the nearest dollar.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "648";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Charity A receives \\(2\\over 3\\) \\(\\times\\) $972 = $<b>648</b>";

$Q[1] = "The formula for simple interest is \\(I = PRN\\), where \\(I\\) is the interest, \\(P\\) is the principal, \\(R\\) is the interest rate and \\(N\\) is the time period. Calculate the interest earned on a principal sum of $5000 at 0.05 interest rate for 10 years. Give your answer to the nearest dollar.";
$QType[1] = 1;
$QAnswers[1] = "2500";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "\\(I = P \\times R \\times N\\) = $5000 \\(\\times\\) 0.05 \\(\\times\\) 10 = $<b>2500</b>";

$Q[2] = "A teacher is preparing a map of the school. The main building is 160 m long. The scale on the map is 1 cm represents 50 m. How long will the drawing of the main building on the map be? Give your answer in centimetres.";
$QType[2] = 1;
$QAnswers[2] = "3.2";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " cm";
$Soln[2] = "50 m -> 1 cm<br>1 m -> 1 \\(\\div\\) 50 cm<br> 160 m -> 1 \\(\\div\\) 50 \\(\\times\\) 160 = <b>3.2</b> cm";

$Q[3] = "The chart (sourced from the Australian Bureau of Statistics) shows the percentage of Australian children attending care from 2011 to 2017.<br><br><img src='images/PracticeTest6a_1.jpg'><br><br>What percentage of Australian children aged 0 – 12 years used child care in 2014?";
$QType[3] = 1;
$QAnswers[3] = "48.1"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "From the chart, <b>48.1</b>% of children used child care in 2014.";

$Q[4] = "The chart (sourced from the Australian Bureau of Statistics) shows the percentage of Australian children attending care from 2011 to 2017.<br><br><img src='images/PracticeTest6a_1.jpg'><br><br>True/False: The use all types of care has increased steadily from 2011 to 2017";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "This is false (option<b>(b)</b>) as informal care usage decreased from 2011 to 2014.";

$Q[5] = "1.	The graph (source: Australian Bureau of Statistics) shows the devices used by households to connect to the internet over a 2-year period.<br><br><img src='images/PracticeTest6a_2.jpg'><br><br>Which device had the largest decrease in percentage use from 2014-15 to 2016-17?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("Internet connected games console","Internet connected music/video player","Internet connected TV","Desktop or laptop computer");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "The largest decrease was in Internet connected music/video player, option <b>(b)</b>.";

$Q[6] = "In a year group of 77 year 12 students, 18 students have their driver licences. What percentage of the year group have driver licences? Give your answer to 1 decimal place.";
$QType[6] = 1;
$QAnswers[6] = "23.4";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "%";
$Soln[6] = "Percentage with licences = 18 \\(\\div\\) 77 \\(\\times\\) 100% = 23.4%";

$Q[7] = "A bag contains 4 green, 2 black, 5 purple and 1 orange balls. In an experiment, a ball is drawn out at random. Its colour is recorded and then it is replaced into the bag. If the experiment is repeated 60 times, which colour ball would you expect to draw out 5 times?";
$QType[7] = 0;
$QAnswers[7] = "d";
$QOptions[7] = array("green","black","purple","orange");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Total number of balls = 4 + 2 + 5 + 1 = 12<br>Probability of drawing the selected ball = \\(5\\over 60\\) = \\(1\\over 12\\)<br>The ball with a probability of \\(1\\over 12\\) is the orange ball, option <b>(d)</b>.";

$Q[8] = "Simon earns $1200 per week and spends 30% of his income on rent. How much does he spend each week on rent?";
$QType[8] = 1;
$QAnswers[8] = "360"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "Amount spent on rent = 30 \\(\\div\\) 100 \\(\\times\\) $1200 = $<b>360</b>";

$Q[9] = "307 people are to go by bus on a school excursion. One bus holds 50 people. How many buses are needed? ";
$QType[9] = 1;
$QAnswers[9] = "7";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Number of buses = 307 \\(\\div\\) 50 = 6.14<br>We need to round up so that everyone can go.<br>Number of buses = <b>7</b>";

$Q[10] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (degrees Celsius)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 deg C. What was the temperature at 8 am the next morning?";
$QType[10] = 1;
$QAnswers[10] = "4.5";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " degrees Celsius";
$Soln[10]= "Temperature at 8 am = 6.5 + 8 + 3 - 5 - 6.5 - 4.5 + 3 = <b>4.5</b> degrees.";

$Q[11] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (degrees Celsius)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 deg C. What was the biggest drop in temperature over a 4 hour period?";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("3 degrees","5 degrees","6.5 degrees","8 degrees");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "The biggest drop, of 6.5 degrees, occurred at midnight, option <b>(c)</b>.";

$Q[12] = "A student completed a 4-part test and scored 18, 16, 12 and 17 in each of the parts. If each part of the test was out of 20, what was the student’s total mark, as a percentage? Give your answer rounded to 2 decimal places.";
$QType[12] = 1;
$QAnswers[12] = "78.75";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " %";
$Soln[12] = "student mark out of 80 = 18 + 16 + 12 + 17 = 63<br>\\(63\\over 80\\) as a percentage = 63 \\(\\div\\) 80 \\(\\times\\) 100% = 78.75%";


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