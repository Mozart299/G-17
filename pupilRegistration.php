
<!DOCTYPE html>
<html>
<head>
<title>Pupil Registration Form</title>
<link rel="stylesheet" type="text/css" href=""/>
</head>

<body>
<h1>You can register your pupils here</h1>

 
//<?php
if(isset($_SESSION['status']))
{
    echo "<h5>".$_SESSION['status']."</h5>";
    unset($_SESSION['status']);
}
//?>

Pupil details form:
<section>
<form action="pupilRegistrationp.php" method="POST">
<label>Full Names</label><br>
<input type="text" name="pupilName" maxlength="20"/><br>
<label>userCode</label><br>
<input type="text" name="userCode" maxlength="20"/><br>
<label>Activation Status</label><br>
<input type="checkbox" name="activationStatus"  value="activated" default="checked"/>Activated
<label for="activated">Activated</label>
<input type="checkbox" name="activationStatus"  value="deactivated" default="checked"/>Deactivated
<label for="deactivated">Deactivated</label><br>
<button type="submit" name="register">Register</button>
</form>
</section>
<br><br>
<!--<?php include('deleteMark.php');?>-->

</form>
</body>
</html>