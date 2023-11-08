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

$Q[0] = "A rectangular prism shaped container has dimensions 10 cm \\( \\times \\) 20 cm \\( \\times \\) 15 cm. What is the volume of the container in cubic centimetres?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "3000";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " cm\\(^3\\)";
$Soln[0] = "10 \\(\\times\\) 20 \\(\\times\\) 15 = 3000<br>The volume is <b>3000</b> cm\\(^3\\).";

$Q[1] = "A rectangular prism shaped container has dimensions 10 cm \\( \\times \\) 20 cm \\( \\times \\) 15 cm. What is the volume of the container in litres?";
$QType[1] = 1;
$QAnswers[1] = "3";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " L";
$Soln[1] = "10 cm\\(\\times\\) 20 cm\\(\\times\\) 15 cm = 3000 cm\\(^3\\)<br>1 cm\\(^3\\) = 1 mL<br> 3000 cm\\(^3\\) = 3000 mL<br> 1000 mL = 1 L<br> 3000 mL = 3 L<br>The volume is <b>3</b> L\\(^3\\).";

$Q[2] = "There are 10 000 square metres in one hectare. An agricultural high school has a rectangular paddock measuring 1.2 km long by 750 m wide. How many hectares is the field?";
$QType[2] = 1;
$QAnswers[2] = "90";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " hectares";
$Soln[2] = "We are given a conversion between square metres and hectares, so let's first work in metres. <br> 1.2 km = 1200 m<br>Area of paddock = 1200 \\(\\times\\) 750 = 900 000 square metres.<br> 10 000 square metres = 1 hectare <br> 90 \\(\\times\\) 10 000 = 900 000 square metres = 90 \\(\\times\\) 1 hectare = 90 hectares. <br> The paddock is <b>90</b> hectares.";

$Q[3] = "The distance from Melbourne to Sydney along the Hume Highway is 842 km. What average driving speed is required to complete the journey in 12 hours? Give your answer to 1 decimal place.";
$QType[3] = 1;
$QAnswers[3] = "70.2"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = " km/h";
$Soln[3] = "speed = distance \\(\\div\\) time.<br> Average speed = 842 \\(\\div\\) 12 = 70.2 km/h";

$Q[4] = "A building is 60 m tall. A scale model is built in which the building model is 12 cm tall. What is the scale used in building the model?";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("1 cm represents 0.5 m", "1 cm represents 1 m","1 cm represents 2 m","1 cm represents 5 m");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "12 cm represents 60 m<br> 12 \\(\\div\\) 12 cm = 1 cm represents 60 \\(\\div\\) 12 m = 5 m<br> which is option <b>(d)</b>";

$Q[5] = "A bullet train travelled with an average speed of 280 km/h. The journey covered 840 km. The train departed at 5:56 am. At what time did it arrive at its destination?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("6:24 am","8:56 am","10:24 am","2:56 pm");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "time = distance \\(\\div\\) speed.<br> time = 840 \\(\\div\\) 280 = 3 hours.<br> 5:56 am + 3 hours = 8:56 am<br> which is option <b>(b)</b>";

$Q[6] = "How many milligrams are equivalent to 5 grams and 48 milligrams?";
$QType[6] = 1;
$QAnswers[6] = "5048";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " mg";
$Soln[6] = "1 g = 1000 mg<br>5 g = 5000 mg<br> 5000 + 48 mg = <b>5048</b> mg.";

$Q[7] = "Find the area of the shaded part of the frame shown.<br> <img src='images/BasicTest7_1.jpg'>";
$QType[7] = 1;
$QAnswers[7] = "4800";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " cm\\(^2\\)";
$Soln[7] = "Frame area = outside area - inside area<br>Outside area = 80 cm \\(\\times\\) 80 cm = 6400 cm\\(^2\\)<br>Inside area = 40 cm \\(\\times\\) 40 cm = 1600 cm\\(^2\\)<br>Frame area = 6400 - 1600 = <b>4800</b> cm\\(^2\\)";

$Q[8] = "Find the outside perimeter of the frame shown.<br> <img src='images/BasicTest7_1.jpg'>";
$QType[8] = 1;
$QAnswers[8] = "320"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " cm";
$Soln[8] = "Perimeter = 80 cm + 80 cm + 80 cm + 80 cm = <b>320</b> cm.";

$Q[9] = "A rectangle has a perimeter of 30 m and a width of 7 m. What is its length?";
$QType[9] = 1;
$QAnswers[9] = "8";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " m";
$Soln[9] = "Perimeter = length + width + length + width <br> 30 = 7 + 7 + width + width <br> 2 \\(\\times\\) width = 30 - 2 \\(\\times\\) 7 = 16<br> width = 8<br>The rectangle has a width of <b>8</b> m";

$Q[10] = "A physics class are studying densities of materials. They find that four cubic centimetres of Substance A weigh 60 grams. How many cubic centimetres of Substance A are required to make up 0.21 kg?";
$QType[10] = 1;
$QAnswers[10] = "14";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " cm\\(^3\\)";
$Soln[10]= "0.2 kg = 210 g <br> 4 cm\\(^3\\) weighs 60 g<br>4 \\(\\div\\) 60 cm\\(^3\\) weighs 1 g<br>4 \\(\\div\\) 60 \\(\\times\\) 210 cm = 14 cm\\(^3\\) weighs 210 g<br> <b>14</b> cm\\(^3\\) is required to make up 0.21 kg.";

$Q[11] = "A teacher has a wall measuring 1 m high by 4 m wide. Her class have done paintings on paper that is 25 cm high and 20 cm wide. What is the maximum number of paintings that can be displayed on the wall without any overlapping?";
$QType[11] = 1;
$QAnswers[11] = "80";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Dimensions of wall in centimetres: 100 cm high by 400 cm wide. <br> She can fit 100 \\(\\div\\) 25 = 4 paintings on top of each other.<br>The wall is 400 cm wide so she can fit 400 \\(\\div\\) 20 = 20 paintings side by side in each row.<br>Total number of paintings = 4 \\(\\times\\) 20 = <b>80</b>.";

$Q[12] = "how many kilograms are equivalent to 648 grams?";
$QType[12] = 1;
$QAnswers[12] = "0.648";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " kg";
$Soln[12] = "1000 g = 1 kg<br>1 g = 0.001 kg<br> 648 g = 648 \\(\\div\\) 1000 kg = <b>0.648</b> kg.";

$Q[13] = "Trains leave a country station every two hours and twelve minutes. The first train each day leaves at 5:00 am. If the last train leaves at 8:24 pm, how many trains depart from the station each day?";
$QType[13] = 1;
$QAnswers[13] = "8";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "Trains leave at the following times: 5:00 am, 7:12 am, 9:24 am, 11:36 am, 1:48 pm, 4:00 pm, 6:12 pm, 8:24 pm<br>This is <b>8</b> trains.";

$Q[14] = "In am/pm time, 2038 hours is equivalent to";
$QType[14] = 0;
$QAnswers[14] = "d";
$QOptions[14] = array("20:38 am","2:38 pm","6:38 pm","8:38 pm");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "To convert from 24 hour time to 12 hour time here, we need to write the time in hour:minute format and subtract 12 hours<br>2038 hours = 20 hours + 38 minutes = (20 - 12) hours + 38 minutes = 8 hours  pm + 38 minutes = 8:38 pm ";

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