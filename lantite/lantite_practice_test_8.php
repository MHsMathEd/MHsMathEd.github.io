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

$Q[0] = "A teacher has 7.75 hours of material in a teaching unit. If lessons at the teacher’s school are 40 minutes long, how many lessons will be required to fully teach the unit? Give your answer as a whole number of lessons.";
$QType[0] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[0] = "12";
$QOptions[0] = array("0","0","0","0");
$prefix[0] = "";
$suffix[0] = "";
$Soln[0] = "7.75 hours = 7.75 \\(\\times\\) 60 minutes = 465 minutes<br>Number of lessons required = 465 \\(\\div\\) 40 = 11.625<br>It is necessary to round up to ensure that the material is completed, so the teacher needs <b>12</b> lessons.";

$Q[1] = "A school holds a fete to raise money for charity. The money raised will be split between two charities, A and B in the ratio 1:3. The money raised by each year group is listed.<br><br>
<table>
<tr><th>Year</th><th>Amount Raised ($)</th></tr>
<tr><td>Kindergarten</td><td>20.41</td></tr>
<tr><td>Year 1</td><td>27.02</td></tr>
<tr><td>Year 2</td><td>24.00</td></tr>
<tr><td>Year 3</td><td>24.84</td></tr>
<tr><td>Year 4</td><td>28.40</td></tr>
<tr><td>Year 5</td><td>21.95</td></tr>
<tr><td>Year 6</td><td>23.82</td></tr>
</table><br><br>
How much money will be donated to charity B? Round your answer to the nearest cent.";
$QType[1] = 1;
$QAnswers[1] = "127.83";
$QOptions[1] = array("0","0","0","0");
$prefix[1] = "$";
$suffix[1] = "";
$Soln[1] = "Total amount raised ($) = 20.41 + 27.02 + 24.00 + 24.84 + 28.40 + 21.95 + 23.82 = 170.44<br>Amount is to be split into 1 + 3 = 4 parts. Charity B gets 3 of these 4 parts<br>Amount for Charity B = 3 \\(\\div 4 \\times\\) $170.44 = $<b>127.83</b>";

$Q[2] = "The formula to convert between centimetres and inches is<br><br>
<span style='text-align:center'>c = 2.54 I</span>
<br><br>where I represents the length in inches and c represents the length in cm. How many centimetres is 48 inches? Give your answer to 1 decimal place.";
$QType[2] = 1;
$QAnswers[2] = "121.9";
$QOptions[2] = array("0","0","0","0");
$prefix[2] = "";
$suffix[2] = " cm";
$Soln[2] = "Number of cm = 2.54 \\(\\times\\) 48 = <b>121.9</b> cm";

$Q[3] = "A teacher catches the bus to and from school five days a week. A weekly bus ticket costs $32.00. A single (one-way) trip on the bus costs $3.75. How much does the teacher save each week by buying a weekly ticket rather than single trip tickets?";
$QType[3] = 1;
$QAnswers[3] = "5.50"; 
$QOptions[3] = array("0","0","0","0");
$prefix[3] = "$";
$suffix[3] = "";
$Soln[3] = "Number of single trips per week = 2 \\(\\times\\) 5 = 10<br>Cost of single trip tickets per week = 10 \\(\\times\\) $3.75 = $37.50<br>Weekly ticket saving = $37.50 - $32.00 = $<b>5.50</b>";

$Q[4] = "The population of Green Beach was given as 320 thousand, to the nearest thousand. Which could be the population of Green Beach?";
$QType[4] = 0;
$QAnswers[4] = "c";
$QOptions[4] = array("320 550","321 000","320 320","319 445");
$prefix[4] = "";
$suffix[4] = "";
$Soln[4] = "Option (a): 320 550 rounds up to 321 thousand. <br> Option (b): 321 000 rounds to 321 thousand.<br> Option (c): 320 320 rounds to 320 thousand.<br> Option (d): 319 445 rounds to 319 thousand.<br>The correct answer is option <b>(c)</b>";

$Q[5] = "The area of an agricultural school is 33854 m<sup>2</sup>. One hectare is equal to 10000 m<sup>2</sup>. What is the area of the school to the nearest hectare?";
$QType[5] = 1;
$QAnswers[5] = "3";
$QOptions[5] = array("0","0","0","0");
$prefix[5] = "";
$suffix[5] = " hectares";
$Soln[5] = "Area in hectares = 33854 \\(\\div\\) 10000 = 3.3854<br>Rounded to the nearest hectare, area = <b>3</b> hectares.";

$Q[6] = "One Australian dollar is equivalent to 1.05 New Zealand dollars. How many Australian dollars is $50 New Zealand dollars worth? Give your answer to the nearest cent.";
$QType[6] = 1;
$QAnswers[6] = "47.62";
$QOptions[6] = array("0","0","0","0");
$prefix[6] = "AU$";
$suffix[6] = "";
$Soln[6] = "1.05 NZ = 1 AU<br> 1 NZ = 1 \\(\\div\\) 1.05 AU<br>50 NZ = 50 \\(\\times 1 \\div \\) 1.05 AU = <b>47.62</b> AU";

$Q[7] = "A student has completed \\(\\frac{5}{8}\\) of her maths problem book. There are still 60 pages to go. How many pages are in the book?";
$QType[7] = 1;
$QAnswers[7] = "160";
$QOptions[7] = array("0","0","0","0");
$prefix[7] = "";
$suffix[7] = "";
$Soln[7] = "Fraction of book remaining = \\(\\frac{8}{8} - \\frac{5}{8} = \\frac{3}{8}\\). <br> \\(\\frac{3}{8}\\) of the book = 60 pages<br> Total number of pages = 60 \\(\\div 3 \\times 8\\) = <b>160</b> pages";

$Q[8] = "A teacher takes 2 hours to write a test. How long would it take 3 teachers, working at the same rate, to write 6 tests?";
$QType[8] = 1;
$QAnswers[8] = "4"; 
$QOptions[8] = array("0","0","0","0");
$prefix[8] = "";
$suffix[8] = " hours";
$Soln[8] = "1 teacher writes 1 test in 2 hours<br>If there are 6 tests and 3 teachers, each teacher needs to write 2 tests, which takes <b>4</b> hours.";

$Q[9] = "The map below is of the western NSW town of Brewarrina. <br><br><img src='images/PracticeTest8a_1.jpg'><br><br>Which set of directions will take you from the (closed) Brewarrina Station (near the bottom right hand corner of the map) to the supermarket (near the top left of the map, indicated by a purple shopping trolley)? ";
$QType[9] = 0;
$QAnswers[9] = "a";
$QOptions[9] = array("Go up Bokhara St to Wilson St, Turn left and go along Wilson Street until you reach the school. Turn right into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your right.","Go up Bokhara St to Wilson St, Turn right and go along Wilson Street until you reach the school. Turn right into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your right.","Go up Bokhara St to Wilson St, Turn left and go along Wilson Street until you reach the school. Turn left into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your left.","Go up Bokhara St to Wilson St, Turn right and go along Wilson Street until you reach the school. Turn left into Belmore Street and continue until you reach the highway, B76. Turn right. Continue straight ahead through two intersections. The supermarket will be on your left.");
$prefix[9] = "";
$suffix[9] = "";
$Soln[9] = "The correct set of directions is option <b>(a)</b>: Go up Bokhara St to Wilson St, Turn left and go along Wilson Street until you reach the school. Turn right into Belmore Street and continue until you reach the highway, B76. Turn left. Continue straight ahead through two intersections. The supermarket will be on your right.";

$Q[10] = "The map below is of the western NSW town of Brewarrina. <br><br><img src='images/PracticeTest8a_1.jpg'><br><br>What is the approximate area of Brewarrina Central School?";
$QType[10] = 0;
$QAnswers[10] = "d";
$QOptions[10] = array("2 000 m<sup>2</sup>","6 000 m<sup>2</sup>","600 000 m<sup>2</sup>","20 000 m<sup>2</sup>");
$prefix[10] = "";
$suffix[10] = "";
$Soln[10]= "Area is approximately 200 m \\(\\times\\) 100 m = 20 000 m<sup>2</sup>, which is option <b>(d)</b>";

$Q[11] = "What weight, in grams, is shown by the scale?<br><br><img src='images/PracticeTest8a_2.jpg'>";
$QType[11] = 0;
$QAnswers[11] = "d";
$QOptions[11] = array("2.3","5.1","51","2300");
$prefix[11] = "";
$suffix[11] = "";
$Soln[11] = "The scale reads 2.3 kg = 2300 g, which is option <b>(d)</b>";

$Q[12] = "There are three finalists in a school’s spelling quiz. The first student correctly answered 8 questions, which was 50% of the questions. How many questions were in the spelling quiz?";
$QType[12] = 1;
$QAnswers[12] = "16";
$QOptions[12] = array("0","0","0","0");
$prefix[12] = "";
$suffix[12] = "";
$Soln[12] = "50% of questions = 8 questions<br>100% of questions = 2 \\(\\times\\) 8 questions = <b>16</b> questions.";

$Q[13] = "A person earns $70304 a year. They pay $370 a week in rent, $780 a year on utilities (electricity and water), $150 a week in groceries and other expenses. Each week, how much money is left for recreation and saving?";
$QType[13] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[13] = "817";
$QOptions[13] = array("0","0","0","0");
$prefix[13] = "$";
$suffix[13] = "";
$Soln[13] = "Weekly income = $70304 \\(\\div\\) 52 = $1352<br>Weekly utility expense = $780 \\(\\div\\) 52 = $15<br>Total weekly expense = $370 + 15 + 150 = $535<br>Weekly spare money = $1352 - 535 = $<b>817</b>";

$Q[14] = "There are four runners in the school team in the 4 x 100 m relay. The average speed of each runner is given in the following table.<br><br>
<table>
<tr><th>Runner</th><th>Averages Speed</th></tr>
<tr><td>1</td><td>5 ms<sup>-1</sup></td></tr>
<tr><td>2</td><td>6 ms<sup>-1</sup></td></tr>
<tr><td>3</td><td>4 ms<sup>-1</sup></td></tr>
<tr><td>4</td><td>8 ms<sup>-1</sup></td></tr>
</table><br><br>How long will it take the team to complete the relay? Give your answer to the nearest hundredth of a second.";
$QType[14] = 1;
$QAnswers[14] = "74.17";
$QOptions[14] = array("0","0","0","0");
$prefix[14] = "";
$suffix[14] = " s";
$Soln[14] = "Runner 1 time = 100 m \\(\\div\\) 5 ms<sup>-1</sup> = 20 s<br>
Runner 2 time = 100 m \\(\\div\\) 6 ms<sup>-1</sup> = 16.667 s<br>
Runner 3 time = 100 m \\(\\div\\) 4 ms<sup>-1</sup> = 25 s<br>
Runner 4 time = 100 m \\(\\div\\) 8 ms<sup>-1</sup> = 12.5 s<br>
Total running time = 20 + 16.667 + 25 + 12.5 = <b>74.17</b> s";

$Q[15] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of Australians holding multiple jobs, and their median income.<br><br><img src='images/PracticeTest8b_1.jpg'><br><br>Approximately how many thousands of females held 3 concurrent jobs?";
$QType[15] = 0;
$QAnswers[15] = "c";
$QOptions[15] = array("50","100","150","200");
$prefix[15] = "";
$suffix[15] = "";
$Soln[15] = "About 150 000 females held 3 concurrent jobs, which is option <b>(c)</b>";

$Q[16] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of Australians holding multiple jobs, and their median income.<br><br><img src='images/PracticeTest8b_1.jpg'><br><br>What is the most precise statement that can be made about the income of males holding 2 concurrent jobs? ";
$QType[16] = 0;
$QAnswers[16] = "d"; 
$QOptions[16] = array("over $45000","between $45000 and $60000","between $45000 and $50000","between $45000 and $48000");
$prefix[16] = "";
$suffix[16] = "";
$Soln[16] = "The markings on the money scale are $3000 apart. So the median income of males holding 2 concurrent jobs is between $45000 and $48000, which is option <b>(d)</b>";

$Q[17] = "The graph (sourced from the Australian Bureau of Statistics) shows the number of Australians holding multiple jobs, and their median income.<br><br><img src='images/PracticeTest8b_1.jpg'><br><br>True/False: From this graph you can conclude that holding more concurrent jobs leads to a higher income.";
$QType[17] = 0;
$QAnswers[17] = "b";
$QOptions[17] = array("True","False","N/A","N/A");
$prefix[17] = "";
$suffix[17] = "";
$Soln[17] = "Holding more concurrent jobs appears to result in a lower median income, so the assertion is false <b>(b)</b>";

$Q[18] = "A box contains green balls and white balls. There are twice as many green balls as there are white balls. What is the probability of drawing a white ball?";
$QType[18] = 0;
$QAnswers[18] = "c";
$QOptions[18] = array("\\(\\frac{1}{4}\\)","\\(\\frac{1}{2}\\)","\\(\\frac{1}{3}\\)","\\(\\frac{2}{3}\\)");
$prefix[18] = "";
$suffix[18] = "";
$Soln[18] = "The ratio of green:white = 2:1, so \\(\\frac{1}{3}\\) of the balls are white, so the probability of drawing a white ball is also \\(\\frac{1}{3}\\), which is option <b>(c)</b>.";

$Q[19] = "It takes two students 30 minutes to collect and empty all of the recycling bins from the school’s classrooms. How many minutes would it take three students, working at the same rate, to complete the work?";
$QType[19] = 1;
$QAnswers[19] = "20";
$QOptions[19] = array("0","0","0","0");
$prefix[19] = "";
$suffix[19] = " minutes";
$Soln[19] = "2 students take 30 minutes, so<br>1 student would take 2 \\(\\times\\) 30 minutes = 60 minutes, so<br> 3 students would take 60 \\(\\div\\) 3 minutes = <b>20</b> minutes.";

$Q[20] = "A seminar started at 11:30 am and concluded at 2:15 pm. How many hours long was the seminar?";
$QType[20] = 1;
$QAnswers[20] = "2.75";
$QOptions[20] = array("0","0","0","0");
$prefix[20] = "";
$suffix[20] = " hours";
$Soln[20] = "11:30 am to 1:30 pm is 2 hours.<br>1:30 pm to 2:15 pm is 45 minutes = 45 \\(\\div\\) 60 hours = 0.75 hours.<br> Seminar length = 2 + 0.75 hours = <b>2.75</b> hours.";

$Q[21] = "A student ran a 4 km cross country course at an average speed of 15 kilometres per hour. The cutoff time for the regional team was 14 minutes and 38 seconds. How many seconds to slow was the student’s time?";
$QType[21] = 1;
$QAnswers[21] = "82"; 
$QOptions[21] = array("0","0","0","0");
$prefix[21] = "";
$suffix[21] = " seconds";
$Soln[21] = "Student's time in hours = 4 km \\(\\div\\) 15 km/hour<br> Student's time in minutes = 4 km \\(\\div\\) 15 km/hour \\(\\times\\) 60 minutes = 16 minutes.<br>Time over = 16 minutes - 14 minutes and 38 seconds = 1 minute and 22 seconds.<br>Time over in seconds = 60 + 22 seconds = <b>82</b> seconds.";

$Q[22] = "A science teacher needs 2 litres of a compound that is made up of two chemicals, A and B in the ratio 3:2. How many millilitres of chemical A are required to make up the compond?";
$QType[22] = 1;
$QAnswers[22] = "1200";
$QOptions[22] = array("0","0","0","0");
$prefix[22] = "";
$suffix[22] = " mL";
$Soln[22] = "The total 2 L = 2000 mL is made up of 2 parts in the ration 3:2. <br> This means that the whoe 2000 mL is divided into 3 + 2 = 5 parts. <br> 1 part = 2000 mL \\(\\div\\) 5 = 400 mL<br>Chemical A makes up 3 parts = 400 mL \\(\\times\\) 3 = <b>1200</b> mL";

$Q[23] = "The graph below contains boxplots showing the achievement of Year 3 students in reading by state and territory in 2018.<br><br><img src='images/PracticeTest8b_2.jpg'><br><br>True/False: More students sat the test in the NT than in any other state or territory.";
$QType[23] = 0;
$QAnswers[23] = "b";
$QOptions[23] = array("True","False","N/A","N/A");
$prefix[23] = "";
$suffix[23] = "";
$Soln[23]= "This is false (option <b>(b)</b>). This graph does not tell us anything about the number of students who sat the test.";

$Q[24] = "The graph below contains boxplots showing the achievement of Year 3 students in reading by state and territory in 2018.<br><br><img src='images/PracticeTest8b_2.jpg'><br><br>True/False: The median for the whole of Australia was in Band 5.";
$QType[24] = 0;
$QAnswers[24] = "a";
$QOptions[24] = array("True","False","N/A","N/A");
$prefix[24] = "";
$suffix[24] = "";
$Soln[24] = "From the graph, this is True <b>(a)</b>.";

$Q[25] = "The graph below contains boxplots showing the achievement of Year 3 students in reading by state and territory in 2018.<br><br><img src='images/PracticeTest8b_2.jpg'><br><br>True/False: All the Victorian students in the 25th-50th percentiles outperformed all the NT students in the 25th-50th percentiles.";
$QType[25] = 0;
$QAnswers[25] = "a";
$QOptions[25] = array("True","False","N/A","N/A");
$prefix[25] = "";
$suffix[25] = "";
$Soln[25] = "From the graph, this is True <b>(a)</b>.";

$Q[26] = "A box of identical exam papers weighs 8 kg. The papers are to be distributed to 5 classes. Each class will receive exactly the same number of papers. After the papers are delivered to the first class, the box weighs 6.5 kg. What will the box weigh after papers have been delivered to four of the classes?";
$QType[26] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[26] = "2";
$QOptions[26] = array("0","0","0","0");
$prefix[26] = "";
$suffix[26] = " kg";
$Soln[26] = "Weight of papers for 1 class = 8 - 6.5 kg = 1.5 kg<br>Weight of papers for 4 classes = 1.5 \\(\\times\\) 4 = 6 kg<br>Weight of box = total weight - weight of papers = 8 - 6 kg = <b>2</b> kg";

$Q[27] = "A teacher has a box of ice blocks for her class. The box contains four flavours: strawberry, orange, cola and lemonade, in equal amounts. If the teacher randomly distributes the ice blocks to each of her 28 students, how many students are expected to receive cola flavoured ice blocks?";
$QType[27] = 1;
$QAnswers[27] = "7";
$QOptions[27] = array("0","0","0","0");
$prefix[27] = "";
$suffix[27] = "";
$Soln[27] = "\\(\\frac{1}{4}\\) of the ice blocks are cola flavoured, so \\(\\frac{1}{4}\\) of the students should get cola ice blocks.<br>Number of students expected to get cola ice blocks = \\(\\frac{1}{4}\\times\\) 28 = <b>7</b>";

$Q[28] = "A teacher who is taking some students to the U.S. is planning an itinerary for the trip. He does not want to travel further than 200 km on any one day. However, distance measurements in the U.S. are given in miles, not kilometres. The teacher knows that 1 mile is approximately equal to 1.6 km. Using this approximation, what is the maximum distance in miles that the teacher is willing to travel in one day?";
$QType[28] = 1;
$QAnswers[28] = "125";
$QOptions[28] = array("0","0","0","0");
$prefix[28] = "";
$suffix[28] = " miles";
$Soln[28] = "1.6 km = 1 mile<br>1 km = 1 \\(\\div\\) 1.6 miles<br>200 km = 200 \\(\\times\\) 1 \\(\\div\\) 1.6 miles = 200 \\(\\div\\) 1.6 miles = <b>125</b> miles";

$Q[29] = "The graph shows the number of people living in each of Australia’s states and territories. At the time these data were collected, the population of Australia was 22 693 600. <br><br><img src='images/PracticeTest8c_1.jpg'><br><br>What percentage of the population was living in Queensland? Give your answer to the nearest whole percentage.";
$QType[29] = 1;
$QAnswers[29] = "20"; 
$QOptions[29] = array("0","0","0","0");
$prefix[29] = "";
$suffix[29] = " %";
$Soln[29] = "Percentage of population in Queensland = 4599400 \\(\\div\\) 22693600 \\(\\times\\) 100% = <b>20</b>%";

$Q[30] = "In an election for school captain, Isaac received \\(\\frac{1}{3}\\) of the votes and Brodie received \\(\\frac{1}{4}\\) of the votes. The remaining 105 votes were received by Lawrence. Who became captain?";
$QType[30] = 0;
$QAnswers[30] = "c";
$QOptions[30] = array("Brodie","Isaac","Lawrence","it is not possible to tell from this information");
$prefix[30] = "";
$suffix[30] = "";
$Soln[30] = "Fraction of votes obtained by Isaac and Brodie = \\(\\frac{1}{3} + \\frac{1}{4} = \\frac{4}{12} + \\frac{3}{12} = \\frac{7}{12}\\)<br>Fraction of votes obtained by Lawrence = \\(\\frac{12}{12} - \\frac{7}{12} = \\frac{5}{12}\\)<br> Isaac got \\(\\frac{4}{12}\\), Brodie got \\(\\frac{3}{12}\\), Lawrence got \\(\\frac{5}{12}\\) so Lawrence became school captain (option <b>(c)</b>).";

$Q[31] = "Coffee comes in the following size tins for the following prices.<br><br>
<table>
<tr><th>Tin Size</th><th>Price</th></tr>
<tr><td>300 g</td><td>$13.00</td></tr>
<tr><td>700 g</td><td>$18.79</td></tr>
<tr><td>0.5 kg</td><td>$20.00</td></tr>
<tr><td>1 kg</td><td>$54.95</td></tr>
</table><br><br>Which size tin represents the best value for money?";
$QType[31] = 0;
$QAnswers[31] = "b";
$QOptions[31] = array("300 g tin","700 g tin","0.5 kg tin","1 kg tin");
$prefix[31] = "";
$suffix[31] = "";
$Soln[31] = "<table>
<tr><th>Tin Size</th><th>Price</th><th>Price per 100 g</th></tr>
<tr><td>300 g</td><td>$13.00</td><td>$13.00 \\(\\div\\) 3 = $4.33</td></tr>
<tr><td>700 g</td><td>$18.79</td><td>$18.79 \\(\\div\\) 7 = $2.68</td></tr>
<tr><td>0.5 kg = 500 g</td><td>$20.00</td><td>$20.00 \\(\\div\\) 5 = $4.00</td></tr>
<tr><td>1 kg = 1000 g</td><td>$54.95</td><td>$54.95 \\(\\div\\) 10 = $5.50</td></tr>
</table><br><br>The 700 g tin represents the best value for money, option <b>(b)</b>";

$Q[32] = "Students in class 4G earned 78 merit awards in one year. This is 30% of the merit awards earned by year 4 students. How many merit awards were given out to year 4 students that year?";
$QType[32] = 1;
$QAnswers[32] = "260";
$QOptions[32] = array("0","0","0","0");
$prefix[32] = "";
$suffix[32] = "";
$Soln[32] = "30% = 78 awards<br>10% = 78 \\(\\div\\) 3 = 26 awards<br>Total number of awards = 100% = 26 \\(\\times\\) 10 = <b>260</b> awards";

$Q[33] = "A teacher needs a piece of cardboard with area 0.585 m<sup>2</sup>. It needs to have a length of 90 cm long. How wide does it need to be?";
$QType[33] = 1;
$QAnswers[33] = "65";
$QOptions[33] = array("0","0","0","0");
$prefix[33] = "";
$suffix[33] = " cm";
$Soln[33] = "Length in metres = 0.9 m.<br>Width in metres = Area \\(\\div\\) length = 0.585 \\(\\div\\) 0.9 = 0.65 m<br>Area in cm = 0.65 \\(\\times\\) 100 = <b>65</b> cm";

$Q[34] = "A bus taking students on an excursion to a theatre travelled 48 km at an average speed of 64 km/h. If the bus arrived at the theatre at 12:18 pm, at what time did it leave the school?";
$QType[34] = 0;
$QAnswers[34] = "a"; 
$QOptions[34] = array("11:33 am","11:48 am","12:03 pm","11:48 pm");
$prefix[34] = "";
$suffix[34] = "";
$Soln[34] = "Trip time in hours = 48 km \\(\\div\\) 64 km/h<br>Trip time in minutes = 48 km \\(\\div\\) 64 km/h \\(\\times\\) 60 = 45 minutes<br> Start time = 12:18 pm - 45 minutes = 11:33 am, option <b>(a)</b>";

$Q[35] = "A course involved three assessment tasks. The overall percentage value of the task, the mark that the task was out of, and the mark that one particular student received are given in the following table.<br><br>
<table>
<tr><th></th><th>Task Value (%)</th><th>Marked out of</th><th>Student's Mark</th></tr>
<tr><td>Task 1</td><td>20</td><td>20</td><td>16</td></tr>
<tr><td>Task 2</td><td>20</td><td>30</td><td>23</td></tr>
<tr><td>Task 3</td><td>60</td><td>20</td><td>14</td></tr>
</table><br><br>What was the student’s final mark as a percentage? Give your answer to the nearest whole percentage.";
$QType[35] = 1;
$QAnswers[35] = "73";
$QOptions[35] = array("0","0","0","0");
$prefix[35] = "";
$suffix[35] = " %";
$Soln[35] = "Final mark = 16 \\(\\div\\) 20 \\(\\times\\) 20 + 23 \\(\\div\\) 30 \\(\\times\\) 20 + 14 \\(\\div\\) 20 \\(\\times\\) 60 = <b>73</b>%";

$Q[36] = "A teacher brings 7 L of milk for a lesson. She divides her 30 students into groups of three. Each group is given a 1 litre measuring jug. The milk is divided evenly amongst the groups. What proportion of each jug is filled? Give your answer as a percentage.";
$QType[36] = 1;
$QAnswers[36] = "70";
$QOptions[36] = array("0","0","0","0");
$prefix[36] = "";
$suffix[36] = " %";
$Soln[36]= "Number of groups = 30 \\(\\div\\) 3 = 10<br>Amount of milk per group = 7 L \\(\\div\\) 10 = 0.7 L<br>Proportion of 1 L jug filled = \\(\\frac{0.7}{1}\\)<br>Percentage of 1L jug that is filled = 0.7 \\(\\div 1 \\times 100\\) % = <b>70</b>%";

$Q[37] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>True/False: A lower proportion of women were in full-time employment than men in every discipline.";
$QType[37] = 0;
$QAnswers[37] = "a";
$QOptions[37] = array("True","False","N/A","N/A");
$prefix[37] = "";
$suffix[37] = "";
$Soln[37] = "From the graph, this is <b>true (a)</b>";

$Q[38] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>The range of the proportions of men in full time employment was approximately";
$QType[38] = 0;
$QAnswers[38] = "a";
$QOptions[38] = array("30","40","60","70");
$prefix[38] = "";
$suffix[38] = "";
$Soln[38] = "Max proportion = 70 (building)<br>Min proportion = 40 (computer science)<br>range = max - min = 70 - 40 = 30, which is option <b>(a)</b>";

$Q[39] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>True/False: Approximately the same proportions of men and women were employed in Sport and Recreation.";
$QType[39] = 0; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[39] = "b";
$QOptions[39] = array("True","False","N/A","N/A");
$prefix[39] = "";
$suffix[39] = "";
$Soln[39] = "From the graph, proportion of men employed = 50%<br>From the graph, proportion of men employed = 40%<br>These are different so the statement is <b>false (b)</b>";

$Q[40] = "The graph below shows the proportion of students employed full time five years after studying a trade at high school. The results are separated by gender.  The graphs are sourced from the Australian Bureau of Statistics.<br><br><img src='images/PracticeTest8c_2.jpg'><br><br>True/False: Of those students who studied Food and hospitality a higher proportion of men were in full-time employment than women.";
$QType[40] = 0;
$QAnswers[40] = "a";
$QOptions[40] = array("True","False","N/A","N/A");
$prefix[40] = "";
$suffix[40] = "";
$Soln[40] = "From the graph this is true <b>(a)</b>: men: about 55%, women: about 45%";

$Q[41] = "A teacher is taking a group of students to Fiji for a football tournament. The trip is to be for 8 days and 8 nights. He budgets the following per person amounts for the trip:<table>
<tr><th>Expense</th><th>Cost in Fijian Dollars</th></tr>
<tr><td>Food</td><td>25 per day</td></tr>
<tr><td>Accommodation</td><td>53 per night</td></tr>
<tr><td>Sightseeing</td><td>100 in total</td></tr>
</table><br><br>If the exchange rate is 1 Australian dollar = 1.53 Fijian dollars, what is the total trip budget, per person, in Australian dollars? Round your answer to the nearest hundred dollars.";
$QType[41] = 1;
$QAnswers[41] = "500";
$QOptions[41] = array("0","0","0","0");
$prefix[41] = "$";
$suffix[41] = "";
$Soln[41] = "Total cost in Fijian dollars = $25 \\(\\times 8 + 53 \\times 8 + 100\\) = $724<br>Cost in Australian dollars = $724 \\(\\div\\) 1.53 = 473.2<br>Rounded to the nearest hundred dollars, cost = $<b>500</b>";

$Q[42] = "A school class travelling by bus to Moree has gone one fifth of the way when they notice a sign indicating that Moree is 200 km away. How far is the entire trip? ";
$QType[42] = 1;
$QAnswers[42] = "250"; 
$QOptions[42] = array("0","0","0","0");
$prefix[42] = "";
$suffix[42] = " km";
$Soln[42] = "Proportion of trip remaining = \\(\\frac{5}{5} - \\frac{1}{5} = \\frac{4}{5}\\)<br>200 km = \\(\\frac{4}{5}\\) of the distance. <br>Total distance = 200 km \\(\\div 4 \\times 5\\) = <b>250</b> km ";

$Q[43] = "For a class party, a teacher buys a 2 litre bottle of cordial concentrate that says to mix 1 part cordial to 4 parts water. If the teacher wants to make up 10 litres of drink, how much concentrate needs to be used? ";
$QType[43] = 1;
$QAnswers[43] = "2";
$QOptions[43] = array("0","0","0","0");
$prefix[43] = "";
$suffix[43] = " L";
$Soln[43] = "Ratio concentrate: water = 1:4, so the total mix is made up of 1 + 4 = 5 parts<br>Volume of each part = 10 L \\(\\div\\) 5 = 2 L<br>Concentrate makes up 1 of the 5 parts in the drink, so concentrate required = <b>2</b> L.";

$Q[44] = "A bag holds black, white and green marbles. If one marble is randomly chosen from the bag, the probability that it is black is \\(\\frac{3}{5}\\). The probability that it is white is equal to the probability that it is green. What is the probability of randomly drawing a white marble? Give your answer as a decimal.";
$QType[44] = 1;
$QAnswers[44] = "0.2";
$QOptions[44] = array("0","0","0","0");
$prefix[44] = "";
$suffix[44] = "";
$Soln[44] = "Probability of white or green = 1 - \\(\\frac{3}{5}\\) = \\(\\frac{2}{5}\\). Probability of white = \\(\\frac{1}{2} \\times \\frac{2}{5} = \\frac{1}{5}\\)<br>Probabilty as a decimal = 1 \\(\\div\\) 5 = <b>0.2</b>";

$Q[45] = "There are 150 students in year 12. You are required to produce a 10-page book for each student in year 12. Each book will contain 10 printed pages, which will be placed in a folder. The costs are shown below.<br<br>
<table>
<tr><td>500 sheets of paper</td><td>$8.00</td></tr>
<tr><td>In-house printing</td><td>5c per page</td></tr>
<tr><td>Folder</td><td>$1 each</td></tr>
</table><br><br>How much will it cost to produce the books? Give your answer to the nearest dollar.";
$QType[45] = 1;
$QAnswers[45] = "249";
$QOptions[45] = array("0","0","0","0");
$prefix[45] = "$";
$suffix[45] = "";
$Soln[45] = "Number of pages needed = 150 \\(\\times\\) 10 = 1500<br>Number of reams of paper = 1500 \\(\\div\\) 500 = 3<br>Paper cost = 3 \\(\\times\\) $8.00 = $24.00<br>Per page printing cost = 5 c = $0.05<br>  Printing cost = $0.05 \\(\\times\\) 1500 = $75<br>Folder costs = $1 \\(\\times\\) 150 = $150<br>Total cost = $24.00 + $75.00 + $150 = $<b>249.00</b>";

$Q[46] = "There are two finalists in a school’s trivia quiz. Of the 50 questions, 20 were not answered. Student B answered 20 questions. How many questions did student A answer?";
$QType[46] = 1;
$QAnswers[46] = "10";
$QOptions[46] = array("0","0","0","0");
$prefix[46] = "";
$suffix[46] = "";
$Soln[46] = "Number answered by student A = 50 - 20 - 20 = <b>10</b>";

$Q[47] = "A teacher was taking a group of students for a bushwalk during school time. The students told the teacher that they needed to be back at school by 1420 hours for their PDHPE lesson. The teacher checked the current time, which was 1:05 pm. How many minutes did the group have for the bushwalk?";
$QType[47] = 1;
$QAnswers[47] = "75"; 
$QOptions[47] = array("0","0","0","0");
$prefix[47] = "";
$suffix[47] = " minutes";
$Soln[47] = "Time of return in 12 hour time = 2:@0 pm<br> Time allowed for walk = 2:20 pm - 1:05 pm = 1 hour and 15 minutes = <b>75</b> minutes";

$Q[48] = "The English and mathematics test scores were collected and plotted for 10 students.<br><br><img src='images/PracticeTest8d_1.jpg'><br><br>What percentage of students scored less than 75% in the mathematics test, and more than 75% in the English test?";
$QType[48] = 1;
$QAnswers[48] = "20";
$QOptions[48] = array("0","0","0","0");
$prefix[48] = "";
$suffix[48] = " %";
$Soln[48] = "2 students out of 10 achieved this = <b>20</b>%";

$Q[49] = "A student finds that if he walks home from school he gets home at 4:07 pm. However, if he runs, he gets home at 3:48 pm. How much time does he save by running?";
$QType[49] = 1;
$QAnswers[49] = "19";
$QOptions[49] = array("0","0","0","0");
$prefix[49] = "";
$suffix[49] = " minutes";
$Soln[49]= "Time saved = 4:07 pm - 3:48 pm = <b>19</b> minutes";

$Q[50] = "A teacher wishes to order 30 copies of a new textbook. He has found four suppliers for the book. Which supplier offers the cheapest price?<br><br>
<table>
<tr><th>Supplier</th><th>Cost per book</th><th>Delivery Cost</th></tr>
<tr><td>A</td><td>$72</td><td>$150</td></tr>
<tr><td>B</td><td>$68</td><td>$180</td></tr>
<tr><td>C</td><td>$83</td><td>$30</td></tr>
<tr><td>D</td><td>$65</td><td>$200</td></tr>
</table>";
$QType[50] = 0;
$QAnswers[50] = "d";
$QOptions[50] = array("A","B","C","D");
$prefix[50] = "";
$suffix[50] = "";
$Soln[50] = "<table>
<tr><th>Supplier</th><th>Cost per book</th><th>Delivery Cost</th><th>Total Cost for 30 Books ($)</th></tr>
<tr><td>A</td><td>$72</td><td>$150</td><td>\\(30 \\times 72 + 150 = 2310\\)</td></tr>
<tr><td>B</td><td>$68</td><td>$180</td><td>\\(30 \\times 68 + 180 = 2220\\)</td></tr>
<tr><td>C</td><td>$83</td><td>$30</td><td>\\(30 \\times 83 + 30 = 2520\\)</td></tr>
<tr><td>D</td><td>$65</td><td>$200</td><td>\\(30 \\times 65 + 200 = 2150\\)</td></tr>
</table><br>
The cheapest option is supplier <b>D</b>";

$Q[51] = "Teachers at a high school want to engage a theatre company to perform to their students. They want to run three separate sessions, one for each Stage. Each session runs for 80 minutes. If the theatre company charge $200 per hour for their time, what will be the total cost for the school to engage the theatre company?";
$QType[51] = 1;
$QAnswers[51] = "800";
$QOptions[51] = array("0","0","0","0");
$prefix[51] = "$";
$suffix[51] = "";
$Soln[51] = "Time for 3 sessions = 3 \\(\\times\\) 80 = 240 minutes<br>
Time for 3 sessions in hours = 240 \\(\\div 60\\) = 4 hours<br>Total cost = 4 \\(\\times\\) $200 = $<b>800</b>";

$Q[52] = "<b>NON-CALCULATOR</b><br><br>Find 25% of $16.40";
$QType[52] = 1; /* 0 means multiple choice and 1 means short answer. */
$QAnswers[52] = "4.10";
$QOptions[52] = array("0","0","0","0");
$prefix[52] = "$";
$suffix[52] = "";
$Soln[52] = "50% = $8.20<br>25% = $<b>4.10</b>";

$Q[53] = "<b>NON-CALCULATOR</b><br><br>A school was quoted $5000 plus 10% g.s.t. to re-pave the basketball courts. What was the total cost for the work, including g.s.t.?";
$QType[53] = 1;
$QAnswers[53] = "5500";
$QOptions[53] = array("0","0","0","0");
$prefix[53] = "$";
$suffix[53] = "";
$Soln[53] = "10% \\(\\times\\) 5000 = 500<br>Total cost = $5000 + $500 = $<b>5500</b>";

$Q[54] = "<b>NON-CALCULATOR</b><br><br>Which is the smallest number?";
$QType[54] = 0;
$QAnswers[54] = "b";
$QOptions[54] = array("0.100","0.0990","0.2","0.10");
$prefix[54] = "";
$suffix[54] = "";
$Soln[54] = "0.0990, option <b>b</b> is the smallest number (it is the only number to have a 0 in the tenths column)";

$Q[55] = "<b>NON-CALCULATOR</b><br><br>Jozefine bought three samosas for $2.40 each and a naan for $3.00. How much money did she spend altogether?";
$QType[55] = 1;
$QAnswers[55] = "10.20"; 
$QOptions[55] = array("0","0","0","0");
$prefix[55] = "$";
$suffix[55] = "";
$Soln[55] = "Total cost = 2.40 + 2.40 + 2.40 + 3.00 = $<b>10.20</b>";

$Q[56] = "<b>NON-CALCULATOR</b><br><br>A child was 1.5 m tall. One year later she was 10% taller. What is her new height, in metres and centimetres?";
$QType[56] = 1;
$QAnswers[56] = "65";
$QOptions[56] = array("0","0","0","0");
$prefix[56] = "1 metre and ";
$suffix[56] = " cm";
$Soln[56] = "10% \\(\\times\\) 1.5 m = 0.15 m<br>New height = 1.5 + 0.15 = 1.65 m = 1 m <b>65</b> cm";

$Q[57] = "<b>NON-CALCULATOR</b><br><br>Write 743 cents in dollars.";
$QType[57] = 1;
$QAnswers[57] = "7.43";
$QOptions[57] = array("0","0","0","0");
$prefix[57] = "$";
$suffix[57] = "";
$Soln[57] = "743 c = $<b>7.43</b>";

$Q[58] = "<b>NON-CALCULATOR</b><br><br>16 kilograms is equivalent to how many tonnes?";
$QType[58] = 1;
$QAnswers[58] = "0.016";
$QOptions[58] = array("0","0","0","0");
$prefix[58] = "";
$suffix[58] = " t";
$Soln[58] = "16 kg = 16 \\(\\div\\) 1000 t = <b>0.016</b> t";

$Q[59] = "<b>NON-CALCULATOR</b><br><br>What is 668 cm expressed in metres, and rounded to the nearest metre?";
$QType[59] = 1;
$QAnswers[59] = "7";
$QOptions[59] = array("0","0","0","0");
$prefix[59] = "";
$suffix[59] = " m";
$Soln[59] = "668 cm = 6.68 m. <br>Rounded to the nearest metre, 6.68 m becomes <b>7</b> m";

$Q[60] = "<b>NON-CALCULATOR</b><br><br>Lucrecia bought a magazine for $12.95 and a pack of lollies for $2.45. How much change should she receive if she pays with a $20 note?";
$QType[60] = 1;
$QAnswers[60] = "4.60"; 
$QOptions[60] = array("0","0","0","0");
$prefix[60] = "$";
$suffix[60] = "";
$Soln[60] = "12.95 + 2.45 = 15.40<br>20.00 - 15.40 = 4.60<br>Change = $<b>4.60</b>";

$Q[61] = "<b>NON-CALCULATOR</b><br><br>James ran 3 km at an average speed of 12 km/h. How many hours did the run take him?";
$QType[61] = 1;
$QAnswers[61] = "0.25";
$QOptions[61] = array("0","0","0","0");
$prefix[61] = "";
$suffix[61] = " hours";
$Soln[61] = "time in hours = 3 km \\(\\div\\) 12 km/h = 0.25 hours";

$Q[62] = "<b>NON-CALCULATOR</b><br><br>There are 1280 students enrolled in a school. 85 of them are studying advanced mathematics. What percentage of the school students are studying advanced mathematics?";
$QType[62] = 0;
$QAnswers[62] = "b";
$QOptions[62] = array("5.5%","6.6%","7.7%","8,8%");
$prefix[62] = "";
$suffix[62] = "";
$Soln[62]= "You can use long division, or you can do the following:<br>
85 \\(\\div\\) 1280 \\(\\times\\) 100% = 8500 \\(\\div\\) 1280 = 850 \\(\\div\\) 128<br> 
Now write out the 128 times table: <br>
1x = 128, 2x = 256, 4x = 512, 6x = 768, 7x = 890<br>So the answer is a bit less than 7%. Choose 6.6%, option <b>b</b>.";

$Q[63] = "<b>NON-CALCULATOR</b><br><br>If a crate with 100 tubs of yoghurt weighs 25 kg, what is the weight of each tub of yoghurt?";
$QType[63] = 1;
$QAnswers[63] = "0.25";
$QOptions[63] = array("0","0","0","0");
$prefix[63] = "";
$suffix[63] = " kg";
$Soln[63] = "25 \\(\\div\\) 100 = <b>0.25</b> kg";

$Q[64] = "<b>NON-CALCULATOR</b><br><br>Calculate 23 \\(\\times\\)  0.1";
$QType[64] = 1;
$QAnswers[64] = "2.3";
$QOptions[64] = array("0","0","0","0");
$prefix[64] = "";
$suffix[64] = "";
$Soln[64] = "23 \\(\\times\\)  0.1 = <b>2.3</b>";

$_SESSION["Q"] = $Q;
$_SESSION["Qtype"] = $QType;
$_SESSION["QAnswers"] = $QAnswers;
$_SESSION["QOptions"] = $QOptions;
$_SESSION["prefix"] = $prefix;
$_SESSION["suffix"] = $suffix;
$_SESSION["Soln"] = $Soln;
$_SESSION["QNo"] = 0;
$_SESSION["QCorrect"] = array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
$_SESSION["YourAnswer"] = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

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