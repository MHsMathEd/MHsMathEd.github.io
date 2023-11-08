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

$Q[0] = "A school orders a rubbish removal service. The cost of the service is determined by the weight of the rubbish. It costs $250 to remove 100 kg of waste. The waste truck is weighed when it is full of rubbish and when it is empty. The empty truck weighs 3 tonnes. When the truck is loaded up with the school's rubbish, it weighs 4.2 tonnes. What is the cost to remove the school's rubbish?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "3000";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Weight of rubbish = 4.2 - 3 = 1.2 tonnes = 1.2 \\(\\times\\) 1000 kg = 1200 kg<br>Number of lots of 100 kg of rubbish = 1200 \\(\\div\\) 100 = 12<br>Cost = 12 \\(\\times\\) $250 = $3000<br>It will cost $<b>3000</b> to remove the school's rubbish.";

$Q[1] = "An average person eats 90 g of rice in a meal. There is a charity website (www.freerice.com) that asks multiple choice questions on a topic of your choice (for example, English vocab, multiplication tables, etc). For each question that you get right, the site donates 10 grains of rice to the World Food Program. If each grain of rice weighs 30 milligrams, how many questions does do you need to answer correctly to feed 1 person a 90 g meal of rice?";
$QType[1] = 1;
$QAnswers[1] = "300";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "1 question correct provides 10 grains = 10 \\(\\times\\) 30 mg = 300 mg = 300 \\(\\div\\) 1000 g = 0.3 g of rice<br> Number of 0.3 g that fit into 90 g = 90 \\(\\div\\) 0.3 = 300<br>You need to correctly answer <b>300</b> questions to donate 90 g of rice.";

$Q[2] = "An XPT train left Sydney Central station at 6:38 am. It travelled the first 50 km of the trip at an average of 60 km/h. It then travelled the remaining 200 km of its trip and arrived at its destination at 9:28 am. What was its average speed for the last 200 km?";
$QType[2] = 1;
$QAnswers[2] = "100";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " km/h";
$Soln[2] = "Trip Part 1<br> time = distance \\(\\div\\) speed = 50 km \\(\\div\\) 60 km/h = 5/6 hour = 5/6 \\(\\times\\) 60 minutes = 50 minutes<br>Trip part 1 ended at 6:38 am + 50 minutes = 7:28 am.<br>Trip Part 2<br>Time for trip part 2 = 9:28 am - 7:28 am = 2 hours<br>Speed = Distance \\(\\div\\) Time = 200 \\(\\div\\) 2 = 100 km/h<br>The average speed for the last 200 km was <b>100</b> km/h.";

$Q[3] = "The length of a rectangular field is 100 m. The length of the perimeter of the field is 320 m. How wide is the field?";
$QType[3] = 1;
$QAnswers[3] = "60"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " m";
$Soln[3] = "Perimeter = length + width + length + width<br>320 = 100 + 100 + width + width<br> 2 \\(\\times\\) width = 320 - 100 - 100 = 120<br> Field width = 120 \\(\\div\\) 2 = <b>60</b> m";

$Q[4] = "A wooden rectangular photo frame has outer dimensions 26 cm by 20 cm. The wood forming a border around the picture in the frame has an area of 220 cm\\(^2\\). <br> <img src='images/BasicTest10_1.jpg'> <br> If the width of the photo area is 15 cm, what is its length?";
$QType[4] = 1;
$QAnswers[4] = "20";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = " cm";
$Soln[4] = "Area of whole photo frame = 26 \\(\\times\\) 20 = 520 cm\\(^2\\)<br>Area of photo area = whole frame area - wood border area = 520 - 220 = 300 cm\\(^2\\)<br>Photo area = length \\(\\times\\) width<br>300 = length \\(\\times\\) 15<br>length = 300 \\(\\div\\) 15 = 20<br>The photo area has a length of <b>20</b> cm.";

$Q[5] = "A pool is 80% full. Its length is 50 m and its width is 20 m. The pool requires an additional 400 000 L in order to be full. What is the average depth of the pool?";
$QType[5] = 1;
$QAnswers[5] = "2";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " m";
$Soln[5] = "First note that 1000 L = 1 m\\(^3\\)<br>Percentage of pool that is empty = 100% - 805 = 20%<br>400 000 L are needed to fill 20% of the pool<br>5 \\(\\times\\) 400 000 L = 2 000 000 L (2 million litres) are needed to fill 5 \\(\\times\\) 20% = 100% of the pool<br>Pool volume = 2 000 000 L = 2 000 000 \\(\\div\\) 1000 = 2 000 m\\(^3\\)<br>Volume = length \\(\\times\\) width \\(\\times\\) depth<br>2 000 m\\(^3\\) = 50 m \\(\\times\\) 20 m \\(\\times\\) depth<br> Depth = 2000 \\(\\div\\) 50 \\(\\div\\) 20 = 2<br> The average depth of the pool is <b>2</b> m.";

$Q[6] = "Turf is sold in rectangular pieces 1 m long by 70 cm wide. Each piece costs $3.50. Buyers must purchase a whole number of pieces. A school wants to lay turf on their rectangular playing field which measures 100 m by 60 m. What will be the cost of the turf?";
$QType[6] = 1;
$QAnswers[6] = "30002";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "Field dimensions in metres: 100 m by 60 m<br>Turf dimensions in metres: 1 m by 0.7 m<br>Field area in square metres = 100 \\(\\times\\) 60 = 6 000 square metres<br>Area of turf = 1 \\(\\times\\) 0.7 = 0.7 square metres<br> Number of pieces of turf required = 6 000 \\(\\div\\) 0.7 = 8,571.42857<br> We need to round up or we won't have enough turf. So the school need to buy 8572 pieces of turf.<br>Cost = $3.50 \\(\\times\\) 8572 = $30 002.<br>The cost of the turf will be $<b>30 002</b>";

$Q[7] = "The flying distance from Brisbane to Sydney is 760 km. A Brisbane teacher wants to watch her school netball team compete in Sydney. Planes travel from Brisbane to Sydney at an average speed of 480 km/h. The teacher needs to allow 2 hours from the time the flight lands until the start of the game to ensure that she arrives in time. If the netball game is at 1:30 pm, what is the latest that the teacher's flight can leave Brisbane?";
$QType[7] = 0;
$QAnswers[7] = "d";
$QOptions[7] = array("12:05 pm","11:20 am","10:48 am","9:55 am");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Latest the teacher can arrive in Sydney = 1:30 pm - 2 hours = 11:30 am<br>Flight time = Distance \\(\\div\\) Speed = 760 \\(\\div\\) 480 = 1.583 hours = 1 hour and 0.583 \\(\\times\\) 60 minutes = 1 hour and 35 minutes.<br>Latest the flight can leave Brisbane = 11:30 am - 1:35 = 9:55 am, which is option <b>(d)</b>.";

$Q[8] = "A paver measuring 40 cm by 40 cm weighs 2 kg. What weight of pavers is required to pave a 4 square metre area?";
$QType[8] = 1;
$QAnswers[8] = "50"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " kg";
$Soln[8] = "Paver dimensions in metres: 0.4 by 0.4 m<br>Paver area = 0.4 \\(\\times\\) 0.4 = 0.16 m\\(^2\\)<br>Number of pavers = 4 \\(\\div\\) 0.16 = 25<br>Weight of pavers = 2 \\(\\times\\) 25 = <b>50</b> kg<br>";

$Q[9] = "Find the perimeter of the building shown <br> <img src='images/BasicTest10_2.jpg'>";
$QType[9] = 1;
$QAnswers[9] = "8.8";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " m";
$Soln[9] = "Perimeter in metres = 1.5 + 0.5 + 0.4 + 0.9 + 0.4 + 0.5 + 1.5 + 0.5 + 0.6 + 0.9 + 0.6 + 0.5 = 8.8 m";

$Q[10] = "Find the area of the building shown <br> <img src='images/BasicTest10_2.jpg'>";
$QType[10] = 1;
$QAnswers[10] = "1.95";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " m<sup>2</sup>";
$Soln[10]= "Area = 1.5 \\(\\times\\) 0.5 + 1.5 \\(\\times\\) 0.5 + 0.9 \\(\\times\\) (1.5 - 0.6 - 0.4) = 1.95 m<sup>2</sup>";

$Q[11] = "How many minutes are there in 1.2 hours?";
$QType[11] = 1;
$QAnswers[11] = "72";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " minutes";
$Soln[11] = "1 hour = 60 minutes<br>1.2 hours = 1.2 \\(\\times\\) 60 minutes = <b>72</b> minutes.";

$Q[12] = "For a formal examination, each desk must be placed 1 m away from each desk beside it, and 1 m away from the desk in front of it and 1 m away from the desk behind it. The desks are 1 m wide and 50 cm front-to-back. There needs to be a 2 m gap between the walls of the hall and the nearest row of desks. If the hall is 30 m long and 15 m wide, how many desks can be placed in it for the examination?";
$QType[12] = 1;
$QAnswers[12] = "108";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Running across the width of the hall, we have a gap from 0-2 m and a gap from 13-15 m. We can place desks at 2-3 m, 4-5 m, 6-7 m, 8-9 m, 10-11 m, 12-13 m<br>This equates to 6 desks placed across the hall.<br>Running the length of the hall, we have a gap from 0-2 m, and a gap from 80-30 m. We can place desks at 2-2.5 m, 3.5-4 m, 5-5.5 m, 6.5-7 m, 8-8.5 m, 9.5-10 m, 11-11.5 m, 12.5-13 m, 14-14.5 m, 15.5-16 m, 17-17.5 m, 18.5-19 m, 20-20.5 m, 21.5-22 m, 23-23.5 m, 24.5-25 m, 26-26.5 m, 27.5-28 m.<br>This equates to 18 desks.<br><br>Another way to do this is:  Available length = 30 - 2 - 2 - 0.5 = 25.5 m<br> Add 1 desk at 2-2.5 m. <br>Space required for remaining desks = 1 m gap + 0.5 m desk = 1.5 m<br>Number of desks = 1 (this is the one at 2 m) + 25.5 \\(\\div\\) 1.5 = 18<br><br>Total number of desks = 6 \\(\\times\\) 18 = <b>108</b> desks.";

$Q[13] = "If a student runs at 15 km/hour, how many minutes will it take her to run 400 m?";
$QType[13] = 1;
$QAnswers[13] = "1.6";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " minutes";
$Soln[13] = "400 m = 0.4 km<br>1 hour = 60 minutes<br>Student runs 15 km in 60 minutes hour<br>Student runs 0.4 km in 0.4 \\(\\times\\) 60 \\(\\div\\) 15 = <b>1.6</b> minutes.";

$Q[14] = "A class excursion involves catching a train which travels 10 km at an average speed of 60 km/h and then walking 500 m at an average speed of 4 km/h. How many minutes does the trip take?";
$QType[14] = 1;
$QAnswers[14] = "17.5";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = " minutes";
$Soln[14] = "Train trip time = distance \\(\\div\\) speed = 10 \\(\\div\\) 60 = \\(1\\over 6\\) hour = \\(1\\over 6\\) \\(\\times\\) 60 minutes = 10 minutes<br> Walking time = distance \\(\\div\\) speed = 0.5 km \\(\\div\\) 4 = \\(1\\over 8\\) hour = \\(1\\over 8\\) \\(\\times\\) 60 minutes = 7.5 minutes<br>Total trip time = 10 + 7.5 = <b>17.5</b> minutes.";

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