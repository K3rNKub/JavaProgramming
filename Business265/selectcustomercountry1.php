<?php
require "connect.php";
$sql = "SELECT * FROM customer,country
WHERE customer.CountryCode = country.CountryCode";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
 
<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">CountryCode </th>
    <th width="140"> <div align="center">CountryName </th>
  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
    <td>   
        <?php echo $result["CountryCode"]; ?>
         
    </td>
 
    <td>
        <?php echo $result["CountryName"]; ?>
    </td>
                                                                                                                                                                                                                                   
  
    
  </tr>
 
<?php
  }
?>
 
</table>
<?php
$conn = null;
?>
 

