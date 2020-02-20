<?php 

include 'mysqli_connect.php';

session_start();

 $cntc="SELECT count(ftime) FROM timetable WHERE tid='$_SESSION[t_id]'";
						$r=mysqli_query($con,$cntc);
					    if(mysqli_num_rows($r)>0)
							{
								while($row3=mysqli_fetch_array($r))
									{
										$contc=$row3['count(ftime)'];
									}
							}


if($_SERVER['REQUEST_METHOD'] == 'POST')
		 {
			if(isset($_POST['day1']))
			 	{
					mysqli_query($con,"DELETE FROM timetable WHERE lno='$_POST[lecno]'");
					header('Location: timetable.php#tab1');
					$sel="checked";
				}
			else  if(isset($_POST['day2']))
			 	{
					mysqli_query($con,"DELETE FROM timetable WHERE lno='$_POST[lecno]'");
					header('Location: timetable.php#tab2');
				}
			else if(isset($_POST['day3']))
			 	{
					mysqli_query($con,"DELETE FROM timetable WHERE lno='$_POST[lecno]'");
					header('Location: timetable.php#tab3');
					$sel="checked";
				}
			else  if(isset($_POST['day4']))
			 	{
					mysqli_query($con,"DELETE FROM timetable WHERE lno='$_POST[lecno]'");
					header('Location: timetable.php#tab4');
				}
				if(isset($_POST['day5']))
			 	{
					mysqli_query($con,"DELETE FROM timetable WHERE lno='$_POST[lecno]'");
					header('Location: timetable.php#tab5');
					$sel="checked";
				}
			else  if(isset($_POST['day6']))
			 	{
					mysqli_query($con,"DELETE FROM timetable WHERE lno='$_POST[lecno]'");
					header('Location: timetable.php#tab6');
				}
			else if(isset($_POST['flag1']))
				{
					mysqli_query($con,"INSERT into timetable (tid,day,ftime,ttime,roomno,sub,cls,division) values ('$_SESSION[t_id]','$_POST[Day]','$_POST[From_time]','$_POST[Till_time]','$_POST[Room_no]','$_POST[Subject]','$_POST[Class]','$_POST[Division]')"); 				
	 		 	}		
			
			
		 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Professor's Diary</title>
<link href="css/timetable_style.css" rel="stylesheet" type="text/css">
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
    <a href="timetable.php"><div class="side_option2">
    	<div class="side_opimg" style="background:#00eda6; width:5px; padding-left:0px;">
        	<img src="images/ico/timeico.png" class="s_opimg" style="margin-left:20px;">
        </div>
        <div class="side_opname" style="font-size:18px; margin-left:53px;">Time Table</div>
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
    <a href="duties.php"><div class="side_option">
    	<div class="side_opimg">
        	<img src="images/ico/dutyico.png" class="s_opimg"  style="border-radius:100%;">
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
        	<h1> Personal Time Table </h1>
        </div>
        <div class="con_head2">
        	<a href="#target-content">
            	<div class="add_lec">Create New Lecture </div>
            </a>
            <a href="#target-content2">
            	<img src="images/ico/typewriter-512.png" class="print">
            </a>
        </div>
	</div>
     <div class="tab_container">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1" class="tab1"><i class="fa fa-code"></i><span>Monday</span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2" class="tab1"><i class="fa fa-pencil-square-o"></i><span>Tuesday</span></label>

			<input id="tab3" type="radio" name="tabs">
			<label for="tab3" class="tab1"><i class="fa fa-bar-chart-o"></i><span>Wednesday</span></label>

			<input id="tab4" type="radio" name="tabs">
			<label for="tab4" class="tab1"><i class="fa fa-folder-open-o"></i><span>Thursday</span></label>

			<input id="tab5" type="radio" name="tabs">
			<label for="tab5" class="tab1"><i class="fa fa-envelope-o"></i><span>Friday</span></label>
            
            <input id="tab6" type="radio" name="tabs">
			<label for="tab6" class="tab1"><i class="fa fa-envelope-o"></i><span>Saturday</span></label>

			<section id="content1" class="tab-content">
				<div class="ftitle">
                	<div class="ftime">Time</div>
                    <div class="ftag">Class & Div</div>
                    <div class="ftag">Subject</div>
                    <div class="ftag2">Room Nos.</div>                		                            
                </div>
                <div class="fcontent">
                <?php
               		    $cntc1="SELECT distinct * FROM timetable WHERE tid='$_SESSION[t_id]'and day='Monday' order by ftime";
						$r1=mysqli_query($con,$cntc1);
					    if(mysqli_num_rows($r1)>0)
							{
								while($row1=mysqli_fetch_array($r1))
									{	
										echo '<div class="fctime">'.date("g:i a", strtotime($row1['ftime'])). ' - ' .date("g:i a", strtotime($row1['ttime'])).'</div>';
									    echo '<div class="fctag">'.$row1['cls']. ' - ' .$row1['division'].'</div>';
                						echo '<div class="fctag">'.$row1['sub'].'</div>';
                    					echo '<div class="fctag2">'.$row1['roomno'];
										echo '<form method="post">
												<input type="hidden" name="day1" value="mon">
												<input type="hidden" name="lecno" value="'.$row1['lno'].'">
                         						<input type="submit" class="cancel" value="">	
                        					  </form></div> ';
									}
							}
                ?>
                                      
                </div>
			</section>
            	
		<section id="content2" class="tab-content">
            	<div class="ftitle">
                	<div class="ftime">Time</div>
                    <div class="ftag">Class & Div</div>
                    <div class="ftag">Subject</div>
                    <div class="ftag2">Room Nos.</div>                		                            
                </div>
                <div class="fcontent">
                   <?php
             		    $cntc2="SELECT distinct * FROM timetable WHERE tid='$_SESSION[t_id]' and day='Tuesday' order by ftime";
						$r2=mysqli_query($con,$cntc2);
					    if(mysqli_num_rows($r2)>0)
							{
								while($row2=mysqli_fetch_array($r2))
									{
										echo '<div class="fctime">'.date("g:i a", strtotime($row2['ftime'])). ' - ' .date("g:i a", strtotime($row2['ttime'])).'</div>';
									    echo '<div class="fctag">'.$row2['cls']. ' - ' .$row2['division'].'</div>';
                						echo '<div class="fctag">'.$row2['sub'].'</div>';
                    					echo '<div class="fctag2">'.$row2['roomno'];
										echo '<form method="post">
												<input type="hidden" name="day2" value="tues">
												<input type="hidden" name="lecno" value="'.$row2['lno'].'">
												<input type="submit" class="cancel" value="">
                        					  </form></div> ';
									}
							}
                ?>
                    	
                                       
                </div>
			</section>

			<section id="content3" class="tab-content">
            	<div class="ftitle">
                	<div class="ftime">Time</div>
                    <div class="ftag">Class & Div</div>
                    <div class="ftag">Subject</div>
                    <div class="ftag2">Room Nos.</div>                		                            
                </div>
                <div class="fcontent">
                 <?php
               		    $cntc3="SELECT distinct * FROM timetable WHERE tid='$_SESSION[t_id]' and day='Wednesday' order by ftime";
						$r3=mysqli_query($con,$cntc3);
					    if(mysqli_num_rows($r3)>0)
							{
								while($row3=mysqli_fetch_array($r3))
									{
 										echo '<div class="fctime">'.date("g:i a", strtotime($row3['ftime'])). ' - ' .date("g:i a", strtotime($row3['ttime'])).'</div>';
									    echo '<div class="fctag">'.$row3['cls']. ' - ' .$row3['division'].'</div>';
                						echo '<div class="fctag">'.$row3['sub'].'</div>';
                    					echo '<div class="fctag2">'.$row3['roomno'];
										echo '<form method="post">
												<input type="hidden" name="day3" value="wed">
												<input type="hidden" name="lecno" value="'.$row3['lno'].'">
                        						<input type="submit" class="cancel" value="">
												
											
                        					  </form></div> ';
									}
							}
                ?>
                                     
                </div>
			</section>

			<section id="content4" class="tab-content">
            	<div class="ftitle">
                	<div class="ftime">Time</div>
                    <div class="ftag">Class & Div</div>
                    <div class="ftag">Subject</div>
                    <div class="ftag2">Room Nos.</div>                		                            
                </div>
                <div class="fcontent">
                  <?php
               		   $cntc4="SELECT distinct * FROM timetable WHERE tid='$_SESSION[t_id]' and day='Thursday' order by ftime";
						$r4=mysqli_query($con,$cntc4);
					    if(mysqli_num_rows($r4)>0)
							{
								while($row4=mysqli_fetch_array($r4))
									{
 										echo '<div class="fctime">'.date("g:i a", strtotime($row4['ftime'])). ' - ' .date("g:i a", strtotime($row4['ttime'])).'</div>';
									    echo '<div class="fctag">'.$row4['cls']. ' - ' .$row4['division'].'</div>';
                						echo '<div class="fctag">'.$row4['sub'].'</div>';
                    					echo '<div class="fctag2">'.$row4['roomno'];
										echo '<form method="post">
												<input type="hidden" name="day4" value="thurs">
                        						<input type="submit" class="cancel" value="">
												<input type="hidden" name="lecno" value="'.$row4['lno'].'">
                        					  </form></div> ';
									}
							}
                ?>
                                        
                </div>
			</section>

			<section id="content5" class="tab-content">
            	<div class="ftitle">
                	<div class="ftime">Time</div>
                    <div class="ftag">Class & Div</div>
                    <div class="ftag">Subject</div>
                    <div class="ftag2">Room Nos.</div>                		                            
                </div>
                <div class="fcontent">
                   <?php
               		   $cntc5="SELECT distinct * FROM timetable WHERE tid='$_SESSION[t_id]' and day='Friday' order by ftime";
						$r5=mysqli_query($con,$cntc5);
					    if(mysqli_num_rows($r5)>0)
							{
								while($row5=mysqli_fetch_array($r5))
									{
 										echo '<div class="fctime">'.date("g:i a", strtotime($row5['ftime'])). ' - ' .date("g:i a", strtotime($row5['ttime'])).'</div>';
									    echo '<div class="fctag">'.$row5['cls']. ' - ' .$row5['division'].'</div>';
                						echo '<div class="fctag">'.$row5['sub'].'</div>';
                    					echo '<div class="fctag2">'.$row5['roomno'];
										echo '<form method="post">
												<input type="hidden" name="day5" value="fri">
                        						<input type="submit" class="cancel" value="">
												<input type="hidden" name="lecno" value="'.$row5['lno'].'">
                        					  </form></div> ';
									}
							}
                ?>
                                      
                </div>			
			</section>
            
            <section id="content6" class="tab-content">
            	<div class="ftitle">
                	<div class="ftime">Time</div>
                    <div class="ftag">Class & Div</div>
                    <div class="ftag">Subject</div>
                    <div class="ftag2">Room Nos.</div>                		                            
                </div>
                <div class="fcontent">
                
        <?php
               		   $cntc6="SELECT distinct * FROM timetable WHERE tid='$_SESSION[t_id]' and day='Saturday' order by ftime";
						$r6=mysqli_query($con,$cntc6);
					    if(mysqli_num_rows($r6)>0)
							{
								while($row6=mysqli_fetch_array($r6))
									{
 										echo '<div class="fctime">'.date("g:i a", strtotime($row6['ftime'])). ' - ' .date("g:i a", strtotime($row6['ttime'])).'</div>';
									    echo '<div class="fctag">'.$row6['cls'].' - ' .$row6['division'].'</div>';
                						echo '<div class="fctag">'.$row6['sub'].'</div>';
                    					echo '<div class="fctag2">'.$row6['roomno'];
										echo '<form method="post">
												<input type="hidden" name="day6" value="sat">
                        						<input type="submit" class="cancel" value="">
												<input type="hidden" name="lecno" value="'.$row6['lno'].'">
                        					  </form></div> ';
									}
							}
                ?>                      
                </div>
			</section>
		</div>
</div>
</div>

<div id="target-content">
	<a href="" class="close"></a>
  	<div id="target-inner">
    	<div class="add_label">New Class & Division</div>
        <hr>
        <form method="POST" action="timetable.php">
         <input type="hidden" name="flag1" value="01">
        	<br>
        	<div class="sub_name">Select Day </div>
        	<div class="select-custom">
                <select name="Day" style="width:660px;">
                    <option value="Monday" selected>Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>           
                </select>
            </div>
            <br><br>
            <div class="sub_name">Time From </div>           
            <input type="time" name="From_time" required>
           
            <div class="sub_name">Time Till </div>
            <input type="time" name="Till_time" required>
            <br><br>
            <div class="sub_name">Select Subject</div>
            <div class="select-custom">
                <select name="Subject">
					<?php
						$t_id=1;
						$sql="SELECT sub FROM sub WHERE tid='$_SESSION[t_id]'";
						$result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0)
                        {    	
                            while ($row=mysqli_fetch_array($result))
                            {		
                                $output = '<option value="'.$row['sub'].'">'.$row['sub'].'</option>';
								echo $output;
                            }
                        }
        
                    ?>                          
                </select>
            </div>
           
            <div class="sub_name">Select Class </div>
            <div class="select-custom">
                <select name="Class">
                    <?php
						$t_id=1;
						$sql="SELECT cls FROM clas WHERE tid='$_SESSION[t_id]'";
						$result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0)
                        {    	
                            while ($row=mysqli_fetch_array($result))
                            {		
                                $output = '<option value="'.$row['cls'].'">'.$row['cls'].'</option>';
								echo $output;
                            }
                        }
        
                    ?>          
                </select>
            </div>
            <br><br>
            <div class="sub_name">Select Division </div>
            <div class="select-custom">
                <select name="Division">
                    <?php
						$t_id=1;
						$sql="SELECT distinct division FROM clas WHERE tid='$_SESSION[t_id]'";
						$result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0)
                        {    	
                            while ($row=mysqli_fetch_array($result))
                            {		
                                $output = '<option value="'.$row['division'].'">'.$row['division'].'</option>';
								echo $output;
                            }
                        }
        
                    ?>                   
                </select>
            </div>
            <div class="sub_name">Enter Room Nos. </div>
            <input type="number" name="Room_no" placeholder="E.G. 99" required>
            <br><br>
            <center>
            <input class="submit" type="submit" value="Add Lecture">
        	</center>	
        </form>
  	</div>
</div>

<div id="target-content2">
	<a href="" class="close"></a>
  	<div id="target-inner">
    <div class="add_label">Personal Time Table</div>
        	<div class="sub_name2">Name : Prof. Poonam Pondey</div>
            <button class="print_final" onclick="window.print();"></button>
        <hr>       
       	<div class="tt_container">
        
        <!-- ------------------ROW 1------------------- -->  
            <div class="tt_title">
            	<div class="tt_name">TIME</div>
                <div class="tt_name">MONDAY</div>
                <div class="tt_name">TUESDAY</div>
                <div class="tt_name">WEDNESDAY</div>
                <div class="tt_name">THURSDAY</div>
                <div class="tt_name">FRIDAY</div>
                <div class="tt_name">SATURDAY</div>           
            </div>
         
         
         <!-- ------------------Column 1------------------- -->  
         
         <div class="tt_con">
        <?php
		$result=mysqli_query($con,"SELECT distinct ftime,ttime FROM timetable WHERE tid='$_SESSION[t_id]' order by ftime");
		while ($row=mysqli_fetch_array($result))
		{
			$f=$row['ftime'];
			$t=$row['ttime'];
		    echo'<div class="tt_scon2">
                	<div class="tt_stime">'.date("g:i a", strtotime($f)).'</div>
                    <div class="tt_stime">'.date("g:i a", strtotime($t)).'</div>
                </div>';
				
		//-------------------- COLUMN 2----------------
		
					$res1=mysqli_query($con,"SELECT distinct roomno,sub,cls,division FROM timetable WHERE ftime='$f' and ttime='$t' and day='Monday'");
					if(mysqli_num_rows($res1)>0)
						{
							while($r1=mysqli_fetch_array($res1))
							{
								echo'<div class="tt_scon">
                	<div class="tt_sdata">'.$r1['sub'].'</div>
                    <div class="tt_sdata">'.$r1['cls'].'-'.$r1['division'].'</div>
                    <div class="tt_sdata">Room No.:'.$r1['roomno'].'</div>               
                	</div>';
							}
						}
						else
							{
								echo'<div class="tt_scon">
                	<div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>               
                	</div>';
							}
		 
           
         //-- ------------------Colum 3------------------- -->   
		     
              $res2=mysqli_query($con,"SELECT distinct roomno,sub,cls,division FROM timetable WHERE ftime='$f' and ttime='$t' and day='Tuesday'");
					if(mysqli_num_rows($res2)>0)
						{
							while($r2=mysqli_fetch_array($res2))
								{
							echo' <div class="tt_scon">
                	<div class="tt_sdata">'.$r2['sub'].'</div>
                    <div class="tt_sdata">'.$r2['cls'].'-'.$r2['division'].'</div>
                    <div class="tt_sdata">Room No.:'.$r2['roomno'].'</div>               
                	</div>';
								}
						}
						else
						{
							echo'<div class="tt_scon">
                	<div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>               
                	</div>';
						}
		
         
         //- ------------------Colum 4------------------- -->  
               
                $res3=mysqli_query($con,"SELECT distinct roomno,sub,cls,division FROM timetable WHERE ftime='$f' and ttime='$t' and day='Wednesday'");
					if(mysqli_num_rows($res3)>0)
						{
							while($r3=mysqli_fetch_array($res3))
							{
								echo' <div class="tt_scon">
                	<div class="tt_sdata">'.$r3['sub'].'</div>
                    <div class="tt_sdata">'.$r3['cls'].'-'.$r3['division'].'</div>
                    <div class="tt_sdata">Room No.:'.$r3['roomno'].'</div>               
                	</div>';
							}
						}
						else
						{
							echo'<div class="tt_scon">
                	<div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>               
                	</div>';
						}
         //-- ------------------Colum 5------------------- -->       
                
                $res4=mysqli_query($con,"SELECT distinct roomno,sub,cls,division FROM timetable WHERE ftime='$f' and ttime='$t' and day='Thursday'");
					if(mysqli_num_rows($res4)>0)
						{
							while($r4=mysqli_fetch_array($res4))
							{
								echo'<div class="tt_scon">
                	<div class="tt_sdata">'.$r4['sub'].'</div>
                    <div class="tt_sdata">'.$r4['cls'].'-'.$r4['division'].'</div>
                    <div class="tt_sdata">Room No.:'.$r4['roomno'].'</div>               
                	</div>';
							}
						}
						else
							{
								echo'<div class="tt_scon">
                	<div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>               
                	</div>';
							}
                
         // ------------------Colum 6------------------- -->       
                
                 $res5=mysqli_query($con,"SELECT distinct roomno,sub,cls,division FROM timetable WHERE ftime='$f' and ttime='$t' and day='Friday'");
					if(mysqli_num_rows($res5)>0)
						{
							while($r5=mysqli_fetch_array($res5))
								{
									echo' <div class="tt_scon">
                	<div class="tt_sdata">'.$r5['sub'].'</div>
                    <div class="tt_sdata">'.$r5['cls'].'-'.$r5['division'].'</div>
                    <div class="tt_sdata">Room No.:'.$r5['roomno'].'</div>               
              	    </div>';
								}
						}
						else
						{
							echo'<div class="tt_scon">
                	<div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>               
                	</div>';
						}
                
         //------------------Colum 7------------------- -->
                
                 $res6=mysqli_query($con,"SELECT distinct roomno,sub,cls,division FROM timetable WHERE ftime='$f' and ttime='$t' and day='Saturday'");
					if(mysqli_num_rows($res6)>0)
						{
							while($r6=mysqli_fetch_array($res6))
								{
									echo' <div class="tt_scon">
                	<div class="tt_sdata">'.$r6['sub'].'</div>
                    <div class="tt_sdata">'.$r6['cls'].'-'.$r6['division'].'</div>
                    <div class="tt_sdata">Room No.:'.$r6['roomno'].'</div>               
                	</div>';
								}
						}
						else
						{
							echo'<div class="tt_scon">
                	<div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>
                    <div class="tt_sdata"></div>               
                	</div>';
						}
		}
		?>           
            </div>            
       </div>


	</div>
</div>
    
    


</body>
</html>