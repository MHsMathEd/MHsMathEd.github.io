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

$Q[0] = "Six groups of students each create posters. Each poster is part of a six-part sequence. The teacher wishes to display the posters side by side. The widths of the posers are given in the following table:
<br><br><table>
<tr><td>63 cm</td></tr><tr><td>58 cm</td></tr><tr><td>57 cm</td></tr><tr><td>62 cm</td></tr><tr><td>50 cm</td></tr><tr><td>60 cm</td></tr>
</table><br><br>
 What is the minimum width of wall space (in metres) that the teacher must allow for the posers?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "3.5";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " metres";
$Soln[0] = "width in cm = 63 + 58 + 57 + 62 + 50 + 60 = 350<br>
Width in metres = 350 \\(\\div\\) 100 = <b>3.5</b> m";

$Q[1] = "A box contains red, orange, yellow, and green cupcakes. If a cupcake is removed at random, the probability that it is green is \\(\\frac{2}{8}\\). The probabilies of drawing a red, orange, or yellow cupcake are all equal. If there are 10 red cupcakes in the box, how many green cupcakes are there?";
$QType[1] = 1;
$QAnswers[1] = "10";
$QOptions[1] = array("","","","");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Probability of drawing red or orange or yellow = \\(\\frac{8}{8} - \\frac{2}{8} = \\frac{6}{8}\\)<br>Probability of drawing red = probability of drawing orange = probability of drawing yellow = \\(\\frac{6}{8} \\div 3 = \\frac{2}{8}\\)<br>Thus there are the same number of red cupcakes as green cupcakes.<br>Number of green cupcakes = <b>10</b>";

$Q[2] = "A school’s fundraiser raised $18,642.45. This was $814 less than had been raised in the previous year. How much was raised in the previous year?";
$QType[2] = 1;
$QAnswers[2] = "19456.45";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Amount raised = $18642.45 + 814 = $<b>19456.45</b>";

$Q[3] = "A rectangle is twice as long as it is wide. The perimeter of the rectangle is 36 cm. What is the width of the rectangle?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("3 cm","6 cm","9 cm","12 cm");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "perimeter = 2 \\(\\times\\) (length + width) = 36 cm<br>
length + width = 36 \\(\\div\\) 2 cm = 18 cm<br>
Ratio of length : width = 2:1, so<br>
width = 18 \\(\\div\\) 3 = 6 cm, option <b>b</b>";

$Q[4] = "A teacher returning from a school trip to the USA still had US$240 in cash upon reaching Australia. If the exchange rate was AU$1 = US$0.75, how much money would the teacher receive in Australian dollars after exchanging the US money?";
$QType[4] = 1;
$QAnswers[4] = "320";
$QOptions[4] = array("","","","");
$prefix[4] = "AU$";
$suffix[4] = "";
$Soln[4] = "Money in Australian dollars = $240 \\(\\div\\) 0.75 = $<b>320</b>";

$Q[5] = "A student started her homework at 7:02 pm and finished at 8:49 pm. For how long did she study? Give your answer in hours, rounded to 2 decimal places.";
$QType[5] = 1;
$QAnswers[5] = "1.78";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " hours";
$Soln[5] = "Time studied = 8:49 - 7:02 = 1 hour and 47 minutes.<br>
47 minutes converted to hours = 47 \\(\\div\\) 60 = 0.783333<br>Total time in hours, rounded to 2 decimal places = <b>1.78</b> hours";

$Q[6] = "A home economics teacher bought 1.25 L of cream in order for her class to decorate eight cakes. If she had 290 mL cream left over, how many millilitres of cream were used on each cake?";
$QType[6] = 1;
$QAnswers[6] = "120";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " mL";
$Soln[6] = "Amount of cream purchased in millilitres = 1.25 \\(\\times\\) 1000 = 1250 mL<br>
Amount of cream used on 8 cakes = 1250 - 290 = 960 mL<br>
Amount of cream used on each cake = 960 \\(\\div\\) 8 = <b>120</b> mL";

$Q[7] = "Chelle is sharing a house with three other people She pays $150 a week in rent. All housemates pay the same amount of rent. If a new housemate joins their house, and the rent is divided evenly amongst the housemates, how much rent does Chelle pay each week now?";
$QType[7] = 1;
$QAnswers[7] = "120";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "Total weekly cost to rent the house = $150 \\(\\times\\) 4 = $600<br>
Cost per person for 5 people = $600 \\(\\div\\) 5 = $<b>120</b>";

$Q[8] = "The graph shows the proportion of student enrolled in government and non-government schools across Australia from 1998 to 2017.<br><br><img src='images/PracticeTest10a_2.jpg'><br><br>What year between 1998 and 2017 had the lowest proportion of students enrolled in Government schools?";
$QType[8] = 0;
$QAnswers[8] = "c"; 
$QOptions[8] = array("1998","2006","2014","2017");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "From the graph, 2014 (option <b>(c)</b>) had the lowest proportion of students enrolled in Government schools.";

$Q[9] = "The following graph shows the scaling between aggregate score and ATAR for the 2018 NSW HSC. The aggregate score is made up of the sum of the student's ten best scores. <br><br><img src='images/PracticeTest10a_1.jpg'><br><br> If a student achieves scores of 20 23 16 23 22 25 20 18 32 19 19 23, what ATAR (rounded to the nearest 10) do they recieve?";
$QType[9] = 1;
$QAnswers[9] = "60";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Top 10 scores are 20 23 23 22 25 20 32 19 19 23. Aggregate = 226. From the graph, this gives an ATAR of <b>60</b>, rounded to the nearest 10.";

$Q[10] = "The following graph shows the scaling between aggregate score and ATAR for the 2018 NSW HSC. The aggregate score is made up of the sum of the student's ten best scores. <br><br><img src='images/PracticeTest10a_1.jpg'><br><br> If a student achieves an ATAR of 70, what is their average score for their ten best subjects?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("70","270","7","27");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10] = "From the graph, their aggregate score is about 270, so their average score is 270 \\(\\div\\) 10 = 27, option <b>d</b>.";

$Q[11] = "At a particular primary school, the middle session begins at 11:40 am. A year 6 class read books for 30 minutes, studied mathematics for 55 minutes, and exercised for 15 minutes. At what time did the session end? Give your answer in 24 hour time as a 4 digit number; for example, 4:20 am is written as 0420.";
$QType[11] = 1;
$QAnswers[11] = "1320";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "11:40 am + 30 min = 12:10 pm<br>12:10 pm + 55 minutes = 1:05 pm<br>1:05 pm + 15 min = 1:20 pm = session end time<br>Session end time in 24-hour time = <b>1320</b>";

$Q[12] = "A teacher is refilling her paint pots for her class’ next art project. Her yellow paint pot is half full and contains 600 mL of paint. How much paint does she need to add to make it \\(\\frac{2}{3}\\) full?";
$QType[12] = 1;
$QAnswers[12] = "200";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " mL";
$Soln[12] = "Half full = 600 mL<br>
Full = 2 \\(\\times\\) 600 mL = 1200 mL<br>
\\(\\frac{2}{3}\\) full = \\(\\frac{2}{3} \\times \\) 1200 mL = 800 mL<br>
Amount of extra paint needed = 800 - 600 mL = <b>200</b> mL";

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