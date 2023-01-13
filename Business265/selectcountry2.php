<?php
require "connect.php";
$sql = "SELECT * FROM country";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
 
<table width="800" border="1">
  <tr>
  <th width="140"> <div align="center">ชื่่อประเทศ </th>
    <th width="90"> <div align="center">รหัสประเทศ </th>
  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
    <td>   
        <a href="detail2.php?CountryName=<?php echo $result["CountryName"]; ?>">
                                        <?php echo $result["CountryName"]; ?>
  </a>
    </td>
    <td><?php echo $result["CountryCode"]; ?></td>
                                                                                                                                                                                                                                
  </tr>
 
<?php
  }
?>
 
</table>
<?php
$conn = null;
?>
 

