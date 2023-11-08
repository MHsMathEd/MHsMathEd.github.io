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

$Q[0] = "The school cross country race was 3.5 km long. The winner ran the race in 14 minutes. What was her average running speed, in km/h?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "15";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " km/h";
$Soln[0] = "14 minutes = 14 \\(\\div\\) 60 = 0.2333 hours. <br> Average speed = distance \\(\\div\\) time = 3.5 km \\(\\div\\) 0.23333 hours = <b>15</b> km/h<br>Alternately, Average speed = 3.5 km \\(\\div\\) 14 minutes = 0.25 km/minute = 0.25 \\(\\times\\) 60 km/h = <b>15</b> km/h";

$Q[1] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (°C)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 °C. What was the warmest recorded temperature that her classroom reached?";
$QType[1] = 1;
$QAnswers[1] = "17.5";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " °C";
$Soln[1] = "The actual classroom temperatures were as follows:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (°C)</th><th>Actual Temperature</th></tr>
<tr><td>0800</td><td>0</td><td>6.5</td></tr>
<tr><td>1200</td><td>+8</td><td>14.5</td></tr>
<tr><td>1600</td><td>+3</td><td>17.5</td></tr>
<tr><td>2000</td><td>-5</td><td>12.5</td></tr>
<tr><td>0000</td><td>-6.5</td><td>6</td></tr>
<tr><td>0400</td><td>-4.5</td><td>1.5</td></tr>
<tr><td>0800</td><td>+3</td><td>4.5</td></tr>
</table><br>The highest recorded temperature is <b>17.5</b> °C, occurring at 4 pm.";

$Q[2] = "The map shows part of the township of Roxby Downs in far north South Australia. <br><img src='images/PracticeTest7a_1.jpg'><br>Which set of directions take you from the end of Hamilton Court (marked with a yellow dot) to the Roxby Downs Hospital?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn left onto Arcoona Street. Turn left onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your left.","Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn right onto Arcoona Street. Turn right onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your right.","Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn left onto Arcoona Street. Turn right onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your left.","Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn right onto Arcoona Street. Turn left onto Richardson Place. Turn left onto Burgoyne St. The hospital will be on your left.");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The correct set of directions is: Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn left onto Arcoona Street. Turn right onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your left, which is option <b>(c)</b>";

$Q[3] = "The map shows part of the township of Roxby Downs in far north South Australia. <br><img src='images/PracticeTest7a_1.jpg'><br>What is the approximate footprint area of the Roxby Downs Hospital?";
$QType[3] = 0;
$QAnswers[3] = "d"; 
$QOptions[3] = array("32 000 m<sup>2</sup>","1 000 m<sup>2</sup>","12 000 m<sup>2</sup>","5 000 m<sup>2</sup>");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "The dimensions of the hospital are approximately 100 m \\(\\times\\) 50 m = 5000 m<sup>2</sup>, which is option <b>(d)</b>";

$Q[4] = "The map shows part of the township of Roxby Downs in far north South Australia. <br><img src='images/PracticeTest7a_1.jpg'><br>39.	If you were to walk at 4 km /hour, approximately how long would it take you to walk from the end of Hamilton Court (marked with a yellow dot) to the Roxby Downs Hospital? ";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("4 minutes","10 minutes","18 minutes","34 minutes");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "The distance to the hospital is approximately 1.2 km.<br> Time = distance \\(\\div\\) speed = 1.2 km \\(\\div\\) 4 km/h = 0.3 hours = 0.3 \\(\\times\\) 60 minutes = 18 minutes, which is option <b>(c)</b>.";

$Q[5] = "A science teacher wrote a draft report stating that 1.2 \\(\\times\\) 10<sup>3</sup> students participated in a science fair hosted by the school. However, the principal does not want to use scientific notation when the report is published in the school newsletter. What number needs to be put in place of the 1.2 \\(\\times\\) 10<sup>3</sup>?";
$QType[5] = 1;
$QAnswers[5] = "1200";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "1.2 \\(\\times\\) 10<sup>3</sup> = <b>1200</b>";

$Q[6] = "A student takes 6 minutes to do 3 sums. At this rate, how many minutes would she take to do 8 sums? ";
$QType[6] = 1;
$QAnswers[6] = "16";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " minutes";
$Soln[6] = "It takes 6 minutes for 3 sums<br>Dividing by 3 we get 2 minutes for 1 sum<br>Multipying by 8 we get <b>16</b> minutes for 8 sums.";

$Q[7] = "When wrapped around this person’s waist, the tape measure starts at 11.5 cm and ends at 88 cm. What is the length around the person’s waist, in centimetres?<br><br><img src='images/PracticeTest7a_2.jpg'><br>";
$QType[7] = 1;
$QAnswers[7] = "76.5";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " cm";
$Soln[7] = "length = 88 - 11.5 = <b>76.5</b> cm";

$Q[8] = "There are two finalists in a school’s trivia quiz. The first student to answer the question correctly is awarded the mark for that question. There were 50 questions. Student A correctly answered one fifth of all the questions. How many questions were answered by student A?";
$QType[8] = 1;
$QAnswers[8] = "10"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "1 \\(\\div\\) 5 \\(\\times\\) 50 = <b>10</b> questions.";

$Q[9] = "A family earns $1800 per week. They pay 40% in tax. Then they spend $300 per week on food and $650 per week on home loan repayments. Which formula shows how much money they have left after these expenses?";
$QType[9] = 0;
$QAnswers[9] = "d";
$QOptions[9] = array("Dollars remaining = \\( 1800 – \\frac{40}{100} \\times 1800 + 300 + 650\\)","Dollars remaining = \\(1800 - \\frac{60}{100} \\times 1800 – 300 - 650\\)","Dollars remaining = \\(1800 \\times \\frac{40}{100} – 300 – 650 \\)","Dollars remaining = \\(1800 – 650 – 300 – \\frac{40}{100} \\times 1800\\)");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "The correct formula is Dollars remaining = \\(1800 – 650 – 300 – \\frac{40}{100} \\times 1800\\), which is option <b>(d)</b>";

$Q[10] = "There are 10 000 m<sup>2</sup> in 1 hectare, and an acre is roughly 40% of a hectare. Approximately how many square metres are there in half an acre?";
$QType[10] = 0;
$QAnswers[10] = "a";
$QOptions[10] = array("2000 m<sup>2</sup>","3000 m<sup>2</sup>","4000 m<sup>2</sup>","5000 m<sup>2</sup>");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "1 acre = 40 \\(\\div\\) 100 \\(\\times\\) 1 hectare = 40 \\(\\div\\) 100 \\(\\times\\) 10000 m<sup>2</sup> = 4000 m<sup>2</sup><br>\\(\\frac{1}{2}\\) acre = \\(\\frac{1}{2} \\times\\) 4000 m<sup>2</sup> = 2000 m<sup>2</sup>, which is option <b>(a)</b>";

$Q[11] = "A teacher travels from school by car to a conference 22 km away, and then travels back to school again. The teacher is to be reimbursed for the cost of travel at 120 cents per kilometre. How much is the teacher entitled to claim for travel?  Give your answer to the nearest cent.";
$QType[11] = 1;
$QAnswers[11] = "52.80";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "Trip distance = 22 + 22 km = 44 km<br>Reimbursement = $1.20 per km \\(\\times\\) 44 km = $<b>52.80</b>";

$Q[12] = "A PDHPE teacher takes a gerrycan of drinking water to the school athletics carnival. By recess, half the water in the gerrycan was drunk and there were 1000 mL of water remaining in the gerrycan. What was the capacity of the can in litres?";
$QType[12] = 1;
$QAnswers[12] = "2";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " L";
$Soln[12] = "\\(\\frac{1}{2}\\) the capacity = 1000 mL = 1 L<br>Capacity = <b>2</b> L";

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