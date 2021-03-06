<?php 
include 'mysqli_connect.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
		 {
				if(isset($_POST['flag1']))
				{
				mysqli_query($con,"INSERT into plan (tid,month,topic,lecalloc) values ('$_SESSION[t_id]','$_POST[type]','$_POST[topic]','$_POST[la]')"); 				
	 		 header('Location: teachplan.php');
			 	}
				else if (isset($_POST['flag2']))
				{ 
				mysqli_query($con,"UPDATE plan set lecactual='$_POST[actual]' where pid='$_POST[set]')"); 				
	 		 header('Location: teachplan.php');
			 	}
		 }
		 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/teachplan_style.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- Header -->

<div class="header">
	<div class="hpart1">
    	<a href="home.php"><h1 class="hname">Professor's Diary</h1></a>
    </div>
    <div class="hpart2">
        <ul>		
			<li class="drop">
				<a href="#"><img class="profile" src="images/ico/gear-512.png"></a>				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
                        	
							<li>Account Settings</li>
							<li>Sign Out</li>
						</ul>
					</div>
				</div>			
			</li>			
		</ul>
        
	</div>
</div>

<!-- Sidebar -->

<div class="side_nav">
	<div class="side_logo">
    	<center><img class="tablogo" src="images/profile/teach1.png"><br>
        		<div class="prof_name">Hi, <?php echo $_SESSION['fname']; ?>  <?php echo $_SESSION['lname']; ?></div></center>
        
    </div>
    <a href="home.php"><div class="side_option" style="margin-top:20px;">
    	<div class="side_opimg">
        	<img src="images/other/1461194365_home512x512.png" class="s_opimg">
        </div>
        <div class="side_opname">Home</div>
    </div></a>
    <a href="extra.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/extraico.png" class="s_opimg">
        </div>
        <div class="side_opname">In / Out Time</div>
    </div></a>
    <a href="timetable.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/timeico.png" class="s_opimg">
        </div>
        <div class="side_opname">Time Table</div>
    </div></a>
    <a href="dailytask.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/taskico.png" class="s_opimg">
        </div>
        <div class="side_opname">Daily Task</div>
    </div></a>
    <a href="teachplan.php"><div class="side_option2">
    	<div class="side_opimg"  style="background:#00eda6; width:5px; padding-left:0px;">
        	<img src="images/ico/planico.png" class="s_opimg"  style="margin-left:20px;">
        </div>
        <div class="side_opname"  style="font-size:18px; margin-left:53px;">Teaching Plan</div>
    </div></a>
    <a href="meetings.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/meetico.png" class="s_opimg">
        </div>
        <div class="side_opname">Meetings</div>
    </div></a>
    <a href="events.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/eventico.png" class="s_opimg">
        </div>
        <div class="side_opname">Events</div>
    </div></a>
    <a href="leave.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/leaveico.png" class="s_opimg"  style="border-radius:100%;">
        </div>
        <div class="side_opname">Leave</div>
    </div></a>
    <a href="duties.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/dutyico.png" class="s_opimg">
        </div>
        <div class="side_opname">Duties</div>
    </div>
     <a href="reports.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/reportico.png" class="s_opimg">
        </div>
        <div class="side_opname">Reports</div>
    </div></a>
     <a href="cloud.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/downloadico.png" class="s_opimg">
        </div>
        <div class="side_opname">Cloud</div>
    </div></a>
</div>

<div class="content">
	<div class="con_wrap">
		<div class="con_head">
        	<h1> Teaching Plan </h1>
        </div>
        <div class="con_head2">
        		<input type="hidden" name="flag2" value="02">
            	<input type="submit" class="con_op2" value="" form="update" formaction="teachplan.php">
            
            <a href="#target-content">
            	<img src="images/other/add.png" class="con_op">
            </a>
        </div>
	</div>
    <hr>
    <div class="tab_container">
		<div class="f_title">
        	<div class="f_name">Month</div>
            <div class="f_topic">Topic Details</div>
            <div class="f_time">Lectures Allocated by University</div>
            <div class="f_name2">Actual Lectures Conducted </div>
                        
        </div>
        <?php 
	   
			 $cntc="SELECT * FROM plan WHERE tid='$_SESSION[t_id]'";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{
										echo ' <div class="fc_content">
        	<div class="fc_name">'.$row3['month'].'</div>
            <div class="fc_topic">'.$row3['topic'].'</div>
            <div class="fc_time">'.$row3['lecalloc'].'</div>
			<form id="update" method="POST" action="teachplan.php">
			<input type="hidden" name="set" value="'.$row3['pid'].'">
            <input name="actual" type="number" class="fc_name2" value="'.$row3['lecactual'].'" placeholder="0">
            </form>
        	</div>'; 
									}
							}

							?>
       
            
                   
	</div>
</div>
</div>

<div id="target-content">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<div class="add_label">Add a New Plan</div>
        <hr>
        <form method="POST" action="teachplan.php">
         <input type="hidden" name="flag1" value="01">
        	<br>
            
            <div class="sub_name3">Select Month </div>
            <div class="select-custom">
                <select name="type"  style="width:350px;">
                    <option value="January" selected>January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="Spetember">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>            
            <br><br>
            <div class="sub_name3">Topic Details </div>
            <input type="text" name="topic" placeholder="E.G. Introduction" required>
            <br><br>
            <div class="sub_name3">Lectures Allocated </div>
            <input type="number" name="la" required style="width:350px;" class="number">
             <br><br>
            <div class="sub_name3">Actual Lectures </div>
            <input type="number" name="aa" required style="width:350px;" class="number">
            <br><br>
            <center>
            <input class="submit" type="submit" value="Add Plan">
        	</center>	
        </form>
  	</div>
</div>

</body>
</html>