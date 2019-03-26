<!DOCTYPE html>
<html lang="en-US">
   <head>
      <script type="text/javascript" async id="bmi-calculator" data-type="verywell-tool" data-vertical="verywellfit" src="https://www.verywellfit.com/static/1.71.0/static/components/tools/calculators/iframe-embed/embed.min.js?id=bmi-calculator"></script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>HEALTH AND FITNESS</title>
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
      <script type="text/javascript">
      /*  function computeBMI()
        {
            //Obtain user inputs
            var height=Number(document.getElementById("height").value);
            var heightunits=document.getElementById("heightunits").value;
            var weight=Number(document.getElementById("weight").value);
            var weightunits=document.getElementById("weightunits").value;


            //Convert all units to metric
            if (heightunits=="inches") height/=39.3700787;
            if (weightunits=="lb") weight/=2.20462;

            //Perform calculation
            var BMI = Math.round(weight / Math.pow(height, 2) );

            //Display result of calculation
            document.getElementById("output").innerText=Math.round(BMI*100)/100;

            if (output<18.5)
            document.getElementById("comment").value = "Underweight";
            if (output>=18.5 && output<=25)
            document.getElementById("comment").value = "Normal";
            if (output>=25 && output<=30)
            document.getElementById("comment").value = "Obese";
            if (output>30)
            document.getElementById("comment").value = "Overweight";
            //document.getElementById("answer").value = output;
        }*/
    </script>
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
                        <a href="../index.html">FITNESS<br /><strong>HUB</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="../html.php">Logout</a>
                        </li>
                        <li><a href="../contact.html">Contact</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <?php
      session_start();
      if(isset($_POST['bmi_btn'])){
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $result = $_SESSION['result'] = $weight/($height*$height);

        $remark = [];
        if($result < 18.5){
          $remark = "Underweight";
          header("location:underweight.php");
        }elseif($result>=18.5 && $result<=25){
          $remark = "Normal";
          	header('location:normal.php');

        }elseif($result>25 && $result<=30){
          $remark = "Obese";
          header('location: obese.php');
        }else{
          $remark = "Overweight";
          header('location: overweight.php');
        }
      }
        ?>

<main>
<fieldset style="width: 60%" class="bmi">
    <h1>Body Mass Index Calculator</h1>
    <form  class="signup" action="bmi.php" method="post">
    <p class="p1">Enter your height: <input type="text" id="height" placeholder="In meters" name="height"/>

        <!--<select type="multiple" id="heightunits">
            <option value="metres" selected="selected">metres</option>
            <option value="inches">inches</option>
        </select>-->
    </p>
    <p class="p2">Enter your weight: <input type="text" id="weight" placeholder="In Kilograms" name="weight"/>
      <!--  <select type="multiple" id="weightunits">
            <option value="kg" selected="selected">kilograms</option>
            <option value="lb">pounds</option>
        </select>-->
    </p>
  <!--  <input type="submit" value="computeBMI" onclick="computeBMI();">-->
  <button  type="submit" class="btn btn-info1" name="bmi_btn"><b>Compute BMI</b></button>
</form>
</fieldset>
   </main>

   </body>

</html>
