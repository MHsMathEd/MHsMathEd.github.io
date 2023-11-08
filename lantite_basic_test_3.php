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

$Q[0] = "A teacher bought enough sushi for lunch for ten staff members. This cost $65.70. What would be the cost to buy sushi for eighteen staff members?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "118.26";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "The cost for one person is $65.70 \\( \\div \\) 10 = $6.57. <br> The cost for 18 people is $6.57 \\( \\times \\) 18 =  $<b>118.26</b>.";

$Q[1] = "Four tenants in a share house each pay $120 rent per week. A new tenant joins the house. If the rent is now split equally amongst the five tenants, how much does each tenant pay per week?";
$QType[1] = 1;
$QAnswers[1] = "96";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "The total weekly rent is $120 \\( \\times \\) 4 = $480. <br> So each of the five tenants will pay. <br> $480 \\( \div \\) 5 = $<b>96</b> per week.";

$Q[2] = "If twelve students working at exactly the same rate can clear the litter from three identical playgrounds in 20 minutes, how many students are needed to clear the litter from six such playgrounds in half an hour?";
$QType[2] = 1;
$QAnswers[2] = "16";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Students to clear 3 playgrounds in 20 minutes = 12 <br> Students to clear 1 playground in 20 minutes = 12 \\( \div \\) 3 = 4 <br> Students to clear 1 playground in 10 minutes = 4 \\( \\times \\) 2 = 8 <br> Students to clear 1 playground in 30 minutes = 8 \\( \\div \\) 3 = \\( 8 \\over 3 \\) <br> Students to clear 6 playgrounds in 30 minutes = \\(8 \\over 3 \\) \\( \\times \\) 6 = <b>16</b> students.";

$Q[3] = "A teacher was teaching her students about fractions. She spent half an hour on the topic on Monday, three quarters of an hour on Tuesday, 40 minutes on Wednesday, half an hour on Thursday and 20 minutes on Friday. How many hours did she spend on the topic that week?";
$QType[3] = 1;
$QAnswers[3] = "2.75"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " hours";
$Soln[3] = "First note that the 40 minutes on Wednesday and the 20 minutes on Friday add to give 1 hour. So the time spent was <br> 0.5 + 0.75 + 0.5 + 1 = <b>2.75</b> hours";

$Q[4] = "A teacher was teaching her students about decimals. She spent half an hour on the topic on Monday, three quarters of an hour on Tuesday, \\(2 \\over 3\\) hour on Wednesday, half an hour on Thursday and one quarter of an hour on Friday. How many minutes did she spend on the topic that week?";
$QType[4] = 1;
$QAnswers[4] = "160";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " minutes";
$Soln[4] = "Time spent = \\( 1 \\over 2 \\) \\( \\times \\) 60 + \\( 3 \\over 4 \\) \\( \\times \\) 60 + \\( 2 \\over 3 \\) \\( \\times \\) 60 \\( 1 \\over 2 \\) \\( \\times \\) 60 + \\( 1 \\over 4 \\) \\( \\times \\) 60 <br> = 30 + 45 + 40 + 30 + 15 = <b>160</b> minutes.";

$Q[5] = "Two year 2 classes brought in their empty recyclable milk cartons. Class 2A filled 2\\(1 \\over 5 \\) crates while class 2M filled 3\\(1 \\over 2 \\) identical crates. How many crates did they fill altogether?";
$QType[5] = 0;
$QAnswers[5] = "d";
$QOptions[5] = array("5\\(1 \\over 7 \\)","5\\(2 \\over 7 \\)","5\\(1 \\over 5 \\)","5\\(7 \\over 10 \\)");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "2\\(1 \\over 5 \\) + 3\\(1 \\over 2 \\) = 2 + 3 + \\(1 \\over 5 \\) \\( \\times \\) \\(2 \\over 2 \\) + \\(1 \\over 2 \\) \\( \\times \\) \\(5 \\over 5 \\) = 5 + \\( (1 \\times 2) \\over (5 \\times 2) \\) + \\( (1 \\times 5) \\over (5 \\times 2) \\) = 5 + \\( 2 \\over 10 \\) + \\(5 \\over 10 \\) = 5\\( 7 \\over 10 \\) <br> which is answer <b>(d)</b>.";

$Q[6] = "A teacher bought a 50 m roll of string. She used 12\\(1 \\over 4 \\) m to hang class paintings and 8\\(1 \\over 2 \\) to hang the students' collages. How much string remained on the roll?";
$QType[6] = 0;
$QAnswers[6] = "a";
$QOptions[6] = array("29\\(1 \\over 4 \\)","29\\(3 \\over 4 \\)","30\\(1 \\over 4 \\)","30\\(3 \\over 4 \\)");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "12\\(1 \\over 4 \\) + 8\\(1 \\over 2 \\) = 12 + 8 + \\(1 \\over 4 \\) + \\(1 \\over 2 \\) \\( \\times \\) \\(2 \\over 2 \\) = 20\\(3 \\over 4 \\). <br> 50 - 20\\(3 \\over 4 \\) = 29\\(1 \\over 4 \\) <br> which is answer <b>a</b>";

$Q[7] = "Two students work together to complete a two-page worksheet. Each page had 20 questions. The first student completes \\(4 \\over 5 \\) of the questions on the first page and \\(3 \\over 10 \\) of the questions on the second page. What percentage of the questions did the second student complete?";
$QType[7] = 1;
$QAnswers[7] = "45";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "%";
$Soln[7] = "On the first sheet the second student completed \\(1 \\over 5 \\) of 20 questions = 4 questions. <br> On the second sheet the student completed \\(7 \\over 10 \\) of 20 questions = 14 questions. <br> So the second student completed 18 of 40 questions. <br> As a percentage, this is 18 \\( \\div \\) 40 \\( \\times \\) 100 = <b>45</b>%";

$Q[8] = "Two thirds of the students in stage 3 are going on the school camp. If there are 96 students in the stage, how many students are not going to the camp?";
$QType[8] = 1;
$QAnswers[8] = "32"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Proportion of students not attending camp = 1 - \\( 2 \\over 3 \\) = \\( 1 \\over 3 \\) <br> \\( 1 \\over 3 \\) \\( \\times \\) 96 = <b>32</b> students who are not attending the camp.";

$Q[9] = "A school buys 600 cans of softdrink for the school barbecue. Two fifths of the cans are lemonade. How many cans are not lemonade flavoured?";
$QType[9] = 1;
$QAnswers[9] = "360";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Proportion of cans that are not lemonade = 1 - \\( 2 \\over 5 \\) = \\( 3 \\over 5 \\) <br> \\( 3 \\over 5 \\) \\( \\times \\) 600 = <b>360</b> cans that are not lemonade flavoured.";

$Q[10] = "A science teacher has a recipe for slime that uses \\( 1 \\over 4 \\) cup of glue for every batch. The teacher has 10 cups of glue. How many batches of slime can be made?";
$QType[10] = 1;
$QAnswers[10] = "40";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "10 cups \\( \\div \\) \\( 1 \\over 4 \\) = <b>40</b> batches of slime can be made from 10 cups. <br> Another way of looking at this is to observe that since 1 batch requires \\( 1 \\over 4 \\) cup, 4 batches can be made from 1 cup, and so 4 \\( \\times \\) 10 batches = 40 batches can be made from 10 cups.";

$Q[11] = "The school A division soccer team won one tenth of its matches, and drew three fifths of its matches. What fraction of the team's matches were lost?";
$QType[11] = 0;
$QAnswers[11] = "b";
$QOptions[11] = array("\\(1 \\over 10 \\)","\(3 \\over 10 \\)","\\(2 \\over 5 \\)","\\(3 \\over 5 \\)");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "1 - \\( 1 \\over 10 \\) - \\( 3 \\over 5 \\) <br> = 1 - \\( 1 \\over 10 \\) - \\( 3 \\over 5 \\) \\( \\times \\) \\( 2 \\over \\) 2 <br> = \\( 10 \\over 10 \\)- \\( 1 \\over 10 \\) - \\( 6 \\over 10 \\) <br> = \\( 3 \\over 10 \\) of the matches were lost. This corresponds to answer <b>b</b>";

$Q[12] = "In a school of 810 students, five ninths trave by bus, two ninths travel by car and the rest walk. How many students walk to school?";
$QType[12] = 1;
$QAnswers[12] = "180";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Proportion of students who walk = 1 - (\\( 5 \\over 9 \\) + \\( 2 \\over 9 \\) ) = \\( 2 \\over 9 \\) <br> \\( 2 \\over 9 \\) \\( \\times \\) 810 = <b>180</b> students";

$Q[13] = "A school watertank was three fifths full. Then there was a large rainstorm that added 1500L and completely filled the tank. How many litres of water were in the tank before the rainstorm?";
$QType[13] = 1;
$QAnswers[13] = "2250";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " L";
$Soln[13] = "Proportion of the tank that was empty before the rainstorm = 1 - \\( 3 \\over 5 \\) = \\( 2 \\over 5 \\). <br> So 1500 L corresponds to \\( 2 \\over 5 \\) of the tank. <br> \\( 1 \\over 5 \\) of the tank = 1500 \\( \\div \\) 2 = 750 L <br> The amount originally in the tank = \\( 3 \\over 5 \\) = 750 L \\( \\times \\) 3 = 2250 L";

$Q[14] = "Two students, Lachlan and Scott, decorated 16 cupcakes together to sell at the school fundraiser. Lachlan worked faster than Scott. For every cake that Scott decorated, Lachlan decorated three. How many cupcakes did Lachlan decorate?";
$QType[14] = 1;
$QAnswers[14] = "12";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "Lachlan and Scott decorated the cakes in the ratio of 3:1. <br> The batch of cupcakes was divided into 3+1 = 4 parts. <br> One part consists of 16 \\( \\div \\) 4 = 4 cupcakes. <br> Lachlan decorated 3 parts = 4 \\( \\times \\) 3 = <b>12</b> cupcakes.";

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