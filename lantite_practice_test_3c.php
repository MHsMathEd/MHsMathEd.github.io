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

$Q[0] = "The map below shows some of the streets in a small town. <br><br><img src='images/PracticeTest3c_1.jpg'><br><br>If the school is 550 m x 550 m, what is the map scale?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "c";
$QOptions[0] = array("1 grid square on the map represents 0.5 m","1 grid square on the map represents 5 m","1 grid square on the map represents 50 m","1 grid square on the map represents 500 m");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "11 grid squares represent 550 m<br>Divide through by 11 to find that <br>1 grid square on the map represents 50 m, which is option <b>(c)</b>";

$Q[1] = "The map below shows some of the streets in a small town. <br><br><img src='images/PracticeTest3c_1.jpg'><br><br>Which of the following set of directions will take you from the hospital at the corner of Pacific Avenue and Caspian Way, to the school at the corner of Southern Avenue and Mediterranean Way?";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("Facing east, walk straight ahead to the fourth intersection. Turn right and walk three blocks.","Facing east, walk straight ahead to the third intersection. Turn right and walk four blocks.","Facing south, walk straight ahead to the fourth intersection. Turn right and walk three blocks.","Facing east, walk straight ahead to the third intersection. Turn left and walk four blocks.");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Facing east, walk straight ahead to the fourth intersection. Turn right and walk three blocks, which is option <b>(a)</b>";

$Q[2] = "The map below shows some of the streets in a small town. <br><br><img src='images/PracticeTest3c_1.jpg'><br><br>If 1 grid square on the map represents 50 m, approximately how far is it to walk from the corner of Atlantic Avenue and Red Way to the school on the corner of Mediterranean Way and Southern Avenue?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("1200 m","2000 m","2800 m","3600 m");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The distance is approximatly 55 squares = 55 \\(\\times\\) 50 m = 2750 m. The closest option is <b>(c)</b>, 2800 m.";

$Q[3] = "A year 9 class is selling pancakes to raise money. They are charging $2 for one pancake, or $3 for two pancakes. Three staff members have $20 between them to spend on pancakes. They all want to eat the same number of pancakes. What is the most pancakes that each of them can have, if they each only eat a whole number of pancakes?";
$QType[3] = 1;
$QAnswers[3] = "4"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Maximum number of pancakes they can buy = 6 lots of 2 pancakes for $18 and one more pancake for $2 = 13 pancakes.<br>13 \\(\\div\\) 3 = 4.333<br>So each of them can have <b>4</b> pancakes.";

$Q[4] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:
<table>
<tr><th>Time of day</th><th>Temperature Change (degrees Celsius)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>
She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 deg C. What was the coldest temperature that her room reached?";
$QType[4] = 1;
$QAnswers[4] = "1.5";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " degrees Celsius";
$Soln[4] = "Coldest temperature = 6.5 + 8 + 3 - 5 - 6.5 - 4.5 = <b>1.5</b> degrees Celsius.";

$Q[5] = "A student completed a 4-part test and scored 18, 16, 12 and 17 in each of the parts. What was the student’s total score?";
$QType[5] = 1;
$QAnswers[5] = "63";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Total score = 18 + 16 + 12 + 17 = <b>63</b>";

$Q[6] = "A teacher is taking a class on a study trip to Indonesia. The exchange rate is one Australian Dollar is equal to 10 077 Rupiah. If students each take $250 spending money, how many  rupiah will they each have? Give your answer to the nearest whole number of rupiah.";
$QType[6] = 1;
$QAnswers[6] = "2519250";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " rupiah";
$Soln[6] = "AU$1 = 10077 rupiah<br> AU$250 = 250 \\(\\times\\) 10077 rupiah = <b>2 519 250</b> rupiah.";

$Q[7] = "A teacher is taking a class on a study trip to Indonesia. The exchange rate is one Australian Dollar is equal to 10 077 Rupiah. The students will be attending a program that costs 800 000 rupiah. What is the cost of the program in Australian dollars? Give your answer in dollars, to the nearest cent.";
$QType[7] = 1;
$QAnswers[7] = "79.39";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "AU$";
$suffix[7] = "";
$Soln[7] = "10077 rupiah = AU$1<br> 800000 rupiah = $AU1 \\(\\div\\) 10077 \\(\\times\\) 800000 = AU$<b>79.39</b> to the nearest cent.";

$Q[8] = "How many minutes is 20% of one hour?";
$QType[8] = 1;
$QAnswers[8] = "12"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " minutes";
$Soln[8] = "1 hour = 60 minutes<br>20% of 60 minutes = 20 \\(\\div\\) 100 \\(\\times\\) 60 = <b>12</b> minutes.";

$Q[9] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>What percentage of 13 year old boys have a BMI greater than 16 kg / m<sup>2</sup>? Give your answer to the nearest ten percent.";
$QType[9] = 1;
$QAnswers[9] = "90";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "%";
$Soln[9] = "From the graph, for 13-year-old boys, 16 kg/m<sup>2</sup> corresponds to the 10th centile. <br>So 100 - 10 = <b>90</b>% of boys have a BMI greater than 16 kg/m<sup>2</sup>.";

$Q[10] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>A boy whose weight is at the 30th centile is classified as";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("Underweight","Healthy Weight","Overweight","Obese");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "A weight at the 30th centile is classified as healthy (option <b>(b)</b>).";

$Q[11] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>What is the average BMI index for a 16-year-old boy? Give your answer to the nearest 0.5 kg/m<sup>2</sup>";
$QType[11] = 1;
$QAnswers[11] = "20.5";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " kg/m<sup>2</sup>";
$Soln[11] = "the average is the 50th centile. For a 16-year-old boy this corresponds to a BMI of <b>20.5</b> kg/m<sup>2</sup>";

$Q[12] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>A 9 year old boy with a BMI of 19 is classified as ";
$QType[12] = 0;
$QAnswers[12] = "c";
$QOptions[12] = array("Underweight","Healthy Weight","Overweight","Obese");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "A 9 year old boy with a BMI of 19 is classified as overweight (option <b>(c)</b>)";

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