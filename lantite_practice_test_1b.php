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

$Q[0] = "A coach took a class from Sydney on an excursion to the Western Plains. It left the school at 8:45 am and arrived at its destination at 1:45 pm. For the first two hours the coach averaged a speed of 100 km/h. For the remainder of the journey it averaged 60 km/h. What was the average speed of the whole journey?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[0] = "76";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " km/h";
$Soln[0] = "Length of journey = 1.45 pm - 8.45 am = 5 hours<br>Average speed each hour: 100, 100, 60, 60, 60<br> Average speed overall = (100 + 100 + 60 + 60 + 60) \\( \\div \\) 5 = <b>76</b> km/h";

$Q[1] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>Starting from the corner of Marlin Ave and Leatherjacket St, which of the following routes would take you to the school?";
$QType[1] = 0;
$QAnswers[1] = "c";
$QOptions[1] = array("Travel north one block. Turn right. Travel east two blocks. Turn right.","Travel east. Turn right at the third street. Travel straight ahead until you reach the school.","Travel east until you reach Whiting Ave. Travel north as far as you can. Turn east and continue until the first intersection. Turn left. Travel one block.","Travel south along Marlin Ave through two intersections. Turn left and continue until you reach the school.");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "<b>c</b>: Travel east until you reach Whiting Ave. Travel north as far as you can. Turn east and continue until the first intersection. Turn left. Travel one block.";

$Q[2] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>What is the approximate area of the school grounds in square metres? ";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("1 830","18 300","183 000","1 830 000");
$prefix[2] = "";
$suffix[2] = " square metres";
$Soln[2] = "Area is approximatey 600 m \\( \\times \\) 300 m = <b>180 000</b> square metres.";

$Q[3] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>The school has an entrance gate at every corner. Approximately how many metres is the shortest walk from the school to the sports oval?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("120 m","700 m","1200 m","2000 m");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "<b>b</b>: The walk is approximately 700 m.";

$Q[4] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>The school has an entrance gate at every corner. Approximately how many metres is the shortest drive from the school grounds to the sports oval?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("120 m","700 m","1200 m","2000 m");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "<b>c</b>: The drive is approximately 1200 m";

$Q[5] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br> Which of the following statements is true?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("The sports oval is east of both parks","The school is north east of the sports oval","The port is west of the sports oval","The shopping centre is northeast of the beach.");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "<b>b</b>: The school is north east of the sports oval.";

$Q[6] = "A classroom is 9 metres wide. The student desks are 90 cm long. What is the maximum number of student desks that can be placed in a row across the classroom, if there are to be three 1 metre wide aisles?";
$QType[6] = 1;
$QAnswers[6] = "6";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Width available for desks = 9 m - 3 \\( \\times \\) 1 = 6 m<br>Width of desk = 0.90 m<br> 6 m \\( \\div \\) 0.90 = 6.67<br>We need to round down because we cannot fit a seventh desk in the space.<br> <b>6</b> desks can be placed in a row across the classroom.";

$Q[7] = "A school decides to allocate a small room as a storage area. The room measures 4 m long by 2.7 m wide by 180 cm high. What is the volume of the room in cubic metres? Give your answer to 2 decimal places.";
$QType[7] = 1;
$QAnswers[7] = "19.44";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " square metres";
$Soln[7] = "Volume = 4 \\( \\times \\) 2.7 \\( \\times \\) 1.8 = <b>19.44</b> square metres.";

$Q[8] = "A teacher took a survey of the housing of the 30 students in her geography class. She plotted the data on a Venn diagram. Circle H represents the students who have ever lived in a house. Circle A represents the students who have ever lived in an apartment. <br> <img src='images/PracticeTest1b_2.jpg'> <br> How many of the students have ever lived in an apartment?";
$QType[8] = 1;
$QAnswers[8] = "18"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Students who have lived in an apartment = 8 + 10 = <b>18</b>";

$Q[9] = "A teacher took a survey of the housing of the 30 students in her geography class. She plotted the data on a Venn diagram. Circle H represents the students who have ever lived in a house. Circle A represents the students who have ever lived in an apartment. <br> <img src='images/PracticeTest1b_2.jpg'> <br> How many of the students have never lived in a house?";
$QType[9] = 1;
$QAnswers[9] = "11";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Students who have lived in a house = 11 + 8 = 19<br> Students who have never lived in a house = 30 - 19 = <b>11</b>";

$Q[10] = "A full time teaching load involves teaching 5 days per week. A teacher is offered a teaching position with a 0.6 load. How many full days per week teaching is this equivalent to?";
$QType[10] = 1;
$QAnswers[10] = "3";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " days per week";
$Soln[10]= "0.6 \\( \\times \\) 5 = <b>3</b>";

$Q[11] = "A person earns $1200 per week. They spend 30% of their earnings on rent, and $70 per week on food. How much money do they spend each week on rent? Give your answer to the nearest dollar.";
$QType[11] = 1;
$QAnswers[11] = "360";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "30% \\( \\times \\) $1200 = 30 \\( \\div \\) 100 \\( \\times \\) $1200 = $<b>360</b>";

$Q[12] = "A teacher hires a car with a fuel efficiency of 100 km per 9 L of petrol. The car has a 50 L petrol tank. The car has a full tank of petrol when the teacher collects it. She intends to drive it 840 km, and she is required to return it with a full tank of petrol. What is the minimum number of times that she will need to refuel the car?";
$QType[12] = 1;
$QAnswers[12] = "2";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Fuel consumed in 840 km = 840 \\( \\div \\) 100 \\( \\times \\) 9 L = 75.6 L.<br> After using the initial 50 L she will need to refill the car once to complete the journey and once more to return it with a full tank.<br> So the minimum number of refills is <b>2</b>.";

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