<?php
session_start();?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Healthy Eating and Exercise</title>
      <link rel="stylesheet" href="../css/components.css">
      <link rel="stylesheet" href="../css/icons.css">
      <link rel="stylesheet" href="../css/responsee.css">

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
                        <li><a href="../index.html">Home</a>
                        </li>
                        <li><a href="register.php">Sign Up</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="../index.html">FITNESS <br /><strong>HUB</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="../index.html">Logout</a>
                        </li>
                        <li><a href="../contact.html">Contact</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>

      <div>
          <div class="title">
            <h4 style="color:#000">Your BMI is: <?= $_SESSION['result']?></h4>

            <h4 style="color:#000">This means you are NORMAL people </h4>
         <h1 style="color:#000">Diet and Exercise for Normal people</h1>
         <form action="login.php">
         <button  type="submit" class="normalbtn btn-info1" name="login_btn"><b>Start your Fitness Plan</b></button>
       </form>
      </div>

         <fieldset style="width: 40%" class="normal1">
            <h3>Diet Plan</h3>

            <p class="cont">
               <h3><u> Early Morning (6:30 - 8:00 am):</u></h3>
Start your day with exercises. It will not only help you burn some calories, but you will also be able to stay active throughout the day, burning even more calories. After your workout, add a cup of tea or coffee made from low fat skimmed milk. You can have a couple of fibre-rich biscuits with it. Preferably, start your day with a small bowl of cereals.

<h3><u> Brunch (10:30 - 11:30 am): </u></h3>
Weight loss doesn't have to come from hunger. Instead, it is best to eat something healthy at quick intervals. Before you feel hungry for your lunch, treat yourself to a fresh fruit such as an apple or orange. Keep shuffling your fruit during the week so that you get all the minerals and vitamins during the week.

<h3><u> Lunch (1:00 - 2:00 p.m.):</u> </h3>
Eat a healthy but light lunch that is low in fat and calories. You can also drink a glass of water around 20 minutes before your lunch. It will reduce your hunger and keep you from overeating.

<h3><u> Evening (4:00 - 6:00 p.m.):</u></h3>
You can have a cup of tea or coffee along with healthy snacks. However, make sure you avoid sodas and sugary beverages that may appear tempting at this of the day.

<h3><u> Dinner (7:00 - 8:00 p.m.):</u></h3>
Drink a glass of water around 15 minutes before you intend to have your dinner. Now it's time for a light and healthy meal that is full of nutritional content. You can mention different low-calorie dishes for dinner on different days of the week.

<h3><u> Post Dinner (10:00 - 10:30 p.m.):</u></h3>
A couple of slices of a fresh fruit like apple or papaya. You can switch your fruits daily.
            </p>
         </fieldset>
      </div>

      <div>
         <fieldset style="width: 40%" class="normal2">
            <h3>Exercise</h3>

              <p class="cont">
                 <h3><u>Plank Exercise:</u></h3>
                 Plank exercise can be easily done at home. It requires you to maintain a difficult position for few seconds. One common plank is front plank which is held in position similar to the push up. Lay down on the ground so that you are positioned on left, rest on your elbow and keep your legs straight.  You can even try to lift one hand and rest the entire body on the other. 1 to 3 sets of this exercise with 10 to 15 repetitions must be performed.
                 <h3><u>Aerobics:</u></h3>
                  Aerobics mean low intensity exercises for long duration that expend calories and burn your fat. Aerobics and cardio are not the same exercises, as cardio works mainly to strengthen the heart muscle.

                  Aerobics is a fun way to lose weight. You can invite your partner or friend for aerobic dance. You can watch videos online and perform the same with some good music. Since aerobics takes toll of calories from entire body it is good exercise to lose weight.
                  <h3><u>Squats:</u></h3>
                  Squat is a wonderful weight loss exercise for men that can be easily done at home.

               You can start it by simply sitting and standing from a regular chair.

               Sit on chair with straight hands. Now bend down at your knees to come close to the floor. While bending down make sure that your back remains straight. Hold the posture for 30 seconds then come back to original position. Wait for a second and repeat. As you get comfortable, increase the number of repetitions.

               You can also try bodyweight squat. Stand with your feet width apart. Lower your body as far as you can by bending your knees. Take a pause when your thighs come parallel to the floor and slowly come back to original position.

               You can also go for jump squad. It requires you to jump once you rise from the squatting position.
            <h3><u>Stair Climbing:</u></h3>
            Use the staircase of your home for weight loss exercise. You can burn your calories by climbing upstairs and downstairs for eight to ten times a day. In addition to weight loss this is best exercise for legs. You can even invest in stair climber to do this exercise. You could increase the intensity by running up and down the steps for as long as you can. This could be a very good exercise to burn calories and lose weight.

            Losing weight requires commitment and dedication, and it is not something that you think will happen and does happen. You cannot give the excuse that you do not find time to hit the gym because you can achieve it all by staying at home.
          </p>




         </fieldset>
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
