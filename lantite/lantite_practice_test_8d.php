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

$Q[0] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>True/False: Approximately the same proportions of men and women were employed in Sport and Recreation.";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "b";
$QOptions[0] = array("True","False","N/A","N/A");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "From the graph, proportion of men employed = 50%<br>From the graph, proportion of men employed = 40%<br>These are different so the statement is <b>false (b)</b>";

$Q[1] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>True/False: Of those students who studied Food and hospitality a higher proportion of men were in full-time employment than women.";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("True","False","N/A","N/A");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "From the graph this is true <b>(a)</b>: men: about 55%, women: about 45%";

$Q[2] = "A teacher is taking a group of students to Fiji for a football tournament. The trip is to be for 8 days and 8 nights. He budgets the following per person amounts for the trip:<table>
<tr><th>Expense</th><th>Cost in Fijian Dollars</th></tr>
<tr><td>Food</td><td>25 per day</td></tr>
<tr><td>Accommodation</td><td>53 per night</td></tr>
<tr><td>Sightseeing</td><td>100 in total</td></tr>
</table><br><br>If the exchange rate is 1 Australian dollar = 1.53 Fijian dollars, what is the total trip budget, per person, in Australian dollars? Round your answer to the nearest hundred dollars.";
$QType[2] = 1;
$QAnswers[2] = "500";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Total cost in Fijian dollars = $25 \\(\\times 8 + 53 \\times 8 + 100\\) = $724<br>Cost in Australian dollars = $724 \\(\\div\\) 1.53 = 473.2<br>Rounded to the nearest hundred dollars, cost = $<b>500</b>";

$Q[3] = "A school class travelling by bus to Moree has gone one fifth of the way when they notice a sign indicating that Moree is 200 km away. How far is the entire trip? ";
$QType[3] = 1;
$QAnswers[3] = "250"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " km";
$Soln[3] = "Proportion of trip remaining = \\(\\frac{5}{5} - \\frac{1}{5} = \\frac{4}{5}\\)<br>200 km = \\(\\frac{4}{5}\\) of the distance. <br>Total distance = 200 km \\(\\div 4 \\times 5\\) = <b>250</b> km ";

$Q[4] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part cordial to 4 parts water. If the teacher wants to make up 10 litres of drink, how much concentrate needs to be used? ";
$QType[4] = 1;
$QAnswers[4] = "2";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " L";
$Soln[4] = "Ratio concentrate: water = 1:4, so the total mix is made up of 1 + 4 = 5 parts<br>Volume of each part = 10 L \\(\\div\\) 5 = 2 L<br>Concentrate makes up 1 of the 5 parts in the drink, so concentrate required = <b>2</b> L.";

$Q[5] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(\\frac{3}{5}\\). The probability that it is white is equal to the probability that it is green. What is the probability of randomly drawing a white marble? Give your answer as a decimal.";
$QType[5] = 1;
$QAnswers[5] = "0.2";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Probability of white or green = 1 - \\(\\frac{3}{5}\\) = \\(\\frac{2}{5}\\). Probability of white = \\(\\frac{1}{2} \\times \\frac{2}{5} = \\frac{1}{5}\\)<br>Probabilty as a decimal = 1 \\(\\div\\) 5 = <b>0.2</b>";

$Q[6] = "There are 150 students in year 12. You are required to produce a 10-page book for each student in year 12. Each book will contain 10 printed pages, which will be placed in a folder. The costs are shown below.<br<br>
<table>
<tr><td>500 sheets of paper</td><td>$8.00</td></tr>
<tr><td>In-house printing</td><td>5c per page</td></tr>
<tr><td>Folder</td><td>$1 each</td></tr>
</table><br><br>How much will it cost to produce the books? Give your answer to the nearest dollar.";
$QType[6] = 1;
$QAnswers[6] = "249";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "Number of pages needed = 150 \\(\\times\\) 10 = 1500<br>Number of reams of paper = 1500 \\(\\div\\) 500 = 3<br>Paper cost = 3 \\(\\times\\) $8.00 = $24.00<br>Per page printing cost = 5 c = $0.05<br>  Printing cost = $0.05 \\(\\times\\) 1500 = $75<br>Folder costs = $1 \\(\\times\\) 150 = $150<br>Total cost = $24.00 + $75.00 + $150 = $<b>249.00</b>";

$Q[7] = "There are two finalists in a school’s trivia quiz. Of the 50 questions, 20 were not answered. Student B answered 20 questions. How many questions did student A answer?";
$QType[7] = 1;
$QAnswers[7] = "10";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Number answered by student A = 50 - 20 - 20 = <b>10</b>";

$Q[8] = "A teacher was taking a group of students for a bushwalk during school time. The students told the teacher that they needed to be back at school by 1420 hours for their PDHPE lesson. The teacher checked the current time, which was 1:05 pm. How many minutes did the group have for the bushwalk?";
$QType[8] = 1;
$QAnswers[8] = "75"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " minutes";
$Soln[8] = "Time of return in 12 hour time = 2:@0 pm<br> Time allowed for walk = 2:20 pm - 1:05 pm = 1 hour and 15 minutes = <b>75</b> minutes";

$Q[9] = "The English and mathematics test scores were collected and plotted for 10 students.<br><br><img src='images/PracticeTest8d_1.jpg'><br><br>What percentage of students scored less than 75% in the mathematics test, and more than 75% in the English test?";
$QType[9] = 1;
$QAnswers[9] = "20";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " %";
$Soln[9] = "2 students out of 10 achieved this = <b>20</b>%";

$Q[10] = "A student finds that if he walks home from school he gets home at 4:07 pm. However, if he runs, he gets home at 3:48 pm. How much time does he save by running?";
$QType[10] = 1;
$QAnswers[10] = "19";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " minutes";
$Soln[10]= "Time saved = 4:07 pm - 3:48 pm = <b>19</b> minutes";

$Q[11] = "A teacher wishes to order 30 copies of a new textbook. He has found four suppliers for the book. Which supplier offers the cheapest price?<br><br>
<table>
<tr><th>Supplier</th><th>Cost per book</th><th>Delivery Cost</th></tr>
<tr><td>A</td><td>$72</td><td>$150</td></tr>
<tr><td>B</td><td>$68</td><td>$180</td></tr>
<tr><td>C</td><td>$83</td><td>$30</td></tr>
<tr><td>D</td><td>$65</td><td>$200</td></tr>
</table>";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("A","B","C","D");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "<table>
<tr><th>Supplier</th><th>Cost per book</th><th>Delivery Cost</th><th>Total Cost for 30 Books ($)</th></tr>
<tr><td>A</td><td>$72</td><td>$150</td><td>\\(30 \\times 72 + 150 = 2310\\)</td></tr>
<tr><td>B</td><td>$68</td><td>$180</td><td>\\(30 \\times 68 + 180 = 2220\\)</td></tr>
<tr><td>C</td><td>$83</td><td>$30</td><td>\\(30 \\times 83 + 30 = 2520\\)</td></tr>
<tr><td>D</td><td>$65</td><td>$200</td><td>\\(30 \\times 65 + 200 = 2150\\)</td></tr>
</table><br>
The cheapest option is supplier <b>D</b>";

$Q[12] = "Teachers at a high school want to engage a theatre company to perform to their students. They want to run three separate sessions, one for each Stage. Each session runs for 80 minutes. If the theatre company charge $200 per hour for their time, what will be the total cost for the school to engage the theatre company?";
$QType[12] = 1;
$QAnswers[12] = "800";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "Time for 3 sessions = 3 \\(\\times\\) 80 = 240 minutes<br>
Time for 3 sessions in hours = 240 \\(\\div 60\\) = 4 hours<br>Total cost = 4 \\(\\times\\) $200 = $<b>800</b>";


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