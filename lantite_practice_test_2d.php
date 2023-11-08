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

$Q[0] = "One year, a school’s fireworks fundraiser raised $18 642.45. The next year the fundraiser raised $814 more. How much was raised by the fundraiser over the two years?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "38098.90";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Amount raised = $18642.45 + $18642.45 + $814 = $<b>38098.90</b>";

$Q[1] = "A counsellor is employed one day per week on a multi-campus secondary school that has three campuses. The times taken to walk between the three campuses are given in the following table:<br>
<table>
<tr><th></th><th>Campus A</th><th>Campus B</th><th>Campus C</th></tr>
<tr><td>Campus A</td><td></td><td>10 minutes</td><td>25 minutes</td></tr>
<tr><td>Campus B</td><td>10 minutes</td><td></td><td>15 minutes</td></tr>
<tr><td>Campus C</td><td>25 minutes</td><td>15 minutes</td><td></td></tr>
</table><br>
If the counsellor is required to visit all three campuses during the day, what is the minimum time that they must spend travelling between the campuses?";
$QType[1] = 1;
$QAnswers[1] = "25";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " minutes";
$Soln[1] = "They should go from A to B (10 minutes) and then to C (15 minutes) giving a travel time of 25 minutes. This is the shortest travelling time starting from A.";

$Q[2] = "A counsellor is employed one day per week on a multi-campus secondary school that has three campuses. The times taken to walk between the three campuses are given in the following table:<br>
<table>
<tr><th></th><th>Campus A</th><th>Campus B</th><th>Campus C</th></tr>
<tr><td>Campus A</td><td></td><td>10 minutes</td><td>25 minutes</td></tr>
<tr><td>Campus B</td><td>10 minutes</td><td></td><td>15 minutes</td></tr>
<tr><td>Campus C</td><td>25 minutes</td><td>15 minutes</td><td></td></tr>
</table><br>
If the counsellor starts at Campus A, what order should they visit the campuses in to minimize their travelling time?";
$QType[2] = 0;
$QAnswers[2] = "a";
$QOptions[2] = array("ABC","ACB","BAC","CAB");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "They should go from A to B (10 minutes) and then to C (15 minutes) giving a travel time of 25 minutes. This is the shortest travelling time starting from A.";

$Q[3] = "A school builds a new swimming pool. The volume of the pool is 700 m<sup>3</sup>. If water costs $2.27 per kilolitre, what is the cost to fill the pool? (1 kilolitre = 1000 litres)";
$QType[3] = 1;
$QAnswers[3] = "1589"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Volume = 700 m<sup>3</sup><br>1000 L = 1 m<sup>3</sup>, so 1 m<sup>3</sup> = 1 kilolitre<br>Volume = 700 kilolitres<br>Cost = $2.27 \\(\\times\\) 700 = $1589";

$Q[4] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br>True/False: Class B had a greater range of marks than class A.";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "True: option <b>(a)</b>";

$Q[5] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br>True/False: There were students in the second quartile of class B who outperformed all of the students in the third quartile of class A.";
$QType[5] = 0;
$QAnswers[5] = "a";
$QOptions[5] = array("True","False","N/A","N/A");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "True: option <b>(a)</b>";

$Q[6] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br>True/False: Class A achieved a median mark of 66%";
$QType[6] = 0;
$QAnswers[6] = "a";
$QOptions[6] =  array("True","False","N/A","N/A");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "True: option <b>(a)</b>";

$Q[7] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br> The test was marked out of 100 and all marks awarded were whole numbers. What was the highest mark (out of 100) achieved by a student in the test?";
$QType[7] = 1;
$QAnswers[7] = "93";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "The highest mark achieved was <b>93</b>";

$Q[8] = "In a group of 80 senior students, 40% choose to study chemistry and biology, which 20% choose to study chemistry and physics. No students study biology and physics. How many students study chemistry?";
$QType[8] = 1;
$QAnswers[8] = "48"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Percentage of students studying chemistry = 40% + 20% = 60%<br>Number of students studying chemistry = 60% \\(\\times\\) 80 = <b>48</b> students.";

$Q[9] = "A school has 3 maths teachers who teach the three year 7 classes. The next year the same three teachers are randomly assigned to teach one of the three year 8 classes. What is the probability that a particular student has the same maths teacher for year 7 and year 8?";
$QType[9] = 0;
$QAnswers[9] = "d";
$QOptions[9] = array("\\(1\\over 8\\)","\\(1\\over 6\\)","\\(1\\over 4\\)","\\(1\\over 3\\)");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "If we call the teachers a, b, and c then all the possible combinations of teachers that a student can have are aa ab ac ba bb bc ca cb cc.<br>There are 9 combinations, and in 3 of them the student has the same teacher. <br>The probability that a student has the same teacher for year 7 and 8 is \\(3\\over 9\\) = \\(1\\over 3\\), which is option <b>(d)</b>";

$Q[10] = "Two classes sat a class test that was marked out of 10. The results are shown in the following table.<br><img src='images/PracticeTest2d_2.jpg'><br>Which class had the greater range of marks?";
$QType[10] = 0;
$QAnswers[10] = "a";
$QOptions[10] = array("Class 1","Class 2","The ranges were equal","It is not possible to tell from these data");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Class 1 has the greater range (option <b>(a)</b>)";

$Q[11] = "Two classes sat a class test that was marked out of 10. The results are shown in the following graph.<br><img src='images/PracticeTest2d_2.jpg'><br>How many students were there in class 1?";
$QType[11] = 1;
$QAnswers[11] = "25";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "There were <b>25</b> students.";

$Q[12] = "Two classes sat a class test that was marked out of 10. The results are shown in the following graph.<br><img src='images/PracticeTest2d_2.jpg'><br>Students required a mark of at least 50% to pass. What percentage of students passed the exam?";
$QType[12] = 1;
$QAnswers[12] = "80";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "%";
$Soln[12] = "50% corresponds to a mark of 5 out of 10.<br>40 out of 50 students got marks of 5 or more = <b>80</b>%.";

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