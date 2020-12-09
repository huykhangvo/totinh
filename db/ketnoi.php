
<?php
$username = "sql9381070"; // Khai báo username
$password = "DQyHCbSghF";      // Khai báo password
$server   = "sql9.freemysqlhosting.net";   // Khai báo server
$dbname   = "sql9381070";      // Khai báo database

// Kết nối database tintuc
$con = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$con) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
  //  echo "Khi kết nối thành công sẽ tiếp tục dòng code bên dưới đây."


//ghi chú
    //tbl_category

?>
