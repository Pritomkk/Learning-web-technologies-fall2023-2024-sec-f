<?php
require_once('../Controller/SessionCheck.php');
?>

<?php
    $Name=$_SESSION['Name'];
?>


<center>
	<h1>Welcome <?php echo $Name?> </h1>
	<a href="profile.html">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="login.html">Logout</a>
</center>