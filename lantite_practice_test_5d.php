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

$Q[0] = "A rectangular pool with dimensions 20 m \\(\\times\\) 30 m is to be filled with 900 m<sup>3</sup> of water. What will be the average depth of water in the pool?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "b";
$QOptions[0] = array("180 cm","150 cm","120 cm","90 cm");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Volume = length \\(\\times\\) width \\(\\times\\) depth <br> 900 = 20 \\(\\times\\) 30 \\(\\times\\) depth<br> 900 = 600 \\(\\times\\) depth<br> depth = 900 \\(\\div\\) 600 = 1.5 m = 150 cm, which is option <b>(b)</b>";

$Q[1] = "A teacher gave her students three assessment tasks over the course of a semester. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task value (%)</th><th>Marked out of</th><th>Student's mark</th></tr>
<tr><td>Task 1</td><td>20</td><td>50</td><td>40</td></tr>
<tr><td>Task 2</td><td>20</td><td>50</td><td>35</td></tr>
<tr><td>Task 3</td><td>60</td><td>50</td><td>30</td></tr>
</table><br>What was the student’s final mark, as a percentage, for the semester?";
$QType[1] = 1;
$QAnswers[1] = "66";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "%";
$Soln[1] = "Final % mark = 40 \\(\\div\\) 50 \\(\\times\\) 20 + 35 \\(\\div\\) 50 \\(\\times\\) 20 + 30 \\(\\div\\) 50 \\(\\times\\) 60 = <b>66</b>%";

$Q[2] = "A coach taking a class on an excursion left the school at 8.40 am and travelled the 50 km to the destination at an average speed of 40 km/h. How many minutes did the journey take?";
$QType[2] = 1;
$QAnswers[2] = "75";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " minutes";
$Soln[2] = "time = \\(distance \\over speed\\) = 50 km \\(\\div\\) 40 km/h = 1.25 hours = 1.25 \\(\\times\\) 60 = <b>75</b> minutes";

$Q[3] = "A teacher wants to buy 30 packs of cards to use in sentence-building activities. The table below shows the costs from two suppliers.<br>
<table>
<tr><th>Source</th><th>Cost per pack</th><th>Offers</th><th>Postage</th><th>Total</th></tr>
<tr><td>Catalogue</td><td>$15.51</td><td>5 packs for the price of 4</td><td>Free postage</td><td></td></tr>
<tr><td>Internet</td><td>$15.40</td><td>none</td><td>$9.95 per 10 packs</td><td></td></tr>
</table><br>What is the cheapest total cost if the catalogue supplier is used?";
$QType[3] = 1;
$QAnswers[3] = "372.24"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Using the offer, every 5th pack is free. So the teacher only pays for 24 packs (30 \\(\\div\\) 5 = 6, so 6 packs are supplied free, leaving (30 - 6) = 24 packs to be purchased.<br>Cost = 24 \\(\\times\\) $15.51 = $372.24";

$Q[4] = "A teacher wants to buy 30 packs of cards to use in sentence-building activities. The table below shows the costs from two suppliers.<br>
<table>
<tr><th>Source</th><th>Cost per pack</th><th>Offers</th><th>Postage</th><th>Total</th></tr>
<tr><td>Catalogue</td><td>$15.51</td><td>5 packs for the price of 4</td><td>Free postage</td><td></td></tr>
<tr><td>Internet</td><td>$15.40</td><td>none</td><td>$9.95 per 10 packs</td><td></td></tr>
</table><br>What is the total cost if the internet supplier is used?";
$QType[4] = 1;
$QAnswers[4] = "491.85";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "Postage cost = 3 \\(\\times\\) $9.95 for 30 packs = $29.85<br>Total cost = $15.40 \\(\\times\\) 30 + $29.85 = $491.85";

$Q[5] = "A teacher wants to buy 30 packs of cards to use in sentence-building activities. The table below shows the costs from two suppliers.<br>
<table>
<tr><th>Source</th><th>Cost per pack</th><th>Offers</th><th>Postage</th><th>Total</th></tr>
<tr><td>Catalogue</td><td>$15.51</td><td>5 packs for the price of 4</td><td>Free postage</td><td>$124.08 for 10 packs</td></tr>
<tr><td>Internet</td><td>$15.40</td><td>none</td><td>$9.95 per 10 packs</td><td>$163.95 for 10 packs</td></tr>
</table><br>How much money will the teacher save by using the cheaper supplier?Give your answer to the nearest cent.";
$QType[5] = 1;
$QAnswers[5] = "119.61";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "Savings for 10 packs = $163.95 - 124.08 = $39.87<br>Savings for 30 packs = $39.87 \\(\\times\\) 3 = $119.61";

$Q[6] = "A school is providing parent-teacher interviews in the mornings before school. Each interview is scheduled to last for 10 minutes. Teachers are required to be available for 1 hour before the start of classes to meet with parents. If a class has up to 28 students, what is the minimum number of days over which the parent-teacher interviews need to run?";
$QType[6] = 1;
$QAnswers[6] = "5";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "1 hour = 60 minutes <br>A teacher can have 60 minutes \\(\\div\\) 10 minutes = 6 interviews in 1 morning.<br>Days required for 28 students = 28 \\(\\div\\) 6 = 4.67 days<br> The parent teacher interviews need to run for at least <b>5</b> days.";

$Q[7] = "A teacher wants to buy an educational game from the UK. The game costs 168 pounds plus 12 pounds postage. The exchange rate is 1 British Pound is equivalent to 1.82 Australian dollars. How many Australian dollars will the teacher need to pay to purchase the game? Give your answer to the nearest cent.";
$QType[7] = 1;
$QAnswers[7] = "327.60";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = " Australian";
$Soln[7] = "Game cost = 168 + 12 = 180 pounds<br>1 pound = 1.82 dollars<br>180 pounds = 180 \\(\\times\\) 1.82 = <b>327.60</b> Australian dollars.";

$Q[8] = "The graphs shows the weight versus height for all of the 12-year-old children in a class.<br><img src='images/PracticeTest5d_1.jpg'><br>What is the weight range amongst these children?";
$QType[8] = 1;
$QAnswers[8] = "14"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " kg";
$Soln[8] = "Maximum weight = 32 kg<br>Minimum weight = 18 kg<br>Weight range = 32 - 18 = <b>14</b> kg";

$Q[9] = "The graphs shows the weight versus height for all of the 12-year-old children in a class.<br><img src='images/PracticeTest5d_1.jpg'><br>How many 12-year old children were in the class?";
$QType[9] = 1;
$QAnswers[9] = "15";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "From the graph, there were <b>15</b> children in the class.";

$Q[10] = "The graphs shows the weight versus height for all of the 12-year-old children in a class.<br><img src='images/PracticeTest5d_1.jpg'><br>What is the median height amongst the 12-year-old children?";
$QType[10] = 1;
$QAnswers[10] = "129";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " cm";
$Soln[10]= "From the graph, median height = <b>129</b> cm";

$Q[11] = "In a primary school there are four classes of 26 children in year 6, three classes of 30 children in year 5, four classes of 23 children in year 4 and four classes of 19 children in year 3. How many children are in the primary school?";
$QType[11] = 1;
$QAnswers[11] = "362";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Number of children = 4 \\(\\times\\) 26 + 3 \\(\\times\\) 30 + 4 \\(\\times\\) 23 + 4 \\(\\times\\) 19 = <b>362</b>";

$Q[12] = "In a group of 1200 school leavers, 60% went on to further study. The rest went on to employment. How many of these school leavers went on to employment?";
$QType[12] = 1;
$QAnswers[12] = "480";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Percentage who went on to employment = 100 - 60% = 40%<br>Number who went on to employment = 40% \\(\\times\\) 1200 = <b>480</b>";


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