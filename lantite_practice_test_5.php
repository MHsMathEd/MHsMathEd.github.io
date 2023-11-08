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

$Q[13] = "The number of students in year 11 at a high school who were studying business studies or economics, or neither, were recorded.<br><br><img src='images/PracticeTest5b_1.jpg'><br><br>How many students were not studying economics?";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "105";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "Students not studying economics = 82 + 23 = <b>105</b>";

$Q[14] = "The number of students in year 11 at a high school who were studying business studies or economics, or neither, were recorded.<br><br><img src='images/PracticeTest5b_1.jpg'><br><br>How many students were in year 11?";
$QType[14] = 1;
$QAnswers[14] = "170";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "Number of students in year 11 = 23 + 82 + 65 = <b>170</b>";

$Q[15] = "A primary school raises funds which are to be divided amongst two charities, A and B, in the ratio A:B = 3:2. The table shows the funds raised by each grade.
<br><table>
<tr><th>Grade</th><th>Money Raised</th></tr>
<tr><td>Kindergarten</td><td>$1220</td></tr>
<tr><td>Year 1</td><td>$2630</td></tr>
<tr><td>Year 2</td><td>$4200</td></tr>
<tr><td>Year 3</td><td>$3115</td></tr>
<tr><td>Year 4</td><td>$2870</td></tr>
<tr><td>Year 5</td><td>$1640</td></tr>
<tr><td>Year 6</td><td>$2980</td></tr>
</table></br>
How much money will be sent to Charity A?
";
$QType[15] = 1;
$QAnswers[15] = "11193";
$QOptions[15] = array("0","0","0","0");
$prefix[15] = "$";
$suffix[15] = "";
$Soln[15] = "Total amount raised = $1220 + 2630 + 4200 + 3115 + 2870 + 1640 + 2980 = $18655<br>Ratio 3:2 means that the money is divided into 3 + 2 = 5 parts, and Charity A gets 3 of those parts.<br> 1 of 5 parts = \\(1\\over 5 \\) \\(\\times\\) $18655 = $3731<br>3 parts = $3731 \\(\\times\\) 3 = $<b>11193</b>";

$Q[16] = "A primary school raises funds which are to be divided amongst two charities, A and B, in the ratio A:B = 3:2. The table shows the funds raised by each grade.
<br><table>
<tr><th>Grade</th><th>Money Raised</th></tr>
<tr><td>Kindergarten</td><td>$1220</td></tr>
<tr><td>Year 1</td><td>$2630</td></tr>
<tr><td>Year 2</td><td>$4200</td></tr>
<tr><td>Year 3</td><td>$3115</td></tr>
<tr><td>Year 4</td><td>$2870</td></tr>
<tr><td>Year 5</td><td>$1640</td></tr>
<tr><td>Year 6</td><td>$2980</td></tr>
</table></br>What was the mean amount of money raised by each grade?";
$QType[16] = 1;
$QAnswers[16] = "2665"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "$";
$suffix[16] = "";
$Soln[16] = "Total amount raised = $1220 + 2630 + 4200 + 3115 + 2870 + 1640 + 2980 = $18655<br>Number of grades = 7<br> Mean amount raised by each grade = total \\(\\div\\) number of grades = $18655 \\(\\div\\) 7 = $<b>2665</b>";

$Q[17] = "A primary school raises funds which are to be divided amongst two charities, A and B, in the ratio A:B = 3:2. The table shows the funds raised by each grade.
<br><table>
<tr><th>Grade</th><th>Money Raised</th></tr>
<tr><td>Kindergarten</td><td>$1220</td></tr>
<tr><td>Year 1</td><td>$2630</td></tr>
<tr><td>Year 2</td><td>$4200</td></tr>
<tr><td>Year 3</td><td>$3115</td></tr>
<tr><td>Year 4</td><td>$2870</td></tr>
<tr><td>Year 5</td><td>$1640</td></tr>
<tr><td>Year 6</td><td>$2980</td></tr>
</table></br>What was the median amount of money raised by the grades?";
$QType[17] = 1;
$QAnswers[17] = "2870";
$QOptions[17] = array("0","0","0","0");
$prefix[17] = "$";
$suffix[17] = "";
$Soln[17] = "Moneys in ascending order: 1220, 1640, 2630, 2870, 2980, 3115, 4200<br>Median = $<b>2870</b>";

$Q[18] = "A school field has an area of 4000 square metres. If turf is sold in rolls that are 80 cm wide by 200 cm long, how many rolls are required to cover the field?";
$QType[18] = 1;
$QAnswers[18] = "2500";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = "";
$Soln[18] = "Turf dimensions in metres = 0.8 m by 2 m<br>Turf area = 0.8 \\(\\times\\) 2 = 1.6 m<sup>2</sup><br>Number of turf rolls required = 4000 \\(\\div\\) 1.6 = <b>2500</b>";

$Q[19] = "A school bus travels 90 km in 2.25 hours. What is its average speed?";
$QType[19] = 1;
$QAnswers[19] = "40";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = "km/h";
$Soln[19] = "speed = distance \\(\\div\\) time = 90 km \\(\\div\\) 2.25 hours = <b>40</b> km/h";

$Q[20] = "A teacher has a roll of stickers. After using 75 of them, \\(1\\over 4\\) of the stickers from the roll are left unused. How many stickers remain on the roll?";
$QType[20] = 1;
$QAnswers[20] = "25";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "";
$suffix[20] = "";
$Soln[20] = "Proportion used = 1 - \\(1\\over 4\\) = \\(3\\over 4\\)<br>75 stickers = \\(3\\over 4\\)<br>\\(1\\over 4\\) = 75 \\(\\div\\) 3 = 25<br> Number remaining = <b>25</b>";

$Q[21] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of students who studied a VET subject in year 11 in 2006 who had completed a qualification by 2011, compared to the proportions for all students.<br><img src='images/PracticeTest5b_2.jpg'><br>True/False: In 2011 at least 30% of all students were studying for their first qualification.";
$QType[21] = 0;
$QAnswers[21] = "a"; 
$QOptions[21] = array("True","False","N/A","N/A");
$prefix[21] = "";
$suffix[21] = "";
$Soln[21] = "True <b>(a)</b>; Around 40% of students were studying for their first qualification.";

$Q[22] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of students who studied a VET subject in year 11 in 2006 who had completed a qualification by 2011, compared to the proportions for all students.<br><img src='images/PracticeTest5b_2.jpg'><br>True/False: By 2011 most students who had studied VET in school had completed a qualification.";
$QType[22] = 0;
$QAnswers[22] = "b";
$QOptions[22] = array("True","False","N/A","N/A");
$prefix[22] = "";
$suffix[22] = "";
$Soln[22] = "Approximate percentage of VET students with a qualification = 5% (Certificate I/II) + 22% (Certificate III/IV) + 8% (Advanced diploma/diploma) + 5% (Bachelor degree or above) = 40%<br>As this is less than 50%, the statement is false <b>(b)</b>";

$Q[23] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of students who studied a VET subject in year 11 in 2006 who had completed a qualification by 2011, compared to the proportions for all students.<br><img src='images/PracticeTest5b_2.jpg'><br>True/False: Students who studied a VET subject in school in year 11 were more likely to complete a Certificate I,II/III or IV than other students.";
$QType[23] = 0;
$QAnswers[23] = "a";
$QOptions[23] = array("True","False","N/A","N/A");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "The statement is true <b>(a)</b>";

$Q[24] = "A box contains 6 blue balls, 6 red balls and 8 yellow balls. What is the probability of randomly drawing a ball that is not red?";
$QType[24] = 0;
$QAnswers[24] = "d";
$QOptions[24] = array("\\(3\\over 4\\)","\\(3\\over 5\\)","\\(3\\over 10\\)","\\(7\\over 10\\)");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "Probability of drawing a not-red ball = fraction of not-red balls = \\((6 + 8)\\over (6 + 6 + 8)\\) = \\(14\\over 20\\) = \\(7\\over 10\\), option <b>(d)</b>";

$Q[25] = "If twelve school students eat six kilograms of fruit in five days, how many days would six kilograms of fruit last fifteen students, if they all ate fruit at the same rate?";
$QType[25] = 1;
$QAnswers[25] = "4";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "";
$suffix[25] = "";
$Soln[25] = "Note that the fact that there are 6 kg of fruit is irrelevant as this amount does not change.<br>12 students eat the fruit in 5 days<br>1 student eats the fruit in 5 \\(\\times\\) 12 = 60 days<br> 15 students eat the fruit in 60 \\(\\div\\) 15 = <b>4</b> days.";

$Q[26] = "A science class are studying plants. At the start of the study a particular plant is 20 cm tall. It then grows 3 cm in the first 6 weeks of the study. If it continues to grow at a constant rate, how many centimetres tall will it be after the study has been running for 10 weeks?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "25";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "";
$suffix[26] = "cm";
$Soln[26] = "Growth rate: in 6 weeks it grows 3 cm<br> In 1 week it grows 3 \\(\\div\\) 6 = 0.5 cm. <br> In 10 weeks it grows 10 \\(\\times\\) 0.5 = 5 cm<br>New height = 20 + 5 cm = <b>25</b> cm.";

$Q[27] = "The graph (sourced from the Australian Bureau of Statistics) shows the proportion of households with Internet access between 2004 and 2017. The data are split into households with, and without, children.<br><img src='images/PracticeTest5c_1.jpg'><br>The smallest change in the proportions of total households with Internet access was between";
$QType[27] = 0;
$QAnswers[27] = "d";
$QOptions[27] = array("2004-05 to 2005-06 ","2007-08 to 2008-09","2011-12 to 2012-13","2014-15 to 2015-16");
$prefix[27] = "";
$suffix[27] = "";
$Soln[27] = "2014-15 to 2015-16, option <b>(d)</b>, because this is where the slope of the total household graph is the least steep.";

$Q[28] = "The one hundred and five students in stage two from a particular school and their four teachers are going on an excursion to the zoo. They require one or two parent helpers for every seven or eight students. The students will travel by bus. Each bus will take up to forty two people. What is the maximum number of buses that could be required?";
$QType[28] = 1;
$QAnswers[28] = "4";
$QOptions[28] = array("0","0","0","0");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "Maximum number of parents = 2 parents for every 7 students<br> Sets of 7 students = 105 \\(\\div\\) 7 = 15<br>Maximum number of parents = 2 \\(\\times\\) 15 = 30<br>Total travellers = 105 + 4 + 30 = 139<br>Number of buses = 139 \\(\\div\\) 42 = 3.3 buses.<br>We must round up to ensure that everyone gets to travel on a bus, so the maximum number of buses = <b>4</b> buses.";

$Q[29] = "The one hundred and five students in stage two from a particular school and their four teachers are going on an excursion to the zoo. They require at least one parent for every eight students, and not more than two parents for every seven students. The students will travel by bus. Each bus will take up to forty two people. What is the minimum number of buses that could be required?";
$QType[29] = 1;
$QAnswers[29] = "3"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "";
$suffix[29] = "";
$Soln[29] = "Minimum number of parents = 1 parent for every 8 students.<br>Number of groups of 8 students = 105 \\(\\div\\) 8 = 13.125<br>So 14 parents are required.<br>Number of people travelling = 105 + 4 + 14 = 123<br>Number of buses required = 123 \\(\\div\\) 42 = 2.9, which rounds up to <b>3</b> buses.";

$Q[30] = "The black dial of the weighing scale in the image is in pounds and stones. There are 14 pounds in 1 stone. What is the reading, in pounds and stones, of the weighing scale?<br><img src='images/PracticeTest5c_2.jpg'><br>";
$QType[30] = 0;
$QAnswers[30] = "c";
$QOptions[30] = array("2 stones 11 pounds","11 pounds 2 stones","20 stones 11 pounds","21 stones 11 pounds");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "The reading is 20 stones, 11 pounds, which is option <b>c</b>";

$Q[31] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>What is at grid reference C4?";
$QType[31] = 0;
$QAnswers[31] = "b";
$QOptions[31] = array("residential","tourist information","shops","police station");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "The Tourist information (option <b>(b)</b> is at grid reference C4.";

$Q[32] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>What is the length of the perimeter of the primary school?";
$QType[32] = 1;
$QAnswers[32] = "1360";
$QOptions[32] = array("0","0","0","0");
$prefix[32] = "";
$suffix[32] = " m";
$Soln[32] = "scale: 5 squares = 100 m, so 1 square = 20 m<br>Primary school dimensions = 24 squares by 10 squares, where 1 square = 20 m<br> Primary school dimensions = 24 \\(\\times\\) 20 by 10 \\(\\times\\) 20 = 480 m by 200 m<br>Perimeter = 480 + 200 + 480 + 200 m = 1360 m";

$Q[33] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>What is the scale of this map?";
$QType[33] = 0;
$QAnswers[33] = "d";
$QOptions[33] = array("1 grid square represents 200 cm","1 grid square represents 100 m","1 grid square represents 200 m","1 grid square represents 20 m");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "5 grid squares represent 100 m, so 1 grid square represents 20 m, option <b>(d)</b>";

$Q[34] = "The map of a town is shown.<br><br><img src='images/PracticeTest5c_3.jpg'><br><br>Which set of directions will take you from the south side of the church to the bank?";
$QType[34] = 0;
$QAnswers[34] = "a"; 
$QOptions[34] = array("Walk east to the corner. Turn left and walk to the first intersection. Turn left and walk to the fourth intersection. Turn right and walk past the second intersection. The bank will be on your right.","Walk east to the corner. Turn right and walk to the first intersection. Turn right and walk to the fourth intersection Turn left and walk past the second intersection. The bank will be on your right.","Walk west to the corner. Turn left and walk to the fourth intersection. Turn right and walk past the second intersection. The bank will be on your right.","Walk west to the corner. Turn left and walk to the corner. Turn right and walk to the second intersection. Turn right and the bank will be on your left.");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "Option<b>(a)</b> has the correct instructions: Walk east to the corner. Turn left and walk to the first intersection. Turn left and walk to the fourth intersection. Turn right and walk past the second intersection. The bank will be on your right.";

$Q[35] = "An analog clock reads 8 o’clock. What is the small angle between the hands?";
$QType[35] = 1;
$QAnswers[35] = "120";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = " degrees";
$Soln[35] = "1 full revolution = 360 degrees. <br> There are 12 equally spaced numbers in 1 full revolution around a clock face. <br> The angle is smaller if it is measured anticlockwise from 12 to 8. This encompasses (12 - 8) = 4 numbers. As a fraction of the full revolution, this is \\(4\\over 12 \\) = \\(1\\over 3\\)<br>Distance in degrees = \\(1\\over 3\\) \\(\\times\\) 360 degrees = <b>120</b> degrees.";

$Q[36] = "The school assembly began at 11:23 am and concluded at 1:08 pm. How many hours long was the assembly?";
$QType[36] = 1;
$QAnswers[36] = "1.75";
$QOptions[36] = array("0","0","0","0");
$prefix[36] = "";
$suffix[36] = " hours";
$Soln[36]= "Time from 11:23 am to 1:08 pm = 7 minutes + 30 minutes + 60 minutes + 8 minutes = 105 minutes<br>In hours, 105 \\(\\div\\) 60 = <b>1.75</b> hours";

$Q[37] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part cordial to 4 parts water. How much drink can be made up if the whole cordial concentrate bottle is used?";
$QType[37] = 1;
$QAnswers[37] = "10";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = " L";
$Soln[37] = "For every 1 part of concentrate, 4 parts water are required. <br> For 1 L of concentrate, 4 L of water are used.<br>For 2 L of concentrate, 8 L of water are used.<br> Total volume = 2 L + 8 L = <b>10</b> L of drink.";

$Q[38] = "A Japanese class were researching how much they could buy in Tokyo for AU$50. They found that the exchange rate was 80.10 Japanese Yen was worth 1 Australian dollar. The price of a burger meal was 700 yen. How much change would they have – in Japanese yen - from their $50 after buying a burger meal in Tokyo?";
$QType[38] = 1;
$QAnswers[38] = "3305";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "";
$suffix[38] = " yen";
$Soln[38] = "50 Australian dollars = 80.10 \\(\\times\\) 50 yen = 4005 yen<br>Change = 4005 - 700 = <b>3305</b> yen.";

$Q[39] = "A rectangular pool with dimensions 20 m \\(\\times\\) 30 m is to be filled with 900 m<sup>3</sup> of water. What will be the average depth of water in the pool?";
$QType[39] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "b";
$QOptions[39] = array("180 cm","150 cm","120 cm","90 cm");
$prefix[39] = "";
$suffix[39] = "";
$Soln[39] = "Volume = length \\(\\times\\) width \\(\\times\\) depth <br> 900 = 20 \\(\\times\\) 30 \\(\\times\\) depth<br> 900 = 600 \\(\\times\\) depth<br> depth = 900 \\(\\div\\) 600 = 1.5 m = 150 cm, which is option <b>(b)</b>";

$Q[40] = "A teacher gave her students three assessment tasks over the course of a semester. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task value (%)</th><th>Marked out of</th><th>Student's mark</th></tr>
<tr><td>Task 1</td><td>20</td><td>50</td><td>40</td></tr>
<tr><td>Task 2</td><td>20</td><td>50</td><td>35</td></tr>
<tr><td>Task 3</td><td>60</td><td>50</td><td>30</td></tr>
</table><br>What was the student’s final mark, as a percentage, for the semester?";
$QType[40] = 1;
$QAnswers[40] = "66";
$QOptions[40] = array("0","0","0","0");
$prefix[40] = "";
$suffix[40] = "%";
$Soln[40] = "Final % mark = 40 \\(\\div\\) 50 \\(\\times\\) 20 + 35 \\(\\div\\) 50 \\(\\times\\) 20 + 30 \\(\\div\\) 50 \\(\\times\\) 60 = <b>66</b>%";

$Q[41] = "A coach taking a class on an excursion left the school at 8.40 am and travelled the 50 km to the destination at an average speed of 40 km/h. How many minutes did the journey take?";
$QType[41] = 1;
$QAnswers[41] = "75";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "";
$suffix[41] = " minutes";
$Soln[41] = "time = \\(distance \\over speed\\) = 50 km \\(\\div\\) 40 km/h = 1.25 hours = 1.25 \\(\\times\\) 60 = <b>75</b> minutes";

$Q[42] = "A teacher wants to buy 30 packs of cards to use in sentence-building activities. The table below shows the costs from two suppliers.<br>
<table>
<tr><th>Source</th><th>Cost per pack</th><th>Offers</th><th>Postage</th><th>Total</th></tr>
<tr><td>Catalogue</td><td>$15.51</td><td>5 packs for the price of 4</td><td>Free postage</td><td></td></tr>
<tr><td>Internet</td><td>$15.40</td><td>none</td><td>$9.95 per 10 packs</td><td></td></tr>
</table><br>What is the cheapest total cost if the catalogue supplier is used?";
$QType[42] = 1;
$QAnswers[42] = "372.24"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "$";
$suffix[42] = "";
$Soln[42] = "Using the offer, every 5th pack is free. So the teacher only pays for 24 packs (30 \\(\\div\\) 5 = 6, so 6 packs are supplied free, leaving (30 - 6) = 24 packs to be purchased.<br>Cost = 24 \\(\\times\\) $15.51 = $372.24";

$Q[43] = "A teacher wants to buy 30 packs of cards to use in sentence-building activities. The table below shows the costs from two suppliers.<br>
<table>
<tr><th>Source</th><th>Cost per pack</th><th>Offers</th><th>Postage</th><th>Total</th></tr>
<tr><td>Catalogue</td><td>$15.51</td><td>5 packs for the price of 4</td><td>Free postage</td><td></td></tr>
<tr><td>Internet</td><td>$15.40</td><td>none</td><td>$9.95 per 10 packs</td><td></td></tr>
</table><br>What is the total cost if the internet supplier is used?";
$QType[43] = 1;
$QAnswers[43] = "491.85";
$QOptions[43] = array("0","0","0","0");
$prefix[43] = "$";
$suffix[43] = "";
$Soln[43] = "Postage cost = 3 \\(\\times\\) $9.95 for 30 packs = $29.85<br>Total cost = $15.40 \\(\\times\\) 30 + $29.85 = $491.85";

$Q[44] = "A teacher wants to buy 30 packs of cards to use in sentence-building activities. The table below shows the costs from two suppliers.<br>
<table>
<tr><th>Source</th><th>Cost per pack</th><th>Offers</th><th>Postage</th><th>Total</th></tr>
<tr><td>Catalogue</td><td>$15.51</td><td>5 packs for the price of 4</td><td>Free postage</td><td>$124.08 for 10 packs</td></tr>
<tr><td>Internet</td><td>$15.40</td><td>none</td><td>$9.95 per 10 packs</td><td>$163.95 for 10 packs</td></tr>
</table><br>How much money will the teacher save by using the cheaper supplier?Give your answer to the nearest cent.";
$QType[44] = 1;
$QAnswers[44] = "119.61";
$QOptions[44] = array("0","0","0","0");
$prefix[44] = "$";
$suffix[44] = "";
$Soln[44] = "Savings for 10 packs = $163.95 - 124.08 = $39.87<br>Savings for 30 packs = $39.87 \\(\\times\\) 3 = $119.61";

$Q[45] = "A school is providing parent-teacher interviews in the mornings before school. Each interview is scheduled to last for 10 minutes. Teachers are required to be available for 1 hour before the start of classes to meet with parents. If a class has up to 28 students, what is the minimum number of days over which the parent-teacher interviews need to run?";
$QType[45] = 1;
$QAnswers[45] = "5";
$QOptions[45] = array("0","0","0","0");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "1 hour = 60 minutes <br>A teacher can have 60 minutes \\(\\div\\) 10 minutes = 6 interviews in 1 morning.<br>Days required for 28 students = 28 \\(\\div\\) 6 = 4.67 days<br> The parent teacher interviews need to run for at least <b>5</b> days.";

$Q[46] = "A teacher wants to buy an educational game from the UK. The game costs 168 pounds plus 12 pounds postage. The exchange rate is 1 British Pound is equivalent to 1.82 Australian dollars. How many Australian dollars will the teacher need to pay to purchase the game? Give your answer to the nearest cent.";
$QType[46] = 1;
$QAnswers[46] = "327.60";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "$";
$suffix[46] = " Australian";
$Soln[46] = "Game cost = 168 + 12 = 180 pounds<br>1 pound = 1.82 dollars<br>180 pounds = 180 \\(\\times\\) 1.82 = <b>327.60</b> Australian dollars.";

$Q[47] = "The graphs shows the weight versus height for all of the 12-year-old children in a class.<br><img src='images/PracticeTest5d_1.jpg'><br>What is the weight range amongst these children?";
$QType[47] = 1;
$QAnswers[47] = "14"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = " kg";
$Soln[47] = "Maximum weight = 32 kg<br>Minimum weight = 18 kg<br>Weight range = 32 - 18 = <b>14</b> kg";

$Q[48] = "The graphs shows the weight versus height for all of the 12-year-old children in a class.<br><img src='images/PracticeTest5d_1.jpg'><br>How many 12-year old children were in the class?";
$QType[48] = 1;
$QAnswers[48] = "15";
$QOptions[48] = array("0","0","0","0");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "From the graph, there were <b>15</b> children in the class.";

$Q[49] = "The graphs shows the weight versus height for all of the 12-year-old children in a class.<br><img src='images/PracticeTest5d_1.jpg'><br>What is the median height amongst the 12-year-old children?";
$QType[49] = 1;
$QAnswers[49] = "129";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = " cm";
$Soln[49]= "From the graph, median height = <b>129</b> cm";

$Q[50] = "In a primary school there are four classes of 26 children in year 6, three classes of 30 children in year 5, four classes of 23 children in year 4 and four classes of 19 children in year 3. How many children are in the primary school?";
$QType[50] = 1;
$QAnswers[50] = "362";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "Number of children = 4 \\(\\times\\) 26 + 3 \\(\\times\\) 30 + 4 \\(\\times\\) 23 + 4 \\(\\times\\) 19 = <b>362</b>";

$Q[51] = "In a group of 1200 school leavers, 60% went on to further study. The rest went on to employment. How many of these school leavers went on to employment?";
$QType[51] = 1;
$QAnswers[51] = "480";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = "";
$Soln[51] = "Percentage who went on to employment = 100 - 60% = 40%<br>Number who went on to employment = 40% \\(\\times\\) 1200 = <b>480</b>";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>Find 90% of 60 kg";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "54";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = " kg";
$Soln[52] = "10% \\(\\times\\) 60 kg = 6 kg<br>90% = 100% - 10% = 60 - 6 = <b>54</b> kg";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>A textbook costing $30 was discounted by 10%. Find the new cost of the textbook.";
$QType[53] = 1;
$QAnswers[53] = "27";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "Discount = 10% \\(\\times\\) $30 = $3<br>New price = $30 - 3 = $<b>27</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>What number is halfway between 0.3 and 0.8?";
$QType[54] = 1;
$QAnswers[54] = "0.55";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "<b>0.55</b> is halfway between: 0.8 - 0.3 = 0.5<br>0.5 \\(\\div\\) 2 = 0.25<br> 0.3 + 0.25 = 0.55";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>How many minutes are there in 2.8 hours?";
$QType[55] = 1;
$QAnswers[55] = "168"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = " minutes";
$Soln[55] = "2.8 hours \\(\\times\\) 60 minutes = <b>168</b> minutes";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>2 hours and 45 minutes is equivalent to";
$QType[56] = 0;
$QAnswers[56] = "d";
$QOptions[56] = array("2.25","2.3 hours","2.45 hours","2.75 hours");
$prefix[56] = "";
$suffix[56] = "";
$Soln[56] = "45 minutes = \\(3\\over 4\\) hour = 0.75 hour<br>2 h 45 min = 2.75 hours = option <b>(d)</b>";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>How many metres is equivalent to 8300 mm?";
$QType[57] = 1;
$QAnswers[57] = "8.3";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = " m";
$Soln[57] = "8300 mm = 830 cm = <b>8.3</b> m";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>How much change from $20 will I receive if I buy a salad for $7.80 and a coffee for $4.30?";
$QType[58] = 1;
$QAnswers[58] = "7.90";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "$";
$suffix[58] = "";
$Soln[58] = "Cost of salad + coffee = $7.80 + 4.30 = $12.10<br>Change = $20.00 - 12.10 = $<b>7.90</b>";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>Find the volume of a box with dimensions 5 cm by 4 cm by 3 cm.";
$QType[59] = 1;
$QAnswers[59] = "60";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = "cm<sup>3</sup>";
$Soln[59] = "5 cm \\(\\times\\) 4 cm \\(\\times\\) 3 cm = 60 cm<sup>3</sup>";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>3 \\(\\div\\) 0.5 = ";
$QType[60] = 1;
$QAnswers[60] = "6"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "";
$suffix[60] = "";
$Soln[60] = "3 \\(\\div\\) 0.5 = <b>6</b>";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>A bus driver drives for 18 hours and covers a distance of 1080 km. What is the average speed of the bus?";
$QType[61] = 1;
$QAnswers[61] = "60";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = " km/h";
$Soln[61] = "speed = distance \\(\\div\\) time = 1080 \\(\\div\\) 18 = <b>60</b> km/h";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>A car uses 8 litres of petrol for every 100 km travelled. The car's fuel tank can hold 56 litres. How far can the car travel on a full tank of petrol?";
$QType[62] = 1;
$QAnswers[62] = "700";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "";
$suffix[62] = " km";
$Soln[62]= "Distance = 56 \\(\\div\\) 8 \\(\\times\\) 100 = <b>700</b> km ";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>How much does it cost to buy three sandwiches at $7.65 each and two drinks at $3.30 each?";
$QType[63] = 1;
$QAnswers[63] = "29.55";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "$";
$suffix[63] = "";
$Soln[63] = "3 \\(\\times\\) $7.65 + 2 \\(\\times\\) $3.30 = $29.55";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>A box containing 100 markers weighs 1.7 kg. What is the weight of each marker in grams?";
$QType[64] = 1;
$QAnswers[64] = "17";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = " g";
$Soln[64] = "Weight of 100 markers = 1.7 kg = 1700 g<br> Weight of 1 marker = 1700 \\(\\div\\) 100 = <b>17</b> g";

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