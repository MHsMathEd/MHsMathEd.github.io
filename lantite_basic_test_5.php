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
  <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML" async ></script>
<style>
.error {color: #FF0000;}
</style>
</head>
<body  onload="loadFunction()">  

<?php
// define some variables.

$Q[0] = "Twelve out of 60 students were selected to represent the school at the zone cross country carnival. What percentage of students were not eligible to attend the zone cross country carnival?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "80";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " %";
$Soln[0] = "Number on ineligible students = 60 - 12 = 48 <br> \\(48 \\over 60 \\) \\( \\times \\) 100% = <b>80%</b>";

$Q[1] = "In a class test given to a class containing 15 girls and 15 boys, two thirds of the girls passed and three fifths of the boys passed. What percentage of students in the class did not pass the test?<br>Give your answer rounded to 2 decimal places.";
$QType[1] = 1;
$QAnswers[1] = "36.67";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " %";
$Soln[1] = "Number of girls who passed = \\(2 \\over 3 \\) \\( \\times \\) 15 = 10 <br> Number of girls who didn't pass = 15 - 10 = 5 <br> Number of boys who passed = \\(3 \\over 5 \\) \\( \\times \\) 15 = 9 <br> Number of boys who didn't pass = 15 - 9 = 6 <br> Number of students who didn't pass = 5 + 6 = 11 <br> Proportion of students who didn't pass = \\(11 \\over 30 \\)<br> Percentage of students who didn't pass = \\(11 \\over 30 \\) \\( \\times \\) 100% = 36.666666...%<br> Answer rounded to 2 decimal places = <b>36.37</b>%";

$Q[2] = "Before GST, a cupboard costs $220. How much does it cost after 10% GST is added?";
$QType[2] = 1;
$QAnswers[2] = "242";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "10% GST = 10% \\( \\times \\) $220 = $22<br> Cost = $220 + $22 = $<b>242</b>";

$Q[3] = "three students tried out for school captain. They received 29, 120 and 61 votes respectively. What percentage of the vote was obtained by the winning student? Round your answer to the nearest whole percentage.";
$QType[3] = 1;
$QAnswers[3] = "57"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "Total number of votes = 29 + 120 + 61 = 210<br>Percentage of votes taken by winner = 120 \\( \\div \\) 210 \\( \\times \\) 100% = 57.142...<br>Answer rounded to nearest whole number = <b>57</b> ";

$Q[4] = "At a particular school, two thirds of kindergarten students were driven to school, one fifth caught the bus, and the remainder walked. What fraction of kindergarten students walked to school?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("\\(2 \\over 5 \\)","\\(3 \\over 8 \\)","\\(2 \\over 15 \\)","\\(13 \\over 15 \\)");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Fraction of students who do not walk = \\(2 \\over 3 \\) + \\(1 \\over 5 \\) = \\((2 \\times 5) \\over (3 \\times 5) \\) + \\( (1 \\times 3) \\over (5 \\times 3) \\) = \\( 10 \\over 15 \\) + \\(3 \\over 15 \\) = \\( 13 \\over 15 \\)<br>Fraction of students who do walk = \\( 15 \\over 15 \\) - \\( 13 \\over 15 \\) = \\( 2 \\over 15 \\)<br> which is answer <b>(c)</b>.";

$Q[5] = "A professional development course was discounted by 15% and was being offered for the reduced price of $850. What was its regular price?";
$QType[5] = 1;
$QAnswers[5] = "1000";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "$850 represents 100% - 15% = 85% of the original price.<br> If we divide both sides of this relationship by 85 we can find 1% of the cost <br> \\($850 \\over 85 \\) = $10 represents \\(85% \\over 85) = 1% of the original price.<br> So $10 \\( \\times \\) 100 = $1000 represents 15 \\( \\times \\) 100 = 100% of the original price. <br> The original price was $<b>1000</b>";

$Q[6] = "In 2005 the population of Hobart was 203527. In 2015 the population was 209254. What was the average annual increase in Hobart's population? Give your answer to 1 decimal place.";
$QType[6] = 1;
$QAnswers[6] = "572.7";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Time period = 2015 - 2005 = 10 years<br>Population increase over 10 years = 209254 - 203527 = 5727<br>Average increase per year = 5727 \\( \\div \\) 10 = <b>572.7</b>";

$Q[7] = "At a particular secondary school \\(9 \\over 20 \\) of the enrolments were boys. What percentage of the enrolments were not boys?";
$QType[7] = 1;
$QAnswers[7] = "55";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " %";
$Soln[7] = "Percentage of boy enrolments = 9 \\( \\div \\) 20 \\( \\times \\) 100% = 45%<br> Percentage of enrolments that were not boys = 100% - 45% - <b>55</b>%";

$Q[8] = "A group of students were interviewed to determine whether they preferred studying history, geography or Japanese. One quarter favoured history. \\(7 \\over 20 \\) liked geography best. What percentage of students liked Japanese best?";
$QType[8] = 1;
$QAnswers[8] = "40"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " %";
$Soln[8] = "One quarter = 25%<br> \\(7 \\over 20 \\) = \\(7 \\over 20 \\) \\( \\times \\) 100% = 35%<br> Percentage who like Japanese best = 100% - 25% - 35% = <b>40</b>%";

$Q[9] = "To pass a university subject a student needs to sit a test consisting of 60 multiple choice questions and get at least 85%. If all the questions are of equal value, what is the minimum number of questions that the student must get correct?";
$QType[9] = 1;
$QAnswers[9] = "51";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "85% of 60 = 85 \\(\\div \\) 100 \\( \\times \\) 60 = 51 questions.";

$Q[10] = "The exchange rate from Australian dollars to Canadian dollars is 1 Australian Dollar equals
0.94 Canadian Dollar. How many Canadian dollars would you receive from $50 Australian dollars? Give your answer to the nearest cent.";
$QType[10] = 1;
$QAnswers[10] = "47.00";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "Canadian $";
$suffix[10] = "";
$Soln[10]= "0.94 \\( \\times 50 = 47<br> To the nearest cent, the answer is $<b>47.00</b>";

$Q[11] = "8% of students in a school are in the school dance group. If the dance group has 24 members, how many students are there in the school?";
$QType[11] = 1;
$QAnswers[11] = "300";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "8% = 24 students<br>1% = 24 \\( \\div \\) 8 = 3 students <br> 100% = 3 \\( \\times \\) 100 = 300<br> There are 300 students in the school.";

$Q[12] = "A science class were studying a plant. In one year the plant grew by 20% of the height at which it started the year. If it finished the year 84 cm tall, how tall was it at the start of the year?";
$QType[12] = 1;
$QAnswers[12] = "70";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " cm";
$Soln[12] = "100% + 20% = 120% of the height = 84 cm<br>1% of the height = 84 cm \\( \\div \\) 120 <br> 100% of the starting height = 84 cm \\( \\div \\) 120 \\( \\times \\) 100 = 70 cm<br> The plant was <b>70</b>cm tall at the start of the year.";

$Q[13] = "A teacher picked up a hire care and noted that the tank was 10% full. He added 40 Litres of petrol which made the tank 90% full. What is the capacity of the fuel tank?";
$QType[13] = 1;
$QAnswers[13] = "50";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " L";
$Soln[13] = "Increase in tank level = 90% - 10% = 80%<br> 40 Litres corresponds to 80% of the tank capacity <br> 40 \\( \\div \\) 80 = \\(1 \\over 2\\) corresponds to 1% of the tank capacity.<br>\\(1 \\over 2\\) \\( \\times \\) 100 = 50 corresponds to 100% of the tank capacity.<br> Tank capacity is <b>50</b> litres. ";

$Q[14] = "A teacher picked up a hire care and noted that the tank was 10% full. He added $60 worth of fuel to the tank at a cost of $1.50 per litre. This resulted in the tank becoming 60% full. What was the capacity of the fuel tank?";
$QType[14] = 1;
$QAnswers[14] = "80";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = " L";
$Soln[14] = "Increase in tank level = 60% - 10% = 50%<br> Amount of fuel added = $60 \\( \\div \\) $1.50/L = 40 L<br> 40 litres corresponds to 50% of the tank.<br> So the tank capacity is 100% = 2 \\( \\times \\) 50% = 2 \\( \\times \\) 40 = <b>80</b> litres.";

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