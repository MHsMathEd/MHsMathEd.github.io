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

$Q[0] = "A person earns $2400 per fortnight. They spend 30% of their earnings on rent, and $70 per week on food. What percentage of their earnings is spent on food? Give your answer to the nearest percent.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "6";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " %";
$Soln[0] = "Weekly earnings = $2400 \\(\\div\\) 2 = $1200<br>
Percentage spent on food = 70 \\(\\div\\) 1200 \\(\\times\\) 100% = 5.83%<br>
Answer to the nearest percent = <b>6</b>%";

$Q[1] = "1.	A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br><br>
<table>
<tr><th></th><th>Task Value (%)</th><th>	Marked out of</th><th>	Student’s Mark</th></tr>
<tr><td>Task 1</td><td>25</td><td>	50</td><td>	43</td></tr>
<tr><td>Task 2</td><td>	25</td><td>	60</td><td>	38</td></tr>
<tr><td>Task 3</td><td>	50</td><td>	40</td><td>	35</td></tr>
</table><br><br>
What grade did the student receive for the course?";
$QType[1] = 0;
$QAnswers[1] = "c";
$QOptions[1] = array("51-64 Pass","65-74 Credit","75-84 distinction","85-100 high distinction");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Overall grade = 43 \\(\\div\\) 50 \\(\\times\\) 25 + 38 \\(\\div\\) 60 \\(\\times\\) 25 + 35 \\(\\div\\) 40 \\(\\times\\) 50 = 81.083<br>This corresponds to a distinction, option <b>(c)</b>";

$Q[2] = "A school recommended its stage 4 pupils do 3 hours of homework each week. If a student completed all the recommended homework on weeknights (and none on weekends), what was the mean time the student spent on homework each weeknight evening? Give your answer in minutes, to the nearest minute.";
$QType[2] = 1;
$QAnswers[2] = "36";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " minutes";
$Soln[2] = "3 hours = 3 \\(\\times\\) 60 minutes = 180 minutes<br> Average homework per day = 180 \\(\\div\\) 5 minutes = <b>36</b> minutes.";

$Q[3] = "A teacher started a trip with a full tank of petrol. The car had a fuel efficiency of 9.2 litres per 100 km. At the end of the trip the teacher paid $62.10 to refill the car. The fuel cost 135 c per litre. What was the distance of the trip in kilometres?";
$QType[3] = 1;
$QAnswers[3] = "500"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " km";
$Soln[3] = "Cost of fuel in dollars = 135 \\(\\div\\) 100 = $1.35<br>Amount of fuel used = $62.10 \\(\\div\\) 1.35 = 46 L<br>Number of groups of 9.2 L of fuel used = 46 \\(\\div\\) 9.2 = 5<br>Distance travelled = 5 \\(\\times\\) 100 km = <b>500</b> km.";

$Q[4] = "The graph shows the number of Australian adults who holding tertiary educational qualifications, Certificate III or above. The data are separated by age and sex, and have been recorded from 2007 to 2017. <br><br><img src='images/PracticeTest10d_1.jpg'><br><br> True/False: More than 60 % of 25-34 year old female do not hold a certificate III or higher";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "False <b>(b)</b>. More than 60% do hold a certificate III or above.";

$Q[5] = "The graph shows the number of Australian adults who holding tertiary educational qualifications, Certificate III or above. The data are separated by age and sex, and have been recorded from 2007 to 2017. <br><br><img src='images/PracticeTest10d_1.jpg'><br><br> True/False: A higher percentage of women aged 25-34 hold a certificate III or higher than do men aged 25-34.";
$QType[5] = 0;
$QAnswers[5] = "a";
$QOptions[5] = array("True","False","N/A","N/A");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "This is true <b>(a)</b>";

$Q[6] = "The graph shows the number of Australian adults who holding tertiary educational qualifications, Certificate III or above. The data are separated by age and sex, and have been recorded from 2007 to 2017. <br><br><img src='images/PracticeTest10d_1.jpg'><br><br>Which group of males has the lowest percentage of these qualifications?";
$QType[6] = 0;
$QAnswers[6] = "a";
$QOptions[6] = array("18-24","25-34","35+","Can’t be determined from these data");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "18-24 year old males, option <b>(a)</b> have the lowest proportion of these qualifications.";

$Q[7] = "On a school hiking trip, the students travel by bus for 80 minutes. They then hike for 190 minutes, have a lunch break for 45 minutes, hike again for another 50 minutes, then travel back by bus for another 80 minutes. How many hours did the trip take altogether? Give your answer rounded to 1 decimal place.";
$QType[7] = 1;
$QAnswers[7] = "7.4";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " hours";
$Soln[7] = "Trip duration in minutes = 80 + 190 + 45 + 50 + 80 = 445 minutes<br>Trip duration in hours = 445 \\(\\div\\) 60 minutes = 7.41666... minutes<br>Answer to 1 decimal place = <b>7.4</b> hours.";

$Q[8] = "A box contains 6 blue balls, 6 red balls and 8 yellow balls. What is the probability of randomly drawing a blue ball?";
$QType[8] = 0;
$QAnswers[8] = "d"; 
$QOptions[8] = array("\\(\\frac{3}{5}\\)","\\(\\frac{3}{6}\\)","\\(\\frac{3}{8}\\)","\\(\\frac{3}{10}\\)");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Probability = number of blue balls \\(\\div\\) total number of balls = \\(\\frac{6}{6+6+8} = \\frac{6}{20} = \\frac{3}{10}\\)";

$Q[9] = "A school band with 10 members charges $300 per member per year to cover costs. What would the cost per member be if there were 15 members?";
$QType[9] = 1;
$QAnswers[9] = "200";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "$";
$suffix[9] = "";
$Soln[9] = "Total cost to run the band = 10 \\(\\times\\) $300 = $3000<br>Cost per person with 15 people = $3000 \\(\\div\\) 15 = $<b>200</b>";

$Q[10] = "A teacher needs to have her class arrive at a theatre at 1:20 pm. The bus company have told her that their buses travel at an average speed of 50 km per hour. Google Maps says that the distance to the theatre from the school is 70 km. What is the latest time that the buses can leave the school? Give your answer in 24-hour time as a 4-digit number, for example: 0420 is 4:20 am.";
$QType[10] = 1;
$QAnswers[10] = "1156";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Trip time = 70 \\(\\div\\) 50 = 1.4 hours = 1 hour + 0.4 \\(\\times\\) 60 minutes = 1 hour 24 minutes<br>Latest departure time = 1:20 pm - 1 hour 24 minutes = 12:20 pm - 24 minutes = 12:00 pm - 4 minutes = 11:56 am<br>Answer in 24-hour time = <b>1156</b>";

$Q[11] = "A teacher gave her 25 students a class test, that was marked out of 50. The following graph shows the cumulative frequency distribution of test marks. <br><br><img src='images/PracticeTest10d_2.jpg'><br><br> What percentage of students scored above 40/50 in the test?";
$QType[11] = 1;
$QAnswers[11] = "12";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " %";
$Soln[11] = "40/50 = 80%<br>From the graph, 3 out of 25 students scored above 80%<br>This corresponds to 3 \\(\\div\\) 25 \\(\\times\\) 100% = <b>12</b>%";

$Q[12] = "A teacher is escorting a group of students from Katherine to Darwin. The teacher knows that the bus has an average speed of 100 km/h. She also knows that the trip takes 3 hours and 15 minutes. Using these data, how far is it from Katherine to Darwin?";
$QType[12] = 1;
$QAnswers[12] = "325";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " km";
$Soln[12] = "Time taken = 3 hours 15 minutes = 3 hours + 15 \\(\\div\\) 60 hours = 3.25 hours<br>Distance = speed \\(\\times\\) time = 100 \\(\\times\\) 3.25 = <b>325</b> km";

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