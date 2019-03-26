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
                        <li><a href="register.php">SignUp</a>
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

            <h4 style="color:#000">This means you are OBESE people </h4>

         <h1 style="color:#000">Diet and Exercise for Obese people</h1>


      </div>

         <fieldset style="width: 40%" class="normal1">
            <h3>Diet Plan</h3>
            <p class="cont">
               <h3><u> Monday:</u></h3>
Breakfast: Sambar with brown rice idli</br>
Lunch: Whole-grain roti with mixed-vegetable curry</br>
Dinner: Tofu curry with mixed vegetables and a fresh spinach salad</br>
<h3><u>Tuesday:</u></h3>
Breakfast: Chana dal pancakes with mixed vegetables and a glass of milk</br>
Lunch: Chickpea curry with brown rice</br>
Dinner: Khichdi with sprout salad</br>
<h3><u> Wednesday:</u> </h3>
Breakfast: Apple cinnamon porridge made with milk and topped with sliced  almonds</br>
Lunch: Whole-grain roti with tofu and mixed vegetables</br>
Dinner: Palak paneer with brown rice and vegetables</br>
<h3><u> Thursday:</u></h3>
Breakfast: Yogurt with sliced fruits and sunflower seeds</br>
Lunch: Whole-grain roti with vegetable subji</br>
Dinner: Chana masala with basmati rice and green salad</br>
<h3><u> Friday:</u></h3>
Breakfast: Vegetable dalia and a glass of milk</br>
Lunch: Vegetable sambar with brown rice</br>
Dinner: Tofu curry with potato and mixed vegetables</br>
<h3><u> Saturday:</u></h3>
Breakfast: Multigrain parathas with avocado and sliced papaya</br>
Lunch: Large salad with rajma curry and quinoa</br>
Dinner: Lentil pancakes with tofu tikka masala</br>

            </p>
         </fieldset>
      </div>

      <div>
         <fieldset style="width: 40%" class="normal2">
            <h3>Exercise</h3>

              <p class="cont">
                 <h3><u>Day 1:</u></h3>
                 Dumbbell Bench Press
                Incline Bench Press
                Cable Crossovers
                One Arm Dumbbell Rows
                V-bar pulldown
                Deadlifts
                 <h3><u>Day 2:</u></h3>
                  Dumbbell Lateral Raises
                  Arnold Dumbbell Presses
                  Cambered Bar Curls
                  Seated Dumbbell Curls
                  Seated Triceps Press
                  Triceps Pushdown
                  Wrist Curls
                  <h3><u>Day 3:</u></h3>
                  Leg Press
                  Leg Extensions
                  Hamstring Curls
                  Seated Calf Raises
                  Standing Calf Raises
            <h3><u>Cardio Activities Include:</u></h3>
            Walking
            Jogging
            Rowing
            Swimming
            Aerobics class
            Jumping Rope
          Anything else you can think of to keep you moving.

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
