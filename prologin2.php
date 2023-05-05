<?php
 session_start();
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="prologin2.css">
    <body>
	<?php
	include "connection.php";

	if($con)
	{
		if(isset($_POST['user']))
		{
			$u=$_POST['usern'];
			$p=$_POST['pass'];
			$sql="select * from user1 where ulogin_name='$u' and upwd='$p'";
			$result=pg_query($con,$sql);
			$user_count = pg_num_rows($result);
			$login_check=pg_fetch_assoc($result);
			$_SESSION['ulogin_name']=$login_check['ulogin_name'];
			if($user_count==1)
				{
					
	       				header("location:ham.php");
				}
			else
				{
					$message="Username or Password Incorrect. \\n Try Again.";
					echo"<script type='text/javascript'>alert('$message');</script>";
				}
		}

		if(isset($_POST['maid']))
		{
			$u=$_POST['usern'];
			$p=$_POST['pass'];
			$sql="select * from maid where mlogin='$u' and mpwd='$p'";
		    $result=pg_query($con,$sql);
			$maid_count = pg_num_rows($result);
            $login_check=pg_fetch_assoc($result);
			$_SESSION['mlogin']=$login_check['mlogin'];
			
			if($maid_count==1)
				{
					
					header("location:maid.php");
				}
			else
				{
					$message="Username or Password Incorrect. \\n Try Again.";
					echo"<script type='text/javascript'>alert('$message');</script>";
				
				}
		}
		

	}
	else
	{
		echo "Connection failed";
	}
?>

        <div class="loginbox">
            <img src="avatarlog.jpg" class="avatar">
            <h1>Maid for you</h1>
            <form action="prologin2.php" method="POST">
                <p>Username</p>
                <input type="text" name="usern" required>
                <p>Password</p>
                <input type="password" name="pass" required>
                <input type="submit" name="user" value="Login as user">
		        <input type="submit" name="maid" value="Login as maid">

		
		
               
               <!--<a href="#">Forget Password?</a>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>-->
            <a href="merge1.php">Visiting first time?</a>
            </form>
            


        </div>
    </body>
</head>

</html>
