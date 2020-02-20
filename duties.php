<?php 

include 'mysqli_connect.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 if(isset($_POST['flag1']))
				{
					mysqli_query($con,"INSERT into setting (tid,dt,exam,cls,title) values ('$_SESSION[t_id]','$_POST[dat]','$_POST[exam]','$_POST[clas]','$_POST[topic]')"); 				
	 		 	}	
if(isset($_POST['flag2']))
				{
					mysqli_query($con,"INSERT into assess (tid,exam,cls,no,title) values ('$_SESSION[t_id]','$_POST[exam]','$_POST[clas]','$_POST[num]','$_POST[topic]')"); 				
	 		 	}				
if(isset($_POST['flag3']))
				{
					mysqli_query($con,"INSERT into super (tid,dt,exam,cls,dur) values ('$_SESSION[t_id]','$_POST[dat]','$_POST[exam]','$_POST[clas]','$_POST[topic]')"); 				
	 		 	}		
if(isset($_POST['flag4']))
				{
					mysqli_query($con,"INSERT into other (tid,dt,dur) values ('$_SESSION[t_id]','$_POST[dat]','$_POST[topic]')"); 				
	 		 	}		
}?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/duties_style.css" rel="stylesheet" type="text/css">
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
        	<img src="images/ico/timeico.png" class="s_opimg" >
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
        	<img src="images/ico/planico.png" class="s_opimg">
        </div>
        <div class="side_opname">Teaching Plan</div>
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
    <a href="duties.php"><div class="side_option2">
    	<div class="side_opimg"  style="background:#00eda6; width:5px; padding-left:0px;">
        	<img src="images/ico/dutyico.png" class="s_opimg" style="margin-left:20px;" >
        </div>
        <div class="side_opname"  style="font-size:18px; margin-left:53px;">Duties</div>
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
        	<h1> Duties Records </h1>
        </div>
        <div class="con_head2">
        	
        </div>
	</div>
     <div class="tab_container">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1" class="tab1"><i class="fa fa-code"></i><span>Paper Setting</span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2" class="tab1"><i class="fa fa-pencil-square-o"></i><span>Paper Assessment</span></label>

			<input id="tab3" type="radio" name="tabs">
			<label for="tab3" class="tab1"><i class="fa fa-bar-chart-o"></i><span>Supervision</span></label>

			<input id="tab4" type="radio" name="tabs">
			<label for="tab4" class="tab1"><i class="fa fa-folder-open-o"></i><span>Other</span></label>

			<section id="content1" class="tab-content">
            	<center><a href="#target-content"><div class="submit3">Add Record</div></a></center>
				<div class="f_title">
                	<div class="f_name">Date</div>
                    <div class="f_time">Examination</div>
                    <div class="f_name2">Class</div>
                    <div class="f_topic">Title of Paper</div>                 		                            
                </div>
                   <?php
               		    $cntc="SELECT * FROM setting WHERE tid='$_SESSION[t_id]' order by dt desc";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{	
										echo '<div class="fc_content">
        										<div class="fc_name">'.$row3['dt'].'</div>
            									<div class="fc_time">'.$row3['exam'].'</div>
           										  <div class="fc_name2">'.$row3['cls'].'</div>
            								<div class="fc_topic">'.$row3['title'].'</div>       
        									</div>'; 
									}
							}
                ?>  
			</section>
            	
			<section id="content2" class="tab-content">
            <center><a href="#target-content2"><div class="submit3">Add Record</div></a></center>
            	<div class="f_title">
                	<div class="f_name">Examination</div>
                    <div class="f_time">Class</div>
                    <div class="f_name2" style="font-size:16px; padding-top:10px;">Nos. of Paper assessed</div>
                    <div class="f_topic">Title of Paper</div>                 		                            
                </div>
                 <?php
               		    $cntc="SELECT * FROM assess WHERE tid='$_SESSION[t_id]' order by dt desc";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{	
										echo '<div class="fc_content">
        										<div class="fc_name">'.$row3['exam'].'</div>
            									<div class="fc_time">'.$row3['cls'].'</div>
           										  <div class="fc_name2">'.$row3['no'].'</div>
            								<div class="fc_topic">'.$row3['title'].'</div>       
        									</div>'; 
									}
							}
                ?>  
               
			</section>

			<section id="content3" class="tab-content">
            <center><a href="#target-content3"><div class="submit3">Add Record</div></a></center>
            	<div class="f_title">
                	<div class="f_name">Date</div>
                    <div class="f_time">Examination</div>
                    <div class="f_name2">Class</div>
                    <div class="f_topic">Duration Of Paper</div>                 		                            
                </div>
                   <?php
               		    $cntc="SELECT * FROM super WHERE tid='$_SESSION[t_id]' order by dt desc";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{	
										echo '<div class="fc_content">
        										<div class="fc_name">'.$row3['dt'].'</div>
            									<div class="fc_time">'.$row3['exam'].'</div>
           										  <div class="fc_name2">'.$row3['cls'].'</div>
            								<div class="fc_topic">'.$row3['dur'].'</div>       
        									</div>'; 
									}
							}
                ?>  
			</section>

			<section id="content4" class="tab-content">
            <center><a href="#target-content4"><div class="submit3">Add Record</div></a></center>
            	<div class="f_title">
                	<div class="f_name">Date</div>                    
                    <div class="f_topic" style="width:775px;">Duration Of Paper</div>                 		                         </div> <?php
               		   $cntc="SELECT * FROM other WHERE tid='$_SESSION[t_id]' order by dt desc";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{	
										echo '<div class="fc_content">
        										<div class="fc_name">'.$row3['dt'].'</div>
            									<div class="fc_topic">'.$row3['dur'].'</div>
           									</div>'; 
									}
							}
                ?>         
               
              
			</section>          
          
		</div>
</div>
</div>

<div id="target-content">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<div class="add_label">New Duties</div>
        <hr>
        <form method="POST" action="duties.php">
         <input type="hidden" name="flag1" value="01">
        	<br>
            <div class="sub_name">Enter Date </div>
            <input type="date" name="dat" required>
            
             <br><br>
            
           	<div class="sub_name">Examination</div>
            <input type="text" name="exam" placeholder="E.G S.Y.B.Cs" required>
            <br><br>
            
            <div class="sub_name">Class</div>
            <input type="text" name="clas" placeholder="S. Y" required>
            <br><br>
                    
            <div class="sub_name">Title Of Paper</div>
            <input type="text" name="topic" placeholder="E.G. Website Committee" required>
            <br><br>
            <center>
            <input class="submit" type="submit" value="Add Duty">
        	</center>	
        </form>
  	</div>
</div>

<div id="target-content2">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<div class="add_label">New Duties</div>
        <hr>
        <form method="POST" action="duties.php">
         <input type="hidden" name="flag2" value="02">
        	<br>
            
           	<div class="sub_name">Examination</div>
            <input type="text" name="exam" placeholder="E.G S.Y.B.Cs" required>
            <br><br>
            
            <div class="sub_name">Class</div>
            <input type="text" name="clas" placeholder="S. Y" required>
            <br><br>
                    
            <div class="sub_name">Title Of Paper</div>
            <input type="text" name="topic" placeholder="E.G. Website Committee" required>
            <br><br>
            
            <div class="sub_name3">Nos. Of Paper Assessment</div>
            <input type="number" name="num" placeholder="0" required>
            <br><br>
            
            <center>
            <input class="submit" type="submit" value="Add Duty">
        	</center>	
	</div>
</div>
    

<div id="target-content3">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<div class="add_label">New Duties</div>
        <hr>
        <form method="POST" action="duties.php">
         <input type="hidden" name="flag3" value="03">
        	<br>
            <div class="sub_name">Enter Date </div>
            <input type="date" name="dat" required>
            
             <br><br>
            
           	<div class="sub_name">Examination</div>
            <input type="text" name="exam" placeholder="E.G S.Y.B.Cs" required>
            <br><br>
            
            <div class="sub_name">Class</div>
            <input type="text" name="clas" placeholder="S. Y" required>
            <br><br>
                    
            <div class="sub_name3">Duration Of Paper</div>
            <input type="text" name="topic" placeholder="1 hour" style="width:350px;"required>
            <br><br>
            <center>
            <input class="submit" type="submit" value="Add Duty">
        	</center>	
        </form>
  	</div>
</div> 


<div id="target-content4">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<div class="add_label">New Duties</div>
        <hr>
        <form method="POST" action="duties.php">
         <input type="hidden" name="flag4" value="04">
        	<br>
            <div class="sub_name">Enter Date </div>
            <input type="date" name="dat" required>
            
             <br><br>
                               
            <div class="sub_name">Title</div>
            <input type="text" name="topic" placeholder="1 hour" required>
            <br><br>
            <center>
            <input class="submit" type="submit" value="Add Duty">
        	</center>	
        </form>
  	</div>
</div> 


</body>
</html>