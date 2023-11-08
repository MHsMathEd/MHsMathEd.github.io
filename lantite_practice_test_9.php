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

$Q[0] = "A plane is flying west to Melbourne to Perth. The journey is 2703 km. The plane has an average flying speed of 636 km per hour. Perth time is three hours behind Melbourne time. This means that if it is 8 am in Melbourne, it is 5 am on the same day in Perth. If the plane leaves Melbourne at 10:20 am, at what time (in local Perth time) will it arrive in Perth? ";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "a";
$QOptions[0] = array("11:35 am","11:45 am","2:35 pm","2:45 pm");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "Flying time = 2703 km \\(\\div\\) 636 km/h = 4.25 hours = 4 hours and 15 minutes<br>
Departure time in Perth time = 10:20 am - 3 hours = 7:20 am<br>
Arrival time in Perth time = 7:20 am + 4 hours and 15 minutes = 11:35 am, option <b>(a)</b>";

$Q[1] = "A woodworking teacher has packaged all of her construction materials into boxes. She has one box measuring 2 m \\(\\times\\) 1 m \\(\\times\\) 1 m, three boxes of 1.5 m<sup>3</sup> and 4 boxes of 1 m<sup>3</sup>. Together, what volume of space do the boxes occupy?";
$QType[1] = 1;
$QAnswers[1] = "10.5";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " m<sup>3</sup>";
$Soln[1] = "Volume of first box = 2 m \\(\\times\\) 1 m \\(\\times\\) 1 m = 2 m<sup>3</sup><br>
Volume of next 3 boxes = 1.5 \\(\\times\\) 3 = 4.5 m<sup>3</sup><br>
Volume of last 4 boxes = 4 \\(\\times\\) 1 = 4 m<sup>3</sup><br>
Total volume = 2 + 4.5 + 4 = <b>10.5</b> m<sup>3</sup>";

$Q[2] = "Steven had a part time job over summer. He spent \\(\\frac{5}{7}\\) of his earnings on a $250 fishing rod. How much did he earn from his job in total? ";
$QType[2] = 1;
$QAnswers[2] = "350";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "\\(\\frac{5}{7}\\times \\) total = $250<br>Total = $250 \\(\\div\\) 5 \\(\\times\\) 7 = $<b>350</b>";

$Q[3] = "The following figure shows data taken from the Australian Bureau of Statistics May 2018 Survey of Employees Earnings and hours.<br><br><img src='images/PracticeTest9a_1.jpg'><br><br>What percentage of employees in the survey were in managerial roles?";
$QType[3] = 1;
$QAnswers[3] = "6.9"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "From the graph, 5.9% were in full time managerial roles, and 1% were in part time managerial roles<br>Total percentage in managerial roles = <b>6.9</b>%";

$Q[4] = "The following figure shows data taken from the Australian Bureau of Statistics May 2018 Survey of Employees Earnings and hours.<br><br><img src='images/PracticeTest9a_1.jpg'><br><br>Which group had the largest percentage of women.";
$QType[4] = 0;
$QAnswers[4] = "d";
$QOptions[4] = array("Full-time managerial","Full-time non-managerial","Part-time managerial","Part-time non-managerial");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "% women in full-time managerial = 1.5%<br>% women in full-time non-managerial = 20.4% + 0.9% = 21.3%<br>% women in part-time managerial = 0.6%<br>% women in part-time non-managerial = 15.2 + 11.6 = 26.8%<br>Greatest percentage of women in part-time non-managerial, option <b>(d)</b>";

$Q[5] = "Body mass index (BMI) is used as a measure of obesity. the formula for BMI is weight in kilograms divided by height in metres squared. According to the National Institutes of Health (NIH), for adults:<br><br>
•	A BMI of less than 18.5 means that a person is underweight.<br>
•	A BMI of between 18.5 and 25 is ideal.<br>
•	A BMI of between 25 and 30 is overweight.<br>
•	A BMI over 30 indicates obesity.<br><br>
Sam is an andult who is 165 cm tall and weighs 68 kg. According to the BMI, Sam is";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("underweight","ideal weight","overweight","obese");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Sam's height in metres = 1.65<br>Sam's height in metres squared = 1.65 \\(\\times\\) 1.65 = 2.7225<br>Sam's BMI = 68 \\(\\div\\) 2.7225 = 24.977<br>Classification = ideal (but only just!!!). This is option <b>(b)</b>";

$Q[6] = "A secondary school offers Korean and Japanese electives. The number of students taking each course are shown in the Venn diagram.<br><br><img src='images/PracticeTest9a_2.jpg'><br><br>If there are 157 students in the school, how many are taking both Korean and Japanese?";
$QType[6] = 1;
$QAnswers[6] = "30";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "Number of students taking Japanese and Korean = 157 - (22 + 38 + 67) = 157 - 127 = <b>30</b>";

$Q[7] = "A secondary school offers Korean and Japanese electives. The number of students taking each course are shown in the Venn diagram.<br><br><img src='images/PracticeTest9a_2.jpg'><br><br>If there are 157 students in the school, how many are taking no foreign language?";
$QType[7] = 1;
$QAnswers[7] = "67";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "From the diagram, <b>67</b> are taking no foreign language.";

$Q[8] = "A four wheel drive has a tank capacity of 120 litres. The driver has used three fifths of the fuel in the tank. How much fuel is left in the tank?";
$QType[8] = 1;
$QAnswers[8] = "48"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " L";
$Soln[8] = "Proportion of fuel remaining = \\(\\frac{5}{5} - \\frac{3}{5} = \\frac{2}{5}\\)<br>Amount of fuel remaining = \\(\\frac{2}{5} \\times\\) 120 L = <b>48</b> L";

$Q[9] = "5 pickers pick a field of beetroot in 6 hours. How long would 3 pickers take to harvest the same field?";
$QType[9] = 1;
$QAnswers[9] = "10";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = " hours";
$Soln[9] = "5 pickers take 6 hours.<br>1 picker would take 5 \\(\\times\\) 6 hours = 30 hours<br> 3 pickers would take 30 hours \\(\\div\\) 3 = <b>10</b> hours.";

$Q[10] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(\\frac{3}{5}\\). The probability that it is white is equal to the probability that it is green. What is the probability of randomly drawing a white marble?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("0.6","0.5","0.1","0.2");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Probability of drawing a white or green marble = \\(\\frac{5}{5} - \\frac{3}{5} = \\frac{2}{5}\\)<br>Probability of drawing a white marble = \\(\\frac{1}{2} \\times \\frac{2}{5} = \\frac{1}{5}\\)<br>As a decimal \\(\\frac{1}{5}\\) = 1 \\(\\div\\) 5 = 0.2, option <b>(d)</b>";

$Q[11] = "A parent teacher night is scheduled to commence at 2 pm and conclude at 9 pm. Each parent-teacher interview takes 10 minutes. A teacher has 30 parents who may wish to see her. She plans to take a 10-minute break at 5 pm, and a 30 minute break at 6.30 pm. Apart from these two breaks, she intends to see a parent every ten minutes, with no other breaks. If she begins meeting with parents at 3 pm, by what time will she have finished all of her interviews?";
$QType[11] = 0;
$QAnswers[11] = "b";
$QOptions[11] = array("8:00 pm","8:40 pm","8:50 pm","9:00 pm");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "Total time for interviews = 30 \\(\\times \\) 10 = 300 minutes = 300 \\(\\div\\) 60 = 5 hours<br>Total time for interviews and breaks = 5 hours + 10 minutes + 30 minutes = 5 hours and 40 minutes<br>Finish time = 3 pm + 5 hours and 40 minutes = 8:40 pm, option <b>(b)</b>";

$Q[12] = "A student is aiming for a mark of at least 68% in a subject. She got 30/50 on an assessment worth 20% of the total mark; and 46/60 on an assessment worth 30% of the total mark. The final exam is worth 50% of the marks, and is to be marked out of 100. Students can only receive a whole number of marks in the final exam (no partial marks are given). What is the minimum mark that the student needs in the final exam in order to meet her goal?";
$QType[12] = 1;
$QAnswers[12] = "66";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "The student can achieve up to 50% of the total marks from the assessment.<br>Total marks actually achieved by the student in the assessments = 30 \\(\\div\\) 50 \\(\\times\\) 20 + 46 \\(\\div\\) 60 \\(\\times\\) 30 = 12 + 23 = 35%<br>Total marks needed from the exam = 68 - 35 = 33 marks out of a possible 50<br>As a mark out of 100, \\(\\frac{33}{50} = \\frac{66}{100}\\), so the minimum mark that the student needs is <b>66</b>";

$Q[13] = "A school has organised for a travelling production to play to their 96 year three students. The theatre company are charging the school a fixed amount for the performance. The cost per student is $7.10. If the school decides that the 112 students in year 4 should also watch the production at the same time, what will be the cost per student? Give your answer in dollars, rounded to the nearest cent.";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "3.28";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "$";
$suffix[13] = "";
$Soln[13] = "Total cost of show = $7.10 \\(\\times\\) 96 = $681.60<br>Total number of students in years 3 and 4 = 96 + 112 = 208<br>Cost per student = $681.60 \\(\\div\\) 208 = <b>3.28</b>";

$Q[14] = "The graph shows the proportion of student enrolled in government and non-government schools across Australia from 1998 to 2017.<br><br><img src='images/PracticeTest9b_1.jpg'><br><br>In 1998, what was the percentage difference between the number of students in Government and non-Government schools?";
$QType[14] = 1;
$QAnswers[14] = "40";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "%";
$Soln[14] = "In 1998 70% of students were in government schools, and 30% were in non-government schools. <br> Percentage difference = 70% - 30% = <b>40</b>%";

$Q[15] = "A history teacher is taking an archaeology field trip to Easter Island. The exchange rate is 1 Australian dollar = 473 Peso. The teacher’s handbook states that a person should allow 30 000 Pesos per day for food. If the trip is to be for 6 days, how much money in Australian dollars should the teacher budget for food for each person? Give your answer to the nearest dollar.";
$QType[15] = 1;
$QAnswers[15] = "381";
$QOptions[15] = array("0","0","0","0");
$prefix[15] = "$";
$suffix[15] = "";
$Soln[15] = "Amount of Pesos needed = 30 000 \\(\\times\\) 6 = 180 000<br>473 pesos = AU$1<br>1 peso = AU$1 \\(\\div\\) 473<br>180 000 pesos = AU$1 \\(\\div\\) 473 \\(\\times\\) 180 000 = $<b>381</b> to the nearest dollar.";

$Q[16] = "A train leaves Sydney at 9.03 am and arrives at Nambucca Heads at 6.28 pm. How long, in minutes, was the trip?";
$QType[16] = 1;
$QAnswers[16] = "565"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "Trip length = 9 hours and 25 minutes = 9 \\(\\times\\) 60 + 25 minutes = <b>565</b> minutes";

$Q[17] = "A council wishes to subdivide two hectares of land for a new residential development. Each house block is to be 750 m<sup>2</sup>. If one hectare is equal to 10 000 m<sup>2</sup>, how many 750 m<sup>2</sup> house blocks can be allocated? Give your answer as a whole number of house blocks.";
$QType[17] = 1;
$QAnswers[17] = "26";
$QOptions[17] = array("0","0","0","0");
$prefix[17] = "";
$suffix[17] = "";
$Soln[17] = "2 Hectares = 20 000 m<sup>2</sup><br>Number of house blocks = 20 000 \\(\\div\\) 750 = 26.67<br>We need to round this down, because we cannot sell the 0.67 as a full 750 m<sup>2</sup> house block.<br>Number of blocks that can be allocated = <b>26</b>";

$Q[18] = "What mass in grams is this scale showing?<br><br><img src='images/PracticeTest9b_2.jpg'>";
$QType[18] = 1;
$QAnswers[18] = "170";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = " g";
$Soln[18] = "Each gradation on the scale is 10 g. So the scale is reading <b>170</b> g.";

$Q[19] = "The chemistry staff have used 40% of their 2 litre supply of hydrochloric acid. How many millilitres of hydrochloric acid do they still have?";
$QType[19] = 1;
$QAnswers[19] = "1200";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = " mL";
$Soln[19] = "Volume of hydrochloric acid (HCl) in supply in mL = 2000 mL<br>Percentage HCl remaining = 100% - 40% = 60%<br>Volume HCl remaining = 60% \\(\\times\\) 2000 mL = 60 \\(\\div\\) 100 \\(\\times\\) 2000 = <b>1200</b> mL";

$Q[20] = "The teachers of stage 2 are organising a multicultural day for their 86 students. They have decided to ask a caterer to provide a $5 meal and a $1 dessert for each child. What is the total cost of the catering?";
$QType[20] = 1;
$QAnswers[20] = "516";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "$";
$suffix[20] = "";
$Soln[20] = "Cost per student = $5 + $1 = $6<br>Total cost = 86 \\(\\times\\) $6 = $<b>516</b>";

$Q[21] = "The 820 students from a particular school are to travel by buses to the school swimming carnival. Each bus fits 78 people, and must contain at least two teachers. What is the minimum number of buses required to transport all of the students to the carnival?";
$QType[21] = 1;
$QAnswers[21] = "11"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "";
$suffix[21] = "";
$Soln[21] = "Number of student spaces on each bus = 78 - 2 = 76<br>Number of groups of 76 students = 820 \\(\\div\\) 76 = 10.8, which we need to round up to 11<br>Number of buses required = <b>11</b>";

$Q[22] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest9b_3.jpg'><br><br>What was the mean final mark, as a percentage?";
$QType[22] = 1;
$QAnswers[22] = "73.75";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = "";
$Soln[22] = "Sum of marks = 10 + 12 + 14 + 15 + 16 + 16 + 17 + 18 = 118<br>Mean mark out of 20 = 118 \\(\\div\\) 8 = 14.75<br> Mean mark as a percentage = 14.75 \\(\\div\\) 20 \\(\\times\\) 100 = <b>73.75</b>";

$Q[23] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest9b_3.jpg'><br><br>What was the median number of references used?";
$QType[23] = 1;
$QAnswers[23] = "5.5";
$QOptions[23] = array("0","0","0","0");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "There are 8 data points, so the median occurs halfway between the 4th and 5th points.<br>Data point 4 = 5<br>Data point 5 = 6<br>Median number of references = <b>5.5</b>";

$Q[24] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest9b_3.jpg'><br><br>What was the modal final mark?";
$QType[24] = 1;
$QAnswers[24] = "16";
$QOptions[24] = array("0","0","0","0");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "From the graph the modal (most frequent) mark was <b>16</b>.";

$Q[25] = "An analog clock reads 2:20 pm. What will be the small angle between the hands in 100 minutes time?";
$QType[25] = 1;
$QAnswers[25] = "120";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "";
$suffix[25] = "°";
$Soln[25] = "100 minutes = 1 hour and 40 minutes<br>In 100 minutes time the clock will read 2:20 pm + 1 hour + 40 minutes = 4:00 pm<br>Angle for 1 full revolution of the clock = 360°<br>At 4 pm, the angle between the hands is \\(\\frac{4}{12} \\times\\) 360° = <b>120</b>°";

$Q[26] = "A teacher has a class for a period that begins at 11:15 am and ends at 12:35 pm. She has four tasks for the class, and wants them to spend an equal amount of time on each task. However, another teacher enters the classroom at the start of the period to give an important talk to the students. He concludes his talk at 11:35 am. How many minutes can the class spend on each task?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "15";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "";
$suffix[26] = " minutes";
$Soln[26] = "Time remaining after talk: from 11:35 am to 12:35 pm = 1 hour = 60 minutes<br>Time per task = 60 minutes \\(\\div\\) 4 = <b>15</b> minutes";

$Q[27] = "A map of the town of Penguin in Tasmania is shown.<br><br><img src='images/PracticeTest9c_1.jpg'><br><br>Approximately how long is King Edward St?";
$QType[27] = 0;
$QAnswers[27] = "b";
$QOptions[27] = array("220 m","430 m","880 m","1440 m"); 
$prefix[27] = "";
$suffix[27] = "";
$Soln[27] = "King Edward St is approximately 430 m long, option <b>(b)</b>";

$Q[28] = "A map of the town of Penguin in Tasmania is shown.<br><br><img src='images/PracticeTest9c_1.jpg'><br><br>What is the best way to walk from Lane's IGA to the playing field adjoining Braddon St?";
$QType[28] = 0;
$QAnswers[28] = "d";
$QOptions[28] = array("Walk along Main Rd with the beach on your right to Arnold St. Turn left and walk to King Edward Street. Turn left and walk until you reach the playing field.","Walk along Main Rd with the beach on your right until you reach Preservation Drive. Walk to Coroneigh St. Turn left and continue to the playing field.","Walk along Main Rd with the beach on your left until you reach Crescent St. Turn left and walk along until you reach Braddon St. Turn left and walk until you reach the playing field.","Walk along Main Rd with the beach on your left to Arnold St. Turn right and walk to King Edward Street. Turn right and walk until you reach the playing field.");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "The correct directions are option <b>(d)</b>: Walk along Main Rd with the beach on your left to Arnold St. Turn right and walk to King Edward Street. Turn right and walk until you reach the playing field.";

$Q[29] = "A map of the town of Penguin in Tasmania is shown.<br><br><img src='images/PracticeTest9c_1.jpg'><br><br>If you walked at 4 km/hour, approximately how many minutes would it take you to walk the length of Penguin Beach (from Stubbs Point to the picnic table at the Southern end)?";
$QType[29] = 0;
$QAnswers[29] = "b"; 
$QOptions[29] = array("5 minutes","10 minutes","15 minutes","20 minutes");
$prefix[29] = "";
$suffix[29] = "";
$Soln[29] = "Approximate Distance = 600-700 m (so let's say 650 m)<br>Distance in km = 0.65 km<br>Time taken = distance \\(\\div\\) speed = 0.1625 hours = 0.1625 \\(\\times\\) 60 = 9.75 minutes, so choose option <b>(b)</b><br>Alternatively:<br>In 5 minutes you would walk 5 \\(\\div\\) 60 \\(\\times\\) 4000 m = 333 m, which is not far enough.<br>In 10 minutes you would walk 10 \\(\\div\\) 60 \\(\\times\\) 4000 m = 667 m, which is about right.<br>In 15 minutes you would walk 15 \\(\\div\\) 60 \\(\\times\\) 4000 m = 1000 m, which is too far.<br>In 20 minutes you would walk 20 \\(\\div\\) 60 \\(\\times\\) 4000 m = 1333 m, which is too far.";

$Q[30] = "The table shows the different swimming pool admission options.<br>
<table>
<tr><td>Casual Visit</td><td>$6.50</td></tr>
<tr><td>30 visit pass</td><td>$180.00</td></tr>
<tr><td>Quarterly unlimited visit pass</td><td>$300.00</td></tr>
<tr><td>Annual unlimited visit pass</td><td>$700.00</td></tr>
</table><br>If you intended to swim ten times every month during summer, what is the most cost effective method of doing this?";
$QType[30] = 0;
$QAnswers[30] = "b";
$QOptions[30] = array("casual visit","30 visit pass","quarterly pass","annual pass");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "Number of swims = 10 \\(\\times\\) 3 = 30<br>Costs for 30 swims:<br><table>
<tr><td>Casual Visit</td><td>$6.50 \\(\\times\\) 30 = $195</td></tr>
<tr><td>30 visit pass</td><td>$180.00</td></tr>
<tr><td>Quarterly unlimited visit pass</td><td>$300.00</td></tr>
<tr><td>Annual unlimited visit pass</td><td>$700.00</td></tr>
</table><br>So the best choice is the 30 visit pass, option <b>(b)</b>";

$Q[31] = "A school currently has four year 2 classes. Each class can have a maximum of 24 students. The school currently has 83 students in year 2. How many additional students could be accepted into these four year 2 classes?";
$QType[31] = 1;
$QAnswers[31] = "13";
$QOptions[31] = array("0","0","0","0");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "Number of students possible = 4 \\(\\times \\) 24 = 96<br>Number of free places = 96 - 83 = <b>13</b>";

$Q[32] = "The formula to convert between temperatures in Fahrenheit and Celsius is<br><br>
(F – 32) x 5 / 9 = C<br><br>
where F is the temperature in Fahrenheit and C is the temperature in Celsius.<br><br>
What is 0 degrees Celsius in Fahrenheit? Give your answer to the nearest degree.";
$QType[32] = 1;
$QAnswers[32] = "32";
$QOptions[32] = array("0","0","0","0");
$prefix[32] = "";
$suffix[32] = " degrees Farenheit";
$Soln[32] = "We have (F - 32) \\(\\times\\frac{5}{9}\\) = 0<br>This means that F - 32 = 0 (because the only way to multiply two numbers to get 0 is if one or both of the numbers are 0), so F = <b>32</b>";

$Q[33] = "\\(\\frac{1}{7}\\) of the students in a primary school are 6 years old or younger. If there are 56 students aged 6 years or younger, how many students are there in the school?";
$QType[33] = 1;
$QAnswers[33] = "392";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "\\(\\frac{1}{7}\\times\\)total = 56<br>total = 7 \\(\\times\\) 56 = <b>392</b>";

$Q[34] = "A graph of maths marks against English marks was plotted for ten students.<br><br><img src='images/PracticeTest9c_2.jpg'><br><br>True/False: The median mark for these students was higher for maths than for English.";
$QType[34] = 0;
$QAnswers[34] = "a"; 
$QOptions[34] = array("True","False","N/A","N/A");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "Median maths mark = halfway between 72 and 78 = 75 <br> Median English mark = halfway between 66 and 70 = 68<br> so the statement is true (option <b>(a)</b>).";

$Q[35] = "A graph of maths marks against English marks was plotted for ten students.<br><br><img src='images/PracticeTest9c_2.jpg'><br><br>True/False: The highest mark overall was achieved by a student in mathematics.";
$QType[35] = 0;
$QAnswers[35] = "a";
$QOptions[35] = array("True","False","N/A","N/A");
$prefix[35] = "";
$suffix[35] = "";
$Soln[35] = "Highest maths mark = 98<br>Highest English mark = 88<br> so the statement is True (option <b>(a)</b>).";

$Q[36] = "A graph of maths marks against English marks was plotted for ten students.<br><br><img src='images/PracticeTest9c_2.jpg'><br><br>True/False: Most of the students got a better mark in English than in mathematics.";
$QType[36] = 0;
$QAnswers[36] = "b";
$QOptions[36] = array("True","False","N/A","N/A");
$prefix[36] = "";
$suffix[36] = "";
$Soln[36]= "The easiest way to answer this is to draw a diagonal line from the point (50,50) to the point (90,90) and count how many students lie on each side of the line.<br><br><img src='images/PracticeTest9c_2ans.jpg'><br><br>Most students did better in maths, so the statement is false <b>(b)</b>";

$Q[37] = "A packet of 25 pens had 20 pens remaining in it. What percentage of pens had been used?";
$QType[37] = 1;
$QAnswers[37] = "20";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = "%";
$Soln[37] = "Number of pens used = 25 - 20 = 5<br>Fraction of pens used = \\(\\frac{5}{25}\\)<br>Percentage of pens used = 5 \\(\\div\\) 25 \\(\\times\\) 100% = <b>20</b>%";

$Q[38] = "A teacher is estimating the travel costs for a trip. She has allowed $200 for the trip. The school bus has an average fuel efficiency of 12 L per 100 km. Fuel costs $1.35 per litre. The trip is 650 km long. How much money will the teacher have remaining from her $200 after she has paid for the fuel used?";
$QType[38] = 1;
$QAnswers[38] = "94.70";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "$";
$suffix[38] = "";
$Soln[38] = "Fuel used on the trip = 650 \\(\\div\\) 100 \\(\\times\\) 12 L = 78 L<br>Fuel cost = 78 \\(\\times\\) $1.35 = $105.30<br>Money leftover = $200 - $105.30 = $<b>94.70</b>";

$Q[39] = "A year 8 science textbook weighs 800 g. There are six classes of thirty students in year 8 and six teachers. A teacher orders one textbook for each student and one for each teacher. The textbooks all arrive in one crate. What is the weight of the crate? Give your answer to the nearest kilogram.";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "149";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "";
$suffix[39] = " kg";
$Soln[39] = "Total number of textbooks = 6 \\(\\times\\) 30 + 6 = 186<br>Weight of each book in kg = 800 \\(\\div\\) 1000 = 0.8 kg<br>Total weight = 0.8 \\(\\times\\) 186 = 148.8 kg, which is rounded to <b>149</b> kg.";

$Q[40] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>True/False: The majority of Australian people scored 8 or above.";
$QType[40] = 0;
$QAnswers[40] = "a";
$QOptions[40] = array("True","False","N/A","N/A");
$prefix[40] = "";
$suffix[40] = "";
$Soln[40] = "If we add up the percentages of people who scored 8 or 9 or 10 we see that it is more than 50%. So the statement is true <b>(a)</b>";

$Q[41] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>True/False: Women were more likely than men to score 8 or above.";
$QType[41] = 0;
$QAnswers[41] = "a";
$QOptions[41] = array("True","False","N/A","N/A");
$prefix[41] = "";
$suffix[41] = "";
$Soln[41] = "If we add up the male percentages for scores 8, 9 and 10 and add up the female percentages for scores 8, 9 and 10, we see that the female percentage is higher. So the statement is true <b>(a)</b>";

$Q[42] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>True/False: Women were more likely than men to score 0-4.";
$QType[42] = 0;
$QAnswers[42] = "b"; 
$QOptions[42] = array("True","False","N/A","N/A");
$prefix[42] = "";
$suffix[42] = "";
$Soln[42] = "If we look at the male percentages for scores 0-4, and the female percentage for scores 0-4 we see that the male score is higher. So the statement is false <b>(b)</b>";

$Q[43] = "The graph (data sourced from the Australian Bureau of Statistics) shows Life Satisfaction in people aged over 15 years in 2014. An increasing score indicates increasing life satisfaction.<br><br><img src='images/PracticeTest9d_1.jpg'><br><br>What percentage of male survey scores are presented in this graph?";
$QType[43] = 0;
$QAnswers[43] = "d";
$QOptions[43] = array("50%","63%","87%","100%");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "100% (option <b>d</b>) of male survey scores are presented here. This can be checked by adding up the percentage of males on each score and seeing that they add to 100%";

$Q[44] = "One Australian dollar is equivalent to 1.05 New Zealand dollars. How many New Zealand dollars is $50 Australian dollars worth?";
$QType[44] = 1;
$QAnswers[44] = "52.50";
$QOptions[44] = array("0","0","0","0");
$prefix[44] = "$";
$suffix[44] = "";
$Soln[44] = "AU$50 = NZ$ 50 \\(\\times \\) 1.05 = $<b>52.50</b>";

$Q[45] = "How many 250 mL glasses can be filled from a 2 L jug of water?";
$QType[45] = 1;
$QAnswers[45] = "8";
$QOptions[45] = array("0","0","0","0");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "Jug capacity in mL = 2 \\(\\times\\) 1000 = 2000 mL<br>Number of cups = 2000 \\(\\div\\) 250 = <b>8</b>";

$Q[46] = "A course involved three assessment tasks. The overall percentage value of the task and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Student's Mark</th></tr>
<tr><td>Task 1</td><td>10</td><td>18/20</td></tr>
<tr><td>Task 2</td><td>40</td><td>24/30</td></tr>
<tr><td>Task 3</td><td>50</td><td>32/40</td></tr>
</table><br>What was the student's final mark as a percentage?";
$QType[46] = 1;
$QAnswers[46] = "81";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "";
$suffix[46] = "%";
$Soln[46] = "Final Mark % = 18 \\(\\div\\) 20 \\(\\times\\) 10 + 22 \\(\\div\\) 30 \\(\\times\\) 40 + 30 \\(\\div\\) 40 \\(\\times\\) 50 = 9 + 32 + 40 = <b>81</b>%";

$Q[47] = "For the school walkathon, students are to walk 300 m east along Eucalyptus Avenue, then 350 m south along Wattle Street, then 100 m west along Angophora Avenue, then 350 m north along Tea Tree Street, and finally due west along Eucalyptus Avenue back to the start. If students complete five laps, how far have they walked?";
$QType[47] = 1;
$QAnswers[47] = "6500"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = " m";
$Soln[47] = "Distance travelled north = distance travelled south = 350 m<br>Distance travelled east = 300 m = Distance travelled west = 100 m + some more. The more must be 300 m - 100 m  = 200 m
Distance of 1 lap = 350 + 350 + 300 + 300 = 1300 m<Br>Distance of 5 laps = 5 \\(\\times\\) 1300 m = <b>6500</b> m";

$Q[48] = "The graph below shows the percentage of children aged 0-11 who attended care across Australia.<br><br><img src='images/PracticeTest9d_2.jpg'><br><br>Which category showed the greatest percentage increase between 1996 and 2017?.";
$QType[48] = 0;
$QAnswers[48] = "c";
$QOptions[48] = array("children who attend care","children in informal care only","children in formal care only","children in both formal and informal care");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "% increase in children who attend care = goes from about 45% to just over 45% = about 2%<br>% increase in children in informal care only = decreases (so we don't need to consider this category)<br>% increase in children in formal care only = just under 10% to just under 20% = about 10%<br>% increase in children in both formal and informal care = from just over 5% to just under 10% = about 5%<br>So the biggest increase is in 'children in formal care only', option <b>(c)</b>";

$Q[49] = "A teacher has a recipe for making play dough. To make play dough for 4 children he requires <br>
* 2 cups of plain flour,  <br>
* 4 tablespoons of cream of tartar  <br>
* 1 cup of salt, <br>
* 500 mL of water, and <br>
* 2 tablespoons of oil. <br>
How many litres of water does he need in order to make enough play dough for his 20 students?";
$QType[49] = 1;
$QAnswers[49] = "2.5";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = " L";
$Soln[49]= "Water for 1 batch of play dough in litres = 500 mL \\(\\div\\) 1000 = 0.5 L<br>Number of batches of play dough needed for 20 students = \\(\\div\\) 4 = 5 batches of play dough<Br>Water needed for 5 batches = 5 \\(\\times\\) 0.5 L = <b>2.5</b> L water";

$Q[50] = "A family has a weekly, after-tax income of $1370. They spend $280 each week on groceries and $1240 each fortnight on rent. What percentage of their after-tax income is available for other expenses? Give your answer to the nearest whole number.";
$QType[50] = 1;
$QAnswers[50] = "66";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = " %";
$Soln[50] = "Weekly rent expense = $1240 \\(\\div\\) 2 = $620<br>Weekly expenses = $620 + 280 = $900<br>Extra money = $1370 - 900 = $470<Br>Percentage of money spare = 470 \\(\\div\\) 1370 \\(\\times\\) 100% = 34.3%<br>Rounded to the nearest whole number = <b>34</b>%";

$Q[51] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below. <br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><td>A</td><td>27.73</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><td>B</td><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><td>C</td><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9 </td><td>43.3</td><td>42.5</td></tr>
<tr><td>D</td><td>36.1</td><td>38.4</td><td>38.6</td><td>38.2</td><td>38.9</td><td>39.5</td></tr>
<tr><td>E</td><td>29.7</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td><td>43.4</td></tr>
</table><br>
If 160 students at school A scored a band 5 or 6 in 2013, and 80% of these scored a band 5, how many students scored a band 6?";

$QType[51] = 1;
$QAnswers[51] = "32";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = "";
$Soln[51] = "Percentage of students scoring a band 6 = 100 - 80 = 20%<br>Number of students who scored a band 6 = 20 \\(\\div\\) 100 \\(\\times\\) 160 = <b>32</b> students.";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>Find 75% of $18.00";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "13.50";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "$";
$suffix[52] = "";
$Soln[52] = "50% of $18.00 = $9.00<br>50% of $9.00 = $4.50 = 25% of $18.00<br>75% of $18.00 = $9.00 + 4.50 = $<b>13.50</b>";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>A school paid $1100 to have basketball hoops installed. This price included 10% g.s.t. How much g.s.t. did the school pay to have the hoops installed?";
$QType[53] = 1;
$QAnswers[53] = "100";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "Price + gst = 100% + 10% = 110% = $1100 <br> 10% gst = $1100 \\(\\div\\) 110 \\(\\times\\) 10 = $<b>100</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>A teacher bought three pens for $6.15. What was the average price of each pen?";
$QType[54] = 1;
$QAnswers[54] = "2.05";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "$";
$suffix[54] = "";
$Soln[54] = "$6.15 \\(\\div\\) 3 = $<b>2.05</b>";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>Compute 3 + 6 \\(\\times\\) M when M = 3";
$QType[55] = 1;
$QAnswers[55] = "21"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = "";
$Soln[55] = "3 + 6 \\(\\times\\) 3 = 3 + 18 = <b>21</b>";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>How many kilograms is 1.8 tonnes?";
$QType[56] = 1;
$QAnswers[56] = "1800";
$QOptions[56] = array("0","0","0","0");
$prefix[56] = "";
$suffix[56] = " kg";
$Soln[56] = "1.8 tonnes = 1.8 \\(\\times\\) 1000 = <b>1800</b> kg";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>How many millilitres are equal to 3 cubic centimetres?";
$QType[57] = 1;
$QAnswers[57] = "3";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = " mL";
$Soln[57] = "1 cm<sup>3</sup> = 1 mL, so 3 cm<sup>3</sup> = <b>3</b> mL";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>48 cm is equivalent to how many metres?";
$QType[58] = 1;
$QAnswers[58] = "0.48";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = " m";
$Soln[58] = "48 cm = 48 \\(\\div\\) 100 m = <b>0.48</b> m";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>Calculate 228 divided by 0.01";
$QType[59] = 1;
$QAnswers[59] = "22800";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = "";
$Soln[59] = "228 \\(\\div\\) 0.01 = <b>22800</b>";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>If \\(\\frac{3}{5}\\) of a number is 9, what is the number?";
$QType[60] = 1;
$QAnswers[60] = "15"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "";
$suffix[60] = "";
$Soln[60] = "\\(\\frac{3}{5}\\) is 9<br>\\(\\frac{1}{5}\\) is 9 \\(\\div\\) 3 = 3<br>\\(\\frac{5}{5}\\) = 5 \\(\\times\\) 3 = <b>15</b>";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>\\(\\frac{1}{4} + \\frac{7}{20}\\) =";
$QType[61] = 0;
$QAnswers[61] = "b";
$QOptions[61] = array("\\(\\frac{3}{4}\\)","\\(\\frac{3}{5}\\)","\\(\\frac{3}{10}\\)","\\(\\frac{3}{20}\\)");
$prefix[61] = "";
$suffix[61] = "";
$Soln[61] = "\\(\\frac{1}{4} + \\frac{7}{20} = \\frac{1\\times 5}{4 \\times 5} + \\frac{7}{20} = \\frac{5}{20} + \\frac{7}{20} = \\frac{12}{20} = \\frac{4 \\times 3}{4 \\times 5} = \\frac{3}{5}, option <b>(b)</b>";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>Calculate two thirds of 11 357 496 228";
$QType[62] = 1;
$QAnswers[62] = "7571664152";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "";
$suffix[62] = "";
$Soln[62]= "By long division, 11 357 496 228 \\(\\div\\) 3 = 3 785 832 076<br>3 785 832 076 \\(\\times\\) 2 = <b>7 571 664 152</b>";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>Subtract fifty lots of 27.2 from 27.7 \\(\\times\\) 50";
$QType[63] = 1;
$QAnswers[63] = "25";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = "";
$Soln[63] = "27.7 \\(\\times\\) 50 - 27.2 \\(\\times\\) 50 = (27.7 - 27.2) \\(\\times\\) 50 = 0.5 \\(\\times\\) 50 = <b>25</b>";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>A town has a total of 5243 school students. The school principals collaborated to set up a program in which all the children were given the opportunity to visit a local regional industry. 23 industries agreed to participate. If the children were to be divided equally amongst the industries, how many children were to visit each industry? Give your answer rounded to the nearest whole number.";
$QType[64] = 1;
$QAnswers[64] = "228";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = "";
$Soln[64] = "By long division, 5243 \\(\\div\\) 23 = 227.9, which rounds to <b>228</b>";

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