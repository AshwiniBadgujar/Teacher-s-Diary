<?php
include 'mysqli_connect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 if(isset($_POST['flag1']))
				{
		$sql="SELECT * FROM TEACHER where emailid='$_POST[email]'";
		$result =mysqli_query($con,$sql);

			if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_array($result))
						{
								if((($row['emailid'])==($_POST['email'])) && (($row['password'])==($_POST['pass'])))
									{
								    session_start();
									$_SESSION['t_id']=$row['teachid'];
									$_SESSION['fname']=$row['fname'];
									$_SESSION['lname']=$row['lname'];
									header('Location: home.php');
									}
									
								else if(($row['emailid'])!=($_POST['email']))
   											echo "Invalid email id";
											
								else if(($row['password'])!=($_POST['pass']))
   											echo "Invalid password here";
											
								else echo "invalid input";			
								
						}
				}
											}
									}	
							
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/index_style.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- BACKGROUND DON'T EDIT -->

<div class="fade-in one">
	<div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div>	
</div>

<!-- LOGO DON'T EDIT -->

<div class="fade-in two">
	<div class="pulse1"></div>
    <div class="pulse2"></div>
    <div class="icon"></div>
</div>

<!-- LOGIN FORM STARTS HERE -->

<form class="login_form fade-in three" method="POST" >
	<h1> Professor's Diary </h1>
    	<input type="email" class="email" placeholder="EMAIL ADDRESS" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'EMAIL ADDRESS'" spellcheck="false" required><br>
        <input type="password" class="pass" placeholder="PASSWORD" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PASSWORD'" name="pass" spellcheck="false" required><br>
          <input type="hidden" name="flag1" value="1">
        <a href="" class="push_button"><input type="submit" class="red" value="LOG IN"></a>
        <a href="#reg" class="push_button blue">ACTIVATE DIARY</a>
        <a href="#reset" class="forgot"><label class="label"> Forgot Password ?</label></a>                
</form> 

<!-- LOGIN FORM ENDS HERE -->

<!-- REGISTRATION FORM STARTS HERE -->

<div id="reg" class="overlay">
	<div class="popup">
    	<div class="block">
		<center>
		<h2> Activate Professor's Diary </h2>
		<a class="close" href="Index.php">×</a>
		<div class="content">
			<form class="form1" action="activate.php" method="POST" >
  				<div class="question">
 				   <input type="email" name="email" class="email2" spellcheck="false" spellcheck="false" required/>
    			   <label>Email Address</label>
  				</div>
  				<div class="question">
    				<input type="number" name="mob" class="num" required/>
    				<label>Mobile Number</label>
  				</div>
  				<div class="question">
   					<input type="password" name="passw" class="pass2" required/>
    				<label>Password</label>
  				</div>
  				<div class="question">
   					<input type="password" name="cpass" class="pass2" required/>
                  
    				<label>Confirm Password</label>
 				</div>
  				<button>Activate</button>
			</form>
            </div>
		</div>
        </center>
	</div>
</div>  

<!-- REGISTRATION FORM ENDS HERE -->  

<!-- RESET PASSWORD FORM STARTS HERE -->  

<div id="reset" class="overlay">
	<div class="popup">
		<center>
		<h2> Reset Password </h2>
		<a class="close" href="Index.php">×</a>
		<div class="content">
			<form class="form1">
  				<div class="question">
 				   <input type="email" class="email2" spellcheck="false" required/>
    			   <label>Email Address</label>
  				</div>
  				<div class="question">
    				<input type="number" class="num" required/>
    				<label>Mobile Number</label>
  				</div>
  				<div class="question">
   					<input type="password" class="pass2" required/>
    				<label>New Password</label>
  				</div>
  				<div class="question">
   					<input type="password" class="pass2" required/>
    				<label>Confirm New Password</label>
 				</div>
  				<button>Reset</button>
			</form>
		</div>
        </center>
	</div>
</div>

<!-- RESET PASSWORD FORM ENDS HERE -->

</body>
</html>
