<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "btbang";
$USER_NAME = "root";
$USER_PASSWORD = "";

$conn = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// Connect to database

// Create table
$stsm = $conn->prepare('CREATE TABLE IF NOT EXISTS `sinhvien` (
    `MaSV` int(6) NOT NULL AUTO_INCREMENT,
  `Hoten` varchar(50) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Lop` varchar(10) NOT NULL,
  `Diem` float NOT NULL,
  PRIMARY KEY (`MaSV`)
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
$stsm = $conn->prepare('INSERT INTO `sinhvien`(`MaSV`, `Hoten`, `Ngaysinh`, `Lop`, `Diem`) 
VALUE (?, ?, ?, ?, ?)');
$data = array('SV001','Nguyen Van A', '2002-05-12', 'K56SD2', '8');
$data2 = array('SV002','Nguyen Van B', '2002-06-25', 'K56SD2', '8.5');
$data3 = array('SV003','Nguyen Van C', '2002-07-13', 'K56SD2', '7.5');
$data4 = array('SV004','Nguyen Van D', '2002-08-27', 'K56SD2', '9');
$data5 = array('SV005','Nguyen Van E', '2002-09-22', 'K56SD2', '6.5');

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
$stsm = $conn->prepare("UPDATE sinhvien SET Diem = ?  WHERE MaSV=?");
$data = [8.5,'SV001'];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been update in your data";
};
echo "<br>";

//Delete data
$stsm = $conn->prepare("DELETE FROM sinhvien WHERE MaSV=?");
$data = ['SV003'];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been delete in your data";
};
?>