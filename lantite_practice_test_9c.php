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

$Q[0] = "A teacher has a class for a period that begins at 11:15 am and ends at 12:35 pm. She has four tasks for the class, and wants them to spend an equal amount of time on each task. However, another teacher enters the classroom at the start of the period to give an important talk to the students. He concludes his talk at 11:35 am. How many minutes can the class spend on each task?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "15";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " minutes";
$Soln[0] = "Time remaining after talk: from 11:35 am to 12:35 pm = 1 hour = 60 minutes<br>Time per task = 60 minutes \\(\\div\\) 4 = <b>15</b> minutes";

$Q[1] = "A map of the town of Penguin in Tasmania is shown.<br><br><img src='images/PracticeTest9c_1.jpg'><br><br>Approximately how long is King Edward St?";
$QType[1] = 0;
$QAnswers[1] = "b";
$QOptions[1] = array("220 m","430 m","880 m","1440 m"); 
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "King Edward St is approximately 430 m long, option <b>(b)</b>";

$Q[2] = "A map of the town of Penguin in Tasmania is shown.<br><br><img src='images/PracticeTest9c_1.jpg'><br><br>What is the best way to walk from Lane's IGA to the playing field adjoining Braddon St?";
$QType[2] = 0;
$QAnswers[2] = "d";
$QOptions[2] = array("Walk along Main Rd with the beach on your right to Arnold St. Turn left and walk to King Edward Street. Turn left and walk until you reach the playing field.","Walk along Main Rd with the beach on your right until you reach Preservation Drive. Walk to Coroneigh St. Turn left and continue to the playing field.","Walk along Main Rd with the beach on your left until you reach Crescent St. Turn left and walk along until you reach Braddon St. Turn left and walk until you reach the playing field.","Walk along Main Rd with the beach on your left to Arnold St. Turn right and walk to King Edward Street. Turn right and walk until you reach the playing field.");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The correct directions are option <b>(d)</b>: Walk along Main Rd with the beach on your left to Arnold St. Turn right and walk to King Edward Street. Turn right and walk until you reach the playing field.";

$Q[3] = "A map of the town of Penguin in Tasmania is shown.<br><br><img src='images/PracticeTest9c_1.jpg'><br><br>If you walked at 4 km/hour, approximately how many minutes would it take you to walk the length of Penguin Beach (from Stubbs Point to the picnic table at the Southern end)?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("5 minutes","10 minutes","15 minutes","20 minutes");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Approximate Distance = 600-700 m (so let's say 650 m)<br>Distance in km = 0.65 km<br>Time taken = distance \\(\\div\\) speed = 0.1625 hours = 0.1625 \\(\\times\\) 60 = 9.75 minutes, so choose option <b>(b)</b><br>Alternatively:<br>In 5 minutes you would walk 5 \\(\\div\\) 60 \\(\\times\\) 4000 m = 333 m, which is not far enough.<br>In 10 minutes you would walk 10 \\(\\div\\) 60 \\(\\times\\) 4000 m = 667 m, which is about right.<br>In 15 minutes you would walk 15 \\(\\div\\) 60 \\(\\times\\) 4000 m = 1000 m, which is too far.<br>In 20 minutes you would walk 20 \\(\\div\\) 60 \\(\\times\\) 4000 m = 1333 m, which is too far.";

$Q[4] = "The table shows the different swimming pool admission options.<br>
<table>
<tr><td>Casual Visit</td><td>$6.50</td></tr>
<tr><td>30 visit pass</td><td>$180.00</td></tr>
<tr><td>Quarterly unlimited visit pass</td><td>$300.00</td></tr>
<tr><td>Annual unlimited visit pass</td><td>$700.00</td></tr>
</table><br>If you intended to swim ten times every month during summer, what is the most cost effective method of doing this?";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("casual visit","30 visit pass","quarterly pass","annual pass");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Number of swims = 10 \\(\\times\\) 3 = 30<br>Costs for 30 swims:<br><table>
<tr><td>Casual Visit</td><td>$6.50 \\(\\times\\) 30 = $195</td></tr>
<tr><td>30 visit pass</td><td>$180.00</td></tr>
<tr><td>Quarterly unlimited visit pass</td><td>$300.00</td></tr>
<tr><td>Annual unlimited visit pass</td><td>$700.00</td></tr>
</table><br>So the best choice is the 30 visit pass, option <b>(b)</b>";

$Q[5] = "A school currently has four year 2 classes. Each class can have a maximum of 24 students. The school currently has 83 students in year 2. How many additional students could be accepted into these four year 2 classes?";
$QType[5] = 1;
$QAnswers[5] = "13";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Number of students possible = 4 \\(\\times \\) 24 = 96<br>Number of free places = 96 - 83 = <b>13</b>";

$Q[6] = "The formula to convert between temperatures in Fahrenheit and Celsius is<br><br>
(F – 32) x 5 / 9 = C<br><br>
where F is the temperature in Fahrenheit and C is the temperature in Celsius.<br><br>
What is 0 degrees Celsius in Fahrenheit? Give your answer to the nearest degree.";
$QType[6] = 1;
$QAnswers[6] = "32";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " degrees Farenheit";
$Soln[6] = "We have (F - 32) \\(\\times\\frac{5}{9}\\) = 0<br>This means that F - 32 = 0 (because the only way to multiply two numbers to get 0 is if one or both of the numbers are 0), so F = <b>32</b>";

$Q[7] = "\\(\\frac{1}{7}\\) of the students in a primary school are 6 years old or younger. If there are 56 students aged 6 years or younger, how many students are there in the school?";
$QType[7] = 1;
$QAnswers[7] = "392";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "\\(\\frac{1}{7}\\times\\)total = 56<br>total = 7 \\(\\times\\) 56 = <b>392</b>";

$Q[8] = "A graph of maths marks against English marks was plotted for ten students.<br><br><img src='images/PracticeTest9c_2.jpg'><br><br>True/False: The median mark for these students was higher for maths than for English.";
$QType[8] = 0;
$QAnswers[8] = "a"; 
$QOptions[8] = array("True","False","N/A","N/A");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Median maths mark = halfway between 72 and 78 = 75 <br> Median English mark = halfway between 66 and 70 = 68<br> so the statement is true (option <b>(a)</b>).";

$Q[9] = "A graph of maths marks against English marks was plotted for ten students.<br><br><img src='images/PracticeTest9c_2.jpg'><br><br>True/False: The highest mark overall was achieved by a student in mathematics.";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("True","False","N/A","N/A");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Highest maths mark = 98<br>Highest English mark = 88<br> so the statement is True (option <b>(a)</b>).";

$Q[10] = "A graph of maths marks against English marks was plotted for ten students.<br><br><img src='images/PracticeTest9c_2.jpg'><br><br>True/False: Most of the students got a better mark in English than in mathematics.";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("True","False","N/A","N/A");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "The easiest way to answer this is to draw a diagonal line from the point (50,50) to the point (90,90) and count how many students lie on each side of the line.<br><br><img src='images/PracticeTest9c_2ans.jpg'><br><br>Most students did better in maths, so the statement is false <b>(b)</b>";

$Q[11] = "A packet of 25 pens had 20 pens remaining in it. What percentage of pens had been used?";
$QType[11] = 1;
$QAnswers[11] = "20";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "%";
$Soln[11] = "Number of pens used = 25 - 20 = 5<br>Fraction of pens used = \\(\\frac{5}{25}\\)<br>Percentage of pens used = 5 \\(\\div\\) 25 \\(\\times\\) 100% = <b>20</b>%";

$Q[12] = "A teacher is estimating the travel costs for a trip. She has allowed $200 for the trip. The school bus has an average fuel efficiency of 12 L per 100 km. Fuel costs $1.35 per litre. The trip is 650 km long. How much money will the teacher have remaining from her $200 after she has paid for the fuel used?";
$QType[12] = 1;
$QAnswers[12] = "94.70";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "Fuel used on the trip = 650 \\(\\div\\) 100 \\(\\times\\) 12 L = 78 L<br>Fuel cost = 78 \\(\\times\\) $1.35 = $105.30<br>Money leftover = $200 - $105.30 = $<b>94.70</b>";

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