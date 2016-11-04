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
			<div align="center" class="promote">
			<form method="post" action="view.php">			
			<table class="table table-bordered table-hover">
				<caption>View Student Attendance</caption>
				<tbody>
					<th class="danger" colspan="2">Student Attendance</th>
					<tr>
						<td class="active">
							<input type ="date" name="date" class="form-control"/>
						</td>
						<td class="active">
								<select name="sem" class="form-control">
			<option>Semester</option>
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
					
					</tr>
					<tr>
							<td class="active">
							<select name="subject" class="form-control">
							<option>Subject</option>
							<?php
							$j=1;
							//retriving the name of the subject from the database to display in the  select option
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
								<select name="section" class="form-control">
			<option >Section</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>

					
		     </select>
						</td>
					</tr>
					<tr>
					<td class="active" colspan="2">
						<input type="submit" name="submit" class="btn btn-success" value="Get Attendance"/>
					</td>
					</tr>
				</tbody>
			</table>
			</form>
			</div>
	<?php
				$i = 1;
				$stat="";
	 if( (isset($_POST["date"])) && (isset($_POST["sem"])) && (isset($_POST["subject"])) && (isset($_POST["section"])) ){
					$date = $_POST["date"];
					$sem = $_POST["sem"];
					$subject = $_POST["subject"];
					$section = $_POST["section"];
					
			// RETRIVING RESULT FOR I-I	
			if($sem == "I-I"){
				$sql1 = mysql_query("SELECT * FROM a1 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF I-II 
			else if($sem == "I-II"){
				$sql1 = mysql_query("SELECT * FROM a2 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF II-I 
			else if($sem == "II-I"){
				$sql1 = mysql_query("SELECT * FROM a3 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF II-II 
			else if($sem == "II-II"){
				$sql1 = mysql_query("SELECT * FROM a4 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF III-I 
			else if($sem == "III-I"){
				$sql1 = mysql_query("SELECT * FROM a5 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF III-II 
			else if($sem == "III-II"){
				$sql1 = mysql_query("SELECT * FROM a6 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF IV-I 
			else if($sem == "IV-I"){
				$sql1 = mysql_query("SELECT * FROM a7 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
			//RETRIVING ATTENDANCE OF IV-II 
			else if($sem == "IV-II"){
				$sql1 = mysql_query("SELECT * FROM a8 WHERE day = '$date' and fac = '$subject' and sec = '$section' ");
				$count = mysql_num_rows($sql1);
				echo "<table class='table table-bordered table-hover'>
				<th class='danger'>REG ID</th><th class='danger'>SECTION</th><th class='danger'>SUBJECT</th><th class='danger'>DATE</th><th class='danger'>ATTENDANCE</th>";
				if($count){
					while($row = mysql_fetch_array($sql1) ){
						$id = $row["id"];
						$sec = $row["sec"];
						$sub = $row["fac"];
						$date = $row["day"];
						$atten = $row["atten"];
						if($atten ==1){
							$stat='<font color="green">Present</font>';
						}
						else if($atten ==0){
							$stat='<font color="red">Absent</font>';
						}
						echo "
							<tr>
								<td class='info'>$id</td><td class='info'>$sec</td><td class='info'>$sub</td><td class='info'>$date</td><td class='info'>$stat</td>
							</tr>
						";
					}
				}
				else{
					echo "<div align='center'><b><font color='red'>Selection Parameter do not Match</font></b></div>";
				}
			}
	}

			?>
		</div>
	</body>
</html>