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

$Q[0] = "The graph below (sourced from the Australian Bureau of Statistics) shows the various reasons why internet users used the internet over two 2 year periods.<br><img src='images/PracticeTest3a_1.jpg'><br>True/False: The use of Internet to access Health services approximately doubled from 2014-15 to 2016-17";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "a";
$QOptions[0] = array("True","False","N/A","N/A");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "The use of Internet to access Health services went from slightly below 25% in 2014-15 to slightly below 50% in 2016-17, so the statement is True <b>(a)</b>";

$Q[1] = "The graph below (sourced from the Australian Bureau of Statistics) shows the various reasons why internet users used the internet over two 2 year periods.<br><img src='images/PracticeTest3a_1.jpg'><br>True/False: More than half of Internet users have accessed the Internet to purchase goods or services.";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("True","False","N/A","N/A");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Around 60-70% of Internet users have used it to purchase goods or services, so the statement is True <b>(a)</b>.";

$Q[2] = "If 8 hours of tutoring cost $520.00, how much would 3 hours of tutoring at the same rate cost?";
$QType[2] = 1;
$QAnswers[2] = "195";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "8 hours cost $520.00<br>1 hour costs $520.00 \\(\\div\\) 8 = $65.00<br>3 hours cost 3 \\(\\times\\) $65 = $<b>195</b>";

$Q[3] = "A teacher decided to record whether her students brought along a fruit or a vegetable for sip and crunch on a particular day. Every student brought fruit or vegetables for sip and crunch that day.<br><img src='images/PracticeTest3a_2.jpg'><br>How many students brought fruit?";
$QType[3] = 1;
$QAnswers[3] = "20"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "18 students brought only fruit. 2 students brought fruit and vegetables.<br>Altogether, <b>20</b> students brought fruit.";

$Q[4] = "A teacher decided to record whether her students brought along a fruit or a vegetable for sip and crunch on a particular day. Every student brought fruit or vegetables for sip and crunch that day.<br><img src='images/PracticeTest3a_2.jpg'><br>How many students were in the class?";
$QType[4] = 1;
$QAnswers[4] = "28";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Number of students = 18 + 2 + 8 = <b>28</b>";

$Q[5] = "A teacher spent 3.2 hours teaching division to students in one week. She spent 45 min on Monday, 20 minutes on Tuesday, 30 minutes on Wednesday and Thursday. How many minutes did she spend teaching division on Friday?";
$QType[5] = 1;
$QAnswers[5] = "67";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " minutes";
$Soln[5] = "3.2 hours = 3.2 \\(\\times\\) 60 minutes = 192 minutes<br>192 - 45 - 20 - 30 - 30 = 67<br><b>67</b> minutes were spent teaching division on Friday.";

$Q[6] = "A school wishes to buy some new sporting equipment. The costs to buy the equipment from a local distributor and directly from the New Zealand manufacturer are given in the following table.<br>
<table>
<tr><th>Supplier</th><th>Price per Unit</th><th>Delivery Charges</th></tr>
<tr><td>Local distributor</td><td>AU$78</td><td>AU$30</td></tr>
<tr><td>New Zealand manufacturer</td><td>NZ$56</td><td>NZ$100</td></tr>
</table><br>
The official exchange rate at the time is AU$1 = NZ$1.07<br>
How much will it cost in Australian dollars to buy 50 units from the New Zealand manufacturer?<br>Give your answer to the nearest cent.";
$QType[6] = 1;
$QAnswers[6] = "2710.28";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "AU$";
$suffix[6] = "";
$Soln[6] = "Cost in NZ dollars = 50 \\(\\times\\) NZ$56 + NZ$100 = NZ$2900<br> Cost in Australian dollars = NZ$2900 \\(\\div\\) 1.07 = AU$<b>2710.28</b>";

$Q[7] = "A school wishes to buy some new sporting equipment. The costs to buy the equipment from a local distributor and directly from the New Zealand manufacturer are given in the following table.<br>
<table>
<tr><th>Supplier</th><th>Price per Unit</th><th>Delivery Charges</th></tr>
<tr><td>Local distributor</td><td>AU$78</td><td>AU$30</td></tr>
<tr><td>New Zealand manufacturer</td><td>NZ$56</td><td>NZ$100</td></tr>
</table><br>
The official exchange rate at the time is AU$1 = NZ$1.07<br>
What is the minimum number of units the school needs to buy for it to be cheaper to purchase the goods directly from the manufacturer?";
$QType[7] = 0;
$QAnswers[7] = "c";
$QOptions[7] = array("1","2","3","4");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "<table>
<tr><th>Number</th><th>Cost from</th><th>Cost from</th><th>Cost from</th></tr>
<tr><th>of</th><th>Australian distributor</th><th>Australian distributor</th><th>NZ manufacturer</th></tr>
<tr><th>units</th><th>in \$AU</th><th>in \$AU</th><th>in \$NZ</th></tr>
<tr><td>1</td><td>1 \\(\\times\\) 78 + 30 = 108</td><td>108 \\(\\times\\) 1.07 = 115.56</td><td>1 \\(\\times\\) 56 + 100 = 156</td></tr>
<tr><td>2</td><td>2 \\(\\times\\) 78 + 30 = 186</td><td>186 \\(\\times\\) 1.07 = 199.02</td><td>2 \\(\\times\\) 56 + 100 = 212</td></tr>
<tr><td>3</td><td>3 \\(\\times\\) 78 + 30 = 264</td><td>264 \\(\\times\\) 1.07 = <b>282.48</b></td><td>3 \\(\\times\\) 56 + 100 = <b>268</b></td></tr>
<tr><td>4</td><td>4 \\(\\times\\) 78 + 30 = 342</td><td>342 \\(\\times\\) 1.07 = <b>365.94</b></td><td>4 \\(\\times\\) 56 + 100 = <b>324</b></td></tr>
</table><br>So the correct answer is 3, which is option <b>(c)</b>.";

$Q[8] = "\\(1\\over 7\\) of the students in a primary school are 6 years old or younger. If there are 56 students aged 6 years or younger, how many students are at least 7 years old";
$QType[8] = 1;
$QAnswers[8] = "336"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "\\(1\\over 7\\) = 56 aged 6 or younger. <br> Students 7 or older = \\(6\\over 7\\) of the students = 6 \\(\\times\\) 56 = <b>336</b> students.";

$Q[9] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below.<br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><td>A</td><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><td>B</td><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><td>C</td><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><td>D</td><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
<tr><td>E</td><td>29.7</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td><td>43.4</td></tr>
</table><br>If 379 students at school A scored a band 5 or 6 in 2013, how many students sat the NAPLAN test at school A in 2013?";
$QType[9] = 1;
$QAnswers[9] = "1000";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "379 students = 37.9%<br>100% = 379 \\(\\div\\) 37.9 \\(\\times\\) 100 = 1000 students";

$Q[10] = "If four boxes of ice blocks contain 36 ice blocks, how many ice blocks are there in six boxes?";
$QType[10] = 1;
$QAnswers[10] = "54";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "4 boxes = 36 ice blocks <br>1 box = 36 \\(\\div\\) 4 = 9 ice blocks<br>6 boxes = 6 \\(\\times\\) 9 = <b>54</b> ice blocks.";

$Q[11] = "Find the area of the coloured region. Give your answer to the nearest square metre.<br><img src='images/PracticeTest3a_3.jpg'><br>";
$QType[11] = 1;
$QAnswers[11] = "24100";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " m<sup>2</sup>";
$Soln[11] = "Area = 90 \\(\\times\\) 90 + 80 \\(\\times\\) 200 = 8100 + 16000 = <b>24100</b> m<sup>2</sup><br>or: Area = 90 \\(\\times\\) (90 + 80) + (200 - 90) \\(\\times\\) 80 = <b>24100</b> m<sup>2</sup>";

$Q[12] = "A student aged 8 years and 3 months has a reading age of 7 years 10 months. How many months below his actual age is his reading age?";
$QType[12] = 1;
$QAnswers[12] = "5";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " months";
$Soln[12] = "8 years 3 months - 7 years 10 months = <b>5</b> months.";

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