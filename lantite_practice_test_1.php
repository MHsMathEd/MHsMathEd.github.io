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

$Q[0] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs and the median income for each job, separated by age and gender. <br><br> <img src='images/PracticeTest1a_1.jpg'> <br> True or False: The median income for a 45 year old female is between $45000 and $60000";
$QType[0] = 0; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[0] = "b";
$QOptions[0] = array("True","False","N/A","N/A");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "False <b>(b)</b>: The median income for a 45 year old female is between $30000 and $45000";

$Q[1] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs and the median income for each job, separated by age and gender. <br><br> <img src='images/PracticeTest1a_1.jpg'> <br> True or False: The number of males and females in the workforce is very similar for 50 to 54 year olds.";
$QType[1] = 0;
$QAnswers[1] = "a";
$QOptions[1] = array("True","False","N/A","N/A");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "True <b>(a)</b>: There are just over 800 000 males and just over 800 000 females between 50 and 54 years old in the workforce.";

$Q[2] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of jobs and the median income for each job, separated by age and gender. <br><br> <img src='images/PracticeTest1a_1.jpg'> <br> True or False: The median income is lowest for people aged over 80 years.";
$QType[2] = 0;
$QAnswers[2] = "b";
$QOptions[2] = array("true","False","N/A","N/A");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "False (<b>b</b>): Income is lowest for people aged 14 years and under.";

$Q[3] = "The school assembly began at 11.23 am and concluded at 1.08 pm. How many minutes long was the assembly?";
$QType[3] = 1;
$QAnswers[3] = "105"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "minutes";
$Soln[3] = "There are 7 minutes to 11.30; 30 minutes to 12.00; 8 minutes to 12.08 and 60 more minutes to 1.08. <br> 7 + 30 + 8 + 60 = <b>105</b> minutes";

$Q[4] = "8 shirts cost $56. What would 10 shirts cost? ";
$QType[4] = 1;
$QAnswers[4] = "70";
$QOptions[4] = array("0","0","0","0");
$prefix[4] = "$";
$suffix[4] = "";
$Soln[4] = "8 shirts cost $56. <br> 1 shirt costs $56 \\( \\div \\) 8 = $7 <br> 10 shirts cost $7 \\( \\times \\) 10 = $<b>70</b>";

$Q[5] = "A teacher wishes to buy a particular book. He has looked online and found four different suppliers, as shown in the following table. <table style='border: 1px solid black;'><tr><th>Country of Supplier</th><th>Cost of book plus delivery</th><th>Exchange Rate</th></tr><tr><td>Australia</td><td>268 Australian dollars</td><td></td></tr><tr><td>UK</td><td>138 British pounds</td><td>$1 Au = 0.55 British pounds</td></tr><tr><td>USA</td><td>187 US dollars</td><td>$1 Au = 0.72 US dollars</td></tr><tr><td>Canada</td><td>280 Canadian dollars</td><td>$1 Au = 0.96 Canadian dollars</td></tr></table><br>Which supplier offers the cheapest price for the teacher?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("Australian","UK","USA","Canadian");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "Cost in Australian dollars from<Br> Australia = $268 AU<br>UK = 138 \\( \\div \\) 0.55 = $250.91 AU<br>USA = 187 \\( \\div \\) 0.72 = $259.72 AU<br> Canada = 280 \\( \\div \\) 0.96 = 4291.67 AU<br> So the best value for money is from the UK supplier, which is option (<b>b</b>).";

$Q[6] = "The boxplot below shows the marks achieved by a class of 30 students in a test. <br> <img src='images/PracticeTest1a_2.jpg'> <br>What was the median mark for the class?";
$QType[6] = 1;
$QAnswers[6] = "36";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "";
$Soln[6] = "The median is indicated by the black line in the middle of the boxplot, which is <b>36</b>.";

$Q[7] = "Stage 3 teachers were organising an incursion for three classes of 27 students and four classes of 29 students. The incursion was going to cost $1280.50 This cost was to be passed on to the students. How much should each student be charged?";
$QType[7] = 1;
$QAnswers[7] = "6.50";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "3 \\( \\times \\) 27 + 4 \\( \\times \\) 29 = 197 <br> $1280.50 \\( \\div \\) 197 = $<b>6.50</b>";

$Q[8] = "1.	A box holds 50 pencils. 15 of the pencils are lead pencils, the rest are coloured pencils. What fraction of the pencils are coloured pencils?";
$QType[8] = 0;
$QAnswers[8] = "d"; 
$QOptions[8] = array("\\(3 \\over 5 \\)","\\(3 \\over 10 \\)","\\(7 \\over 5 \\)","\\(7 \\over 10 \\)");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "Number of coloured pencils = 50 - 15 = 35<br> \\(35 \\over 50 \\) = \\(7 \\over 10 \\), which is answer <b>d</b>";

$Q[9] = "A person holds down two casual jobs. He earns $25 per hour from the first job, and $42 per hour from the second job. If he works A hours a week in his first job, and B hours a week in his second job, which formula represents his weekly income in dollars?";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("25A + 42B","25B + 42A","7 x (25A + 42B)","7 x (25B + 42A)");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "<b>a</b>: 25A + 42B";

$Q[10] = "15 students completed an online test. They were allowed up to 1 hour to complete the test. The test was marked out of 40. The following graph shows the amount of time that students took to complete the online test, and their score.<br><img src='images/PracticeTest1a_3.jpg'><br>True/False: The students who used the whole hour working on the test achieved the highest results.";
$QType[10] = 0;
$QAnswers[10] = "b";
$QOptions[10] = array("True","False","N/A","N/A");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "False (<b>b</b>): the highest results were achieved by two students who used less than the full hour.";

$Q[11] = "15 students completed an online test. They were allowed up to 1 hour to complete the test. The test was marked out of 40. The following graph shows the amount of time that students took to complete an online test, and their score.<br><img src='images/PracticeTest1a_3.jpg'><br>What was the lowest mark achieved, as a percentage?";
$QType[11] = 1;
$QAnswers[11] = "25";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "%";
$Soln[11] = "Lowest mark = \\(10 \\over 40 \\) = <b>25</b>%";

$Q[12] = "If an exercise bike costs three times as much as a basketball hoop, and the hoop costs $387, how much would it cost to buy two hoops and one exercise bike?";
$QType[12] = 1;
$QAnswers[12] = "1935";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "$";
$suffix[12] = "";
$Soln[12] = "Cost of hoop = $387<br>Cost of bike = 3 \\( \\times \\) $387 = $1161<br> Cost of 2 hoops + 1 bike = 2 \\( \\times \\) $387 + $1161 = $<b>1935</b>";

$Q[13] = "A coach took a class from Sydney on an excursion to the Western Plains. It left the school at 8:45 am and arrived at its destination at 1:45 pm. For the first two hours the coach averaged a speed of 100 km/h. For the remainder of the journey it averaged 60 km/h. What was the average speed of the whole journey?";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[13] = "76";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " km/h";
$Soln[13] = "Length of journey = 1.45 pm - 8.45 am = 5 hours<br>Average speed each hour: 100, 100, 60, 60, 60<br> Average speed overall = (100 + 100 + 60 + 60 + 60) \\( \\div \\) 5 = <b>76</b> km/h";

$Q[14] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>Starting from the corner of Marlin Ave and Leatherjacket St, which of the following routes would take you to the school?";
$QType[14] = 0;
$QAnswers[14] = "c";
$QOptions[14] = array("Travel north one block. Turn right. Travel east two blocks. Turn right.","Travel east. Turn right at the third street. Travel straight ahead until you reach the school.","Travel east until you reach Whiting Ave. Travel north as far as you can. Turn east and continue until the first intersection. Turn left. Travel one block.","Travel south along Marlin Ave through two intersections. Turn left and continue until you reach the school.");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "<b>c</b>: Travel east until you reach Whiting Ave. Travel north as far as you can. Turn east and continue until the first intersection. Turn left. Travel one block.";

$Q[15] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>What is the approximate area of the school grounds in square metres? ";
$QType[15] = 0;
$QAnswers[15] = "c";
$QOptions[15] = array("1 830","18 300","183 000","1 830 000");
$prefix[15] = "";
$suffix[15] = " square metres";
$Soln[15] = "Area is approximatey 600 m \\( \\times \\) 300 m = <b>180 000</b> square metres.";

$Q[16] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>The school has an entrance gate at every corner. Approximately how many metres is the shortest walk from the school to the sports oval?";
$QType[16] = 0;
$QAnswers[16] = "b"; 
$QOptions[16] = array("120 m","700 m","1200 m","2000 m");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "<b>b</b>: The walk is approximately 700 m.";

$Q[17] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br>The school has an entrance gate at every corner. Approximately how many metres is the shortest drive from the school grounds to the sports oval?";
$QType[17] = 0;
$QAnswers[17] = "c";
$QOptions[17] = array("120 m","700 m","1200 m","2000 m");
$prefix[17] = "";
$suffix[17] = "";
$Soln[17] = "<b>c</b>: The drive is approximately 1200 m";

$Q[18] = "A map of a small town is shown.<br><img src='images/PracticeTest1b_1.jpg'> <br> Which of the following statements is true?";
$QType[18] = 0;
$QAnswers[18] = "b";
$QOptions[18] = array("The sports oval is east of both parks","The school is north east of the sports oval","The port is west of the sports oval","The shopping centre is northeast of the beach.");
$prefix[18] = "";
$suffix[18] = "";
$Soln[18] = "<b>b</b>: The school is north east of the sports oval.";

$Q[19] = "A classroom is 9 metres wide. The student desks are 90 cm long. What is the maximum number of student desks that can be placed in a row across the classroom, if there are to be three 1 metre wide aisles?";
$QType[19] = 1;
$QAnswers[19] = "6";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = "";
$Soln[19] = "Width available for desks = 9 m - 3 \\( \\times \\) 1 = 6 m<br>Width of desk = 0.90 m<br> 6 m \\( \\div \\) 0.90 = 6.67<br>We need to round down because we cannot fit a seventh desk in the space.<br> <b>6</b> desks can be placed in a row across the classroom.";

$Q[20] = "A school decides to allocate a small room as a storage area. The room measures 4 m long by 2.7 m wide by 180 cm high. What is the volume of the room in cubic metres? Give your answer to 2 decimal places.";
$QType[20] = 1;
$QAnswers[20] = "19.44";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "";
$suffix[20] = " square metres";
$Soln[20] = "Volume = 4 \\( \\times \\) 2.7 \\( \\times \\) 1.8 = <b>19.44</b> square metres.";

$Q[21] = "A teacher took a survey of the housing of the 30 students in her geography class. She plotted the data on a Venn diagram. Circle H represents the students who have ever lived in a house. Circle A represents the students who have ever lived in an apartment. <br> <img src='images/PracticeTest1b_2.jpg'> <br> How many of the students have ever lived in an apartment?";
$QType[21] = 1;
$QAnswers[21] = "18"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "";
$suffix[21] = "";
$Soln[21] = "Students who have lived in an apartment = 8 + 10 = <b>18</b>";

$Q[22] = "A teacher took a survey of the housing of the 30 students in her geography class. She plotted the data on a Venn diagram. Circle H represents the students who have ever lived in a house. Circle A represents the students who have ever lived in an apartment. <br> <img src='images/PracticeTest1b_2.jpg'> <br> How many of the students have never lived in a house?";
$QType[22] = 1;
$QAnswers[22] = "11";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = "";
$Soln[22] = "Students who have lived in a house = 11 + 8 = 19<br> Students who have never lived in a house = 30 - 19 = <b>11</b>";

$Q[23] = "A full time teaching load involves teaching 5 days per week. A teacher is offered a teaching position with a 0.6 load. How many full days per week teaching is this equivalent to?";
$QType[23] = 1;
$QAnswers[23] = "3";
$QOptions[23] = array("0","0","0","0");
$prefix[23] = "";
$suffix[23] = " days per week";
$Soln[23]= "0.6 \\( \\times \\) 5 = <b>3</b>";

$Q[24] = "A person earns $1200 per week. They spend 30% of their earnings on rent, and $70 per week on food. How much money do they spend each week on rent? Give your answer to the nearest dollar.";
$QType[24] = 1;
$QAnswers[24] = "360";
$QOptions[24] = array("0","0","0","0");
$prefix[24] = "$";
$suffix[24] = "";
$Soln[24] = "30% \\( \\times \\) $1200 = 30 \\( \\div \\) 100 \\( \\times \\) $1200 = $<b>360</b>";

$Q[25] = "A teacher hires a car with a fuel efficiency of 100 km per 9 L of petrol. The car has a 50 L petrol tank. The car has a full tank of petrol when the teacher collects it. She intends to drive it 840 km, and she is required to return it with a full tank of petrol. What is the minimum number of times that she will need to refuel the car?";
$QType[25] = 1;
$QAnswers[25] = "2";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "";
$suffix[25] = "";
$Soln[25] = "Fuel consumed in 840 km = 840 \\( \\div \\) 100 \\( \\times \\) 9 L = 75.6 L.<br> After using the initial 50 L she will need to refill the car once to complete the journey and once more to return it with a full tank.<br> So the minimum number of refills is <b>2</b>.";

$Q[26] = "1.	A teacher recorded a set of test scores as follows: 3, 4, 5, 5, 6, 7, 10. She accidentally left out one score which was one more than the mode of this set of scores. What is the median of this set of scores?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[26] = "5.5";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "";
$suffix[26] = "";
$Soln[26] = "Mode = 5<br> Missing score = 6<br> Median is the middle score, which is halfway between 5 and 6 = <b>5.5</b>";

$Q[27] = "1.	A teacher recorded a set of test scores as follows: 3, 4, 5, 5, 6, 7, 10. She accidentally left out one score which was one more than the mode of this set of scores. What is the mean of this set of scores?";
$QType[27] = 1;
$QAnswers[27] = "5.75";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "";
$suffix[27] = "";
$Soln[27] = "Mode = 5<br> Missing score = 6<br>Mean = (3 + 4 + 5 + 5 + 6 + 6 + 7 + 10) \\( \\div \\) 8 = 46 \\( \\div \\) 8 = <b>5.75</b>";

$Q[28] = "A student has a reading level is 5 months below his actual age. If his actual age is 8 years and 3 months, what is his reading age in years and months?";
$QType[28] = 0;
$QAnswers[28] = "c";
$QOptions[28] = array("7 years and 5 months","7 years and 8 months","7 years and 10 months","8 years and 8 months");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "8 years and 3 months - 5 months = 7 years and 10 months, which is option <b>c</b>";

$Q[29] = "1.	A recipe that serves 4 people uses 1 cup flour, 1 cup milk, \\(1 \\over 4 \\) cup sugar, and 2 eggs. How many eggs are needed to make servings for 6 people? ";
$QType[29] = 1;
$QAnswers[29] = "3"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "";
$suffix[29] = "";
$Soln[29] = "4 people need 2 eggs<br>1 person needs 2 \\( \\div \\) 4 eggs <br>= \\(1 \\over 2\\) egg<br>6 people need 3 \\( \\times \\) \\(1 \\over 2\\) = <b>3</b> eggs.";

$Q[30] = "The graph (sourced from the Australian Bureau of Statistics) shows the Australian average weekly total cash earnings by industry.<img src='images/PracticeTest1c_1.jpg'> <br> True/False: Across all industries, the mean weekly earnings are approximately $1300.";
$QType[30] = 0;
$QAnswers[30] = "a";
$QOptions[30] = array("True","False","N/A","N/A");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "True (option <b>a</b>). The bottom row of the graph shows All industries, and the mean weakly earnings are about $1300.";

$Q[31] = "The graph (sourced from the Australian Bureau of Statistics) shows the Australian average weekly total cash earnings by industry.<img src='images/PracticeTest1c_1.jpg'> <br>True/ False: Out of the categories shown, retail trade has the lowest annual earnings.";
$QType[31] = 0;
$QAnswers[31] = "b";
$QOptions[31] = array("True","False","N/A","N/A");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "False (option <b>b</b>). Accommodation and Food services has the lowest annual earnings.";

$Q[32] = "The graph (sourced from the Australian Bureau of Statistics) shows the Australian average weekly total cash earnings by industry.<img src='images/PracticeTest1c_1.jpg'> <br>The average weekly income for education and training is in between the incomes for which two categories?";
$QType[32] = 0;
$QAnswers[32] = "a";
$QOptions[32] = array("Arts and recreation services, and Transport, postal and warehousing","Accommodation and food services, and Arts and recreation services","Transport, postal and warehousing, and Mining","Health care and social assistance, and Administrative and support services");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "Option <b>a</b>";

$Q[33] = "Classes 5C and 2R make 96 bird feeders. For every 6 made by 5C, 2R made 2. How many did 5C make? ";
$QType[33] = 1;
$QAnswers[33] = "72";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "Feeders were built in the ratio 5C:2R = 6:2<br> 6 + 2 = 8 so the 96 feeders are divided into 8s<br> Sets of 8 feeders that were made = 96 \\( \\div \\) 8 = 12<br> 6 of each 8 were made by 5C:<br> Feeders made by 5C = 12 \\( \\times \\) 6 = <b>72</b>";

$Q[34] = "A school used rainwater tanks to supply water for its gardens. During a period of drought, a science class decided to measure the school’s usage of rainwater over a 5-day period. At the start of the study, the tank held 3400 L of water. The following table shows how much water was used on each day of the study:<br><table><tr><th>Day</th><th>Volume of water used (litres)</th></tr><tr><td>1</td><td>115</td></tr><tr><td>2</td><td>95</td></tr><tr><td>3</td><td>55</td></tr><tr><td>4</td><td>90</td></tr><tr><td>5</td><td>110</td></tr></table><br>How much water remained in the tank at the end of the 5 days?";
$QType[34] = 1;
$QAnswers[34] = "2935"; 
$QOptions[34] = array("0","0","0","0");
$prefix[34] = "";
$suffix[34] = " L";
$Soln[34] = "3400 - 115 - 95 - 55 - 90 - 110 = 2935";

$Q[35] = "The graph shows the percentage of Australia’s population living in each of the states and territories. The percentage for Victoria is missing from the graph. At the time these data were collected, the population of Australia was 22 693 600. <br><br><img src='images/PracticeTest1c_2.jpg'> <br>What percentage of the Australian population live in Victoria? ";
$QType[35] = 1;
$QAnswers[35] = "25";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = " %";
$Soln[35] = "Percentage in Victoria = 100 - (1+2+2+7+11+20+32) = <b>25</b>%";

$Q[36] = "A student completed a 4-part test and scored 18, 16, 12 and 17 in each of the parts. If each part of the test was out of 25, what was the student’s total mark, as a percentage?";
$QType[36] = 1;
$QAnswers[36] = "63";
$QOptions[36] = array("0","0","0","0");
$prefix[36] = "";
$suffix[36] = "%";
$Soln[36]= "Mark out of 100 = 18 + 16 + 12 +17 = 63<br>Student's mark is <b>63</b>%";

$Q[37] = "The figure shows the speedometer for a car. <img src='images/PracticeTest1c_3.jpg'> <br> At what speed is the car travelling?";
$QType[37] = 1;
$QAnswers[37] = "55";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = " km/h";
$Soln[37] = "each line on the gauge represents 5 km/h. So the car's speed is <b>55</b> km/h.";

$Q[38] = "A school principal is ordering pavers for a new courtyard area for the senior students. 11 pavers covers 1 square metre. The area to be paved is 6 square metres. Each paver weighs 1.2 kg. What will be the total weight of the pavers required?";
$QType[38] = 1;
$QAnswers[38] = "79.2";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "";
$suffix[38] = " kg";
$Soln[38] = "Number of pavers = 6 \\( \\times \\) 11 = 66<br> Weight = 66 \\( \\times \\) 1.2 = <b>79.2</b> kg";

$Q[39] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<table><tr><th></th><th>Task Value (%)</th><th>Student's Mark</th></tr><tr><td>Task 1</td><td>10</td><td>40/50</td></tr><tr><td>Task 2</td><td>30</td><td>55/60</td></tr><tr><td>Task 3</td><td>60</td><td>32/40</td></tr></table><br>What grade did the student receive for the course?";
$QType[39] = 0; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[39] = "d";
$QOptions[39] = array("Fail (0-49%)","Pass (50-64%)","Credit (65-74%)","Distinction (75-100%)");
$prefix[39] = "";
$suffix[39] = "";
$Soln[39] = "40 \\( \\div \\) 50  \\( \\times \\) 10 + 55  \\( \\div \\) 60  \\( \\times \\) 30 + 32  \\( \\div \\) 40  \\( \\times \\) 60 = 83.5<br>This is a distinction, which is answer <b>d</b>.";

$Q[40] = "1.	The streets of a particular town are laid out on a rectangular grid. The length of the grid is 2.7 km and the width is 800 m. What is the area of the town in square metres?";
$QType[40] = 1;
$QAnswers[40] = "2160000";
$QOptions[40] = array("0","0","0","0");
$prefix[40] = "";
$suffix[40] = " m \\(^2 \\)";
$Soln[40] = "Area = 2700 m \\( \\times \\) 800 = <b>2 160 000</b> square metres.";

$Q[41] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is 3/5. The probability that it is white is equal to the probability that it is green. If there are 9 black marbles, how many marbles are in the bag?";
$QType[41] = 1;
$QAnswers[41] = "15";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "";
$suffix[41] = "";
$Soln[41] = "\\(3 \\over 5\\) of the marbles = 9 marbles.<br> \\(1 \\over 5 \\) of the marbles = 9 \\( \\div \\) 3 = 3 marbles.<br> \\(5 \\over 5\\) of the marbles = all of the marbles = 3 \\( \\times \\) 5 = <b>15</b> marbles.";

$Q[42] = "A teacher is taking a geology field trip to examine a glacier and a volcano in New Zealand. She has computed the cost of the trip per person as follows:<br> Airfare = $1280 Australian dollars<br>Expenses in New Zealand = $2300 New Zealand dollars.<br>If the exchange rate is 1 Australian dollar = 1.07 New Zealand dollars, what is the cost of the trip, per person, in Australian dollars? Give your answer rounded to the nearest cent.";
$QType[42] = 1;
$QAnswers[42] = "3429.53"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "$";
$suffix[42] = "";
$Soln[42] = "Expenses in Australian dollars = $2300 \\( \\div \\) 1.07 = $2149.53 (rounded to the nearest cent)<br>Cost of trip in Australian dollars = $2149.53 + $1280 = $<b>3429.53</b>";

$Q[43] = "A maths subject consisted of two assignments and a final exam. The assignments together were worth 50% and the final exam was also worth 50%. The assignment and test marks for fifteen students are shown in the following graph:<br><br><img src='images/PracticeTest1d_1.jpg'> <br>What was the modal score (out of 50) for the assignment?";
$QType[43] = 1;
$QAnswers[43] = "40";
$QOptions[43] = array("0","0","0","0");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "To find the mode for the assignment, we look for the number of dots (students) in each vertical column (assignment mark). The vertical column with the most dots is the mode. This is <b>40</b>, which was achieved by three students.";

$Q[44] = "A maths subject consisted of two assignments and a final exam. The assignments together were worth 50% and the final exam was also worth 50%. The assignment and test marks for fifteen students are shown in the following graph:<br><br><img src='images/PracticeTest1d_1.jpg'><br>What was the range of marks for the exam?";
$QType[44] = 0;
$QAnswers[44] = "a";
$QOptions[44] = array("27","30","50","78");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "range = highest exam mark - lowest exam mark = 49 - 22 = 27, which is answer <b>a</b>";

$Q[45] = "A maths subject consisted of two assignments and a final exam. The assignments together were worth 50% and the final exam was also worth 50%. The assignment and test marks for fifteen students are shown in the following graph:<br><br><img src='images/PracticeTest1d_1.jpg'><br>True/False: Less than one third of students performed better in the exam than in the assignment.";
$QType[45] = 0;
$QAnswers[45] = "b";
$QOptions[45] = array("True","False","N/A","N/A");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "Exactly one third of students (5 students) performed better in the exam than in the assignment. Several more students performed equally well in the assignment and the exam. So the correct answer is false (option <b>b</b>)";

$Q[46] = "Five students decided to raise money for charity. The amounts that each of them raised are shown in the following table. The amount raised by student E is missing. <br><table><tr><th>Student</th><th>Dollars raised</th></tr><tr><td>A</td><td>70</td></tr><tr><td>B</td><td>30</td></tr><tr><td>C</td><td>50</td></tr><tr><td>D</td><td>60</td></tr><tr><td>E</td><td></td></tr></table><br>If the students raised an average of $50 each, how much money was raised by student E?";
$QType[46] = 0;
$QAnswers[46] = "a";
$QOptions[46] = array("$40","$45","$50","$55");
$prefix[46] = "";
$suffix[46] = "";
$Soln[46] = "If the average amount raised by each student was $50, then the sum of the amounts they raised was 5 \\( \\times \\) $50 = $250<br> Amount raised by E = $250 - (70 + 30 + 50 + 60) = $40, which is option <b>a</b>";

$Q[47] = "1.	The ratio of male to female students in a class is 5:3. If there are 20 boys, how many girls are there?";
$QType[47] = 1;
$QAnswers[47] = "12"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = "";
$Soln[47] = "Number of girls = 20 \\( \\div \\) 5 \\( \\times \\) 3 = 12<br>There are <b>12</b> girls in the class.";

$Q[48] = "The amount of money raised by each grade in a school walkathon are shown in the following table. <table><tr><th>Grade</th><th>Amount</th></tr><tr><td>Kindergarten</td><td>$350</td></tr><tr><td>1</td><td>$270</td></tr><tr><td>2</td><td>$330</td></tr><tr><td>3</td><td>$300</td></tr><tr><td>4</td><td>$290</td></tr><tr><td>5</td><td>$260</td></tr><tr><td>6</td><td>$400</td></tr></table><br>What was the median amount raised?";
$QType[48] = 1;
$QAnswers[48] = "300";
$QOptions[48] = array("0","0","0","0");
$prefix[48] = "$";
$suffix[48] = "";
$Soln[48] = "Amounts in order: 260, 270, 290, 300, 330, 350, 400 <br> The median = the middle amount = $<b>300</b> ";

$Q[49] = "A subject required students to complete three assessment tasks. The table below shows the value of each task, and also a student’s mark for each of the tasks.<br><table><tr><th>Task</th><th>Value</th><th>Student's Mark</th></tr><tr><td>1</td><td>20%</td><td>36/40</td></tr><tr><td>2</td><td>30%</td><td>70%</td></tr><tr><td>3</td><td>50%</td><td>40/50</td></tr></table><br>What was the student’s final mark, as a percentage? Give your answer to the nearest whole percentage.";
$QType[49] = 1;
$QAnswers[49] = "79";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = "%";
$Soln[49]= "20 \\( \\times \\) \\(36 \\over 40\\) + 30 \\( \\times \\) 70 \\( \\div \\) 100 + 50 \\( \\times \\) \\(40 \\over 50\\) = 79 / 100 = <b>79</b>%";

$Q[50] = "A box contains red, yellow and blue balls. The probability of drawing a red ball is 5/8 and the probability of drawing a yellow ball is 1/8 . What is the probability of drawing a blue ball?";
$QType[50] = 0;
$QAnswers[50] = "c";
$QOptions[50] = array("\\(1 \\over 8\\)","\\(5 \\over 8\\)","\\(1 \\over 4\\)","\\(3 \\over 5\\)");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "Probability of drawing a blue ball = \\(8 \\over 8\\) - \\(5 \\over 8 \\) - \\(1 \\over 8\\) = \\(2 \\over 8 \\) = \\(1 \\over 4\\), which is option <b>c</b>";

$Q[51] = "A square paddock has an area of 1 square kilometre. What is the length of each side in metres?";
$QType[51] = 1;
$QAnswers[51] = "1000";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = " m";
$Soln[51] = "Each side of the paddock is 1 km = <b>1000</b> m long.";

$Q[52] = "<b>NON-CALCULAtOR</b><br><br>Find 20% of 6.4 m in cm";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. 2 means True or False */
$QAnswers[52] = "128";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = " cm";
$Soln[52] = "10% = 0.64 m = 64 cm. <br> 20% = <b>128</b> cm.";

$Q[53] = "<b>NON-CALCULAtOR</b><br><br>A school was quoted a price of $1500 for a new air conditioning unit. However, this price did not include g.s.t. Find the cost of the unit once 10% g.s.t. is included.";
$QType[53] = 1;
$QAnswers[53] = "1650";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "10% \\( \\times \\) $1500 = $150.<br>$1500+$150 = $<b>1650</b>";

$Q[54] = "<b>NON-CALCULAtOR</b><br><br>Calculate 18 \\( \\div \\) ( 9 - 7 + 1 )";
$QType[54] = 1;
$QAnswers[54] = "6";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "9-7+1 = 3<br>18 \\( \\div \\) 3 = <b>6</b>";

$Q[55] = "<b>NON-CALCULAtOR</b><br><br>Find 10% of 32 metres in centimetres.";
$QType[55] = 1;
$QAnswers[55] = "320"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = " cm";
$Soln[55] = "10% = 3.2 m <br> 3.2 \\( \\times \\) 100 = <b>320</b> cm.";

$Q[56] = "<b>NON-CALCULAtOR</b><br><br>3 kilometres and 8 metres is the same as";
$QType[56] = 0;
$QAnswers[56] = "b";
$QOptions[56] = array("30 008 m","3.008 km","3.08 km","3.8 km");
$prefix[56] = "";
$suffix[56] = "";
$Soln[56] = "8 m = 0.008 km<br>so 3 + 0.008 = 3.008 km, which is option <b>b</b>";

$Q[57] = "<b>NON-CALCULAtOR</b><br><br>A plant is 0.8 m tall. If it grows 10% taller during the year, what is its height, in cm, at the end of the year?";
$QType[57] = 1;
$QAnswers[57] = "88";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = " cm";
$Soln[57] = "Starting height = 80 cm<br> 10% \\( \\times \\) 80 cm = 8 cm<br>Finishing height = 80 + 8 = <b>88</b> cm.";

$Q[58] = "<b>NON-CALCULAtOR</b><br><br>A box of tennis balls weighs 2.8 kg. How much would 100 boxes of tennis balls weigh?";
$QType[58] = 1;
$QAnswers[58] = "280";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = " kg";
$Soln[58] = "100 \\( \\times \\) 2.8 = <b>280</b> kg.";

$Q[59] = "<b>NON-CALCULAtOR</b><br><br>Convert 0.68 kg to grams.";
$QType[59] = 1;
$QAnswers[59] = "680";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = " g";
$Soln[59] = "0.68 kg = 0.68 \\( \\times \\) 1000 = <b>680</b> g";

$Q[60] = "<b>NON-CALCULAtOR</b><br><br>What is 2% of 26 million?";
$QType[60] = 1;
$QAnswers[60] = "520000"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "";
$suffix[60] = "";
$Soln[60] = "26 million = 26 000 000<br> 1% of 26 000 000 = 260000<br> 2% of 26 000 000 = <b>520000</b>";

$Q[61] = "<b>NON-CALCULAtOR</b><br><br>Calculate 7.2 \\( \\times \\) 4.3";
$QType[61] = 1;
$QAnswers[61] = "30.96";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = "";
$Soln[61] = "7.2 \\( \\times \\) 4.3 = <b>30.96</b>";

$Q[62] = "<b>NON-CALCULAtOR</b><br><br>If Shu buys a sandwich for $6.20 and a drink for $3.40 how much change will she receive if she pays with a $20 note?";
$QType[62] = 1;
$QAnswers[62] = "10.40";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "$";
$suffix[62] = "";
$Soln[62]= "$20 - $6.20 - $3.40 = $<b>10.40</b>";

$Q[63] = "<b>NON-CALCULAtOR</b><br><br>Calculate 2612 divided by 6. Give your answer rounded to two decimal places.";
$QType[63] = 1;
$QAnswers[63] = "435.33";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = "";
$Soln[63] = "2612 \\( \\div \\) 6 = <b>435.33</b> to 2 decimal places.";

$Q[64] = "<b>NON-CALCULAtOR</b><br><br>Find the area of a rectangle that is 3 m wide and 7 m long.";
$QType[64] = 1;
$QAnswers[64] = "21";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = "m\\(^2\\)";
$Soln[64] = "3 m \\( \\times \\) 7 m = <b>21</b> m\\(^2\\)";

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