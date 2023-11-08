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

$Q[0] = "A box of identical exam papers weighs 8 kg. The papers are to be distributed to 5 classes. Each class will receive exactly the same number of papers. After the papers are delivered to the first class, the box weighs 6.5 kg. What will the box weigh after papers have been delivered to four of the classes?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "2";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " kg";
$Soln[0] = "Weight of papers for 1 class = 8 - 6.5 kg = 1.5 kg<br>Weight of papers for 4 classes = 1.5 \\(\\times\\) 4 = 6 kg<br>Weight of box = total weight - weight of papers = 8 - 6 kg = <b>2</b> kg";

$Q[1] = "A teacher has a box of ice blocks for her class. The box contains four flavours: strawberry, orange, cola and lemonade, in equal amounts. If the teacher randomly distributes the ice blocks to each of her 28 students, how many students are expected to receive cola flavoured ice blocks?";
$QType[1] = 1;
$QAnswers[1] = "7";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "\\(\\frac{1}{4}\\) of the ice blocks are cola flavoured, so \\(\\frac{1}{4}\\) of the students should get cola ice blocks.<br>Number of students expected to get cola ice blocks = \\(\\frac{1}{4}\\times\\) 28 = <b>7</b>";

$Q[2] = "A teacher who is taking some students to the U.S. is planning an itinerary for the trip. He does not want to travel further than 200 km on any one day. However, distance measurements in the U.S. are given in miles, not kilometres. The teacher knows that 1 mile is approximately equal to 1.6 km. Using this approximation, what is the maximum distance in miles that the teacher is willing to travel in one day?";
$QType[2] = 1;
$QAnswers[2] = "125";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " miles";
$Soln[2] = "1.6 km = 1 mile<br>1 km = 1 \\(\\div\\) 1.6 miles<br>200 km = 200 \\(\\times\\) 1 \\(\\div\\) 1.6 miles = 200 \\(\\div\\) 1.6 miles = <b>125</b> miles";

$Q[3] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600. <br><br><img src='images/PracticeTest8c_1.jpg'><br><br>What percentage of the population was living in Queensland? Give your answer to the nearest whole percentage.";
$QType[3] = 1;
$QAnswers[3] = "20"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " %";
$Soln[3] = "Percentage of population in Queensland = 4599400 \\(\\div\\) 22693600 \\(\\times\\) 100% = <b>20</b>%";

$Q[4] = "In an election for school captain, Isaac received \\(\\frac{1}{3}\\) of the votes and Brodie received \\(\\frac{1}{4}\\) of the votes. The remaining 105 votes were received by Lawrence. Who became captain?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("Brodie","Isaac","Lawrence","it is not possible to tell from this information");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Fraction of votes obtained by Isaac and Brodie = \\(\\frac{1}{3} + \\frac{1}{4} = \\frac{4}{12} + \\frac{3}{12} = \\frac{7}{12}\\)<br>Fraction of votes obtained by Lawrence = \\(\\frac{12}{12} - \\frac{7}{12} = \\frac{5}{12}\\)<br> Isaac got \\(\\frac{4}{12}\\), Brodie got \\(\\frac{3}{12}\\), Lawrence got \\(\\frac{5}{12}\\) so Lawrence became school captain (option <b>(c)</b>).";

$Q[5] = "Coffee comes in the following size tins for the following prices.<br><br>
<table>
<tr><th>Tin Size</th><th>Price</th></tr>
<tr><td>300 g</td><td>$13.00</td></tr>
<tr><td>700 g</td><td>$18.79</td></tr>
<tr><td>0.5 kg</td><td>$20.00</td></tr>
<tr><td>1 kg</td><td>$54.95</td></tr>
</table><br><br>Which size tin represents the best value for money?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("300 g tin","700 g tin","0.5 kg tin","1 kg tin");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "<table>
<tr><th>Tin Size</th><th>Price</th><th>Price per 100 g</th></tr>
<tr><td>300 g</td><td>$13.00</td><td>$13.00 \\(\\div\\) 3 = $4.33</td></tr>
<tr><td>700 g</td><td>$18.79</td><td>$18.79 \\(\\div\\) 7 = $2.68</td></tr>
<tr><td>0.5 kg = 500 g</td><td>$20.00</td><td>$20.00 \\(\\div\\) 5 = $4.00</td></tr>
<tr><td>1 kg = 1000 g</td><td>$54.95</td><td>$54.95 \\(\\div\\) 10 = $5.50</td></tr>
</table><br><br>The 700 g tin represents the best value for money, option <b>(b)</b>";

$Q[6] = "Students in class 4G earned 78 merit awards in one year. This is 30% of the merit awards earned by year 4 students. How many merit awards were given out to year 4 students that year?";
$QType[6] = 1;
$QAnswers[6] = "260";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "30% = 78 awards<br>10% = 78 \\(\\div\\) 3 = 26 awards<br>Total number of awards = 100% = 26 \\(\\times\\) 10 = <b>260</b> awards";

$Q[7] = "A teacher needs a piece of cardboard with area 0.585 m<sup>2</sup>. It needs to have a length of 90 cm long. How wide does it need to be?";
$QType[7] = 1;
$QAnswers[7] = "65";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " cm";
$Soln[7] = "Length in metres = 0.9 m.<br>Width in metres = Area \\(\\div\\) length = 0.585 \\(\\div\\) 0.9 = 0.65 m<br>Area in cm = 0.65 \\(\\times\\) 100 = <b>65</b> cm";

$Q[8] = "A bus taking students on an excursion to a theatre travelled 48 km at an average speed of 64 km/h. If the bus arrived at the theatre at 12:18 pm, at what time did it leave the school?";
$QType[8] = 0;
$QAnswers[8] = "a"; 
$QOptions[8] = array("11:33 am","11:48 am","12:03 pm","11:48 pm");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Trip time in hours = 48 km \\(\\div\\) 64 km/h<br>Trip time in minutes = 48 km \\(\\div\\) 64 km/h \\(\\times\\) 60 = 45 minutes<br> Start time = 12:18 pm - 45 minutes = 11:33 am, option <b>(a)</b>";

$Q[9] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br><br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Marked out of</th><th>Student's Mark</th></tr>
<tr><td>Task 1</td><td>20</td><td>20</td><td>16</td></tr>
<tr><td>Task 2</td><td>20</td><td>30</td><td>23</td></tr>
<tr><td>Task 3</td><td>60</td><td>20</td><td>14</td></tr>
</table><br><br>What was the student’s final mark as a percentage? Give your answer to the nearest whole percentage.";
$QType[9] = 1;
$QAnswers[9] = "73";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " %";
$Soln[9] = "Final mark = 16 \\(\\div\\) 20 \\(\\times\\) 20 + 23 \\(\\div\\) 30 \\(\\times\\) 20 + 14 \\(\\div\\) 20 \\(\\times\\) 60 = <b>73</b>%";

$Q[10] = "A teacher brings 7 L of milk for a lesson. She divides her 30 students into groups of three. Each group is given a 1 litre measuring jug. The milk is divided evenly amongst the groups. What proportion of each jug is filled? Give your answer as a percentage.";
$QType[10] = 1;
$QAnswers[10] = "70";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " %";
$Soln[10]= "Number of groups = 30 \\(\\div\\) 3 = 10<br>Amount of milk per group = 7 L \\(\\div\\) 10 = 0.7 L<br>Proportion of 1 L jug filled = \\(\\frac{0.7}{1}\\)<br>Percentage of 1L jug that is filled = 0.7 \\(\\div 1 \\times 100\\) % = <b>70</b>%";

$Q[11] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>True/False: A lower proportion of women were in full-time employment than men in every discipline.";
$QType[11] = 0;
$QAnswers[11] = "a";
$QOptions[11] = array("True","False","N/A","N/A");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "From the graph, this is <b>true (a)</b>";

$Q[12] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>The range of the proportions of men in full time employment was approximately";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("30","40","60","70");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Max proportion = 70 (building)<br>Min proportion = 40 (computer science)<br>range = max - min = 70 - 40 = 30, which is option <b>(a)</b>";


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