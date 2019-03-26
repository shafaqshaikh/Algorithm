<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Healthy Eating and Exercise</title>
      <link rel="stylesheet" href="../css/components.css">
      <link rel="stylesheet" href="../css/icons.css">
      <link rel="stylesheet" href="../css/responsee.css">
      <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="../css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">
                    <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="signup.html">Sign Up</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="index.html">HEALTH AND <br /><strong>FITNESS</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="login.html">Login</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>
<?php

//This gets today's date
$date =time () ;

//This puts the day, month, and year in seperate variables
$day = date('d', $date) ;
$month = date('m', $date) ;
$year = date('Y', $date) ;

//Here we generate the first day of the month
$first_day = mktime(0,0,0,$month, 1, $year) ;

//This gets us the month name
$title = date('F', $first_day) ;

//Here we find out what day of the week the first day of the month falls on
$day_of_week = date('D', $first_day) ;

//Once we know what day of the week it falls on, we know how many blank days occure before it. If the first day of the week is a Sunday then it would be zero
switch($day_of_week){
case "Sun": $blank = 0; break;
case "Mon": $blank = 1; break;
case "Tue": $blank = 2; break;
case "Wed": $blank = 3; break;
case "Thu": $blank = 4; break;
case "Fri": $blank = 5; break;
case "Sat": $blank = 6; break;
}

//We then determine how many days are in the current month
$days_in_month = cal_days_in_month(0, $month, $year) ;

//Here we start building the table heads
echo "<table id='kalender'>";
echo "<tr><th id='head' colspan=7> $title $year ... <span>mai &raquo;</span> </th></tr>";
echo "<tr><th id='sun' width=42>Sø</th><th width=42>Ma</th><th width=42>Ti</th><th width=42>On</th><th width=42>To</th><th width=42>Fre</th><th width=42>Lø</th></tr>";

//This counts the days in the week, up to 7
$day_count = 1;

echo "<tr>";
//first we take care of those blank days
while ( $blank > 0 )
{
echo "<td></td>";
$blank = $blank-1;
$day_count++;
}

//sets the first day of the month to 1
$day_num = 1;

//count up the days, untill we've done all of them in the month
while ( $day_num <= $days_in_month )
{
echo "<td> $day_num </td>";
$day_num++;
$day_count++;

//Make sure we start a new row every week
if ($day_count > 7 && $day_num)
{
echo "</tr><tr>";
$day_count = 1;
}
}

//Finaly we finish out the table with some blank details if needed
while ( $day_count >1 && $day_count <=7 )
{
echo "<td> </td>";
$day_count++;
}
echo "</tr></table>";
?>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2019, AFNS
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by G2(Geek Goddess)</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var owl = $('#header-carousel');
            owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
           var owl = $('#news-carousel');
           owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
         });

      </script>
   </body>
</html>
