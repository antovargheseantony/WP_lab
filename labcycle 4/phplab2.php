<?php if($_POST)
{

$fact=1;
$num=$_POST['num']; for($x=$num;$x>=1;$x--)
$fact=$fact*$x;
echo "Factorail of $num= $fact";
 
}

?>
