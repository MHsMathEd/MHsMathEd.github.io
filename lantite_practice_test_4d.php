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

$Q[0] = "A school decides to buy some egg laying chickens. The space allocated for the chickens is 15 square metres. They want the chickens to be able to free-range, with an average of no more than 1 chicken in every 1.75 m<sup>2</sup>. How many chickens can the school have?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "8";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Max number of chickens = area \\(\\div\\) area per chicken = 15 \\(\\div\\) 1.75 = 8.57 chickens.<br>We need to round this down: if we rounded up there would be more than one chicken per 1.75 m<sup>2</sup>.<br>So the school can have <b>8</b> chickens.";

$Q[1] = "<br><br><img src='images/PracticeTest4d_1.jpg'><br><br>What temperature is shown on the thermometer?";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("21°C","22°C","65°C","70°C");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "The temperature is 21°C, option <b>(a)</b>";

$Q[2] = "A teacher bought two dozen workbooks for $37.20. What was the average cost per book? Give your answer to the nearest cent.";
$QType[2] = 1;
$QAnswers[2] = "1.55";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "24 books cost $37.20<br>1 book costs $37.20 \\(\\div\\) 24 = $<b>1.55</b>";

$Q[3] = "A school needs to buy 1000 rolls for a school barbeque. Four local bakeries offer the following pricings. Which bakery offers the best value for money for the school?<br>
<table>
<tr><th>Bakery</th><th>Pricing</th></tr>
<tr><td>A</td><td>40 cents per roll</td></tr>
<tr><td>B</td><td>6 rolls for $2.50</td></tr>
<tr><td>C</td><td>10 rolls for $3.80</td></tr>
<tr><td>D</td><td>One dozen rolls for $5.00</td></tr>
</table>";
$QType[3] = 0;
$QAnswers[3] = "c"; 
$QOptions[3] = array("A","B","C","D");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "<br><table>
<tr><th>Bakery</th><th>Pricing per roll</th></tr>
<tr><td>A</td><td>40 cents</td></tr>
<tr><td>B</td><td>$2.50 \\(\\div\\) 6 = 41.67 cnts</td></tr>
<tr><td>C</td><td>$3.80 \\(\\div\\) 10 = 38 cents</td></tr>
<tr><td>D</td><td>$5.00 \\(\\div\\) 12 = 41.67 cents</td></tr>
</table><br>Bakery <b>C</b> offers the best value for money.";

$Q[4] = "A teacher’s superannuation increases by 5% per year. The teacher has $8543.60 in superannuation at the start of the year. At the end of the year, the interest payable is calculated and added to the account. In addition, after this, the teacher adds another $1000 to her account. How much money does she have in her superannuation at the end of the year?";
$QType[4] = 1;
$QAnswers[4] = "9970.78";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "Amount of superannuation at the end of the year = 105% \\(\\times\\) $8543.60 + $1000 = $<b>9970.78</b>";

$Q[5] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>
What was the mean number of pages read by the students when they were in year 4?";
$QType[5] = 1;
$QAnswers[5] = "175";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Mean = (240 + 300 + 100 + 60) \\(\\div\\) 4 = <b>175</b> pages.";

$Q[6] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>What was the median number of pages read by student 4?";
$QType[6] = 1;
$QAnswers[6] = "135";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Median = middle of 60, 90, 180, 240, which is halfway between 90 and 180 = 90 + (180 - 90) \\(\\div\\) 2 = <b>135</b> pages.";

$Q[7] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>Which student had the greatest range in the number of pages they read?";
$QType[7] = 0;
$QAnswers[7] = "c";
$QOptions[7] = array("Student 1","Student 2","Student 3","Student 4");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "<br>Student 1 range = 480 - 120 = 360<br>Student 2 range = 300 - 300 = 0<br>Student 3 range = 400 - 30 = 370<br>Student 4 range = 240 - 60 = 180<br>Student 3 has the greatest range - option <b>(c)</b>";

$Q[8] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>Overall, what was the modal number of pages read by these four students?";
$QType[8] = 1;
$QAnswers[8] = "300"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Mode = most frequent score = <b>300</b>";

$Q[9] = "A plan of a town is shown. <br><br><img src='images/PracticeTest4d_2.jpg'><br><br> Which of the following sets of directions will take you from the corner of Queenbeyan Rd and Katherine St to the corner of Broome Rd and Albany St?";
$QType[9] = 0;
$QAnswers[9] = "c";
$QOptions[9] = array("Head along Katherine St. Turn right, turn left, turn right, turn right.","Head along Katherine St. Turn right, turn right, turn left, turn left.","Head along Katherine St. Turn left, turn right, turn right.","Head north along Queenbeyan Rd. Turn left, turn right, turn left.");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Option <b>(c)</b>: Head along Katherine St. Turn left, turn right, turn right.";

$Q[10] = "A plan of a town is shown. <br><br><img src='images/PracticeTest4d_2.jpg'><br><br>What is the area of the school?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("94 000 m<sup>2</sup>","136 000 m<sup>2</sup>","287 600 m<sup>2</sup>","302 500 m<sup>2</sup>");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Area = 550 m \\(\\times\\) 550 m = 302 500 m<sup>2</sup>, which is option <b>(d)</b>";

$Q[11] = "The 280 students in stage 4 at a particular school sat an assessment. The marks were recorded in the following box and whisker plot.<br><br><img src='images/PracticeTest4d_3.jpg'><br><br>What was the median mark for the assessment?";
$QType[11] = 1;
$QAnswers[11] = "62";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "From the graph, the median mark = <b>62</b>";

$Q[12] = "The 280 students in stage 4 at a particular school sat an assessment. The marks were recorded in the following box and whisker plot.<br><br><img src='images/PracticeTest4d_3.jpg'><br><br>How many students scored less than 50%?";
$QType[12] = 0;
$QAnswers[12] = "d";
$QOptions[12] = array("25","50","62","70");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "One quarter of the students scored less than 50%. Since there were 280 students, <br> Number of students scoring less than 50% = \\(1\\over 4\\) \\(\\times\\) 280 = 70 students, which is option <b>(d)</b>.";

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