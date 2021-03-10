<?php 
$link = mysqli_connect('localhost','root','') or
    die('Could not connect:'.mysqli_connect_error());
mysqli_select_db($link,'QLBH');
$str_select = "select * from loaisanpham";
mysqli_query($link,"SET NAME 'utf8'");
$result = mysqli_query($link,$str_select);
echo "MÃ LOẠI SẢN PHẨM - TÊN LOẠI SẢN PHẨM - DIẾN GIẢI</BR>";
echo "<table border='1'>";
while($row2 = mysqli_fetch_assoc($result))
{
    echo"<tr>";
    {
        echo"<td>";
        print_r($row2["MaLSP"]);
        echo"</td>";
        echo"<td>";
        print_r($row2["TenLSP"]);
        echo"</td>";
        echo"<td>";
        print_r($row2["DienGiai"]);
        echo"</td>";
    }
    echo"</tr>";
}
echo"</table>";
mysqli_close($link);
?>