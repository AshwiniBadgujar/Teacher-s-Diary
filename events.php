<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/events_style.css" rel="stylesheet" type="text/css">
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
    <a href="teachplan.php"><div class="side_option">
    	<div class="side_opimg" >
        	<img src="images/ico/planico.png" class="s_opimg" >
        </div>
        <div class="side_opname">Teaching Plan</div>
    </div></a>
    <a href="meetings.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/meetico.png" class="s_opimg">
        </div>
        <div class="side_opname">Meetings</div>
    </div></a>
    <a href="events.php"><div class="side_option2">
    	<div class="side_opimg"  style="background:#00eda6; width:5px; padding-left:0px;">
        	<img src="images/ico/eventico.png" class="s_opimg"  style="margin-left:20px;">
        </div>
        <div class="side_opname"   style="font-size:18px; margin-left:53px;">Events</div>
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
        	<h1> Event Records </h1>
        </div>
        <div class="con_head2">
        	
            	<input type="submit" class="con_op2" value="" form="update" formaction="teachplan.php">
            
            <a href="#target-content">
            	<img src="images/other/add.png" class="con_op">
            </a>
        	
            
            
        </div>
	</div>
    <hr>
    <div class="tab_container">
    <br><br>
    	<center><img src="images/other/caution-512.png">
        
        <br>
        
        <div class="con_head" style="margin-left:230px;">
        	<h1> Under Development </h1>
        </div>
        </center>
        
		
                   
	</div>
</div>
</div>



</body>
</html>