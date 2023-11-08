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

$Q[0] = "A teacher wants to buy 28 sets of educational mathematics tools from a Canadian producer. The sets each cost Canadian $25.50 and it will cost a further $35 Canadian to ship them to Australia. If the exchange rate is $1 Australian = $0.96 Canadian, how much will the purchase cost in Australian dollars?<br>Give your answer to the nearest cent.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "780.21";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Total cost in Canadian dollars = 28 \\(\\times\\) 25.50 + 35 = $749<br>Cost in Australian dollars = $749 \\(\\div\\) 0.96 = $<b>780.21</b>";

$Q[1] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>What is the name of the type of graph used to show the type of school which students attend?";
$QType[1] = 0;
$QAnswers[1] = "c";
$QOptions[1] = array("bar chart","histogram","pie chart","ratio graph");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "This information is represented in a pie chart (option <b>(c)</b>)";

$Q[2] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>How many full-time equivalent teachers were there in Australian schools in 2017?<br>Give your answer to the nearest whole number.";
$QType[2] = 1;
$QAnswers[2] = "283207";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Number of teachers = 70% \\(\\times\\) 404580.9 = <b>283207</b>";

$Q[3] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>What was the mean (average) number of in-school staff in each school? Give your answer rounded to 1 decimal place.";
$QType[3] = 1;
$QAnswers[3] = "42.8"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Average number of staff in each school = 404580.9 \\(\\div\\) 9444 = <b>42.8</b>";

$Q[4] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>What percentage of students left school before the end of year 12?";
$QType[4] = 1;
$QAnswers[4] = "15.2";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "%";
$Soln[4] = "Percentage leaving early = 100 - 84.8 = <b>15.2</b>%";

$Q[5] = "A box contains 6 blue balls, 5 red balls and 9 yellow balls. What is the probability of randomly drawing a red or a blue ball? Give your answer as a decimal rounded to 2 decimal places.";
$QType[5] = 1;
$QAnswers[5] = "0.55";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Probability of drawing red or blue = \\(6 + 5)\\over (6 + 5 + 9)\\) = \\(11\\over 20\\) = <b>0.55</b>";

$Q[6] = "A school wants to lay new turf on its school sports field. The field is rectangular and has dimensions 80 m x 50 m. Turf is sold in rolls 80 cm wide and 2 m long. How many rolls of turf are required to cover the field?";
$QType[6] = 1;
$QAnswers[6] = "2500";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Area of field = 80 \\(\\times\\) 50 = 4000 m<sup>2</sup><br> Area of turf in square metres = 0.8 \\(\\times\\) 2 = 1.6 m<sup>2</sup><br>Number of rolls required = 4000 \\(\\div\\) 1.6 = <b>2500</b>";

$Q[7] = "A history teacher is examining a scale drawing of a cannon. The scale on the drawing is 1 cm represents 50 cm. The canon in the drawing is 10 cm long. How long is the actual cannon in metres?";
$QType[7] = 1;
$QAnswers[7] = "5";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " m";
$Soln[7] = "Actual length = 50 \\(\\times\\) 10 cm = 500 cm = <b>5</b> m";

$Q[8] = "A teacher earns $78000 per annum and spends $2000 per month on rent. Which formula shows how much of the teacher’s income is not spent on rent each year?";
$QType[8] = 0;
$QAnswers[8] = "d"; 
$QOptions[8] = array("\\(78000\\over 12\\) - 2000","\\((78000 - 2000)\\over 12\\)","(78000-2000)\\(\\times\\) 12","78000 – 2000 \\(\\times\\) 12");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Option <b>(d)</b>";

$Q[9] = "A coach took a class on an excursion to Mt Isa. It left the school at 7.30 am and arrived at 2.15 pm. It travelled along minor roads at an average speed of 60 km/h for the first quarter hour and the last half hour of the trip. For the rest of the trip the bus drove along highways and had a higher average speed. The bus stopped between 12.10 pm and 1.10 pm for a lunch break. If the trip was 495 km long, what was the average speed of the bus while travelling along the highways?";
$QType[9] = 1;
$QAnswers[9] = "90";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " km/h";
$Soln[9] = "15 minutes = 0.25 hour<br>Distance travelled in first 15 minutes + last 30 minutes = 60 km/h \\(\\times\\) (0.25 + 0.5) hour = 45 km<br>Distance travelled on highways = 495 - 45 = 450 km<br> Total trip time = 6.75 hours<br>Time spend driving along highways = 6.75 - 0.75 - 1 = 5 hours<br>Average speed = 450 km \\(\\div\\) 5 hours = <b>90</b> km/h";

$Q[10] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below.<br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><th>A</th><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><th>B</th><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><th>C</th><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><th>D</th><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
<tr><th>E</th><td>29.7</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td><td>43.4</td></tr>
</table><br>Between 2009 and 2010, which school scored the largest percentage increase in students achieving a band 5 or band 6?";
$QType[10] = 0;
$QAnswers[10] = "a";
$QOptions[10] = array("A","B","C","D");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "School <b>A</b>, which increased from 28.2% to 34.2%";

$Q[11] = "In a particular school district, the ratio of days when PSSA (inter-school sport) was played to days when PSSA was cancelled was 3:2. If there were 14 days on which PSSA was cancelled, how many days was PSSA played?";
$QType[11] = 1;
$QAnswers[11] = "21";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "14 days = 2 parts, so 7 days = 1 part, so 21 days = 3 parts. PSSA was played on <b>21</b> days.";

$Q[12] = "A teacher earns $1200 per week. They spend 30% of their earnings on rent, and $70 per week on food. What percentage of their income do they have available for expenses other than rent and food? Give your answer to the nearest percent.";
$QType[12] = 1;
$QAnswers[12] = "64";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "%";
$Soln[12] = "Percentage of earnings spent on food = \\(70\\over 1200\\) \\(\\times\\) 100% = 5.83%<br>Percentage of income available = 100 - 30 - 5.83 = <b>64</b>%";

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