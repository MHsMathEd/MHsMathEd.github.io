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

$Q[0] = "A composite class of 28 students in years 1 and 2 has 50% of its students in year 1. How many students are in year 2?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "14";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Percentage of students in year 2 = 100%-50% = 50%<br>Number of students in year 2 = 50% \\(\\times\\) 28 = 14";

$Q[1] = "The table (sourced from the Australian Bureau of Statistics) shows the number of school students enrolled in schools.<br>
<table>
<tr><th>State or Territory</th><th>Government</th><th>Non-Government</th></tr>
<tr><td>ACT</td><td>41 886</td><td>27 503</td></tr>
<tr><td>NSW</td><td>791 763</td><td>417 544</td></tr>
<tr><td>NT</td><td>30 515</td><td>11 180</td></tr>
<tr><td>Qld</td><td>547 137</td><td>265 655</td></tr>
<tr><td>SA</td><td>173 506</td><td>93 199</td></tr>
<tr><td>Tas</td><td>56 669</td><td>24 325</td></tr>
<tr><td>Vic</td><td>606 475</td><td>348 160</td></tr>
<tr><td>WA</td><td>276 914</td><td>136 794</td></tr>
</table><br>
How many students were enrolled in government schools?";
$QType[1] = 1;
$QAnswers[1] = "2524865";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "41886 + 791763 + 30515 + 547137 + 173506 + 56669 + 606475 + 276914 = <b>2524865</b> students.";

$Q[2] = "The table (sourced from the Australian Bureau of Statistics) shows the number of school students enrolled in schools.<br>
<table>
<tr><th>State or Territory</th><th>Government</th><th>Non-Government</th></tr>
<tr><td>ACT</td><td>41 886</td><td>27 503</td></tr>
<tr><td>NSW</td><td>791 763</td><td>417 544</td></tr>
<tr><td>NT</td><td>30 515</td><td>11 180</td></tr>
<tr><td>Qld</td><td>547 137</td><td>265 655</td></tr>
<tr><td>SA</td><td>173 506</td><td>93 199</td></tr>
<tr><td>Tas</td><td>56 669</td><td>24 325</td></tr>
<tr><td>Vic</td><td>606 475</td><td>348 160</td></tr>
<tr><td>WA</td><td>276 914</td><td>136 794</td></tr>
</table><br>
Which state or territory has the highest proportion of its students enrolled in non-government schools?";
$QType[2] = 0;
$QAnswers[2] = "a";
$QOptions[2] = array("ACT","NSW","NT","Qld");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "Proportions: <br>
<table>
<tr><th>State or Territory</th><th>Proportion</th></tr>
<tr><td>ACT</td><td>\\(27503 \\over (41886 + 27503)\\) = 0.396</td></tr>
<tr><td>NSW</td><td>\\(417544 \\over (791763 + 417544)\\) = 0.345</td></tr>
<tr><td>NT</td><td>\\(11180 \\over (30515 + 11180)\\) = 0.268</td></tr>
<tr><td>Qld</td><td>\\(265655 \\over (547137 + 265655)\\) = 0.327</td></tr>
<tr><td>SA</td><td>\\(93199 \\over (173506 + 93199)\\) = 0.349</td></tr>
<tr><td>Tas</td><td>\\(24325 \\over (56669 + 24325)\\) = 0.300</td></tr>
<tr><td>Vic</td><td>\\(348160 \\over (606475 + 348160)\\) = 0.365</td></tr>
<tr><td>WA</td><td>\\(136794 \\over (276914 + 136794)\\) = 0.331</td></tr>
<tr></tr>
</table><br>So ACT has the highest proportion, which is option <b>(a)</b>";

$Q[3] = "A catering class were preparing a meal for the victorious school football team, and visiting dignitaries. The meal was due to commence at 1:10 pm. The class had calculated that the food would take two and a half hours to prepare. At what time did they need to start preparing in order to have the meal ready on time?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("10:10 am","10:40 am","11:10 am","11:40 am");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "1:10 pm - 2.5 hours = 10:40 am, which is option <b>(b)</b>";

$Q[4] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(3\\over 5\\). The probability that it is white is equal to the probability that it is green. If there are 8 green marbles, how many black marbles are there?";
$QType[4] = 1;
$QAnswers[4] = "24";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Proportion of marbles that are black = \\(3\\over 5\\)<br>Proportion of marbles that are green = \\(1\\over 5\\)<br>So \\(1\\over 5\\) of the marbles = 8 marbles <br>Number of marbles that are black = \\(3\\over 5\\) = 3 \\(\\times\\) \\(1\\over 5\\) = 3 \\(\\times\\) 8 = <b>24</b>";

$Q[5] = "The English staff at a particular school are reviewing the books that they have available as class texts. They have put together a scatterplot of the number of classes that have used each book as a function of the time that they have had the book.<br><br><img src='images/PracticeTest4a_1.jpg'><br><br>What is the median length of time the English department has had the books?";
$QType[5] = 1;
$QAnswers[5] = "6";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " years";
$Soln[5] = "There are 13 sets of books, so the median will be the 7th book when the books are ordered according to age. This has been held for 6 years, so median = <b>6</b> years.";

$Q[6] = "The English staff at a particular school are reviewing the books that they have available as class texts. They have put together a scatterplot of the number of classes that have used each book as a function of the time that they have had the book.<br><br><img src='images/PracticeTest4a_1.jpg'><br><br>What is the range of the number of times the books have been studied?";
$QType[6] = 1;
$QAnswers[6] = "19";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "range = greatest - smallest = 21 - 2 = <b>19</b> times";

$Q[7] = "The English staff at a particular school are reviewing the books that they have available as class texts. They have put together a scatterplot of the number of classes that have used each book as a function of the time that they have had the book.<br><br><img src='images/PracticeTest4a_2.jpg'><br><br>Which of the books A, B, C or D marked on the graph has been read least frequently?";
$QType[7] = 0;
$QAnswers[7] = "b";
$QOptions[7] = array("A","B","C","D");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Book A has been read 2 times in 1 year<br>Book B has been read 5 times in 8 years = \\(5\\over 8\\) = 0.625 times per year<br>Book C has been read 15 times in 12 years = \\(15\\over 12\\) = 1.25 times per year<br>Book D has been read 21 times in 8 years = \\(21\\over 8\\) = 2.625 times per year.<br>The book with the lowest frequency is <b>B</b>";

$Q[8] = "A bamboo plant grows 5 cm in 10 weeks. How much does it grow in 14 weeks? ";
$QType[8] = 1;
$QAnswers[8] = "7"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " cm";
$Soln[8] = "Plant grows 5 cm in 10 weeks. <br> Plant grows 5 \\(\\div\\) 10 = 0.5 cm in 5 weeks.<br> Plant grows 0.5 \\(\\times\\) 14 = <b>7</b> cm in 14 weeks.";

$Q[9] = "A teacher has a roll of stickers. After using 75 of them, \\(1\\over 4\\) of the stickers from the roll are left unused. What percentage of stickers has the teacher used?";
$QType[9] = 1;
$QAnswers[9] = "75";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "%";
$Soln[9] = "Fraction of stickers used = 1 - \\(1\\over 4\\) = \\(3\\over 4\\)<br> \\(3\\over 4\\) as a percentage = 3 \\(\\div\\) 4 \\(\\times\\) 100% = <b>75</b>%";

$Q[10] = "A shop sells pencils in boxes of 12. A box costs $3.90. If a teacher needs to buy 30 pencils, how much will she need to pay?";
$QType[10] = 1;
$QAnswers[10] = "11.70";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "$";
$suffix[10] = "";
$Soln[10]= "30 \\(\\div\\) 12 = 2.5 so she will need to buy 3 boxes. <br> Cost for 3 boxes = 3 \\(\\times\\) $3.90 = $11.70";

$Q[11] = "The local community swimming pool was drained over winter. The pool is 25 m long, 15 m wide and 1.8 m deep. How many kilolitres of water are required to refill it?";
$QType[11] = 1;
$QAnswers[11] = "675";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " kL";
$Soln[11] = "Volume in cubic metres = 25 \\(\\times\\) 15 \\(\\times\\) 1.8 = 675 m<sup>3</sup><br>1 m<sup>3</sup> = 1000 L = 1 kL<br>Volume in kilolitres = <b>675</b> kL";

$Q[12] = "A teacher is planning the route for the school cross country run. She wants the students to run around the perimeter of the school. The school perimeter is shown in the figure.<br><br><img src='images/PracticeTest4a_3.jpg'><br><br>If students need to run 3 km, how many laps of the perimeter do they need to run? Give your answer to 1 decimal place.";
$QType[12] = 1;
$QAnswers[12] = "3.3";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "Perimeter = 100 + 130 + 50 + 40 + 50 + 130 + 100 + 300 = 900 m.<br> 3 km = 3000 m<br>Number of laps needed = 3000 \\(\\div\\) 900 = <b>3.3</b> laps";

$Q[13] = "A teacher wants to buy 28 sets of educational mathematics tools from a Canadian producer. The sets each cost Canadian $25.50 and it will cost a further $35 Canadian to ship them to Australia. If the exchange rate is $1 Australian = $0.96 Canadian, how much will the purchase cost in Australian dollars?<br>Give your answer to the nearest cent.";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "780.21";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "$";
$suffix[13] = "";
$Soln[13] = "Total cost in Canadian dollars = 28 \\(\\times\\) 25.50 + 35 = $749<br>Cost in Australian dollars = $749 \\(\\div\\) 0.96 = $<b>780.21</b>";

$Q[14] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>What is the name of the type of graph used to show the type of school which students attend?";
$QType[14] = 0;
$QAnswers[14] = "c";
$QOptions[14] = array("bar chart","histogram","pie chart","ratio graph");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "This information is represented in a pie chart (option <b>(c)</b>)";

$Q[15] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>How many full-time equivalent teachers were there in Australian schools in 2017?<br>Give your answer to the nearest whole number.";
$QType[15] = 1;
$QAnswers[15] = "283207";
$QOptions[15] = array("0","0","0","0");
$prefix[15] = "";
$suffix[15] = "";
$Soln[15] = "Number of teachers = 70% \\(\\times\\) 404580.9 = <b>283207</b>";

$Q[16] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>What was the mean (average) number of in-school staff in each school? Give your answer rounded to 1 decimal place.";
$QType[16] = 1;
$QAnswers[16] = "42.8"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "Average number of staff in each school = 404580.9 \\(\\div\\) 9444 = <b>42.8</b>";

$Q[17] = "The chart (sourced from the Australian Bureau of Statistics) shows information on Australian schools in 2017.<br><br><img src='images/PracticeTest4b_1.jpg'><br><br>What percentage of students left school before the end of year 12?";
$QType[17] = 1;
$QAnswers[17] = "15.2";
$QOptions[17] = array("0","0","0","0");
$prefix[17] = "";
$suffix[17] = "%";
$Soln[17] = "Percentage leaving early = 100 - 84.8 = <b>15.2</b>%";

$Q[18] = "A box contains 6 blue balls, 5 red balls and 9 yellow balls. What is the probability of randomly drawing a red or a blue ball? Give your answer as a decimal rounded to 2 decimal places.";
$QType[18] = 1;
$QAnswers[18] = "0.55";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = "";
$Soln[18] = "Probability of drawing red or blue = \\(6 + 5)\\over (6 + 5 + 9)\\) = \\(11\\over 20\\) = <b>0.55</b>";

$Q[19] = "A school wants to lay new turf on its school sports field. The field is rectangular and has dimensions 80 m x 50 m. Turf is sold in rolls 80 cm wide and 2 m long. How many rolls of turf are required to cover the field?";
$QType[19] = 1;
$QAnswers[19] = "2500";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = "";
$Soln[19] = "Area of field = 80 \\(\\times\\) 50 = 4000 m<sup>2</sup><br> Area of turf in square metres = 0.8 \\(\\times\\) 2 = 1.6 m<sup>2</sup><br>Number of rolls required = 4000 \\(\\div\\) 1.6 = <b>2500</b>";

$Q[20] = "A history teacher is examining a scale drawing of a cannon. The scale on the drawing is 1 cm represents 50 cm. The canon in the drawing is 10 cm long. How long is the actual cannon in metres?";
$QType[20] = 1;
$QAnswers[20] = "5";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "";
$suffix[20] = " m";
$Soln[20] = "Actual length = 50 \\(\\times\\) 10 cm = 500 cm = <b>5</b> m";

$Q[21] = "A teacher earns $78000 per annum and spends $2000 per month on rent. Which formula shows how much of the teacher’s income is not spent on rent each year?";
$QType[21] = 0;
$QAnswers[21] = "d"; 
$QOptions[21] = array("\\(78000\\over 12\\) - 2000","\\((78000 - 2000)\\over 12\\)","(78000-2000)\\(\\times\\) 12","78000 – 2000 \\(\\times\\) 12");
$prefix[21] = "";
$suffix[21] = "";
$Soln[21] = "Option <b>(d)</b>";

$Q[22] = "A coach took a class on an excursion to Mt Isa. It left the school at 7.30 am and arrived at 2.15 pm. It travelled along minor roads at an average speed of 60 km/h for the first quarter hour and the last half hour of the trip. For the rest of the trip the bus drove along highways and had a higher average speed. The bus stopped between 12.10 pm and 1.10 pm for a lunch break. If the trip was 495 km long, what was the average speed of the bus while travelling along the highways?";
$QType[22] = 1;
$QAnswers[22] = "90";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = " km/h";
$Soln[22] = "15 minutes = 0.25 hour<br>Distance travelled in first 15 minutes + last 30 minutes = 60 km/h \\(\\times\\) (0.25 + 0.5) hour = 45 km<br>Distance travelled on highways = 495 - 45 = 450 km<br> Total trip time = 6.75 hours<br>Time spend driving along highways = 6.75 - 0.75 - 1 = 5 hours<br>Average speed = 450 km \\(\\div\\) 5 hours = <b>90</b> km/h";

$Q[23] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below.<br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><th>A</th><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><th>B</th><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><th>C</th><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><th>D</th><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
<tr><th>E</th><td>29.7</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td><td>43.4</td></tr>
</table><br>Between 2009 and 2010, which school scored the largest percentage increase in students achieving a band 5 or band 6?";
$QType[23] = 0;
$QAnswers[23] = "a";
$QOptions[23] = array("A","B","C","D");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "School <b>A</b>, which increased from 28.2% to 34.2%";

$Q[24] = "In a particular school district, the ratio of days when PSSA (inter-school sport) was played to days when PSSA was cancelled was 3:2. If there were 14 days on which PSSA was cancelled, how many days was PSSA played?";
$QType[24] = 1;
$QAnswers[24] = "21";
$QOptions[24] = array("0","0","0","0");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "14 days = 2 parts, so 7 days = 1 part, so 21 days = 3 parts. PSSA was played on <b>21</b> days.";

$Q[25] = "A teacher earns $1200 per week. They spend 30% of their earnings on rent, and $70 per week on food. What percentage of their income do they have available for expenses other than rent and food? Give your answer to the nearest percent.";
$QType[25] = 1;
$QAnswers[25] = "64";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "";
$suffix[25] = "%";
$Soln[25] = "Percentage of earnings spent on food = \\(70\\over 1200\\) \\(\\times\\) 100% = 5.83%<br>Percentage of income available = 100 - 30 - 5.83 = <b>64</b>%";

$Q[26] = "A class of 30 students each brought in $5 for a class end-of-year party. If the teacher spent $87 on pizzas and $44 on fruit, how much money is left to spend on beverages?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "19";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "$";
$suffix[26] = "";
$Soln[26] = "Total spending money = 30 \\(\\times\\) 5 = $150<br> Leftover money = 150 - (87 + 44) = $<b>19</b>";

$Q[27] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Student's Mark</th></tr>
<tr><th>Task 1</th><td>20</td><td>40%</td></tr>
<tr><th>Task 2</th><td>40</td><td>60%</td></tr>
<tr><th>Task 3</th><td>40</td><td>80%</td></tr>
</table><br>What was the student's overall mark for the course?";
$QType[27] = 1;
$QAnswers[27] = "64";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "";
$suffix[27] = "";
$Soln[27] = "Overall mark = 20 \\(\\times\\) 40 \\(\\div\\) 100 + 40 \\(\\times\\) 60 \\(\\div\\) 100 + 40 \\(\\times\\) 80 \\(\\div\\) 100 = <b>64</b>";

$Q[28] = "A team of students decide to walk 100 km to raise fund for a charity. If they walk 6 km each day, how many days will it take them to complete the 100 km? Give your answer to a whole number of days.";
$QType[28] = 1;
$QAnswers[28] = "17";
$QOptions[28] = array("0","0","0","0");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "Number of days = 100 \\(\\div\\) 6 = 16.67, which needs to be rounded up to <b>17</b> days";

$Q[29] = "A school group travelled to the Philippines. Before they left Australia they each bought US$200 to take with them because they understood that it was easier to change US dollars than Australian dollars in the Philippines. When they arrived in Manila, they found an exchange offering 51.68 Philippine Peso for 1 US Dollar.  Their teacher recommended that they each buy 5 000 pesos. How much, in US dollars, would this cost? Give your answer to the nearest dollar.";
$QType[29] = 1;
$QAnswers[29] = "97"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "$";
$suffix[29] = "";
$Soln[29] = "51.68 peso = US$1<br> 1 peso = US$ 1 \\(\\div\\) 51.68<br>5000 peso = US$ 1 \\(\\div\\) 51.68 \\(\\times\\) 5000 = US$<b>97</b>";

$Q[30] = "The graph (source: Australian Bureau of Statistics) shows total Australian household water consumption broken down by state from 2011 to 2017<br><br><img src='images/PracticeTest4c_1.jpg'><br><br>True/False: SA was the only state to use less household water in 2016-2017 than in 2011-2012.";
$QType[30] = 0;
$QAnswers[30] = "b";
$QOptions[30] = array("True","False","N/A","N/A");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "False (option <b>(b)</b>). Tasmania also used less water in 2016-2017 than in 2011-2012.";

$Q[31] = "The graph (source: Australian Bureau of Statistics) shows total Australian household water consumption broken down by state from 2011 to 2017<br><br><img src='images/PracticeTest4c_1.jpg'><br><br>Approximately what fraction of the water used by Queensland households was used by South Australian households in 2013-14? ";
$QType[31] = 0;
$QAnswers[31] = "b";
$QOptions[31] = array("\\(1 \\over 100 \\)","\\(1 \\over 3 \\)","\\(1 \\over 2 \\)","\\(3 \\over 4 \\)");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "Queensland households used around 375 GL in 2013-2014. South Australian households used around 125 GL over the same period. 125 \\(\\div\\) 375 = \\(1 \\over 3 \\), which is option <b>(b)</b>.";

$Q[32] = "The graph (source: Australian Bureau of Statistics) shows total Australian household water consumption broken down by state from 2011 to 2017<br><br><img src='images/PracticeTest4c_1.jpg'><br><br>Approximately how many gigalitres of water were used by Australian households in 2015-16?";
$QType[32] = 0;
$QAnswers[32] = "c";
$QOptions[32] = array("800","1200","1700","3000");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "NSW + Vic used more than 800 L, so option a (800) is incorrect. NSw + Vic + Qld used around 1200 L so option b (1200) is incorrect. The remaining states used around 500 L between them, so option d (3000) must also be incorrect, leaving option <b>c</b> (1700).";

$Q[33] = "What is 10% of three and a half hours? Express your answer in minutes.";
$QType[33] = 1;
$QAnswers[33] = "21";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "3.5 hours = 3.5 \\(\\times\\) 60 = 210 minutes<br>10% \\(\\times\\) 210 minutes = <b>21</b> minutes.";

$Q[34] = "The graph shows the percentage of Australia’s population living in each of the states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><br><img src='images/PracticeTest4c_2.jpg'><br><br>What percentage of the population was living in Western Australia?";
$QType[34] = 1;
$QAnswers[34] = "10.4"; 
$QOptions[34] = array("0","0","0","0");
$prefix[34] = "";
$suffix[34] = "%";
$Soln[34] = "Read directly from the graph, <b>10.4</b>% of the population was living in Western Australia.";

$Q[35] = "In an election for school captain, Isaac received \\(1\\over 3\\) of the votes and Brodie received \\(1\\over 4\\) of the votes. The remaining 105 votes were received by Lawrence. How many students voted?";
$QType[35] = 1;
$QAnswers[35] = "252";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = "";
$Soln[35] = "Proportion of votes received by Lawrence = 1 - \\(1\\over 3\\) - \\(1\\over 4\\) = 1 \\(\\times\\) \\(12\\over 12\\) - \\(1\\over 3\\) \\(\\times\\) \\(4\\over 4\\) - \\(1\\over 4\\) \\(\\times\\) \\(3\\over 3\\) = \\(12\\over 12\\) - \\(4\\over 12\\) - \\(3\\over 12\\) = \\(5\\over 12\\)<br>So \\(5\\over 12\\) = 105 votes<br>All the votes = \\(12\\over 12\\) = 105 \\(\\div\\) 5 \\(\\times\\) 12 = 252 votes.<br><b>252</b> students voted.";

$Q[36] = "A book seller had a sale in which all books were 20% off. A teacher bought a class set of thirty books that was priced at $12 per book before discount. How much money did the teacher save by buying the set during the sale?";
$QType[36] = 1;
$QAnswers[36] = "72";
$QOptions[36] = array("0","0","0","0");
$prefix[36] = "$";
$suffix[36] = "";
$Soln[36]= "Total cost before discount = 30 \\(\\times\\) $12 = $360<br>Percentage saving after discount = 20%<br>Saving after discount = 20% \\(\\times\\) $360 = 20 \\(\\div\\) 100 \\(\\times\\) $360 = $<b>72</b>";

$Q[37] = "A school has three year 5 classes, each with 30 students. In a test the mean average mark for class 1 was 78 %, the mean average mark in class 2 was 75 % and the mean average mark in class 3 was 72 %. What was the mean average mark for the test across the whole of year 5?";
$QType[37] = 1;
$QAnswers[37] = "75";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = "%";
$Soln[37] = "Average = (78 + 75 + 72) \\(\\div\\) 3 = <b>75</b>%";

$Q[38] = "A school year has 4 terms. Assume all terms are exactly 10 weeks long. A teacher works one day a week for term 1. She then works two days a week in terms 2 and 3. She then works five days a week in term 4. Over the school year, what was the average number of days per week that she worked?";
$QType[38] = 1;
$QAnswers[38] = "2.5";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "";
$suffix[38] = " days per week";
$Soln[38] = "Average = (1 + 2 + 2 + 5) \\(\\div\\) 4 = <b>2.5</b> days per week.";

$Q[39] = "A school decides to buy some egg laying chickens. The space allocated for the chickens is 15 square metres. They want the chickens to be able to free-range, with an average of no more than 1 chicken in every 1.75 m<sup>2</sup>. How many chickens can the school have?";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "8";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "";
$suffix[39] = "";
$Soln[39] = "Max number of chickens = area \\(\\div\\) area per chicken = 15 \\(\\div\\) 1.75 = 8.57 chickens.<br>We need to round this down: if we rounded up there would be more than one chicken per 1.75 m<sup>2</sup>.<br>So the school can have <b>8</b> chickens.";

$Q[40] = "<br><br><img src='images/PracticeTest4d_1.jpg'><br><br>What temperature is shown on the thermometer?";
$QType[40] = 0;
$QAnswers[40] = "a";
$QOptions[40] = array("21°C","22°C","65°C","70°C");
$prefix[40] = "";
$suffix[40] = "";
$Soln[40] = "The temperature is 21°C, option <b>(a)</b>";

$Q[41] = "A teacher bought two dozen workbooks for $37.20. What was the average cost per book? Give your answer to the nearest cent.";
$QType[41] = 1;
$QAnswers[41] = "1.55";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "$";
$suffix[41] = "";
$Soln[41] = "24 books cost $37.20<br>1 book costs $37.20 \\(\\div\\) 24 = $<b>1.55</b>";

$Q[42] = "A school needs to buy 1000 rolls for a school barbeque. Four local bakeries offer the following pricings. Which bakery offers the best value for money for the school?<br>
<table>
<tr><th>Bakery</th><th>Pricing</th></tr>
<tr><td>A</td><td>40 cents per roll</td></tr>
<tr><td>B</td><td>6 rolls for $2.50</td></tr>
<tr><td>C</td><td>10 rolls for $3.80</td></tr>
<tr><td>D</td><td>One dozen rolls for $5.00</td></tr>
</table>";
$QType[42] = 0;
$QAnswers[42] = "c"; 
$QOptions[42] = array("A","B","C","D");
$prefix[42] = "";
$suffix[42] = "";
$Soln[42] = "<br><table>
<tr><th>Bakery</th><th>Pricing per roll</th></tr>
<tr><td>A</td><td>40 cents</td></tr>
<tr><td>B</td><td>$2.50 \\(\\div\\) 6 = 41.67 cnts</td></tr>
<tr><td>C</td><td>$3.80 \\(\\div\\) 10 = 38 cents</td></tr>
<tr><td>D</td><td>$5.00 \\(\\div\\) 12 = 41.67 cents</td></tr>
</table><br>Bakery <b>C</b> offers the best value for money.";

$Q[43] = "A teacher’s superannuation increases by 5% per year. The teacher has $8543.60 in superannuation at the start of the year. At the end of the year, the interest payable is calculated and added to the account. In addition, after this, the teacher adds another $1000 to her account. How much money does she have in her superannuation at the end of the year?";
$QType[43] = 1;
$QAnswers[43] = "9970.78";
$QOptions[43] = array("0","0","0","0");
$prefix[43] = "$";
$suffix[43] = "";
$Soln[43] = "Amount of superannuation at the end of the year = 105% \\(\\times\\) $8543.60 + $1000 = $<b>9970.78</b>";

$Q[44] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>
What was the mean number of pages read by the students when they were in year 4?";
$QType[44] = 1;
$QAnswers[44] = "175";
$QOptions[44] = array("0","0","0","0");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "Mean = (240 + 300 + 100 + 60) \\(\\div\\) 4 = <b>175</b> pages.";

$Q[45] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>What was the median number of pages read by student 4?";
$QType[45] = 1;
$QAnswers[45] = "135";
$QOptions[45] = array("0","0","0","0");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "Median = middle of 60, 90, 180, 240, which is halfway between 90 and 180 = 90 + (180 - 90) \\(\\div\\) 2 = <b>135</b> pages.";

$Q[46] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>Which student had the greatest range in the number of pages they read?";
$QType[46] = 0;
$QAnswers[46] = "c";
$QOptions[46] = array("Student 1","Student 2","Student 3","Student 4");
$prefix[46] = "";
$suffix[46] = "";
$Soln[46] = "<br>Student 1 range = 480 - 120 = 360<br>Student 2 range = 300 - 300 = 0<br>Student 3 range = 400 - 30 = 370<br>Student 4 range = 240 - 60 = 180<br>Student 3 has the greatest range - option <b>(c)</b>";

$Q[47] = "A school holds an annual readathon in which students are sponsored for the number of pages that they read. The results for four students are shown in the table.<br>
<table>
<tr><th>School Year</th><th>Student 1</th><th>Student 2</th><th>Student 3</th><th>Student 4</th></tr>
<tr><td>3</td><td>120</td><td>300</td><td>30</td><td>180</td></tr>
<tr><td>4</td><td>240</td><td>300</td><td>100</td><td>60</td></tr>
<tr><td>5</td><td>360</td><td>300</td><td>300</td><td>90</td></tr>
<tr><td>6</td><td>480</td><td>300</td><td>400</td><td>240</td></tr>
</table><br>Overall, what was the modal number of pages read by these four students?";
$QType[47] = 1;
$QAnswers[47] = "300"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = "";
$Soln[47] = "Mode = most frequent score = <b>300</b>";

$Q[48] = "A plan of a town is shown. <br><br><img src='images/PracticeTest4d_2.jpg'><br><br> Which of the following sets of directions will take you from the corner of Queenbeyan Rd and Katherine St to the corner of Broome Rd and Albany St?";
$QType[48] = 0;
$QAnswers[48] = "c";
$QOptions[48] = array("Head along Katherine St. Turn right, turn left, turn right, turn right.","Head along Katherine St. Turn right, turn right, turn left, turn left.","Head along Katherine St. Turn left, turn right, turn right.","Head north along Queenbeyan Rd. Turn left, turn right, turn left.");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "Option <b>(c)</b>: Head along Katherine St. Turn left, turn right, turn right.";

$Q[49] = "A plan of a town is shown. <br><br><img src='images/PracticeTest4d_2.jpg'><br><br>What is the area of the school?";
$QType[49] = 0;
$QAnswers[49] = "d";
$QOptions[49] = array("94 000 m<sup>2</sup>","136 000 m<sup>2</sup>","287 600 m<sup>2</sup>","302 500 m<sup>2</sup>");
$prefix[49] = "";
$suffix[49] = "";
$Soln[49]= "Area = 550 m \\(\\times\\) 550 m = 302 500 m<sup>2</sup>, which is option <b>(d)</b>";

$Q[50] = "The 280 students in stage 4 at a particular school sat an assessment. The marks were recorded in the following box and whisker plot.<br><br><img src='images/PracticeTest4d_3.jpg'><br><br>What was the median mark for the assessment?";
$QType[50] = 1;
$QAnswers[50] = "62";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "From the graph, the median mark = <b>62</b>";

$Q[51] = "The 280 students in stage 4 at a particular school sat an assessment. The marks were recorded in the following box and whisker plot.<br><br><img src='images/PracticeTest4d_3.jpg'><br><br>How many students scored less than 50%?";
$QType[51] = 0;
$QAnswers[51] = "d";
$QOptions[51] = array("25","50","62","70");
$prefix[51] = "";
$suffix[51] = "";
$Soln[51] = "One quarter of the students scored less than 50%. Since there were 280 students, <br> Number of students scoring less than 50% = \\(1\\over 4\\) \\(\\times\\) 280 = 70 students, which is option <b>(d)</b>.";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>What is \\(2 \\over 3\\) of $66?";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "44";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "$";
$suffix[52] = "";
$Soln[52] = "\\(2 \\over 3\\) \\( \\times \\) $66 = $66 \\( \\div \\) 3 \\( \\times \\) 2 = $22 \\( \\times \\) 2 = $<b>44</b>";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>How much change will I receive from $20 if I buy a magazine for $8.65 and two pens for $2.45 each?";
$QType[53] = 1;
$QAnswers[53] = "6.45";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "Change = 20 - (8.65 + 2 \\(\\times\\) 2.45) = 20 - (8.65 + 4.90) = 20 - (13.55) = $<b>6.45</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>How many minutes after midday is 14:28 hours?";
$QType[54] = 1;
$QAnswers[54] = "148";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = " minutes";
$Soln[54] = "14:28 is 2 hours and 28 minutes past midday = 2 \\(\\times \\) 60 + 28 = 120 + 28 = <b>148</b> minutes.";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>14 kilograms and 889 grams is equivalent to ";
$QType[55] = 0;
$QAnswers[55] = "a"; 
$QOptions[55] = array("14.889 kg","22.89 kg","102.9 kg","14.0889 kg");
$prefix[55] = "";
$suffix[55] = "";
$Soln[55] = "option <b>(a)</b>: 14 kg + 889 g = 14 kg + 0.889 kg = 14.889 kg.";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>Which is largest?";
$QType[56] = 0;
$QAnswers[56] = "c";
$QOptions[56] = array("2 \\( \\times \\) 3 + 6","2 \\( \\times \\) 6 + 3","2 + 3 \\( \\times \\) 6","6 + 3 \\( \\times \\) 2");
$prefix[56] = "";
$suffix[56] = " m\\(^2\\)";
$Soln[56] = "(a) 2 \\( \\times \\) 3 + 6 = 6 + 6 = 12 <br> (b) 2 \\( \\times \\) 6 + 3 = 12 + 3 = 15 <br> (c) 2 + 3 \\( \\times \\) 6 = 2 + 18 = 20 <br> (d) 6 + 3 \\( \\times \\) 2 = 6 + 6 = 12 <br> So the largest one is <b>(c)</b>";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>A school was quoted a price of $22000 for a some new smartboards. However, this price did not include g.s.t. Find the cost of the smartboards once 10% g.s.t. is included.";
$QType[57] = 1;
$QAnswers[57] = "24200";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "$";
$suffix[57] = "";
$Soln[57] = "Cost = $22000 + 2200 + $<b>24200</b>";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>Find the area of a rectangular garden measuring 2.8 m by 3.4 m";
$QType[58] = 1;
$QAnswers[58] = "9.52";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = " m<sup>2</sup>";
$Soln[58] = "Area = 2.8 \\(\\times\\) 3.4 = <b>9.52</b> m<sup>2</sup>";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>Find 20% of $12.";
$QType[59] = 1;
$QAnswers[59] = "2.40";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "$";
$suffix[59] = "";
$Soln[59] = "10% = $1.20 so 20% = $<b>2.40</b>";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>2.4 kg is equivalent to how many grams?";
$QType[60] = 1;
$QAnswers[60] = "2400"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "";
$suffix[60] = " g";
$Soln[60] = "2.4 kg = <b>2400</b> g.";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>A teacher buys five notepads for $1.35 each, and an eraser for $2.20. What is the total cost of her purchases?";
$QType[61] = 1;
$QAnswers[61] = "8.95";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "$";
$suffix[61] = "";
$Soln[61] = "Total cost = 5 \\(\\times\\) $1.35 + $2.20 = $8.95";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>Which number is the largest? ";
$QType[62] = 0;
$QAnswers[62] = "b";
$QOptions[62] = array("0.209","0.27","0.0987","0.0990");
$prefix[62] = "";
$suffix[62] = "";
$Soln[62]= "0.27 is the largest: option <b>(b)</b>";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>How many centimetres is equivalent to 830 mm?";
$QType[63] = 1;
$QAnswers[63] = "83";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = " cm";
$Soln[63] = "830 mm = <b>83</b> cm";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>In a school of 1200 students, 873 students catch the bus to and from school. What percentage of students catch the bus to and from school? Give your answer rounded to two decimal places.";
$QType[64] = 1;
$QAnswers[64] = "72.75";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = "%";
$Soln[64] = "873 \\(\\div\\) 1200 \\(\\times\\) 100% = <b>72.75</b>%";


$_SESSION["Q"] = $Q;
$_SESSION["Qtype"] = $QType;
$_SESSION["QAnswers"] = $QAnswers;
$_SESSION["QOptions"] = $QOptions;
$_SESSION["prefix"] = $prefix;
$_SESSION["suffix"] = $suffix;
$_SESSION["Soln"] = $Soln;
$_SESSION["QNo"] = 0;
$_SESSION["QCorrect"] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
$_SESSION["YourAnswer"] = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

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