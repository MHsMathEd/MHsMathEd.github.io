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

$Q[0] = "What is the pressure reading on this blood pressure meter?<br><img src='images/PracticeTest3b_2.jpg'><br>";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "a";
$QOptions[0] = array("141","144","145","150");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "The reading is 141, option <b>(a)</b>";

$Q[1] = "A teacher is planning the route for the school cross country run. He wants the students to run around the perimeter of the school. The school perimeter is rectangular, with width 200 m and length 350 m. If students need to run 2 km, how many laps of the perimeter do they need to run? Give your answer to 1 decimal place.";
$QType[1] = 1;
$QAnswers[1] = "1.8";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Perimeter = 200 + 200 + 350 + 350 = 1100 m<br>Number of laps = 2000 m \\(\\div\\) 1100 m = <b>1.8</b> laps.";

$Q[2] = "A teacher has a roll of stickers. After using 75 of them, ¼ of the stickers from the roll are left unused. How many stickers were originally on the roll?";
$QType[2] = 1;
$QAnswers[2] = "100";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "75 stickers = \\(4\\over 4\\) - \\(1\\over 4\\) = \\(3\\over 4\\)<br> All the stickers = 75 \\(\\div\\) 3 \\(\\times\\) 4 = 100 stickers.<br> There were originally <b>100</b> stickers.";

$Q[3] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph. <br><img src='images/PracticeTest2c_4.jpg'><br>What was the mean number of references used?";
$QType[3] = 1;
$QAnswers[3] = "6"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "mean = (3+4+5+5+6+7+8+10)\\(\\div\\) 8 = <b>6</b>";

$Q[4] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph. <br><img src='images/PracticeTest2c_4.jpg'><br>The graph indicates";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("a positive correlation between number of references and final mark","a negative correlation between number of references and final mark","no correlation betweeen number of references and final mark","it is impossible to tell whether or not there is a correlation from this graph");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "The points on the graph are moving up and to the right. This means that the final mark increases as the number of references used increases. Thus there is a positive correlation between the number of references and the final mark, which is option <b>(a)</b>";

$Q[5] = "The graph (sourced from the Australian Bureau of Statistics) shows the way in which volunteering hours were spent.<br><img src='images/PracticeTest3b_1.jpg'><br>Approximately how many hours were spent in education and training?";
$QType[5] = 0;
$QAnswers[5] = "c";
$QOptions[5] = array("70","70 000","70 000 000","70 000 000 000");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Around 70 million = 70 000 000 hours were spent in education and training, which is option <b>(c)</b>";

$Q[6] = "The graph (sourced from the Australian Bureau of Statistics) shows the way in which volunteering hours were spent.<br><img src='images/PracticeTest3b_1.jpg'><br>True/False: Approximately half as many volunteering hours were spent on education and training as on welfare/community.";
$QType[6] = 0;
$QAnswers[6] = "a";
$QOptions[6] = array("True","False","N/A","N/A");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "True (option <b>(a)</b>). Around 70 million hours were spent on education and training and around 140 million hours were spent on welfare/community.";

$Q[7] = "100 pens cost $48. What is the cost for 30 pens?";
$QType[7] = 1;
$QAnswers[7] = "14.40";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "100 pens cost $48<br>1 pen costs $48 \\(\\div\\)100 = $0.48<br>30 pens cost 30 \\(\\times\\) 0.48 = $<b>14.40</b>";

$Q[8] = "A school library needs to move into a new location. The librarians pack all of the books into nineteen boxes, each weighing 34 kg. What is the total weight of the books to be moved?";
$QType[8] = 1;
$QAnswers[8] = "646"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " kg";
$Soln[8] = "Total weight = 19 \\(\\times\\) 34 kg = <b>646</b> kg";

$Q[9] = "A box contains green balls and white balls. There are twice as many green balls as there are white balls. What is the probability of drawing a white ball? Give your answer as a decimal to 2 decimal places.";
$QType[9] = 1;
$QAnswers[9] = "0.33";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "\\(1\\over 3\\) of the balls are white. The probability of drawing a white ball is \\(1\\over 3\\). As a decimal this is <b>0.33</b>";

$Q[10] = "A high school put on a musical production. The show played for two nights. On the first night, 243 people attended. On the second night, 319 people attended. If tickets cost $30, what were the total takings from the shows?";
$QType[10] = 1;
$QAnswers[10] = "16860";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "Takings = (319 + 243) \\(\\times\\) $30 = $<b>16 860</b>";

$Q[11] = "The formula for the area (A) occupied by a picture frame is given by A = L1 x W1 – L2 x W2, where L1 and W1 are the length and width of the outside of the frame, and L2 and W2 are the length and width of the inside of the frame.<br><img src='images/PracticeTest3b_3.jpg'><br>What is the area (in square centimetres) of a picture frame with outer dimensions 120 cm by 70 cm, and inner dimensions 90 cm by 45 cm?";
$QType[11] = 1;
$QAnswers[11] = "4350";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " cm<sup>2</sup>";
$Soln[11] = "A = 120 \\(\\times\\) 70 - 90 \\(\\times\\) 45 = <b>4350</b> cm<sup>2</sup>";

$Q[12] = "If it takes Karla 3 hours to walk 12 km, how long would it take her to walk 16 km?";
$QType[12] = 1;
$QAnswers[12] = "4";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " hours";
$Soln[12] = "12 km in 3 hours = 12 \\(\\div\\) 3 km in 3 \\(\\div\\) 3 hours = 4 km in 1 hour = 4 \\(\\times\\) 4 km = 1 \\(\\times\\) 4 hours = 16 km in <b>4</b> hours.";

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