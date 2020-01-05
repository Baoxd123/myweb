<html>
    <head>
        <title>Order Confirm</title>
</head>
<body>
    <?php
    $name = $_POST["name"];
    $address = $_POST["address"];
$zip = $_POST["zip"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];
$pay = $_POST["pay"];
if($num1=="") $num1=0;
if($num2=="") $num2=0;
if($num3=="") $num3=0;
if($num4=="") $num4=0;

$sum1=5.0*$num1;
$sum2=6.2*$num2;
$sum3=10.0*$num3;
$sum4=7.8*$num4;
$total_num = $num1+$num2+$num3+$num4;
$total_cost=$sum1+$sum2+$sum3+$sum4;
?>
<?php
$con = mysqli_connect("localhost","root","");
if(!$con){die('Could no connect:'.mysqli_error($con));}

if(mysqli_query($con,"CREATE DATABASE IF NOT EXISTS WebExp"))
{
    echo "Database created";
}else{
    echo "Database create failed".mysqli_error($con);
}
mysqli_select_db($con,"WebExp");
$con=mysqli_connect("localhost","root","","WebExp");
$sql="CREATE TABLE IF NOT EXISTS person
(
    name varchar(30) PRIMARY KEY,
    address VARCHAR(30),
    zip varchar(15)
)";
mysqli_query($con,$sql);
$sql="CREATE table if not exists book
(
    name varchar(30) PRIMARY KEY,
    publisher varchar(30),
    price double
)";
mysqli_query($con,$sql);
$sql="CREATE table if not exists info
(
    name varchar(30) PRIMARY KEY,
    web int,
    math int,
    principle int,
    theory int
)";
mysqli_query($con,$sql);
//地址存进表格
$sql="INSERT into person(name,address,zip)
VALUES('$name','$address','$zip')";
mysqli_query($con,$sql);

//信息添加进INFO的订单信息表
$sql="INSERT INTO info(name,web,math,principle,theory)
VALUES('$name',$num1,$num2,$num3,$num4)";
mysqli_query($con,$sql);
?>
<h2>sucess submit</h2>
<table>
    <form action="search.php" method="post">
        <tr>
            <td>search by mame:</td>
            <td><input type="text" name="name" value=""/></td>
</tr>
</table>
<input type="submit" value="submit"/>
<input type="reset" value="reset"/>
</body>
</html>