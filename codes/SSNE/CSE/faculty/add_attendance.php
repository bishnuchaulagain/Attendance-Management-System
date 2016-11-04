
<?php
session_start();
include ("../include/connect.php");
     if(!isset($_SESSION["did"])){
       header("location:../index.php");
     }
	 else{
	
	   $check_did = $_SESSION["did"];
		if($check_did !=1){
			 header("location:../index.php");
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<title>
			SSN College OF Engineering & Technology :: Attendance System
		</title>
	</head>
	<body>
		<div class="container" align="center">
			<div class="head pull-left">
				<h2 class="pull-left">SSN<small>&nbsp;&nbsp;College of Engineering & Technology</small></h2>
			</div>
			<hr class="horline" width="100%" /> 
			<div><?php include("../include/facmenu.txt");?></div>
			<br/>
			<div class="promote">
			<form method="post" action="add_attendance.php" >
			<table class="table table-bordered table-hover" width="400px">
			<caption align="center"><h3>Add Student Attendance  </h3></caption>
			<tbody>
				<th class="danger" colspan="3">Select Semester	and Section		
				</th>
			
				<tr>
					<td class="active" colspan="2">	
								<select name="sem" class="form-control">
			<option >-- Semester --</option>
			<option value="I-I">I-I</option>
			<option value="I-II">I-II</option>
			<option value="II-I">II-I</option>
			<option value="II-II">II-II</option>
			<option value="III-I">III-I</option>
			<option value="III-II">III-II</option>
			<option value="IV-I">IV-I</option>
			<option value="IV-II">IV-II</option>
					
		</select>
					</td>
					<td class="active">	
								<select name="section" class="form-control">
			<option >-- Section --</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>

					
		</select>
					</td>
				</tr>
				<tr><td class="active" colspan="3"><input type="submit" class="btn btn-success" value="Get Sheet"/></td></tr>

			</tbody>			
			</table>
			</form>
		 </div>
		</div>

<?php
	include("../include/connect.php");
	$i=1;
	$j = 1;
	
if(isset($_POST["sem"]) && isset($_POST["section"])){
	$a = $_POST["sem"];
	$section = $_POST["section"];
	// for first year first semester attendance
	if($a == "I-I"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s1 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='I-I' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
				<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td>
				</tr></tbody></table>
				<input type='hidden' name='year' value='I-I'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	// for first year second semester attendance
	else if($a == "I-II"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s2 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='I-II' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td>
				</tr></tbody></table>
				<input type='hidden' name='year' value='I-II'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	// second year first semester attendance
	else if($a == "II-I"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s3 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='II-I' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='II-I'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	//second year second semester attendacne
	else if($a == "II-II"){
				$sql = mysql_query("SELECT id,sem,sec,sname FROM s4 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='II-II' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='II-II'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	//third year first semester attendance
	else if($a == "III-I"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s5 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='III-I' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='III-I'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	// third year second semester aattendance
	else if($a == "III-II"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s6 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='III-II' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='III-II'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	//fourth year first semester attendance
	else if($a == "IV-I"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s7 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='IV-I' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='IV-I'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	//fourth year second semester attendance
	else if($a == "IV-II"){
		$sql = mysql_query("SELECT id,sem,sec,sname FROM s8 WHERE sec = '$section'");
		$count =  mysql_num_rows($sql);
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='add_attendance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='3'>Student Attendance</th>
				<tr><td class='info'>			
				<input type='date' class='form-control' name='date' ></td>";
			  	echo "
				<td class='info'><select class='form-control' name='fac'>";
				 $ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` WHERE yr='IV-II' GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
				while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
				echo "
				</select></td>
								<td class='info'>
						<select name='period' class='form-control'>
							
							<option value='1'>Frist Hour</option>
							<option value='2'>Second Hour</option>
							<option value='3'>Third Hour</option>
							<option value='4'>Fourth Hour</option>
							<option value='5'>Fifth Hour</option>
							<option value='6'>Sixth Hour</option>
							<option value='7'>Seventh Hour</option>
						</select>
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='IV-II'/> 
				";
				while($row = mysql_fetch_array($sql)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$nm = $row["sname"];
					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						<input type='checkbox'  name='result$i' value='1'>&nbsp;<br/>
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> 
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Add'>	</td></tr>
				
				</table></form></div></div>";
	}
	
}
?>

<?php

	$msg="";
	$succ="";
	$count="";
	$sem="";
	$res="";
	$i=1;
	do{
	if(isset($_POST["ids$i"]) && isset($_POST["date"]) && (isset($_POST["period"]))){
		 if(isset($_POST["result$i"]) == null){
			$res = 0;
		 }
		 else{
			$res = $_POST["result$i"];
		}
		
		$period = $_POST["period"];
		$date = $_POST["date"];
		$count = $_POST["count"];
		$fac = $_POST["fac"];
		$sem = $_POST["year"];
		$sec = $_POST["sect$i"];
		$ides = $_POST["ids$i"];
		$names = $_POST["nm$i"];

		//first year attendance first semester
	 if($sem == "I-I"){
		$check = mysql_query("select id from a1 where(fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
		//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a1 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a1` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
		
	 }
	 // first year second semester attendance
	 else if($sem == "I-II"){
		$check = mysql_query("select id from a2 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
		//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a2 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a2` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
		
	 }
	 //second year first semester attendance
	 else if($sem == "II-I"){
		$check = mysql_query("select id from a3 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
		//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a3 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a3` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
		
	 }
	 // second year second semester attendance
	 else if($sem == "II-II"){
		$check = mysql_query("select id from a4 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
		//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a4 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a4` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
		
	 }
	 // third year first semester attendance
	 else if($sem == "III-I"){
		$check = mysql_query("select id from a5 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
	//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a5 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a5` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
	 }
	 // third year second semester attendance
	 else if($sem == "III-II"){
		$check = mysql_query("select id from a6 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
	//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a6 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a6` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
		
	 }
	 // fourth year first semester attendance
	 else if($sem == "IV-I"){
		$check = mysql_query("select id from a7 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period') ");
		$countCheck = mysql_num_rows($check);
//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a7 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a7` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
		
	 }
	 // fourth year second semenster attendance
	 else if($sem == "IV-II"){
		$check = mysql_query("select id from a8 where (fac='$fac' and day='$date') and (sec = '$sec' and per = '$period')  ");
		$countCheck = mysql_num_rows($check);
	
		//retriving the period to check whether attendance for that period is inserted within a day or not
		$checkSub = mysql_query("select per from a8 where day='$date' and per = '$period' and sec='$sec' ");
		$pers = mysql_num_rows($checkSub);
		//checking period
		if($pers == $count){
			// attendance for that period is already inserted
					echo "<div align='center'><font color='red'><b>Sorry the attendance for this period is already inserted</b></font></div>";
			break;
		}
		else{
		//attendance for that period is not inserted so insert into the database
		if($countCheck != $count){
			$sql1 = mysql_query("INSERT INTO `a8` (`id`, `sem`, `day`, `atten`, `fac`,`sec`,`per`,`sname`) VALUES ('$ides','$sem','$date','$res','$fac','$sec','$period','$names');");
		}
		else{
			echo "<div align='center'><font color='red'><b>Sorry the attendance for this subject is already inserted</b></font></div>";
			break;
		}
		}
				
	 }
	
	}
	$i++;

	}while($i<=$count);
	 
		
?>


	</body>
</html>