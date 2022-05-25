

<div class=out1 style='text-align:center; line-height:100px'><font face="DFKai-sb"  color="black" size="100px" align="center">乘客訂單
</font></div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lazybones";
 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("失敗: " . $conn->connect_error);
} 
 
$sql = "SELECT `count`, `cartype`, `carlevel`, `driversex`, `driverpmy`, `address` FROM `information` WHERE 1";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "人數: " . $row["count"]. " --車型: " . $row["cartype"]. " " . $row["carlevel"]."--司機:".$row["driversex"]."-".$row["driverpmy"]."--地址:".$row["address"]."<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>