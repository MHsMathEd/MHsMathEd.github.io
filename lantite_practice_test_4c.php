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

$Q[0] = "A class of 30 students each brought in $5 for a class end-of-year party. If the teacher spent $87 on pizzas and $44 on fruit, how much money is left to spend on beverages?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "19";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Total spending money = 30 \\(\\times\\) 5 = $150<br> Leftover money = 150 - (87 + 44) = $<b>19</b>";

$Q[1] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Student's Mark</th></tr>
<tr><th>Task 1</th><td>20</td><td>40%</td></tr>
<tr><th>Task 2</th><td>40</td><td>60%</td></tr>
<tr><th>Task 3</th><td>40</td><td>80%</td></tr>
</table><br>What was the student's overall mark for the course?";
$QType[1] = 1;
$QAnswers[1] = "64";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Overall mark = 20 \\(\\times\\) 40 \\(\\div\\) 100 + 40 \\(\\times\\) 60 \\(\\div\\) 100 + 40 \\(\\times\\) 80 \\(\\div\\) 100 = <b>64</b>";

$Q[2] = "A team of students decide to walk 100 km to raise fund for a charity. If they walk 6 km each day, how many days will it take them to complete the 100 km? Give your answer to a whole number of days.";
$QType[2] = 1;
$QAnswers[2] = "17";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Number of days = 100 \\(\\div\\) 6 = 16.67, which needs to be rounded up to <b>17</b> days";

$Q[3] = "A school group travelled to the Philippines. Before they left Australia they each bought US$200 to take with them because they understood that it was easier to change US dollars than Australian dollars in the Philippines. When they arrived in Manila, they found an exchange offering 51.68 Philippine Peso for 1 US Dollar.  Their teacher recommended that they each buy 5 000 pesos. How much, in US dollars, would this cost? Give your answer to the nearest dollar.";
$QType[3] = 1;
$QAnswers[3] = "97"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "51.68 peso = US$1<br> 1 peso = US$ 1 \\(\\div\\) 51.68<br>5000 peso = US$ 1 \\(\\div\\) 51.68 \\(\\times\\) 5000 = US$<b>97</b>";

$Q[4] = "The graph (source: Australian Bureau of Statistics) shows total Australian household water consumption broken down by state from 2011 to 2017<br><br><img src='images/PracticeTest4c_1.jpg'><br><br>True/False: SA was the only state to use less household water in 2016-2017 than in 2011-2012.";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "False (option <b>(b)</b>). Tasmania also used less water in 2016-2017 than in 2011-2012.";

$Q[5] = "The graph (source: Australian Bureau of Statistics) shows total Australian household water consumption broken down by state from 2011 to 2017<br><br><img src='images/PracticeTest4c_1.jpg'><br><br>Approximately what fraction of the water used by Queensland households was used by South Australian households in 2013-14? ";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("\\(1 \\over 100 \\)","\\(1 \\over 3 \\)","\\(1 \\over 2 \\)","\\(3 \\over 4 \\)");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Queensland households used around 375 GL in 2013-2014. South Australian households used around 125 GL over the same period. 125 \\(\\div\\) 375 = \\(1 \\over 3 \\), which is option <b>(b)</b>.";

$Q[6] = "The graph (source: Australian Bureau of Statistics) shows total Australian household water consumption broken down by state from 2011 to 2017<br><br><img src='images/PracticeTest4c_1.jpg'><br><br>Approximately how many gigalitres of water were used by Australian households in 2015-16?";
$QType[6] = 0;
$QAnswers[6] = "c";
$QOptions[6] = array("800","1200","1700","3000");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "NSW + Vic used more than 800 L, so option a (800) is incorrect. NSw + Vic + Qld used around 1200 L so option b (1200) is incorrect. The remaining states used around 500 L between them, so option d (3000) must also be incorrect, leaving option <b>c</b> (1700).";

$Q[7] = "What is 10% of three and a half hours? Express your answer in minutes.";
$QType[7] = 1;
$QAnswers[7] = "21";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "3.5 hours = 3.5 \\(\\times\\) 60 = 210 minutes<br>10% \\(\\times\\) 210 minutes = <b>21</b> minutes.";

$Q[8] = "The graph shows the percentage of Australia’s population living in each of the states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><br><img src='images/PracticeTest4c_2.jpg'><br><br>What percentage of the population was living in Western Australia?";
$QType[8] = 1;
$QAnswers[8] = "10.4"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "%";
$Soln[8] = "Read directly from the graph, <b>10.4</b>% of the population was living in Western Australia.";

$Q[9] = "In an election for school captain, Isaac received \\(1\\over 3\\) of the votes and Brodie received \\(1\\over 4\\) of the votes. The remaining 105 votes were received by Lawrence. How many students voted?";
$QType[9] = 1;
$QAnswers[9] = "252";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Proportion of votes received by Lawrence = 1 - \\(1\\over 3\\) - \\(1\\over 4\\) = 1 \\(\\times\\) \\(12\\over 12\\) - \\(1\\over 3\\) \\(\\times\\) \\(4\\over 4\\) - \\(1\\over 4\\) \\(\\times\\) \\(3\\over 3\\) = \\(12\\over 12\\) - \\(4\\over 12\\) - \\(3\\over 12\\) = \\(5\\over 12\\)<br>So \\(5\\over 12\\) = 105 votes<br>All the votes = \\(12\\over 12\\) = 105 \\(\\div\\) 5 \\(\\times\\) 12 = 252 votes.<br><b>252</b> students voted.";

$Q[10] = "A book seller had a sale in which all books were 20% off. A teacher bought a class set of thirty books that was priced at $12 per book before discount. How much money did the teacher save by buying the set during the sale?";
$QType[10] = 1;
$QAnswers[10] = "72";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "Total cost before discount = 30 \\(\\times\\) $12 = $360<br>Percentage saving after discount = 20%<br>Saving after discount = 20% \\(\\times\\) $360 = 20 \\(\\div\\) 100 \\(\\times\\) $360 = $<b>72</b>";

$Q[11] = "A school has three year 5 classes, each with 30 students. In a test the mean average mark for class 1 was 78 %, the mean average mark in class 2 was 75 % and the mean average mark in class 3 was 72 %. What was the mean average mark for the test across the whole of year 5?";
$QType[11] = 1;
$QAnswers[11] = "75";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "%";
$Soln[11] = "Average = (78 + 75 + 72) \\(\\div\\) 3 = <b>75</b>%";

$Q[12] = "A school year has 4 terms. Assume all terms are exactly 10 weeks long. A teacher works one day a week for term 1. She then works two days a week in terms 2 and 3. She then works five days a week in term 4. Over the school year, what was the average number of days per week that she worked?";
$QType[12] = 1;
$QAnswers[12] = "2.5";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " days per week";
$Soln[12] = "Average = (1 + 2 + 2 + 5) \\(\\div\\) 4 = <b>2.5</b> days per week.";

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