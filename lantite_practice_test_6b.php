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

$Q[0] = "Which vessel contains the most liquid?<br><img src='images/PracticeTest6b_1.jpg'><br>";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "c";
$QOptions[0] = array("A","B","C","D");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Vessels A and D contain less than 500 mL. Vessel B contains 500 mL. Vessel C contains more than 500 mL, so vessel <b>C</b> contains the most liquid.";

$Q[1] = "20% of a school’s students are in year 12. If there are 800 students in the school, how many are in year 12?";
$QType[1] = 1;
$QAnswers[1] = "160";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Number of year 12 students = 20 \\(\\div\\) 100 \\(\\times\\) 800 = <b>160</b> students.";

$Q[2] = "A teacher intends to give a lesson that includes a 25 minute video and a 25 minute test. If the lesson begins at 11:40 am, at what time does it finish?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("11:90 am","12:30 am","12:30 pm","12:40 pm");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The test will end 50 minutes later, at 12:30 pm, option <b>c</b>";

$Q[3] = "A box contains 6 blue balls, 5 red balls and 9 yellow balls. What is the probability of randomly drawing a blue ball? Give your answer as a decimal rounded to 1 decimal place.";
$QType[3] = 1;
$QAnswers[3] = "0.3"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Total number of balls = 6 + 5 + 9 = 20<br>Probability of drawing a blue ball = \\(6\\over 20 \\) = 6 \\(\\div\\) 20 = <b>0.3</b>";

$Q[4] = "The local Town Hall can be hired for a day. Two schools join together to rent it out for a day. Each school holds its Presentation Day in the hall. Each school pays $210 in hire fee. As the Presentation day assemblies take only 1.5 hours each, the next year, the two schools invite a third school to join them in using the Town Hall on that day. If the hire rate remains unchanged, how much hire fee does each school pay?";
$QType[4] = 1;
$QAnswers[4] = "140";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "Total cost to hire the Town Hall = $210 + $210 = $420<br>Cost for each of 3 schools = $420 \\(\\div\\) 3 = $<b>140</b>";

$Q[5] = "A PDHPE teacher takes a gerrycan of drinking water to the school athletics carnival. By recess, half the water in the gerrycan was drunk and there were 10 L of water remaining in the gerrycan. What was the capacity of the can in litres?";
$QType[5] = 1;
$QAnswers[5] = "20";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " L";
$Soln[5] = "Capacity = 2 \\(\\times\\) 10 L = <b>20</b> litres";

$Q[6] = "A coach took a class from Sydney on an excursion to the Western Plains. It left the school at 7:30 am and arrived at its destination at 12:30 pm. For the first two hours the coach averaged a speed of 100 km/h. For the remainder of the journey it averaged 60 km/h. What was the average speed of the whole journey?";
$QType[6] = 1;
$QAnswers[6] = "76";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " km/h";
$Soln[6] = "Length of trip = 5 hours<br>Distance covered in first 2 hours = 2 \\(\\times\\) 100 = 200 km<br>Distance covered in last 3 hours = 3 \\(\\times\\) 60 = 180 km. <br>Total distance = 200 + 180 = 380 km<br>Average speed = total distance \\(\\div\\) total time = 380 \\(\\div\\) 5 = <b>76</b> km/h";

$Q[7] = "A teacher prepares a practical measurement activity for his students. He gives each of them an 80 cm long piece of string. He asks them to measure the distance across the school oval (which he knows to be 52 m). How many 80 cm pieces of string would it take to reach across the oval?";
$QType[7] = 1;
$QAnswers[7] = "65";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Length of string in metres = 0.80 m<br>Number of pieces of string = 52 \\(\\div\\) 0.80 = <b>65</b> pieces";

$Q[8] = "A school building has a floor plan as shown in the diagram. <br><br><img src='images/PracticeTest6b_2.jpg'><br><br>What is the floor area of the building?";
$QType[8] = 1;
$QAnswers[8] = "4200"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " m<sup>2</sup>";
$Soln[8] = "Floor area = 20 \\(\\times\\) 100 + 20 \\(\\times\\) 100 + 20 \\(\\times\\) (100 - 45 - 45) = 2 \\(\\times\\) 20 \\(\\times\\) 100 + 20 \\(\\times\\) 10 = <b>4200</b> m<sup>2</sup>";

$Q[9] = "A school building has a floor plan as shown in the diagram. <br><br><img src='images/PracticeTest6b_2.jpg'><br><br>What is the length of the perimeter of the building?";
$QType[9] = 1;
$QAnswers[9] = "500";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " m";
$Soln[9] = "Perimeter = 100 + 20 + 45 + 20 + 45 + 20 + 100 + 20 + 45 + 20 + 45 + 20 = 500 m";

$Q[10] = "A trip taking 6 hours and 17 minutes finished at 4:33 pm. At what time did it begin? ";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("9:50 am","10:16 am","10:17 am","10:50 am");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "6 hours before 4:33 pm = 10:33 am<br>17 minutes before 10:33 am = 10:16 am, option <b>(b)</b>";

$Q[11] = "If you toss three coins, what is the probability that two of the coins will land heads up and one will land tails up?";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("0.125","0.250","0.375","0.500");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Possible combinations: HHH, HHT, HTH, THH, HTT, THT, TTH, TTT<br>Probability of 2 heads = \\(3\\over 8\\) = 0.375, option <b>(c)</b>";

$Q[12] = "If 3 decks of playing cards cost $17.70 how much would 5 decks cost?";
$QType[12] = 1;
$QAnswers[12] = "29.50";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "3 decks cost $17.70<br>1 deck costs $17.70 \\(\\div\\) 3 = $5.90<br>5 decks cost $5.90 \\(\\times\\) 5 = $<b>29.50</b>";

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