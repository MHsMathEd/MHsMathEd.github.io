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

$Q[0] = "A teacher has 7.75 hours of material in a teaching unit. If lessons at the teacher’s school are 40 minutes long, how many lessons will be required to fully teach the unit? Give your answer as a whole number of lessons.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "12";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "7.75 hours = 7.75 \\(\\times\\) 60 minutes = 465 minutes<br>Number of lessons required = 465 \\(\\div\\) 40 = 11.625<br>It is necessary to round up to ensure that the material is completed, so the teacher needs <b>12</b> lessons.";

$Q[1] = "A school holds a fete to raise money for charity. The money raised will be split between two charities, A and B in the ratio 1:3. The money raised by each year group is listed.<br><br>
<table>
<tr><th>Year</th><th>Amount Raised ($)</th></tr>
<tr><td>Kindergarten</td><td>20.41</td></tr>
<tr><td>Year 1</td><td>27.02</td></tr>
<tr><td>Year 2</td><td>24.00</td></tr>
<tr><td>Year 3</td><td>24.84</td></tr>
<tr><td>Year 4</td><td>28.40</td></tr>
<tr><td>Year 5</td><td>21.95</td></tr>
<tr><td>Year 6</td><td>23.82</td></tr>
</table><br><br>
How much money will be donated to charity B? Round your answer to the nearest cent.";
$QType[1] = 1;
$QAnswers[1] = "127.83";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Total amount raised ($) = 20.41 + 27.02 + 24.00 + 24.84 + 28.40 + 21.95 + 23.82 = 170.44<br>Amount is to be split into 1 + 3 = 4 parts. Charity B gets 3 of these 4 parts<br>Amount for Charity B = 3 \\(\\div 4 \\times\\) $170.44 = $<b>127.83</b>";

$Q[2] = "The formula to convert between centimetres and inches is<br><br>
<span style='text-align:center'>c = 2.54 I</span>
<br><br>where I represents the length in inches and c represents the length in cm. How many centimetres is 48 inches? Give your answer to 1 decimal place.";
$QType[2] = 1;
$QAnswers[2] = "121.9";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " cm";
$Soln[2] = "Number of cm = 2.54 \\(\\times\\) 48 = <b>121.9</b> cm";

$Q[3] = "A teacher catches the bus to and from school five days a week. A weekly bus ticket costs $32.00. A single (one-way) trip on the bus costs $3.75. How much does the teacher save each week by buying a weekly ticket rather than single trip tickets?";
$QType[3] = 1;
$QAnswers[3] = "5.50"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Number of single trips per week = 2 \\(\\times\\) 5 = 10<br>Cost of single trip tickets per week = 10 \\(\\times\\) $3.75 = $37.50<br>Weekly ticket saving = $37.50 - $32.00 = $<b>5.50</b>";

$Q[4] = "The population of Green Beach was given as 320 thousand, to the nearest thousand. Which could be the population of Green Beach?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("320 550","321 000","320 320","319 445");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Option (a): 320 550 rounds up to 321 thousand. <br> Option (b): 321 000 rounds to 321 thousand.<br> Option (c): 320 320 rounds to 320 thousand.<br> Option (d): 319 445 rounds to 319 thousand.<br>The correct answer is option <b>(c)</b>";

$Q[5] = "The area of an agricultural school is 33854 m<sup>2</sup>. One hectare is equal to 10000 m<sup>2</sup>. What is the area of the school to the nearest hectare?";
$QType[5] = 1;
$QAnswers[5] = "3";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " hectares";
$Soln[5] = "Area in hectares = 33854 \\(\\div\\) 10000 = 3.3854<br>Rounded to the nearest hectare, area = <b>3</b> hectares.";

$Q[6] = "One Australian dollar is equivalent to 1.05 New Zealand dollars. How many Australian dollars is $50 New Zealand dollars worth? Give your answer to the nearest cent.";
$QType[6] = 1;
$QAnswers[6] = "47.62";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "AU$";
$suffix[6] = "";
$Soln[6] = "1.05 NZ = 1 AU<br> 1 NZ = 1 \\(\\div\\) 1.05 AU<br>50 NZ = 50 \\(\\times 1 \\div \\) 1.05 AU = <b>47.62</b> AU";

$Q[7] = "A student has completed \\(\\frac{5}{8}\\) of her maths problem book. There are still 60 pages to go. How many pages are in the book?";
$QType[7] = 1;
$QAnswers[7] = "160";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Fraction of book remaining = \\(\\frac{8}{8} - \\frac{5}{8} = \\frac{3}{8}\\). <br> \\(\\frac{3}{8}\\) of the book = 60 pages<br> Total number of pages = 60 \\(\\div 3 \\times 8\\) = <b>160</b> pages";

$Q[8] = "A teacher takes 2 hours to write a test. How long would it take 3 teachers, working at the same rate, to write 6 tests?";
$QType[8] = 1;
$QAnswers[8] = "4"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " hours";
$Soln[8] = "1 teacher writes 1 test in 2 hours<br>If there are 6 tests and 3 teachers, each teacher needs to write 2 tests, which takes <b>4</b> hours.";

$Q[9] = "The map below is of the western NSW town of Brewarrina. <br><br><img src='images/PracticeTest8a_1.jpg'><br><br>Which set of directions will take you from the (closed) Brewarrina Station (near the bottom right hand corner of the map) to the supermarket (near the top left of the map, indicated by a purple shopping trolley)? ";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("Go up Bokhara St to Wilson St, Turn left and go along Wilson Street until you reach the school. Turn right into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your right.","Go up Bokhara St to Wilson St, Turn right and go along Wilson Street until you reach the school. Turn right into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your right.","Go up Bokhara St to Wilson St, Turn left and go along Wilson Street until you reach the school. Turn left into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your left.","Go up Bokhara St to Wilson St, Turn right and go along Wilson Street until you reach the school. Turn left into Belmore Street and continue until you reach the highway, B76. Turn right. Continue straight ahead through two intersections. The supermarket will be on your left.");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "The correct set of directions is option <b>(a)</b>: Go up Bokhara St to Wilson St, Turn left and go along Wilson Street until you reach the school. Turn right into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your right.";

$Q[10] = "The map below is of the western NSW town of Brewarrina. <br><br><img src='images/PracticeTest8a_1.jpg'><br><br>What is the approximate area of Brewarrina Central School?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("2 000 m<sup>2</sup>","6 000 m<sup>2</sup>","600 000 m<sup>2</sup>","20 000 m<sup>2</sup>");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Area is approximately 200 m \\(\\times\\) 100 m = 20 000 m<sup>2</sup>, which is option <b>(d)</b>";

$Q[11] = "What weight, in grams, is shown by the scale?<br><br><img src='images/PracticeTest8a_2.jpg'>";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("2.3","5.1","51","2300");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "The scale reads 2.3 kg = 2300 g, which is option <b>(d)</b>";

$Q[12] = "There are three finalists in a school’s spelling quiz. The first student correctly answered 8 questions, which was 50% of the questions. How many questions were in the spelling quiz?";
$QType[12] = 1;
$QAnswers[12] = "16";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "50% of questions = 8 questions<br>100% of questions = 2 \\(\\times\\) 8 questions = <b>16</b> questions.";


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