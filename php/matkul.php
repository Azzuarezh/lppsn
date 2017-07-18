<?php
include "../config/koneksi.php";
$kodeJurusan = $_GET['jurusan'];
$semester = $_GET['semester'];
$return_arr = array();

if($kodeJurusan){
$fetch = mysql_query("SELECT * FROM tb_matkul where kode_jurusan=$kodeJurusan and semester=$semester"); 

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array[0] = $row['kode_matkul'];
    $row_array[1] = $row['nama_matkul'];
    $row_array[2] = $row['sks'];

    array_push($return_arr,$row_array);
}
header('Content-Type: application/json');
echo json_encode(array('data' => $return_arr));

}

?>