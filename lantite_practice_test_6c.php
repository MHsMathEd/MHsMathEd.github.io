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

$Q[0] = "A Japanese class were studying the cost of living in Tokyo. They found that a night’s accommodation in a modest Tokyo hotel was 11 775 yen. The exchange rate at the time was $1AU = 80.1 Japanese Yen. What is the cost of this night’s accommodation in Australian dollars? Give your answer to the nearest cent.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "147.00";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "80.1 yen = $1<br>1 yen = $1 \\(\\div\\) 80.1<br> 11775 yen = $1 \\(\\div\\) 80.1 \\(\\times\\) 11775 = $<b>147.00</b>";

$Q[1] = "A teacher calculated that the cost of staying in a modest hotel in Tokyo was around $147 a night. The cost of staying in a similar hotel in Adelaide was $88. How much more expensive is the Tokyo hotel than the Adelaide hotel?";
$QType[1] = 1;
$QAnswers[1] = "59";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Cost difference = $147 - $88 = $<b>59</b>";

$Q[2] = "A Japanese class were researching how much they could buy in Tokyo for AU$50. They found that the exchange rate was 80.10 Japanese Yen for 1 Australian dollar. The price of a burger meal was 801 yen. How much change would they have – in Australian dollars - from their $50 after buying a burger meal in Tokyo?";
$QType[2] = 1;
$QAnswers[2] = "40";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "80.1 yen = $1<br>1 yen = $1 \\(\\div\\) 80.1<br>801 yen = $1 \\(\\div\\) 80.1 \\(\\times\\) 801 = $10<br> Change from $50 = $50 - $10 = $<b>40</b>";

$Q[3] = "A class was aiming to earn $450 from the school walkathon. There were 30 students in the class. The walkathon was 5 laps of the school. On average, how much money would each student have to earn per lap in order for the class to achieve its target? Give your answer in dollars, correct to the nearest cent.";
$QType[3] = 1;
$QAnswers[3] = "3"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Average amount per student = $450 \\(\\div\\) 30 = $15<br>Average amount per student per lap = $15 \\(\\div\\) 5 = $<b>3</b>";

$Q[4] = "A box holds 50 pencils. 15 of the pencils are lead pencils, the rest are coloured pencils. What fraction of the pencils are lead pencils?";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("\\(3 \\over 5 \\)","\\(3 \\over 10 \\)","\\(7 \\over 5 \\)","\\(7 \\over 10 \\)");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Fraction of lead pencils = \\(15\\over 50\\) = \\(3\\over 10\\), option <b>(b)</b>";

$Q[5] = "A teacher bought a book during a sale when 30% was taken off the marked price. If the original price was $80, how much did the teacher pay?";
$QType[5] = 1;
$QAnswers[5] = "56";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "Percentage of price paid by the teacher = 100 - 30% = 70%<br>Amount paid by the teacher = 70 \\(\\div\\) 100 \\(\\times\\) $80 = $<b>56</b>";

$Q[6] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest6c_1.jpg'><br><br>What was the median final mark, as a percentage?";
$QType[6] = 0;
$QAnswers[6] = "c";
$QOptions[6] = array("10%","15.5%","77.5%","90%");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Marks in order: 10, 12, 14, 15, 16, 16, 17, 18<br>The middle (median) mark is 15.5<br>As a percentage this is 15.5 \\(\\div\\) 20 \\(\\times\\) 100% = 77.5%, option <b>(c)</b>";

$Q[7] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest6c_1.jpg'><br><br>What was the modal number of references used?";
$QType[7] = 1;
$QAnswers[7] = "5";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "The mode for the number of references is <b>5</b>";

$Q[8] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest6c_1.jpg'><br><br>How many students achieved more than 75% for their final mark?";
$QType[8] = 1;
$QAnswers[8] = "4"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "75% corresponds to 15 out of 20. <b>4</b> students got final marks of more than 15.";

$Q[9] = "The ratio of 9-year-olds to 10-year-olds in a class was 4:5. Three more 9-year-olds joined the class, which meant there were 15 9-year-olds in the class. What is the ratio of 9-year-olds to 10-year-olds now?";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("1:1","1:2","1:3","1:4");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "New number of 9-year-olds = 15<br> Old number of 9-year-olds = 15 - 3 = 12<br>A ratio of 4:5 means that the class has been divided into 4 + 5 = 9 parts, and 4 of those parts are 9-year-olds. <br> 4 parts of the old class = 12 students, so 1 part = 3 students. <br>Number of 10-year-olds = 3 \\(\\times\\) 5 = 15 students<br>Ratio in new class = 15:15, = 1:1, option <b>(a)</b>";

$Q[10] = "At a particular school, school reports placed student performance into achievement bands. The overall marks required to meet each band in mathematics for year 9 students are given in the table below.<br>
<table>
<tr><th>Band</th><th>Mark</th></tr>
<tr><td>A</td><td>80-100%</td></tr>
<tr><td>B</td><td>65-79%</td></tr>
<tr><td>C</td><td>50-64%</td></tr>
<tr><td>D</td><td>0-50%</td></tr>
</table><br>
Students were assessed via two assessment tasks. Each task was worth 50%. One particular student scored 48/60 in the first task, and 53/70 in the second task. What performance band did the student achieve?";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("A","B","C","D");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Total student mark = 48 \\(\\div\\) 60 \\(\\times\\) 50 + 53 \\(\\div\\) 70 \\(\\times\\) 50 = 40 + 37.8 = 77.8, which corresponds to band B, option <b>(b)</b>";

$Q[11] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part cordial to 4 parts water. If the teacher wants to make up 10 litres of drink, how much water needs to be used?";
$QType[11] = 1;
$QAnswers[11] = "8";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " L";
$Soln[11] = "1 litre of cordial makes 1 + 4 = 5 litres of drink<br>10 L \\(\\div\\) 5 L = 2, so the teacher needs to make 2 batches, each with 4 L of water. <br>Total water = 2 \\(\\times\\) 4 L = <b>8</b> L";

$Q[12] = "A school storeroom has dimensions 4 m x 4 m x 2 m. The Art department have 24 m<sup>3</sup> of materials to store in the room. What percentage of the storeroom space will this use up?  ";
$QType[12] = 1;
$QAnswers[12] = "75";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "%";
$Soln[12] = "Volume of storeroom = 4 \\(\\times\\) 4 \\(\\times\\) 2 = 32 m<sup>3</sup><br>Percentage of space used = 24 \\(\\div\\) 32 \\(\\times\\) 100% = <b>75</b>%";


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