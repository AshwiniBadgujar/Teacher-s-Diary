<?php 
include 'mysqli_connect.php';
session_start();

// GETTING INFORMATION OF TEACHER

$sql="SELECT * FROM teacher WHERE teachid='$_SESSION[t_id]'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
	{
   		while ($row=mysqli_fetch_array($result))
      		{
				$dno=$row['dno'];
				$fname=$row['fname'];
				$lname=$row['lname'];
			}
	}

// GETTING DEPARTMENT NAME OF TEACHER
	
$sql1="SELECT dname from dept where dno=$dno";
$res=(mysqli_query($con,$sql1));
if(mysqli_num_rows($res)>0)
	{
		while($row1=mysqli_fetch_array($res))
			{
				$dname=$row1['dname'];
			}
	}

// GETTING COUNT OF SUBJECT TAUGHT

$cnts="SELECT count(sub) FROM sub where tid='$_SESSION[t_id]'";
$re=mysqli_query($con,$cnts);
if(mysqli_num_rows($res)>0)
	{
		while($row2=mysqli_fetch_array($re))
			{
 				$cont=$row2['count(sub)'];
			}
	}
  	
// GETTING COUNT OF CLASSES TAUGHT

$cntc="SELECT count(cls) from clas where tid='$_SESSION[t_id]'";
$r=mysqli_query($con,$cntc);
if(mysqli_num_rows($r)>0)
	{
		while($row3=mysqli_fetch_array($r))
		{
 			$contc=$row3['count(cls)'];
		}
	}

// ADDING A SUBJECT

if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  	
	if($_POST['flag1']==01)
		{
		mysqli_query($con,"INSERT into sub (tid,sub) values ('$_SESSION[t_id]','$_POST[sub_name]')"); 
		header('Location: home.php');
		}
	else

// ADDING A CLASS

   	{
		mysqli_query($con,
		"INSERT into clas (tid,class,division) values ('$_SESSION[t_id]'','$_POST[clas]','$_POST[divi]')"); 
		header('Location: home.php');
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/home_style.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- Header -->

<div class="cover">
	<div class="sky">
    <div class="moon"></div>
    <div class="clouds_one"></div>
    <div class="clouds_two"></div>
    <div class="clouds_three"></div>
  </div>
</div>
<div class="header">
	<div class="hpart1">
    	<a href="home.php"><h1 class="hname">Professor's Diary</h1></a>
    </div>
    <div class="hpart2">
    	<form>
        	<input type="submit" value="" class="logout">
        </form>
    </div>
</div>

<!-- Cover -->


<div class="cpic fade-in two">
    	<center><img class="profile_pic" src="images/profile/teach1.png"></center>
        <div class="clabel">
        	<div class="label">Prof. <?php echo $fname; ?>  <?php echo $lname; ?></div>
            <div class="label2"><img class="limg" src="images/ico/location-27-512.png"><div class="lname"><?php echo $dname; ?></div></div>  
    	</div>
</div>
    <div class="coption">
    	<a href="#target-content">
        	<div class="opimg">
        		<img src="images/ico/59-512.png" class="opimgsmall">
        	</div>
        	<div class="opname">Subject Taught : <?php echo $cont; ?> <img src="images/other/button_new_2-512.png" class="opname_img"></div>
        </a>
        <a href="#target-content2">
        	<div class="crap">
        	<div class="opimg">
        		<img src="images/ico/013-512.png" class="opimgsmall">
        	</div>
           	<div class="opname">Class & Div : <?php echo $contc; ?> <img src="images/other/button_new_2-512.png" class="opname_img"></div>
            </div>
        </a>
    </div>

<!-- Categories -->

<div class="cat_option">
	<div class="content">
    	<a class="anim" href="#target-content3">
        	<img class="ico" src="images/ico/profileico.png"><br>
            <div class="iconame">Profile</div>
        </a>
        <a class="anim" href="extra.php">
        	<img class="ico" src="images/ico/extraico.png"><br>
        	<div class="iconame">In/ Out Time</div>
        </a>
        <a class="anim" href="timetable.php">
        	<img class="ico" src="images/ico/timeico.png"><br>
            <div class="iconame">Time Table</div>
        </a>
        <a class="anim" href="dailytask.php">
        	<img class="ico" src="images/ico/taskico.png"><br>
      	  <div class="iconame">Daily Task</div>
        </a>
     	<a class="anim" href="teachplan.php">
      		<img class="ico" src="images/ico/planico.png"><br>
        	<div class="iconame">Teaching Plan</div>
        </a>
      	<a class="anim" href="meetings.php">
    	    <img class="ico" src="images/ico/meetico.png"><br>
        	<div class="iconame">Meetings</div>
        </a>
     	<a class="anim" href="events.php">
     		<img class="ico" src="images/ico/eventico.png"><br>
        	<div class="iconame">Events</div>
        </a>
        <a class="anim" href="leave.php">
        	<img class="ico" style="border-radius:100%;" src="images/ico/leaveico.png"><br>
        	<div class="iconame">Leave</div>
        </a>
        <a class="anim" href="duties.php">
        	<img class="ico" src="images/ico/dutyico.png"><br>
        	<div class="iconame">Duties</div>
        </a>
        <a class="anim" href="reports.php">
        	<img class="ico" src="images/ico/reportico.png"><br>
        	<div class="iconame">Reports</div>
        </a>
        <a class="anim" href="cloud.php">
        	<img class="ico" src="images/ico/downloadico.png"><br>
        	<div class="iconame">Cloud</div>
        </a>    
    	<a class="anim" href="settings.php">
        	<img class="ico" src="images/ico/settingico.png"><br>
        	<div class="iconame">Settings</div>
        </a>
    </div>	
</div>

<!-- Subject Add PopUp -->

<div id="target-content">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<label class="add_label">New Subject</label>
        <hr>
        <br>
        <form action="home.php" method="post">
        <input type="hidden" name="flag1" value="01">
        	<label class="sub_name">Subject Name </label>
        	<input type="text" placeholder="E.G. CS - 201" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E.G. CS - 201'" spellcheck="false" autocomplete="off" name="sub_name" required>
            <br><br>
            
            <input class="submit" type="submit" value="Add Subject">
        	
        </form>   
  	</div>
</div>

<!-- Class & Div PopUp -->
<div id="target-content2">
	<a href="" class="close"></a>
  	<div id="target-inner">
    <br>
    	<label class="add_label">New Class & Division</label>
        <hr>
		<br>    	
        <form method="post" action="home.php">
        	<label class="sub_name">Enter Class</label>
        	<input type="text" placeholder="E.G. S.Y.B.Sc."  onfocus="this.placeholder = ''" onblur="this.placeholder = 'E.G. S.Y.B.Sc.'" spellcheck="false" name="clas" autocomplete="off" required>
            <br><br>
            <label class="sub_name">Enter Division</label>
            <input type="text" placeholder="E.G. A / B / I / II" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E.G. A / B / I / II'" spellcheck="false" autocomplete="off" name="divi" required>
            <br><br>
         
            <input  class="submit" type="submit" value="Add Class & Division">
      
        </form>   
  	</div>
</div>

<!-- Profile -->
<div id="target-content3">
	<a href="" class="close"></a>
  	<div id="target-inner">
    <br>
    	<label class="add_label">New Class & Division</label>
        <hr>
		<br>    	
        <form method="post" action="home.php">
        	<label class="sub_name">Enter Class</label>
        	<input type="text" placeholder="E.G. S.Y.B.Sc."  onfocus="this.placeholder = ''" onblur="this.placeholder = 'E.G. S.Y.B.Sc.'" spellcheck="false" name="clas" autocomplete="off" required>
            <br><br>
            <label class="sub_name">Enter Division</label>
            <input type="text" placeholder="E.G. A / B / I / II" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E.G. A / B / I / II'" spellcheck="false" autocomplete="off" name="divi" required>
            <br><br>
         
            <input  class="submit" type="submit" value="Add Class & Division">
      
        </form>   
  	</div>
</div>

</body>
</html>