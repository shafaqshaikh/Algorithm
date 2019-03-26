<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="../css/template-style.css">
  <link rel="stylesheet" href="../css/responsee.css">
	<link rel="stylesheet" href="../css/components.css">
	<link rel="stylesheet" href="../css/icons.css">
   <style type="text/css">
 			  .word{
 			    color:#fff;
 			    font-size: 1.2em;
 			    position: absolute;
 			    left:90px;
 			    top:10px;
					font-family: URW Chancery L, cursive ;
 			    background-size: 80px 64px;
 			    height: 70px;
 			    width: 220px;
 			  }
 			  .logo{
 			    background-image: url("../img/brain.png");
 			    background-position: left;
 			    background-repeat: no-repeat;
 			    display: block;
 			    background-size: 80px 64px;
 			    height: 70px;
 			    width: 90px;
 			    position: relative;
 			  }
 			  .layout h1{
 			    display: inline-block;
 			  }
 			  .nav{
 			    float: right;
 			    list-style: none;
 			    margin-top: 45px;
 			    right: 10px;
 			  }
 			  .nav li{
 			    display: inline-block;
 			  }
 			  .nav li a{
 			    color:white;
 			    text-decoration: none;
 			    padding: 5px 25px;
 			    font-size: 18px;
 			  }
 			  .nav li a:hover{
					background-color:linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
					color: #155079;
 			  }
					.signup{
						padding: 6px 120px;
					}
					.row{
						width: 500px;
					}
					.btn{
						padding: 8px 43px;
						border-radius: 19px;
					}
					.btn-info1{
						background-color: #6679ba;
						margin: 20px 0;
						border: 0;
						transition: all 0.7s;
						border: 1px solid #155079;
					}
				.btn-info1:hover{
					background-color: #fff;
					color: #155079;
				}
				.g{
					padding: 70px 0;
				}
				.h{
					margin: 15px 0;
					width:300px;
				}
				.block{
					background: linear-gradient(rgba(0,0,0,.7) 40px,rgba(0,0,0,.15));
				  border: 10px;
					min-width: 500;
					min-height: 400;
					left: 200px;
          top: 60px;
					border-radius: 30px
				}
				.foot{
					width: 100%;
					text-align: center;
					position: absolute;
						font-size: 20px;
						font-weight: 600;
						letter-spacing: 5px;
						margin-top: 50px;
				}
		 </style>
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
                    <a href="../index.html">FITNESS <br /><strong>HUB</strong></a>
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
session_start();
if(isset($_POST['login_btn'])){
			$u=$_SESSION['username'] = $_POST['username'];
			$p=$_SESSION['password'] = $_POST['pass'];
			$db=mysqli_connect("localhost","ansari","ansari","health");
			$check= mysqli_query($db,"select * from Users where u_pass='$p' and u_name='$u'");
			$r=mysqli_fetch_array($check);
			$_SESSION['id']=$r['u_id'];
			if(!empty(mysqli_num_rows($check)))
			{
				echo '<span style="font-size:1.30em; color:#155079; font-weight:bold;">you are logged in</span>';
					header('location:bmi.php');
			}
			else
			{
				echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">SORRY!!! you are not registered member.</span>';
			}
			 mysqli_close($db);
}
?>
<div class="container">
		<div class="col-md-6 text-center">
			<div class="g">
				<div class="row">
					<div class="col-md-12 block">
       <h3 class="head" >Login Here</h3>
				<form  class="signup" action="login.php" method="post">
						<div class="input-group h">
						<span class="input-group-addon"><i class="fa fa-user" area-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" placeholder="username" required>
						</div>
						<div class="input-group h">
						<span class="input-group-addon"><i class="fa fa-key" area-hidden="true"></i></span>
							<input type="password" class="form-control" name="pass" placeholder="password" required>
						</div>
					<button  type="submit" class="btn btn-info1" name="login_btn"><b>Log In</b></button>
				</form>
			</div>
			</div>
		</div>
</div>
</div>
<div class="foot">
<footer>
	&copy;2018 All rights reserved - AFNS
</footer>
</div>
</body>
</html>
