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

            <h4 style="color:#000">This means you are OVERWEIGHT people </h4>

         <h1 style="color:#000">Diet and Exercise for Overweight people</h1>


      </div>

         <fieldset style="width: 40%" class="normal1">
            <h3>Diet Plan</h3>
            <p class="cont">
               <h3><u> Ensure a Sufficient Intake of B Vitamins:</u></h3>
               If your goal is to lose weight, make sure you consume enough of B vitamins. Many B vitamins play an important role in converting dietary fat, protein and carbohydrates into energy. In addition, several of the B vitamins have additional benefits that can help some people lose weight. For example, vitamin B3 may help those whose excess weight is linked to insulin resistance, a condition in which the body does not respond properly to insulin produced by the pancreas. Vitamin B6, on the other hand, is necessary for the proper absorption of zinc, another important weight loss nutrient.
<h3><u> Be Sure to Get Enough Vitamin D to Reduce Fat Accumulation in Winter:</u></h3>
Vitamin D is a fat-soluble vitamin that is naturally present in a few foods such as egg yolks, fish, liver and certain fortified dairy products. However, most people meet their vitamin D needs through exposure to sunlight as UV radiation triggers the body to synthesize vitamin D.

A deficiency of vitamin D has been associated with increased fat accumulation and obesity. However, researchers have not been able to determine whether it is the low levels of vitamin D that cause weight gain or whether it is the excess fat that leads to lower blood concentrations of vitamin D. It has been hypothesized that a lack of vitamin D, associated with low levels of sunlight in winter, could in fact be the key trigger for the so-called winter response in humans. This winter response is characterized by increased fat accumulation, which was critical to the survival of our ancestors in cold temperatures.
<h3><u>Consume Catechins to Boost Fat Burning: </u> </h3>
In recent years, catechins—natural compounds that are present in green tea—have received a great deal of attention for their ability to promote weight loss. In one clinical trial, 132 overweight or obese adults were administered either a beverage containing approximately 625 milligrams catechins and 39 milligrams caffeine or a beverage containing the same amount of caffeine but no catechins. All subjects were requested to follow a similar diet in terms of caloric intake and to exercise at least three hours per week. During the 12 week trial period, both groups lost weight; however, weight loss was more pronounced in those who consumed the catechins. The effects of green tea catechins on body composition are believed to result from these substances' ability increase energy expenditure and fat oxidation.





<h3><u> Eat Plenty of Foods Rich in Vitamin C:</u></h3>
Research has shown a direct link between low blood levels of vitamin C and increased fat accumulation and obesity.However, it is not clear whether it is the low levels of vitamin C that cause weight gain or whether excess fat depletes the body of vitamin C. In any case, it makes sense to consume a diet rich in vitamin C if you want to lose weight: evidence suggests that higher levels of vitamin C help the body burn more fat during a workout. One study found that people with low blood concentrations of vitamin C burned 25 percent less fat during a 60-minute walking session on a treadmill than people with adequate amounts of vitamin C. Vitamin C is necessary for the production of carnitine, a compound that encourages the body to turn fat into fuel, rather than store it in the body, and to maintain energy levels.
<h3><u> Get Enough Calcium to Regulate Body Composition:</u></h3>
Calcium has for long been known for its role in supporting strong bones and teeth, but in recent years the scientific community has established that this important mineral has a much broader role. New evidence suggests that calcium plays an important role in energy metabolism and in the regulation of body composition and that it may help reduce body fat and maintain an ideal weight. A diet high in calcium has been associated with increased weight loss / a lower body mass index (BMI). A difference of 1 gram in daily calcium intake was associated with an average difference in body weight of 8 kilograms! Furthermore, people who consume medium to high amounts of calcium (more than 6 grams per day) have been shown to have a lower body fat percentage. Good sources of calcium include milk and other dairy products but also many green leafy vegetables and seafood. To get the most out of calcium's health benefits, combine calcium rich foods with foods high in vitamin D (vitamin D promotes the absorption of calcium from food in the intestines).
<h3><u>Eat Foods Rich in Zinc to Regulate Fat Storage and Appetite:</u></h3>
Zinc supplementation of zinc deficient subjects has been shown to increase the levels of circulating leptin. Leptin, a hormone discovered as recently as in 1994, plays a key role in regulating the body's energy expenditure, fat storage, and appetite. It directly communicates to the brain when you should feel full and stop eating. Insufficient leptin levels are believed to be the primary cause of food cravings, overeating, and obsession with food. Zinc, which requires vitamin B6 for proper absorption in the intestines, is found in a variety of foods, the richest dietary sources being oysters, red meat, and poultry
            </p>
         </fieldset>
      </div>

      <div>
         <fieldset style="width: 40%" class="normal2">
            <h3>Exercise</h3>

              <p class="cont">
                 <h3><u>Wide Leg Squats with Dumbbell:</u></h3>
                 This exercise targets your quadriceps, which give you the strength to get up and down from a chair with ease. If balance is an issue, forgo the dumbbell and put a chair (facing out) in front of you. Hold on to the back of the chair lightly for balance. Only go as far as your body will allow without pain
                 <h3><u>Dumbbell Lateral Raises:</u></h3>
                 houlders have a wide range of motion, which means they are more susceptible to injury. This exercise targets the muscles around the shoulder which aids in shoulder joint stability.
                  <h3><u>Stationary Lunges with Dumbbells:</u></h3>
                  This exercise does require balance, so for added stability put a chair on one side of your body, facing outward. Lightly hold the back of the chair with one hand and a dumbbell (or nothing at all) in the other. Switch sides after eight to 12 repetitions to complete one set.
            <h3><u>Seated Reverse Flys:</u></h3>
            While the demonstration shows this exercise on a stability ball, it can be done on a chair or standing instead. Only lean forward as far as feels comfortable. Even if you have to sit (or stand) taller, this exercise will still effectively target your upper back.
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
