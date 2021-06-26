<html>
<head>
<style > table{ width:50%;
background-color: AntiqueWhite;
}

</style>
<title>Details</title>
</head>
<body bgcolor="Black">
<h2 align="center" style="color:white"> <u>Details of <?php echo $_REQUEST['name1'];
?></u> </h2>
<?php


if(isset($_REQUEST['button']))
{

$name=$_REQUEST['name1'];
$mail=$_REQUEST['email'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$num=$_REQUEST['num'];
} ?>


<table align="center" border="2">
<tr>
<td>Name </td>
<td> <?php echo $name ?> </td>
 
</tr>
<tr>
<td>Address</td>
<td> <?php echo $address ?> </td>
</tr>
<tr>
<td>Email Id</td>
<td> <?php echo $mail ?> </td>
</tr>
<tr>
<td>Gender</td>
<td> <?php echo $gender ?> </td>
</tr>
<tr>
<td>Date of Birth</td>
<td> <?php echo $dob ?> </td>
</tr>
<tr>
<td>Contact Number</td>
<td> <?php echo $num ?> </td>
</tr>
</table>
</body>
</html>
