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

$Q[0] = "In the morning session, a teacher takes the roll for 10 minutes, teaches English grammar for 45 minutes, conducts a spelling test for 10 minutes, and has the students practice their handwriting for 15 minutes. The session finished at 10:40 am. At what time did it begin?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "a";
$QOptions[0] = array("9:20 am","9:30 am","9:40 am","9:50 am");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Length of session = 10 + 45 + 10 + 15 minutes = 80 minutes = 1 hour and 20 minutes.<br>
Session start time = 10:40 - 1 hour 20 min = 9:20 am, option <b>(a)</b>.";

$Q[1] = "A particular drug has the following instructions for medicating a child:<br><br> 
<div style='text-align: center'>Child’s Dose in mL = \\(\\frac{5}{8} \\times 10\\) mL \\(\\times\\) (Child’s weight in kg \\(\\div\\) 50)</div><br><br> Calculate the dose required for a child weighing 27 kg. Give your answer rounded to 1 decimal place.";
$QType[1] = 1;
$QAnswers[1] = "3.4";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " mL";
$Soln[1] = "dose = 5 \\(\\div\\) 8 \\(\\times\\) 10 \\(\\times\\) (27 \\(\\div\\) 50) = 3.375 mL<br> Answer to 1 decimal place = <b>3.4</b> mL";

$Q[2] = "The table shows the percentage of year 7 students who achieved at or above the national minimum standard in the 2018 Naplan Tests.<br><br><img src='images/PracticeTest10c_1.jpg'><br><br>True/False: The percentage of students in NSW achieving at or above the national minimum standard increased from 2008 to 2018 in every domain.";
$QType[2] = 0;
$QAnswers[2] = "b";
$QOptions[2] = array("True","False","N/A","N/A");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "This is false, option <b>(b)</b> In NSW, the percentage has decreased in most domains.";

$Q[3] = "The table shows the percentage of year 7 students who achieved at or above the national minimum standard in the 2018 Naplan Tests.<br><br><img src='images/PracticeTest10c_1.jpg'><br><br>In Western Australia in 2017, the highest percentage of students reaching the minimum standard was achieved in:";
$QType[3] = 0;
$QAnswers[3] = "d"; 
$QOptions[3] = array("writing","spelling","grammar and punctuation","numeracy");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "From the table, the highest percentage was achieved in numeracy, option <b>(d)</b>";

$Q[4] = "The table shows the percentage of year 7 students who achieved at or above the national minimum standard in the 2018 Naplan Tests.<br><br><img src='images/PracticeTest10c_1.jpg'><br><br>The state with the lowest percentage of students attaining the minimum standard in writing in 2018 was:";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("Victoria","Queensland","Tasmania","Northen Territory");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "From the table, the correct answer is Northern Territory, option <b>(d)</b>";

$Q[5] = "<br><br><img src='images/PracticeTest10c_2.jpg'><br><br>What is the length of this sheet of paper in centimetres? Give your answer to the nearest centimetre.";
$QType[5] = 1;
$QAnswers[5] = "20";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " cm";
$Soln[5] = "start: 4 cm. End: 24 cm. Length = 24 - 4 = <b>20</b> cm";

$Q[6] = "In an election for school captain, Isaac received \\(\\frac{1}{3}\\) of the votes and Brodie received \\(\\frac{1}{4}\\) of the votes. The remaining 105 votes were received by Lawrence. What fraction of the votes did Lawrence receive?";
$QType[6] = 0;
$QAnswers[6] = "c";
$QOptions[6] = array("\\(\\frac{2}{7}\\)","\\(\\frac{5}{7}\\)","\\(\\frac{5}{12}\\)","\\(\\frac{11}{12}\\)");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Fraction of votes received by Isaac and Brodie = \\(\\frac{1}{3}\\) + \\(\\frac{1}{4}\\) = \\(\\frac{4}{12} + \\frac{3}{12} = \\frac{7}{12}\\)<br>Fraction of votes received by Lawrence = \\(\\frac{12}{12} - \\frac{7}{12} = \\frac{5}{12}\\), option <b>(c)</b>";

$Q[7] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of people participating in formal or non-formal learning by age-groups in 2005, 2013 and 2016-17.<br><br><img src='images/PracticeTest10c_3.jpg'><br><br>True/False: In people aged 20-54, there was a higher percentage of people studying in 2005 than in 2016-17.";
$QType[7] = 0;
$QAnswers[7] = "a";
$QOptions[7] = array("True","False","N/A","N/A");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "From the graph, this is True (option <b>a</b>)";

$Q[8] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of people participating in formal or non-formal learning by age-groups in 2005, 2013 and 2016-17.<br><br><img src='images/PracticeTest10c_3.jpg'><br><br>True/False: The proportion of 25-34 year olds who studied in 2005 was double the proportion of 55-64 year olds who studied in 2005.";
$QType[8] = 0;
$QAnswers[8] = "b"; 
$QOptions[8] = array("True","False","N/A","N/A");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "This is false (option <b>b</b>)";

$Q[9] = "The graphs show length and weight by age percentiles for Australian girls. <br><br><img src='images/PracticeTest10c_4.jpg'><br><br>What percentage of 17 month-old-girls are heavier than a girl weighing 11 kg?";
$QType[9] = 1;
$QAnswers[9] = "25";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "%";
$Soln[9] = "For a 17-month-old girl, 11 kg is on the 75th percentile, so <b>25</b>% of 17-month-old girls are heavier.";

$Q[10] = "The graphs show length and weight by age percentiles for Australian girls. <br><br><img src='images/PracticeTest10c_4.jpg'><br><br>If a girl is exactly average in height and weight, what is her height if she weighs 9 kg?";
$QType[10] = 1;
$QAnswers[10] = "74";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " cm";
$Soln[10]= "From the weight graph, the girl must be 12 months old. The 50th percentile height for a 12 month old girl is <b>74</b> cm.";

$Q[11] = "The graphs show length and weight by age percentiles for Australian girls. <br><br><img src='images/PracticeTest10c_4.jpg'><br><br>At what age would a 70 cm long girl be shorter than 75% of girls her age?";
$QType[11] = 1;
$QAnswers[11] = "10";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " months";
$Soln[11] = "If the girl is shorter than 75% of girls then she is on the 25th percentile.<br> On the graph, we need to find where the 70 cm line intersects the 25th percentile line. <br>This occurs at age <b>10</b> months.";

$Q[12] = "A choral festival to be held in Switzerland costs 180 euros per participant. If the exchange rate is $1 Australian = 0.64 Euros, how much will it cost in Australian dollars for the 24 members of a South Australian school choir to participate in the festival?";
$QType[12] = 1;
$QAnswers[12] = "6750";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "Cost per person in AU$ = 180 \\(\\div\\) 0.64 = $281.25<br>Cost for 24 participants = $281.25 \\(\\times\\) 24 = $<b>6750</b>";

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