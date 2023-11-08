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

$Q[0] = "The ratio of adults (teachers and parent helpers) to students for an excursion to the zoo is 1:8. If there are 72 students, how many people will be going to the zoo?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "81";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "There will be 1 adult for every 8 students. There are 72 \\( \\div \\) 8 = 9 groups of 8 students, so there are 9 adults. Thus 72 + 9 = <b>81</b> people will be going to the zoo.";

$Q[1] = "The ratio of adults (teachers and parent helpers) to students for an excursion to the zoo is 2:7. If there are 56 students, how many people will be going to the zoo?";
$QType[1] = 1;
$QAnswers[1] = "72";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "For every 7 students there will be 2 adults. <br> 56 \\( \\div \\) 7 = 8.<br> There are 8 groups of 7 students, so there will be 8 groups of 2 adults = 16 adults. 56 + 16 = 72. <br> There will be <b>72</b> people going to the zoo.";

$Q[2] = "The ratio of the length to the width of a photo frame is 7:4. If the perimeter is 88 cm, what is the width of the frame?";
$QType[2] = 1;
$QAnswers[2] = "16";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " cm";
$Soln[2] = "Perimeter = length + width + length + width = 2 \\( \\times \\) (length + width) <br> 88 = 2 \\( \\times \\) (length + width) <br> 44 = length + width <br> Now the ratio length:width is 7:4 which means that length + width is divided into 7 + 4 = 11 parts. <br> 44 \\( \\div \\) 11 = 4. The width takes 4 of these parts, i.e. the width is 4 \\( \\times \\) 4 = <b>16</b> cm.";

$Q[3] = "Two classes are setting up a lemonade stand business in the school playground to raise funds for their chosen charities. <br>Class A have chosen the Smith Family as their charity. <br>Class B have chosen Foodbank Australia as their charity. <br>Class A invested $75 into the lemonade stand. <br>Class B invested $60 into the lemonade stand. <br>They agreed to divide the profits in the ratio of their contributions. The stand raised $1800. <br>How much money will be donated to Foodbank Australia?";
$QType[3] = 1;
$QAnswers[3] = "800"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "investment ratio A:B = 75:60 <br> Both sides have a common factor of 15 so we can simplfy the ratio: 75:60 = (75 \\( \\div \\) 15) : (60 \\( \\div \\) 15) = 5:4 <br> So the funds are divided into 5 + 4 = 9 parts, and Foodbank will get \\( 4 \\over 9 \\) \\( \\times \\) 1800 = <b>$800</b>";

$Q[4] = "1080 students sit the end-of-year exams at a particular school. For every student who scored a band 5 or 6, two students scored a band 3 or 4 and one student scored a band 1 or 2 result. How many students did not score a band 3 or 4 result?";
$QType[4] = 1;
$QAnswers[4] = "540";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "1 in band 5/6 + 2 in band 3/4 + 1 in band 1/2 means that the cohort students has been split into 1 + 2 + 1 = 4 <br> 2 of these 4 parts scored a band 3/4, so 2 of the parts did not score a band 3/4. <br> Number of students in 1 part = 1080 \\( \\div \\) 4 = 270 <br> Number of students who did not score a band 3/4 = 2 \\( \\times \\) 270 = <b>540</b> students.";

$Q[5] = "A sports teacher set up an orienteering course with legs 0.27 km, 1.03 km and 1.5 km. What was the total length of the course?";
$QType[5] = 1;
$QAnswers[5] = "2.8";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " km";
$Soln[5] = "0.27 + 1.03 + 1.5 = <b>2.8</b> km";

$Q[6] = "A teacher bought a coffee for $4.25, a newspaper for $2.20, a pack of pens for $6.40 and a set of whiteboard markers for $8.80. She paid in cash and received $3.35 change. How much money did she hand to the cashier?";
$QType[6] = 1;
$QAnswers[6] = "25";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "She handed over $(4.25 + 2.20 + 6.40 + 8.80 + 3.35) = $<b>25</b>";

$Q[7] = "A school bus has to travel 17 km. It has gone 4.8 km. How far does it have left to go?";
$QType[7] = 1;
$QAnswers[7] = "12.2";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " km";
$Soln[7] = "17 - 4.8 = <b>12.2</b> km";

$Q[8] = "A carpentry student had a wooden panel that was 12 cm thick. He planed 4 mm off one side and 5.5 mm off the other side. What was the final thickenss of the panel?";
$QType[8] = 1;
$QAnswers[8] = "11.05"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " cm";
$Soln[8] = "Note that 10 mm = 1 cm. <br> 12 - 0.4 - 0.55 = <b>11.05</b> cm";

$Q[9] = "A student scored 62 out of 80 in a test. What is her mark as a percentage?";
$QType[9] = 1;
$QAnswers[9] = "77.5";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "%";
$Soln[9] = "62 \\( \\div \\) 80 \\( \\times \\) 100 = <b>77.5</b>%";

$Q[10] = "Farah bought 800 g of cashews. If the cashews cost $17.90 per kilogram, how much did Farah pay for her cashews?";
$QType[10] = 1;
$QAnswers[10] = "14.32";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "1 kg = $17.90, so <br> 0.8 kg = 0.8 \\( \\times \\) $17.90 = $<b>14.32</b>";

$Q[11] = "An cup holds 160 mL of juice. How cups can be served from a 4 Litre jug of juice?";
$QType[11] = 1;
$QAnswers[11] = "25";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "4 L \\( \\div \\) 0.16 L = <b>25</b>";

$Q[12] = "A teacher has a 500 gigabyte hard disk drive. If she has 274.8 gigabytes filled with software, 114.3 gigabytes filled with pictures and videos and 83.6 gigabytes filled with other lesson materials, how much space is remaining on her hard disk?";
$QType[12] = 1;
$QAnswers[12] = "27.3";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " gigabytes";
$Soln[12] = "Space used = 274.8 + 114.3 + 83.6 = 472.7 <br> Total space - space used = 500 - 472.7 = <b>27.3</b> gigabytes.";

$Q[13] = "A teacher bought four packets of M&Ms at $3.95 each, two packets of Tim Tams at $2.55 each, and a bottle of softdrink. If the purchases cost a total of $24.65, what did the softdrink cost?";
$QType[13] = 1;
$QAnswers[13] = "3.75";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "$";
$suffix[13] = "";
$Soln[13] = "Cost of M&Ms and TimTams = 4 \\( \\times \\) $3.95 + 2 \\( \\times \\) $2.55 = $20.90 <br> $24.65 - $20.90 = $<b>3.75</b>";

$Q[14] = "At the end of the year, a teacher received a gift of a box of chocolates. There were 28 chocolates in the box. 21 of the chocolates were milk chocolate and the rest were dark chocolate. What percentage of the chocolates were dark chocolate?";
$QType[14] = 1;
$QAnswers[14] = "25";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "%";
$Soln[14] = "Number of dark chocolates = 28 - 21 = 7 <br> Percentage of dark chocolates = 7 \\( \\div \\) 28 \\( \\times \\) 100 = <b>25%</b>";

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