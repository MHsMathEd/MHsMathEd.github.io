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

$Q[0] = "The school cross country race was 3.5 km long. The winner ran the race in 14 minutes. What was her average running speed, in km/h?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "15";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " km/h";
$Soln[0] = "14 minutes = 14 \\(\\div\\) 60 = 0.2333 hours. <br> Average speed = distance \\(\\div\\) time = 3.5 km \\(\\div\\) 0.23333 hours = <b>15</b> km/h<br>Alternately, Average speed = 3.5 km \\(\\div\\) 14 minutes = 0.25 km/minute = 0.25 \\(\\times\\) 60 km/h = <b>15</b> km/h";

$Q[1] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (°C)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 °C. What was the warmest recorded temperature that her classroom reached?";
$QType[1] = 1;
$QAnswers[1] = "17.5";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "";
$suffix[1] = " °C";
$Soln[1] = "The actual classroom temperatures were as follows:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (°C)</th><th>Actual Temperature</th></tr>
<tr><td>0800</td><td>0</td><td>6.5</td></tr>
<tr><td>1200</td><td>+8</td><td>14.5</td></tr>
<tr><td>1600</td><td>+3</td><td>17.5</td></tr>
<tr><td>2000</td><td>-5</td><td>12.5</td></tr>
<tr><td>0000</td><td>-6.5</td><td>6</td></tr>
<tr><td>0400</td><td>-4.5</td><td>1.5</td></tr>
<tr><td>0800</td><td>+3</td><td>4.5</td></tr>
</table><br>The highest recorded temperature is <b>17.5</b> °C, occurring at 4 pm.";

$Q[2] = "The map shows part of the township of Roxby Downs in far north South Australia. <br><img src='images/PracticeTest7a_1.jpg'><br>Which set of directions take you from the end of Hamilton Court (marked with a yellow dot) to the Roxby Downs Hospital?";
$QType[2] = 0;
$QAnswers[2] = "c";
$QOptions[2] = array("Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn left onto Arcoona Street. Turn left onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your left.","Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn right onto Arcoona Street. Turn right onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your right.","Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn left onto Arcoona Street. Turn right onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your left.","Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn right onto Arcoona Street. Turn left onto Richardson Place. Turn left onto Burgoyne St. The hospital will be on your left.");
$prefix[2] = "";
$suffix[2] = "";
$Soln[2] = "The correct set of directions is: Walk to the end of Hamilton Court. Turn left onto Pioneer Drive. Turn left onto Arcoona Street. Turn right onto Richardson Place. Turn right onto Burgoyne St. The hospital will be on your left, which is option <b>(c)</b>";

$Q[3] = "The map shows part of the township of Roxby Downs in far north South Australia. <br><img src='images/PracticeTest7a_1.jpg'><br>What is the approximate footprint area of the Roxby Downs Hospital?";
$QType[3] = 0;
$QAnswers[3] = "d"; 
$QOptions[3] = array("32 000 m<sup>2</sup>","1 000 m<sup>2</sup>","12 000 m<sup>2</sup>","5 000 m<sup>2</sup>");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "The dimensions of the hospital are approximately 100 m \\(\\times\\) 50 m = 5000 m<sup>2</sup>, which is option <b>(d)</b>";

$Q[4] = "The map shows part of the township of Roxby Downs in far north South Australia. <br><img src='images/PracticeTest7a_1.jpg'><br>39.	If you were to walk at 4 km /hour, approximately how long would it take you to walk from the end of Hamilton Court (marked with a yellow dot) to the Roxby Downs Hospital? ";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("4 minutes","10 minutes","18 minutes","34 minutes");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "The distance to the hospital is approximately 1.2 km.<br> Time = distance \\(\\div\\) speed = 1.2 km \\(\\div\\) 4 km/h = 0.3 hours = 0.3 \\(\\times\\) 60 minutes = 18 minutes, which is option <b>(c)</b>.";

$Q[5] = "A science teacher wrote a draft report stating that 1.2 \\(\\times\\) 10<sup>3</sup> students participated in a science fair hosted by the school. However, the principal does not want to use scientific notation when the report is published in the school newsletter. What number needs to be put in place of the 1.2 \\(\\times\\) 10<sup>3</sup>?";
$QType[5] = 1;
$QAnswers[5] = "1200";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "1.2 \\(\\times\\) 10<sup>3</sup> = <b>1200</b>";

$Q[6] = "A student takes 6 minutes to do 3 sums. At this rate, how many minutes would she take to do 8 sums? ";
$QType[6] = 1;
$QAnswers[6] = "16";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " minutes";
$Soln[6] = "It takes 6 minutes for 3 sums<br>Dividing by 3 we get 2 minutes for 1 sum<br>Multipying by 8 we get <b>16</b> minutes for 8 sums.";

$Q[7] = "When wrapped around this person’s waist, the tape measure starts at 11.5 cm and ends at 88 cm. What is the length around the person’s waist, in centimetres?<br><br><img src='images/PracticeTest7a_2.jpg'><br>";
$QType[7] = 1;
$QAnswers[7] = "76.5";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = " cm";
$Soln[7] = "length = 88 - 11.5 = <b>76.5</b> cm";

$Q[8] = "There are two finalists in a school’s trivia quiz. The first student to answer the question correctly is awarded the mark for that question. There were 50 questions. Student A correctly answered one fifth of all the questions. How many questions were answered by student A?";
$QType[8] = 1;
$QAnswers[8] = "10"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "1 \\(\\div\\) 5 \\(\\times\\) 50 = <b>10</b> questions.";

$Q[9] = "A family earns $1800 per week. They pay 40% in tax. Then they spend $300 per week on food and $650 per week on home loan repayments. Which formula shows how much money they have left after these expenses?";
$QType[9] = 0;
$QAnswers[9] = "d";
$QOptions[9] = array("Dollars remaining = \\( 1800 – \\frac{40}{100} \\times 1800 + 300 + 650\\)","Dollars remaining = \\(1800 - \\frac{60}{100} \\times 1800 – 300 - 650\\)","Dollars remaining = \\(1800 \\times \\frac{40}{100} – 300 – 650 \\)","Dollars remaining = \\(1800 – 650 – 300 – \\frac{40}{100} \\times 1800\\)");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "The correct formula is Dollars remaining = \\(1800 – 650 – 300 – \\frac{40}{100} \\times 1800\\), which is option <b>(d)</b>";

$Q[10] = "There are 10 000 m<sup>2</sup> in 1 hectare, and an acre is roughly 40% of a hectare. Approximately how many square metres are there in half an acre?";
$QType[10] = 0;
$QAnswers[10] = "a";
$QOptions[10] = array("2000 m<sup>2</sup>","3000 m<sup>2</sup>","4000 m<sup>2</sup>","5000 m<sup>2</sup>");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "1 acre = 40 \\(\\div\\) 100 \\(\\times\\) 1 hectare = 40 \\(\\div\\) 100 \\(\\times\\) 10000 m<sup>2</sup> = 4000 m<sup>2</sup><br>\\(\\frac{1}{2}\\) acre = \\(\\frac{1}{2} \\times\\) 4000 m<sup>2</sup> = 2000 m<sup>2</sup>, which is option <b>(a)</b>";

$Q[11] = "A teacher travels from school by car to a conference 22 km away, and then travels back to school again. The teacher is to be reimbursed for the cost of travel at 120 cents per kilometre. How much is the teacher entitled to claim for travel?  Give your answer to the nearest cent.";
$QType[11] = 1;
$QAnswers[11] = "52.80";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "$";
$suffix[11] = "";
$Soln[11] = "Trip distance = 22 + 22 km = 44 km<br>Reimbursement = $1.20 per km \\(\\times\\) 44 km = $<b>52.80</b>";

$Q[12] = "A PDHPE teacher takes a gerrycan of drinking water to the school athletics carnival. By recess, half the water in the gerrycan was drunk and there were 1000 mL of water remaining in the gerrycan. What was the capacity of the can in litres?";
$QType[12] = 1;
$QAnswers[12] = "2";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " L";
$Soln[12] = "\\(\\frac{1}{2}\\) the capacity = 1000 mL = 1 L<br>Capacity = <b>2</b> L";

$Q[13] = "A teacher goes home by bus. The bus leaves at 4:15 pm. The bus stop is 1 km from the school. The teacher leaves school at 3:55 pm. How many minutes does the teacher have to get to the bus stop?";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "20";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "";
$suffix[13] = " minutes";
$Soln[13] = "4:15 pm - 3:55 pm = <b>20</b> minutes.";

$Q[14] = "A teacher goes home by bus. The bus leaves at 4:15 pm. The bus stop is 1 km from the school. The teacher leaves school at 3:55 pm. At what speed (in km/h) does the teacher need to walk to get to the bus stop five minutes before the bus is due?";
$QType[14] = 1;
$QAnswers[14] = "4";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "km/h";
$Soln[14] = "Time allowed = 4:15 - 3:55 - 5 min = 15 minutes = 0.25 hour<br>Speed = distance \\(\\div\\) time = 1 km \\(\\div\\) 0.25 hour = <b>4</b> km/h";

$Q[15] = "A school band with 100 members charges $300 per member per year to cover costs. What would be the cost per member if there were 120 members and the operating expenses remained unchanged? Give your answer to the nearest dollar.";
$QType[15] = 1;
$QAnswers[15] = "250";
$QOptions[15] = array("0","0","0","0");
$prefix[15] = "$";
$suffix[15] = "";
$Soln[15] = "Total running cost = 300 \\(\\times\\) 100 = $30 000<br>Cost per member when split among 120 members = 30 000 \\(\\div\\) 120 = $<b>250</b>";

$Q[16] = "A box contains 6 blue balls, 6 red balls and 8 yellow balls. What is the probability of randomly drawing a red or a blue ball?";
$QType[16] = 0;
$QAnswers[16] = "b"; 
$QOptions[16] = array("\\(\\frac{3}{10}\\)","\\(\\frac{3}{5}\\)","\\(\\frac{1}{2}\\)","\\(\\frac{13}{20}\\)");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "Probability = number of selected balls \\(\\div\\) total number of balls = \\(\\frac{(6 + 6)}{(6 + 6 + 8)} = \\frac{6}{20} = \\frac{3}{5}\\), which is option <b>(b)</b>";

$Q[17] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part concentrate to 4 parts water. If the teacher wants to make up 10 litres of the drink, how much water needs to be used?";
$QType[17] = 1;
$QAnswers[17] = "8";
$QOptions[17] = array("0","0","0","0");
$prefix[17] = "";
$suffix[17] = " L";
$Soln[17] = "1 part concentrate : 4 parts water gives 5 parts in total<br>So 1 L concentrate and 4 L water makes 5 L of the drink<br>Multiplying by 2 we get that 2 L concentrate and 8 L water makes 10 L of the drink.<br>Hence <b>8</b> L of water are needed.";

$Q[18] = "The chart (sourced from the Australian Bureau of Statistics) shows experience of homelessness in Australia.<br><img src='images/PracticeTest7b_1.jpg'><br>What percentage of the Australian population have a mental health condition and have never experienced homelessness?";
$QType[18] = 1;
$QAnswers[18] = "13.6";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = " %";
$Soln[18] = "From the chart, <b>13.6</b>%";

$Q[19] = "The chart (sourced from the Australian Bureau of Statistics) shows experience of homelessness in Australia.<br><img src='images/PracticeTest7b_1.jpg'><br>What percentage of the Australian population has ever experienced homelessness?";
$QType[19] = 1;
$QAnswers[19] = "13.4";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = " %";
$Soln[19] = "Percentage of the population who have a mental health condition and who have ever experienced homelessness = 4.6%<br>Percentage of the population who do not have a mental health condition and who have ever experienced homelessness = 8.8%<br>Percentage of the population who have ever experienced homelessness = 4.6 + 8.8 % = <b>13.4</b>%";

$Q[20] = "A teacher is planning an excursion to see a production in a theatre in a regional centre. The theatre is 180 km from the school. The teacher expects the bus to average 80 km/hour. The production begins at 1:00 pm, and the teacher wants to arrive 45 minutes before the show starts. What time does the bus need to leave the school?";
$QType[20] = 0;
$QAnswers[20] = "c";
$QOptions[20] = array("9:00 am","9:15 am","10:00 am","12:15 pm");
$prefix[20] = "";
$suffix[20] = "";
$Soln[20] = "Trip duration = 80 km/h \\(\\div\\) 180 km = 2.15 hours = 2 hours + 15 minutes<br>Time students need to arrive = 1:00 pm - 45 min = 12:15 pm<br>Time they need to leave = 12:15 pm - 2 hours and 15 minutes = 10:00 am, which is option <b>(c)</b>";

$Q[21] = "There were 50 students in a class. 24 of them were girls. 70% of the students passed a test. \\(\\frac{2}{3}\\) of the girls passed. How many boys passed?";
$QType[21] = 1;
$QAnswers[21] = "19"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "";
$suffix[21] = "";
$Soln[21] = "Number of students who passed = 70% \\(\\times\\) 50 = 35<br>Number of girls who passed = \\(\\frac{2}{3}\\) \\(\\times\\) 24 = 16<br>Number of boys who passed = 35 - 16 = <b>19</b>";

$Q[22] = "There were 50 students in a class. 24 of them were girls. 70% of the students passed a test. 2/3 of the girls passed. What proportion of boys passed? Give your answer as a decimal, to 2 decimal places.";
$QType[22] = 1;
$QAnswers[22] = "0.73";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = "";
$Soln[22] = "Number of boys = 50 - 24 = 26<br>From the previous question, 19 boys passed. <br>Proportion of boys who passed = 19 \\(\\div\\) 26 = <b>0.73</b>";

$Q[23] = "A class are studying a passionfruit vine. At the start of the year, the vine is 25 cm tall. The teacher asks students to guess how big the plant will be, as a percentage of the original size, by the end of the year. Four student guesses are shown.<br><br>
Student 1: 20%<br>
Student 2: 100%<br>
Student 3: 220%<br>
Student 4: 1000%<br>
<br>At the end of the year, the plant was measured to be 53 cm tall. Which student had the most accurate guess?";
$QType[23] = 0;
$QAnswers[23] = "c";
$QOptions[23] = array("Student 1","Student 2","Student 3","Student 4");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "The plant is almost twice its original size. That is, it is almost 200% of its original size.<br>So the closest estimate was 2205, option <b>(c)</b>";

$Q[24] = "A book seller had a sale in which all books were 20% off. A teacher bought a class set of thirty books that was priced at $12 per book before discount. How much money did the teacher pay for the book set?";
$QType[24] = 1;
$QAnswers[24] = "288";
$QOptions[24] = array("0","0","0","0");
$prefix[24] = "$";
$suffix[24] = "";
$Soln[24] = "Normal price for book set = $12 \\(\\times\\) 30 = $360<br>Percentage to pay after discount = 100 - 20 = 80%<br>Price to pay = 80 \\(\\div 100 \\times\\) $360 = $<b>288</b>";

$Q[25] = "On the weighing scale shown, the red scale indicates kg and the black scale indicates stones and pounds. There are 14 pounds in 1 stone. <br><img src='images/PracticeTest7b_2.jpg'><br>Using this scale, what weight in kilograms corresponds to a weight of 20 stone and 11 pounds? Give your answer to the nearest whole number of kilograms.";
$QType[25] = 1;
$QAnswers[25] = "132";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "";
$suffix[25] = " kg";
$Soln[25] = "From the image, <b>132</b> (130 + 2) kilgrams corresponds to 20 stone and 11 pounds.";

$Q[26] = "The 87 students of kindergarten at a school need to be divided into three equal teams for some novelty races. How many students should be placed into each team?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "29";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "";
$suffix[26] = "";
$Soln[26] = "Students per team = 87 \\(\\div\\) 3 = 29";

$Q[27] = "A teacher is taking the school band on a tour to Botswana. The exchange rate is 1 Australian dollar = 7.61 Botswanan Pula. The teacher wants to hire a bus for the band during their trip. The cost of bus hire is 18 888 Pula. What is the cost to hire the bus in Australian dollars? Give your answer to the nearest dollar.";
$QType[27] = 1;
$QAnswers[27] = "2482";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "$";
$suffix[27] = "";
$Soln[27] = "7.61 Pula = $1<br>1 Pula = $1 \\(\\div\\) 7.61<br>18888 Pula = $\\(1 \\div 7.61 \\times 18888\\) = $<b>2482</b>";

$Q[28] = "A teacher is taking the school band on a tour to Botswana. At the end of the trip the teacher has 1522 Pula, which she wishes to convert to Australian dollars. An exchange offers a rate of 1 Pula = 13 cents Australian. How many Australian dollars will the teacher receive? Give your answer to the nearest cent.";
$QType[28] = 1;
$QAnswers[28] = "197.86";
$QOptions[28] = array("0","0","0","0");
$prefix[28] = "$";
$suffix[28] = "";
$Soln[28] = "1 Pula = 13 cents<br>1522 Pula = 13 \\(\\times\\) 1522 cents = 19786 cents = 19786 \\(\\div\\) 100 dollars = $197.86";

$Q[29] = "A box contains red, yellow and blue balls. The probability of drawing a red ball is \\(\\frac{5}{8}\\) and the probability of drawing a yellow ball is \\(\\frac{1}{8}\\). If there are 8 balls, how many of the balls are blue? ";
$QType[29] = 1;
$QAnswers[29] = "2"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "";
$suffix[29] = "";
$Soln[29] = "Probability of drawing a blue ball = \\(\\frac{8}{8}\\) - \\(\\frac{5}{8}\\) - \\(\\frac{1}{8}\\) = \\(\\frac{2}{8}\\)<br> So \\(\\frac{2}{8}\\) of the balls are blue.<br>Number of blue balls = \\(\\frac{2}{8} \\times 8 \\) = <b>2</b>";

$Q[30] = "The graph shows the growth in the rate of attainment of higher level qualifications for 20-64 year olds between 2001 and 2011.<br><img src='images/PracticeTest7c_1.jpg'><br>True/False: This graph shows that the rate of attainment of higher level qualifications increased in every region of Australia over the period.";
$QType[30] = 0;
$QAnswers[30] = "b";
$QOptions[30] = array("True","False","N/A","N/A");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "false: less than 10% can include increases of 0%, and even decreases.";

$Q[31] = "The number of students who tried out for school teams in soccer, volleyball and tennis were recorded in a Venn diagram. Only 15 students did not try out for any team.<br><img src='images/PracticeTest7c_2.jpg'><br>How many students did not try out for the school tennis team.";
$QType[31] = 1;
$QAnswers[31] = "132";
$QOptions[31] = array("0","0","0","0");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "Number of students who did not try out for tennis = the sum of all the numbers not inside the tennis circle<br>= 83 + 12 + 22 + 15 = <b>132</b>";

$Q[32] = "The number of students who tried out for school teams in soccer, volleyball and tennis were recorded in a Venn diagram. Only 15 students did not try out for any team.<br><img src='images/PracticeTest7c_2.jpg'><br>How many students tried out for exactly two teams?";
$QType[32] = 1;
$QAnswers[32] = "21";
$QOptions[32] = array("0","0","0","0");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "Number of students who tried out for exactly two teams = sum of numbers in exactly 2 circles <br> = 4 + 12 + 5 = <b>21</b>";

$Q[33] = "A teacher is reviewing the final results for the year 10 students in history. He observes that the median mark was 60% and the interquartile range was 15%. The assessment was made up of three tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br>
<table>
<tr><th></th><th>Task value (%)</th><th>Marked out of</th><th>Student's mark</th></tr>
<tr><td>Task 1</td><td>25</td><td>50</td><td>40</td></tr>
<tr><td>Task 2</td><td>30</td><td>60</td><td>35</td></tr>
<tr><td>Task 3</td><td>45</td><td>40</td><td>30</td></tr>
</table><br>The teacher needs to determine which grade to award this student based on the overall mark. Which grade should the student be awarded?";
$QType[33] = 0;
$QAnswers[33] = "b";
$QOptions[33] = array("A: 86-100%","B: 71-85%","C: 51-70%","D: 0-49%");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "Student's overall mark = 40\\(\\div\\) 50 \\(\\times\\) 25 + 35 \\(\\div\\) 60 \\(\\times\\) 30 + 30 \\(\\div\\) 40 \\(\\times\\) 45 = 71.25<br>Grade to be awarded = B, 71-85%, which is option <b>b</b>.";

$Q[34] = "The dimensions of four rectangular desks are given in the following table. Which desk has the greatest area?<br>
<table>
<tr><th></th><th>Length (cm)</th><th>Width (cm)</th></tr>
<tr><td>Desk A</td><td>80</td><td>80</td></tr>
<tr><td>Desk B</td><td>120</td><td>60</td></tr>
<tr><td>Desk C</td><td>110</td><td>70</td></tr>
<tr><td>Desk D</td><td>180</td><td>40</td></tr>
</table><br>";
$QType[34] = 0;
$QAnswers[34] = "c"; 
$QOptions[34] = array("A","B","C","D");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "<table>
<tr><th></th><th>Length (cm)</th><th>Width (cm)</th><th>Area</th></tr>
<tr><td>Desk A</td><td>80</td><td>80</td><td>80 \\(\\times\\) 80 = 6400</td></tr>
<tr><td>Desk B</td><td>120</td><td>60</td><td>120 \\(\\times\\) 60 = 7200</td></tr>
<tr><td>Desk C</td><td>110</td><td>70</td><td>110 \\(\\times\\) 70 = 7700</td></tr>
<tr><td>Desk D</td><td>180</td><td>40</td><td>180 \\(\\times\\) 40 = 7200</td></tr>
</table><br>Therefore the desk with the largest area is C, which is option <b>(c)</b>.";

$Q[35] = "A trip taking 4 hours and 48 minutes started at 1100 hours. At what time did it finish? ";
$QType[35] = 0;
$QAnswers[35] = "a";
$QOptions[35] = array("1548 hours","1448 hours","1248 hours","0348 hours");
$prefix[35] = "";
$suffix[35] = "";
$Soln[35] = "1100 hours + 4 hours and 48 minutes = 1548 hours, which is option <b>(a)</b>";

$Q[36] = "80 students need to be transported to the Performing Arts Centre for a performance. The students need to be at the Performing Arts Centre by 12:30 pm. The bus can only hold 64 students so the bus will need to take some of the students to the Centre, then return to school to collect and take the remaining students. The bus trip from school to the Centre takes 15 minutes when the bus travels at an average speed of 40 km/h. How far will the bus travel from the time it first arrives at the school to the time when all of the students are at the Performing Arts Centre?";
$QType[36] = 1;
$QAnswers[36] = "30";
$QOptions[36] = array("0","0","0","0");
$prefix[36] = "";
$suffix[36] = " km";
$Soln[36]= "The bus will need to travel between the school and the Arts Centre 3 times: once to take the first load, once back, and once to take the second load.<br>15 minutes = 15 \\(\\div\\) 60 hours = 0.25 hours<br>Distance between school and Arts Centre = speed \\(\\times\\) time = 40 km/h \\(\\times\\) 0.25 h (note that the speed is per hour and the time is in hours - the time units must be the same)<br> = 10 km<br>Total trip distance = 3\\(\\times\\) 10 km = <b>30</b> km.";

$Q[37] = "Students needed to complete an adventure course that involved crossing a raised swing bridge. The bridge was rated for a maximum load of 0.2 tonnes. If the students each weigh no more than 35 kg, what is the maximum number of students that could go on the bridge at any one time?";
$QType[37] = 1;
$QAnswers[37] = "5";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = "";
$Soln[37] = "0.2 tonnes = 0.2 \\(\\times\\) 1000 = 200 kg<br>Maximum number of students = 200 \\(\\div\\) 35 = 5.71<br>As we cannot have a fraction of a student we need to round down: rounding up would take us over the limit for the bridge.<br>The bridge can hold up to <b>5</b> students.";

$Q[38] = "A person earns $70300 a year. They pay $370 a week in rent, $150 a quarter on utilities (electricity and water), $150 a week in groceries and other expenses. What percentage of their income is not spent on these necessities? Round your answer to the nearest percent.";
$QType[38] = 1;
$QAnswers[38] = "61";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "";
$suffix[38] = "%";
$Soln[38] = "You need to convert everything to annual income or to weekly income. I will convert everything to annual income.<br>Total weekly expenditure = 370 + 150 = 520<br>Total annual expenditure = \\(520 \\times 52 + 150 \\times 4 = 27640\\)<br>Annual income remaining after expenses = 70300 - 27640 = 42660<br>Income remaining as a proportion of total income = 42660 \\(\\div\\) 70300 = 60.68, which rounds to <b>61</b>%.";

$Q[39] = "A teacher is planning to take a group of students on a hike. On the map, the hike distance is 12 cm. The map says that the scale is 1:40 000. What is the actual distance of the hike? Give your answer in km.";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "4.8";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "";
$suffix[39] = " km";
$Soln[39] = "1 unit on the map is 40 000 units on the ground<br>1 cm on the map is 40 000 cm on the ground<br>12 cm on the map is 12 \\(\\times\\) 40 000 = 480 000 cm on the ground<br>Distance to walk = 480 000 cm = 480 000 \\(\\div\\) 100 = 4 800 m = 4 800 \\(\\div\\) 1 000 = <b>4.8</b> km";

$Q[40] = "A teacher is planning to take the school orienteering team to a competition in the United States. The course distance is 3 miles. Using the rule of thumb that one mile is approximately 1.6 km, calculate the length of the course in metres. Give your answer to the nearest metre.";
$QType[40] = 1;
$QAnswers[40] = "4800";
$QOptions[40] = array("0","0","0","0");
$prefix[40] = "";
$suffix[40] = " m";
$Soln[40] = "1 mile = 1.6 km<br>3 miles = 3 \\(\\times\\) 1.6 km = 4.8 km = 4.8 \\(\\times\\) 1000 = <b>4800</b> m";

$Q[41] = "During a swimming lesson, a teacher observes that a student uses 63 strokes to swim the length of a 50 m pool. On average, how many centimetres did the student swim with each stroke? Give your answer rounded to the nearest centimetre.";
$QType[41] = 1;
$QAnswers[41] = "79";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "";
$suffix[41] = " cm";
$Soln[41] = "50 m = 50 \\(\\times\\) 100 = 5000 cm<br>63 strokes for 5000 cm<br>1 stroke for 5000 \\(\\div\\) 63 = 79.3 cm, which rounds to <b>79</b> cm";

$Q[42] = "The percentages of pupils achieving at Band 5 and 6 in the NAPLAN tests were recorded over a six year period for a number of schools. The percentages are shown in the table below. <br>
<table>
<tr><th>School</th><th>2008</th><th>2009</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th></tr>
<tr><td>A</td><td>27.63</td><td>28.2</td><td>34.2</td><td>34.7</td><td>35.1</td><td>37.9</td></tr>
<tr><td>B</td><td>34.9</td><td>34.7</td><td>34.3</td><td>34.4</td><td>34.7</td><td>35.2</td></tr>
<tr><td>C</td><td>45.3</td><td>44.8</td><td>43.6</td><td>43.9</td><td>43.3</td><td>42.5</td></tr>
<tr><td>D</td><td>36.1</td><td>38.4</td><td>38.2</td><td>38.6</td><td>38.9</td><td>39.5</td></tr>
<tr><td>E</td><td>29.7</td><td>43.4</td><td>34.5</td><td>36.6</td><td>45.0</td><td>43.2</td></tr></table><br>What was the percentage increase in School D’s results between 2008 and 2013?";
$QType[42] = 1;
$QAnswers[42] = "3.4"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "";
$suffix[42] = " %";
$Soln[42] = "Percentage increase = 39.5 - 36.1 = <b>3.4</b>%";

$Q[43] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><img src='images/PracticeTest7d_1.jpg'><br>How many more people lived in Victoria than in Tasmania?";
$QType[43] = 1;
$QAnswers[43] = "5129900";
$QOptions[43] = array("0","0","0","0");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "Difference = 5 640 900 - 511 000 = <b>5129900</b>";

$Q[44] = "A teacher wishes to buy about 3 kg of mandarins. An Internet site told her that mandarins weigh about 140 g each. Using this estimate, how many mandarins will the teacher need to buy? Give your answer rounded to the nearest whole number of fruit.";
$QType[44] = 1;
$QAnswers[44] = "21";
$QOptions[44] = array("0","0","0","0");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "Mandarin weight = 140 g = 0.140 kg<br>Number of mandarins = 3 \\(\\div\\) 0.140 = 21.4, which rounds to <b>21</b>";

$Q[45] = "The formula to convert between temperatures in Fahrenheit and Celsius is<br>
(F – 32) \\(\\times\\) \\(\\frac{5}{9}\\) = C<br>
Where F is the temperature in Fahrenheit and C is the temperature in Celsius. What is 0 degrees Fahrenheit in Celsius?";
$QType[45] = 0;
$QAnswers[45] = "a";
$QOptions[45] = array("-18","-10","0","18");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "(0 – 32) \\(\\times\\) \\(\\frac{5}{9}\\) = \\(-32 \\times 5 \\div 9\\) = -17.78, which rounds to -18°C, which is option <b>(a)</b>";

$Q[46] = "The same paint is sold at the same store in various size containers. The volumes and prices are as follows: <br>
<table>
<tr><th>Volume</th><th>Price</th></tr>
<tr><td>100 mL</td><td>$7.60</td></tr>
<tr><td>500 mL</td><td>$28.20</td></tr>
<tr><td>1 L</td><td>$42.90</td></tr>
<tr><td>10 L</td><td>$171.00</td></tr>
</table><br>
Which product offers the best value for money?";
$QType[46] = 0;
$QAnswers[46] = "d";
$QOptions[46] = array("100 mL","500 mL","1 L","10 L");
$prefix[46] = "";
$suffix[46] = "";
$Soln[46] = "<table>
<tr><th>Volume</th><th>Price</th><th>Price per 1 L calculation</th><th>Price per 1 L</th></tr>
<tr><td>100 mL</td><td>$7.60</td><td>$7.60 \\(\\times\\) 10</td><td>$76</td></tr>
<tr><td>500 mL</td><td>$28.20</td><td>$28.20 \\(\\times\\) 2 </td><td>$56.40</td></tr>
<tr><td>1 L</td><td>$42.90</td><td></td><td>$42.90</td></tr>
<tr><td>10 L</td><td>$171.00</td><td>$171 \\(\\div\\) 10</td><td>$17.10</td></tr>
</table><br>so the 10 L tin, option <b>d</b> represents the best value for money.";

$Q[47] = "A teacher invests some of her superannuation in a cash investment with an interest rate of 5%, compounded annually. The formula to compute the value of her investment is as follows.<br>
\\(V = A \\times (1 - \\frac{r}{100})\\)<sup>n</sup><br>where \\(V\\) is the dollar value of the investment, \\(A\\) is the sum initially invested in dollars, \\(r\\) is the percentage interest rate, and \\(n\\) is the number of years the money was invested.<br>If the teacher invested $20 000, what will her investment be worth after 1 year? Give your answer to the nearest dollar.";
$QType[47] = 1;
$QAnswers[47] = "21000"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "$";
$suffix[47] = "";
$Soln[47] = "Value = 20000 \\(\\times\\) (1 - 5 \\(\\div\\) 100)<sup>1</sup> = 20000 \\(\\times\\) 1.05<sup>1</sup> = 20000 \\(\\times\\) 1.05 = $<b>21000</b>";

$Q[48] = "The marks that ten year 10 students achieved in their final English and Mathematics exams were recorded and plotted in the following graph.<br><img src='images/PracticeTest7d_2.jpg'><br>What was the median mathematics mark achieved by these students?";
$QType[48] = 1;
$QAnswers[48] = "75";
$QOptions[48] = array("0","0","0","0");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "Maths marks: 51, 53, 56, 66, 72, 78, 80, 86, 94, 98<br>Median mark = <b>75</b>";

$Q[49] = "The marks that ten year 10 students achieved in their final English and Mathematics exams were recorded and plotted in the following graph.<br><img src='images/PracticeTest7d_2.jpg'> <br>The student who obtained the highest score in English scored what mark in mathematics?";
$QType[49] = 1;
$QAnswers[49] = "53";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = "";
$Soln[49]= "Highest English mark = 88<br>This student scored <b>53</b> in mathematics.";

$Q[50] = "You want to buy two lots of a given product. You have found that it is available in four different stores. Which store has the cheapest price for you?";
$QType[50] = 0;
$QAnswers[50] = "c";
$QOptions[50] = array("Store 1: 1 item costs $56.70 ","Store 2: 1 item normally costs $65 but is discounted by 10%","Store 3: the item costs $58 for 1, or $102 for 2 ","Store 4: 1 item normally cosst $70 but is discounted by 15%");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "Total cost from Store 1 = \\(2 \\times \\) $56.70 = $113.40<br>total cost from Store 2 = 2 \\(\\times\\) $65 \\(\\times\\) 90% = 2 \\(\\times\\) $65 \\(\\times\\) 90 \\(\\div\\) 100 = $117<br>Total cost from Store 3 = $102<br>Total cost from Store 4 = 2 \\(\\times\\) $70 \\(\\times\\) 85% = 2 \\(\\times\\) $70 \\(\\times 85 \\div 100\\) = $119<br>The cheapest option is Store 3, option <b>(c)</b>";

$Q[51] = "A teacher is trying to timetable classes across a multiple campus school. The times to walk between campuses are shown in the following table.<br>
<table>
<tr><th></th><th>North Campus</th><th>South Campus</th><th>West Campus</th></tr>
<tr><td>North Campus</td><td>0</td><td>12</td><td>10</td></tr>
<tr><td>South Campus</td><td>12</td><td>0</td><td>5</td></tr>
<tr><td>West Campus</td><td>10</td><td>5</td><td>0</td></tr>
</table><br>A class needs to study maths on North Campus C1, science on North Campus, music on South Campus, and PE on West Campus. The four programs below show the students' lessons for the day, in order. Which of these programs minimizes the amount of walking needed by the students? ";
$QType[51] = 0;
$QAnswers[51] = "d";
$QOptions[51] = array("1) maths 2) music 3) PE 4) science","1) PE 2) music 3) science 4) maths ","1) maths 2) PE 3) science 4) music ","1) science, 2) maths, 3) PE, 4) music");
$prefix[51] = "";
$suffix[51] = "";
$Soln[51] = "Program a walking time = 12 + 5 + 10 = 27 min<br>Program b walking time = 5 + 12 + 0 = 17 min<br>Program c walking time = 10 + 10 + 12 = 32 min<br>Program d walking time = 0 + 10 + 5 = 15 min<br>Program <b>d<b> has the least walking.";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>Find 10% of 320 km. Give your answer in metres.";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "32000";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = " m";
$Soln[52] = "10% = 32 km = <b>32000</b> m";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>An educational supplier was selling damaged stock at a discount of 50%. A teacher bought goods totalling $270 before the discount was applied. How much did the teacher pay?";
$QType[53] = 1;
$QAnswers[53] = "135";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "Teacher paid 100 - 50 = 50% of the marked price.<br>50% \\(\\times\\) $270 = $<b>135</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>13 + 1.3 + 0.13 =";
$QType[54] = 0;
$QAnswers[54] = "c";
$QOptions[54] = array("13.33","13.34","14.43","14.44");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "13 + 1.3 + 0.13 = 14.43, option <b>(c)</b>";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>Write $58.60 in cents.";
$QType[55] = 1;
$QAnswers[55] = "5860"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = " c";
$Soln[55] = "$58.60 = <b>5860</b> c";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>Write 68230 g in kilograms. Give your answer rounded to 1 decimal place.";
$QType[56] = 1;
$QAnswers[56] = "68.2";
$QOptions[56] = array("0","0","0","0");
$prefix[55] = "";
$prefix[56] = "";
$suffix[56] = " kg";
$Soln[56] = "68230 g = 68.230 kg<br>This rounds to 68.2 kg";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>16 tonnes is equivalent to how many kilograms?";
$QType[57] = 1;
$QAnswers[57] = "16000";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = " kg";
$Soln[57] = "16 t = 16000 kg";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>A teacher bought three notepads for $4.25 each. What ws the total cost of the purchase?";
$QType[58] = 1;
$QAnswers[58] = "12.75";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "$";
$suffix[58] = "";
$Soln[58] = "Total cost = $4.25 \\(\\times\\) 3 = $12.75";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>A teacher bought a notepad for $4.25 and two pens for $1.80 each. She paid with a $20 note. How much change should she have received?";
$QType[59] = 1;
$QAnswers[59] = "12.15";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "$";
$suffix[59] = "";
$Soln[59] = "4.25 + 1.80 + 180 = 7.85<br>20.00 - 7.85 = 12.15<br>She should receive $12.15 change.";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>Which is smallest:";
$QType[60] = 0;
$QAnswers[60] = "c"; 
$QOptions[60] = array("12 \\(\\times\\) 3 - 2","12 \\(\\times\\) 2 - 3","12 - 3 \\(\\times\\) 2","3 + 2 \\(\\times\\) 12");
$prefix[60] = "";
$suffix[60] = "";
$Soln[60] = "12 \\(\\times\\) 3 + 2 = 38<br>12 \\(\\times\\) 2 - 3 = 21<br>12 - 3 \\(\\times\\) 2 = 6<br>3 + 2 \\(\\times\\) 12 = 27, so option <b>(c)</b> is the smallest.";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>A box of 200 books weighs 20 kg. What do 20 books weigh?";
$QType[61] = 1;
$QAnswers[61] = "2";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = " kg";
$Soln[61] = "200 books weigh 20 kg, so 200 \\(\\div\\) 10 books weigh 20 \\(\\div\\) 10 kg<br>i.e. 20 books weigh <b>2</b> kg.";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>A child starts the year 110 cm tall and grows 10% taller during the year. How tall is the child at the end of the year?";
$QType[62] = 1;
$QAnswers[62] = "121";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "";
$suffix[62] = " cm";
$Soln[62]= "10% \\(\\times\\) 110 = 11<br>110 + 11 = 121<br>The child is <b>121</b> cm tall at the end of the year.";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>How many teams of 7 students can be made from a group of 91 students?";
$QType[63] = 1;
$QAnswers[63] = "13";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = "";
$Soln[63] = "Number of teams = 91 \\(\\div\\) 7 = 13";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>A student has calculated that she needs to score 24% in the final exam to pass a subject. If the final exam is to be marked out of 75, what is the minimum mark that the student needs to get?";
$QType[64] = 1;
$QAnswers[64] = "18";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = "";
$Soln[64] = "\\(\\frac{24}{100}\\) = \\(\\frac{?}{75}\\)<br>There are many different ways to do this. Here is one way<br>\\(\\frac{24}{100} = \\frac{12}{50} = \\frac{6}{25} =  \\frac{18}{75}\\)<br>The student needs a mark of at least <b>18</b>";

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