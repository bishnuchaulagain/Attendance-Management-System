<?php

session_start();

include ("../include/connect.php");
     if(!isset($_SESSION["did"])){
       header("location:../index.php");
     }
	 else{
	
	   $check_did = $_SESSION["did"];
		if($check_did !=2){
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
			<div><?php include("../include/hodmenu.txt");?></div>
			<br/>
			<div class="promote">
			<form method="post" action="edit_attandance.php" >
			<table class="table table-bordered table-hover" width="400px">
			<caption align="center"><h3>Edit Student Attendance  </h3></caption>
			<tbody>
				<th class="danger" colspan="3">Select Parameters to Edit Attendance	
				</th>
			
				<tr>
					<td class="active" colspan="2">	
								<select name="sem" class="form-control">
			<option > Select Semester</option>
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
			<option > Select Section</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>

					
		</select>
					</td>
				</tr>
				<tr>
					<td class="active" colspan="2">
					<select name="sub" class="form-control">
					<option > Select Subject</option>
					<?php
					$j=1;
					$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty` GROUP BY `name` ORDER BY `name`");
				    $count1= mysql_num_rows($ans);
					while($j<=$count1){
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
					$j++;
				};
					?>
					</select>
					</td>
					<td class="active">
						<input type='date' class='form-control' name='date'/>
					</td>
				
				</tr>
				<tr>
					<td class="active" colspan="3">
						<select name="period" class="form-control">
							<option> Select Period </option>
							<option value="1">Frist</option>
							<option value="2">Second</option>
							<option value="3">Third</option>
							<option value="4">Fourth</option>
							<option value="5">Fifth</option>
							<option value="6">Sixth</option>
							<option value="7">Seventh</option>
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
	
	$i=1;
	$j = 1;
	$subEdit="";
	$dateEdit="";
	
if(isset($_POST["sem"]) && isset($_POST["section"]) && isset($_POST["sub"]) && isset($_POST["period"]) && isset($_POST["date"])){
	$a = $_POST["sem"];
	$period = $_POST["period"];
	$section = $_POST["section"];
	$sub = $_POST["sub"];
	$dat = $_POST["date"];
	// for first year first semester attendance
	if($a == "I-I"){
		$sql = mysql_query("SELECT * FROM a1 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='I-I'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a1 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
					$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						
						echo "
						
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	// for editing 1-2 attendance
	else if($a == "I-II"){
		$sql = mysql_query("SELECT * FROM a2 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
			if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='I-II'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a2 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
					$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	//for editing 2-1 attendance
	else if($a == "II-I"){
		$sql = mysql_query("SELECT * FROM a3 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='II-I'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a3 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
										$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	//for editing 2-2 attendance
	else if($a == "II-II"){
		$sql = mysql_query("SELECT * FROM a4 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='II-II'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a4 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
										$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	//for edting 3-1 attendance
	else if($a == "III-I"){
		$sql = mysql_query("SELECT * FROM a5 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='III-I'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a5 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
										$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	// for editing 3-2 attendance
	else if($a == "III-II"){
		$sql = mysql_query("SELECT * FROM a6 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='III-II'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a6 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
										$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	// for editing 4-1 attendance
	else if($a == "IV-I"){
		$sql = mysql_query("SELECT * FROM a7 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='IV-I'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a7 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
										$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1' >";
						}
						else if($atten==0){
							echo	"<input type='checkbox'  name='result$i' value='1' >";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	// for editing 4-2 attendance
	else if($a == "IV-II"){
		$sql = mysql_query("SELECT * FROM a8 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
		$count =  mysql_num_rows($sql);
		if($count){
					echo "
					<div class='container'><div class='promotess'>
				<form method='post' action='edit_attandance.php'>
				<table class='table table-bordered table-hover'>
				<tbody>
				<th class='danger' colspan='2'>Student Attendance</th>
				<tr><td class='info'>	";
				while($row = mysql_fetch_array($sql)){
					$dateEdit = $row["day"];
					$subEdit = $row["fac"];
					$period = $row["per"];
				}
				//get date to edit attendance for that date
				echo "
				<input type='text' class='form-control' name='date' value='$dateEdit' readonly></td>";
				//get subject name to edit attendance for that subject
			  	echo "
				<td class='info'><input type='text' class='form-control' name='sub' value='$subEdit' readonly/>";
				//getting period and semister to edit the attendance
				echo "
				</td></tr></tbody></table>
				<input type='hidden' name='year' value='IV-II'/> 
				<input type='hidden' name='period' value='$period'/> 
				";
				$sql1 = mysql_query("SELECT * FROM a8 WHERE sec = '$section' and per='$period' and fac= '$sub' and day = '$dat' ");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					$sem = $row["sem"];
					$sections = $row["sec"];
					$atten = $row["atten"];
										$nm = $row["sname"];

					echo "
						<input type='text' readonly value='$nm' name='nm$i'>
						<input type='text' readonly value='$id' name='ids$i'>
						";
						//checking whether persent or absent perviously
						if($atten==1){
						
						echo	"<input type='checkbox'  name='result$i'checked='checked' value='1'>";
						}
						else{
							echo	"<input type='checkbox'  name='result$i' value='1'>";
						}
						//getting counter value and section for editing attendance
						echo "
						&nbsp;
					<input type='hidden' name='count' value='$count'/> 
					<input type='hidden' name='sect$i' value='$sections'/> <br>
				
					";
					$i++;
				}
				echo "		<table class='table'><tr><td colspan='2' align='center' class='info'> <input type='submit' class='btn btn-success' name='ok' value='Update Change'>	</td></tr>
				
				</table></form></div></div>";
		}
		else{
			echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
		}
	}
	
}

?>

<?php
	$i=1;
	$count="";
	$res = "";
	$sec = "";
	$id ="";
	$sem="";
	$subject ="";
	$period="";
	$date="";
	do{
		// checking and retriving the id posted by form2
		if( isset($_POST["ids$i"]) ){
				$sem = $_POST["year"];
				$sec = $_POST["sect$i"];
				$date=$_POST["date"];
				$id= $_POST["ids$i"];
				$nmup = $_POST["nm$i"];
				$subject = $_POST["sub"];
				$period = $_POST["period"];
				// counter value
				$count = $_POST["count"];
				//checking for checkbox value 
				if( ((isset($_POST["result$i"])) == null) || ((isset($_POST["result$i"])) == 0) ){
					$res = 0;
				}
				else{
					$res = $_POST["result$i"];
				}
				
			// update 1-1 attendance
			if($sem == "I-I"){
				$sql1 = mysql_query("UPDATE `a1` SET  `atten`='$res' WHERE (id='$id' and sec = '$sec' and per='$period' and sname='$nmup') and (fac= '$subject' and day = '$date')");
			}
			// update 1-2 attendance
			else if($sem == "I-II"){
				$sql1 = mysql_query("UPDATE `a2` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
			// update 2-1 attendance
			else if($sem == "II-I"){
				$sql1 = mysql_query("UPDATE `a3` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
			//update 2-2 attendance
			else if($sem == "II-II"){
				$sql1 = mysql_query("UPDATE `a4` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
			//update 3-1 attendance
			else if($sem == "III-I"){
				$sql1 = mysql_query("UPDATE `a5` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
			//update 3-2 attendance
			else if($sem == "III-II"){
				$sql1 = mysql_query("UPDATE `a6` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
			//update 4-1 attendance
			else if($sem == "IV-I"){
				$sql1 = mysql_query("UPDATE `a7` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
			//update 4-2 attendance
			else if($sem == "IV-II"){
				$sql1 = mysql_query("UPDATE `a8` SET  `atten`='$res' WHERE id='$id' and sec = '$sec' and per='$period' and sname='$nmup' and fac= '$subject' and day = '$date'");
			}
		}
		$i++;
	}while( $i <= $count );
	
?>


	</body>
</html>