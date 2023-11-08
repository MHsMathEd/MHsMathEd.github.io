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

$Q[0] = "The graph below (sourced from the Australian Bureau of Statistics) shows the various reasons why internet users used the internet over two 2 year periods.<br><img src='images/PracticeTest3a_1.jpg'><br>True/False: The use of Internet to access Health services approximately doubled from 2014-15 to 2016-17";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "a";
$QOptions[0] = array("True","False","N/A","N/A");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "The use of Internet to access Health services went from slightly below 25% in 2014-15 to slightly below 50% in 2016-17, so the statement is True <b>(a)</b>";

$Q[1] = "The graph below (sourced from the Australian Bureau of Statistics) shows the various reasons why internet users used the internet over two 2 year periods.<br><img src='images/PracticeTest3a_1.jpg'><br>True/False: More than half of Internet users have accessed the Internet to purchase goods or services.";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("True","False","N/A","N/A");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Around 60-70% of Internet users have used it to purchase goods or services, so the statement is True <b>(a)</b>.";

$Q[2] = "If 8 hours of tutoring cost $520.00, how much would 3 hours of tutoring at the same rate cost?";
$QType[2] = 1;
$QAnswers[2] = "195";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "8 hours cost $520.00<br>1 hour costs $520.00 \\(\\div\\) 8 = $65.00<br>3 hours cost 3 \\(\\times\\) $65 = $<b>195</b>";

$Q[3] = "A teacher decided to record whether her students brought along a fruit or a vegetable for sip and crunch on a particular day. Every student brought fruit or vegetables for sip and crunch that day.<br><img src='images/PracticeTest3a_2.jpg'><br>How many students brought fruit?";
$QType[3] = 1;
$QAnswers[3] = "20"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "18 students brought only fruit. 2 students brought fruit and vegetables.<br>Altogether, <b>20</b> students brought fruit.";

$Q[4] = "A teacher decided to record whether her students brought along a fruit or a vegetable for sip and crunch on a particular day. Every student brought fruit or vegetables for sip and crunch that day.<br><img src='images/PracticeTest3a_2.jpg'><br>How many students were in the class?";
$QType[4] = 1;
$QAnswers[4] = "28";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Number of students = 18 + 2 + 8 = <b>28</b>";

$Q[5] = "A teacher spent 3.2 hours teaching division to students in one week. She spent 45 min on Monday, 20 minutes on Tuesday, 30 minutes on Wednesday and Thursday. How many minutes did she spend teaching division on Friday?";
$QType[5] = 1;
$QAnswers[5] = "67";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " minutes";
$Soln[5] = "3.2 hours = 3.2 \\(\\times\\) 60 minutes = 192 minutes<br>192 - 45 - 20 - 30 - 30 = 67<br><b>67</b> minutes were spent teaching division on Friday.";

$Q[6] = "A school wishes to buy some new sporting equipment. The costs to buy the equipment from a local distributor and directly from the New Zealand manufacturer are given in the following table.<br>
<table>
<tr><th>Supplier</th><th>Price per Unit</th><th>Delivery Charges</th></tr>
<tr><td>Local distributor</td><td>AU$78</td><td>AU$30</td></tr>
<tr><td>New Zealand manufacturer</td><td>NZ$56</td><td>NZ$100</td></tr>
</table><br>
The official exchange rate at the time is AU$1 = NZ$1.07<br>
How much will it cost in Australian dollars to buy 50 units from the New Zealand manufacturer?<br>Give your answer to the nearest cent.";
$QType[6] = 1;
$QAnswers[6] = "2710.28";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "AU$";
$suffix[6] = "";
$Soln[6] = "Cost in NZ dollars = 50 \\(\\times\\) NZ$56 + NZ$100 = NZ$2900<br> Cost in Australian dollars = NZ$2900 \\(\\div\\) 1.07 = AU$<b>2710.28</b>";

$Q[7] = "A school wishes to buy some new sporting equipment. The costs to buy the equipment from a local distributor and directly from the New Zealand manufacturer are given in the following table.<br>
<table>
<tr><th>Supplier</th><th>Price per Unit</th><th>Delivery Charges</th></tr>
<tr><td>Local distributor</td><td>AU$78</td><td>AU$30</td></tr>
<tr><td>New Zealand manufacturer</td><td>NZ$56</td><td>NZ$100</td></tr>
</table><br>
The official exchange rate at the time is AU$1 = NZ$1.07<br>
What is the minimum number of units the school needs to buy for it to be cheaper to purchase the goods directly from the manufacturer?";
$QType[7] = 0;
$QAnswers[7] = "c";
$QOptions[7] = array("1","2","3","4");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "<table>
<tr><th>Number</th><th>Cost from</th><th>Cost from</th><th>Cost from</th></tr>
<tr><th>of</th><th>Australian distributor</th><th>Australian distributor</th><th>NZ manufacturer</th></tr>
<tr><th>units</th><th>in \$AU</th><th>in \$AU</th><th>in \$NZ</th></tr>
<tr><td>1</td><td>1 \\(\\times\\) 78 + 30 = 108</td><td>108 \\(\\times\\) 1.07 = 115.56</td><td>1 \\(\\times\\) 56 + 100 = 156</td></tr>
<tr><td>2</td><td>2 \\(\\times\\) 78 + 30 = 186</td><td>186 \\(\\times\\) 1.07 = 199.02</td><td>2 \\(\\times\\) 56 + 100 = 212</td></tr>
<tr><td>3</td><td>3 \\(\\times\\) 78 + 30 = 264</td><td>264 \\(\\times\\) 1.07 = <b>282.48</b></td><td>3 \\(\\times\\) 56 + 100 = <b>268</b></td></tr>
<tr><td>4</td><td>4 \\(\\times\\) 78 + 30 = 342</td><td>342 \\(\\times\\) 1.07 = <b>365.94</b></td><td>4 \\(\\times\\) 56 + 100 = <b>324</b></td></tr>
</table><br>So the correct answer is 3, which is option <b>(c)</b>.";

$Q[8] = "\\(1\\over 7\\) of the students in a primary school are 6 years old or younger. If there are 56 students aged 6 years or younger, how many students are at least 7 years old";
$QType[8] = 1;
$QAnswers[8] = "336"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "\\(1\\over 7\\) = 56 aged 6 or younger. <br> Students 7 or older = \\(6\\over 7\\) of the students = 6 \\(\\times\\) 56 = <b>336</b> students.";

$Q[9] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below.<br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><td>A</td><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><td>B</td><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><td>C</td><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><td>D</td><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
<tr><td>E</td><td>29.7</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td><td>43.4</td></tr>
</table><br>If 379 students at school A scored a band 5 or 6 in 2013, how many students sat the NAPLAN test at school A in 2013?";
$QType[9] = 1;
$QAnswers[9] = "1000";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "379 students = 37.9%<br>100% = 379 \\(\\div\\) 37.9 \\(\\times\\) 100 = <b>1000</b> students";

$Q[10] = "If four boxes of ice blocks contain 36 ice blocks, how many ice blocks are there in six boxes?";
$QType[10] = 1;
$QAnswers[10] = "54";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "4 boxes = 36 ice blocks <br>1 box = 36 \\(\\div\\) 4 = 9 ice blocks<br>6 boxes = 6 \\(\\times\\) 9 = <b>54</b> ice blocks.";

$Q[11] = "Find the area of the coloured region. Give your answer to the nearest square metre.<br><img src='images/PracticeTest3a_3.jpg'><br>";
$QType[11] = 1;
$QAnswers[11] = "24100";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = " m<sup>2</sup>";
$Soln[11] = "Area = 90 \\(\\times\\) 90 + 80 \\(\\times\\) 200 = 8100 + 16000 = <b>24100</b> m<sup>2</sup><br>or: Area = 90 \\(\\times\\) (90 + 80) + (200 - 90) \\(\\times\\) 80 = <b>24100</b> m<sup>2</sup>";

$Q[12] = "A student aged 8 years and 3 months has a reading age of 7 years 10 months. How many months below his actual age is his reading age?";
$QType[12] = 1;
$QAnswers[12] = "5";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " months";
$Soln[12] = "8 years 3 months - 7 years 10 months = <b>5</b> months.";

$Q[13] = "What is the pressure reading on this blood pressure meter?<br><img src='images/PracticeTest3b_2.jpg'><br>";
$QType[13] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "a";
$QOptions[13] = array("141","144","145","150");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "The reading is 141, option <b>(a)</b>";

$Q[14] = "A teacher is planning the route for the school cross country run. He wants the students to run around the perimeter of the school. The school perimeter is rectangular, with width 200 m and length 350 m. If students need to run 2 km, how many laps of the perimeter do they need to run? Give your answer to 1 decimal place.";
$QType[14] = 1;
$QAnswers[14] = "1.8";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "Perimeter = 200 + 200 + 350 + 350 = 1100 m<br>Number of laps = 2000 m \\(\\div\\) 1100 m = <b>1.8</b> laps.";

$Q[15] = "A teacher has a roll of stickers. After using 75 of them, ¼ of the stickers from the roll are left unused. How many stickers were originally on the roll?";
$QType[15] = 1;
$QAnswers[15] = "100";
$QOptions[15] = array("0","0","0","0");
$prefix[15] = "";
$suffix[15] = "";
$Soln[15] = "75 stickers = \\(4\\over 4\\) - \\(1\\over 4\\) = \\(3\\over 4\\)<br> All the stickers = 75 \\(\\div\\) 3 \\(\\times\\) 4 = 100 stickers.<br> There were originally <b>100</b> stickers.";

$Q[16] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph. <br><img src='images/PracticeTest2c_4.jpg'><br>What was the mean number of references used?";
$QType[16] = 1;
$QAnswers[16] = "6"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "mean = (3+4+5+5+6+7+8+10)\\(\\div\\) 8 = <b>6</b>";

$Q[17] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph. <br><img src='images/PracticeTest2c_4.jpg'><br>The graph indicates";
$QType[17] = 0;
$QAnswers[17] = "a";
$QOptions[17] = array("a positive correlation between number of references and final mark","a negative correlation between number of references and final mark","no correlation betweeen number of references and final mark","it is impossible to tell whether or not there is a correlation from this graph");
$prefix[17] = "";
$suffix[17] = "";
$Soln[17] = "The points on the graph are moving up and to the right. This means that the final mark increases as the number of references used increases. Thus there is a positive correlation between the number of references and the final mark, which is option <b>(a)</b>";

$Q[18] = "The graph (sourced from the Australian Bureau of Statistics) shows the way in which volunteering hours were spent.<br><img src='images/PracticeTest3b_1.jpg'><br>Approximately how many hours were spent in education and training?";
$QType[18] = 0;
$QAnswers[18] = "c";
$QOptions[18] = array("70","70 000","70 000 000","70 000 000 000");
$prefix[18] = "";
$suffix[18] = "";
$Soln[18] = "Around 70 million = 70 000 000 hours were spent in education and training, which is option <b>(c)</b>";

$Q[19] = "The graph (sourced from the Australian Bureau of Statistics) shows the way in which volunteering hours were spent.<br><img src='images/PracticeTest3b_1.jpg'><br>True/False: Approximately half as many volunteering hours were spent on education and training as on welfare/community.";
$QType[19] = 0;
$QAnswers[19] = "a";
$QOptions[19] = array("True","False","N/A","N/A");
$prefix[19] = "";
$suffix[19] = "";
$Soln[19] = "True (option <b>(a)</b>). Around 70 million hours were spent on education and training and around 140 million hours were spent on welfare/community.";

$Q[20] = "100 pens cost $48. What is the cost for 30 pens?";
$QType[20] = 1;
$QAnswers[20] = "14.40";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "$";
$suffix[20] = "";
$Soln[20] = "100 pens cost $48<br>1 pen costs $48 \\(\\div\\)100 = $0.48<br>30 pens cost 30 \\(\\times\\) 0.48 = $<b>14.40</b>";

$Q[21] = "A school library needs to move into a new location. The librarians pack all of the books into nineteen boxes, each weighing 34 kg. What is the total weight of the books to be moved?";
$QType[21] = 1;
$QAnswers[21] = "646"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "";
$suffix[21] = " kg";
$Soln[21] = "Total weight = 19 \\(\\times\\) 34 kg = <b>646</b> kg";

$Q[22] = "A box contains green balls and white balls. There are twice as many green balls as there are white balls. What is the probability of drawing a white ball? Give your answer as a decimal to 2 decimal places.";
$QType[22] = 1;
$QAnswers[22] = "0.33";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = "";
$Soln[22] = "\\(1\\over 3\\) of the balls are white. The probability of drawing a white ball is \\(1\\over 3\\). As a decimal this is <b>0.33</b>";

$Q[23] = "A high school put on a musical production. The show played for two nights. On the first night, 243 people attended. On the second night, 319 people attended. If tickets cost $30, what were the total takings from the shows?";
$QType[23] = 1;
$QAnswers[23] = "16860";
$QOptions[23] = array("0","0","0","0");
$prefix[23] = "$";
$suffix[23] = "";
$Soln[23]= "Takings = (319 + 243) \\(\\times\\) $30 = $<b>16 860</b>";

$Q[24] = "The formula for the area (A) occupied by a picture frame is given by A = L1 x W1 – L2 x W2, where L1 and W1 are the length and width of the outside of the frame, and L2 and W2 are the length and width of the inside of the frame.<br><img src='images/PracticeTest3b_3.jpg'><br>What is the area (in square centimetres) of a picture frame with outer dimensions 120 cm by 70 cm, and inner dimensions 90 cm by 45 cm?";
$QType[24] = 1;
$QAnswers[24] = "4350";
$QOptions[24] = array("0","0","0","0");
$prefix[24] = "";
$suffix[24] = " cm<sup>2</sup>";
$Soln[24] = "A = 120 \\(\\times\\) 70 - 90 \\(\\times\\) 45 = <b>4350</b> cm<sup>2</sup>";

$Q[25] = "If it takes Karla 3 hours to walk 12 km, how long would it take her to walk 16 km?";
$QType[25] = 1;
$QAnswers[25] = "4";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "";
$suffix[25] = " hours";
$Soln[25] = "12 km in 3 hours = 12 \\(\\div\\) 3 km in 3 \\(\\div\\) 3 hours = 4 km in 1 hour = 4 \\(\\times\\) 4 km = 1 \\(\\times\\) 4 hours = 16 km in <b>4</b> hours.";

$Q[26] = "The map below shows some of the streets in a small town. <br><br><img src='images/PracticeTest3c_1.jpg'><br><br>If the school is 550 m x 550 m, what is the map scale?";
$QType[26] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "c";
$QOptions[26] = array("1 grid square on the map represents 0.5 m","1 grid square on the map represents 5 m","1 grid square on the map represents 50 m","1 grid square on the map represents 500 m");
$prefix[26] = "";
$suffix[26] = "";
$Soln[26] = "11 grid squares represent 550 m<br>Divide through by 11 to find that <br>1 grid square on the map represents 50 m, which is option <b>(c)</b>";

$Q[27] = "The map below shows some of the streets in a small town. <br><br><img src='images/PracticeTest3c_1.jpg'><br><br>Which of the following set of directions will take you from the hospital at the corner of Pacific Avenue and Caspian Way, to the school at the corner of Southern Avenue and Mediterranean Way?";
$QType[27] = 0;
$QAnswers[27] = "a";
$QOptions[27] = array("Facing east, walk straight ahead to the fourth intersection. Turn right and walk three blocks.","Facing east, walk straight ahead to the third intersection. Turn right and walk four blocks.","Facing south, walk straight ahead to the fourth intersection. Turn right and walk three blocks.","Facing east, walk straight ahead to the third intersection. Turn left and walk four blocks.");
$prefix[27] = "";
$suffix[27] = "";
$Soln[27] = "Facing east, walk straight ahead to the fourth intersection. Turn right and walk three blocks, which is option <b>(a)</b>";

$Q[28] = "The map below shows some of the streets in a small town. <br><br><img src='images/PracticeTest3c_1.jpg'><br><br>If 1 grid square on the map represents 50 m, approximately how far is it to walk from the corner of Atlantic Avenue and Red Way to the school on the corner of Mediterranean Way and Southern Avenue?";
$QType[28] = 0;
$QAnswers[28] = "c";
$QOptions[28] = array("1200 m","2000 m","2800 m","3600 m");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "The distance is approximatly 55 squares = 55 \\(\\times\\) 50 m = 2750 m. The closest option is <b>(c)</b>, 2800 m.";

$Q[29] = "A year 9 class is selling pancakes to raise money. They are charging $2 for one pancake, or $3 for two pancakes. Three staff members have $20 between them to spend on pancakes. They all want to eat the same number of pancakes. What is the most pancakes that each of them can have, if they each only eat a whole number of pancakes?";
$QType[29] = 1;
$QAnswers[29] = "4"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "";
$suffix[29] = "";
$Soln[29] = "Maximum number of pancakes they can buy = 6 lots of 2 pancakes for $18 and one more pancake for $2 = 13 pancakes.<br>13 \\(\\div\\) 3 = 4.333<br>So each of them can have <b>4</b> pancakes.";

$Q[30] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:
<table>
<tr><th>Time of day</th><th>Temperature Change (degrees Celsius)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>
She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 deg C. What was the coldest temperature that her room reached?";
$QType[30] = 1;
$QAnswers[30] = "1.5";
$QOptions[30] = array("0","0","0","0");
$prefix[30] = "";
$suffix[30] = " degrees Celsius";
$Soln[30] = "Coldest temperature = 6.5 + 8 + 3 - 5 - 6.5 - 4.5 = <b>1.5</b> degrees Celsius.";

$Q[31] = "A student completed a 4-part test and scored 18, 16, 12 and 17 in each of the parts. What was the student’s total score?";
$QType[31] = 1;
$QAnswers[31] = "63";
$QOptions[31] = array("0","0","0","0");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "Total score = 18 + 16 + 12 + 17 = <b>63</b>";

$Q[32] = "A teacher is taking a class on a study trip to Indonesia. The exchange rate is one Australian Dollar is equal to 10 077 Rupiah. If students each take $250 spending money, how many  rupiah will they each have? Give your answer to the nearest whole number of rupiah.";
$QType[32] = 1;
$QAnswers[32] = "2519250";
$QOptions[32] = array("0","0","0","0");
$prefix[32] = "";
$suffix[32] = " rupiah";
$Soln[32] = "AU$1 = 10077 rupiah<br> AU$250 = 250 \\(\\times\\) 10077 rupiah = <b>2 519 250</b> rupiah.";

$Q[33] = "A teacher is taking a class on a study trip to Indonesia. The exchange rate is one Australian Dollar is equal to 10 077 Rupiah. The students will be attending a program that costs 800 000 rupiah. What is the cost of the program in Australian dollars? Give your answer in dollars, to the nearest cent.";
$QType[33] = 1;
$QAnswers[33] = "79.39";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "AU$";
$suffix[33] = "";
$Soln[33] = "10077 rupiah = AU$1<br> 800000 rupiah = $AU1 \\(\\div\\) 10077 \\(\\times\\) 800000 = AU$<b>79.39</b> to the nearest cent.";

$Q[34] = "How many minutes is 20% of one hour?";
$QType[34] = 1;
$QAnswers[34] = "12"; 
$QOptions[34] = array("0","0","0","0");
$prefix[34] = "";
$suffix[34] = " minutes";
$Soln[34] = "1 hour = 60 minutes<br>20% of 60 minutes = 20 \\(\\div\\) 100 \\(\\times\\) 60 = <b>12</b> minutes.";

$Q[35] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>What percentage of 13 year old boys have a BMI greater than 16 kg / m<sup>2</sup>? Give your answer to the nearest ten percent.";
$QType[35] = 1;
$QAnswers[35] = "90";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = "%";
$Soln[35] = "From the graph, for 13-year-old boys, 16 kg/m<sup>2</sup> corresponds to the 10th centile. <br>So 100 - 10 = <b>90</b>% of boys have a BMI greater than 16 kg/m<sup>2</sup>.";

$Q[36] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>A boy whose weight is at the 30th centile is classified as";
$QType[36] = 0;
$QAnswers[36] = "b";
$QOptions[36] = array("Underweight","Healthy Weight","Overweight","Obese");
$prefix[36] = "";
$suffix[36] = "";
$Soln[36]= "A weight at the 30th centile is classified as healthy (option <b>(b)</b>).";

$Q[37] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>What is the average BMI index for a 16-year-old boy? Give your answer to the nearest 0.5 kg/m<sup>2</sup>";
$QType[37] = 1;
$QAnswers[37] = "20.5";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = " kg/m<sup>2</sup>";
$Soln[37] = "the average is the 50th centile. For a 16-year-old boy this corresponds to a BMI of <b>20.5</b> kg/m<sup>2</sup>";

$Q[38] = "The following graph shows the Body Mass Index (BMI) for age percentiles for boys.<br><img src='images/PracticeTest3c_2.jpg'><br>A 9 year old boy with a BMI of 19 is classified as ";
$QType[38] = 0;
$QAnswers[38] = "c";
$QOptions[38] = array("Underweight","Healthy Weight","Overweight","Obese");
$prefix[38] = "";
$suffix[38] = "";
$Soln[38] = "A 9 year old boy with a BMI of 19 is classified as overweight (option <b>(c)</b>)";

$Q[39] = "A family has a weekly, after-tax income of $1370. They spend $280 each week on groceries and $620 each week on rent. What percentage of their after-tax income is spent on rent? Give your answer to the nearest whole number.";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "45";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "";
$suffix[39] = "%";
$Soln[39] = "Percentage of income spent on rent = \\(620\\over 1370\\) \\(\\times\\) 100% = <b>45</b>%, to the nearest whole number.";

$Q[40] = "The graph shows the percentage of Australia’s population living in each of the states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><img src='images/PracticeTest3d_1.jpg'><br>How many people were living in Western Australia? Give your answer to the nearest whole number.";
$QType[40] = 1;
$QAnswers[40] = "2360134";
$QOptions[40] = array("0","0","0","0");
$prefix[40] = "";
$suffix[40] = "";
$Soln[40] = "People in Western Australia = 10.4 % \\(\\times\\) 22693600 = <b>2360134</b>";

$Q[41] = "A coach took a class on an excursion to Ceduna. It left the school at 7.30 am and arrived in Ceduna at 1.00 pm. It travelled at an average speed of 60 km/h for the first half hour. Then it travelled at an average speed of 90 km/hour for the remainder of the trip. How many kilometres was the trip?";
$QType[41] = 1;
$QAnswers[41] = "480";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "";
$suffix[41] = " km";
$Soln[41] = "Trip time = 5 hours and 30 minutes.<br>Distance covered in the first 30 minutes = 0.5 \\(\\times\\) 60 = 30 km<br>Distance covered in the next 5 hours = 5 \\(\\times\\) 90 = 450 km<br>Total distance travelled = 450 + 30 = 480 km<br>The trip was <b>480</b> km long.";

$Q[42] = "The graph shows height for age percentiles for boys.<br><img src='images/PracticeTest3d_2.jpg'><br>A ten-year-old boy who was 135 cm tall would be between which percentiles? ";
$QType[42] = 0;
$QAnswers[42] = "b"; 
$QOptions[42] = array("10%-25%","25%-50%","50%-75%","75%-90%");
$prefix[42] = "";
$suffix[42] = "";
$Soln[42] = "A ten-year-old boy who was 135 cm tall would be between the 25% and 50% percentiles, which is option <b>(b)</b>.";

$Q[43] = "The graph shows height for age percentiles for boys.<br><img src='images/PracticeTest3d_2.jpg'><br><br>Which of these heights would result in a 13-year-old boy being on the 25th percentile?";
$QType[43] = 0;
$QAnswers[43] = "a";
$QOptions[43] = array("150 cm","163 cm","165 cm","170 cm");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "A 13-year-old boy on the 25th percentile is 150 cm tall (option <b>(a)</b>).";

$Q[44] = "The graph shows height for age percentiles for boys.<br><img src='images/PracticeTest3d_2.jpg'><br><br>If a 115 cm tall boy is of average height, how old is he?";
$QType[44] = 1;
$QAnswers[44] = "6";
$QOptions[44] = array("0","0","0","0");
$prefix[44] = "";
$suffix[44] = " years old";
$Soln[44] = "Average = 50th centile. From the graph, the boy is <b>6</b> years old.";

$Q[45] = "Given that 1 millilitre of water weighs 1 gram, what is the weight, in kilograms, of 3 L of water?";
$QType[45] = 1;
$QAnswers[45] = "3";
$QOptions[45] = array("0","0","0","0");
$prefix[45] = "";
$suffix[45] = " kg";
$Soln[45] = "1 mL = 0.001 L<br>1 g 0.001 kg<br> 0.001 L of water weighs 0.001 kg.<br> 1 L of water weighs 1 kg<br> 3 L of water weighs <b>3</b> kg.";

$Q[46] = "A box contains red, white and blue raffle tickets. The probability of randomly drawing each colour of ticket is given in the following table.
<table>
<tr><th>ticket Colour</th><th>Probability of being Randomly Drawn</th></tr>
<tr><td>Red</td><td>0.4</td></tr>
<tr><td>White</td><td>0.35</td></tr>
<tr><td>Blue</td><td>0.25</td></tr>
</table><br>If there are 50 blue tickets in the box, how many white tickets are in the box";
$QType[46] = 1;
$QAnswers[46] = "70";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "";
$suffix[46] = "";
$Soln[46] = "50 tickets = 0.25 of the total, so there are 4 \\(\\times\\) 50 = 200 tickets in the box<br>Number of white tickets = 0.35 \\(\\times\\) 200 = <b>70</b>";

$Q[47] = "A teacher bought a book during a sale when 30% was taken off the marked price. If the teacher paid $63, what was the book’s original price";
$QType[47] = 1;
$QAnswers[47] = "90"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "$";
$suffix[47] = "";
$Soln[47] = "70% of original cost = $63<br> 100% of original cost = $63 \\(\\div\\) 70 \\(\\times\\) 100 = $<b>90</b>";

$Q[48] = "A teacher wanted to compare student results in two assignments for her class of 20 students so she put the data into a scatter plot, as shown.<br><img src='images/PracticeTest3c_3.jpg'><br>True/False: All students got a better mark in the second assignment.";
$QType[48] = 0;
$QAnswers[48] = "a";
$QOptions[48] = array("True","False","N/A","N/A");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "The statement is true (option <b>(a)</b>).";

$Q[49] = "A teacher wanted to compare student results in two assignments for her class of 20 students so she put the data into a scatter plot, as shown.<br><img src='images/PracticeTest3c_3.jpg'><br>What was the median mark achieved for Assignment 1?";
$QType[49] = 1;
$QAnswers[49] = "74";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = "";
$Soln[49]= "Median = middle mark = <b>74</b>";

$Q[50] = "A teacher wanted to compare student results in two assignments for her class of 20 students so she put the data into a scatter plot, as shown.<br><img src='images/PracticeTest3c_3.jpg'><br>What was the range of marks achieved in Assignment 2?";
$QType[50] = 1;
$QAnswers[50] = "33";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "Range = largest - smallest = 100 - 67 = <b>33</b>";

$Q[51] = "A course involved four assessment tasks. All tasks were of equal value.
<br>
<table>
<tr><th></th><th>Task Value (%)</th></tr>
<tr><td>Task 1</td><td>40/40</td></tr>
<tr><td>Task 2</td><td>35/40</td></tr>
<tr><td>task 3</td><td>30/40</td></tr>
<tr><td>Task 4</td><td>26/40</td></tr>
</table><br>
What was the student’s overall mark, as a percentage? Give your answer to the nearest whole percent";
$QType[51] = 1;
$QAnswers[51] = "82";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = "";
$Soln[51] = "mark as a percentage = 40 \\(\\div\\) 40 \\(\\times\\) 25 + 35 \\(\\div\\) 40 \\(\\times\\) 25 + 30 \\(\\div\\) 40 \\(\\times\\) 25 + 26 \\(\\div\\) 40 \\(\\times\\) 25 = 25 + 21.875 + 18.75 + 16.25 = <b>82</b> to the nearest whole percent.";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>Find 125% of 200 cm in metres.";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "2.50";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = " m";
$Soln[52] = "100% \\(\\times\\) 200 = 200 <br> 25% \\(\\times\\) 200 = 50<br> 125% \\(\\times\\) 200 cm = 200 cm + 50 cm = 250 cm = 250 \\(\\div\\) 100 m = <b>2.5</b> m";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>A school was quoted a price of $5000 to paint the classrooms. However, this price did not include g.s.t. Find the cost of the painting once 10% g.s.t. is included.";
$QType[53] = 1;
$QAnswers[53] = "5500";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "10% \\(\\times\\) $5000 = $500<br>$5000 + $500 = $<b>5500</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>Calculate 6 + 5  \\(\\times\\) 7";
$QType[54] = 1;
$QAnswers[54] = "41";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "6 + 5  \\(\\times\\) 7 = 6 + 35 = <b>41</b>";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>Find 25% of $16.20 in cents";
$QType[55] = 1;
$QAnswers[55] = "405"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = " cents";
$Soln[55] = "$16.20 = 1620 cents<br> 50% \\(\\times\\) 1620 cents = 810 cents<br> 25% \\(\\times\\) 1620 cents = <b>405</b> cents.";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>7 kilometres and 44 metres is the same as";
$QType[56] = 0;
$QAnswers[56] = "c";
$QOptions[56] = array("70.44 m","744 m","7 044 m","70 044 m");
$prefix[56] = "";
$suffix[56] = "";
$Soln[56] = "7 km = 7000 m<br> 7000 + 44 m = 7044 m, which is option <b>(c)</b>";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>0.2 tonnes is equivalent to how many kilograms?";
$QType[57] = 1;
$QAnswers[57] = "200";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = " kg";
$Soln[57] = "1 tonne = 1000 kg<br> 0.2 tonnes = 0.2 \\(\\times\\) 1000 kg = <b>200</b> kg";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>A teacher pays $10 for a sandwich costing $7.85. How much change will he receive?";
$QType[58] = 1;
$QAnswers[58] = "2.15";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "$";
$suffix[58] = "";
$Soln[58] = "10.00 - 7.85 = <b>2.15</b>";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>\\(5\\over 6\\) - \\(1\\over 12\\) =";
$QType[59] = 0;
$QAnswers[59] = "d";
$QOptions[59] = array("\\(-4\\over 6\\)","\\(4\\over 6\\)","\\(4\\over 9\\)","\\(3\\over 4\\)");
$prefix[59] = "";
$suffix[59] = "";
$Soln[59] = "\\(5\\over 6\\) = \\(10\\over 12\\)<br>\\(10\\over 12\\)\\) - \\(1\\over 12\\) = \\(9\\over 12\\) = \\(3\\over 4\\), which is option <b>(d)</b>";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>At a certain school, five of the 23 the students in class 7V are in the zone cross country team. What percentage of 7V are in the cross country team?";
$QType[60] = 0;
$QAnswers[60] = "c"; 
$QOptions[60] = array("15.46","18.83","21.74","22.02");
$prefix[60] = "";
$suffix[60] = "%";
$Soln[60] = "We need to compute 5 \\(\\div\\) 23 \\(\\times\\) 100 = 500 \\(\\div\\) 23 = 21.739.<br>So the answer is 21.74, which is option <b>(c)</b>";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>A rectangle has area 56 cm<sup>2</sup>. If the length is 8 cm, what is the width?";
$QType[61] = 1;
$QAnswers[61] = "7";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = " cm";
$Soln[61] = "Length  \\(\\times\\) width = area<br> 8 \\(\\times\\) 7 = 56, so<br>width = <b>7</b> cm.";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>The g.s.t. tax is equal to 10% of the value of a good or service. What is the g.s.t. payable on a good costing $76.40?";
$QType[62] = 1;
$QAnswers[62] = "7.64";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "$";
$suffix[62] = "";
$Soln[62]= "10% \\(\\times\\) $76.40 = $<b>7.64</b>";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>The formula for simple interest is given by <i>I = PRN</i>. Calculate <i>I</i> if <i>P</i> = 100, <i>R</i> = 0.05, and <i>N</i> = 3";
$QType[63] = 1;
$QAnswers[63] = "15";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = "";
$Soln[63] = "100 \\(\\times\\) 0.05 \\(\\times\\) 3 = <b>15</b>";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>210 seconds is equal to how many minutes?";
$QType[64] = 1;
$QAnswers[64] = "3.5";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = " minutes";
$Soln[64] = "60 seconds = 1 minute<br>120 seconds = 2 minutes<br> 180 seconds = 3 minutes<br> 30 seconds = 0.5 minute<br>210 seconds = 180 seconds + 30 seconds = 3 minutes + 0.5 minutes = <b>3.5</b> minutes";

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