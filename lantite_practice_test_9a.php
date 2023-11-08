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

$Q[0] = "A plane is flying west to Melbourne to Perth. The journey is 2703 km. The plane has an average flying speed of 636 km per hour. Perth time is three hours behind Melbourne time. This means that if it is 8 am in Melbourne, it is 5 am on the same day in Perth. If the plane leaves Melbourne at 10:20 am, at what time (in local Perth time) will it arrive in Perth? ";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "a";
$QOptions[0] = array("11:35 am","11:45 am","2:35 pm","2:45 pm");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Flying time = 2703 km \\(\\div\\) 636 km/h = 4.25 hours = 4 hours and 15 minutes<br>
Departure time in Perth time = 10:20 am - 3 hours = 7:20 am<br>
Arrival time in Perth time = 7:20 am + 4 hours and 15 minutes = 11:35 am, option <b>(a)</b>";

$Q[1] = "A woodworking teacher has packaged all of her construction materials into boxes. She has one box measuring 2 m \\(\\times\\) 1 m \\(\\times\\) 1 m, three boxes of 1.5 m<sup>3</sup> and 4 boxes of 1 m<sup>3</sup>. Together, what volume of space do the boxes occupy?";
$QType[1] = 1;
$QAnswers[1] = "10.5";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " m<sup>3</sup>";
$Soln[1] = "Volume of first box = 2 m \\(\\times\\) 1 m \\(\\times\\) 1 m = 2 m<sup>3</sup><br>
Volume of next 3 boxes = 1.5 \\(\\times\\) 3 = 4.5 m<sup>3</sup><br>
Volume of last 4 boxes = 4 \\(\\times\\) 1 = 4 m<sup>3</sup><br>
Total volume = 2 + 4.5 + 4 = <b>10.5</b> m<sup>3</sup>";

$Q[2] = "Steven had a part time job over summer. He spent \\(\\frac{5}{7}\\) of his earnings on a $250 fishing rod. How much did he earn from his job in total? ";
$QType[2] = 1;
$QAnswers[2] = "350";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "\\(\\frac{5}{7}\\times \\) total = $250<br>Total = $250 \\(\\div\\) 5 \\(\\times\\) 7 = $<b>350</b>";

$Q[3] = "The following figure shows data taken from the Australian Bureau of Statistics May 2018 Survey of Employees Earnings and hours.<br><br><img src='images/PracticeTest9a_1.jpg'><br><br>What percentage of employees in the survey were in managerial roles?";
$QType[3] = 1;
$QAnswers[3] = "6.9"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "From the graph, 5.9% were in full time managerial roles, and 1% were in part time managerial roles<br>Total percentage in managerial roles = <b>6.9</b>%";

$Q[4] = "The following figure shows data taken from the Australian Bureau of Statistics May 2018 Survey of Employees Earnings and hours.<br><br><img src='images/PracticeTest9a_1.jpg'><br><br>Which group had the largest percentage of women.";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("Full-time managerial","Full-time non-managerial","Part-time managerial","Part-time non-managerial");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "% women in full-time managerial = 1.5%<br>% women in full-time non-managerial = 20.4% + 0.9% = 21.3%<br>% women in part-time managerial = 0.6%<br>% women in part-time non-managerial = 15.2 + 11.6 = 26.8%<br>Greatest percentage of women in part-time non-managerial, option <b>(d)</b>";

$Q[5] = "Body mass index (BMI) is used as a measure of obesity. the formula for BMI is weight in kilograms divided by height in metres squared. According to the National Institutes of Health (NIH), for adults:<br><br>
•	A BMI of less than 18.5 means that a person is underweight.<br>
•	A BMI of between 18.5 and 25 is ideal.<br>
•	A BMI of between 25 and 30 is overweight.<br>
•	A BMI over 30 indicates obesity.<br><br>
Sam is an andult who is 165 cm tall and weighs 68 kg. According to the BMI, Sam is";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("underweight","ideal weight","overweight","obese");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Sam's height in metres = 1.65<br>Sam's height in metres squared = 1.65 \\(\\times\\) 1.65 = 2.7225<br>Sam's BMI = 68 \\(\\div\\) 2.7225 = 24.977<br>Classification = ideal (but only just!!!). This is option <b>(b)</b>";

$Q[6] = "A secondary school offers Korean and Japanese electives. The number of students taking each course are shown in the Venn diagram.<br><br><img src='images/PracticeTest9a_2.jpg'><br><br>If there are 157 students in the school, how many are taking both Korean and Japanese?";
$QType[6] = 1;
$QAnswers[6] = "30";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Number of students taking Japanese and Korean = 157 - (22 + 38 + 67) = 157 - 127 = <b>30</b>";

$Q[7] = "A secondary school offers Korean and Japanese electives. The number of students taking each course are shown in the Venn diagram.<br><br><img src='images/PracticeTest9a_2.jpg'><br><br>If there are 157 students in the school, how many are taking no foreign language?";
$QType[7] = 1;
$QAnswers[7] = "67";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "From the diagram, <b>67</b> are taking no foreign language.";

$Q[8] = "A four wheel drive has a tank capacity of 120 litres. The driver has used three fifths of the fuel in the tank. How much fuel is left in the tank?";
$QType[8] = 1;
$QAnswers[8] = "48"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "Proportion of fuel remaining = \\(\\frac{5}{5} - \\frac{3}{5} = \\frac{2}{5}\\)<br>Amount of fuel remaining = \\(\\frac{2}{5} \\times\\) 120 L = <b>48</b> L";

$Q[9] = "5 pickers pick a field of beetroot in 6 hours. How long would 3 pickers take to harvest the same field?";
$QType[9] = 1;
$QAnswers[9] = "10";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " hours";
$Soln[9] = "5 pickers take 6 hours.<br>1 picker would take 5 \\(\\times\\) 6 hours = 30 hours<br> 3 pickers would take 30 hours \\(\\div\\) 3 = <b>10</b> hours.";

$Q[10] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(\\frac{3}{5}\\). The probability that it is white is equal to the probability that it is green. What is the probability of randomly drawing a white marble?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("0.6","0.5","0.1","0.2");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Probability of drawing a white or green marble = \\(\\frac{5}{5} - \\frac{3}{5} = \\frac{2}{5}\\)<br>Probability of drawing a white marble = \\(\\frac{1}{2} \\times \\frac{2}{5} = \\frac{1}{5}\\)<br>As a decimal \\(\\frac{1}{5}\\) = 1 \\(\\div\\) 5 = 0.2, option <b>(d)</b>";

$Q[11] = "A parent teacher night is scheduled to commence at 2 pm and conclude at 9 pm. Each parent-teacher interview takes 10 minutes. A teacher has 30 parents who may wish to see her. She plans to take a 10-minute break at 5 pm, and a 30 minute break at 6.30 pm. Apart from these two breaks, she intends to see a parent every ten minutes, with no other breaks. If she begins meeting with parents at 3 pm, by what time will she have finished all of her interviews?";
$QType[11] = 0;
$QAnswers[11] = "b";
$QOptions[11] = array("8:00 pm","8:40 pm","8:50 pm","9:00 pm");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Total time for interviews = 30 \\(\\times \\) 10 = 300 minutes = 300 \\(\\div\\) 60 = 5 hours<br>Total time for interviews and breaks = 5 hours + 10 minutes + 30 minutes = 5 hours and 40 minutes<br>Finish time = 3 pm + 5 hours and 40 minutes = 8:40 pm, option <b>(b)</b>";

$Q[12] = "A student is aiming for a mark of at least 68% in a subject. She got 30/50 on an assessment worth 20% of the total mark; and 46/60 on an assessment worth 30% of the total mark. The final exam is worth 50% of the marks, and is to be marked out of 100. Students can only receive a whole number of marks in the final exam (no partial marks are given). What is the minimum mark that the student needs in the final exam in order to meet her goal?";
$QType[12] = 1;
$QAnswers[12] = "66";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "The student can achieve up to 50% of the total marks from the assessment.<br>Total marks actually achieved by the student in the assessments = 30 \\(\\div\\) 50 \\(\\times\\) 20 + 46 \\(\\div\\) 60 \\(\\times\\) 30 = 12 + 23 = 35%<br>Total marks needed from the exam = 68 - 35 = 33 marks out of a possible 50<br>As a mark out of 100, \\(\\frac{33}{50} = \\frac{66}{100}\\), so the minimum mark that the student needs is <b>66</b>";

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