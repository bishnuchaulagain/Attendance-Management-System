
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
if((isset($_POST["rid"])) && (isset($_POST["year"])) && (isset($_POST["section"])) && (isset($_POST["names"])) ){
	$id = $_POST["rid"];
	$year = $_POST["year"];
	$section=$_POST["section"];
	$sname = $_POST["names"];
	
	if($id=="" && $year=="" && $section == "" && $sname==""){
					$msg = "<font color=\"red\">All fields are required.</font>";

	}
	else{
	
	//new registration to  1-1 
	if($year == "I-I"){
					$sql = mysql_query("SELECT * FROM s1 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s1` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'I-I', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
	//for transfer students
	else if($year == "I-II"){
					$sql = mysql_query("SELECT * FROM s2 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s2` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'I-II', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
	//REGISTRATION FOR LATERAL ENTRY
	else if($year == "II-I"){
					$sql = mysql_query("SELECT * FROM s3 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s3` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'II-I', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
//TRANSFER STUDENTS II II
	else if($year == "II-II"){
					$sql = mysql_query("SELECT * FROM s4 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s4` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'II-II', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
	// III-I TRANSFER STUDENTS
	else if($year == "III-I"){
					$sql = mysql_query("SELECT * FROM s5 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s5` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'III-I', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
	
	//FOR TRANSFER STUDENTS III -II 
	else if($year == "III-II"){
					$sql = mysql_query("SELECT * FROM s6 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s6` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'III-II', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
	//FOR 4 1
	else if($year == "IV-I"){
					$sql = mysql_query("SELECT * FROM s7 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s7` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'IV-I', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}
	//FOR FINAL SEMESTER
	else if($year == "IV-II"){
					$sql = mysql_query("SELECT * FROM s8 where id='$id' ");
					$count = mysql_num_rows($sql);
				if($count){
					$msg = "<font color=\"red\">Sorry Students already registered</font>";
				}
				else{
					$sql1 = mysql_query("INSERT INTO `s8` (`id`, `sem`, `detained`,`sec`,`sname`) VALUES ('$id', 'IV-II', '0','$section','$sname')");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
	}

	
	//end of else which indicates not null
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
			<form method="post" action="student_register.php" name="regupdate">
			<table class="table table-bordered table-hover" width="500px">
			<caption align="center"><h3>New Students Registration </h3></caption>
			<tbody>
				<th class="danger" colspan="3">Registration				
				</th>
			<tr>
					<td class="info" colspan="3">
					<input type="text" name="names" class="form-control" placeholder="Name" />
						</td>
			</tr>
				<tr>
					<td class="info">	
						<input type="text" name="rid" class="form-control" placeholder="REG ID" />
					</td>
					<td class="info"> 	
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
					<td class="info"> 	
						<select name="section" class="form-control">
					<option value=""> -- Section--</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
			
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="Register">	
								<p>Note: To Promote the Students <a href="promote.php">Click here</a></p>	
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" class="success">
						<?php echo $msg; ?>
					</td>
				</tr>
			</tbody>			
			</table>
			</form>
		 </div>
		</div>
	</body>
</html>