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
      </script>
  </head>
  <body class="size-1140">
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
                      <a href="../index.html">HEALTH AND <br /><strong>FITNESS</strong></a>
                   </li>
                </ul>
                <div class="top-nav s-12 l-5">
                   <ul class="top-ul chevron">
                      <li><a href="../html.php">Logout</a>
                      </li>
                      <li><a href="contact.php">Contact</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </nav>
    </header>
    <main>
    <fieldset style="width: 60%" class="bmi">
        <h1>Body Mass Index Calculator</h1>
        <form  class="signup" action="bmi.php" method="post">
        <p>Enter your height: <input type="text" id="height" placeholder="In meters" name="height"/>

            <!--<select type="multiple" id="heightunits">
                <option value="metres" selected="selected">metres</option>
                <option value="inches">inches</option>
            </select>-->
        </p>
        <p>Enter your weight: <input type="text" id="weight" placeholder="In Kilograms" name="weight"/>
          <!--  <select type="multiple" id="weightunits">
                <option value="kg" selected="selected">kilograms</option>
                <option value="lb">pounds</option>
            </select>-->
        </p>
      <!--  <input type="submit" value="computeBMI" onclick="computeBMI();">-->
      <button  type="submit" class="btn btn-info1" name="bmi_btn"><b>Compute BMI</b></button>
    </form>
    <?php
    session_start();
    if(isset($_POST['bmi_btn'])){
      $height=$_POST['height'];
      $weight=$_POST['weight'];
      $result = $_SESSION['result'] = $weight/($height*$height);

      $remark = [];
      if($result < 18.5){
        $remark = "Underweight";
        header('location: login.php');
      }elseif($result>=18.5 && $result<=25){
        $remark = "Normal";
        header0("Refresh:3, url=login.php");

      }elseif($result>=25 && $result<=30){
        $remark = "Obese";
        header('location: obese.php');
      }else{
        $remark = "Overweight";
        header('location: overweight.php');
      }
    }
      ?>

        <h4>Your BMI is: <?= $result?></h4>

        <h4>This means you are: <?= $remark?></h4>
    </fieldset>
       </main>

       </body>

    </html>
