<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn =mysqli_connect($dbhost,$dbuser,$dbpass);
if(! $conn) {
    die('Không thể kết nối:'.mysqli_error());
}
echo 'Kết nối thành công';
mysqli_select_db('QLBH');
mysqli_close($conn);
?>