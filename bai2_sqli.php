<?php
$dbh = mysqli_connect('localhost', 'root', ''); 
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error()); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh, 'lichsugd'))     
die("Unable to select database: " . mysql_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

// Create table
$sql_stmt  = "CREATE TABLE IF NOT EXISTS `lichsu` (
        `Magd` int(6) NOT NULL AUTO_INCREMENT,
      `Ngaygd` date NOT NULL,
      `Loaigd` varchar(20) NOT NULL,
      `Sotien` char(20) NOT NULL,
      `Mota` varchar(100) NOT NULL,
      PRIMARY KEY (`Id`)
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
$sql_stmt = "INSERT INTO `lichsu`(`Ngaygd`, `Loaigd`, `Sotien`, `Mota`)"; 
$sql_stmt .= "VALUES('2023-02-25','Rut tien', '500','Rut tien ATM'),
                    ('2023-03-16','Gui tien', '1000','Gui tien ATM'),
                    ('2023-04-27','Rut tien', '1500','Rut tien ATM'),
                    ('2023-05-15','Gui tiền', '2000','Gui tien ATM'),
                    ('2023-06-12','Rut tien', '2500','Rut tien ATM')"; 

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been add in your data";
};
echo "<br>";

//Update data
$sql_stmt = "UPDATE `lichsu` SET `Sotien` = '1000'";
$sql_stmt .= "WHERE `Magd` = '3'";

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been update in your data";
};
echo "<br>";

//Delete data
$sql_stmt = "DELETE FROM `lichsu` WHERE `Magd` = '5'"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "History transaction has been delete in your data";
};
?>