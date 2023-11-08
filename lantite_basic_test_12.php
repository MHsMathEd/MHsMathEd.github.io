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

$Q[0] = "Eight boxes of textbooks weigh 184 kg. How much do 11 boxes weigh?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "253";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "kg";
$Soln[0] = "8 boxes weigh 184 kg<br>1 box weighs 184 \\(\\div\\) 8 = 23 kg<br>11 boxes weigh 23 \\(\\times\\) 11 = <b>253</b> kg.";

$Q[1] = "One teacher can mark 90 tests in 6 hours. How long will it take 5 teachers to mark the tests?";
$QType[1] = 1;
$QAnswers[1] = "1.2";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " hours";
$Soln[1] = "1 teacher takes 6 hours. 5 teachers take 6 \\(\\div\\) 5 = <b>1.2</b> hours.";

$Q[2] = "1 Australian dollar is equivalent to 4.8 Chinese renminbi. How many Australian dollars is 2000 Chinese renminbi worth? Give your answer to the nearest cent.";
$QType[2] = 1;
$QAnswers[2] = "416.67";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "In Australian dollars, 2000 Chinese renminbi = 2000 \\(\\div\\) 4.8 = $416.67";

$Q[3] = "A cordial has instructions to make it up in the ratio 1 part cordial concentrate to 4 parts water. How many litres of cordial can be made up from 500 mL of cordial concentrate?";
$QType[3] = 1;
$QAnswers[3] = "2.5"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " L";
$Soln[3] = "500 mL = 0.5 L. <br> 1 part = 0.5 L. Amount of water = 4 parts = 4 \\(\\times\\) 0.5 L = 2 L<br>Amount of cordial = 0.5 + 2 = <b>2.5</b> L";

$Q[4] = "A recipe to serve 2 people requires \\(1\\over 4\\) cup sugar. How many cups of sugar are needed to serve 8 people?";
$QType[4] = 1;
$QAnswers[4] = "2";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " cups";
$Soln[4] = "\\(1\\over 4\\) cup for 2 people<br> \\(1\\over 4\\) \\(\\times\\) 8 = <b>2</b> cups for 8 people.";

$Q[5] = "Convert 618 milligrams to grams.";
$QType[5] = 1;
$QAnswers[5] = "0.618";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " g";
$Soln[5] = "618 \\(\\div\\) 1000 = <b>0.618</b>";

$Q[6] = "Two chickens eat 1 sack of chicken feed in 60 days. How long will the same sack of feed last 5 chickens?";
$QType[6] = 1;
$QAnswers[6] = "24";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " days";
$Soln[6] = "2 chickens take 60 days.<br>1 chicken takes 60 \\(\\times\\) 2 = 120 days.<br> 5 chickens take 120 \\(\\div\\) 5 = <b>24</b> days.";

$Q[7] = "12 pavers occupy 1.92 m<sup>2</sup>. How many pavers are needed to fill 2.88 m<sup>2</sup>?";
$QType[7] = 1;
$QAnswers[7] = "18";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "12 pavers for 1.92 m<sup>2</sup><br> 1 paver for 1.92 \\(\\div\\) 12 = 0.16 m<sup>2</sup><br>Number of pavers for 2.88 m<sup>2</sup> = 2.88 \\(\\div\\) 0.16 = <b>18</b> pavers.";

$Q[8] = "A teacher estimates that four students will use 1600 mL of paint. How many litres of paint will be used by 30 students?";
$QType[8] = 1;
$QAnswers[8] = "12"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "4 students use 1.6 L<br>1 student uses 1.6 \\(\\div\\) 4 = 0.4 L<br>30 students use 0.4 \\(\\times\\) 30 = <b>12</b> L";

$Q[9] = "The school band committee calculates that the band will cost $300 per student to run if 60 students join the band. What will the cost per student be if 75 students join the band?";
$QType[9] = 1;
$QAnswers[9] = "240";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "$";
$suffix[9] = "";
$Soln[9] = "Total cost to run the band (i.e. cost if there was only 1 student) = 300 \\(\\times\\) 60 = $18 000<br>Cost per student for 75 students = $18000 \\(\\div\\) 75 = $<b>240</b>";

$Q[10] = "Last year a teacher had 25 students in her class and she gave 2300 sheets of paper to the students. This year she has 22 student in her class. How many sheets of paper should she expect to use?";
$QType[10] = 1;
$QAnswers[10] = "2024";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "25 students used 2300 sheets<br>1 student used 2300 \\(\\div\\) 25 = 92 sheets<br>22 students should use 92 \\(\\times\\) 22 = <b>2024</b> sheets of paper.";

$Q[11] = "A class party for 26 students cost $195. What would be the cost of a similar party for 48 students?";
$QType[11] = 1;
$QAnswers[11] = "360";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "Cost for 26 students = $195<br>Cost for 1 student = $195 \\(\\div\\) 26 = $7.50<br>Cost for 48 students = $7.50 \\(\\times\\) 48 = $<b>360</b>";

$Q[12] = "Two thirds of a class complete 64 worksheets between them. How many worksheets were completed by one quarter of the class?";
$QType[12] = 1;
$QAnswers[12] = "24";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "\\(2\\over 3\\) = 64<br>Total number of worksheets completed = 64 \\(\\div\\) \\(2\\over 3\\) = 64 \\(\\div \\) 2 \\(\\times\\) 3 = 96 <br>One quarter of worksheets = 96 \\(\\div \\) 4 = <b>24</b>";

$Q[13] = "70% of students voted for Holly as school captain. If Holly received 630 votes, how many students voted?";
$QType[13] = 1;
$QAnswers[13] = "900";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "70% = 630 votes.<br>1% = 630 \\(\\div\\) 70 = 9<br>100% = 9 \\(\\times\\) 100 = <b>900</b><br><br>Alternatively, 70% = 630 votes.<br>10% = 630 \\(\\div\\) 7 = 90<br>100% = 90 \\(\\times\\) 10 = <b>900</b>";

$Q[14] = "A car travelled 81 km at 64.8 km/h. How long did the trip take?";
$QType[14] = 0;
$QAnswers[14] = "d";
$QOptions[14] = array("1 hour 37 minutes", "1 hour 25 minutes","1 hour 21 minutes" ,"1 hour 15 minutes" );
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "Time = 81 \\(\\div\\) 64.8 = 1.25 hours = 1 hour + 0.25 \\(\\times\\) 60 = 1 hour 15 minutes, which is option <b>(d)</b>";

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