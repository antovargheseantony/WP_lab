<?php session_start();
 
$sname="117.232.108.36";
$uname="mca2018";
$pswd="password18";
$dbname="dbmca2018";


$conn=new mysqli($sname,$uname,$pswd,$dbname);


if($conn->connect_error)
die("Connection failed: ">$conn->connect_error);



if(isset($_POST['submit']))
{

$user=$_POST['username'];
$pswd=$_POST['password'];
$sql=mysqli_query($conn,"select * from login where username='$user' and password='$pswd'");


if(mysqli_num_rows($sql)>0)
{

$_SESSION['login_user'] = $user;


header("location:pgm5wel.php");
}


$sql=mysqli_query($conn,"select * from login where password='$pswd'"); if(mysqli_num_rows($sql)>0)
 
{



 






}
else
{
 
echo "<script>alert('Incorrect Username!!!!!!!!!!!');</script>"; echo '<script type="text/javascript"> location.replace("pgm5.php");
</script>';





$sql=mysqli_query($conn,"select * from login where
 
username='$user'");
if(mysqli_num_rows($sql)>0)
{

echo "<script>alert('Incorrect Password!!!!!!!!!!!');</script>"; echo '<script type="text/javascript"> location.replace("pgm5.php");
</script>';
}
}



}
?>
