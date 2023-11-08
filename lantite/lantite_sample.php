<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MathJax example</title>
  <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML" async ></script>
<style>
.error {color: #FF0000;}
</style>
</head>
<body  onload="loadFunction()">  

<?php
// define some variables.
$Q = array("2/4 + 1/3 = ", "1 + 1", "1/2 + 1/4 =", "2.0+2.0", "1/3 + 2/5 =", "3.00 + 3.00", "g + h =", "4.000 + 4.000", "k + l = ", "10.0000 + 0");
$QType = array(0,1,0,1,0,1,0,1,0,1); /* 0 means multiple choice and 1 means short answer. */
$QAnswers = array("c","2","a","4.0","d","6.00","d","8.000","a","10.0000");
$QOptions = array
	(
	array("\\(1 \\over 7 \\)","\\(3 \\over 4 \\)","\\(5 \\over 6 \\)","\\(2 \\over 12 \\)"),
	array("0","0","0","0"),
	array("\\(3 \\over 7 \\)","\\(3 \\over 4 \\)","\\(5 \\over 6 \\)","\\(2 \\over 12 \\)"),
	array("0","0","0","0"),
	array("\\(5 \\over 7 \\)","\\(3 \\over 4 \\)","\\(5 \\over 6 \\)","\\(2 \\over 12 \\)"),
	array("0","0","0","0"),
	array("\\(7 \\over 7 \\)","\\(3 \\over 4 \\)","\\(5 \\over 6 \\)","\\(2 \\over 12 \\)"),
	array("0","0","0","0"),
	array("\\(9 \\over 7 \\)","\\(3 \\over 4 \\)","\\(5 \\over 6 \\)","\\(2 \\over 12 \\)"),
	array("0","0","0","0"),
	);
	
$QNoMax = 10;
$answer = "";
$answerErr = "";

	if (test_input($_POST["reset"]) == "reset") {
		reset_session();
		$DisplayMultipleChoice = "display:initial";
		$DisplayShortAnswer = "display:none";
		$InQuiz = "display:initial";
		$EndQuiz = "display:none";
	}
	
	if (count($_SESSION) == 0){
		$_SESSION[QNo] = 0;
		$_SESSION[QCorrect] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
	}

	if (test_input($_POST["reset"]) != "reset") {
		
		if ($QType[$_SESSION[QNo]] == 0){
			$DisplayMultipleChoice = "display:initial";
			$DisplayShortAnswer = "display:none";
		}
		else {
			$DisplayMultipleChoice = "display:none";
			$DisplayShortAnswer = "display:initial";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ($QType[$_SESSION[QNo]] == 0){
			  if (empty($_POST["answer"])) {
				$answerErr = "Please choose an answer";
			  } 
			  else {
				$answer = $_POST["answer"];
					if ($answer == $QAnswers[$_SESSION[QNo]]) {
					$_SESSION[QCorrect[$_SESSION[$QNo]]] = 1;
				} else {
					$_SESSION[QCorrect[$_SESSION[$QNo]]] = 0;
				}
				$_SESSION[QNo]++;
			  }
			}
			else {
				$answer = test_input($_POST["ans"]);
				if ($answer == $QAnswers[$_SESSION[QNo]]) {
					$_SESSION[QCorrect[$_SESSION[$QNo]]] = 1;
				} else {
					$_SESSION[QCorrect[$_SESSION[$QNo]]] = 0;
				}
				$_SESSION[QNo]++;
			}
		}
	}

	if ($QType[$_SESSION[QNo]] == 0){
		$DisplayMultipleChoice = "display:initial";
		$DisplayShortAnswer = "display:none";
	}
	else {
		$DisplayMultipleChoice = "display:none";
		$DisplayShortAnswer = "display:initial";
	}
	
	if ($_SESSION[QNo] < $QNoMax){
		$InQuiz = "display:initial";
		$EndQuiz = "display:none";
	}
	else {
		$InQuiz = "display:none";
		$EndQuiz = "display:initial";
	}


	
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function reset_session(){
	// remove all session variables
	session_unset(); 
	// destroy the session 
	session_destroy();
}
?>


<div style="<?php echo $InQuiz;?>">

	<h2>Question <?php echo $_SESSION[QNo] + 1; ?></h2>

	<p><?php echo $Q[$_SESSION[QNo]];?>
	  <br><br>
	</p>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		<p style="<?php echo $DisplayMultipleChoice;?>">
		  (a) <input type="radio" name="answer" value="a"> <?php echo $QOptions[$_SESSION[QNo]][0];?><br><br>
		  (b) <input type="radio" name="answer" value="b"> <?php echo $QOptions[$_SESSION[QNo]][1];?><br><br>
		  (c) <input type="radio" name="answer" value="c"> <?php echo $QOptions[$_SESSION[QNo]][2];?><br><br>
		  (d) <input type="radio" name="answer" value="d"> <?php echo $QOptions[$_SESSION[QNo]][3];?><br><br>
		 </p>
		 <p style="<?php echo $DisplayShortAnswer;?>">
			<input type="text" name="ans" pattern="^[0-9.]*$" title="Please enter a number">
		 </p>
		 <br><br>
		 <span class="error"> <?php echo $answerErr;?></span>
		 <br><br>
		 <input type="submit" name="submit" value="Submit">  
		 <input type="checkbox" name="reset" value="reset">
	</form>
	<br><br>
	Question Number <?php echo $_SESSION[QNo]; ?><br>
	Your answer is  <?php echo $answer; ?>. <br>
	The correct answer is <?php echo $QAnswers[$_SESSION[QNo]-1]; ?> . <br>
	Thus, your answer is <?php echo $_SESSION[QCorrect[$_SESSION[$QNo]]]; ?> <br>
	<?php echo $SESSION[QCorrect]; ?>
</div>

<div style="<?php echo $EndQuiz;?>">
	<form method="post" action="lantite_finish.html">
		<input type="submit">
	</form>
</div>

<script>
	function loadFunction(){
		MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	}

</script>

</body>
</html>