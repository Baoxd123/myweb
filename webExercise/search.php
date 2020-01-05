<?php
$name=$_POST["name"];
?>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con){die('Could not connect:'.mysqli_error($con));}

$con=mysqli_connect("localhost","root","","WebExp");

$sql="SELECT web, math, principle, theory FROM INFO WHERE name='$name'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
echo"name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$name<br/>";
echo"bookname:Web Technology &nbsp&nbsp&nbsp   number:$row[web]<br/>";
echo"bookname: mathematics &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp number:$row[math]<br/>";
echo"bookname:principle of OS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp number:$row[principle]<br/>";
echo"bookname:Theory of matrix &nbsp&nbsp&nbsp number:$row[theory]<br/>";
