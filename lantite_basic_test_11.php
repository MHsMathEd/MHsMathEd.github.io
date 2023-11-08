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

$Q[0] = "Of the 60 children in year 3 at a school, 35 are boys. What is the ratio of girls to boys?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "b";
$QOptions[0] = array("3 to 8","5 to 7","7 to 5","8 to 3");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "ratio = 25 : 35 = 5:7, which is option <b>(b)</b>";

$Q[1] = "A recipe for one dozen muffins uses \\(3 \\over 4 \\) cup of milk. How many cups of milk would be needed to make three dozen muffins?";
$QType[1] = 0;
$QAnswers[1] = "c";
$QOptions[1] = array("\\(3 \\over 4 \\)","1\\(1 \\over 2 \\)","2\\(1 \\over 4 \\)","3\\(3 \\over 4 \\)");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "\\(3 \\over 4 \\) \\(\\times\\) 3 = \\(9 \\over 4 \\) = 2\\(1 \\over 4 \\), which is option <b>(c)</b>";

$Q[2] = "A stock pot has a capacity of 9.75 litres. How many millilitres of liquid can the pot hold?";
$QType[2] = 1;
$QAnswers[2] = "9750";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " mL";
$Soln[2] = "9.75 \\(\\times\\) 1000 = <b>9750</b> mL";

$Q[3] = "Jonathan ran 21 km at an average speed of 10 km/h. How long did his run take?";
$QType[3] = 0;
$QAnswers[3] = "a"; 
$QOptions[3] = array("2 h 6 min","2 h 1 min","3 h  10 min","1 h 58 min");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "His run took 21 \\(\\div\\) 10 = 2.1 hours = 2 hours and 0.1 \\(\\times\\) 60 minutes = 2 h 6 min, which is option <b>(a)</b>";

$Q[4] = "Two students from class 4C empty the recycling boxes from all the classrooms. It takes them 2 hours to complete the job. The next week ten students from class 4C empty the recycling boxes from all the classrooms. If they work at the same rate, how long will it take them to complete the job?";
$QType[4] = 1;
$QAnswers[4] = "24";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " minutes";
$Soln[4] = "2 students take 2 hours = 120 minutes.<br>1 student will take 2 \\(\\times\\) 2 hours = 4 hours = 240 minutes.<br>10 students will take 240 \\(\\div\\) 10 = <b>24</b> minutes.";

$Q[5] = "Class 5K was divided into two fundraising teams. Team A decided to sell snow cones. Team B decided to sell cupcakes. For every three snow cones that team A sold, team B sold four cupcakes. The cupcakes and snow cones were all priced at $1. If team A raised $150, how much money did class 5K raise?";
$QType[5] = 1;
$QAnswers[5] = "350";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "Money raised A:B = 3:4<br>3 parts = $150<br>1 part = $150 \\(\\div\\) 3 = $50<br>Total raised = (4+3) = 7 parts = $50 \\(\\times\\) 7 = $<b>350</b>";

$Q[6] = "Class 5M was divided into two fundraising teams. Team C decided to sell snow cones. Team D decided to sell cupcakes. For every three snow cones that team C sold, team D sold four cupcakes. The cupcakes and snow cones were all priced at $1. If team B raised $220, how much money did team C raise?";
$QType[6] = 1;
$QAnswers[6] = "165";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "Money raised A:B = 3:4<br>4 parts = $220<br>1 part = $220 \\(\\div\\) 4 = $55<br>A raised 3 parts = $55 \\(\\times\\) 3 = $<b>165</b>";

$Q[7] = "Class 5P was divided into two fundraising teams. Team E decided to sell snow cones. Team F decided to sell cupcakes. For every three snow cones that team E sold, team F sold four cupcakes. The cupcakes and snow cones were all priced at $1. If class 5K raised $280, how much money was raised by team B?";
$QType[7] = 1;
$QAnswers[7] = "160";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "Money raised A:B = 3:4<br>Total raised = (4+3) = 7 parts = $280<br>1 part = $280 \\(\\div\\) 7 = $40<br>Money raised by B = 4 parts = $40 \\(\\times\\) 4 = $<b>160</b>";

$Q[8] = "Class 5R was divided into two fundraising teams. Team G decided to sell popcorn. Team H decided to run a guessing competition. For every three popcorn sales that team G made, team H sold seven guesses. The popcorn and guesses were all priced at 50c. What percentage of the total money raised was raised by team G?";
$QType[8] = 1;
$QAnswers[8] = "30"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "%";
$Soln[8] = "Team A raised \\(3\\over (3 + 7)\\) of the total. As a percentage this is \\(3\\over 10\\) \\(\\times\\) 100% = <b>30</b>%";

$Q[9] = "Lionel can complete 30 multiplication questions in 8.5 minutes. How many seconds does it take him to complete 12 questions?";
$QType[9] = 1;
$QAnswers[9] = "204";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " s";
$Soln[9] = "8.5 minutes = 8.5 \\(\\times\\) 60 seconds = 510 seconds<br>30 questions take 510 seconds<br>1 question takes 510 \\(\\div\\) 30 = 17 seconds.<br> 12 questions take 17 \\(\\times\\) 12 = <b>204</b> seconds.";

$Q[10] = "A drawing is made with a scale 2 cm represents 5 m. A path is drawn 7 cm long. How long is the actual path?";
$QType[10] = 1;
$QAnswers[10] = "17.5";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " m";
$Soln[10]= "2 cm represents 5 m<br> 1 cm represents 5 \\(\\div\\) 2 = 2.5 m<br>7 cm represents 2.5 \\(\\times\\) 7 = <b>17.5</b> m";

$Q[11] = "An elite netballer is coming to work with the school netball teams. The cost is shared amongst the students, and each of the 15 students needs to pay $12. If an additional five students attend the workshop, what will be the cost per student?";
$QType[11] = 1;
$QAnswers[11] = "9";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "Total workshop cost = 15 \\(\\times\\) $12 = $180<br>Cost per student for 20 students = $180 \\(\\div\\) 20 = $<b>9</b>";

$Q[12] = "One Australian dollar is equal to 96 Canadian cents. How many Australian dollars are equal to $100 Canadian dollars? Give your answer to the nearest cent.";
$QType[12] = 1;
$QAnswers[12] = "104.17";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "AU$1 = CA$0.96<br>CA$1 = AU$1 \\(\\div\\) 0.96 = 1.04166667<br>CA$100 = 1.04166667 \\(\\times\\) 100 = $<b>104.17</b>";

$Q[13] = "An English teacher needs to move classrooms. Working with one colleague, they move 96 of her books in half an hour. She has a further 96 books to move. Another colleague comes to help. Working together, how many minutes will it take them to move the remaining books?";
$QType[13] = 1;
$QAnswers[13] = "20";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " minutes";
$Soln[13] = "2 people move the books in 30 minutes.<br>1 person moves the books in 2 \\(\\times\\) 30 = 60 minutes<br>3 people move the books in 60 \\(\\div\\) 3 = <b>20</b> minutes.";

$Q[14] = "Kirsty is driving at 70 km / hour. She needs to travel 56 km. How long will it take her?";
$QType[14] = 1;
$QAnswers[14] = "48";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = " minutes";
$Soln[14] = "time = 56 \\(\\div\\) 70 = 0.8 hours = 0.8 \\(\\times\\) 60 = <b>48</b> minutes.";

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