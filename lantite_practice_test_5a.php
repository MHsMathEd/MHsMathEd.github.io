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

$Q[0] = "A family has a weekly, after-tax income of $1370. They spend $280 each week on groceries and $620 each week on rent. How much money do they have each week for other expenses? Give your answer to the nearest cent.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "470";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Leftover income = $1370 - $280 - $620 = $470";

$Q[1] = "A teacher is taking a school excursion to a regional town. The teacher is required to estimate the fuel costs for the trip. The total trip will be 260 km. The school coach has an average fuel efficiency of 12 L / 100 km. At the time of filling the coach, the cost of fuel is $1.38 per litre. What is the estimated fuel cost for the trip? Give your answer to the nearest dollar.";
$QType[1] = 1;
$QAnswers[1] = "43";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Number of 12 L used = 260 \\(\\div\\) 100 = 2.6<br>Fuel used = 2.6 \\(\\times\\) 12 = 31.2 L<br>Fuel cost = 31.2 \\(\\times\\) $1.38 = $43.056 = $<b>43</b> to the nearest dollar.";

$Q[2] = "A teacher is taking a school excursion to a regional town. The teacher is required to estimate the transport costs for the trip. The total trip will be 260 km and the coach has a running cost of $2.50 per kilometre, including fuel. If there are 40 students going on the trip and the fuel cost is to be divided between them, what amount does each student need to pay to cover the transport costs? Give your answer to the nearest cent. ";
$QType[2] = 1;
$QAnswers[2] = "16.25";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Cost of transport = $2.50 \\(\\times\\) 260 = $650<br>Cost per student = $650 \\(\\div\\) 40 = $<b>16.25</b> per student.";

$Q[3] = "Find the area of the coloured region. Give your answer in square metres, rounded to 2 decimal places.<br><img src='images/PracticeTest5a_1.jpg'>";
$QType[3] = 1;
$QAnswers[3] = "0.14"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "m<sup>2</sup>";
$Soln[3] = "Dimensions in m = 0.7 \\(\\times\\) 0.2<br>Area = 0.7 \\(\\times\\) 0.2 = 0.14 m<sup>2</sup>";

$Q[4] = "A car has an average petrol consumption of 8.8 L per 100 km. Approximately how many litres will it use to travel 550 km?";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("40","50","60","70");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Lots of 8.8 L used 550 \\(\\div\\) 100 = 5.5<br>5.5 \\(\\times\\) 8.8 = 48.4 L, which rounds up to 50 L, which is option <b>(b)</b>";

$Q[5] = "There are 100 students in year 12. You are required to produce a 10-page book for each student in year 12. Each book will contain 10 printed pages in a ring binder and will have a cover label on the front. You can make the books yourself, but you discover a commercial service that will make the books for you. The costs are shown below.<br><br>
<table>
<tr><td>500 sheets of paper</td><td>$8.00</td></tr>
<tr><td>In-house printing</td><td>5 cents per page</td></tr>
<tr><td>ring binder</td><td>$1.00 each</td></tr>
<tr><td>Cover labels</td><td>50 cents each</td></tr>
<tr><td>Printing and Binding Service - option A</td><td>$2.80 per book</td></tr>
<tr><td>Printing and Binding Service - option B</td><td>$260 for 100 books</td></tr>
</table><br><br>
How much will it cost to make all the books yourself?";
$QType[5] = 1;
$QAnswers[5] = "216";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "$";
$suffix[5] = "";
$Soln[5] = "Number of pages required = 100 \\(\\times\\) 10 = 1000<br>Number of lots of 500 pages required = 1000 \\(\\div\\) 500 = 2<br>Cost of paper = 2 \\(\\times\\) $8.00 = $16.00<br>Cost of printing 1 page = $0.05<br>Cost of printing 1000 pages = 1000 \\(\\times\\) $0.05 = $50<br>Cost of ring binders = 100 \\(\\times\\) $1.00 = $100<br>Cost of cover labels = 100 \\(\\times\\) $0.50 = $50<br>Total cost = $ 16 + 50 + 100 + 50 = $<b>216</b>";

$Q[6] = "There are 100 students in year 12. You are required to produce a 10-page book for each student in year 12. Each book will contain 10 printed pages in a ring binder and will have a cover label on the front. You can make the books yourself, but you discover a commercial service that will make the books for you. The costs are shown below.<br><br>
<table>
<tr><td>500 sheets of paper</td><td>$8.00</td></tr>
<tr><td>In-house printing</td><td>5 cents per page</td></tr>
<tr><td>ring binder</td><td>$1.00 each</td></tr>
<tr><td>Cover labels</td><td>50 cents each</td></tr>
<tr><td>Printing and Binding Service - option A</td><td>$2.80 per book</td></tr>
<tr><td>Printing and Binding Service - option B</td><td>$260 for 100 books</td></tr>
</table><br><br>
If you use the printing and binding service, how much will you save by using the cheaper of their two options?";
$QType[6] = 1;
$QAnswers[6] = "20";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "$";
$suffix[6] = "";
$Soln[6] = "Option A cost = $2.80 \\(\\times\\) 100 = $280<br>Option B cost = $260<br>Difference = $280 - $260 = $20<br>Saving = $<b>20</b>";

$Q[7] = "There are 100 students in year 12. You are required to produce a 10-page book for each student in year 12. Each book will contain 10 printed pages in a ring binder and will have a cover label on the front. You can make the books yourself, but you discover a commercial service that will make the books for you. The costs are shown below.<br><br>
<table>
<tr><td>500 sheets of paper</td><td>$8.00</td></tr>
<tr><td>In-house printing</td><td>5 cents per page</td></tr>
<tr><td>ring binder</td><td>$1.00 each</td></tr>
<tr><td>Cover labels</td><td>50 cents each</td></tr>
<tr><td>Printing and Binding Service - option A</td><td>$2.80 per book</td></tr>
<tr><td>Printing and Binding Service - option B</td><td>$260 for 100 books</td></tr>
</table><br><br>
Which option is the cheapest?";
$QType[7] = 0;
$QAnswers[7] = "a";
$QOptions[7] = array("make the books yourself","Printing and Binding Service - option A","Printing and Binding Service - option B","the cost is the same for all the options");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "$216 for Make them yourself<br>$280 for Service option A<br>$260 for service option B<br>so the cheapest is to make them yourself, answer <b>(a)</b>";

$Q[8] = "In a food technology lesson students learn that 4 L of milk are required to produce 200 g of Mozarella cheese. How many litres of milk are required to produce 1 kg of Mozarella?";
$QType[8] = 1;
$QAnswers[8] = "20"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "L";
$Soln[8] = "Litres required = 4 \\(\\times\\) 5 = <b>20</b> litres.";

$Q[9] = "A box contains red, white and blue raffle tickets. The probability of randomly drawing each colour of ticket is given in the following table.<br><br>
<table>
<tr><th>Ticket Colour</th><th>Probability of Randomly Drawing</th></tr>
<tr><td>Red</td><td>0.5</td></tr>
<tr><td>White</td><td>0.25</td></tr>
<tr><td>Blue</td><td>0.25</td></tr>
</table><br><br>
If there are 80 blue tickets in the box, how many red tickets are in the box?";
$QType[9] = 1;
$QAnswers[9] = "160";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "There are twice as many red tickets as blue tickets (ratio of red: blue = 0.5:0.25 = 2:1). So there are 2 \\(\\times\\) 80 = <b>160</b> red tickets.";

$Q[10] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600. <br><img src='images/PracticeTest5a_2.jpg'><br>What percentage of the population was living in Queensland? Give your answer rounded to 2 decimal places.";
$QType[10] = 1;
$QAnswers[10] = "20.27";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "%";
$Soln[10]= "Percentage in Queensland = 4599400 \\(\\div\\) 22693600 \\(\\times\\) 100% = 20.27%";

$Q[11] = "In 7V, \\(1\\over 4 \\) of the students play soccer in winter, \\(1\\over 3 \\) play netball and \\(1\\over 6\\) play some other sport. The remainder do not play a sport. What fraction of students do not play a sport? ";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("\\(1\\over 12\\)","\\(1\\over 6\\)","\\(1\\over 4\\)","\\(1\\over 3\\)");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Fraction of students who play sport = \\(1\\over 4\\) + \\(1\\over 3\\) + \\(1\\over 6\\) = \\(3\\over 12\\) + \\(4\\over 12\\) + \\(2\\over 12\\) = \\(9\\over 12\\) = \\(3\\over 4\\)<br>Fraction of students who do not play sport = 1 - \\(3\\over 4\\) = \\(1\\over 4\\), which is option <b>(c)</b>";

$Q[12] = "A student earns \$I per annum and spends \$E per week on expenses. Which formula shows how much money the student saves each fortnight?";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("2 \\(\\times\\) (I \\(\\div\\) 52 – E)","2 \\(\\times\\) (I – E) \\(\\div\\) 52","2 \\(\\times\\) I \\(\\div\\) 52 – E","2 \\(\\times\\) I – 52 \\(\\times\\) E");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Weekly income = \$I \\(\\div\\) 52<br>Weekly savings = Weekly income - weekly expenses = \$I \\(\\div\\) 52 - \$E<br>Fortnightly savings = 2 \\(\\times\\) weekly savings = 2 \\(\\times\\) (\$I \\(\\div\\) 52 - \$E), which is option <b>(a)</b>";


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