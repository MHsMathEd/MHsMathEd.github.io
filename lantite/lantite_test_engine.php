<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>LANTITE Test Engine</title>
</head>
<body  onload="loadFunction()">  

<?php
// Start the clock.

$_SESSION["timestart"] = time();

?>

<script>
	function loadFunction(){
		window.location.replace("lantite_give_test.php").submit();
	}
</script>

</body>
</html>
