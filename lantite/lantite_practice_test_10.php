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

$Q[0] = "Six groups of students each create posters. Each poster is part of a six-part sequence. The teacher wishes to display the posters side by side. The widths of the posers are given in the following table:
<br><br><table>
<tr><td>63 cm</td></tr><tr><td>58 cm</td></tr><tr><td>57 cm</td></tr><tr><td>62 cm</td></tr><tr><td>50 cm</td></tr><tr><td>60 cm</td></tr>
</table><br><br>
 What is the minimum width of wall space (in metres) that the teacher must allow for the posers?";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "3.5";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = " metres";
$Soln[0] = "width in cm = 63 + 58 + 57 + 62 + 50 + 60 = 350<br>
Width in metres = 350 \\(\\div\\) 100 = <b>3.5</b> m";

$Q[1] = "A box contains red, orange, yellow, and green cupcakes. If a cupcake is removed at random, the probability that it is green is \\(\\frac{2}{8}\\). The probabilies of drawing a red, orange, or yellow cupcake are all equal. If there are 10 red cupcakes in the box, how many green cupcakes are there?";
$QType[1] = 1;
$QAnswers[1] = "10";
$QOptions[1] = array("","","","");
$prefix[1] = "";
$suffix[1] = "";
$Soln[1] = "Probability of drawing red or orange or yellow = \\(\\frac{8}{8} - \\frac{2}{8} = \\frac{6}{8}\\)<br>Probability of drawing red = probability of drawing orange = probability of drawing yellow = \\(\\frac{6}{8} \\div 3 = \\frac{2}{8}\\)<br>Thus there are the same number of red cupcakes as green cupcakes.<br>Number of green cupcakes = <b>10</b>";

$Q[2] = "A school’s fundraiser raised $18,642.45. This was $814 less than had been raised in the previous year. How much was raised in the previous year?";
$QType[2] = 1;
$QAnswers[2] = "19456.45";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "$";
$suffix[2] = "";
$Soln[2] = "Amount raised = $18642.45 + 814 = $<b>19456.45</b>";

$Q[3] = "A rectangle is twice as long as it is wide. The perimeter of the rectangle is 36 cm. What is the width of the rectangle?";
$QType[3] = 0;
$QAnswers[3] = "b"; 
$QOptions[3] = array("3 cm","6 cm","9 cm","12 cm");
$prefix[3] = "";
$suffix[3] = "";
$Soln[3] = "perimeter = 2 \\(\\times\\) (length + width) = 36 cm<br>
length + width = 36 \\(\\div\\) 2 cm = 18 cm<br>
Ratio of length : width = 2:1, so<br>
width = 18 \\(\\div\\) 3 = 6 cm, option <b>b</b>";

$Q[4] = "A teacher returning from a school trip to the USA still had US$240 in cash upon reaching Australia. If the exchange rate was AU$1 = US$0.75, how much money would the teacher receive in Australian dollars after exchanging the US money?";
$QType[4] = 1;
$QAnswers[4] = "320";
$QOptions[4] = array("","","","");
$prefix[4] = "AU$";
$suffix[4] = "";
$Soln[4] = "Money in Australian dollars = $240 \\(\\div\\) 0.75 = $<b>320</b>";

$Q[5] = "A student started her homework at 7:02 pm and finished at 8:49 pm. For how long did she study? Give your answer in hours, rounded to 2 decimal places.";
$QType[5] = 1;
$QAnswers[5] = "1.78";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " hours";
$Soln[5] = "Time studied = 8:49 - 7:02 = 1 hour and 47 minutes.<br>
47 minutes converted to hours = 47 \\(\\div\\) 60 = 0.783333<br>Total time in hours, rounded to 2 decimal places = <b>1.78</b> hours";

$Q[6] = "A home economics teacher bought 1.25 L of cream in order for her class to decorate eight cakes. If she had 290 mL cream left over, how many millilitres of cream were used on each cake?";
$QType[6] = 1;
$QAnswers[6] = "120";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "";
$suffix[6] = " mL";
$Soln[6] = "Amount of cream purchased in millilitres = 1.25 \\(\\times\\) 1000 = 1250 mL<br>
Amount of cream used on 8 cakes = 1250 - 290 = 960 mL<br>
Amount of cream used on each cake = 960 \\(\\div\\) 8 = <b>120</b> mL";

$Q[7] = "Chelle is sharing a house with three other people She pays $150 a week in rent. All housemates pay the same amount of rent. If a new housemate joins their house, and the rent is divided evenly amongst the housemates, how much rent does Chelle pay each week now?";
$QType[7] = 1;
$QAnswers[7] = "120";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "$";
$suffix[7] = "";
$Soln[7] = "Total weekly cost to rent the house = $150 \\(\\times\\) 4 = $600<br>
Cost per person for 5 people = $600 \\(\\div\\) 5 = $<b>120</b>";

$Q[8] = "The graph shows the proportion of student enrolled in government and non-government schools across Australia from 1998 to 2017.<br><br><img src='images/PracticeTest10a_2.jpg'><br><br>What year between 1998 and 2017 had the lowest proportion of students enrolled in Government schools?";
$QType[8] = 0;
$QAnswers[8] = "c"; 
$QOptions[8] = array("1998","2006","2014","2017");
$prefix[8] = "";
$suffix[8] = "";
$Soln[8] = "From the graph, 2014 (option <b>(c)</b>) had the lowest proportion of students enrolled in Government schools.";

$Q[9] = "The following graph shows the scaling between aggregate score and ATAR for the 2018 NSW HSC. The aggregate score is made up of the sum of the student's ten best scores. <br><br><img src='images/PracticeTest10a_1.jpg'><br><br> If a student achieves scores of 20 23 16 23 22 25 20 18 32 19 19 23, what ATAR (rounded to the nearest 10) do they recieve?";
$QType[9] = 1;
$QAnswers[9] = "60";
$QOptions[9] = array("0","0","0","0");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "Top 10 scores are 20 23 23 22 25 20 32 19 19 23. Aggregate = 226. From the graph, this gives an ATAR of <b>60</b>, rounded to the nearest 10.";

$Q[10] = "The following graph shows the scaling between aggregate score and ATAR for the 2018 NSW HSC. The aggregate score is made up of the sum of the student's ten best scores. <br><br><img src='images/PracticeTest10a_1.jpg'><br><br> If a student achieves an ATAR of 70, what is their average score for their ten best subjects?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("70","270","7","27");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10] = "From the graph, their aggregate score is about 270, so their average score is 270 \\(\\div\\) 10 = 27, option <b>d</b>.";

$Q[11] = "At a particular primary school, the middle session begins at 11:40 am. A year 6 class read books for 30 minutes, studied mathematics for 55 minutes, and exercised for 15 minutes. At what time did the session end? Give your answer in 24 hour time as a 4 digit number; for example, 4:20 am is written as 0420.";
$QType[11] = 1;
$QAnswers[11] = "1320";
$QOptions[11] = array("0","0","0","0");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "11:40 am + 30 min = 12:10 pm<br>12:10 pm + 55 minutes = 1:05 pm<br>1:05 pm + 15 min = 1:20 pm = session end time<br>Session end time in 24-hour time = <b>1320</b>";

$Q[12] = "A teacher is refilling her paint pots for her class’ next art project. Her yellow paint pot is half full and contains 600 mL of paint. How much paint does she need to add to make it \\(\\frac{2}{3}\\) full?";
$QType[12] = 1;
$QAnswers[12] = "200";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = " mL";
$Soln[12] = "Half full = 600 mL<br>
Full = 2 \\(\\times\\) 600 mL = 1200 mL<br>
\\(\\frac{2}{3}\\) full = \\(\\frac{2}{3} \\times \\) 1200 mL = 800 mL<br>
Amount of extra paint needed = 800 - 600 mL = <b>200</b> mL";

$Q[13] = "The following graph shows life expectancy in years for different continents.<br><br><img src='images/PracticeTest10b_1.jpg'><br><br>True/False: Everyone in Europe is expected to outlive everyone in Africa.";
$QType[13] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "b";
$QOptions[13] = array("True","False","N/A","N/A");
$prefix[13] = "";
$suffix[13] = "";
$Soln[13] = "False <b>(b)</b>: The top of the Africa whisker is higher than the bottom of the Europe whisker.";

$Q[14] = "The following graph shows life expectancy in years for different continents.<br><br><img src='images/PracticeTest10b_1.jpg'><br><br>From this graph which of the following can we identify for each continent?";
$QType[14] = 0;
$QAnswers[14] = "b";
$QOptions[14] = array("mean","median","mode","standard deviation");
$prefix[14] = "";
$suffix[14] = "";
$Soln[14] = "We can identify the median, option <b>(b)</b>";

$Q[15] = "The following graph shows life expectancy in years for different continents.<br><br><img src='images/PracticeTest10b_1.jpg'><br><br>Which continent contains the highest life expectancy?";
$QType[15] = 0;
$QAnswers[15] = "a";
$QOptions[15] = array("Asia","Europe","Americas","Oceania");
$prefix[15] = "";
$suffix[15] = "";
$Soln[15] = "Asia <b>(a)</b> contains the highest life expectancy because the top of its upper whisker is the highest.";

$Q[16] = "A sick child is required to take two doses of amoxicillin syrup suspension per day. The child weighs 20 kg. The dose required is 40 milligrams per kilogram of body weight per day. The suspension comes in a concentration of 400 milligrams of amoxycillin in 5 millilitres of syrup. Calculate the syrup dose size, in millilitres.";
$QType[16] = 1;
$QAnswers[16] = "5"; 
$QOptions[16] = array("0","0","0","0");
$prefix[16] = "";
$suffix[16] = " millilitres";
$Soln[16] = "Required daily dose for 20 kg child = 40 mg \\(\\times\\) 20 = 800 mg<br>
400 mg come in 5 mL of suspension, so<br>
Number of millilitres of suspension required per day = 800 mg \\(\\div\\) 400 mg \\(\\times\\) 5 mL = 10 mL<br>
Two doses are given per day so each dose is 10 mL \\(\\div\\) 2 = <b>5</b> mL";

$Q[17] = "A class have raised $420 for charity. The students want to divide the money between three charities; A, B, and C in the ratio 3:2:1. Which of the following formulae gives the amount of money to go to charity B?";
$QType[17] = 0;
$QAnswers[17] = "a";
$QOptions[17] = array("$420 \\(\\div\\) 6 \\(\\times\\) 2","$420 \\(\\div\\) 2","$420 \\(\\div\\) 5 \\(\\times\\) 2","$420 \\(\\times\\) 6 \\(\\div\\) 2");
$prefix[17] = "";
$suffix[17] = "";
$Soln[17] = "Number of parts the money is to be divided into = 3 + 2 + 1 = 6<br>
Amount of money in each part = $420 \\(\\div\\) 6<br>
Number of parts to go to Charity B = 2<br>
Money to go to Charity B = $420 \\(\\div\\) 6 \\(\\times\\) 2<br>This is option <b>(a)</b>";

$Q[18] = "Two hours are allowed to complete an exam. The exam contains 65 questions. On average, how many seconds can be spent on each question? Give your answer to the nearest whole number of seconds.";
$QType[18] = 1;
$QAnswers[18] = "111";
$QOptions[18] = array("0","0","0","0");
$prefix[18] = "";
$suffix[18] = " seconds";
$Soln[18] = "Number of minutes in 2 hours = 2 \\(\\times\\) 60 = 120<br>
Number of seconds in 2 hours = 120 \\(\\times\\) 60 = 7200<br>
Number of seconds per question = 7200 \\(\\div\\) 65 = 110.769<br>
Rounded to the nearest whole number of seconds, answer = <b>111</b> seconds.";

$Q[19] = "A teacher had a reward box that had 60 rewards inside at the start of the year. At the end of term 1, 25% of the rewards were used. How many rewards remained in the box?";
$QType[19] = 1;
$QAnswers[19] = "45";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = "";
$Soln[19] = "Percentage of rewards remaining = 100 - 25 = 75<br>
Number of rewards remaining = 75% \\(\\times\\) 60 = 75 \\(\\div\\) 100 \\(\\times\\) 60 = <b>45</b>";

$Q[20] = "A container is shaped like a rectangular prism. It is 5 cm long, 4 cm wide and 2 cm high. What is the volume of the container, in millilitres?";
$QType[20] = 1;
$QAnswers[20] = "40";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "";
$suffix[20] = " millilitres";
$Soln[20] = "Volume = 5 \\(\\times\\) 4 \\(\\times\\) 2 = 40 cm<sup>3</sup><br>
Since 1 mL = 1 cm<sup>3</sup>, volume in millilitres = <b>40</b>";

$Q[21] = "For the school walkathon, students are to walk 300 m east along Eucalyptus Avenue, then 350 m south along Wattle Street, then 100 m west along Angophora Avenue, then 350 m north along Tea Tree Street, and finally due west along Eucalyptus Avenue back to the start. A student is sponsored 20 c per 10 m. If she walks 5 laps, how much money does she raise? Give your answer in dollars.";
$QType[21] = 1;
$QAnswers[21] = "130"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "$";
$suffix[21] = "";
$Soln[21] = "Distance walked in 1 lap = 300 m East + 350 m South + 300 m West + 350 m North = 1300 m<br>
Distance walked in 5 laps = 5 \\(\\times\\) 1300 m = 6500 m
Number of 10 m walked = 6500 \\(\\div\\) 10 = 650<br>
Money raised per lap = 20 c = $0.20<br>
Total money raised = 650 \\(\\times\\) $0.20 = $130.00";

$Q[22] = "The Q1 tower on the Gold Coast is 323 metres tall. If a 1:1000 scale model is produced, what is the height of the model in centimetres?";
$QType[22] = 1;
$QAnswers[22] = "32.3";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = " cm";
$Soln[22] = "Height of Q1 in cm = 323 \\(\\times\\) 100 = 32300 cm<br>
Height of scale model = 32300 \\(\\div\\) 1000 = <b>32.3</b> cm";

$Q[23] = "A school holds a fete to raise money for charity. The money raised will be split between two charities, A and B in the ratio 3:2. The money raised by each year group is listed.<br><br>
<table>
<tr><th>Year</th><th>Amount Raised ($)</th></tr>
<tr><td>Kindergarten</td><td>20.40</td></tr>
<tr><td>Stage 1</td><td>51.20</td></tr>
<tr><td>Stage 2</td><td></td></tr>
<tr><td>Stage 3</td><td>45.80</td></tr>
</table><br><br>
If $68.18 was donated to Charity B, how much money was raised by the Stage 2 students?";
$QType[23] = 1;
$QAnswers[23] = "53.05";
$QOptions[23] = array("0","0","0","0");
$prefix[23] = "$";
$suffix[23] = "";
$Soln[23]= "";

$Q[24] = "The map below shows the township of Streaky Bay in South Australia.<br><br><img src='images/PracticeTest10b_2.jpg'><br><br>How long is the jetty?";
$QType[24] = 0;
$QAnswers[24] = "c";
$QOptions[24] = array("750 m","500 m","350 m","200 m");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "From the map the jetty is about 350 m, option <b>(c)</b>";

$Q[25] = "The map below shows the township of Streaky Bay in South Australia.<br><br><img src='images/PracticeTest10b_2.jpg'><br><br>What is the area of the part of the golf course to the south of Montgomerie Terrace and west of Crawford Terrace? ";
$QType[25] = 0;
$QAnswers[25] = "c";
$QOptions[25] = array("1 000 m<sup>2</sup>","10 000 m<sup>2</sup>","100 000 m<sup>2</sup>","1 000 000 m<sup>2</sup>");
$prefix[25] = "";
$suffix[25] = "";
$Soln[25] = "From the graph, the area is roughly rectangular, with sides of 250 m and 400 m. Area = 250 m \\(\\times\\) 400 m = 100 000 m<sup>2</sup>, option <b>(c)</b>";

$Q[26] = "In the morning session, a teacher takes the roll for 10 minutes, teaches English grammar for 45 minutes, conducts a spelling test for 10 minutes, and has the students practice their handwriting for 15 minutes. The session finished at 10:40 am. At what time did it begin?";
$QType[26] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "a";
$QOptions[26] = array("9:20 am","9:30 am","9:40 am","9:50 am");
$prefix[26] = "";
$suffix[26] = "";
$Soln[26] = "Length of session = 10 + 45 + 10 + 15 minutes = 80 minutes = 1 hour and 20 minutes.<br>
Session start time = 10:40 - 1 hour 20 min = 9:20 am, option <b>(a)</b>.";

$Q[27] = "A particular drug has the following instructions for medicating a child:<br><br> 
<div style='text-align: center'>Child’s Dose in mL = \\(\\frac{5}{8} \\times 10\\) mL \\(\\times\\) (Child’s weight in kg \\(\\div\\) 50)</div><br><br> Calculate the dose required for a child weighing 27 kg. Give your answer rounded to 1 decimal place.";
$QType[27] = 1;
$QAnswers[27] = "3.4";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "";
$suffix[27] = " mL";
$Soln[27] = "dose = 5 \\(\\div\\) 8 \\(\\times\\) 10 \\(\\times\\) (27 \\(\\div\\) 50) = 3.375 mL<br> Answer to 1 decimal place = <b>3.4</b> mL";

$Q[28] = "The table shows the percentage of year 7 students who achieved at or above the national minimum standard in the 2018 Naplan Tests.<br><br><img src='images/PracticeTest10c_1.jpg'><br><br>True/False: The percentage of students in NSW achieving at or above the national minimum standard increased from 2008 to 2018 in every domain.";
$QType[28] = 0;
$QAnswers[28] = "b";
$QOptions[28] = array("True","False","N/A","N/A");
$prefix[28] = "";
$suffix[28] = "";
$Soln[28] = "This is false, option <b>(b)</b> In NSW, the percentage has decreased in most domains.";

$Q[29] = "The table shows the percentage of year 7 students who achieved at or above the national minimum standard in the 2018 Naplan Tests.<br><br><img src='images/PracticeTest10c_1.jpg'><br><br>In Western Australia in 2017, the highest percentage of students reaching the minimum standard was achieved in:";
$QType[29] = 0;
$QAnswers[29] = "d"; 
$QOptions[29] = array("writing","spelling","grammar and punctuation","numeracy");
$prefix[29] = "";
$suffix[29] = "";
$Soln[29] = "From the table, the highest percentage was achieved in numeracy, option <b>(d)</b>";

$Q[30] = "The table shows the percentage of year 7 students who achieved at or above the national minimum standard in the 2018 Naplan Tests.<br><br><img src='images/PracticeTest10c_1.jpg'><br><br>The state with the lowest percentage of students attaining the minimum standard in writing in 2018 was:";
$QType[30] = 0;
$QAnswers[30] = "d";
$QOptions[30] = array("Victoria","Queensland","Tasmania","Northen Territory");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "From the table, the correct answer is Northern Territory, option <b>(d)</b>";

$Q[31] = "<br><br><img src='images/PracticeTest10c_2.jpg'><br><br>What is the length of this sheet of paper in centimetres? Give your answer to the nearest centimetre.";
$QType[31] = 1;
$QAnswers[31] = "20";
$QOptions[31] = array("0","0","0","0");
$prefix[31] = "";
$suffix[31] = " cm";
$Soln[31] = "start: 4 cm. End: 24 cm. Length = 24 - 4 = <b>20</b> cm";

$Q[32] = "In an election for school captain, Isaac received \\(\\frac{1}{3}\\) of the votes and Brodie received \\(\\frac{1}{4}\\) of the votes. The remaining 105 votes were received by Lawrence. What fraction of the votes did Lawrence receive?";
$QType[32] = 0;
$QAnswers[32] = "c";
$QOptions[32] = array("\\(\\frac{2}{7}\\)","\\(\\frac{5}{7}\\)","\\(\\frac{5}{12}\\)","\\(\\frac{11}{12}\\)");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "Fraction of votes received by Isaac and Brodie = \\(\\frac{1}{3}\\) + \\(\\frac{1}{4}\\) = \\(\\frac{4}{12} + \\frac{3}{12} = \\frac{7}{12}\\)<br>Fraction of votes received by Lawrence = \\(\\frac{12}{12} - \\frac{7}{12} = \\frac{5}{12}\\), option <b>(c)</b>";

$Q[33] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of people participating in formal or non-formal learning by age-groups in 2005, 2013 and 2016-17.<br><br><img src='images/PracticeTest10c_3.jpg'><br><br>True/False: In people aged 20-54, there was a higher percentage of people studying in 2005 than in 2016-17.";
$QType[33] = 0;
$QAnswers[33] = "a";
$QOptions[33] = array("True","False","N/A","N/A");
$prefix[33] = "";
$suffix[33] = "";
$Soln[33] = "From the graph, this is True (option <b>a</b>)";

$Q[34] = "The graph (sourced from the Australian Bureau of Statistics) shows the percentage of people participating in formal or non-formal learning by age-groups in 2005, 2013 and 2016-17.<br><br><img src='images/PracticeTest10c_3.jpg'><br><br>True/False: The proportion of 25-34 year olds who studied in 2005 was double the proportion of 55-64 year olds who studied in 2005.";
$QType[34] = 0;
$QAnswers[34] = "b"; 
$QOptions[34] = array("True","False","N/A","N/A");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "This is false (option <b>b</b>)";

$Q[35] = "The graphs show length and weight by age percentiles for Australian girls. <br><br><img src='images/PracticeTest10c_4.jpg'><br><br>What percentage of 17 month-old-girls are heavier than a girl weighing 11 kg?";
$QType[35] = 1;
$QAnswers[35] = "25";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = "%";
$Soln[35] = "For a 17-month-old girl, 11 kg is on the 75th percentile, so <b>25</b>% of 17-month-old girls are heavier.";

$Q[36] = "The graphs show length and weight by age percentiles for Australian girls. <br><br><img src='images/PracticeTest10c_4.jpg'><br><br>If a girl is exactly average in height and weight, what is her height if she weighs 9 kg?";
$QType[36] = 1;
$QAnswers[36] = "74";
$QOptions[36] = array("0","0","0","0");
$prefix[36] = "";
$suffix[36] = " cm";
$Soln[36]= "From the weight graph, the girl must be 12 months old. The 50th percentile height for a 12 month old girl is <b>74</b> cm.";

$Q[37] = "The graphs show length and weight by age percentiles for Australian girls. <br><br><img src='images/PracticeTest10c_4.jpg'><br><br>At what age would a 70 cm long girl be shorter than 75% of girls her age?";
$QType[37] = 1;
$QAnswers[37] = "10";
$QOptions[37] = array("0","0","0","0");
$prefix[37] = "";
$suffix[37] = " months";
$Soln[37] = "If the girl is shorter than 75% of girls then she is on the 25th percentile.<br> On the graph, we need to find where the 70 cm line intersects the 25th percentile line. <br>This occurs at age <b>10</b> months.";

$Q[38] = "A choral festival to be held in Switzerland costs 180 euros per participant. If the exchange rate is $1 Australian = 0.64 Euros, how much will it cost in Australian dollars for the 24 members of a South Australian school choir to participate in the festival?";
$QType[38] = 1;
$QAnswers[38] = "6750";
$QOptions[38] = array("0","0","0","0");
$prefix[38] = "$";
$suffix[38] = "";
$Soln[38] = "Cost per person in AU$ = 180 \\(\\div\\) 0.64 = $281.25<br>Cost for 24 participants = $281.25 \\(\\times\\) 24 = $<b>6750</b>";

$Q[39] = "A person earns $2400 per fortnight. They spend 30% of their earnings on rent, and $70 per week on food. What percentage of their earnings is spent on food? Give your answer to the nearest percent.";
$QType[39] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "6";
$QOptions[39] = array("0","0","0","0");
$prefix[39] = "";
$suffix[39] = " %";
$Soln[39] = "Weekly earnings = $2400 \\(\\div\\) 2 = $1200<br>
Percentage spent on food = 70 \\(\\div\\) 1200 \\(\\times\\) 100% = 5.83%<br>
Answer to the nearest percent = <b>6</b>%";

$Q[40] = "1.	A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br><br>
<table>
<tr><th></th><th>Task Value (%)</th><th>	Marked out of</th><th>	Student’s Mark</th></tr>
<tr><td>Task 1</td><td>25</td><td>	50</td><td>	43</td></tr>
<tr><td>Task 2</td><td>	25</td><td>	60</td><td>	38</td></tr>
<tr><td>Task 3</td><td>	50</td><td>	40</td><td>	35</td></tr>
</table><br><br>
What grade did the student receive for the course?";
$QType[40] = 0;
$QAnswers[40] = "c";
$QOptions[40] = array("51-64 Pass","65-74 Credit","75-84 distinction","85-100 high distinction");
$prefix[40] = "";
$suffix[40] = "";
$Soln[40] = "Overall grade = 43 \\(\\div\\) 50 \\(\\times\\) 25 + 38 \\(\\div\\) 60 \\(\\times\\) 25 + 35 \\(\\div\\) 40 \\(\\times\\) 50 = 81.083<br>This corresponds to a distinction, option <b>(c)</b>";

$Q[41] = "A school recommended its stage 4 pupils do 3 hours of homework each week. If a student completed all the recommended homework on weeknights (and none on weekends), what was the mean time the student spent on homework each weeknight evening? Give your answer in minutes, to the nearest minute.";
$QType[41] = 1;
$QAnswers[41] = "36";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "";
$suffix[41] = " minutes";
$Soln[41] = "3 hours = 3 \\(\\times\\) 60 minutes = 180 minutes<br> Average homework per day = 180 \\(\\div\\) 5 minutes = <b>36</b> minutes.";

$Q[42] = "A teacher started a trip with a full tank of petrol. The car had a fuel efficiency of 9.2 litres per 100 km. At the end of the trip the teacher paid $62.10 to refill the car. The fuel cost 135 c per litre. What was the distance of the trip in kilometres?";
$QType[42] = 1;
$QAnswers[42] = "500"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "";
$suffix[42] = " km";
$Soln[42] = "Cost of fuel in dollars = 135 \\(\\div\\) 100 = $1.35<br>Amount of fuel used = $62.10 \\(\\div\\) 1.35 = 46 L<br>Number of groups of 9.2 L of fuel used = 46 \\(\\div\\) 9.2 = 5<br>Distance travelled = 5 \\(\\times\\) 100 km = <b>500</b> km.";

$Q[43] = "The graph shows the number of Australian adults who holding tertiary educational qualifications, Certificate III or above. The data are separated by age and sex, and have been recorded from 2007 to 2017. <br><br><img src='images/PracticeTest10d_1.jpg'><br><br> True/False: More than 60 % of 25-34 year old female do not hold a certificate III or higher";
$QType[43] = 0;
$QAnswers[43] = "b";
$QOptions[43] = array("True","False","N/A","N/A");
$prefix[43] = "";
$suffix[43] = "";
$Soln[43] = "False <b>(b)</b>. More than 60% do hold a certificate III or above.";

$Q[44] = "The graph shows the number of Australian adults who holding tertiary educational qualifications, Certificate III or above. The data are separated by age and sex, and have been recorded from 2007 to 2017. <br><br><img src='images/PracticeTest10d_1.jpg'><br><br> True/False: A higher percentage of women aged 25-34 hold a certificate III or higher than do men aged 25-34.";
$QType[44] = 0;
$QAnswers[44] = "a";
$QOptions[44] = array("True","False","N/A","N/A");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "This is true <b>(a)</b>";

$Q[45] = "The graph shows the number of Australian adults who holding tertiary educational qualifications, Certificate III or above. The data are separated by age and sex, and have been recorded from 2007 to 2017. <br><br><img src='images/PracticeTest10d_1.jpg'><br><br>Which group of males has the lowest percentage of these qualifications?";
$QType[45] = 0;
$QAnswers[45] = "a";
$QOptions[45] = array("18-24","25-34","35+","Can’t be determined from these data");
$prefix[45] = "";
$suffix[45] = "";
$Soln[45] = "18-24 year old males, option <b>(a)</b> have the lowest proportion of these qualifications.";

$Q[46] = "On a school hiking trip, the students travel by bus for 80 minutes. They then hike for 190 minutes, have a lunch break for 45 minutes, hike again for another 50 minutes, then travel back by bus for another 80 minutes. How many hours did the trip take altogether? Give your answer rounded to 1 decimal place.";
$QType[46] = 1;
$QAnswers[46] = "7.4";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "";
$suffix[46] = " hours";
$Soln[46] = "Trip duration in minutes = 80 + 190 + 45 + 50 + 80 = 445 minutes<br>Trip duration in hours = 445 \\(\\div\\) 60 minutes = 7.41666... minutes<br>Answer to 1 decimal place = <b>7.4</b> hours.";

$Q[47] = "A box contains 6 blue balls, 6 red balls and 8 yellow balls. What is the probability of randomly drawing a blue ball?";
$QType[47] = 0;
$QAnswers[47] = "d"; 
$QOptions[47] = array("\\(\\frac{3}{5}\\)","\\(\\frac{3}{6}\\)","\\(\\frac{3}{8}\\)","\\(\\frac{3}{10}\\)");
$prefix[47] = "";
$suffix[47] = "";
$Soln[47] = "Probability = number of blue balls \\(\\div\\) total number of balls = \\(\\frac{6}{6+6+8} = \\frac{6}{20} = \\frac{3}{10}\\)";

$Q[48] = "A school band with 10 members charges $300 per member per year to cover costs. What would the cost per member be if there were 15 members?";
$QType[48] = 1;
$QAnswers[48] = "200";
$QOptions[48] = array("0","0","0","0");
$prefix[48] = "$";
$suffix[48] = "";
$Soln[48] = "Total cost to run the band = 10 \\(\\times\\) $300 = $3000<br>Cost per person with 15 people = $3000 \\(\\div\\) 15 = $<b>200</b>";

$Q[49] = "A teacher needs to have her class arrive at a theatre at 1:20 pm. The bus company have told her that their buses travel at an average speed of 50 km per hour. Google Maps says that the distance to the theatre from the school is 70 km. What is the latest time that the buses can leave the school? Give your answer in 24-hour time as a 4-digit number, for example: 0420 is 4:20 am.";
$QType[49] = 1;
$QAnswers[49] = "1156";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = "";
$Soln[49]= "Trip time = 70 \\(\\div\\) 50 = 1.4 hours = 1 hour + 0.4 \\(\\times\\) 60 minutes = 1 hour 24 minutes<br>Latest departure time = 1:20 pm - 1 hour 24 minutes = 12:20 pm - 24 minutes = 12:00 pm - 4 minutes = 11:56 am<br>Answer in 24-hour time = <b>1156</b>";

$Q[50] = "A teacher gave her 25 students a class test, that was marked out of 50. The following graph shows the cumulative frequency distribution of test marks. <br><br><img src='images/PracticeTest10d_2.jpg'><br><br> What percentage of students scored above 40/50 in the test?";
$QType[50] = 1;
$QAnswers[50] = "12";
$QOptions[50] = array("0","0","0","0");
$prefix[50] = "";
$suffix[50] = " %";
$Soln[50] = "40/50 = 80%<br>From the graph, 3 out of 25 students scored above 80%<br>This corresponds to 3 \\(\\div\\) 25 \\(\\times\\) 100% = <b>12</b>%";

$Q[51] = "A teacher is escorting a group of students from Katherine to Darwin. The teacher knows that the bus has an average speed of 100 km/h. She also knows that the trip takes 3 hours and 15 minutes. Using these data, how far is it from Katherine to Darwin?";
$QType[51] = 1;
$QAnswers[51] = "325";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "";
$suffix[51] = " km";
$Soln[51] = "Time taken = 3 hours 15 minutes = 3 hours + 15 \\(\\div\\) 60 hours = 3.25 hours<br>Distance = speed \\(\\times\\) time = 100 \\(\\times\\) 3.25 = <b>325</b> km";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>What is 15% of 140?";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "21";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "";
$suffix[52] = "";
$Soln[52] = "10% of 140 = 14<br>5% of 140 = 7<br>15% of 140 = 14 + 7 = <b>21</b>";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>How many centimetres are equivalent to 0.04 kilometres?";
$QType[53] = 1;
$QAnswers[53] = "4000";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "";
$suffix[53] = " cm";
$Soln[53] = "0.04 km = 0.04 \\(\\times\\) 1000 m = 40 m = 40 \\(\\times\\) 100 cm = <b>4000</b> cm";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>Compute 18 – 2 \\(\\times\\) S when S = 2";
$QType[54] = 1;
$QAnswers[54] = "14";
$QOptions[54] = array("0","0","0","0");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "18 - 2 \\(\\times\\) S = 18 - 2 \\(\\times\\) 2 = 18 - 4 = <b>14</b>";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>How many minutes are there in 2.2 hours?";
$QType[55] = 1;
$QAnswers[55] = "132"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "";
$suffix[55] = " minutes";
$Soln[55] = "1 hour = 60 minutes<br>2 hours = 120 minutes<br>0.1 hour = 6 minutes<br>0.2 hour = 12 minutes<br>2.2 hours = 120 + 12 minutes = <b>132</b> minutes";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>In many parts of the United States it is expected that you leave a 10% tip when you pay for your meal. If a person buys a meal costing $25, how much money should the person pay for the meal, including the tip?";
$QType[56] = 1;
$QAnswers[56] = "27.50";
$QOptions[56] = array("0","0","0","0");
$prefix[56] = "$";
$suffix[56] = "";
$Soln[56] = "10% \\(\\times\\) $25 = $2.50<br>Total cost = $25 + 2.50 = $<b>27.50</b>";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>Calculate 748 multiplied by 0.2";
$QType[57] = 1;
$QAnswers[57] = "149.6";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "";
$suffix[57] = "";
$Soln[57] = "748 \\(\\times\\) 0.2 = 748 \\(\\times\\) 2 \\(\\div\\) 10 = 1496 \\(\\div\\) 10 = <b>149.6</b>";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>Find the area of a rectangle that is 7 m wide and 6 m long.";
$QType[58] = 1;
$QAnswers[58] = "42";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = "m<sup>2</sup>";
$Soln[58] = "Area = 7 \\(\\times\\) 6 = <b>42</b> m<sup>2</sup>";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>A student correctly divided 0.683 by a number and got 683 as her answer. What number did the student divide by?";
$QType[59] = 1;
$QAnswers[59] = "0.001";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = "";
$Soln[59] = "The decimal point has moved to the right 3 places, so Answer = <b>0.001</b>";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>If you purchase a book for $12.95, a set of whiteboard markers for $7.30 and three pens for $2.35 each, how much change should you receive if you pay  with a $50 note?";
$QType[60] = 1;
$QAnswers[60] = "22.70"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "$";
$suffix[60] = "";
$Soln[60] = "Total cost = $12.95 + 7.30 + 3 \\(\\times\\) 2.35 = $20.25 + 7.05 = 27.30<br>Change = $50 - 27.30 = $<b>22.70</b>";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>If a race begins at 2:14 pm and concludes 0.4 hours later, what time does it end? Give your answer in 24-hour time as a 4 digit number. (For example, 5:18 am = 0518)";
$QType[61] = 1;
$QAnswers[61] = "1438";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = "";
$Soln[61] = "1 hour = 60 minutes<br>0.1 hour = 6 minutes<br>0.4 hours = 24 minutes<br>2:14 pm + 24 minutes = 2:38 pm = <b>1438</b> hours";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>A book costs $14.35. If you pay $20, how much change will you get?";
$QType[62] = 1;
$QAnswers[62] = "5.65";
$QOptions[62] = array("0","0","0","0");
$prefix[62] = "$";
$suffix[62] = "";
$Soln[62]= "Change = $20 - $14.35 = $<b>5.65</b>";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>Which is the smallest number?";
$QType[63] = 0;
$QAnswers[63] = "b";
$QOptions[63] = array("\\(\\frac{7}{20}\\)","\\(\\frac{7}{25}\\)","\\(\\frac{3}{8}\\)","\\(\\frac{9}{14}\\)");
$prefix[63] = "";
$suffix[63] = "";
$Soln[63] = "\\(\\frac{7}{25}\\) is smaller than \\(\\frac{7}{20}\\)<br>\\(\\frac{3}{8}\\) = \\(\\frac{9}{24}\\), which is bigger than \\(\\frac{7}{25}\\)<br>\\(\\frac{9}{14}\\) is bigger than \\(\\frac{1}{2}\\), which is bigger than \\(\\frac{7}{25}\\)<br>  So the smallest fraction is \\(\\frac{7}{25}\\), which is option <b>(b)</b><br><br> If this does not convince you, you could convert each fraction into a decimal: <br>
\\(\\frac{7}{25}\\) = \\(\\frac{28}{100}\\)=0.28<br>
\\(\\frac{7}{20}\\) = \\(\\frac{35}{100}\\)=0.35<br>
\\(\\frac{3}{8}\\) = \\(\\frac{15}{40}\\) = \\(\\frac{75}{200}\\) = \\(\\frac{37.5}{100}\\) = 0.375<br>
\\(\\frac{9}{14}\\) needs to be done by long division: 9 \\(\\div\\) 14 = 0.6...";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>Calculate 2614 divided by 6. Give your answer rounded to two decimal places.";
$QType[64] = 1;
$QAnswers[64] = "435.67";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = "";
$Soln[64] = "Answer = <b>435.67</b>";

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