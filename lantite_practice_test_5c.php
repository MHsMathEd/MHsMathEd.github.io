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

$Q[0] = "A science class are studying plants. At the start of the study a particular plant is 20 cm tall. It then grows 3 cm in the first 6 weeks of the study. If it continues to grow at a constant rate, how many centimetres tall will it be after the study has been running for 10 weeks?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "25";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "cm";
$Soln[0] = "Growth rate: in 6 weeks it grows 3 cm<br> In 1 week it grows 3 \\(\\div\\) 6 = 0.5 cm. <br> In 10 weeks it grows 10 \\(\\times\\) 0.5 = 5 cm<br>New height = 20 + 5 cm = <b>25</b> cm.";

$Q[1] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of households with Internet access between 2004 and 2017. The data are split into households with, and without, children.<br><img src='images/PracticeTest5c_1.jpg'><br>The smallest change in the proportions of total households with Internet access was between";
$QType[1] = 0;
$QAnswers[1] = "d";
$QOptions[1] = array("2004-05 to 2005-06 ","2007-08 to 2008-09","2011-12 to 2012-13","2014-15 to 2015-16");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "2014-15 to 2015-16, option <b>(d)</b>, because this is where the slope of the total household graph is the least steep.";

$Q[2] = "The one hundred and five students in stage two from a particular school and their four teachers are going on an excursion to the zoo. They require one or two parent helpers for every seven or eight students. The students will travel by bus. Each bus will take up to forty two people. What is the maximum number of buses that could be required?";
$QType[2] = 1;
$QAnswers[2] = "4";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Maximum number of parents = 2 parents for every 7 students<br> Sets of 7 students = 105 \\(\\div\\) 7 = 15<br>Maximum number of parents = 2 \\(\\times\\) 15 = 30<br>Total travellers = 105 + 4 + 30 = 139<br>Number of buses = 139 \\(\\div\\) 42 = 3.3 buses.<br>We must round up to ensure that everyone gets to travel on a bus, so the maximum number of buses = <b>4</b> buses.";

$Q[3] = "The one hundred and five students in stage two from a particular school and their four teachers are going on an excursion to the zoo. They require at least one parent for every eight students, and not more than two parents for every seven students. The students will travel by bus. Each bus will take up to forty two people. What is the minimum number of buses that could be required?";
$QType[3] = 1;
$QAnswers[3] = "3"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Minimum number of parents = 1 parent for every 8 students.<br>Number of groups of 8 students = 105 \\(\\div\\) 8 = 13.125<br>So 14 parents are required.<br>Number of people travelling = 105 + 4 + 14 = 123<br>Number of buses required = 123 \\(\\div\\) 42 = 2.9, which rounds up to <b>3</b> buses.";

$Q[4] = "The black dial of the weighing scale in the image is in pounds and stones. There are 14 pounds in 1 stone. What is the reading, in pounds and stones, of the weighing scale?<br><img src='images/PracticeTest5c_2.jpg'><br>";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("2 stones 11 pounds","11 pounds 2 stones","20 stones 11 pounds","21 stones 11 pounds");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "The reading is 20 stones, 11 pounds, which is option <b>c</b>";

$Q[5] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>What is at grid reference C4?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("residential","tourist information","shops","police station");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "The Tourist information (option <b>(b)</b> is at grid reference C4.";

$Q[6] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>What is the length of the perimeter of the primary school?";
$QType[6] = 1;
$QAnswers[6] = "1360";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " m";
$Soln[6] = "scale: 5 squares = 100 m, so 1 square = 20 m<br>Primary school dimensions = 24 squares by 10 squares, where 1 square = 20 m<br> Primary school dimensions = 24 \\(\\times\\) 20 by 10 \\(\\times\\) 20 = 480 m by 200 m<br>Perimeter = 480 + 200 + 480 + 200 m = 1360 m";

$Q[7] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>What is the scale of this map?";
$QType[7] = 0;
$QAnswers[7] = "d";
$QOptions[7] = array("1 grid square represents 200 cm","1 grid square represents 100 m","1 grid square represents 200 m","1 grid square represents 20 m");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "5 grid squares represent 100 m, so 1 grid square represents 20 m, option <b>(d)</b>";

$Q[8] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>Which set of directions will take you from the south side of the church to the bank?";
$QType[8] = 0;
$QAnswers[8] = "a"; 
$QOptions[8] = array("Walk east to the corner. Turn left and walk to the first intersection. Turn left and walk to the fourth intersection. Turn right and walk past the second intersection. The bank will be on your right.","Walk east to the corner. Turn right and walk to the first intersection. Turn right and walk to the fourth intersection Turn left and walk past the second intersection. The bank will be on your right.","Walk west to the corner. Turn left and walk to the fourth intersection. Turn right and walk past the second intersection. The bank will be on your right.","Walk west to the corner. Turn left and walk to the corner. Turn right and walk to the second intersection. Turn right and the bank will be on your left.");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Option<b>(a)</b> has the correct instructions: Walk east to the corner. Turn left and walk to the first intersection. Turn left and walk to the fourth intersection. Turn right and walk past the second intersection. The bank will be on your right.";

$Q[9] = "An analog clock reads 8 o’clock. What is the small angle between the hands?";
$QType[9] = 1;
$QAnswers[9] = "120";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " degrees";
$Soln[9] = "1 full revolution = 360 degrees. <br> There are 12 equally spaced numbers in 1 full revolution around a clock face. <br> The angle is smaller if it is measured anticlockwise from 12 to 8. This encompasses (12 - 8) = 4 numbers. As a fraction of the full revolution, this is \\(4\\over 12 \\) = \\(1\\over 3\\)<br>Distance in degrees = \\(1\\over 3\\) \\(\\times\\) 360 degrees = <b>120</b> degrees.";

$Q[10] = "The school assembly began at 11:23 am and concluded at 1:08 pm. How many hours long was the assembly?";
$QType[10] = 1;
$QAnswers[10] = "1.75";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " hours";
$Soln[10]= "Time from 11:23 am to 1:08 pm = 7 minutes + 30 minutes + 60 minutes + 8 minutes = 105 minutes<br>In hours, 105 \\(\\div\\) 60 = <b>1.75</b> hours";

$Q[11] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part cordial to 4 parts water. How much drink can be made up if the whole cordial concentrate bottle is used?";
$QType[11] = 1;
$QAnswers[11] = "10";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " L";
$Soln[11] = "For every 1 part of concentrate, 4 parts water are required. <br> For 1 L of concentrate, 4 L of water are used.<br>For 2 L of concentrate, 8 L of water are used.<br> Total volume = 2 L + 8 L = <b>10</b> L of drink.";

$Q[12] = "A Japanese class were researching how much they could buy in Tokyo for AU$50. They found that the exchange rate was 80.10 Japanese Yen was worth 1 Australian dollar. The price of a burger meal was 700 yen. How much change would they have – in Japanese yen - from their $50 after buying a burger meal in Tokyo?";
$QType[12] = 1;
$QAnswers[12] = "3305";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " yen";
$Soln[12] = "50 Australian dollars = 80.10 \\(\\times\\) 50 yen = 4005 yen<br>Change = 4005 - 700 = <b>3305</b> yen.";


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