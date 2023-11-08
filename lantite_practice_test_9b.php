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

$Q[0] = "A school has organised for a travelling production to play to their 96 year three students. The theatre company are charging the school a fixed amount for the performance. The cost per student is $7.10. If the school decides that the 112 students in year 4 should also watch the production at the same time, what will be the cost per student? Give your answer in dollars, rounded to the nearest cent.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "3.28";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Total cost of show = $7.10 \\(\\times\\) 96 = $681.60<br>Total number of students in years 3 and 4 = 96 + 112 = 208<br>Cost per student = $681.60 \\(\\div\\) 208 = <b>3.28</b>";

$Q[1] = "The graph shows the proportion of student enrolled in government and non-government schools across Australia from 1998 to 2017.<br><br><img src='images/PracticeTest9b_1.jpg'><br><br>In 1998, what was the percentage difference between the number of students in Government and non-Government schools?";
$QType[1] = 1;
$QAnswers[1] = "40";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "%";
$Soln[1] = "In 1998 70% of students were in government schools, and 30% were in non-government schools. <br> Percentage difference = 70% - 30% = <b>40</b>%";

$Q[2] = "A history teacher is taking an archaeology field trip to Easter Island. The exchange rate is 1 Australian dollar = 473 Peso. The teacher’s handbook states that a person should allow 30 000 Pesos per day for food. If the trip is to be for 6 days, how much money in Australian dollars should the teacher budget for food for each person? Give your answer to the nearest dollar.";
$QType[2] = 1;
$QAnswers[2] = "381";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Amount of Pesos needed = 30 000 \\(\\times\\) 6 = 180 000<br>473 pesos = AU$1<br>1 peso = AU$1 \\(\\div\\) 473<br>180 000 pesos = AU$1 \\(\\div\\) 473 \\(\\times\\) 180 000 = $<b>381</b> to the nearest dollar.";

$Q[3] = "A train leaves Sydney at 9.03 am and arrives at Nambucca Heads at 6.28 pm. How long, in minutes, was the trip?";
$QType[3] = 1;
$QAnswers[3] = "565"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Trip length = 9 hours and 25 minutes = 9 \\(\\times\\) 60 + 25 minutes = <b>565</b> minutes";

$Q[4] = "A council wishes to subdivide two hectares of land for a new residential development. Each house block is to be 750 m<sup>2</sup>. If one hectare is equal to 10 000 m<sup>2</sup>, how many 750 m<sup>2</sup> house blocks can be allocated? Give your answer as a whole number of house blocks.";
$QType[4] = 1;
$QAnswers[4] = "26";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "2 Hectares = 20 000 m<sup>2</sup><br>Number of house blocks = 20 000 \\(\\div\\) 750 = 26.67<br>We need to round this down, because we cannot sell the 0.67 as a full 750 m<sup>2</sup> house block.<br>Number of blocks that can be allocated = <b>26</b>";

$Q[5] = "What mass in grams is this scale showing?<br><br><img src='images/PracticeTest9b_2.jpg'>";
$QType[5] = 1;
$QAnswers[5] = "170";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " g";
$Soln[5] = "Each gradation on the scale is 10 g. So the scale is reading <b>170</b> g.";

$Q[6] = "The chemistry staff have used 40% of their 2 litre supply of hydrochloric acid. How many millilitres of hydrochloric acid do they still have?";
$QType[6] = 1;
$QAnswers[6] = "1200";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " mL";
$Soln[6] = "Volume of hydrochloric acid (HCl) in supply in mL = 2000 mL<br>Percentage HCl remaining = 100% - 40% = 60%<br>Volume HCl remaining = 60% \\(\\times\\) 2000 mL = 60 \\(\\div\\) 100 \\(\\times\\) 2000 = <b>1200</b> mL";

$Q[7] = "The teachers of stage 2 are organising a multicultural day for their 86 students. They have decided to ask a caterer to provide a $5 meal and a $1 dessert for each child. What is the total cost of the catering?";
$QType[7] = 1;
$QAnswers[7] = "516";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "Cost per student = $5 + $1 = $6<br>Total cost = 86 \\(\\times\\) $6 = $<b>516</b>";

$Q[8] = "The 820 students from a particular school are to travel by buses to the school swimming carnival. Each bus fits 78 people, and must contain at least two teachers. What is the minimum number of buses required to transport all of the students to the carnival?";
$QType[8] = 1;
$QAnswers[8] = "11"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Number of student spaces on each bus = 78 - 2 = 76<br>Number of groups of 76 students = 820 \\(\\div\\) 76 = 10.8, which we need to round up to 11<br>Number of buses required = <b>11</b>";

$Q[9] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest9b_3.jpg'><br><br>What was the mean final mark, as a percentage?";
$QType[9] = 1;
$QAnswers[9] = "73.75";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Sum of marks = 10 + 12 + 14 + 15 + 16 + 16 + 17 + 18 = 118<br>Mean mark out of 20 = 118 \\(\\div\\) 8 = 14.75<br> Mean mark as a percentage = 14.75 \\(\\div\\) 20 \\(\\times\\) 100 = <b>73.75</b>";

$Q[10] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest9b_3.jpg'><br><br>What was the median number of references used?";
$QType[10] = 1;
$QAnswers[10] = "5.5";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "There are 8 data points, so the median occurs halfway between the 4th and 5th points.<br>Data point 4 = 5<br>Data point 5 = 6<br>Median number of references = <b>5.5</b>";

$Q[11] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest9b_3.jpg'><br><br>What was the modal final mark?";
$QType[11] = 1;
$QAnswers[11] = "16";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "From the graph the modal (most frequent) mark was <b>16</b>.";

$Q[12] = "An analog clock reads 2:20 pm. What will be the small angle between the hands in 100 minutes time?";
$QType[12] = 1;
$QAnswers[12] = "120";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "°";
$Soln[12] = "100 minutes = 1 hour and 40 minutes<br>In 100 minutes time the clock will read 2:20 pm + 1 hour + 40 minutes = 4:00 pm<br>Angle for 1 full revolution of the clock = 360°<br>At 4 pm, the angle between the hands is \\(\\frac{4}{12} \\times\\) 360° = <b>120</b>°";

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