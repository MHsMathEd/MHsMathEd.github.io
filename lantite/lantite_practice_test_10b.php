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

$Q[0] = "The following graph shows life expectancy in years for different continents.<br><br><img src='images/PracticeTest10b_1.jpg'><br><br>True/False: Everyone in Europe is expected to outlive everyone in Africa.";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "b";
$QOptions[0] = array("True","False","N/A","N/A");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "False <b>(b)</b>: The top of the Africa whisker is higher than the bottom of the Europe whisker.";

$Q[1] = "The following graph shows life expectancy in years for different continents.<br><br><img src='images/PracticeTest10b_1.jpg'><br><br>From this graph which of the following can we identify for each continent?";
$QType[1] = 0;
$QAnswers[1] = "b";
$QOptions[1] = array("mean","median","mode","standard deviation");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "We can identify the median, option <b>(b)</b>";

$Q[2] = "The following graph shows life expectancy in years for different continents.<br><br><img src='images/PracticeTest10b_1.jpg'><br><br>Which continent contains the highest life expectancy?";
$QType[2] = 0;
$QAnswers[2] = "a";
$QOptions[2] = array("Asia","Europe","Americas","Oceania");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Asia <b>(a)</b> contains the highest life expectancy because the top of its upper whisker is the highest.";

$Q[3] = "A sick child is required to take two doses of amoxicillin syrup suspension per day. The child weighs 20 kg. The dose required is 40 milligrams per kilogram of body weight per day. The suspension comes in a concentration of 400 milligrams of amoxycillin in 5 millilitres of syrup. Calculate the syrup dose size, in millilitres.";
$QType[3] = 1;
$QAnswers[3] = "5"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " millilitres";
$Soln[3] = "Required daily dose for 20 kg child = 40 mg \\(\\times\\) 20 = 800 mg<br>
400 mg come in 5 mL of suspension, so<br>
Number of millilitres of suspension required per day = 800 mg \\(\\div\\) 400 mg \\(\\times\\) 5 mL = 10 mL<br>
Two doses are given per day so each dose is 10 mL \\(\\div\\) 2 = <b>5</b> mL";

$Q[4] = "A class have raised $420 for charity. The students want to divide the money between three charities; A, B, and C in the ratio 3:2:1. Which of the following formulae gives the amount of money to go to charity B?";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("$420 \\(\\div\\) 6 \\(\\times\\) 2","$420 \\(\\div\\) 2","$420 \\(\\div\\) 5 \\(\\times\\) 2","$420 \\(\\times\\) 6 \\(\\div\\) 2");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Number of parts the money is to be divided into = 3 + 2 + 1 = 6<br>
Amount of money in each part = $420 \\(\\div\\) 6<br>
Number of parts to go to Charity B = 2<br>
Money to go to Charity B = $420 \\(\\div\\) 6 \\(\\times\\) 2<br>This is option <b>(a)</b>";

$Q[5] = "Two hours are allowed to complete an exam. The exam contains 65 questions. On average, how many seconds can be spent on each question? Give your answer to the nearest whole number of seconds.";
$QType[5] = 1;
$QAnswers[5] = "111";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " seconds";
$Soln[5] = "Number of minutes in 2 hours = 2 \\(\\times\\) 60 = 120<br>
Number of seconds in 2 hours = 120 \\(\\times\\) 60 = 7200<br>
Number of seconds per question = 7200 \\(\\div\\) 65 = 110.769<br>
Rounded to the nearest whole number of seconds, answer = <b>111</b> seconds.";

$Q[6] = "A teacher had a reward box that had 60 rewards inside at the start of the year. At the end of term 1, 25% of the rewards were used. How many rewards remained in the box?";
$QType[6] = 1;
$QAnswers[6] = "45";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Percentage of rewards remaining = 100 - 25 = 75<br>
Number of rewards remaining = 75% \\(\\times\\) 60 = 75 \\(\\div\\) 100 \\(\\times\\) 60 = <b>45</b>";

$Q[7] = "A container is shaped like a rectangular prism. It is 5 cm long, 4 cm wide and 2 cm high. What is the volume of the container, in millilitres?";
$QType[7] = 1;
$QAnswers[7] = "40";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " millilitres";
$Soln[7] = "Volume = 5 \\(\\times\\) 4 \\(\\times\\) 2 = 40 cm<sup>3</sup><br>
Since 1 mL = 1 cm<sup>3</sup>, volume in millilitres = <b>40</b>";

$Q[8] = "For the school walkathon, students are to walk 300 m east along Eucalyptus Avenue, then 350 m south along Wattle Street, then 100 m west along Angophora Avenue, then 350 m north along Tea Tree Street, and finally due west along Eucalyptus Avenue back to the start. A student is sponsored 20 c per 10 m. If she walks 5 laps, how much money does she raise? Give your answer in dollars.";
$QType[8] = 1;
$QAnswers[8] = "130"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "Distance walked in 1 lap = 300 m East + 350 m South + 300 m West + 350 m North = 1300 m<br>
Distance walked in 5 laps = 5 \\(\\times\\) 1300 m = 6500 m
Number of 10 m walked = 6500 \\(\\div\\) 10 = 650<br>
Money raised per lap = 20 c = $0.20<br>
Total money raised = 650 \\(\\times\\) $0.20 = $130.00";

$Q[9] = "The Q1 tower on the Gold Coast is 323 metres tall. If a 1:1000 scale model is produced, what is the height of the model in centimetres?";
$QType[9] = 1;
$QAnswers[9] = "32.3";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " cm";
$Soln[9] = "Height of Q1 in cm = 323 \\(\\times\\) 100 = 32300 cm<br>
Height of scale model = 32300 \\(\\div\\) 1000 = <b>32.3</b> cm";

$Q[10] = "A school holds a fete to raise money for charity. The money raised will be split between two charities, A and B in the ratio 3:2. The money raised by each year group is listed.<br><br>
<table>
<tr><th>Year</th><th>Amount Raised ($)</th></tr>
<tr><td>Kindergarten</td><td>20.40</td></tr>
<tr><td>Stage 1</td><td>51.20</td></tr>
<tr><td>Stage 2</td><td></td></tr>
<tr><td>Stage 3</td><td>45.80</td></tr>
</table><br><br>
If $68.18 was donated to Charity B, how much money was raised by the Stage 2 students?";
$QType[10] = 1;
$QAnswers[10] = "53.05";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "";

$Q[11] = "The map below shows the township of Streaky Bay in South Australia.<br><br><img src='images/PracticeTest10b_2.jpg'><br><br>How long is the jetty?";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("750 m","500 m","350 m","200 m");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "From the map the jetty is about 350 m, option <b>(c)</b>";

$Q[12] = "The map below shows the township of Streaky Bay in South Australia.<br><br><img src='images/PracticeTest10b_2.jpg'><br><br>What is the area of the part of the golf course to the south of Montgomerie Terrace and west of Crawford Terrace? ";
$QType[12] = 0;
$QAnswers[12] = "c";
$QOptions[12] = array("1 000 m<sup>2</sup>","10 000 m<sup>2</sup>","100 000 m<sup>2</sup>","1 000 000 m<sup>2</sup>");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "From the graph, the area is roughly rectangular, with sides of 200 m and 400 m. Area = 200 m \\(\\times\\) 400 m = 80000 m<sup>2</sup>, option <b>(c)</b>";

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