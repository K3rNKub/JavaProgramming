<?php
require "connect.php";
$sql = "SELECT * FROM customer";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
 
<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสผู้ใช้ </th>
    <th width="140"> <div align="center">Name </th>
    <th width="120"> <div align="center">Birthdate </th>
    <th width="100"> <div align="center">Email </th>
    <th width="50"> <div align="center">ชื่อประเทศ </th>
    <th width="70"> <div align="center">ยอดหนี้ </th>
  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
    <td>   
        <a href="detail1.php?CustomerID=<?php echo $result["CustomerID"]; ?>">
                                        <?php echo $result["CustomerID"]; ?>
  </a>
    </td>
 
    <td>
        <?php echo $result["Name"]; ?>
    </td>
                                                                                                                                                                                                                                   
   <td><?php echo $result["Birthdate"]; ?></td>
    <td><?php echo $result["Email"]; ?></td>
    <td><?php echo $result["CountryCode"]; ?></td>
    <td><?php echo $result["OutstandingDebt"]; ?></td>
    
  </tr>
 
<?php
  }
?>
 
</table>
<?php
$conn = null;
?>
 

