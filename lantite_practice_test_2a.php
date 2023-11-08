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

$Q[0] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below.<br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><th>A</th><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><th>B</th><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><th>C</th><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><th>D</th><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
</table><br>
Which school scored the lowest percentage of band 5 and 6 students in 2012?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "b";
$QOptions[0] = array("A","B","C","D");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "School B, with 34.7%, which is option <b>b</b>";

$Q[1] = "A teacher gives her class a maths test each week. After 9 weeks of a 10-week term, one student has an average mark of 64%. What mark would this student need to get in the tenth test to bring their average mark up to 65%?";
$QType[1] = 0;
$QAnswers[1] = "d";
$QOptions[1] = array("65%","66%","68.1%","74%");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Correct answer is <b>(d)</b> as (9 \\(\\times\\) 64 + 74) \\(\\div\\) 10 = 65.";

$Q[2] = "A coach took a class on an excursion to Ballarat. It left the school at 7:30 am. It travelled at an average speed of 60 km/h for the first half hour. Then it travelled at an average speed of 90 km/hour for the next three and a half hours. At what time did the bus arrive in Ballarat?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("11:00 am","11:15 am","11:30 am","11:45 am");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The bus arrived in Ballarat 4 hours after it left. This means that it arrived at 11:30 am, which is <b>(c)</b>";

$Q[3] = "A teacher wishes to purchase a book from a US supplier. The book costs US$23.50 plus US$9 postage. The exchange rate is Australian $1 = US 72 cents. What will it cost, in Australian dollars, for the teacher to purchase the book and have it delivered?<br>Round your answer to the nearest cent.";
$QType[3] = 1;
$QAnswers[3] = "45.14"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "Australian $";
$suffix[3] = "";
$Soln[3] = "Cost in US dollars = $23.50 + $9 = $32.50<br>US 72 cents = US $0.72<br>US$0.72 = Australian $1<br> US$1 = Australian $1 \\(\\div\\) 0.72 = 1.388889<br>US$32.50 = 1.388889 \\(\\times\\) 32.50 = 45.14<br>The cost is <b>45.14</b> Australian dollars.";

$Q[4] = "Last year a teacher paid $200 per week in rent. This year he pays $210 per week. What percentage increase is this?";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("5%","10%","15%","20%");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "$210 - $200 = $10<br>10 \\(\\div\\)$200 \\(\\times\\) 100% = 5%, which is <b>(a)</b>";

$Q[5] = "A school builds a new swimming pool. The pool is 25 m long, 14 m wide and 190 cm deep. What is the volume of the swimming pool in cubic metres?";
$QType[5] = 1;
$QAnswers[5] = "665";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " m<sup>3</sup>";
$Soln[5] = "190 cm = 1.9 m<br>
Volume = 25 \\(\\times\\) 14 \\(\\times\\) 1.9 = <b>665</b> m<sup>3</sup>";

$Q[6] = "A school builds a new swimming pool. The pool is 25 m long, 14 m wide and 190 cm deep. What is the volume of the swimming pool in litres? (hint: 1000 L = 1 m<sup>3</sup>)";
$QType[6] = 1;
$QAnswers[6] = "665000";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " L";
$Soln[6] = "190 cm = 1.9 m<br>
Volume = 25 \\(\\times\\) 14 \\(\\times\\) 1.9 = 665 m<sup>3</sup><br>
1 m<sup>3</sup> = 1000 L, so <br>
665 m<sup>3</sup> = 665 000 L<br>
Volume = <b>665000</b> litres.";

$Q[7] = "150 minutes are allowed for an examination. If the exam begins at 10:52 am, at what time does it finish?";
$QType[7] = 0;
$QAnswers[7] = "b";
$QOptions[7] = array("12:52 pm","1:22 pm","1:52 pm","2:22 pm");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "150 minutes = 2 hours and 30 minutes. 10:52 am + 2 hours and 30 minutes = 12:52 pm + 30 minutes = 1:22 pm, which is <b>(b)</b>";

$Q[8] = "A science teacher intends to use the following recipe with her class to make slime:<br><img src='images/PracticeTest2a_1.jpg'><br>Her students will work in groups of three. Each group will make up a batch of slime using this recipe. If there are 27 students in the class, how many litres of PVC school glue are required?";
$QType[8] = 1;
$QAnswers[8] = "2.25"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "Number of groups = 27 \\(\\div\\) 3 = 9<br> Each group uses 250 mL = 0.25 L PVC glue<br> Quantity of glue needed = 9 \\(\\times\\) 0.25 L = <b>2.25</b> L";

$Q[9] = "A science teacher intends to use the following recipe with her class to make slime:<br><img src='images/PracticeTest2a_1.jpg'><br>Her students will work in groups of three. Each group will make up a batch of slime using this recipe. What volume of slime will be made by each group";
$QType[9] = 0;
$QAnswers[9] = "b";
$QOptions[9] = array("250 mL","310 mL","550 mL","2.3 L");
$prefix[9] = "";
$suffix[9] = " mL";
$Soln[9] = "volume = 250 mL + 60 mL = 310 mL, which is option <b>(b)</b>.";

$Q[10] = "A year 9 class is selling pancakes to raise money. They are charging $2 for one pancake, or $3 for two pancakes. The maths staff members have $20 between them to spend on pancakes. If they buy the most pancakes they can, how much change will they receive from their $20?";
$QType[10] = 1;
$QAnswers[10] = "0";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "They can spend all of the $20 on pancakes. They can spend $18 to receive 6 \\(\\times\\) 3 = 18 pancakes, and then buy one more pancake with the remaining $2. This leaves them with $<b>0.00</b> remaining from their $20.";

$Q[11] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'><br> Which area has the highest number of jobs?";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("Mining","Electricity, gas, water and waste services","Accommodation and food services","Health care");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Health Care <b>(d)</b>";

$Q[12] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'><br> Which type of job is the best-paying, on average?";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("Mining","Electricity, gas, water and waste services","Accommodation and food services","Health care");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Mining <b>(a)</b>";

$_SESSION["Q"] = $Q;
$_SESSION["Qtype"] = $QType;
$_SESSION["QAnswers"] = $QAnswers;
$_SESSION["QOptions"] = $QOptions;
$_SESSION["prefix"] = $prefix;
$_SESSION["suffix"] = $suffix;
$_SESSION["Soln"] = $Soln;
$_SESSION["QNo"] = 0;
$_SESSION["QCorrect"] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
$_SESSION["YourAnswer"] = array("","","","","","","","","","","","","","","");

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