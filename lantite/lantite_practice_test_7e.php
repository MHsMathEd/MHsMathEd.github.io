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

$Q[0] = "Find 10% of 320 km. Give your answer in metres.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "32000";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " m";
$Soln[0] = "10% = 32 km = <b>32000</b> m";

$Q[1] = "An educational supplier was selling damaged stock at a discount of 50%. A teacher bought goods totalling $270 before the discount was applied. How much did the teacher pay?";
$QType[1] = 1;
$QAnswers[1] = "135";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Teacher paid 100 - 50 = 50% of the marked price.<br>50% \\(\\times\\) $270 = $<b>135</b>";

$Q[2] = "13 + 1.3 + 0.13 =";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("13.33","13.34","14.43","14.44");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "13 + 1.3 + 0.13 = 14.43, option <b>(c)</b>";

$Q[3] = "Write $58.60 in cents.";
$QType[3] = 1;
$QAnswers[3] = "5860"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " c";
$Soln[3] = "$58.60 = <b>5860</b> c";

$Q[4] = "Write 68230 g in kilograms. Give your answer rounded to 1 decimal place.";
$QType[4] = 1;
$QAnswers[4] = "68.2";
$QOptions[4] = array("0","0","0","0");
$prefix[3] = "";
$prefix[4] = "";
$suffix[4] = " kg";
$Soln[4] = "68230 g = 68.230 kg<br>This rounds to 68.2 kg";

$Q[5] = "16 tonnes is equivalent to how many kilograms?";
$QType[5] = 1;
$QAnswers[5] = "16000";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " kg";
$Soln[5] = "16 t = 16000 kg";

$Q[6] = "A teacher bought three notepads for $4.25 each. What ws the total cost of the purchase?";
$QType[6] = 1;
$QAnswers[6] = "12.75";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "Total cost = $4.25 \\(\\times\\) 3 = $12.75";

$Q[7] = "A teacher bought a notepad for $4.25 and two pens for $1.80 each. She paid with a $20 note. How much change should she have received?";
$QType[7] = 1;
$QAnswers[7] = "12.15";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "4.25 + 1.80 + 180 = 7.85<br>20.00 - 7.85 = 12.15<br>She should receive $12.15 change.";

$Q[8] = "Which is smallest:";
$QType[8] = 0;
$QAnswers[8] = "c"; 
$QOptions[8] = array("12 \\(\\times\\) 3 - 2","12 \\(\\times\\) 2 - 3","12 - 3 \\(\\times\\) 2","3 + 2 \\(\\times\\) 12");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "12 \\(\\times\\) 3 + 2 = 38<br>12 \\(\\times\\) 2 - 3 = 21<br>12 - 3 \\(\\times\\) 2 = 6<br>3 + 2 \\(\\times\\) 12 = 27, so option <b>(c)</b> is the smallest.";

$Q[9] = "A box of 200 books weighs 20 kg. What do 20 books weigh?";
$QType[9] = 1;
$QAnswers[9] = "2";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " kg";
$Soln[9] = "200 books weigh 20 kg, so 200 \\(\\div\\) 10 books weigh 20 \\(\\div\\) 10 kg<br>i.e. 20 books weigh <b>2</b> kg.";

$Q[10] = "A child starts the year 110 cm tall and grows 10% taller during the year. How tall is the child at the end of the year?";
$QType[10] = 1;
$QAnswers[10] = "121";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " cm";
$Soln[10]= "10% \\(\\times\\) 110 = 11<br>110 + 11 = 121<br>The child is <b>121</b> cm tall at the end of the year.";

$Q[11] = "How many teams of 7 students can be made from a group of 91 students?";
$QType[11] = 1;
$QAnswers[11] = "13";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Number of teams = 91 \\(\\div\\) 7 = 13";

$Q[12] = "A student has calculated that she needs to score 24% in the final exam to pass a subject. If the final exam is to be marked out of 75, what is the minimum mark that the student needs to get?";
$QType[12] = 1;
$QAnswers[12] = "18";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "\\(\\frac{24}{100}\\) = \\(\\frac{?}{75}\\)<br>There are many different ways to do this. Here is one way<br>\\(\\frac{24}{100} = \\frac{12}{50} = \\frac{6}{25} =  \\frac{18}{75}\\)<br>The student needs a mark of at least <b>18</b>";

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