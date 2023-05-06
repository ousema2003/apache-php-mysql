<html>
<head>
  <title>select from database</title>
</head>
<body>


<?php 
ini_set('display_errors', 1);
error_reporting(~0);
?>

<?php
 echo "<table border=1>";

$conn = new PDO('mysql:host=svc-mysqldb:3306;dbname=test','test','test');

$stmt = $conn->query("select * from tab1 order by col1 desc");


while ($row=$stmt->fetch()) {
    echo "<Tr><tD>".$row['col1']."</TD><td>".$row['col2']."</td>";
//    echo "abc ...";
}

echo "</table>";



?>
</body>
</html>

