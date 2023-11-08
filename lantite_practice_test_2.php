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

$Q[0] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below.<br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><th>A</th><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><th>B</th><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><th>C</th><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><th>D</th><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
</table><br>
Which school scored the lowest percentage of band 5 and 6 students in 2012?";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "b";
$QOptions[0] = array("A","B","C","D");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "School B, with 34.7%, which is option <b>b</b>";

$Q[1] = "A teacher gives her class a maths test each week. After 9 weeks of a 10-week term, one student has an average mark of 64%. What mark would this student need to get in the tenth test to bring their average mark up to 65%?";
$QType[1] = 0;
$QAnswers[1] = "d";
$QOptions[1] = array("65%","66%","68.1%","74%");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Correct answer is <b>(d)</b> as (9 \\(\\times\\) 64 + 74) \\(\\div\\) 10 = 65.";

$Q[2] = "A coach took a class on an excursion to Ballarat. It left the school at 7:30 am. It travelled at an average speed of 60 km/h for the first half hour. Then it travelled at an average speed of 90 km/hour for the next three and a half hours. At what time did the bus arrive in Ballarat?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("11:00 am","11:15 am","11:30 am","11:45 am");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The bus arrived in Ballarat 4 hours after it left. This means that it arrived at 11:30 am, which is <b>(c)</b>";

$Q[3] = "A teacher wishes to purchase a book from a US supplier. The book costs US$23.50 plus US$9 postage. The exchange rate is Australian $1 = US 72 cents. What will it cost, in Australian dollars, for the teacher to purchase the book and have it delivered?<br>Round your answer to the nearest cent.";
$QType[3] = 1;
$QAnswers[3] = "45.14"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "Australian $";
$suffix[3] = "";
$Soln[3] = "Cost in US dollars = $23.50 + $9 = $32.50<br>US 72 cents = US $0.72<br>US$0.72 = Australian $1<br> US$1 = Australian $1 \\(\\div\\) 0.72 = 1.388889<br>US$32.50 = 1.388889 \\(\\times\\) 32.50 = 45.14<br>The cost is <b>45.14</b> Australian dollars.";

$Q[4] = "Last year a teacher paid $200 per week in rent. This year he pays $210 per week. What percentage increase is this?";
$QType[4] = 0;
$QAnswers[4] = "a";
$QOptions[4] = array("5%","10%","15%","20%");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "$210 - $200 = $10<br>10 \\(\\div\\)$200 \\(\\times\\) 100% = 5%, which is <b>(a)</b>";

$Q[5] = "A school builds a new swimming pool. The pool is 25 m long, 14 m wide and 190 cm deep. What is the volume of the swimming pool in cubic metres?";
$QType[5] = 1;
$QAnswers[5] = "665";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " m<sup>3</sup>";
$Soln[5] = "190 cm = 1.9 m<br>
Volume = 25 \\(\\times\\) 14 \\(\\times\\) 1.9 = <b>665</b> m<sup>3</sup>";

$Q[6] = "A school builds a new swimming pool. The pool is 25 m long, 14 m wide and 190 cm deep. What is the volume of the swimming pool in litres? (hint: 1000 L = 1 m<sup>3</sup>)";
$QType[6] = 1;
$QAnswers[6] = "665000";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " L";
$Soln[6] = "190 cm = 1.9 m<br>
Volume = 25 \\(\\times\\) 14 \\(\\times\\) 1.9 = 665 m<sup>3</sup><br>
1 m<sup>3</sup> = 1000 L, so <br>
665 m<sup>3</sup> = 665 000 L<br>
Volume = <b>665000</b> litres.";

$Q[7] = "150 minutes are allowed for an examination. If the exam begins at 10:52 am, at what time does it finish?";
$QType[7] = 0;
$QAnswers[7] = "b";
$QOptions[7] = array("12:52 pm","1:22 pm","1:52 pm","2:22 pm");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "150 minutes = 2 hours and 30 minutes. 10:52 am + 2 hours and 30 minutes = 12:52 pm + 30 minutes = 1:22 pm, which is <b>(b)</b>";

$Q[8] = "A science teacher intends to use the following recipe with her class to make slime:<br><img src='images/PracticeTest2a_1.jpg'><br>Her students will work in groups of three. Each group will make up a batch of slime using this recipe. If there are 27 students in the class, how many litres of PVC school glue are required?";
$QType[8] = 1;
$QAnswers[8] = "2.25"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "Number of groups = 27 \\(\\div\\) 3 = 9<br> Each group uses 250 mL = 0.25 L PVC glue<br> Quantity of glue needed = 9 \\(\\times\\) 0.25 L = <b>2.25</b> L";

$Q[9] = "A science teacher intends to use the following recipe with her class to make slime:<br><img src='images/PracticeTest2a_1.jpg'><br>Her students will work in groups of three. Each group will make up a batch of slime using this recipe. What volume of slime will be made by each group";
$QType[9] = 0;
$QAnswers[9] = "b";
$QOptions[9] = array("250 mL","310 mL","550 mL","2.3 L");
$prefix[9] = "";
$suffix[9] = " mL";
$Soln[9] = "volume = 250 mL + 60 mL = 310 mL, which is option <b>(b)</b>.";

$Q[10] = "A year 9 class is selling pancakes to raise money. They are charging $2 for one pancake, or $3 for two pancakes. The maths staff members have $20 between them to spend on pancakes. If they buy the most pancakes they can, how much change will they receive from their $20?";
$QType[10] = 1;
$QAnswers[10] = "0";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "They can spend all of the $20 on pancakes. They can spend $18 to receive 6 \\(\\times\\) 3 = 18 pancakes, and then buy one more pancake with the remaining $2. This leaves them with $<b>0.00</b> remaining from their $20.";

$Q[11] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'><br> Which area has the highest number of jobs?";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("Mining","Electricity, gas, water and waste services","Accommodation and food services","Health care");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Health Care <b>(d)</b>";

$Q[12] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'><br> Which type of job is the best-paying, on average?";
$QType[12] = 0;
$QAnswers[12] = "a";
$QOptions[12] = array("Mining","Electricity, gas, water and waste services","Accommodation and food services","Health care");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Mining <b>(a)</b>";

$Q[13] = "For a cross country training event, a teacher needs to take water for all of the students. The teacher needs to take at least 700 mL for each student. There are 18 students in the event. What is the minimum amount of water the teacher needs to take? Give your answer to the nearest litre.";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "13";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " L";
$Soln[13] = "Total volume of water needed = 18 \\(\\times \\) 700 mL = 12600 mL = 12600 \\(\\div\\) 1000 L = 12.6 L. To the nearest litre, this is <b>13</b> Litres.";

$Q[14] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table:<br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Marked out of</th><th>Student's Mark</th></tr>
<tr><td style='text-align:center'>Task 1</td><td style='text-align:center'>25</td><td>50</td><td>40</td></tr>
<tr><td>Task 2</td><td>25</td><td>50</td><td>35</td></tr>
<tr><td>Task 3</td><td>50</td><td>40</td><td>30</td></tr>
</table><br>What grade did the student receive for the course?";
$QType[14] = 0;
$QAnswers[14] = "d";
$QOptions[14] = array("0-50 Fail","51-64 Pass","65-74 Credit","75-100 Distinction");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "% mark from test 1 = 40 \\(\\div\\) 50 \\(\\times\\) 25 = 20<br>
% mark from test 2 = 35 \\(\\div\\) 50 \\(\\times\\) 25 = 17.5<br>
% mark from test 1 = 30 \\(\\div\\) 40 \\(\\times\\) 50 = 37.5<br>
Total mark = 20 + 17.5 + 37.5 = 75, which is <b>(d)</b>";

$Q[15] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of Australians who volunteered during the last 12 months.<br><img src='images/PracticeTest2b_1.jpg'><br>True/False: Between ages of 35 and 85 and over the rate of volunteering declined steadily.";
$QType[15] = 0;
$QAnswers[15] = "b";
$QOptions[15] = array("True","False","N/A","N/A");
$prefix[15] = "";
$suffix[15] = "";
$Soln[15] = "False. The rate increases for 65-74 year olds.";

$Q[16] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of Australians who volunteered during the last 12 months.<br><img src='images/PracticeTest2b_1.jpg'><br>What percentage of people volunteered in the 35-44 age group? Give your answer to the nearest five percent.";
$QType[16] = 1;
$QAnswers[16] = "40"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "";
$suffix[16] = "%";
$Soln[16] = "From the graph about 39% of people in this age group volunteered. To the nearest 5% this is 40%.";

$Q[17] = "In an election for school captain, Isaac received \\(1\\over 3\\) of the votes and Brodie received \\(1\\over 4\\) of the votes. The remaining 105 votes were received by Lawrence. How many votes did Isaac receive?";
$QType[17] = 1;
$QAnswers[17] = "84";
$QOptions[17] = array("0","0","0","0");
$prefix[17] = "";
$suffix[17] = "";
$Soln[17] = "Fraction of votes obtained by Lawrence = 1 - (\\(1\\over 3\\) + \\(1\\over 4\\) ) = \\(5\\over 12\\)<br>\\(5\\over 12\\) = 105 votes<br> \\(1\\over 12\\) = 105 \\(\\div\\) 5 = 21 votes <br> Total number of votes = \\(12\\over 12\\) = 21 \\(\\times\\) 12 = 252 votes<br>Votes obtained by Isaac = \\(1\\over 3\\) \\(\\times\\) 252 = <b>84</b> votes.";

$Q[18] = "A school has four teachers for year 1 students and 76 students enrolled. If the classes are to be as close to equal size as possible, how many students need to be placed in each class?";
$QType[18] = 1;
$QAnswers[18] = "19";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = "";
$Soln[18] = "Number of students per class = 76 \\(\\div\\)4 = <b>19</b>";

$Q[19] = "A box contains red, yellow and blue balls. The probability of drawing a red ball is \\(5\\over 8\\) and the probability of drawing a yellow ball is \\(1 \\over 8 \\) . If there are 64 balls, how many of the balls are blue?";
$QType[19] = 1;
$QAnswers[19] = "16";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = "";
$Soln[19] = "Probabilty of drawing a blue ball = \\(8\\over 8\\) - (\\(5\\over 8\\)+\\(1\\over 8\\)) = \\(2\\over 8\\)<br>Number of blue balls = \\(2\\over 8\\) \\(\\times \\) 64 = <b>16</b>.";

$Q[20] = "A map of a small town is shown. The school is shown in yellow. <br><img src='images/PracticeTest2b_2.jpg'><br> What is the approximate area of the school (which is coloured yellow)?";
$QType[20] = 0;
$QAnswers[20] = "c";
$QOptions[20] = array("40 500 m<sup>2</sup>","80 500 m<sup>2</sup>","112 500 m<sup>2</sup>","160 000 m<sup>2</sup>");
$prefix[20] = "";
$suffix[20] = "";
$Soln[20] = "Area is approximately 350 \\(\\times\\) 350 - 100 \\(\\times\\) 100 = 112 500, which is option <b>(c)</b>";

$Q[21] = "A map of a small town is shown. <br><img src='images/PracticeTest2b_2.jpg'><br> The school is shown in yellow and the playing field is shown as a green circle inside the park. Students from the school are required to walk to the playing field for sport sessions. Which of the following routes will take students from school to the playing field?";
$QType[21] = 0;
$QAnswers[21] = "d";
$QOptions[21] = array("Exit the school onto Blueberry Road. Turn left and walk to the corner. Turn left again and walk to the corner. Turn left and continue to the playing field","Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn left and walk to the corner. Turn left and continue to the playing field.","Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn right and walk to the corner. Turn right and continue to the playing field.","Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn left and walk to the corner. Turn right and continue to the playing field.");
$prefix[21] = "";
$suffix[21] = "";
$Soln[21] = "The correct set of directions is 'Exit the school onto Blueberry Road. Turn right and walk to the corner. Turn left and walk to the corner. Turn right and continue to the playing field', which is option <b>(d)</b>";

$Q[22] = "A map of a small town is shown. <br><img src='images/PracticeTest2b_2.jpg'><br> Which of the following set of driving directions would take you from the corner of Date Road and Tomato Street to the  cul-de-sac where Banana Road meets the pedestrian mall? ";
$QType[22] = 0;
$QAnswers[22] = "c";
$QOptions[22] = array("Drive east along Date Road. Turn North onto Onion Street. Turn West onto Banana Road.","Drive west along Date Road. Turn South onto Onion Street. Turn East onto Banana Road.","Drive north along Tomato Street. Turn west onto Apricot Road. Turn south onto Onion Street. Turn east onto Banana Road.","Drive north along Tomato Street. Turn east onto Apricot Road. Turn north onto Onion Street. Turn west onto Banana Road.");
$prefix[22] = "";
$suffix[22] = "";
$Soln[22] = "The correct set of directions is 'Drive north along Tomato Street. Turn west onto Apricot Road. Turn south onto Onion Street. Turn east onto Banana Road.', which is option <b>(c)</b>";

$Q[23] = "A box contains 6 blue balls, 5 red balls and 8 yellow balls. What is the probability of randomly drawing a ball that is not red? Give your answer as a decimal to 2 decimal places.";
$QType[23] = 1;
$QAnswers[23] = "0.74";
$QOptions[23] = array("0","0","0","0");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "Total number of balls = 6 + 5 + 8 = 19<br>Number of non-red balls = 6 + 8 = 14<br>Proportion of balls that are not red = \\(14\\over 19\\) = 0.7368<br>Probability of randomly drawing a ball that is not red = <b>0.74</b> (to 2 decimal places).";

$Q[24] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'> <br> True/False: There are more than three times as many people employed in Education and training than in Finance and insurance services.";
$QType[24] = 0;
$QAnswers[24] = "b";
$QOptions[24] = array("True","False","N/A","N/A");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "False <b>(b)</b>. There are just over 1 400 000 people employed in education and training, and around 700 000 in finance and insurance services.";

$Q[25] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs available, and the median employment income for various types of jobs.<img src='images/PracticeTest2a_2.jpg'> <br> True/False: Retail trade has a median income that is approximately double that for Accommodation and food services";
$QType[25] = 0;
$QAnswers[25] = "a";
$QOptions[25] = array("True","False","N/A","N/A");
$prefix[25] = "";
$suffix[25] = "";
$Soln[25] = "Retail trade median income is around $18 000 and accommodation and food services median is just over $8000, around $9000.";

$Q[26] = "The ratio of the length to the width of a rectangular classroom is 4:3. If the room is 10 m long, how wide is the room?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "7.5";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "";
$suffix[26] = " m";
$Soln[26] = "4 parts = 10 m<br>1 part = 10 m \\(\\div\\) 4 = 2.5 m<br>3 parts = 3 \\(\\times\\) 2.5 = 7.5 m<br>The room is <b>7.5</b> m wide.";

$Q[27] = "A teacher bought four sandwiches and three identical drinks for $35. If each sandwich cost $6.50, what was the cost of each drink?";
$QType[27] = 1;
$QAnswers[27] = "3";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "$";
$suffix[27] = "";
$Soln[27] = "Cost of sandwiches = 4 \\(\\times\\) $6.50 = $26.00<br> Money spent drinks = $35.00 - $26.00 = $9.00<br>Cost of each drink = $9.00 \\(\\div\\) 3 = $<b>3.00</b>";

$Q[28] = "A student is aiming for a mark of at least 70% in a subject. He got \\(30\\over 50\\) on an assessment worth 20% of the total mark and \\(46\\over 60 \\) on an assessment worth 30% of the total mark. The final exam is worth 50% of the marks, and is to be marked out of 80. Students can only receive a whole number of marks in the final exam (no partial marks are given). What is the minimum mark that the student can receive (out of 80) in the final exam to meet his goal?";
$QType[28] = 1;
$QAnswers[28] = "56";
$QOptions[28] = array("0","0","0","0");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "Minimum final mark required out of 100 = 70<br>
Marks contributed by test 1 = \\(30\\over 50 \\times \\) 20 = 12<br>
Marks contributed by test 2 = \\(46\\over 60 \\times \\) 30 = 23 <br>
Marks required from final exam = 70 - (12 + 23) = 35<br>
The minimum mark he can achieve is 35 percentage points out of a possible 50. This corresponds to a mark of 35 \\(\\div\\) 50 \\(\\times\\) 80 = 56<br>The minimum mark that the student can achieve is <b>56</b> out of 80.";

$Q[29] = "Several students from the French language class are going on a six week exchange to France. In researching for the trip they found a useful book in the school library, but the book referred to prices in the old currency of Francs rather than the present day currency of Euros. The book said that 1 Australian dollar was worth 4 French Francs. If the present day exchange rate is that 1 Australian dollar is worth 0.62 Euros, how many Euros is 1 French Franc worth? Give your answer to 2 decimal places.";
$QType[29] = 1;
$QAnswers[29] = "0.16"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "";
$suffix[29] = " euros";
$Soln[29] = "1 Australian dollar = 4 French Francs = 0.62 Euros<br>1 French Franc = 0.62 \\(\\div\\) 4 = 0.155.<br>Rounded to 2 decimal places this means that 1 French Franc is worth <b>0.16</b> Euros";

$Q[30] = "The following table shows the relationship between degrees Farenheit and temperature in Kelvin for five different temperatures.<br>
<table>
<tr><th>Kelvin (K)</th><th>Farenheit (F)</th></tr>
<tr><td>255</td><td>0</td></tr>
<tr><td>297</td><td>75</td></tr>
<tr><td>338</td><td>150</td></tr>
<tr><td>380</td><td>225</td></tr>
<tr><td>422</td><td>300</td></tr>
</table><br>
which of the following formulae correctly represents the relationship between degrees Farenheit (F) and Kelvin (K)?";
$QType[30] = 0;
$QAnswers[30] = "c";
$QOptions[30] = array("K = F + 255","K = (F - 32) \\(\\times\\) \\(5\\over 9\\)","K = (F - 32) \\(\\times\\) \\(5\\over 9\\) + 273.15","K = F \\(\\times\\) \\(5\\over 9\\) - 273.15");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "The correct formula is Solution is K = (F - 32) \\(\\times\\) \\(5\\over 9\\) + 273.15, which is option <b>(c)</b>";

$Q[31] = "A box of ice creams contains 9 ice creams. The school canteen needs to order 250 ice creams. How many boxes do they need to order?";
$QType[31] = 1;
$QAnswers[31] = "28";
$QOptions[31] = array("0","0","0","0");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "250 \\(\\div \\) 9 = 27.78 <br> Number of boxes required = <b>28</b> (we need to round up to ensure we have 250 ice creams)";

$Q[32] = "The graph shows the percentage of Australia’s population living in each of the states and territories. The percentage for Victoria is missing from the graph. At the time these data were collected, the population of Australia was 22 693 600. <br><img src='images/PracticeTest2c_1.jpg'><br>How many people live in Victoria?";
$QType[32] = 1;
$QAnswers[32] = "5673400";
$QOptions[32] = array("0","0","0","0");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "Percentage of population in Victoria = 100 - (20 + 11 + 7 + 2 + 2 + 1 + 32) = 25%<br>Number of people in Victoria = 25% \\(\\times\\) 22693600 = <b>5673400</b>";

$Q[33] = "20% of a school’s students are in year 12. If there are 120 students in year 12, how many students are in the school?";
$QType[33] = 1;
$QAnswers[33] = "600";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "Number of students = 100%<br> 20% = 120 students, so 20% \\(\\times \\) 5 = 100% = 120 \\(\\times \\) 5 students = <b>600</b> students.";

$Q[34] = "What metric weight is shown on this scale? <br><img src='images/PracticeTest2c_2.jpg'><br>";
$QType[34] = 0;
$QAnswers[34] = "a"; 
$QOptions[34] = array("1.1 kg","1.25 kg","2.1 kg","2.25 kg");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "1.1 kg, which is answer <b>(a)</b>";

$Q[35] = "An analog clock reads 3 o’clock. What is the small angle between the hands?";
$QType[35] = 1;
$QAnswers[35] = "90";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = " degrees";
$Soln[35] = "The hands make a right angle, which is <b>90</b> degrees.";

$Q[36] = "The following table shows the achievement of year 3 students in the NAPLAN Numeracy exam for 2017.<br><img src='images/PracticeTest2c_3.jpg'><br>Which state had the lowest participation rate?";
$QType[36] = 0;
$QAnswers[36] = "d";
$QOptions[36] = array("NSW","Qld","SA","NT");
$prefix[36] = "";
$suffix[36] = "";
$Soln[36]= "NT - option <b>(d)</b> - had the lowest participation rate at 86.6%.";

$Q[37] = "The following table shows the achievement of year 3 students in the NAPLAN Numeracy exam for 2017.<br><img src='images/PracticeTest2c_3.jpg'><br>What percentage of Australian students who sat the test were performing above the national minimum standard? Round your answer to the nearest whole percentage.";
$QType[37] = 1;
$QAnswers[37] = "87";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = " %";
$Soln[37] = "Students performing above the national minumim standard = students in bands 3-6 = 19.7% + 27.3% + 22.7% + 17.1% = 86.8%, which rounds up to <b>87</b>%.";

$Q[38] = "The following table shows the achievement of year 3 students in the NAPLAN Numeracy exam for 2017.<br><img src='images/PracticeTest2c_3.jpg'><br>True/False: In South Australia there were more students at or below the minimum standard than in band 6 and above.";
$QType[38] = 0;
$QAnswers[38] = "a";
$QOptions[38] = array("True","False","N/A","N/A");
$prefix[38] = "";
$suffix[38] = "";
$Soln[38] = "Percentage of SA students in bands 1 and 2 = 4.3 + 11.9 = 16.2%<br> This figure is even higher if we include the students who were exempt from the test.<br> There are 10.5% of SA students in band 6 and above.<br>So there are fewer SA students in band 6 and above, so the statement is <b>true (a)</b>.";

$Q[39] = "One year, a school’s fireworks fundraiser raised $18 642.45. The next year the fundraiser raised $814 more. How much was raised by the fundraiser over the two years?";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "38098.90";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "$";
$suffix[39] = "";
$Soln[39] = "Amount raised = $18642.45 + $18642.45 + $814 = $<b>38098.90</b>";

$Q[40] = "A counsellor is employed one day per week on a multi-campus secondary school that has three campuses. The times taken to walk between the three campuses are given in the following table:<br>
<table>
<tr><th></th><th>Campus A</th><th>Campus B</th><th>Campus C</th></tr>
<tr><td>Campus A</td><td></td><td>10 minutes</td><td>25 minutes</td></tr>
<tr><td>Campus B</td><td>10 minutes</td><td></td><td>15 minutes</td></tr>
<tr><td>Campus C</td><td>25 minutes</td><td>15 minutes</td><td></td></tr>
</table><br>
If the counsellor is required to visit all three campuses during the day, what is the minimum time that they must spend travelling between the campuses?";
$QType[40] = 1;
$QAnswers[40] = "25";
$QOptions[40] = array("0","0","0","0");
$prefix[40] = "";
$suffix[40] = " minutes";
$Soln[40] = "They should go from A to B (10 minutes) and then to C (15 minutes) giving a travel time of 25 minutes. This is the shortest travelling time starting from A.";

$Q[41] = "A counsellor is employed one day per week on a multi-campus secondary school that has three campuses. The times taken to walk between the three campuses are given in the following table:<br>
<table>
<tr><th></th><th>Campus A</th><th>Campus B</th><th>Campus C</th></tr>
<tr><td>Campus A</td><td></td><td>10 minutes</td><td>25 minutes</td></tr>
<tr><td>Campus B</td><td>10 minutes</td><td></td><td>15 minutes</td></tr>
<tr><td>Campus C</td><td>25 minutes</td><td>15 minutes</td><td></td></tr>
</table><br>
If the counsellor starts at Campus A, what order should they visit the campuses in to minimize their travelling time?";
$QType[41] = 0;
$QAnswers[41] = "a";
$QOptions[41] = array("ABC","ACB","BAC","CAB");
$prefix[41] = "";
$suffix[41] = "";
$Soln[41] = "They should go from A to B (10 minutes) and then to C (15 minutes) giving a travel time of 25 minutes. This is the shortest travelling time starting from A.";

$Q[42] = "A school builds a new swimming pool. The volume of the pool is 700 m<sup>3</sup>. If water costs $2.27 per kilolitre, what is the cost to fill the pool? (1 kilolitre = 1000 litres)";
$QType[42] = 1;
$QAnswers[42] = "1589"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "$";
$suffix[42] = "";
$Soln[42] = "Volume = 700 m<sup>3</sup><br>1000 L = 1 m<sup>3</sup>, so 1 m<sup>3</sup> = 1 kilolitre<br>Volume = 700 kilolitres<br>Cost = $2.27 \\(\\times\\) 700 = $1589";

$Q[43] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br>True/False: Class B had a greater range of marks than class A.";
$QType[43] = 0;
$QAnswers[43] = "a";
$QOptions[43] = array("True","False","N/A","N/A");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "True: option <b>(a)</b>";

$Q[44] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br>True/False: There were students in the second quartile of class B who outperformed all of the students in the third quartile of class A.";
$QType[44] = 0;
$QAnswers[44] = "a";
$QOptions[44] = array("True","False","N/A","N/A");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "True: option <b>(a)</b>";

$Q[45] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br>True/False: Class A achieved a median mark of 66%";
$QType[45] = 0;
$QAnswers[45] = "a";
$QOptions[45] =  array("True","False","N/A","N/A");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "True: option <b>(a)</b>";

$Q[46] = "Students in two classes sat a test. The results are summarised in the following box-and-whisker plot.<br><img src='images/PracticeTest2d_1.jpg'><br> The test was marked out of 100 and all marks awarded were whole numbers. What was the highest mark (out of 100) achieved by a student in the test?";
$QType[46] = 1;
$QAnswers[46] = "93";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "";
$suffix[46] = "";
$Soln[46] = "The highest mark achieved was <b>93</b>";

$Q[47] = "In a group of 80 senior students, 40% choose to study chemistry and biology, which 20% choose to study chemistry and physics. No students study biology and physics. How many students study chemistry?";
$QType[47] = 1;
$QAnswers[47] = "48"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = "";
$Soln[47] = "Percentage of students studying chemistry = 40% + 20% = 60%<br>Number of students studying chemistry = 60% \\(\\times\\) 80 = <b>48</b> students.";

$Q[48] = "A school has 3 maths teachers who teach the three year 7 classes. The next year the same three teachers are randomly assigned to teach one of the three year 8 classes. What is the probability that a particular student has the same maths teacher for year 7 and year 8?";
$QType[48] = 0;
$QAnswers[48] = "d";
$QOptions[48] = array("\\(1\\over 8\\)","\\(1\\over 6\\)","\\(1\\over 4\\)","\\(1\\over 3\\)");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "If we call the teachers a, b, and c then all the possible combinations of teachers that a student can have are aa ab ac ba bb bc ca cb cc.<br>There are 9 combinations, and in 3 of them the student has the same teacher. <br>The probability that a student has the same teacher for year 7 and 8 is \\(3\\over 9\\) = \\(1\\over 3\\), which is option <b>(d)</b>";

$Q[49] = "Two classes sat a class test that was marked out of 10. The results are shown in the following table.<br><img src='images/PracticeTest2d_2.jpg'><br>Which class had the greater range of marks?";
$QType[49] = 0;
$QAnswers[49] = "a";
$QOptions[49] = array("Class 1","Class 2","The ranges were equal","It is not possible to tell from these data");
$prefix[49] = "";
$suffix[49] = "";
$Soln[49]= "Class 1 has the greater range (option <b>(a)</b>)";

$Q[50] = "Two classes sat a class test that was marked out of 10. The results are shown in the following graph.<br><img src='images/PracticeTest2d_2.jpg'><br>How many students were there in class 1?";
$QType[50] = 1;
$QAnswers[50] = "25";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "There were <b>25</b> students.";

$Q[51] = "Two classes sat a class test that was marked out of 10. The results are shown in the following graph.<br><img src='images/PracticeTest2d_2.jpg'><br>Students required a mark of at least 50% to pass. What percentage of students passed the exam?";
$QType[51] = 1;
$QAnswers[51] = "80";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = "%";
$Soln[51] = "50% corresponds to a mark of 5 out of 10.<br>40 out of 50 students got marks of 5 or more = <b>80</b>%.";

$Q[52] = "<b>NON-CALULATOR</b><br><br>Find 25% of 168 cm";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "42";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = " cm";
$Soln[52] = "25% = \\(1\\over 4\\)<br> 168 \\(\\div\\) 4 = <b>42</b>";

$Q[53] = "<b>NON-CALULATOR</b><br><br>A school was quoted a price of $2200 for a set of outdoor furniture. However, this price did not include g.s.t. Find the cost of the furniture once 10% g.s.t. is included.";
$QType[53] = 1;
$QAnswers[53] = "2420";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "10% \\(\\times\\) $2200 = $220<br>$2200 + $220 = $<b>2420</b>";

$Q[54] = "<b>NON-CALULATOR</b><br><br>Calculate 3 + (4 \\(\\times\\) 5) − (9 + 8)";
$QType[54] = 1;
$QAnswers[54] = "6";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "3 + (4 \\(\\times\\) 5) - (9 + 8) = 3 + 20 - 17 = <b>6</b>";

$Q[55] = "<b>NON-CALULATOR</b><br><br>Find 20% of 1.7 kg in grams";
$QType[55] = 1;
$QAnswers[55] = "340"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = " g";
$Soln[55] = "1.7 kg = 1700 g<br>10% \\(\\times\\) 1700 g = 170 g<br>20% \\(\\times\\) 1700 g = 2 \\(\\times\\) 170 g = <b>340</b> g<br>";

$Q[56] = "<b>NON-CALULATOR</b><br><br>43 kilograms and 78 grams is the same as";
$QType[56] = 0;
$QAnswers[56] = "b";
$QOptions[56] = array("43.78 kg","43.078 kg","43.0078 kg","43780 g");
$prefix[56] = "";
$suffix[56] = "";
$Soln[56] = "78 g = 0.078 kg<br> 43 + 0.078 = 43.078, which is <b>(b)</b>";

$Q[57] = "<b>NON-CALULATOR</b><br><br>A school buys 200 ping pong balls at the start of the year. If 10% of them are lost during the year, how many remain at the end of the year?";
$QType[57] = 1;
$QAnswers[57] = "180";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = "";
$Soln[57] = "Balls lost: 10% of 200 = 20<br>Balls remaining = 200 - 20 = <b>180</b>";

$Q[58] = "<b>NON-CALULATOR</b><br><br>A box of 100 identical textbooks weighs 20 kg. How much does each textbook weigh?";
$QType[58] = 1;
$QAnswers[58] = "0.2";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = " kg";
$Soln[58] = "20 \\(\\div\\) 100 = <b>0.2</b> kg";

$Q[59] = "<b>NON-CALULATOR</b><br><br>Convert 0.05 metres to centimetres.";
$QType[59] = 1;
$QAnswers[59] = "5";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = " cm";
$Soln[59] = "0.05 m = 0.05 \\(\\times\\) 100 cm = <b>5</b> cm";

$Q[60] = "<b>NON-CALULATOR</b><br><br>What is 5% of twenty three thousand?";
$QType[60] = 1;
$QAnswers[60] = "1150"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "";
$suffix[60] = "";
$Soln[60] = "10% \\(\\times\\) 23000 = 2300<br>5% \\(\\times\\) 23000 = 2300 \\(\\div\\) 2 = <b>1150</b>";

$Q[61] = "<b>NON-CALULATOR</b><br><br>If a teacher buys three coffees for $4.15 each, how much change will she receive from $20?";
$QType[61] = 1;
$QAnswers[61] = "7.55";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "$";
$suffix[61] = "";
$Soln[61] = "3 \\(\\times\\) $4.15 = $12.45<br>$20.00 - $12.45 = $<b>7.55</b>";

$Q[62] = "<b>NON-CALULATOR</b><br><br>In 2016 it was estimated that 786,689 of the 24.21 million Australians identified as Aboriginal or Torres Strait Islander. Approximately what percentage of the population identify as Aboriginal or Torres Strait Islander? ";
$QType[62] = 0;
$QAnswers[62] = "a";
$QOptions[62] = array("3%","23%","43%","63%");
$prefix[62] = "";
$suffix[62] = "";
$Soln[62]= "786 689 \\(\\div\\) 24 210000 is close to 750 000 \\(\\div\\) 25 000 000<br>This is the same as 75 \\(\\div\\) 2500 = 0.03 = 3%, which is <b>(a)</b>";

$Q[63] = "<b>NON-CALULATOR</b><br><br>Find the area of a square with side length 8 cm.";
$QType[63] = 1;
$QAnswers[63] = "64";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = " cm<sup>2</sup>";
$Soln[63] = "8 \\(\\times\\) 8 = <b>64</b>";

$Q[64] = "<b>NON-CALULATOR</b><br><br>What is 75% of $80?";
$QType[64] = 1;
$QAnswers[64] = "60";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "$";
$suffix[64] = "";
$Soln[64] = "75% = \\(3\\over 4\\)<br>\\(1\\over 4 \\times 80 = \\)20<br> \\(3\\over 4 \\times 80 \\) = 3 \\(\\times\\) 20 = <b>60</b>";

$_SESSION["Q"] = $Q;
$_SESSION["Qtype"] = $QType;
$_SESSION["QAnswers"] = $QAnswers;
$_SESSION["QOptions"] = $QOptions;
$_SESSION["prefix"] = $prefix;
$_SESSION["suffix"] = $suffix;
$_SESSION["Soln"] = $Soln;
$_SESSION["QNo"] = 0;
$_SESSION["QCorrect"] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
$_SESSION["YourAnswer"] = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

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