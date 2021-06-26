<?php
$sname="117.232.108.36";
$uname="mca2018";
$pswd="password18";
$dbname="dbmca2018";


$conn=new mysqli($sname,$uname,$pswd,$dbname);


if($conn->connect_error){
die("Connection failed: ">$conn->connect_error);
}
$book_no=$_POST['book_no'];
$book_name=$_POST['book_name'];
$book_edition=$_POST['book_edition'];
$book_publisher=$_POST['book_publisher'];
$sql=mysqli_query($conn,"insert into book_details values($book_no,'$book_name','$book_edition','$book_publisher')");
$query=mysqli_query($conn,"select * from book_details");
?>
 
<html>
<head>
<title>Details of Book</title>
</head>
<body>
<h2 align="center">All the Book Details </h2>
<table border="2" align="center">
<tr>
<th>Book No</th>
<th>Book Name</th>
<th>Edition</th>
<th>Publisher</th>
</tr>


<?php while($row=mysqli_fetch_assoc($query))
{


?>
<tr>
<td> <?php echo $row['book_no'];?></td>
<td> <?php echo $row['title'];?></td>
<td> <?php echo $row['edition'];?></td>
<td> <?php echo $row['publisher'];?></td>
</tr>


<?php
}
?>


</table>
 
</body>
</html>
