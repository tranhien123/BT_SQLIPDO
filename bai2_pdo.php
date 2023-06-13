<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "lichsugd";
$USER_NAME = "root";
$USER_PASSWORD = "";

$conn = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// Connect to database


// Create table
$stsm = $conn->prepare('CREATE TABLE IF NOT EXISTS `LSgiaodich` (
      `Magd` int(6) NOT NULL AUTO_INCREMENT,
      `Ngaygd` date NOT NULL,
      `Loaigd` varchar(20) NOT NULL,
      `Sotien` char(20) NOT NULL,
      `Mota` varchar(100) NOT NULL,
      PRIMARY KEY (`Magd`)
)');
$result=$stsm-> execute();
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Table has been add in your data";
};
echo "<br>";

// Insert data
$stsm = $conn->prepare('INSERT INTO `lichsu`(`Ngaygd`, `Loaigd`, `Sotien`, `Mota`) 
VALUE (?, ?, ?, ?)');
$data = array('2023-02-25','Rut tien', '500','Rut tien ATM');
$data2 = array('2023-03-16','Gui tien', '1000','Gui tien ATM');
$data3 = array('2023-04-27','Rut tien', '1500','Rut tien ATM');
$data4 = array('2023-05-15','Gui tiền', '2000','Gui tien ATM');
$data5 = array('2023-06-12','Rut tien', '2500','Rut tien ATM');

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
echo "<br>";
$result2=$stsm-> execute($data2);
if (!$result2) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
echo "<br>";
$result3=$stsm-> execute($data3);
if (!$result3) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
echo "<br>";
$result4=$stsm-> execute($data4);
if (!$result4) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
}
echo "<br>";
$result5=$stsm-> execute($data5);
if (!$result5) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
};
echo "<br>";

//Update data
$stsm = $conn->prepare("UPDATE lichsu SET Sotien = ?  WHERE Magd=?");
$data = [1000,3];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been update in your data";
}
echo "<br>";

//Delete data
$stsm = $conn->prepare("DELETE FROM lichsu WHERE Magd=?");
$data = [5];
$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been delete in your data";
}
?>