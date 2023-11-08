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

$Q[0] = "A teacher goes home by bus. The bus leaves at 4:15 pm. The bus stop is 1 km from the school. The teacher leaves school at 3:55 pm. How many minutes does the teacher have to get to the bus stop?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "20";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " minutes";
$Soln[0] = "4:15 pm - 3:55 pm = <b>20</b> minutes.";

$Q[1] = "A teacher goes home by bus. The bus leaves at 4:15 pm. The bus stop is 1 km from the school. The teacher leaves school at 3:55 pm. At what speed (in km/h) does the teacher need to walk to get to the bus stop five minutes before the bus is due?";
$QType[1] = 1;
$QAnswers[1] = "4";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "km/h";
$Soln[1] = "Time allowed = 4:15 - 3:55 - 5 min = 15 minutes = 0.25 hour<br>Speed = distance \\(\\div\\) time = 1 km \\(\\div\\) 0.25 hour = <b>4</b> km/h";

$Q[2] = "A school band with 100 members charges $300 per member per year to cover costs. What would be the cost per member if there were 120 members and the operating expenses remained unchanged? Give your answer to the nearest dollar.";
$QType[2] = 1;
$QAnswers[2] = "250";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Total running cost = 300 \\(\\times\\) 100 = $30 000<br>Cost per member when split among 120 members = 30 000 \\(\\div\\) 120 = $<b>250</b>";

$Q[3] = "A box contains 6 blue balls, 6 red balls and 8 yellow balls. What is the probability of randomly drawing a red or a blue ball?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("\\(\\frac{3}{10}\\)","\\(\\frac{3}{5}\\)","\\(\\frac{1}{2}\\)","\\(\\frac{13}{20}\\)");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Probability = number of selected balls \\(\\div\\) total number of balls = \\(\\frac{(6 + 6)}{(6 + 6 + 8)} = \\frac{6}{20} = \\frac{3}{5}\\), which is option <b>(b)</b>";

$Q[4] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part concentrate to 4 parts water. If the teacher wants to make up 10 litres of the drink, how much water needs to be used?";
$QType[4] = 1;
$QAnswers[4] = "8";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " L";
$Soln[4] = "1 part concentrate : 4 parts water gives 5 parts in total<br>So 1 L concentrate and 4 L water makes 5 L of the drink<br>Multiplying by 2 we get that 2 L concentrate and 8 L water makes 10 L of the drink.<br>Hence <b>8</b> L of water are needed.";

$Q[5] = "The chart (sourced from the Australian Bureau of Statistics) shows experience of homelessness in Australia.<br><img src='images/PracticeTest7b_1.jpg'><br>What percentage of the Australian population have a mental health condition and have never experienced homelessness?";
$QType[5] = 1;
$QAnswers[5] = "13.6";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " %";
$Soln[5] = "From the chart, <b>13.6</b>%";

$Q[6] = "The chart (sourced from the Australian Bureau of Statistics) shows experience of homelessness in Australia.<br><img src='images/PracticeTest7b_1.jpg'><br>What percentage of the Australian population has ever experienced homelessness?";
$QType[6] = 1;
$QAnswers[6] = "13.4";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " %";
$Soln[6] = "Percentage of the population who have a mental health condition and who have ever experienced homelessness = 4.6%<br>Percentage of the population who do not have a mental health condition and who have ever experienced homelessness = 8.8%<br>Percentage of the population who have ever experienced homelessness = 4.6 + 8.8 % = <b>13.4</b>%";

$Q[7] = "A teacher is planning an excursion to see a production in a theatre in a regional centre. The theatre is 180 km from the school. The teacher expects the bus to average 80 km/hour. The production begins at 1:00 pm, and the teacher wants to arrive 45 minutes before the show starts. What time does the bus need to leave the school?";
$QType[7] = 0;
$QAnswers[7] = "c";
$QOptions[7] = array("9:00 am","9:15 am","10:00 am","12:15 pm");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Trip duration = 80 km/h \\(\\div\\) 180 km = 2.15 hours = 2 hours + 15 minutes<br>Time students need to arrive = 1:00 pm - 45 min = 12:15 pm<br>Time they need to leave = 12:15 pm - 2 hours and 15 minutes = 10:00 am, which is option <b>(c)</b>";

$Q[8] = "There were 50 students in a class. 24 of them were girls. 70% of the students passed a test. \\(\\frac{2}{3}\\) of the girls passed. How many boys passed?";
$QType[8] = 1;
$QAnswers[8] = "19"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Number of students who passed = 70% \\(\\times\\) 50 = 35<br>Number of girls who passed = \\(\\frac{2}{3}\\) \\(\\times\\) 24 = 16<br>Number of boys who passed = 35 - 16 = <b>19</b>";

$Q[9] = "There were 50 students in a class. 24 of them were girls. 70% of the students passed a test. 2/3 of the girls passed. What proportion of boys passed? Give your answer as a decimal, to 2 decimal places.";
$QType[9] = 1;
$QAnswers[9] = "0.73";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Number of boys = 50 - 24 = 26<br>From the previous question, 19 boys passed. <br>Proportion of boys who passed = 19 \\(\\div\\) 26 = <b>0.73</b>";

$Q[10] = "A class are studying a passionfruit vine. At the start of the year, the vine is 25 cm tall. The teacher asks students to guess how big the plant will be, as a percentage of the original size, by the end of the year. Four student guesses are shown.<br><br>
Student 1: 20%<br>
Student 2: 100%<br>
Student 3: 220%<br>
Student 4: 1000%<br>
<br>At the end of the year, the plant was measured to be 53 cm tall. Which student had the most accurate guess?";
$QType[10] = 0;
$QAnswers[10] = "c";
$QOptions[10] = array("Student 1","Student 2","Student 3","Student 4");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "The plant is almost twice its original size. That is, it is almost 200% of its original size.<br>So the closest estimate was 2205, option <b>(c)</b>";

$Q[11] = "A book seller had a sale in which all books were 20% off. A teacher bought a class set of thirty books that was priced at $12 per book before discount. How much money did the teacher pay for the book set?";
$QType[11] = 1;
$QAnswers[11] = "288";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "Normal price for book set = $12 \\(\\times\\) 30 = $360<br>Percentage to pay after discount = 100 - 20 = 80%<br>Price to pay = 80 \\(\\div 100 \\times\\) $360 = $<b>288</b>";

$Q[12] = "On the weighing scale shown, the red scale indicates kg and the black scale indicates stones and pounds. There are 14 pounds in 1 stone. <br><img src='images/PracticeTest7b_2.jpg'><br>Using this scale, what weight in kilograms corresponds to a weight of 20 stone and 11 pounds? Give your answer to the nearest whole number of kilograms.";
$QType[12] = 1;
$QAnswers[12] = "132";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " kg";
$Soln[12] = "From the image, <b>132</b> (130 + 2) kilgrams corresponds to 20 stone and 11 pounds.";

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