<?php
session_start();
include "../config/db.php";

$msg='';

if($_POST){
$user=$_POST['username'];
$pass=$_POST['password'];

$q=$conn->query("SELECT * FROM admins WHERE username='$user' AND password='$pass'");
if($q->rowCount()>0){
$_SESSION['admin']=1;
header("Location: dashboard.php");
exit;
}else{
$msg="Invalid Login";
}
}
?>

<html>
<body style="font-family:Arial;padding:40px">
<h2>Admin Login</h2>

<form method="post">
<input name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<button>Login</button>
</form>

<p><?php echo $msg; ?></p>
</body>
</html>
