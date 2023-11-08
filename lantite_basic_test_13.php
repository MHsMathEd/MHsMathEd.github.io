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

$Q[0] = "Write 0.1 as a percentage.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "10";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "%";
$Soln[0] = "0.1 = 10%";

$Q[1] = "Write 0.25 as a percentage.";
$QType[1] = 1;
$QAnswers[1] = "25";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "%";
$Soln[1] = "0.25 = 25%";

$Q[2] = "Write 0.5 as a percentage.";
$QType[2] = 1;
$QAnswers[2] = "50";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = "%";
$Soln[2] = "0.5 = 50%";

$Q[3] = "Write 0.75 as a percentage.";
$QType[3] = 1;
$QAnswers[3] = "75"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "0.75 = 75%";

$Q[4] = "Write 1.0 as a percentage.";
$QType[4] = 1;
$QAnswers[4] = "100";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "%";
$Soln[4] = "10. = 100%";

$Q[5] = "Write 1.1 as a percentage.";
$QType[5] = 1;
$QAnswers[5] = "110";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "%";
$Soln[5] = "1.1 = 110%";

$Q[6] = "Write \\(\\frac{1}{4}\\) as a decimal.";
$QType[6] = 1;
$QAnswers[6] = "0.25";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "\\(\\frac{1}{4}\\) = 0.25";

$Q[7] = "Write \\(\\frac{1}{2}\\) as a decimal.";
$QType[7] = 1;
$QAnswers[7] = "0.5";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "\\(\\frac{1}{2}\\) = 0.5";

$Q[8] = "Write \\(\\frac{3}{4}\\) as a decimal.";
$QType[8] = 1;
$QAnswers[8] = "0.75"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "\\(\\frac{3}{4}\\)";

$Q[9] = "Write \\(\\frac{3}{4}\\) as a percentage.";
$QType[9] = 1;
$QAnswers[9] = "75";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "%";
$Soln[9] = "\\(\\frac{3}{4}\\) = 75%";

$Q[10] = "Write \\(\\frac{1}{2}\\) as a percentage.";
$QType[10] = 1;
$QAnswers[10] = "50";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "%";
$Soln[10]= "\\(\\frac{1}{2}\\) = 50%";

$Q[11] = "Write \\(\\frac{9}{10}\\) as a percentage.";
$QType[11] = 1;
$QAnswers[11] = "90";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "%";
$Soln[11] = "\\(\\frac{9}{10}\\) = 90%";

$Q[12] = "Calculate \\(\\frac{3}{4}\\) of 80";
$QType[12] = 1;
$QAnswers[12] = "60";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "\\(\\frac{3}{4}\\) of 80 = 60";

$Q[13] = "Calculate 25% of 60.";
$QType[13] = 1;
$QAnswers[13] = "15";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "25% of 60 = 15";

$Q[14] = "Calculate 0.5 \\(\\times\\) 40.";
$QType[14] = 1;
$QAnswers[14] = "20";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "0.5 \\(\\times\\) 40 = 20";

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