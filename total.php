<body style="width: 1400px; 
        overflow: hidden;  
        margin: auto;  
        margin: 150 0 0 400px;  
        padding: 80px;  
        background: linear-gradient(#e0f3fc,#f5ecec);  
        border-radius: 15px ;  ">

<?php
require_once('includes/load.php');

?>
<?php include_once('layouts/header.php'); ?>

<?php 
echo "<h3>";echo " Today's Total Ammount of Sale ";echo "</h3>";
$sql = "SELECT  SUM(qty) from sales";
$result = $db->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Quantity: ". $row['SUM(qty)'];
    echo "<br>";
}
 
echo "<h3>";echo " Today's Total Sale  ";echo "</h3>";
//sql query
$sql = "SELECT  SUM(price) from sales";
$result = $db->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo" Total Cost: ". $row['SUM(price)'];
    echo "<br>";
}
 
