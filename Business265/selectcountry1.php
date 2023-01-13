<?php
try {
    require 'connect.php';
    $sql = "SELECT * FROM country";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    // //แบบที่ 1
    // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo '<br>' .
    //         'รหัสลูกค้า : ' .
    //         $result['CustomerID'] .
    //         ' วันเกิด : ' .
    //         $result['Birthdate'] .
    //         ' ยอดหนี้ : ' .
    //         $result['OutstandingDebt'];
    // }
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            echo '<br>' .
                ' CountryCode : ' .
                $result[0] .
                ' CountryName : ' .
                $result[1];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        }
 
} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                                                                                                                     