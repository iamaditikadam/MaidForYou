<!DOCTYPE html>
<html>
	<head>
		<title> REGISTER </title>
		<link rel="stylesheet" href="merge2.css">

	</head>
	<body>

<?php
	include "connection.php";
	if(isset($_POST['sub']))
	{	
	$uname=$_POST['u_name'];
	$ucontact=$_POST['u_contact'];
	//$gen=$_POST['gender']
	$ucity=$_POST['city'];
	$uarea=$_POST['area'];
	$uaddress=$_POST['address'];
	$username=$_POST['username'];
	$upassword=$_POST['password'];
	$ucpassword = $_POST['cpassword'];
	//$uid=7; //select max(uid) from user1;
	$query="INSERT INTO user1(uname,ucontact,uarea,uaddress,ulogin_name,upwd) VALUES ('$uname','$ucontact','$uarea','$uaddress','$username','$upassword')";

	
	$result=pg_query($con,$query);
	/*if(!$result)
        	{
		 echo "No insertion";
		}
	else
		{
		   echo "inserted";
		}*/	
 	  
	if($upassword!=$ucpassword)
	{
		$message="Invalid password. Enter again.";
		echo"<script type='text/javascript'>alert('$message');</script>";
	}

}


	pg_close($con);

	include "connection.php";
	if(isset($_POST['sub']))
	{
	$mname=$_POST['m_name'];	
	$mcontact=$_POST['m_contact'];
	$mgen=$_POST['gender'];
	$mcity=$_POST['m_city'];
	$marea=$_POST['m_area'];
	$musername=$_POST['maiduname'];
	$pas=$_POST['maidpass'];
	$cpass=$_POST['maidconpass'];
	$mexp=$_POST['m_exp'];
	$skills=$_POST['skills'];	
	/*$mskills=implode(",",$skills);
	$category=$_POST['cleaning'];
	*/
	setcookie('mlogin',$msuername,time() + 3600);
	
	foreach($skills as $mskills)
	{
		echo $mskills;
	}	
	
	$qu="INSERT INTO maid(mname,marea,mcontact,mskills,mexp,mlogin,mpwd) VALUES('$mname','$marea','$mcontact','$mskills','$mexp','$musername','$pas')";

	
	$rs=pg_query($con,$qu);
	/*if(!$rs)
	{
		echo "No insertion";
	}
	else
	{
		echo "Inserted";
	}
	if($pas==$cpass)
	{
		echo "passwords match";
	}*/
	
	if($pas!=$cpass)
	{
		$message1="Invalid password. Enter again.";
		echo"<script type='text/javascript'>alert('$message');</script>";
	}
}
	pg_close($con);
?>


		<div  class="hero">
			
			<div  class="form-box" >
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="user()"> USER </button>
					<button type="button" class="toggle-btn" onclick="maid()"> MAID </button>
				</div>

			
			<form action="merge1.php" method="POST" id="user" class="input-group">
				Name:  <input type="text" class="input-field" name="u_name" required >
				
		               Contact-no:<input type="text"class="input-field"name="u_contact" required><br><br>

				City:
	   				 <select name="city" bgcolor="white">
						<option>Select one</option>
						<option value="Pune city">Pune city</option>
					</select><br><br>
	
				Area:
					<select name="area">
		<option>Select one</option>
		<option value="Somwar peth">Somwar peth</option>
		<option value="Mangalwar peth">Mangalwar peth</option>
		<option value="Budhwar peth">Budhwar peth</option>
		<option value="Guruwar peth">Guruwar peth</option>
		<option value="Shukrawar peth">Shukrawar peth</option>
		<option value="Shaniwar peth">Shaniwar peth</option>
		<option value="Raviwar peth<">Raviwar peth</option>
		<option value="Narayan peth">Narayan peth</option>
		<option value="Deccan">Deccan</option>
		<option value="FC Road">FC Road</option>
		<option value="SB Road">SB Road</option>
		<option value="MMCC">MMCC</option>
		<option value="Gokhale Nagar">Gokhale Nagar</option>
		<option value="BMCC">BMCC</option>
		<option value="SP College">SP College</option>
		<option value="Ganesh peth">Ganesh peth</option>
		<option value="Nana peth">Nana peth</option>
		<option value="PCMC">PCMC</option>
		<option value="Chinchwad">Chinchwad</option>
		<option value="Pimpri">Pimpri</option>
		<option value="Shivajinagar">Shivajinagar</option>
		<option value="Pune Railway Station">Pune Railway Station</option>
		<option value="Kasba peth">Kasba peth</option>
		<option value="Aundh">Aundh</option>
		<option value="Baner">Baner</option>
		<option value="Koregoan park">Koregoan park</option>
		<option value="Kothrud">Kothrud</option>
		<option value="Mayur Colony">Mayur Colony</option>
		<option value="Viman Nagar">Viman Nagar</option>
		<option value="Kalewadi">Kalewadi</option>
		<option value="Vadgoan sheri">Vadgoan sheri</option>
		<option value="JM Road">JM Road</option>
		<option value="Karishma Scty">Karishma Scty</option>
		<option value="Nadbhramha Sct">Nadbhramha Scty</option>
		<option value="Market yard">Market yard</option>
		<option value="Dhankawdi">Dhankawdi</option>
		<option value="Bavdhan">Bavdhan</option>
		<option value="Ravet">Ravet</option>
		<option value="Balewadi">Balewadi</option>
		<option value="Quarter Gate">Quarter Gate</option>
		<option value="Camp, Pune">Camp, Pune</option>
		<option value="Mhatre Bridge">Mhatre Bridge</option>
		<option value="Yash Lawns">Yash Lawns</option>
		<option value="Mukund Nagar">Mukund Nagar</option>
		<option value="HA Colony">HA Colony</option>
		<option value="Sinhgad Road">Sinhgad Road</option>
		<option value="Vishrantwadi">Vishrantwadi</option>
		<option value="Hadapsar">Hadapsar</option>
		<option value="Fugewadi">Fugewadi</option>
		<option value="Kasarwadi">Kasarwadi</option>
		<option value="Kirkitwadi">Kirkitwadi</option>
		<option value="Shaniwarwada">Shaniwarwada</option>
		<option value="ABC">ABC</option>
		<option value="Neha Cafe">Neha Cafe</option>
		<option value="Dighi">Dighi</option>
		<option value="Warje">Warje</option>
		<option value="Bhosari">Bhosari</option>
		<option value="Sanghvi">Sanghvi</option>
		<option value="Dhayri">Dhayri</option>
			</select required><br><br>
	Address:<input type="text"class="input-field" name="address"required>	

	Username:<input type="text"class="input-field" name="username"required>
	Password:<input type="password"class="input-field" id="upass" name="password" onkeyup='uchkpwd();' required>
	Confirm Password:<input type="password"class="input-field" id="uconpass" class="cpassword"required><span id="mess"></span><br><br>
				<button type="submit" name="sub" class="submit-btn">  REGISTER</button><br>
				<button type="submit" onclick="location.href='prologin2.php'" class="submit-btn">LOGIN</button>
			</form>
				

	<form action="merge1.php" method="POST" id="maid" class="input-group">
		
	Name:<input type="text"class="input-field" name="m_name" required>
	Contact No:<input type="text"class="input-field" name="m_contact" required>
	
	City:
	<select name="m_city">
		<option>Select one</option>
		<option value="Pune city">Pune city</option>
	<select>
	<br><br>
	Area:<select name="m_area">
		<option>Select one</option>
		<option value="Somwar peth">Somwar peth</option>
		<option value="Mangalwar peth">Mangalwar peth</option>
		<option value="Budhwar peth">Budhwar peth</option>
		<option value="Guruwar peth">Guruwar peth</option>
		<option value="Shukrawar peth">Shukrawar peth</option>
		<option value="Shaniwar peth">Shaniwar peth</option>
		<option value="Raviwar peth<">Raviwar peth</option>
		<option value="Narayan peth">Narayan peth</option>
		<option value="Deccan">Deccan</option>
		<option value="FC Road">FC Road</option>
		<option value="SB Road">SB Road</option>
		<option value="MMCC">MMCC</option>
		<option value="Gokhale Nagar">Gokhale Nagar</option>
		<option value="BMCC">BMCC</option>
		<option value="SP College">SP College</option>
		<option value="Ganesh peth">Ganesh peth</option>
		<option value="Nana peth">Nana peth</option>
		<option value="PCMC">PCMC</option>
		<option value="Chinchwad">Chinchwad</option>
		<option value="Pimpri">Pimpri</option>
		<option value="Shivajinagar">Shivajinagar</option>
		<option value="Pune Railway Station">Pune Railway Station</option>
		<option value="Kasba peth">Kasba peth</option>
		<option value="Aundh">Aundh</option>
		<option value="Baner">Baner</option>
		<option value="Koregoan park">Koregoan park</option>
		<option value="Kothrud">Kothrud</option>
		<option value="Mayur Colony">Mayur Colony</option>
		<option value="Viman Nagar">Viman Nagar</option>
		<option value="Kalewadi">Kalewadi</option>
		<option value="Vadgoan sheri">Vadgoan sheri</option>
		<option value="JM Road">JM Road</option>
		<option value="Karishma Scty">Karishma Scty</option>
		<option value="Nadbhramha Sct">Nadbhramha Scty</option>
		<option value="Market yard">Market yard</option>
		<option value="Dhankawdi">Dhankawdi</option>
		<option value="Bavdhan">Bavdhan</option>
		<option value="Ravet">Ravet</option>
		<option value="Balewadi">Balewadi</option>
		<option value="Quarter Gate">Quarter Gate</option>
		<option value="Camp, Pune">Camp, Pune</option>
		<option value="Mhatre Bridge">Mhatre Bridge</option>
		<option value="Yash Lawns">Yash Lawns</option>
		<option value="Mukund Nagar">Mukund Nagar</option>
		<option value="HA Colony">HA Colony</option>
		<option value="Sinhgad Road">Sinhgad Road</option>
		<option value="Vishrantwadi">Vishrantwadi</option>
		<option value="Hadapsar">Hadapsar</option>
		<option value="Fugewadi">Fugewadi</option>
		<option value="Kasarwadi">Kasarwadi</option>
		<option value="Kirkitwadi">Kirkitwadi</option>
		<option value="Shaniwarwada">Shaniwarwada</option>
		<option value="ABC">ABC</option>
		<option value="Neha Cafe">Neha Cafe</option>
		<option value="Dighi">Dighi</option>
		<option value="Warje">Warje</option>
		<option value="Bhosari">Bhosari</option>
		<option value="Sanghvi">Sanghvi</option>
		<option value="Dhayri">Dhayri</option>
</select required><br><br>
	

	Username:<input type="text"class="input-field" name="maiduname"required>
	Password:<input type="password"class="input-field" name="maidpass" class="conpass"required><br>
	Confirm Password:<input type="password"class="input-field"required><br>


	
<!--Age:<input type="number"size="8"class="input-field"><br><br>
Upload your image:<input type="file" class="input-field"color = white><br><br>-->
Skills:<br><br><input type="checkbox"name="skills[]" value="cleaning"><label> Cleaning </label>
	  <input type="checkbox"name="skills[]" value="cooking"><label> Cooking </label>
	  <input type="checkbox"name="skills[]" value="nursing"><label> Nursing </label>
	  <input type="checkbox"name="skills[]" value="babysitting"><label> Baby sitting </label>
	  <input type="checkbox"name="skills[]" value="elderlycare"><label> Elderly care </label><br><br> 
Experience:
<select name="m_exp">
<option>Select one</option>
<option value="3 months">3 months</option>
<option value="6 months">6 months</option>
<option value="9 months">9 months</option>
<option value="1 year">1 year</option>
<option value="2 years">2 years</option>
<option value="3 years">3 years</option>
<option value="5 years">5 years</option>
<option value="5 years and Above">5 years and Above</option></select><br><br>
				<button type="submit" class="submit-btn"> REGISTER </button><br>
				<button type="submit" onclick="location.href='prologin2.php'" class="submit-btn">LOGIN</button>
			</form>
			
		</div>
		</div>
	<script>
		var x = document.getElementById("user");
		var y = document.getElementById("maid");
		var z = document.getElementById("btn");

		function maid(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
			}
		function user(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
			}
	
	</script>
	
	
	</body>
</html>


<!--<?php
	include "connection.php";
	//if(isset($_POST['sub']))
	{	
	$uname=$_POST['u_name'];
	$ucontact=$_POST['u_contact'];
	//$gen=$_POST['gender']
	$ucity=$_POST['city'];
	$uarea=$_POST['area'];
	$uaddress=$_POST['address'];
	$username=$_POST['username'];
	$upassword=$_POST['password'];
	//echo $gen;
	//$uid=7; //select max(uid) from user1;
	$query="INSERT INTO user1(uname,ucontact,uarea,uaddress,ulogin_name,upwd) VALUES ('$uname','$ucontact','$uarea','$uaddress','$username','$upassword')";
/*	$query="INSERT INTO user1(,uname,ucontact,uarea,ulogin_name,upwd) VALUES (,'$uname','$ucontact','$uarea','$username','$upassword')";*/
	echo "hello";
	echo $query;	
	$result=pg_query($con,$query);
	if(!$result)
        	{
		 echo "No insertion";
		}
	else
		{
		   echo "inserted";
		}	
 	  }

	pg_close($con);

	include "connection.php";
	
	$mname=$_POST['m_name'];	
	$mcontact=$_POST['m_contact'];
	$mgen=$_POST['gender'];
	$mcity=$_POST['m_city'];
	$marea=$_POST['m_area'];
	$musername=$_POST['maiduname'];
	$pas=$_POST['maidpass'];
	$mexp=$_POST['m_exp'];
	$skills=$_POST['skills'];	
	/*$mskills=implode(",",$skills);
	$category=$_POST['cleaning'];
	*/
	setcookie('mlogin',$msuername,time() + 3600);
	
	foreach($skills as $mskills)
	{
		echo $mskills;
	}	
	
	$qu="INSERT INTO maid(mname,marea,mcontact,mskills,mexp,mlogin,mpwd) VALUES('$mname','$marea','$mcontact','$mskills','$mexp','$musername','$pas')";

	echo $qu;
	$rs=pg_query($con,$qu);
	if(!$rs)
	{
		echo "No insertion";
	}
	else
	{
		echo "Inserted";
	}

	pg_close($con);
?>
-->






