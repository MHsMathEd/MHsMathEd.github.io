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

$Q[0] = "Three year six classes raise $972 for charity. Two classes each want to donate their third of the money to Charity A and the third class wants to donate its third of the money to Charity B. How much money will Charity A receive? Give your answer to the nearest dollar.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "648";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "$";
$suffix[0] = "";
$Soln[0] = "Charity A receives \\(2\\over 3\\) \\(\\times\\) $972 = $<b>648</b>";

$Q[1] = "The formula for simple interest is \\(I = PRN\\), where \\(I\\) is the interest, \\(P\\) is the principal, \\(R\\) is the interest rate and \\(N\\) is the time period. Calculate the interest earned on a principal sum of $5000 at 0.05 interest rate for 10 years. Give your answer to the nearest dollar.";
$QType[1] = 1;
$QAnswers[1] = "2500";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "\\(I = P \\times R \\times N\\) = $5000 \\(\\times\\) 0.05 \\(\\times\\) 10 = $<b>2500</b>";

$Q[2] = "A teacher is preparing a map of the school. The main building is 160 m long. The scale on the map is 1 cm represents 50 m. How long will the drawing of the main building on the map be? Give your answer in centimetres.";
$QType[2] = 1;
$QAnswers[2] = "3.2";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " cm";
$Soln[2] = "50 m -> 1 cm<br>1 m -> 1 \\(\\div\\) 50 cm<br> 160 m -> 1 \\(\\div\\) 50 \\(\\times\\) 160 = <b>3.2</b> cm";

$Q[3] = "The chart (sourced from the Australian Bureau of Statistics) shows the percentage of Australian children attending care from 2011 to 2017.<br><br><img src='images/PracticeTest6a_1.jpg'><br><br>What percentage of Australian children aged 0 – 12 years used child care in 2014?";
$QType[3] = 1;
$QAnswers[3] = "48.1"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "";
$suffix[3] = "%";
$Soln[3] = "From the chart, <b>48.1</b>% of children used child care in 2014.";

$Q[4] = "The chart (sourced from the Australian Bureau of Statistics) shows the percentage of Australian children attending care from 2011 to 2017.<br><br><img src='images/PracticeTest6a_1.jpg'><br><br>True/False: The use all types of care has increased steadily from 2011 to 2017";
$QType[4] = 0;
$QAnswers[4] = "b";
$QOptions[4] = array("True","False","N/A","N/A");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "This is false (option<b>(b)</b>) as informal care usage decreased from 2011 to 2014.";

$Q[5] = "1.	The graph (source: Australian Bureau of Statistics) shows the devices used by households to connect to the internet over a 2-year period.<br><br><img src='images/PracticeTest6a_2.jpg'><br><br>Which device had the largest decrease in percentage use from 2014-15 to 2016-17?";
$QType[5] = 0;
$QAnswers[5] = "b";
$QOptions[5] = array("Internet connected games console","Internet connected music/video player","Internet connected TV","Desktop or laptop computer");
$prefix[5] = "";
$suffix[5] = "";
$Soln[5] = "The largest decrease was in Internet connected music/video player, option <b>(b)</b>.";

$Q[6] = "In a year group of 77 year 12 students, 18 students have their driver licences. What percentage of the year group have driver licences? Give your answer to 1 decimal place.";
$QType[6] = 1;
$QAnswers[6] = "23.4";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = "%";
$Soln[6] = "Percentage with licences = 18 \\(\\div\\) 77 \\(\\times\\) 100% = 23.4%";

$Q[7] = "A bag contains 4 green, 2 black, 5 purple and 1 orange balls. In an experiment, a ball is drawn out at random. Its colour is recorded and then it is replaced into the bag. If the experiment is repeated 60 times, which colour ball would you expect to draw out 5 times?";
$QType[7] = 0;
$QAnswers[7] = "d";
$QOptions[7] = array("green","black","purple","orange");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Total number of balls = 4 + 2 + 5 + 1 = 12<br>Probability of drawing the selected ball = \\(5\\over 60\\) = \\(1\\over 12\\)<br>The ball with a probability of \\(1\\over 12\\) is the orange ball, option <b>(d)</b>.";

$Q[8] = "Simon earns $1200 per week and spends 30% of his income on rent. How much does he spend each week on rent?";
$QType[8] = 1;
$QAnswers[8] = "360"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "$";
$suffix[8] = "";
$Soln[8] = "Amount spent on rent = 30 \\(\\div\\) 100 \\(\\times\\) $1200 = $<b>360</b>";

$Q[9] = "307 people are to go by bus on a school excursion. One bus holds 50 people. How many buses are needed? ";
$QType[9] = 1;
$QAnswers[9] = "7";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Number of buses = 307 \\(\\div\\) 50 = 6.14<br>We need to round up so that everyone can go.<br>Number of buses = <b>7</b>";

$Q[10] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (degrees Celsius)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 deg C. What was the temperature at 8 am the next morning?";
$QType[10] = 1;
$QAnswers[10] = "4.5";
$QOptions[10] = array("0","0","0","0");
$prefix[10] = "";
$suffix[10] = " degrees Celsius";
$Soln[10]= "Temperature at 8 am = 6.5 + 8 + 3 - 5 - 6.5 - 4.5 + 3 = <b>4.5</b> degrees.";

$Q[11] = "A school teacher wanted a new heater for her classroom. She was collecting temperature readings in her room to justify the need for air conditioning. She installed an automatic data recorder that took readings every 4 hours. Unfortunately, she set it up to record the change in temperature every four hours. The recorder recorded the following temperature readings:<br>
<table>
<tr><th>Time of day</th><th>Temperature Change (degrees Celsius)</th></tr>
<tr><td>0800</td><td>0</td></tr>
<tr><td>1200</td><td>+8</td></tr>
<tr><td>1600</td><td>+3</td></tr>
<tr><td>2000</td><td>-5</td></tr>
<tr><td>0000</td><td>-6.5</td></tr>
<tr><td>0400</td><td>-4.5</td></tr>
<tr><td>0800</td><td>+3</td></tr>
</table><br>She started it at 8 am one morning. She remembered that the temperature in her classroom then was 6.5 deg C. What was the biggest drop in temperature over a 4 hour period?";
$QType[11] = 0;
$QAnswers[11] = "c";
$QOptions[11] = array("3 degrees","5 degrees","6.5 degrees","8 degrees");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "The biggest drop, of 6.5 degrees, occurred at midnight, option <b>(c)</b>.";

$Q[12] = "A student completed a 4-part test and scored 18, 16, 12 and 17 in each of the parts. If each part of the test was out of 20, what was the student’s total mark, as a percentage? Give your answer rounded to 2 decimal places.";
$QType[12] = 1;
$QAnswers[12] = "78.75";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " %";
$Soln[12] = "student mark out of 80 = 18 + 16 + 12 + 17 = 63<br>\\(63\\over 80\\) as a percentage = 63 \\(\\div\\) 80 \\(\\times\\) 100% = 78.75%";

$Q[13] = "Which vessel contains the most liquid?<br><img src='images/PracticeTest6b_1.jpg'><br>";
$QType[13] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "c";
$QOptions[13] = array("A","B","C","D");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "Vessels A and D contain less than 500 mL. Vessel B contains 500 mL. Vessel C contains more than 500 mL, so vessel <b>C</b> contains the most liquid.";

$Q[14] = "20% of a school’s students are in year 12. If there are 800 students in the school, how many are in year 12?";
$QType[14] = 1;
$QAnswers[14] = "160";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "Number of year 12 students = 20 \\(\\div\\) 100 \\(\\times\\) 800 = <b>160</b> students.";

$Q[15] = "A teacher intends to give a lesson that includes a 25 minute video and a 25 minute test. If the lesson begins at 11:40 am, at what time does it finish?";
$QType[15] = 0;
$QAnswers[15] = "c";
$QOptions[15] = array("11:90 am","12:30 am","12:30 pm","12:40 pm");
$prefix[15] = "";
$suffix[15] = "";
$Soln[15] = "The test will end 50 minutes later, at 12:30 pm, option <b>c</b>";

$Q[16] = "A box contains 6 blue balls, 5 red balls and 9 yellow balls. What is the probability of randomly drawing a blue ball? Give your answer as a decimal rounded to 1 decimal place.";
$QType[16] = 1;
$QAnswers[16] = "0.3"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "Total number of balls = 6 + 5 + 9 = 20<br>Probability of drawing a blue ball = \\(6\\over 20 \\) = 6 \\(\\div\\) 20 = <b>0.3</b>";

$Q[17] = "The local Town Hall can be hired for a day. Two schools join together to rent it out for a day. Each school holds its Presentation Day in the hall. Each school pays $210 in hire fee. As the Presentation day assemblies take only 1.5 hours each, the next year, the two schools invite a third school to join them in using the Town Hall on that day. If the hire rate remains unchanged, how much hire fee does each school pay?";
$QType[17] = 1;
$QAnswers[17] = "140";
$QOptions[17] = array("0","0","0","0");
$prefix[17] = "$";
$suffix[17] = "";
$Soln[17] = "Total cost to hire the Town Hall = $210 + $210 = $420<br>Cost for each of 3 schools = $420 \\(\\div\\) 3 = $<b>140</b>";

$Q[18] = "A PDHPE teacher takes a gerrycan of drinking water to the school athletics carnival. By recess, half the water in the gerrycan was drunk and there were 10 L of water remaining in the gerrycan. What was the capacity of the can in litres?";
$QType[18] = 1;
$QAnswers[18] = "20";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = " L";
$Soln[18] = "Capacity = 2 \\(\\times\\) 10 L = <b>20</b> litres";

$Q[19] = "A coach took a class from Sydney on an excursion to the Western Plains. It left the school at 7:30 am and arrived at its destination at 12:30 pm. For the first two hours the coach averaged a speed of 100 km/h. For the remainder of the journey it averaged 60 km/h. What was the average speed of the whole journey?";
$QType[19] = 1;
$QAnswers[19] = "76";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = " km/h";
$Soln[19] = "Length of trip = 5 hours<br>Distance covered in first 2 hours = 2 \\(\\times\\) 100 = 200 km<br>Distance covered in last 3 hours = 3 \\(\\times\\) 60 = 180 km. <br>Total distance = 200 + 180 = 380 km<br>Average speed = total distance \\(\\div\\) total time = 380 \\(\\div\\) 5 = <b>76</b> km/h";

$Q[20] = "A teacher prepares a practical measurement activity for his students. He gives each of them an 80 cm long piece of string. He asks them to measure the distance across the school oval (which he knows to be 52 m). How many 80 cm pieces of string would it take to reach across the oval?";
$QType[20] = 1;
$QAnswers[20] = "65";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "";
$suffix[20] = "";
$Soln[20] = "Length of string in metres = 0.80 m<br>Number of pieces of string = 52 \\(\\div\\) 0.80 = <b>65</b> pieces";

$Q[21] = "A school building has a floor plan as shown in the diagram. <br><br><img src='images/PracticeTest6b_2.jpg'><br><br>What is the floor area of the building?";
$QType[21] = 1;
$QAnswers[21] = "4200"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "";
$suffix[21] = " m<sup>2</sup>";
$Soln[21] = "Floor area = 20 \\(\\times\\) 100 + 20 \\(\\times\\) 100 + 20 \\(\\times\\) (100 - 45 - 45) = 2 \\(\\times\\) 20 \\(\\times\\) 100 + 20 \\(\\times\\) 10 = <b>4200</b> m<sup>2</sup>";

$Q[22] = "A school building has a floor plan as shown in the diagram. <br><br><img src='images/PracticeTest6b_2.jpg'><br><br>What is the length of the perimeter of the building?";
$QType[22] = 1;
$QAnswers[22] = "500";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = " m";
$Soln[22] = "Perimeter = 100 + 20 + 45 + 20 + 45 + 20 + 100 + 20 + 45 + 20 + 45 + 20 = 500 m";

$Q[23] = "A trip taking 6 hours and 17 minutes finished at 4:33 pm. At what time did it begin? ";
$QType[23] = 0;
$QAnswers[23] = "b";
$QOptions[23] = array("9:50 am","10:16 am","10:17 am","10:50 am");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "6 hours before 4:33 pm = 10:33 am<br>17 minutes before 10:33 am = 10:16 am, option <b>(b)</b>";

$Q[24] = "If you toss three coins, what is the probability that two of the coins will land heads up and one will land tails up?";
$QType[24] = 0;
$QAnswers[24] = "c";
$QOptions[24] = array("0.125","0.250","0.375","0.500");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "Possible combinations: HHH, HHT, HTH, THH, HTT, THT, TTH, TTT<br>Probability of 2 heads = \\(3\\over 8\\) = 0.375, option <b>(c)</b>";

$Q[25] = "If 3 decks of playing cards cost $17.70 how much would 5 decks cost?";
$QType[25] = 1;
$QAnswers[25] = "29.50";
$QOptions[25] = array("0","0","0","0");
$prefix[25] = "$";
$suffix[25] = "";
$Soln[25] = "3 decks cost $17.70<br>1 deck costs $17.70 \\(\\div\\) 3 = $5.90<br>5 decks cost $5.90 \\(\\times\\) 5 = $<b>29.50</b>";

$Q[26] = "A Japanese class were studying the cost of living in Tokyo. They found that a night’s accommodation in a modest Tokyo hotel was 11 775 yen. The exchange rate at the time was $1AU = 80.1 Japanese Yen. What is the cost of this night’s accommodation in Australian dollars? Give your answer to the nearest cent.";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "147.00";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "$";
$suffix[26] = "";
$Soln[26] = "80.1 yen = $1<br>1 yen = $1 \\(\\div\\) 80.1<br> 11775 yen = $1 \\(\\div\\) 80.1 \\(\\times\\) 11775 = $<b>147.00</b>";

$Q[27] = "A teacher calculated that the cost of staying in a modest hotel in Tokyo was around $147 a night. The cost of staying in a similar hotel in Adelaide was $88. How much more expensive is the Tokyo hotel than the Adelaide hotel?";
$QType[27] = 1;
$QAnswers[27] = "59";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "$";
$suffix[27] = "";
$Soln[27] = "Cost difference = $147 - $88 = $<b>59</b>";

$Q[28] = "A Japanese class were researching how much they could buy in Tokyo for AU$50. They found that the exchange rate was 80.10 Japanese Yen for 1 Australian dollar. The price of a burger meal was 801 yen. How much change would they have – in Australian dollars - from their $50 after buying a burger meal in Tokyo?";
$QType[28] = 1;
$QAnswers[28] = "40";
$QOptions[28] = array("0","0","0","0");
$prefix[28] = "$";
$suffix[28] = "";
$Soln[28] = "80.1 yen = $1<br>1 yen = $1 \\(\\div\\) 80.1<br>801 yen = $1 \\(\\div\\) 80.1 \\(\\times\\) 801 = $10<br> Change from $50 = $50 - $10 = $<b>40</b>";

$Q[29] = "A class was aiming to earn $450 from the school walkathon. There were 30 students in the class. The walkathon was 5 laps of the school. On average, how much money would each student have to earn per lap in order for the class to achieve its target? Give your answer in dollars, correct to the nearest cent.";
$QType[29] = 1;
$QAnswers[29] = "3"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "$";
$suffix[29] = "";
$Soln[29] = "Average amount per student = $450 \\(\\div\\) 30 = $15<br>Average amount per student per lap = $15 \\(\\div\\) 5 = $<b>3</b>";

$Q[30] = "A box holds 50 pencils. 15 of the pencils are lead pencils, the rest are coloured pencils. What fraction of the pencils are lead pencils?";
$QType[30] = 0;
$QAnswers[30] = "b";
$QOptions[30] = array("\\(3 \\over 5 \\)","\\(3 \\over 10 \\)","\\(7 \\over 5 \\)","\\(7 \\over 10 \\)");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "Fraction of lead pencils = \\(15\\over 50\\) = \\(3\\over 10\\), option <b>(b)</b>";

$Q[31] = "A teacher bought a book during a sale when 30% was taken off the marked price. If the original price was $80, how much did the teacher pay?";
$QType[31] = 1;
$QAnswers[31] = "56";
$QOptions[31] = array("0","0","0","0");
$prefix[31] = "$";
$suffix[31] = "";
$Soln[31] = "Percentage of price paid by the teacher = 100 - 30% = 70%<br>Amount paid by the teacher = 70 \\(\\div\\) 100 \\(\\times\\) $80 = $<b>56</b>";

$Q[32] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest6c_1.jpg'><br><br>What was the median final mark, as a percentage?";
$QType[32] = 0;
$QAnswers[32] = "c";
$QOptions[32] = array("10%","15.5%","77.5%","90%");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "Marks in order: 10, 12, 14, 15, 16, 16, 17, 18<br>The middle (median) mark is 15.5<br>As a percentage this is 15.5 \\(\\div\\) 20 \\(\\times\\) 100% = 77.5%, option <b>(c)</b>";

$Q[33] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest6c_1.jpg'><br><br>What was the modal number of references used?";
$QType[33] = 1;
$QAnswers[33] = "5";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "The mode for the number of references is <b>5</b>";

$Q[34] = "A class of students prepared assignments in groups. After they were marked, the teacher compared the number of references that each group had used in their assignment with the mark that was awarded to the group. The results are shown in the following graph.<br><br><img src='images/PracticeTest6c_1.jpg'><br><br>How many students achieved more than 75% for their final mark?";
$QType[34] = 1;
$QAnswers[34] = "4"; 
$QOptions[34] = array("0","0","0","0");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "75% corresponds to 15 out of 20. <b>4</b> students got final marks of more than 15.";

$Q[35] = "The ratio of 9-year-olds to 10-year-olds in a class was 4:5. Three more 9-year-olds joined the class, which meant there were 15 9-year-olds in the class. What is the ratio of 9-year-olds to 10-year-olds now?";
$QType[35] = 0;
$QAnswers[35] = "a";
$QOptions[35] = array("1:1","1:2","1:3","1:4");
$prefix[35] = "";
$suffix[35] = "";
$Soln[35] = "New number of 9-year-olds = 15<br> Old number of 9-year-olds = 15 - 3 = 12<br>A ratio of 4:5 means that the class has been divided into 4 + 5 = 9 parts, and 4 of those parts are 9-year-olds. <br> 4 parts of the old class = 12 students, so 1 part = 3 students. <br>Number of 10-year-olds = 3 \\(\\times\\) 5 = 15 students<br>Ratio in new class = 15:15, = 1:1, option <b>(a)</b>";

$Q[36] = "At a particular school, school reports placed student performance into achievement bands. The overall marks required to meet each band in mathematics for year 9 students are given in the table below.<br>
<table>
<tr><th>Band</th><th>Mark</th></tr>
<tr><td>A</td><td>80-100%</td></tr>
<tr><td>B</td><td>65-79%</td></tr>
<tr><td>C</td><td>50-64%</td></tr>
<tr><td>D</td><td>0-50%</td></tr>
</table><br>
Students were assessed via two assessment tasks. Each task was worth 50%. One particular student scored 48/60 in the first task, and 53/70 in the second task. What performance band did the student achieve?";
$QType[36] = 0;
$QAnswers[36] = "b";
$QOptions[36] = array("A","B","C","D");
$prefix[36] = "";
$suffix[36] = "";
$Soln[36]= "Total student mark = 48 \\(\\div\\) 60 \\(\\times\\) 50 + 53 \\(\\div\\) 70 \\(\\times\\) 50 = 40 + 37.8 = 77.8, which corresponds to band B, option <b>(b)</b>";

$Q[37] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part cordial to 4 parts water. If the teacher wants to make up 10 litres of drink, how much water needs to be used?";
$QType[37] = 1;
$QAnswers[37] = "8";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = " L";
$Soln[37] = "1 litre of cordial makes 1 + 4 = 5 litres of drink<br>10 L \\(\\div\\) 5 L = 2, so the teacher needs to make 2 batches, each with 4 L of water. <br>Total water = 2 \\(\\times\\) 4 L = <b>8</b> L";

$Q[38] = "A school storeroom has dimensions 4 m x 4 m x 2 m. The Art department have 24 m<sup>3</sup> of materials to store in the room. What percentage of the storeroom space will this use up?  ";
$QType[38] = 1;
$QAnswers[38] = "75";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "";
$suffix[38] = "%";
$Soln[38] = "Volume of storeroom = 4 \\(\\times\\) 4 \\(\\times\\) 2 = 32 m<sup>3</sup><br>Percentage of space used = 24 \\(\\div\\) 32 \\(\\times\\) 100% = <b>75</b>%";

$Q[39] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600.<br><br><img src='images/PracticeTest5a_2.jpg'><br><br> How many people were living outside of NSW?";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "15376100";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "";
$suffix[39] = "";
$Soln[39] = "People outside NSW = 22 693 600 - 7 317 500 = <b>15 376 100</b>";

$Q[40] = "The nutritional label from a food product is shown.<br><br><img src='images/PracticeTest6d_1.jpg'><br><br>How many grams of the product need to be eaten to achieve 100% of the daily Calcium requirements?";
$QType[40] = 1;
$QAnswers[40] = "1140";
$QOptions[40] = array("0","0","0","0");
$prefix[40] = "";
$suffix[40] = " g";
$Soln[40] = "20% calcium in 1 serve. 100% calcium in 5 serves.<br> 1 serve = 228 g. 5 serves = 5 \\(\\times\\) 228 g = <b>1140</b> g";

$Q[41] = "The nutritional label from a food product is shown.<br><br><img src='images/PracticeTest6d_1.jpg'><br><br>In one serve of the product, how many calories are not obtained from fat?";
$QType[41] = 1;
$QAnswers[41] = "140";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "";
$suffix[41] = " calories";
$Soln[41] = "Calories not from fat = 250 - 110 = <b>140</b>";

$Q[42] = "The nutritional label from a food product is shown.<br><br><img src='images/PracticeTest6d_1.jpg'><br><br>What percentage of the daily recommended value of sodium is present in half a cup of the product?";
$QType[42] = 1;
$QAnswers[42] = "10"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "";
$suffix[42] = "%";
$Soln[42] = "half a cup = one half a serve<br>% sodium in half a serve = \\(1\\over 2\\) \\(\\times\\) 20% = <b>10%</b>";

$Q[43] = "A map of a school is shown.<br><img src='images/PracticeTest6d_2.jpg'><br>Which of the following is located to the south of the library (shown in red)?";
$QType[43] = 0;
$QAnswers[43] = "b";
$QOptions[43] = array("Office","Elouera","Music","SAM");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "Elouera is to the south of the library, option <b>(b)</b>";

$Q[44] = "A map of a school is shown.<br><img src='images/PracticeTest6d_2.jpg'><br>To walk directly from the canteen (shown in yellow at the centre of the map) to Block O (on the right), you need to pass by which of these blocks?";
$QType[44] = 0;
$QAnswers[44] = "d";
$QOptions[44] = array("Block C","Block G","Block H","Block N");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "You need to pass Block N, option <b>(d)</b>";

$Q[45] = "Students are required to study at least 80 hours per year of PDHPE in primary school. A school that has 4 ten-week terms a year spends 2 hours per week on PDHPE in term 1, then 1 hour per week in term 2, then 1.5 hours per week in term 3. How many hours per week need to be spent on PDHPE in term 4?";
$QType[45] = 1;
$QAnswers[45] = "3.5";
$QOptions[45] = array("0","0","0","0");
$prefix[45] = "";
$suffix[45] = " hours per week";
$Soln[45] = "Hours spent in terms 1-3 = 2 \\(\\times\\) 10 + 1 \\(\\times\\) 10 + 1.5 \\(\\times\\) 10 = 45 hours<br>Hours remaining = 80 - 45 = 35<br>Hours per week = 35 \\(\\div\\) 10 = <b>3.5</b> hours per week.";

$Q[46] = "Students in year 5 are required to study 160 hours of mathematics each year. A particular school has 4 ten-week terms, and each week consists of 5 school days. Each school day begins at 9:15 am and ends at 3:15 pm. On average, what percentage of the school day is spent doing mathematics? Give your answer to the nearest percent.";
$QType[46] = 1;
$QAnswers[46] = "13";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "";
$suffix[46] = "%";
$Soln[46] = "160 hours of maths in 40 weeks = 4 hours per week<br>4 hours = 4 hours per week = 4 \\(\\div\\) 5 hours per day = 0.8 hours per day<br>Length of school day = 3:15 pm - 9:15 am = 6 hours<br>Percentage of day spent doing maths = 0.8 \\(\\div\\) 6 \\(\\times\\) 100% = 13%";

$Q[47] = "On average, students in year 5 at a particular school spend 5% of their time each day studying technology. This school has 4 ten-week terms, and each week consists of 5 school days. Each school day begins at 9:15 am and ends at 3:15 pm. How many hours do the students spend studying technology at school in year 5?";
$QType[47] = 1;
$QAnswers[47] = "60"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = " hours";
$Soln[47] = "Length of school day = 6 hours<br>Days in a school week = 5<br>School hours in 1 week = 5 \\(\\times\\) 6 = 30<br>School weeks in a year = 4 \\(\\times\\) 10 = 40<br>School hours in 1 year = 30 \\(\\times\\) 40 = 1200<br>Time spent studying technology = 5% \\(\\times\\) 1200 = <b>60</b> hours";

$Q[48] = "In a school of 600 children, one-third of them play in a school sport team. Of the children who play in school sport teams, one half play cricket, one quarter play T-ball and one quarter play volleyball. How many students play T-ball?";
$QType[48] = 1;
$QAnswers[48] = "50";
$QOptions[48] = array("0","0","0","0");
$prefix[48] = "";
$suffix[48] = "";
$Soln[48] = "Number of children playing on a sport team = 1 \\(\\div\\) 3 \\(\\times\\) 600 = 200<br>Number of chilren playing T-ball = 1 \\(\\div\\) 4 \\(\\times\\) 200 = <b>50</b>";

$Q[49] = "In a school of 600 children, one-third of them play in a school sport team. Of the children who play in school sport teams, one half play cricket, one quarter play T-ball and one quarter play volleyball. How many children do not play on a sports team?";
$QType[49] = 1;
$QAnswers[49] = "400";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = "";
$Soln[49]= "Children not on a sport team = 2 \\(\\div\\) 3 \\(\\times\\) 600 = <b>400</b>";

$Q[50] = "A teacher orders a class set of 30 books. Each book weighs 400 g. The teacher also orders two copies of a role playing game set. Each game set weighs 2.1 kg. What is the total weight of the teacher's order?";
$QType[50] = 1;
$QAnswers[50] = "16.2";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = " kg";
$Soln[50] = "Book weight in kg = 0.4 kg<br>Order weight = 30 \\(\\times\\) 0.4 + 2 \\(\\times\\) 2.1 = <b>16.2</b> kg";

$Q[51] = "A maths teacher asks her students to measure the length of their classroom using their 30 cm rulers. She wants them to place their rulers end-to-end across the classroom and count how many rulers they used. If the classroom is 8.1 m long, how many rulers will be needed?";
$QType[51] = 1;
$QAnswers[51] = "27";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = "";
$Soln[51] = "Ruler length in metres = 0.3 m<br>Number of rulers required = 8.1 \\(\\div\\) 0.3 = <b>27</b>";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>Find 5% of 60 kg.";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "3";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = " kg";
$Soln[52] = "10% = 6, so 5% = <b>3</b>";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>Edition 1 of a textbook cost $40. The Second Edition cost 10% more than edition 1. What was the cost of a copy of the Second Edition?";
$QType[53] = 1;
$QAnswers[53] = "44";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "10% = $4<br>New cost = 100% + 10% = $40 + 4 = $<b>44</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>How many millimetres are equivalent to 3.8 metres?";
$QType[54] = 1;
$QAnswers[54] = "3800";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = " mm";
$Soln[54] = "3.8 m = 380 cm = <b>3800</b> mm";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>Karil buys two muffins for $3.55 each and two bottles of water for $1.70 each. How much change will he receive if he pays with a $20 note?";
$QType[55] = 1;
$QAnswers[55] = "9.50"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "$";
$suffix[55] = "";
$Soln[55] = "total price = 2 \\(\\times\\) $3.55 + 2 \\(\\times\\) $1.70 = $10.50<br>Change from $20 = $20 - $10.50 = $<b>9.50</b>";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>\\(3\\over 10\\) + \\(17\\over 100\\) = ";
$QType[56] = 0;
$QAnswers[56] = "a";
$QOptions[56] = array("0.47","0.20","0.317","0.02");
$prefix[56] = "";
$suffix[56] = "";
$Soln[56] = "\\(3\\over 10\\) + \\(17\\over 100\\) = \\(30\\over 100\\) + \\(17\\over 100\\) = \\(47\\over 100\\) = 0.47, option <b>(a)</b>";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>Find the volume of a tank that is 20 cm long, 10 cm wide and 20 cm high.";
$QType[57] = 1;
$QAnswers[57] = "4000";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = " cm<sup>3</sup>";
$Soln[57] = "Volume = 20 \\(\\times\\) 10 \\(\\times\\) 20 = 4000 cm<sup>3</sup>";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>How many hours is 165 minutes? Give your answer to 2 decimal places.";
$QType[58] = 1;
$QAnswers[58] = "2.75";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = " hours";
$Soln[58] = "1 hour = 60 minutes<br>2 hours = 120 minutes<br>165 minutes = 2 hours and 45 minutes = <b>2.75</b> hours";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>One ball of string is 50 metres long. How many kilometres of string are in twenty similar balls of string?";
$QType[59] = 1;
$QAnswers[59] = "1";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = " km";
$Soln[59] = "length = 50 \\(\\times\\) 20 m = 1000 m = 1 km";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>A pack of grammar workbooks that normally costs $270 is being sold with a 15% discount. What is the new cost of the pack of workbooks? Give your answer to the nearest cent.";
$QType[60] = 1;
$QAnswers[60] = "229.50"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "$";
$suffix[60] = "";
$Soln[60] = "10% = $27, 5% = $13.50, 15% = $40.50<br>New cost = $270 - $40.50 = $229.50";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>A student is sitting a 2 hour exam with 20 questions. After 90 minutes the student has answered 15 questions. How many minutes per question does the student have on average to answer the remaining questions?";
$QType[61] = 1;
$QAnswers[61] = "6";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = " minutes";
$Soln[61] = "Time remaining = 30 minutes<br>Questions remaining = 5<br>Minutes per question = 30  \\(\\div\\) 5 = <b>6</b> minutes per question.";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>A pack of biscuits costs $1.50. How many packs can the teacher buy with $20? Give your answer as a whole number of packs.";
$QType[62] = 1;
$QAnswers[62] = "13";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "";
$suffix[62] = "";
$Soln[62]= "1 pack = $1.50<br>2 packs = $3.00<br>4 packs = $6.00<br>8 packs = $12.00<br> 8 + 4 = 12 packs = $18.00<br>13 packs = $19.50<br>The teacher can buy <b>13</b> packs.";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>1 hour and 18 minutes is equivalent to";
$QType[63] = 0;
$QAnswers[63] = "d";
$QOptions[63] = array("18 minutes","48 minutes","68 minutes","78 minutes");
$prefix[63] = "";
$suffix[63] = "";
$Soln[63] = "1 h + 18 min = 60 min + 18 min = 78 min, option <b>(d)</b>";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>220 thousand people voted in an election. 42 000 people voted for candidate A. What percentage of people voted for candidate A?";
$QType[64] = 0;
$QAnswers[64] = "b";
$QOptions[64] = array("17%","19%","21%","23%");
$prefix[64] = "";
$suffix[64] = "";
$Soln[64] = "Percentage = 42000 \\(\\div\\) 220000 \\(\\times\\) 100 = 4200 \\(\\div\\) 220 = 420 \\(\\div\\) 22 = 19%, option <b>(b)</b>";

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