//contact.php
<?php
require_once('php/dbconn.php');
?>
<?php
if ($_POST) {
	$isbn = $_POST['email'];
	$title = $_POST['subject'];
	$author = $_POST['message'];
	
	$sql = "INSERT INTO services (email, subject, message)
VALUES ('$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>HEALTHY EATING AND EXCERCISE</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css"> 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
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
      <section>
         <div id="head">
            <div class="line">
              <h1>Health is a relationship between you and your body</h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6">
                     <h2>Health And Fitness</h2>
                     <address>
                        <p><i class="icon-home icon"></i> abcdgj 19, 841 02 hgghggh</p>
                        <p><i class="icon-globe_black icon"></i> India -Mumbai </p>
                        <p><i class="icon-mail icon"></i> info@visiondesign.com</p>
                     </address>
                     <br />
                     <h2>Social</h2>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">For more info</a></p>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
                  </div>
                  <div class="s-12 l-6">
                     <h2> contact form </h2>
                     <form class="customform" action="">
                        <div class="s-12 l-7"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                        <div class="s-12 l-7"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                        <div class="s-12"><textarea placeholder="Your massage" name="" rows="5"></textarea></div>
                        <div class="s-12 m-6 l-4"><button type="submit">Submit Button</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAP -->	
        
         <div id="fourth-block">
           <div class="line">
              <h1>
                <h1>The Effects of Fast Food on the Body :(</h1>
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h3>Heart Diseas or stroke </h3>
                     <p class="s-12 m-12 l-8 center">
                     </p>Elevated cholestrol and increse blood pressure are two of the top risk factors for heart diseas and stroke.
                  </div>
                  <div class="item">
                     <h3> High blood pressure</h3>
                     <p class="s-12 m-12 l-8 center">Fast food is typically sodium-heavy,which can elevated blood pressure or aggravate existing heart disorders,including congestive heart failure.
                     </p>
                  </div>
                  <div class="item">
                     <h3>Weight gain</h3>
                     <p class="s-12 m-12 l-8 center">Even though you amy think you're eating "healthy" you may still undestimate the number of calories you're consuming .This can lead to unintentional weight gain.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2019, Vision Design - graphic zoo
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
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