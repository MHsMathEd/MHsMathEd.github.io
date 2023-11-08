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

$Q[0] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><br><img src='images/PracticeTest5a_2.jpg'><br><br> How many people were living outside of NSW?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "15376100";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "People outside NSW = 22 693 600 - 7 317 500 = <b>15 376 100</b>";

$Q[1] = "The nutritional label from a food product is shown.<br><br><img src='images/PracticeTest6d_1.jpg'><br><br>How many grams of the product need to be eaten to achieve 100% of the daily Calcium requirements?";
$QType[1] = 1;
$QAnswers[1] = "1140";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " g";
$Soln[1] = "20% calcium in 1 serve. 100% calcium in 5 serves.<br> 1 serve = 228 g. 5 serves = 5 \\(\\times\\) 228 g = <b>1140</b> g";

$Q[2] = "The nutritional label from a food product is shown.<br><br><img src='images/PracticeTest6d_1.jpg'><br><br>In one serve of the product, how many calories are not obtained from fat?";
$QType[2] = 1;
$QAnswers[2] = "140";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " calories";
$Soln[2] = "Calories not from fat = 250 - 110 = <b>140</b>";

$Q[3] = "The nutritional label from a food product is shown.<br><br><img src='images/PracticeTest6d_1.jpg'><br><br>What percentage of the daily recommended value of sodium is present in half a cup of the product?";
$QType[3] = 1;
$QAnswers[3] = "10"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "half a cup = one half a serve<br>% sodium in half a serve = \\(1\\over 2\\) \\(\\times\\) 20% = <b>10%</b>";

$Q[4] = "A map of a school is shown.<br><img src='images/PracticeTest6d_2.jpg'><br>Which of the following is located to the south of the library (shown in red)?";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("Office","Elouera","Music","SAM");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Elouera is to the south of the library, option <b>(b)</b>";

$Q[5] = "A map of a school is shown.<br><img src='images/PracticeTest6d_2.jpg'><br>To walk directly from the canteen (shown in yellow at the centre of the map) to Block O (on the right), you need to pass by which of these blocks?";
$QType[5] = 0;
$QAnswers[5] = "d";
$QOptions[5] = array("Block C","Block G","Block H","Block N");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "You need to pass Block N, option <b>(d)</b>";

$Q[6] = "Students are required to study at least 80 hours per year of PDHPE in primary school. A school that has 4 ten-week terms a year spends 2 hours per week on PDHPE in term 1, then 1 hour per week in term 2, then 1.5 hours per week in term 3. How many hours per week need to be spent on PDHPE in term 4?";
$QType[6] = 1;
$QAnswers[6] = "3.5";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " hours per week";
$Soln[6] = "Hours spent in terms 1-3 = 2 \\(\\times\\) 10 + 1 \\(\\times\\) 10 + 1.5 \\(\\times\\) 10 = 45 hours<br>Hours remaining = 80 - 45 = 35<br>Hours per week = 35 \\(\\div\\) 10 = <b>3.5</b> hours per week.";

$Q[7] = "Students in year 5 are required to study 160 hours of mathematics each year. A particular school has 4 ten-week terms, and each week consists of 5 school days. Each school day begins at 9:15 am and ends at 3:15 pm. On average, what percentage of the school day is spent doing mathematics? Give your answer to the nearest percent.";
$QType[7] = 1;
$QAnswers[7] = "13";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "%";
$Soln[7] = "160 hours of maths in 40 weeks = 4 hours per week<br>4 hours = 4 hours per week = 4 \\(\\div\\) 5 hours per day = 0.8 hours per day<br>Length of school day = 3:15 pm - 9:15 am = 6 hours<br>Percentage of day spent doing maths = 0.8 \\(\\div\\) 6 \\(\\times\\) 100% = 13%";

$Q[8] = "On average, students in year 5 at a particular school spend 5% of their time each day studying technology. This school has 4 ten-week terms, and each week consists of 5 school days. Each school day begins at 9:15 am and ends at 3:15 pm. How many hours do the students spend studying technology at school in year 5?";
$QType[8] = 1;
$QAnswers[8] = "60"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " hours";
$Soln[8] = "Length of school day = 6 hours<br>Days in a school week = 5<br>School hours in 1 week = 5 \\(\\times\\) 6 = 30<br>School weeks in a year = 4 \\(\\times\\) 10 = 40<br>School hours in 1 year = 30 \\(\\times\\) 40 = 1200<br>Time spent studying technology = 5% \\(\\times\\) 1200 = <b>60</b> hours";

$Q[9] = "In a school of 600 children, one-third of them play in a school sport team. Of the children who play in school sport teams, one half play cricket, one quarter play T-ball and one quarter play volleyball. How many students play T-ball?";
$QType[9] = 1;
$QAnswers[9] = "50";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Number of children playing on a sport team = 1 \\(\\div\\) 3 \\(\\times\\) 600 = 200<br>Number of chilren playing T-ball = 1 \\(\\div\\) 4 \\(\\times\\) 200 = <b>50</b>";

$Q[10] = "In a school of 600 children, one-third of them play in a school sport team. Of the children who play in school sport teams, one half play cricket, one quarter play T-ball and one quarter play volleyball. How many children do not play on a sports team?";
$QType[10] = 1;
$QAnswers[10] = "400";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Children not on a sport team = 2 \\(\\div\\) 3 \\(\\times\\) 600 = <b>400</b>";

$Q[11] = "A teacher orders a class set of 30 books. Each book weighs 400 g. The teacher also orders two copies of a role playing game set. Each game set weighs 2.1 kg. What is the total weight of the teacher's order?";
$QType[11] = 1;
$QAnswers[11] = "16.2";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " kg";
$Soln[11] = "Book weight in kg = 0.4 kg<br>Order weight = 30 \\(\\times\\) 0.4 + 2 \\(\\times\\) 2.1 = <b>16.2</b> kg";

$Q[12] = "A maths teacher asks her students to measure the length of their classroom using their 30 cm rulers. She wants them to place their rulers end-to-end across the classroom and count how many rulers they used. If the classroom is 8.1 m long, how many rulers will be needed?";
$QType[12] = 1;
$QAnswers[12] = "27";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Ruler length in metres = 0.3 m<br>Number of rulers required = 8.1 \\(\\div\\) 0.3 = <b>27</b>";


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