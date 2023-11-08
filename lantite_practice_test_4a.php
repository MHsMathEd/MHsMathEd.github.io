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

$Q[0] = "A composite class of 28 students in years 1 and 2 has 50% of its students in year 1. How many students are in year 2?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "14";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Percentage of students in year 2 = 100%-50% = 50%<br>Number of students in year 2 = 50% \\(\\times\\) 28 = 14";

$Q[1] = "The table (sourced from the Australian Bureau of Statistics) shows the number of school students enrolled in schools.<br>
<table>
<tr><th>State or Territory</th><th>Government</th><th>Non-Government</th></tr>
<tr><td>ACT</td><td>41 886</td><td>27 503</td></tr>
<tr><td>NSW</td><td>791 763</td><td>417 544</td></tr>
<tr><td>NT</td><td>30 515</td><td>11 180</td></tr>
<tr><td>Qld</td><td>547 137</td><td>265 655</td></tr>
<tr><td>SA</td><td>173 506</td><td>93 199</td></tr>
<tr><td>Tas</td><td>56 669</td><td>24 325</td></tr>
<tr><td>Vic</td><td>606 475</td><td>348 160</td></tr>
<tr><td>WA</td><td>276 914</td><td>136 794</td></tr>
</table><br>
How many students were enrolled in government schools?";
$QType[1] = 1;
$QAnswers[1] = "2524865";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "41886 + 791763 + 30515 + 547137 + 173506 + 56669 + 606475 + 276914 = <b>2524865</b> students.";

$Q[2] = "The table (sourced from the Australian Bureau of Statistics) shows the number of school students enrolled in schools.<br>
<table>
<tr><th>State or Territory</th><th>Government</th><th>Non-Government</th></tr>
<tr><td>ACT</td><td>41 886</td><td>27 503</td></tr>
<tr><td>NSW</td><td>791 763</td><td>417 544</td></tr>
<tr><td>NT</td><td>30 515</td><td>11 180</td></tr>
<tr><td>Qld</td><td>547 137</td><td>265 655</td></tr>
<tr><td>SA</td><td>173 506</td><td>93 199</td></tr>
<tr><td>Tas</td><td>56 669</td><td>24 325</td></tr>
<tr><td>Vic</td><td>606 475</td><td>348 160</td></tr>
<tr><td>WA</td><td>276 914</td><td>136 794</td></tr>
</table><br>
Which state or territory has the highest proportion of its students enrolled in non-government schools?";
$QType[2] = 0;
$QAnswers[2] = "a";
$QOptions[2] = array("ACT","NSW","NT","Qld");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Proportions: <br>
<table>
<tr><th>State or Territory</th><th>Proportion</th></tr>
<tr><td>ACT</td><td>\\(27503 \\over (41886 + 27503)\\) = 0.396</td></tr>
<tr><td>NSW</td><td>\\(417544 \\over (791763 + 417544)\\) = 0.345</td></tr>
<tr><td>NT</td><td>\\(11180 \\over (30515 + 11180)\\) = 0.268</td></tr>
<tr><td>Qld</td><td>\\(265655 \\over (547137 + 265655)\\) = 0.327</td></tr>
<tr><td>SA</td><td>\\(93199 \\over (173506 + 93199)\\) = 0.349</td></tr>
<tr><td>Tas</td><td>\\(24325 \\over (56669 + 24325)\\) = 0.300</td></tr>
<tr><td>Vic</td><td>\\(348160 \\over (606475 + 348160)\\) = 0.365</td></tr>
<tr><td>WA</td><td>\\(136794 \\over (276914 + 136794)\\) = 0.331</td></tr>
<tr></tr>
</table><br>So ACT has the highest proportion, which is option <b>(a)</b>";

$Q[3] = "A catering class were preparing a meal for the victorious school football team, and visiting dignitaries. The meal was due to commence at 1:10 pm. The class had calculated that the food would take two and a half hours to prepare. At what time did they need to start preparing in order to have the meal ready on time?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("10:10 am","10:40 am","11:10 am","11:40 am");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "1:10 pm - 2.5 hours = 10:40 am, which is option <b>(b)</b>";

$Q[4] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(3\\over 5\\). The probability that it is white is equal to the probability that it is green. If there are 8 green marbles, how many black marbles are there?";
$QType[4] = 1;
$QAnswers[4] = "24";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Proportion of marbles that are black = \\(3\\over 5\\)<br>Proportion of marbles that are green = \\(1\\over 5\\)<br>So \\(1\\over 5\\) of the marbles = 8 marbles <br>Number of marbles that are black = \\(3\\over 5\\) = 3 \\(\\times\\) \\(1\\over 5\\) = 3 \\(\\times\\) 8 = <b>24</b>";

$Q[5] = "The English staff at a particular school are reviewing the books that they have available as class texts. They have put together a scatterplot of the number of classes that have used each book as a function of the time that they have had the book.<br><br><img src='images/PracticeTest4a_1.jpg'><br><br>What is the median length of time the English department has had the books?";
$QType[5] = 1;
$QAnswers[5] = "6";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " years";
$Soln[5] = "There are 13 sets of books, so the median will be the 7th book when the books are ordered according to age. This has been held for 6 years, so median = <b>6</b> years.";

$Q[6] = "The English staff at a particular school are reviewing the books that they have available as class texts. They have put together a scatterplot of the number of classes that have used each book as a function of the time that they have had the book.<br><br><img src='images/PracticeTest4a_1.jpg'><br><br>What is the range of the number of times the books have been studied?";
$QType[6] = 1;
$QAnswers[6] = "19";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "range = greatest - smallest = 21 - 2 = <b>19</b> times";

$Q[7] = "The English staff at a particular school are reviewing the books that they have available as class texts. They have put together a scatterplot of the number of classes that have used each book as a function of the time that they have had the book.<br><br><img src='images/PracticeTest4a_2.jpg'><br><br>Which of the books A, B, C or D marked on the graph has been read least frequently?";
$QType[7] = 0;
$QAnswers[7] = "b";
$QOptions[7] = array("A","B","C","D");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Book A has been read 2 times in 1 year<br>Book B has been read 5 times in 8 years = \\(5\\over 8\\) = 0.625 times per year<br>Book C has been read 15 times in 12 years = \\(15\\over 12\\) = 1.25 times per year<br>Book D has been read 21 times in 8 years = \\(21\\over 8\\) = 2.625 times per year.<br>The book with the lowest frequency is <b>B</b>";

$Q[8] = "A bamboo plant grows 5 cm in 10 weeks. How much does it grow in 14 weeks? ";
$QType[8] = 1;
$QAnswers[8] = "7"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " cm";
$Soln[8] = "Plant grows 5 cm in 10 weeks. <br> Plant grows 5 \\(\\div\\) 10 = 0.5 cm in 5 weeks.<br> Plant grows 0.5 \\(\\times\\) 14 = <b>7</b> cm in 14 weeks.";

$Q[9] = "A teacher has a roll of stickers. After using 75 of them, \\(1\\over 4\\) of the stickers from the roll are left unused. What percentage of stickers has the teacher used?";
$QType[9] = 1;
$QAnswers[9] = "75";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "%";
$Soln[9] = "Fraction of stickers used = 1 - \\(1\\over 4\\) = \\(3\\over 4\\)<br> \\(3\\over 4\\) as a percentage = 3 \\(\\div\\) 4 \\(\\times\\) 100% = <b>75</b>%";

$Q[10] = "A shop sells pencils in boxes of 12. A box costs $3.90. If a teacher needs to buy 30 pencils, how much will she need to pay?";
$QType[10] = 1;
$QAnswers[10] = "11.70";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "30 \\(\\div\\) 12 = 2.5 so she will need to buy 3 boxes. <br> Cost for 3 boxes = 3 \\(\\times\\) $3.90 = $11.70";

$Q[11] = "The local community swimming pool was drained over winter. The pool is 25 m long, 15 m wide and 1.8 m deep. How many kilolitres of water are required to refill it?";
$QType[11] = 1;
$QAnswers[11] = "675";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " kL";
$Soln[11] = "Volume in cubic metres = 25 \\(\\times\\) 15 \\(\\times\\) 1.8 = 675 m<sup>3</sup><br>1 m<sup>3</sup> = 1000 L = 1 kL<br>Volume in kilolitres = <b>675</b> kL";

$Q[12] = "A teacher is planning the route for the school cross country run. She wants the students to run around the perimeter of the school. The school perimeter is shown in the figure.<br><br><img src='images/PracticeTest4a_3.jpg'><br><br>If students need to run 3 km, how many laps of the perimeter do they need to run? Give your answer to 1 decimal place.";
$QType[12] = 1;
$QAnswers[12] = "3.3";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Perimeter = 100 + 130 + 50 + 40 + 50 + 130 + 100 + 300 = 900 m.<br> 3 km = 3000 m<br>Number of laps needed = 3000 \\(\\div\\) 900 = <b>3.3</b> laps";

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