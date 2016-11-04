
<?php
	if(isset($_POST["department"])){
		$dept = $_POST["department"];
		if($dept =="CSE"){
			header("location:SSNO/CSE/index.php");
		}
		else if($dept =="ECE"){
			header("location:SSNO/ECE/index.php");
		}
		else if($dept =="CIVIL"){
			header("location:SSNO/CIVIL/index.php");
		}
		else if($dept =="MECH"){
			header("location:SSNO/MECH/index.php");
		}
		else if($dept =="EEE"){
			header("location:SSNO/EEE/index.php");
		}
	}
?>
<?php
	if(isset($_POST["departmentssne"])){
		$dept = $_POST["departmentssne"];
		if($dept =="CSE"){
			header("location:SSNE/CSE/index.php");
		}
		else if($dept =="ECE"){
			header("location:SSNE/ECE/index.php");
		}
		else if($dept =="CIVIL"){
			header("location:SSNE/CIVIL/index.php");
		}
		else if($dept =="MECH"){
			header("location:SSNE/MECH/index.php");
		}
		else if($dept =="EEE"){
			header("location:SSNE/EEE/index.php");
		}
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>
			SSN College OF Engineering & Technology :: Attendance System
		</title>
	</head>
	<body class="forms">
		<div class="container" align="center">
			<div class="head pull-left">
				<h2 class="pull-left">SSN<small>&nbsp;&nbsp;College of Engineering & Technology</small></h2>
			</div>
			<hr class="horline" width="100%" />
			<br/>
			<div  width="100%" align="justify">
				<br/>
				SSN Attendance System is a digitalized method for managing the attendance of the students studying at SSN College of engineering and technolgy.
				It provides an automated method for generation of report, calculation of the attendance percentage, information about the students attending the class of particulr faculty and many more. It is developed to ease the task of the particular 
				department. It saves the time, effort than doing things manually on paper and is less error prone.
			</div>
			<br/>
			<form method="post" action="index.php" >
			<table width="40%" class="table table-bordered table-hover">
		
				<tbody>
				 <tr>
					<td class="success">
						<select name="college" class="form-control" onChange="this.form.submit()">
							<option>Select Department College Proceed </option>
							<option value="SSNO">SSNO</option>
							<option value="SSNE">SSNE</option>

						</select>
						<noscript><input type="submit" value="Go" class="btn btn-success" /></noscript>
					</td>
				
											
				 </tr>
				</tbody>
			</table>
			</form>
<?php
	if(isset($_POST["college"])){
		$dept = $_POST["college"];
		if($dept =="SSNO"){
			echo '
										<form method="post" action="index.php" >
			<table width="40%" class="table table-bordered table-hover">
		
				<tbody>
				 <tr>
					<td class="success">
						<select name="department" class="form-control" onChange="this.form.submit()">
							<option>SSNO Select Department to Proceed </option>
							<option value="CSE">CSE</option>
							<option value="ECE">ECE</option>
							<option value="CIVIL">CIVIL</option>
							<option value="EEE">EEE</option>
							<option value="MECHANICAL">MECHANICAL</option>

						</select>
						<noscript><input type="submit" value="Go" class="btn btn-success" /></noscript>
					</td>
				
											
				 </tr>
				</tbody>
			</table>
			</form>			
			';
		}
		else if($dept =="SSNE"){
			echo '
										<form method="post" action="index.php" >
			<table width="40%" class="table table-bordered table-hover">
		
				<tbody>
				 <tr>
					<td class="success">
						<select name="departmentssne" class="form-control" onChange="this.form.submit()">
							<option>SSNE Select Department to Proceed </option>
							<option value="CSE">CSE</option>
							<option value="ECE">ECE</option>
							<option value="CIVIL">CIVIL</option>
							<option value="EEE">EEE</option>
							<option value="MECHANICAL">MECHANICAL</option>

						</select>
						<noscript><input type="submit" value="Go" class="btn btn-success" /></noscript>
					</td>
				
											
				 </tr>
				</tbody>
			</table>
			</form>			
			';
		}

	}
?>
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<footer align="center">
			Department of Computer Science & Engineering<br/>SSN College Of Engineering & Technology.
		</footer>
	</body>
</html>