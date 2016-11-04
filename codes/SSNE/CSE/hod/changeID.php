
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
$ck="";
$id = $_SESSION["id"];
//checking whether new id is passed or not
if(isset($_POST["old_Id"]) && isset($_POST["new_Id"])){
	$newID = $_POST["new_Id"];
	$old = $_POST["old_Id"];
	//retriving data to check old id
	$sql1 = mysql_query("SELECT * FROM user WHERE  userId = '$old' ");
	while($row= mysql_fetch_array($sql1)){
		$ck = $row["userId"];
	}

	if($ck == $old){
		//means success so updating
		$sql = mysql_query("UPDATE user SET userId = '$newID' WHERE userId = '$old' ");
		$msg = "<div align='center'><font color='green'>Successfully Changed</font></div>";
		
	}
	else{
		//means some error occured
		$msg = "<div align='center'><font color='red'>Sorry wrong ID, try again</font></div>";
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
			<form method="post" action="changeID.php" name="regupdate">
			<table class="table table-bordered table-hover" width="400px">
			<caption align="center"><h3>Change ID </h3></caption>
			<tbody>
					<th class="danger" colspan="2">New ID				
				</th>
				<tr>
					<td class="active" colspan="2">	
						<input type="text" class="form-control" placeholder="Old ID" name="old_Id"/>
						</select>
					</td>
		
				</tr>
				<tr>
					<td class="active" colspan="2">	
						<input type="text" class="form-control" placeholder="New ID" name="new_Id"/>
						</select>
					</td>
		
				</tr>
				<tr>
					<td colspan="2" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="Change">	
								<p>Note: To change Password <a href="changePWD.php">Click here</a></p>	
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="success">
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