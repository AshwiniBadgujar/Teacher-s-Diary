<?php 
$abc=0;
include 'mysqli_connect.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 if(isset($_POST['flag1']))
				{
					$abc=1;
					mysqli_query($con,"INSERT into meetings (tid,dt,type,ftime,ttime,nature) values ('$_SESSION[t_id]','$_POST[dat]','$_POST[type]','$_POST[From_time]','$_POST[Till_time]','$_POST[topic]')"); 				
	 		 	}	
				
if(isset($_POST['ashu']))
		{
$cheks=implode("','",$_POST['checkbox']);
echo $cheks;
$sql="delete from meetings WHERE mid in ('$cheks')";
$result=mysqli_query($con,$sql);
	

		 }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/meetings_style.css" rel="stylesheet" type="text/css">
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
        		<div class="prof_name">Hi, <?php echo $_SESSION['fname']; ?>  <?php echo $_SESSION['lname']; ?> </div></center>
        
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
    	<div class="side_opimg">
        	<img src="images/ico/planico.png" class="s_opimg" >
        </div>
        <div class="side_opname"  >Teaching Plan</div>
    </div></a>
    <a href="meetings.php"><div class="side_option2">
    	<div class="side_opimg"   style="background:#00eda6; width:5px; padding-left:0px;"  >
        	<img src="images/ico/meetico.png" class="s_opimg"  style="margin-left:20px;">
        </div>
        <div class="side_opname"  style="font-size:18px; margin-left:53px;">Meetings</div>
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
        <div class="side_opname" >Leave</div>
    </div></a>
    <a href="duties.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/dutyico.png" class="s_opimg" >
        </div>
        <div class="side_opname" >Duties</div>
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
        	<h1> Meetings Records </h1>
        </div>
        <div class="con_head2">
        	<a href="#target-content2">
            	<img src="images/other/cancel.png" class="con_op">
            </a>
            <a href="#target-content">
            	<img src="images/other/add.png" class="con_op">
            </a>
        	
            
            
        </div>
	</div>
    <hr>
    <div class="tab_container">
		<div class="f_title">
        	<div class="f_name">Date</div>
            <div class="f_time">Type</div>
            <div class="f_name2">Time</div>
            <div class="f_topic">Nature Of Meeting</div>            
        </div>
          <?php
               		    $cntc="SELECT * FROM meetings WHERE tid='$_SESSION[t_id]' order by dt desc";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{	
										echo '<div class="fc_content">
        	<div class="fc_name">'.$row3['dt'].'</div>
            <div class="fc_time">'.$row3['type'].'</div>
            <div class="fc_name2">'.date("g:i a", strtotime($row3['ftime'])). ' - ' .date("g:i a", strtotime($row3['ttime'])).'</div>
            <div class="fc_topic">'.$row3['nature'].'</div>            
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
    	<div class="add_label">Add a New Meeting</div>
        <hr>
        <form method="POST" action="meetings.php">
         <input type="hidden" name="flag1" value="01">
        	<br>
            <div class="sub_name">Enter Date </div>
            <input type="date" name="dat" required>
            
            <div class="sub_name">Select Types </div>
            <div class="select-custom">
                <select name="type">
                    <option value="University" selected>UNIVERSITY</option>
                    <option value="College">COLLEGE</option>
                </select>
            </div>
            <br><br>
            
            <div class="sub_name">Time From </div>           
            <input type="time" name="From_time" required>
           
            <div class="sub_name">Time Till </div>
            <input type="time" name="Till_time" required>
            
            <br><br>
            
            <div class="sub_name3">Nature Of Meeting</div>
            <input type="text" name="topic" placeholder="E.G. Website Committee" required>
            <br><br>
            <center>
            <input class="submit" type="submit" value="Add Meeting">
        	</center>	
        </form>
  	</div>
</div>

<div id="target-content2">
	<a href="" class="close"></a>
  	<div id="target-inner">
    <div class="add_label">Search Record by Date to Delete</div>
        <hr><center>
        <form method="POST" action="meetings.php#target-content2">
        	<br>
        <form method="POST" action="meetings.php#target-content2">
        	<div class="sub_name">Enter Date </div>
            <input type="date" name="date" required>
                      
            <input class="submit2" type="submit" value="Search">           
        </form>
        <br>
        <form method="post" action="meetings.php">
        <input type="hidden" name="ashu" value="09">
        <input class="submit3" type="submit" value="Delete"><bR>
        <div class="fp_title">
        	<div class="rad2"></div>
        	<div class="fp_name">Date</div>
            <div class="fp_time">Type</div>
            <div class="fp_name2">Time</div>
            <div class="fp_topic">Nature Of Meeting</div>          
        </div>
        
        <div style="opacity:<?php echo'$abc'; ?>">
        <?php
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		 {
			
         $resu=mysqli_query($con,"SELECT * FROM meetings WHERE tid='$_SESSION[t_id]' and dt='$_POST[date]'");			
					    if(mysqli_num_rows($resu)>0)
							{
								while($row6=mysqli_fetch_array($resu))
									{
 										echo '<div class="fcp_content" style="margin-left:-20px;">
        									  <div class="rad"><input type="checkbox" name="checkbox[]" id="checkbox[]" value="'.$row6['mid'].'"></div>
        									  <div class="fcp_name">'.$row6['dt'].'</div>
            								  <div class="fcp_time">'.$row6['type'].'</div>
            								  <div class="fcp_name2">'.$row6['ftime'].'-'.$row6['ttime'].'</div>
            								  <div class="fcp_topic">'.$row6['nature'].'</div>  
											             
        									  </div>';
			}
}
																	}?>    </div>  
  
       
              
        </form>
        
        </center>
	</div>
</div>
    
    


</body>
</html>