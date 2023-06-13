<?php
$dbh = mysqli_connect('localhost', 'root', ''); 
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error()); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh, 'btbang'))     
die("Unable to select database: " . mysqli_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

// Create table
$sql_stmt  = "CREATE TABLE IF NOT EXISTS `sinhvien` (
    `MaSV` INT(6) NOT NULL AUTO_INCREMENT,
  `Hoten` varchar(50) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Lop` varchar(10) NOT NULL,
  `Diem` float NOT NULL,
  PRIMARY KEY(`MaSV`)
)";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Table has been add in your data";
};
echo "<br>";

// Insert data
$sql_stmt = "INSERT INTO `sinhvien`(`MaSV`, `Hoten`, `Ngaysinh`, `Lop`, `Diem`)"; 
$sql_stmt .= "VALUES('SV001','Nguyen Van A', '2002-05-12', 'K56SD2', '8'),
                    ('SV002','Nguyen Van B', '2002-06-25', 'K56SD2', '8.5'),
                    ('SV003','Nguyen Van C', '2002-07-13', 'K56SD2', '7.5'),
                    ('SV004','Nguyen Van D', '2002-08-27', 'K56SD2', '9'),
                    ('SV005','Nguyen Van E', '2002-09-22', 'K56SD2', '6.5')"; 

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been add in your data";
};
echo "<br>";

//Update data
$sql_stmt = "UPDATE `sinhvien` SET `Diem` = '8.5'";
$sql_stmt .= "WHERE `MaSV` = 'SV001'";

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been update in your data";
};
echo "<br>";

//Delete data
$sql_stmt = "DELETE FROM `sinhvien` WHERE `MaSV` = 'SV003'"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been delete in your data";
};
?>