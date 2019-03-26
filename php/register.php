<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="../css/template-style.css">
  <link rel="stylesheet" href="../css/responsee.css">

  <style>
			.body_main{
		    background: #fff;
		    color:#fff;
		   margin:0;
			 font-family: cursive;
		  }

			.signup{
				padding: 6px 120px;
			}
			.login{
					padding: 6px 120px;
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
			.h{
				margin: 15px 0;

			}
			.block1{
				background: linear-gradient(rgba(0,0,0,.7) 40px,rgba(0,0,0,.15));
			  border: 10px;
				min-height: 500;
				min-width: 800;
				left:290px;
        top: 100px;
				border-radius: 30px;
			}
			.foot{
		    width: 100%;
		    text-align: center;
		    position: absolute;
		    left: 0px;
		    font-size: 20px;
		    font-weight: 600;
		    letter-spacing: 5px;
				top:600px;
				padding-bottom: 30px;
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
			session_start();
			$db=mysqli_connect("localhost","ansari","ansari","health") or die(mysqli_error());
			if(isset($_POST['signup_btn']))
			{
				SignUp();
			}
			function SignUp()
			{
				$username = ($_POST['username']);
				$email = ($_POST['email']);
				$db=mysqli_connect("localhost","ansari","ansari","health");
				if(!empty($_POST['username'])){
					$check= mysqli_query($db,("SELECT * FROM Users WHERE u_email='$email' "));

					if (mysqli_num_rows($check)>0){
								echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">Email already exists!!</span>';
					}
					else {
							NewUser();
					}
				}
				mysqli_close($db);
			}
			function NewUser(){
				$username = ($_POST['username']);
				$email = ($_POST['email']);
				$pass = ($_POST['pass']);
				$c_pass = ($_POST['c_pass']);
				if($pass == $c_pass){
						$db=mysqli_connect("localhost","ansari","ansari","health");
						$sql="insert into  Users (u_name,u_email,u_pass) values ('$username','$email','$pass')";
						$query=mysqli_query($db,$sql);
						echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">Successfully sign up,now uou can Login.</span>';
						//header('location:register.php');
				}
				else{
				 echo '<span style="font-size:1.30em; color:#fff; font-weight:bold; text-align:center;display:block;padding:20px">Passwords Not Match!!</span>';
				}
			}
		?>
		<div class="ques fly-up"></div>
		<div class="col-md-6 text-center">
			<div class="g">
				<div class="row">
						<div class="col-md-12  block1">
						<h3 class="head"> Create Your Account Now</h3>
						<form  class="signup" method="post" action="register.php">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" area-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" placeholder="username" required>
								</div>
								<div class="input-group h">
								<span class="input-group-addon"><i class="fa fa-envelope" area-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" placeholder="E-mail" required>
								</div>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key" area-hidden="true"></i></span>
									<input type="Password" class="form-control" name="pass" placeholder="Password" required>
								</div>
								<div class="input-group h">
								<span class="input-group-addon"><i class="fa fa-key" area-hidden="true"></i></span>
									<input type="Password" class="form-control" name="c_pass" placeholder="Confirm Password" required>
								</div>

								<button type="submit" name="signup_btn" class="btn btn-info1">Sign up</button>
								<p>Already have an account? <a href="login.php">Login</a></p>
						</form>
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
