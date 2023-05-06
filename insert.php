<html>
 
<head>
    <title>Insert In Database </title>
</head>
 
<body>
     
         <form action="insert.php" method="post">
             
             
            <p><label>ID :</label>
               <input type="text" name="col1"/></p>
 
             
            <p><label>description:</label>
               <input type="text" name="col2"/></p>

            <input name="ins" type="hidden" value="true"/> 
 
            <input type="submit" value="Submit"/>
         </form>
   
    <center>



        <?php
         if ($_POST['ins'] == 'true')
         {
            $conn = new PDO('mysql:host=svc-mysqldb:3306;dbname=test','test','test');
            $ident =  $_POST['col1'];
            $Desc = $_POST['col2'];
            $sql = "INSERT INTO test.tab1  VALUES ($ident,'$Desc');commit;";
            $conn->query($sql);
            
          }          
       ?>
    </center>
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
