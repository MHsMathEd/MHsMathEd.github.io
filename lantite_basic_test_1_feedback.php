<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>LANTITE Numeracy Basic Test 1</title>
  <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML" async ></script>
<style>
.error {color: #FF0000;}
	.testbutton{
		background-color: #203864;
		color:white;
		border: 2px solid #102854;
		text-align: center;
		cursor: pointer;
		margin: 4px 2px;
		padding: 10px;
		width: 20%;
		white-space: normal;
	}
	
	.testbutton:hover {
		background-color: white;
		color: #203864;
	}
</style>
</head>
<body onload="loadFunction()">  

<?php

$Soln = $_SESSION["Soln"];

$correct = 0;
for ($i = 0; $i < count($_SESSION["Q"]); $i++){
	$correct = $correct + $_SESSION["QCorrect"][$i];
}

echo "<h2 style='color:blue'> Your Result: ", $correct ,"/", count($_SESSION["Q"]), "</h2>";

echo "<h2>Feedback and Worked Solutions</h2>";

for ($i = 0; $i < count($_SESSION["Q"]); $i++){
	if ($_SESSION["QCorrect"][$i] == 1){
		$AnswerColour[$i] = "green";
	}
	else { $AnswerColour[$i] = "red"; 
	}
	echo "<h3 style='color:",$AnswerColour[$i],"'> Question ",$i + 1, "</h3>";
	echo "<p> ", $_SESSION['Q'][$i], "<br><br>";
	echo "Your answer: <b>", $_SESSION['YourAnswer'][$i], "</b><br><br>";
	echo "Correct answer: <br>", $Soln[$i],"</p>";
}

?>

<form method="post" action="lantite_welcome.html">
		<input type="submit" class="testbutton" value="Back to LANTITE Quizzes">
	</form>

<script>
	function loadFunction(){
		MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	}

</script>

</body>
</html>