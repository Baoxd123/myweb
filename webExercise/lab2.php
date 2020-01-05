<!DOCTYPE html> 
<html> 
    <head>
        <title>Here you are </title>
        <meta charset = "utf-8"/>
</head>
<style type="text/css">
     body{
        background-color:#b0c4de;
    }
    .a{
        font-family:"SimHei";
    }

    .c{
        text-align:center;
    }
</style>
<body> 

<?php 
$name = $_POST["name"];
$address = $_POST["address"];
$zip = $_POST["zip"];
$webTech = $_POST["webTech"];
$math = $_POST["math"];
$poo = $_POST["poo"];
$tom = $_POST["tom"];
$payment = $_POST["payment"];

if($math=="") $math=0;
if($webTech=="") $webTech=0;
if($poo=="") $poo=0;
if($tom=="") $tom=0;

$webTech_cost=5.0*$webTech;
$math_cost=6.2*$math;
$poo_cost=10.0*$poo;
$tom_cost=7.8*$tom;
$total_cost = $math_cost+$webTech_cost+$poo_cost+$tom_cost;
$num=$webTech+$math+$poo+$tom;
?> 
<?php 
printf("customer name:$name<br>customer address:$address<br>customer zip:$zip");
?>
<table border="1">
    <caption>Order information</caption>
    <tr>
            <th>book</th>
            <th>publisher</th>
            <th>price</th>
            <th>total cost</th>
</tr>
<tr>
                <td>Web technology</td>
                <td>Spring press</td>
                <td><?php printf("$$webTech_cost"); ?></td>
                <td rowspan="4"  >
                   <?php printf("$$total_cost");?>
                </td>
               
            </tr>
            <tr>
                <td>mathematics</td>
                <td>ACM press</td>
                <td><?php printf("$$math_cost"); ?></td>
               
               
            </tr>
            <tr>
                <td>principle of OS</td>
                <td>Science press</td>
                <td><?php printf("$$poo_cost"); ?></td>
                
              
            </tr>
            <tr>
                <td>Theory of matrix</td>
                <td>High education press</td>
                <td><?php printf("$$tom_cost"); ?></td>
               
            </tr>
</table>
  <?php
  printf("$name has bought $num books.<br>$name paid $$total_cost.<br>paid by $payment.");
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "$name has bought $num books.\n$name paid $$total_cost.\npaid by $payment.";
fwrite($myfile, $txt);
fclose($myfile);
  ?>
</body> 
</html>