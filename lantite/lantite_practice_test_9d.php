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

$Q[0] = "A year 8 science textbook weighs 800 g. There are six classes of thirty students in year 8 and six teachers. A teacher orders one textbook for each student and one for each teacher. The textbooks all arrive in one crate. What is the weight of the crate? Give your answer to the nearest kilogram.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "149";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " kg";
$Soln[0] = "Total number of textbooks = 6 \\(\\times\\) 30 + 6 = 186<br>Weight of each book in kg = 800 \\(\\div\\) 1000 = 0.8 kg<br>Total weight = 0.8 \\(\\times\\) 186 = 148.8 kg, which is rounded to <b>149</b> kg.";

$Q[1] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>True/False: The majority of Australian people scored 8 or above.";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("True","False","N/A","N/A");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "If we add up the percentages of people who scored 8 or 9 or 10 we see that it is more than 50%. So the statement is true <b>(a)</b>";

$Q[2] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>True/False: Women were more likely than men to score 8 or above.";
$QType[2] = 0;
$QAnswers[2] = "a";
$QOptions[2] = array("True","False","N/A","N/A");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "If we add up the male percentages for scores 8, 9 and 10 and add up the female percentages for scores 8, 9 and 10, we see that the female percentage is higher. So the statement is true <b>(a)</b>";

$Q[3] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>True/False: Women were more likely than men to score 0-4.";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("True","False","N/A","N/A");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "If we look at the male percentages for scores 0-4, and the female percentage for scores 0-4 we see that the male score is higher. So the statement is false <b>(b)</b>";

$Q[4] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>What percentage of male survey scores are presented in this graph?";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("50%","63%","87%","100%");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "100% (option <b>d</b>) of male survey scores are presented here. This can be checked by adding up the percentage of males on each score and seeing that they add to 100%";

$Q[5] = "One Australian dollar is equivalent to 1.05 New Zealand dollars. How many New Zealand dollars is $50 Australian dollars worth?";
$QType[5] = 1;
$QAnswers[5] = "52.50";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "AU$50 = NZ$ 50 \\(\\times \\) 1.05 = $<b>52.50</b>";

$Q[6] = "How many 250 mL glasses can be filled from a 2 L jug of water?";
$QType[6] = 1;
$QAnswers[6] = "8";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Jug capacity in mL = 2 \\(\\times\\) 1000 = 2000 mL<br>Number of cups = 2000 \\(\\div\\) 250 = <b>8</b>";

$Q[7] = "A course involved three assessment tasks. The overall percentage value of the task and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Student's Mark</th></tr>
<tr><td>Task 1</td><td>10</td><td>18/20</td></tr>
<tr><td>Task 2</td><td>40</td><td>24/30</td></tr>
<tr><td>Task 3</td><td>50</td><td>32/40</td></tr>
</table><br>What was the student's final mark as a percentage?";
$QType[7] = 1;
$QAnswers[7] = "81";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "%";
$Soln[7] = "Final Mark % = 18 \\(\\div\\) 20 \\(\\times\\) 10 + 22 \\(\\div\\) 30 \\(\\times\\) 40 + 30 \\(\\div\\) 40 \\(\\times\\) 50 = 9 + 32 + 40 = <b>81</b>%";

$Q[8] = "For the school walkathon, students are to walk 300 m east along Eucalyptus Avenue, then 350 m south along Wattle Street, then 100 m west along Angophora Avenue, then 350 m north along Tea Tree Street, and finally due west along Eucalyptus Avenue back to the start. If students complete five laps, how far have they walked?";
$QType[8] = 1;
$QAnswers[8] = "6500"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " m";
$Soln[8] = "Distance travelled north = distance travelled south = 350 m<br>Distance travelled east = 300 m = Distance travelled west = 100 m + some more. The more must be 300 m - 100 m  = 200 m
Distance of 1 lap = 350 + 350 + 300 + 300 = 1300 m<Br>Distance of 5 laps = 5 \\(\\times\\) 1300 m = <b>6500</b> m";

$Q[9] = "The graph below shows the percentage of children aged 0-11 who attended care across Australia.<br><br><img src='images/PracticeTest9d_2.jpg'><br><br>Which category showed the greatest percentage increase between 1996 and 2017?.";
$QType[9] = 0;
$QAnswers[9] = "c";
$QOptions[9] = array("children who attend care","children in informal care only","children in formal care only","children in both formal and informal care");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "% increase in children who attend care = goes from about 45% to just over 45% = about 2%<br>% increase in children in informal care only = decreases (so we don't need to consider this category)<br>% increase in children in formal care only = just under 10% to just under 20% = about 10%<br>% increase in children in both formal and informal care = from just over 5% to just under 10% = about 5%<br>So the biggest increase is in 'children in formal care only', option <b>(c)</b>";

$Q[10] = "A teacher has a recipe for making play dough. To make play dough for 4 children he requires <br>
* 2 cups of plain flour,  <br>
* 4 tablespoons of cream of tartar  <br>
* 1 cup of salt, <br>
* 500 mL of water, and <br>
* 2 tablespoons of oil. <br>
How many litres of water does he need in order to make enough play dough for his 20 students?";
$QType[10] = 1;
$QAnswers[10] = "2.5";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " L";
$Soln[10]= "Water for 1 batch of play dough in litres = 500 mL \\(\\div\\) 1000 = 0.5 L<br>Number of batches of play dough needed for 20 students = \\(\\div\\) 4 = 5 batches of play dough<Br>Water needed for 5 batches = 5 \\(\\times\\) 0.5 L = <b>2.5</b> L water";

$Q[11] = "A family has a weekly, after-tax income of $1370. They spend $280 each week on groceries and $1240 each fortnight on rent. What percentage of their after-tax income is available for other expenses? Give your answer to the nearest whole number.";
$QType[11] = 1;
$QAnswers[11] = "66";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " %";
$Soln[11] = "Weekly rent expense = $1240 \\(\\div\\) 2 = $620<br>Weekly expenses = $620 + 280 = $900<br>Extra money = $1370 - 900 = $470<Br>Percentage of money spare = 470 \\(\\div\\) 1370 \\(\\times\\) 100% = 34.3%<br>Rounded to the nearest whole number = <b>34</b>%";

$Q[12] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below. <br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><td>A</td><td>27.73</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><td>B</td><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><td>C</td><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9 </td><td>43.3</td><td>42.5</td></tr>
<tr><td>D</td><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
<tr><td>E</td><td>29.7</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td><td>43.4</td></tr>
</table><br>
If 160 students at school A scored a band 5 or 6 in 2013, and 80% of these scored a band 5, how many students scored a band 6?";

$QType[12] = 1;
$QAnswers[12] = "32";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Percentage of students scoring a band 6 = 100 - 80 = 20%<br>Number of students who scored a band 6 = 20 \\(\\div\\) 100 \\(\\times\\) 160 = <b>32</b> students.";

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