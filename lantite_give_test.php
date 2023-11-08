<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>LANTITE Practice Test</title>
  <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML" async ></script>
<style>

	body.lantite-body {
		background-color: #b2c7da;
		color: black;
	}

	div.contentcontainer{
		background-color: white;
		color: black;
		padding-top:10px;
		padding-left:40px;
		padding-right:40px;
		padding-bottom:40px;
		margin:auto;
		width:80%;
	}

	.error {color: #FF0000;}
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	  text-align:center;
	}
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
<body  class="lantite-body" onload="loadFunction()">  

<?php
// define some variables.

$Q = $_SESSION["Q"];
$QType = $_SESSION["Qtype"];
$QAnswers = $_SESSION["QAnswers"];
$QOptions = $_SESSION["QOptions"];
$prefix = $_SESSION["prefix"];
$suffix = $_SESSION["suffix"];
$Soln = $_SESSION["Soln"];

$QNoMax = count($Q);
$answer = "";
$answerErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['backbtn'])){
			$_SESSION["QNo"]--;
		}
		else {
			if ($QType[$_SESSION["QNo"]] == 0){
			  if (empty($_POST["answer"])) {
				$answerErr = "Please choose an answer";
			  } 
			  else {
				$answer = $_POST["answer"];
				$_SESSION["YourAnswer"][$_SESSION["QNo"]] = $answer;
				if ($answer == $QAnswers[$_SESSION["QNo"]]) {
					$_SESSION["QCorrect"][$_SESSION["QNo"]] = 1;
				} else {
					$_SESSION["QCorrect"][$_SESSION["QNo"]] = 0;
				}
				$_SESSION["QNo"]++;
			  }
			}
			else {
				$answer = test_input($_POST["ans"]);
				$_SESSION["YourAnswer"][$_SESSION["QNo"]] = $answer;
				if ($answer == $QAnswers[$_SESSION["QNo"]]) {
					$_SESSION["QCorrect"][$_SESSION["QNo"]] = 1;
				} else {
					$_SESSION["QCorrect"][$_SESSION["QNo"]] = 0;
				}
				$_SESSION["QNo"]++;
			}
		}
	}

	if ($QType[$_SESSION["QNo"]] == 0){
		$DisplayMultipleChoice = "display:initial";
		$DisplayShortAnswer = "display:none";
	}
	else {
		$DisplayMultipleChoice = "display:none";
		$DisplayShortAnswer = "display:initial";
	}
	
	if ($_SESSION["QNo"] == 0){
		$DisplayBackButton = "display:none";
	}
	else {
		$DisplayBackButton = "display:block";
	}

	if ($_SESSION["QNo"] < $QNoMax){
		$InQuiz = "display:initial";
		$EndQuiz = "display:none";
	}
	else {
		$InQuiz = "display:none";
		$EndQuiz = "display:initial";
		$timeend = time();
		$t = $timeend-$_SESSION["timestart"];
		$m = floor($t/60);
		$sec = $t % 60;
		$timetaken = $m." minutes and ".$sec." seconds";
	}

	$Ansa = "";
	$Ansb = "";
	$Ansc = "";
	$Ansd = "";
	$NumberAnswer = "";
	if ($QType[$_SESSION["QNo"]] == 0){
		switch ($_SESSION["YourAnswer"][$_SESSION["QNo"]]){
			case "a":
				$Ansa = "checked";
				break;
			case "b":
				$Ansb = "checked";
				break;
			case "c":
				$Ansc = "checked";
				break;
			case "d":
				$Ansd = "checked";
				break;
		}
	}
	else {
		$NumberAnswer = $_SESSION["YourAnswer"][$_SESSION["QNo"]];
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

<div class="contentcontainer">
	<div style="<?php echo $InQuiz;?>">

		<h2>Question <?php echo $_SESSION["QNo"] + 1; ?></h2>

		<p><?php echo $Q[$_SESSION["QNo"]];?>
		  <br><br>
		</p>

		<form autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			<p style="<?php echo $DisplayMultipleChoice;?>">
			  (a) <input type="radio" name="answer" value="a" <?php echo $Ansa ?> > <?php echo $QOptions[$_SESSION["QNo"]][0];?><br><br>
			  (b) <input type="radio" name="answer" value="b" <?php echo $Ansb ?> > <?php echo $QOptions[$_SESSION["QNo"]][1];?><br><br>
			  (c) <input type="radio" name="answer" value="c" <?php echo $Ansc ?> > <?php echo $QOptions[$_SESSION["QNo"]][2];?><br><br>
			  (d) <input type="radio" name="answer" value="d" <?php echo $Ansd ?> > <?php echo $QOptions[$_SESSION["QNo"]][3];?><br><br>
			 </p>
			 <p style="<?php echo $DisplayShortAnswer;?>">
				<?php echo $prefix[$_SESSION["QNo"]];?><input type="text" name="ans" pattern="^[0-9.]*$" title="Please enter a number" value="<?php echo $NumberAnswer; ?>" autofocus><?php echo $suffix[$_SESSION["QNo"]];?>
			 </p>
			 <br><br>
			 <span class="error"> <?php echo $answerErr;?></span>
			 <br><br>
			 <input type="submit" class="testbutton" name="submit" value="Submit Answer"> 
			<div style="<?php echo $DisplayBackButton; ?>">
				<input type="submit" class="testbutton" name="backbtn" value="Back">
			</div>
		</form>
	</div>

	<div style="<?php echo $EndQuiz;?>">
		<h4>Time Taken: <?php echo $timetaken; ?> </h4>
		<form method="post" action="lantite_basic_test_1_feedback.php">
			<input type="submit" class="testbutton" value="Go to Results and Feedback">
		</form>
		<form autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div style="<?php echo $DisplayBackButton;?>">
				<input type="submit" class="testbutton" name="backbtn" value="Back">
			</div>
		</form>
	</div>
</div>

<script>
	function loadFunction(){
		MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	}

</script>

</body>
</html>