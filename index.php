<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'connect.php';
require_once 'new.php';?>
    <meta charset="UTF-8">
    <title>CareerOpt</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="full-page">
    
        <div class="navbar">
            <a href="index.php">CareerOpt</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href="index.php">HOME</a></li>
                <li><a href="careers.php">CAREERS</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">LOGIN</button>
                </li>
            </ul>
        </nav>
        <div id='login-form' class="login-page">
            <div class="form-box"> 
                <div class="button-box">
                    <div id='btn'></div>
                      <button type='button' onclick='login()' class='toggle-btn'>LOG IN</button>
                      <button type='button' onclick='register()' class='toggle-btn'>REGISTER</button>
                </div>
                <form id='login' method="post" class='input-group-login'>
                    <input type='text' name="email" class='input-field' placeholder='Email Id' required>
                    <input type='password' name="passw" class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' name="login" class='submit-btn'>LOG IN</button>
                </form>
                <form id='register' method='post' class='input-group-register'>
                    <input type='text' name='fname' class='input-field' placeholder='First Name' required>
                    <input type='text' name='lname' class='input-field' placeholder='Last Name' required>
                    <input type='email' name='email' class='input-field' placeholder='Email Id' required>
                    <input type='password' name='passw' class='input-field' placeholder='Enter Password' required>
                    <button type='submit' name="register" class='submit-btn'>REGISTER</button>
                </form> 
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>