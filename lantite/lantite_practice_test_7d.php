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

$Q[0] = "A teacher is planning to take a group of students on a hike. On the map, the hike distance is 12 cm. The map says that the scale is 1:40 000. What is the actual distance of the hike? Give your answer in km.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "4.8";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " km";
$Soln[0] = "1 unit on the map is 40 000 units on the ground<br>1 cm on the map is 40 000 cm on the ground<br>12 cm on the map is 12 \\(\\times\\) 40 000 = 480 000 cm on the ground<br>Distance to walk = 480 000 cm = 480 000 \\(\\div\\) 100 = 4 800 m = 4 800 \\(\\div\\) 1 000 = <b>4.8</b> km";

$Q[1] = "A teacher is planning to take the school orienteering team to a competition in the United States. The course distance is 3 miles. Using the rule of thumb that one mile is approximately 1.6 km, calculate the length of the course in metres. Give your answer to the nearest metre.";
$QType[1] = 1;
$QAnswers[1] = "4800";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " m";
$Soln[1] = "1 mile = 1.6 km<br>3 miles = 3 \\(\\times\\) 1.6 km = 4.8 km = 4.8 \\(\\times\\) 1000 = <b>4800</b> m";

$Q[2] = "During a swimming lesson, a teacher observes that a student uses 63 strokes to swim the length of a 50 m pool. On average, how many centimetres did the student swim with each stroke? Give your answer rounded to the nearest centimetre.";
$QType[2] = 1;
$QAnswers[2] = "79";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " cm";
$Soln[2] = "50 m = 50 \\(\\times\\) 100 = 5000 cm<br>63 strokes for 5000 cm<br>1 stroke for 5000 \\(\\div\\) 63 = 79.3 cm, which rounds to <b>79</b> cm";

$Q[3] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below. <br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><td>A</td><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><td>B</td><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><td>C</td><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><td>D</td><td>36.1</td><td>38.4</td><td>38.2</td><td>38.6</td><td>38.9</td><td>39.5</td></tr>
<tr><td>E</td><td>29.7</td><td>43.4</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td></tr></table><br>What was the percentage increase in School D’s results between 2008 and 2013?";
$QType[3] = 1;
$QAnswers[3] = "3.4"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " %";
$Soln[3] = "Percentage increase = 39.5 - 36.1 = <b>3.4</b>%";

$Q[4] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><img src='images/PracticeTest7d_1.jpg'><br>How many more people lived in Victoria than in Tasmania?";
$QType[4] = 1;
$QAnswers[4] = "5129900";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Difference = 5 640 900 - 511 000 = <b>5129900</b>";

$Q[5] = "A teacher wishes to buy about 3 kg of mandarins. An Internet site told her that mandarins weigh about 140 g each. Using this estimate, how many mandarins will the teacher need to buy? Give your answer rounded to the nearest whole number of fruit.";
$QType[5] = 1;
$QAnswers[5] = "21";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Mandarin weight = 140 g = 0.140 kg<br>Number of mandarins = 3 \\(\\div\\) 0.140 = 21.4, which rounds to <b>21</b>";

$Q[6] = "The formula to convert between temperatures in Fahrenheit and Celsius is<br>
(F – 32) \\(\\times\\) \\(\\frac{5}{9}\\) = C<br>
Where F is the temperature in Fahrenheit and C is the temperature in Celsius. What is 0 degrees Fahrenheit in Celsius?";
$QType[6] = 0;
$QAnswers[6] = "a";
$QOptions[6] = array("-18","-10","0","18");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "(0 – 32) \\(\\times\\) \\(\\frac{5}{9}\\) = \\(-32 \\times 5 \\div 9\\) = -17.78, which rounds to -18°C, which is option <b>(a)</b>";

$Q[7] = "The same paint is sold at the same store in various size containers. The volumes and prices are as follows: <br>
<table>
<tr><th>Volume</th><th>Price</th></tr>
<tr><td>100 mL</td><td>$7.60</td></tr>
<tr><td>500 mL</td><td>$28.20</td></tr>
<tr><td>1 L</td><td>$42.90</td></tr>
<tr><td>10 L</td><td>$171.00</td></tr>
</table><br>
Which product offers the best value for money?";
$QType[7] = 0;
$QAnswers[7] = "d";
$QOptions[7] = array("100 mL","500 mL","1 L","10 L");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "<table>
<tr><th>Volume</th><th>Price</th><th>Price per 1 L calculation</th><th>Price per 1 L</th></tr>
<tr><td>100 mL</td><td>$7.60</td><td>$7.60 \\(\\times\\) 10</td><td>$76</td></tr>
<tr><td>500 mL</td><td>$28.20</td><td>$28.20 \\(\\times\\) 2 </td><td>$56.40</td></tr>
<tr><td>1 L</td><td>$42.90</td><td></td><td>$42.90</td></tr>
<tr><td>10 L</td><td>$171.00</td><td>$171 \\(\\div\\) 10</td><td>$17.10</td></tr>
</table><br>so the 10 L tin, option <b>d</b> represents the best value for money.";

$Q[8] = "A teacher invests some of her superannuation in a cash investment with an interest rate of 5%, compounded annually. The formula to compute the value of her investment is as follows.<br>
\\(V = A \\times (1 - \\frac{r}{100})\\)<sup>n</sup><br>where \\(V\\) is the dollar value of the investment, \\(A\\) is the sum initially invested in dollars, \\(r\\) is the percentage interest rate, and \\(n\\) is the number of years the money was invested.<br>If the teacher invested $20 000, what will her investment be worth after 1 year? Give your answer to the nearest dollar.";
$QType[8] = 1;
$QAnswers[8] = "21000"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "Value = 20000 \\(\\times\\) (1 - 5 \\(\\div\\) 100)<sup>1</sup> = 20000 \\(\\times\\) 1.05<sup>1</sup> = 20000 \\(\\times\\) 1.05 = $<b>21000</b>";

$Q[9] = "The marks that ten year 10 students achieved in their final English and Mathematics exams were recorded and plotted in the following graph.<br><img src='images/PracticeTest7d_2.jpg'><br>What was the median mathematics mark achieved by these students?";
$QType[9] = 1;
$QAnswers[9] = "75";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Maths marks: 51, 53, 56, 66, 72, 78, 80, 86, 94, 98<br>Median mark = <b>75</b>";

$Q[10] = "The marks that ten year 10 students achieved in their final English and Mathematics exams were recorded and plotted in the following graph.<br><img src='images/PracticeTest7d_2.jpg'> <br>The student who obtained the highest score in English scored what mark in mathematics?";
$QType[10] = 1;
$QAnswers[10] = "53";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Highest English mark = 88<br>This student scored <b>53</b> in mathematics.";

$Q[11] = "You want to buy two lots of a given product. You have found that it is available in four different stores. Which store has the cheapest price for you?";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("Store 1: 1 item costs $56.70 ","Store 2: 1 item normally costs $65 but is discounted by 10%","Store 3: the item costs $58 for 1, or $102 for 2 ","Store 4: 1 item normally cosst $70 but is discounted by 15%");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Total cost from Store 1 = \\(2 \\times \\) $56.70 = $113.40<br>total cost from Store 2 = 2 \\(\\times\\) $65 \\(\\times\\) 90% = 2 \\(\\times\\) $65 \\(\\times\\) 90 \\(\\div\\) 100 = $117<br>Total cost from Store 3 = $102<br>Total cost from Store 4 = 2 \\(\\times\\) $70 \\(\\times\\) 85% = 2 \\(\\times\\) $70 \\(\\times 85 \\div 100\\) = $119<br>The cheapest option is Store 3, option <b>(c)</b>";

$Q[12] = "A teacher is trying to timetable classes across a multiple campus school. The times to walk between campuses are shown in the following table.<br>
<table>
<tr><th></th><th>North Campus</th><th>South Campus</th><th>West Campus</th></tr>
<tr><td>North Campus</td><td>0</td><td>12</td><td>10</td></tr>
<tr><td>South Campus</td><td>12</td><td>0</td><td>5</td></tr>
<tr><td>West Campus</td><td>10</td><td>5</td><td>0</td></tr>
</table><br>A class needs to study maths on North Campus C1, science on North Campus, music on South Campus, and PE on West Campus. The four programs below show the students' lessons for the day, in order. Which of these programs minimizes the amount of walking needed by the students? ";
$QType[12] = 0;
$QAnswers[12] = "d";
$QOptions[12] = array("1) maths 2) music 3) PE 4) science","1) PE 2) music 3) science 4) maths ","1) maths 2) PE 3) science 4) music ","1) science, 2) maths, 3) PE, 4) music");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Program a walking time = 12 + 5 + 10 = 27 min<br>Program b walking time = 5 + 12 + 0 = 17 min<br>Program c walking time = 10 + 10 + 12 = 32 min<br>Program d walking time = 0 + 10 + 5 = 15 min<br>Program <b>d<b> has the least walking.";

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