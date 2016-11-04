<?php
session_start();
//including the script to connect to mysql server and to select the db
include ("include/connect.php");
$id='';
$did='';
if(isset($_SESSION["did"])){
   	$vid = $_SESSION["did"];

		 if($vid==1){
			//go to faculty page
			header("location:faculty/index.php");
		}
		else if($vid==2){
			header("location:hod/index.php");
		}
		else if($vid==3){
			header("location:principal/index.php");
		}
	

}
//declaring variables to hod the value that is posted from the form
$error='';
if(isset($_POST["lid"]) && isset($_POST["lpwd"]) && isset($_POST["design"])){
	$login_id = preg_replace('#[^A-Za-z0-9_\&\*\#\@]#i', '', $_POST["lid"]); // filter everything but numbers and letters
	$login_pwd = preg_replace('#[^A-Za-z0-9_\&\*\#\@]#i', '', $_POST["lpwd"]); // filter everything but numbers and letters
	$login_design = preg_replace('#[^0-9]#i', '', $_POST["design"]); // filter everything but  letters
	// echo $login_id,$login_pwd,$login_design;
	//now checking with db
	 $sql = mysql_query("SELECT * FROM user  WHERE userId='$login_id' AND password='$login_pwd' AND did='$login_design' LIMIT 1"); // query the person
      
    if ($sql) { // evaluate the count
	     while($row = mysql_fetch_array($sql)){ 
                        $id = $row["id"];
			 $did = $row["did"];
		 }
		 if($did==1){
			//go to faculty page
			$_SESSION["id"] = $id;
			$_SESSION["did"] = $did;
			header("location:faculty/index.php");
		}
		else if($did==2){
			//go to hod
                        $_SESSION["id"] = $id;
						$_SESSION["did"] = $did;
			header("location:hod/index.php");
		}
		else if($did==3){
			//go to principal
                        $_SESSION["id"] = $id;
						$_SESSION["did"] = $did;
			header("location:principal/index.php");
		}
		else{
		     $error="Username or Password Invalid";
	      }

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
	<body>
		<div class="container" align="center">
			<div class="head pull-left">
				<h2 class="pull-left">SSN<small>&nbsp;&nbsp;College of Engineering & Technology</small></h2>
			</div>
			<hr class="horline" width="100%" />
			<br/>
			<div class="forms" align="center"><br/>
			    <h3>Login</h3><div class="login_error"><?php echo $error;?></div>
				<form method="post" name="login-form" action="index.php" class="login form-horizental" >
					<div class="form-group">
						<label for="loginId" class="control-label pull-left">Login ID</label>
						<input type="text" class="form-control" name="lid" placeholder="Tekraj"/>
						
					</div>
					<div class="form-group">
						<label for="loginpwd" class="control-label pull-left">Password</label>
						<input type="password" class="form-control" name="lpwd" placeholder="******"/>
						
					</div>
					<div class="form-group">
						<label for="loginselect" class="control-label pull-left">Designation</label>
						<select class="form-control" name="design">
							<option >--- Select ---</option>
							<option value="3">PRINCIPAL</option>
							<option value="2">H.O.D</option>
							<option value="1">FACULTY</option>
						</select>
						
					</div>
					<div class="form-group pull-left">
						<input type="submit" name="submit" class="btn btn-default" value="Sign In"/>
					</div>
				</form>
				<br/><br/><br/>
			</div>
		</div>    <br/><br/> <br/>
		<footer align="center">
			Department of Computer Science & Engineering<br/>SSN College Of Engineering & Technology.
		</footer>
	</body>
</html>