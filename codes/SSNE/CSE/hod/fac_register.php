
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
$ids="";
$name="";
if((isset($_POST["fname"])) && (isset($_POST["fid"])) &&(isset($_POST["pass"])) ){
	$fnames = $_POST["fname"];
	$userid = $_POST["fid"];
	$deg =$_POST["desg"];
	$password = $_POST["pass"];
	//for faculty
	if($deg ==1){
	//retrive 
 	
	$sql = mysql_query("select userId,fname from user where did='1' and fname='$fnames' ");
	//retriving id to check
	while($row = mysql_fetch_array($sql)){
			$ids = $row["userId"];
			$name = $row["fname"];
		}
	 if(($fnames == $name) || ($userid == $ids)){
		$msg = "<div align='center'> <font color='red'>Already registered</font></div>";
		
	 }else{
	// echo "hi";
		//not yet registered so register new faculty with new id and password
		$insert = mysql_query("INSERT INTO user (userId,fname,password,did) VALUES ('$userid','$fnames','$password','1') ");
		if($insert){
			$msg = "<div align='center'> <font color='green'>Success</font></div>";
		}
	}
	}
	else if($deg==3){
	//retrive 
 	
	$sql = mysql_query("select userId,fname from user where did='3' and fname='$fnames' ");
	//retriving id to check
	while($row = mysql_fetch_array($sql)){
			$ids = $row["userId"];
			$name = $row["fname"];
		}
	 if(($fnames == $name) || ($userid == $ids)){
		$msg = "<div align='center'> <font color='red'>Already registered</font></div>";
		
	 }else{
	// echo "hi";
		//not yet registered so register new faculty with new id and password
		$insert = mysql_query("INSERT INTO user (userId,fname,password,did) VALUES ('$userid','$fnames','$password','3') ");
		if($insert){
			$msg = "<div align='center'> <font color='green'>Success</font></div>";
		}
	}
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
			<form method="post" action="fac_register.php" name="regupdate">
			<table class="table table-bordered table-hover" width="500px">
			<caption align="center"><h3>New Faculty Registration </h3></caption>
			<tbody>
				<th class="danger" colspan="3">Registration				
				</th>
			
				<tr>
					<td class="active" colspan="2">	
						<input type="text" name="fname" class="form-control" placeholder="NAME" />
					</td>
						<td class="active" colspan="2">	
						<select name="desg" class="form-control">
							<option value="1">Faculty</option>
							<option value="3">Principal</option>
						</select>
					</td>
					
					
				</tr>
				<tr>
					<td class="danger" colspan="3">Faculty SignUp	</td>
				</tr>
				<tr>
					<!-- Textbox for faculty signup -->
					<td class="active"><input type="text" name="fid" class="form-control" placeholder="FACULTY ID" />	</td>
					<td class="active" colspan="2">	<input type="password" name="pass" class="form-control" placeholder="Create Password" /></td>
				</tr>
				<tr>
					<td colspan="3" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="Register">	
								
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