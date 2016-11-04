
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
$msg ="";
if( (isset($_POST["year"])) && (isset($_POST["section"]))  ){
	
	$year = $_POST["year"];
	$section=$_POST["section"];
	
	
	if( $year=="" || $section == "" ){
					$msg = "<font color=\"red\">All fields are required.</font>";

	}

	
} 
if(isset($_POST["updateChange"])){
//getting year and section
$year = $_POST["year"];
$sec = $_POST["sec"];
		// FOR MONDAY	
	$mday = $_POST["Mday1"];
	$mper1 = $_POST["Mper1"]; 
	$mper2 = $_POST["Mper2"]; 
	$mper3 = $_POST["Mper3"]; 
	$mper4 = $_POST["Mper4"]; 
	$mper5 = $_POST["Mper5"]; 
	$mper6 = $_POST["Mper6"]; 
	$mper7 = $_POST["Mper7"]; 
	// for tuesday
	$tday = $_POST["Tday1"];
	$tper1 = $_POST["Tper1"]; 
	$tper2 = $_POST["Tper2"]; 
	$tper3 = $_POST["Tper3"]; 
	$tper4 = $_POST["Tper4"]; 
	$tper5 = $_POST["Tper5"]; 
	$tper6 = $_POST["Tper6"]; 
	$tper7 = $_POST["Tper7"]; 
	
	// for wednesday
	$wday = $_POST["Wday1"];
	$wper1 = $_POST["Wper1"]; 
	$wper2 = $_POST["Wper2"]; 
	$wper3 = $_POST["Wper3"]; 
	$wper4 = $_POST["Wper4"]; 
	$wper5 = $_POST["Wper5"]; 
	$wper6 = $_POST["Wper6"]; 
	$wper7 = $_POST["Wper7"]; 
	// FOR THURSDAY
	$thday = $_POST["THday1"];
	$thper1 = $_POST["THper1"]; 
	$thper2 = $_POST["THper2"]; 
	$thper3 = $_POST["THper3"]; 
	$thper4 = $_POST["THper4"]; 
	$thper5 = $_POST["THper5"]; 
	$thper6 = $_POST["THper6"]; 
	$thper7 = $_POST["THper7"]; 
	// FOR FRIDAY
	$fday = $_POST["Fday1"];
	$fper1 = $_POST["Fper1"]; 
	$fper2 = $_POST["Fper2"]; 
	$fper3 = $_POST["Fper3"]; 
	$fper4 = $_POST["Fper4"]; 
	$fper5 = $_POST["Fper5"]; 
	$fper6 = $_POST["Fper6"]; 
	$fper7 = $_POST["Fper7"]; 
	// FOR SATURDAY
	$sday = $_POST["Sday1"];
	$sper1 = $_POST["Sper1"]; 
	$sper2 = $_POST["Sper2"]; 
	$sper3 = $_POST["Sper3"]; 
	$sper4 = $_POST["Sper4"]; 
	$sper5 = $_POST["Sper5"]; 
	$sper6 = $_POST["Sper6"]; 
	$sper7 = $_POST["Sper7"]; 
	
	
	// updating change
	// for monday
	$monday = mysql_query("UPDATE  timetable SET per1='$mper1',per2='$mper2',per3='$mper3',per4='$mper4',per5='$mper5',per6='$mper6' ,per7='$mper7' WHERE day='$mday' and year='$year' and sec='$sec' ");
	
	// for tuesday
$tuesday = mysql_query("UPDATE  timetable SET per1='$tper1',per2='$tper2',per3='$tper3',per4='$tper4',per5='$tper5',per6='$tper6', per7='$tper7' WHERE day='$tday' and year='$year' and sec='$sec' ");
// for wednesday
$wednesday = mysql_query("UPDATE  timetable SET per1='$wper1',per2='$wper2',per3='$wper3',per4='$wper4',per5='$wper5',per6='$wper6', per7='$wper7' WHERE day='$wday' and year='$year' and sec='$sec' ");
// for thursday
$thursday = mysql_query("UPDATE  timetable SET per1='$thper1',per2='$thper2',per3='$thper3',per4='$thper4',per5='$thper5',per6='$thper6', per7='$thper7' WHERE day='$thday' and year='$year' and sec='$sec' ");
// for friday
$friday =mysql_query("UPDATE  timetable SET per1='$fper1',per2='$fper2',per3='$fper3',per4='$fper4',per5='$fper5',per6='$fper6', per7='$fper7' WHERE day='$fday' and year='$year' and sec='$sec' ");
// for saturday
$saturday = mysql_query("UPDATE  timetable SET per1='$sper1',per2='$sper2',per3='$sper3',per4='$sper4',per5='$sper5',per6='$sper6', per7='$sper7' WHERE day='$sday' and year='$year' and sec='$sec' ");
	
	$msg = "<font color=\"green\">Success.</font>";
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
			<form method="post" action="edit_timetable.php" name="regupdate">
			<table class="table table-bordered table-hover" width="600px">
			<caption align="center"><h3>Edit Time Table  </h3></caption>
			<tbody>
				<th class="danger" colspan="4">Time Table Edit				
				</th>
			</td>
			</tr>
				<tr>
				
					<td class="info" colspan="2"> 	
						<select name="year" class="form-control">
					<option value="">-- SELECT SEMESTER--</option>
								
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
					<td class="info" colspan="2"> 	
						<select name="section" class="form-control">
					<option value=""> -- Section--</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
			
						</select>
						
					</td>
				</tr>
			
				<tr>
					<td colspan="4" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="Get Form">	
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center" class="success">
						<?php echo $msg; ?>
					</td>
				</tr>
			</tbody>			
			</table>
			</form>
		 </div>
<?php if( (isset($_POST["year"])) && (isset($_POST["section"]))  ){
	
	$year = $_POST["year"];
	$section=$_POST["section"];
	
	
	if( $year=="" || $section == "" ){
					$msg = "<font color=\"red\">All fields are required.</font>";

	}
	else{
		// both values are passed so display form to edit
		echo "
		<form method='post' action='edit_timetable.php'>
		<table class='table table-hover table-bordered' width='600px'>";
		echo '				<tr>
					<td class="danger">Day</td><td class="danger">Period-I</td><td class="danger">Period-II</td><td class="danger">Period-III</td><td class="danger">Period-IV</td><td class="danger">Period-V</td><td class="danger">Period-VI</td><td class="danger">Period-VII</td>
				</tr>';
			// for monday
			// for first period
		echo '				<tr>
				<td class="info"><input type="text" name="Mday1" class="form-control" Readonly value="MONDAY"/></td>
				<td class="info">
				<select name="Mper1" class="form-control">';
				$get1 = mysql_query("select per1 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per1"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		
		// for second period
		echo '				
				
				<td class="info">
				<select name="Mper2" class="form-control">';
				$get1 = mysql_query("select per2 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per2"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// third period
		echo '				
				
				<td class="info">
				<select name="Mper3" class="form-control">';
				$get2 = mysql_query("select per3 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per3"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
//fourth period
		echo '				
				
				<td class="info">
				<select name="Mper4" class="form-control">';
				$get2 = mysql_query("select per4 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per4"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
			// fifth period
		echo '				
				
				<td class="info">
				<select name="Mper5" class="form-control">';
				$get2 = mysql_query("select per5 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per5"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// sixth period
		echo '				
				
				<td class="info">
				<select name="Mper6" class="form-control">';
				$get2 = mysql_query("select per6 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per6"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
	//seventh period
		echo '				
				
				<td class="info">
				<select name="Mper7" class="form-control">';
				$get2 = mysql_query("select per7 from timetable WHERE day = 'MONDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per7"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		echo "</tr>"; //end for monday
		//FOR TUESDAY
			// for first period
		echo '				<tr>
				<td class="info"><input type="text" name="Tday1" class="form-control" Readonly value="TUESDAY"/></td>
				<td class="info">
				<select name="Tper1" class="form-control">';
				$get1 = mysql_query("select per1 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per1"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		
		// for second period
		echo '				
				
				<td class="info">
				<select name="Tper2" class="form-control">';
				$get1 = mysql_query("select per2 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per2"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// third period
		echo '				
				
				<td class="info">
				<select name="Tper3" class="form-control">';
				$get2 = mysql_query("select per3 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per3"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
//fourth period
		echo '				
				
				<td class="info">
				<select name="Tper4" class="form-control">';
				$get2 = mysql_query("select per4 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per4"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
			// fifth period
		echo '				
				
				<td class="info">
				<select name="Tper5" class="form-control">';
				$get2 = mysql_query("select per5 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per5"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// sixth period
		echo '				
				
				<td class="info">
				<select name="Tper6" class="form-control">';
				$get2 = mysql_query("select per6 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per6"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
	//seventh period
		echo '				
				
				<td class="info">
				<select name="Tper7" class="form-control">';
				$get2 = mysql_query("select per7 from timetable WHERE day = 'TUESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per7"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		echo "</tr>"; //end for TUESDAY
	//FOR WEDNESDAY 
			// for first period
		echo '				<tr>
				<td class="info"><input type="text" name="Wday1" class="form-control" Readonly value="WEDNESDAY"/></td>
				<td class="info">
				<select name="Wper1" class="form-control">';
				$get1 = mysql_query("select per1 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per1"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		
		// for second period
		echo '				
				
				<td class="info">
				<select name="Wper2" class="form-control">';
				$get1 = mysql_query("select per2 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per2"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// third period
		echo '				
				
				<td class="info">
				<select name="Wper3" class="form-control">';
				$get2 = mysql_query("select per3 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per3"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
//fourth period
		echo '				
				
				<td class="info">
				<select name="Wper4" class="form-control">';
				$get2 = mysql_query("select per4 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per4"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
			// fifth period
		echo '				
				
				<td class="info">
				<select name="Wper5" class="form-control">';
				$get2 = mysql_query("select per5 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per5"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// sixth period
		echo '				
				
				<td class="info">
				<select name="Wper6" class="form-control">';
				$get2 = mysql_query("select per6 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per6"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
	//seventh period
		echo '				
				
				<td class="info">
				<select name="Wper7" class="form-control">';
				$get2 = mysql_query("select per7 from timetable WHERE day = 'WEDNESDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per7"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		echo "</tr>"; //end for WEDNESDAY
			// for THURSDAY
			// for first period
		echo '				<tr>
				<td class="info"><input type="text" name="THday1" class="form-control" Readonly value="THURSDAY"/></td>
				<td class="info">
				<select name="THper1" class="form-control">';
				$get1 = mysql_query("select per1 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per1"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		
		// for second period
		echo '				
				
				<td class="info">
				<select name="THper2" class="form-control">';
				$get1 = mysql_query("select per2 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per2"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// third period
		echo '				
				
				<td class="info">
				<select name="THper3" class="form-control">';
				$get2 = mysql_query("select per3 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per3"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
//fourth period
		echo '				
				
				<td class="info">
				<select name="THper4" class="form-control">';
				$get2 = mysql_query("select per4 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per4"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
			// fifth period
		echo '				
				
				<td class="info">
				<select name="THper5" class="form-control">';
				$get2 = mysql_query("select per5 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per5"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// sixth period
		echo '				
				
				<td class="info">
				<select name="THper6" class="form-control">';
				$get2 = mysql_query("select per6 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per6"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
	//seventh period
		echo '				
				
				<td class="info">
				<select name="THper7" class="form-control">';
				$get2 = mysql_query("select per7 from timetable WHERE day = 'THURSDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per7"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		echo "</tr>"; //end for THURSDAY
			// for FRIDAY
			// for first period
		echo '				<tr>
				<td class="info"><input type="text" name="Fday1" class="form-control" Readonly value="FRIDAY"/></td>
				<td class="info">
				<select name="Fper1" class="form-control">';
				$get1 = mysql_query("select per1 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per1"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		
		// for second period
		echo '				
				
				<td class="info">
				<select name="Fper2" class="form-control">';
				$get1 = mysql_query("select per2 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per2"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// third period
		echo '				
				
				<td class="info">
				<select name="Fper3" class="form-control">';
				$get2 = mysql_query("select per3 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per3"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
//fourth period
		echo '				
				
				<td class="info">
				<select name="Fper4" class="form-control">';
				$get2 = mysql_query("select per4 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per4"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
			// fifth period
		echo '				
				
				<td class="info">
				<select name="Fper5" class="form-control">';
				$get2 = mysql_query("select per5 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per5"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// sixth period
		echo '				
				
				<td class="info">
				<select name="Fper6" class="form-control">';
				$get2 = mysql_query("select per6 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per6"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
	//seventh period
		echo '				
				
				<td class="info">
				<select name="Fper7" class="form-control">';
				$get2 = mysql_query("select per7 from timetable WHERE day = 'FRIDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per7"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		echo "</tr>"; //end for FRIDAY
			// for SATURDAY
			// for first period
		echo '				<tr>
				<td class="info"><input type="text" name="Sday1" class="form-control" Readonly value="SATURDAY"/></td>
				<td class="info">
				<select name="Sper1" class="form-control">';
				$get1 = mysql_query("select per1 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per1"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		
		// for second period
		echo '				
				
				<td class="info">
				<select name="Sper2" class="form-control">';
				$get1 = mysql_query("select per2 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get1)){
					$sub = $row["per2"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// third period
		echo '				
				
				<td class="info">
				<select name="Sper3" class="form-control">';
				$get2 = mysql_query("select per3 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per3"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
//fourth period
		echo '				
				
				<td class="info">
				<select name="Sper4" class="form-control">';
				$get2 = mysql_query("select per4 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per4"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
			// fifth period
		echo '				
				
				<td class="info">
				<select name="Sper5" class="form-control">';
				$get2 = mysql_query("select per5 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per5"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		// sixth period
		echo '				
				
				<td class="info">
				<select name="Sper6" class="form-control">';
				$get2 = mysql_query("select per6 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per6"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
	//seventh period
		echo '				
				
				<td class="info">
				<select name="Sper7" class="form-control">';
				$get2 = mysql_query("select per7 from timetable WHERE day = 'SATURDAY' AND sec = '$section' AND year = '$year' LIMIT 1 ");
				while($row = mysql_fetch_array($get2)){
					$sub = $row["per7"];
				echo "<option value='$sub'>$sub</option>";
				}
				$ans = mysql_query("SELECT COUNT(*) AS `Rows`, `name` FROM `faculty`  GROUP BY `name` ORDER BY `name`");				
					while($row = mysql_fetch_array($ans)){
						 $fname = $row["name"];
						echo "<option value='$fname'>$fname</option>";	
					}
			echo "<option value=\"---\">No Period </option>			</select>
				</td>";
		echo "</tr>"; //end for SATURDAY
		echo "<tr><input type='hidden' name='year' value='$year'/>
		<input type='hidden' name='sec' value='$section'/><td class='info' colspan='8'><input type='submit' class='btn btn-success' name='updateChange' value='Update Change'/></td></tr>";
				
		echo "</table>";
		echo "</form>";
	
	//end of else which indicates not null
	}
	
} ?>
		</div>
	</body>
</html>