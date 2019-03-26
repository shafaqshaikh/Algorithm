<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PLAN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="../css/template-style.css">
  <link rel="stylesheet" href="../css/responsee.css">
	<link rel="stylesheet" href="../css/components.css">
	<link rel="stylesheet" href="../css/icons.css">
  <script src="../js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function() {

        $("button").click(function(){

            var exerciselist = [];

            $.each($("input[name='exercise']:checked"), function(){

                exerciselist.push($(this).val());

            });

            alert("Exercises performed are: " + exerciselist.join(", "));

        });

    });

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
                        <a href="../index.html">FITNESS<br /><strong>HUB</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="login.php">Login</a>
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
 $data=[];
 $choice=[];
 $increment = 0;
 //$userid = $_SESSION['id'];
 if($_POST){
  $link=mysqli_connect('localhost','ansari','ansari','Quiz');
  $q_id = mysqli_query($link,"select Q_id from chem_ques");
  while($resqid = mysqli_fetch_array($q_id)){
    if(($temp_data = $_POST[$resqid['Q_id']]) != ''){
      array_push($data,$temp_data);
      $b = $resqid['Q_id'];
      $r_ch = mysqli_query($link,"select right_ch from chem_ques where Q_id = $b");
      $resch = mysqli_fetch_array($r_ch);
      array_push($choice,$resch['right_ch']);
    }
  }
  <form action="check.php">
  <div class="check">
    <input type="checkbox" name="exercise" >
	  <label for="V">Plank</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Aerobics</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Squats</label><br>
    <input type="checkbox" name="exercise">
	  <label for="V">Stair Climbing</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Pushup</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Jogging</label><br>
    <input type="checkbox" name="exercise">
	  <label for="V">Swimming</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Yoga</label><br>
    <input type="checkbox" name="exercise">
	  <label for="V">Wide legs Squats with Dumbbells</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Stationary Lunges  Dumbbells</label><br>
    <input type="checkbox" name="exercise" >
	  <label for="V">Dumbbell Lateral Raises</label><br>
    <button  type="button" ><b>Submit</b></button>
  </form>

  </div>
</body>
<div class="foot">
<footer>
	&copy;2018 All rights reserved - AFNS
</footer>
</div>
</html>
