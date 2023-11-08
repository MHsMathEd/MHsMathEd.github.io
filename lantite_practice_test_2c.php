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

$Q[0] = "The ratio of the length to the width of a rectangular classroom is 4:3. If the room is 10 m long, how wide is the room?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "7.5";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " m";
$Soln[0] = "4 parts = 10 m<br>1 part = 10 m \\(\\div\\) 4 = 2.5 m<br>3 parts = 3 \\(\\times\\) 2.5 = 7.5 m<br>The room is <b>7.5</b> m wide.";

$Q[1] = "A teacher bought four sandwiches and three identical drinks for $35. If each sandwich cost $6.50, what was the cost of each drink?";
$QType[1] = 1;
$QAnswers[1] = "3";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Cost of sandwiches = 4 \\(\\times\\) $6.50 = $26.00<br> Money spent drinks = $35.00 - $26.00 = $9.00<br>Cost of each drink = $9.00 \\(\\div\\) 3 = $<b>3.00</b>";

$Q[2] = "A student is aiming for a mark of at least 70% in a subject. He got \\(30\\over 50\\) on an assessment worth 20% of the total mark and \\(46\\over 60 \\) on an assessment worth 30% of the total mark. The final exam is worth 50% of the marks, and is to be marked out of 80. Students can only receive a whole number of marks in the final exam (no partial marks are given). What is the minimum mark that the student can receive (out of 80) in the final exam to meet his goal?";
$QType[2] = 1;
$QAnswers[2] = "56";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Minimum final mark required out of 100 = 70<br>
Marks contributed by test 1 = \\(30\\over 50 \\times \\) 20 = 12<br>
Marks contributed by test 2 = \\(46\\over 60 \\times \\) 30 = 23 <br>
Marks required from final exam = 70 - (12 + 23) = 35<br>
The minimum mark he can achieve is 35 percentage points out of a possible 50. This corresponds to a mark of 35 \\(\\div\\) 50 \\(\\times\\) 80 = 56<br>The minimum mark that the student can achieve is <b>56</b> out of 80.";

$Q[3] = "Several students from the French language class are going on a six week exchange to France. In researching for the trip they found a useful book in the school library, but the book referred to prices in the old currency of Francs rather than the present day currency of Euros. The book said that 1 Australian dollar was worth 4 French Francs. If the present day exchange rate is that 1 Australian dollar is worth 0.62 Euros, how many Euros is 1 French Franc worth? Give your answer to 2 decimal places.";
$QType[3] = 1;
$QAnswers[3] = "0.16"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " euros";
$Soln[3] = "1 Australian dollar = 4 French Francs = 0.62 Euros<br>1 French Franc = 0.62 \\(\\div\\) 4 = 0.155.<br>Rounded to 2 decimal places this means that 1 French Franc is worth <b>0.16</b> Euros";

$Q[4] = "The following table shows the relationship between degrees Farenheit and temperature in Kelvin for five different temperatures.<br>
<table>
<tr><th>Kelvin (K)</th><th>Farenheit (F)</th></tr>
<tr><td>255</td><td>0</td></tr>
<tr><td>297</td><td>75</td></tr>
<tr><td>338</td><td>150</td></tr>
<tr><td>380</td><td>225</td></tr>
<tr><td>422</td><td>300</td></tr>
</table><br>
which of the following formulae correctly represents the relationship between degrees Farenheit (F) and Kelvin (K)?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("K = F + 255","K = (F - 32) \\(\\times\\) \\(5\\over 9\\)","K = (F - 32) \\(\\times\\) \\(5\\over 9\\) + 273.15","K = F \\(\\times\\) \\(5\\over 9\\) - 273.15");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "The correct formula is Solution is K = (F - 32) \\(\\times\\) \\(5\\over 9\\) + 273.15, which is option <b>(c)</b>";

$Q[5] = "A box of ice creams contains 9 ice creams. The school canteen needs to order 250 ice creams. How many boxes do they need to order?";
$QType[5] = 1;
$QAnswers[5] = "28";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "250 \\(\\div \\) 9 = 27.78 <br> Number of boxes required = <b>28</b> (we need to round up to ensure we have 250 ice creams)";

$Q[6] = "The graph shows the percentage of Australia’s population living in each of the states and territories. The percentage for Victoria is missing from the graph. At the time these data were collected, the population of Australia was 22 693 600. <br><img src='images/PracticeTest2c_1.jpg'><br>How many people live in Victoria?";
$QType[6] = 1;
$QAnswers[6] = "5673400";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Percentage of population in Victoria = 100 - (20 + 11 + 7 + 2 + 2 + 1 + 32) = 25%<br>Number of people in Victoria = 25% \\(\\times\\) 22693600 = <b>5673400</b>";

$Q[7] = "20% of a school’s students are in year 12. If there are 120 students in year 12, how many students are in the school?";
$QType[7] = 1;
$QAnswers[7] = "600";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Number of students = 100%<br> 20% = 120 students, so 20% \\(\\times \\) 5 = 100% = 120 \\(\\times \\) 5 students = <b>600</b> students.";

$Q[8] = "What metric weight is shown on this scale? <br><img src='images/PracticeTest2c_2.jpg'><br>";
$QType[8] = 0;
$QAnswers[8] = "a"; 
$QOptions[8] = array("1.1 kg","1.25 kg","2.1 kg","2.25 kg");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "1.1 kg, which is answer <b>(a)</b>";

$Q[9] = "An analog clock reads 3 o’clock. What is the small angle between the hands?";
$QType[9] = 1;
$QAnswers[9] = "90";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " degrees";
$Soln[9] = "The hands make a right angle, which is <b>90</b> degrees.";

$Q[10] = "The following table shows the achievement of year 3 students in the NAPLAN Numeracy exam for 2017.<br><img src='images/PracticeTest2c_3.jpg'><br>Which state had the lowest participation rate?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("NSW","Qld","SA","NT");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "NT - option <b>(d)</b> - had the lowest participation rate at 86.6%.";

$Q[11] = "The following table shows the achievement of year 3 students in the NAPLAN Numeracy exam for 2017.<br><img src='images/PracticeTest2c_3.jpg'><br>What percentage of Australian students who sat the test were performing above the national minimum standard? Round your answer to the nearest whole percentage.";
$QType[11] = 1;
$QAnswers[11] = "87";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " %";
$Soln[11] = "Students performing above the national minumim standard = students in bands 3-6 = 19.7% + 27.3% + 22.7% + 17.1% = 86.8%, which rounds up to <b>87</b>%.";

$Q[12] = "The following table shows the achievement of year 3 students in the NAPLAN Numeracy exam for 2017.<br><img src='images/PracticeTest2c_3.jpg'><br>True/False: In South Australia there were more students at or below the minimum standard than in band 6 and above.";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("True","False","N/A","N/A");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Percentage of SA students in bands 1 and 2 = 4.3 + 11.9 = 16.2%<br> This figure is even higher if we include the students who were exempt from the test.<br> There are 10.5% of SA students in band 6 and above.<br>So there are fewer SA students in band 6 and above, so the statement is <b>true (a)</b>.";

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