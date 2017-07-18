<?php
include "../config/koneksi.php";
$kodeJurusan = $_GET['jurusan'];
$return_arr = array();

if($kodeJurusan){
$fetch = mysql_query("SELECT * FROM tb_jurusan where kode_jurusan=$kodeJurusan"); 

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array['kode_jurusan'] = $row['kode_jurusan'];
    $row_array['nama_jurusan'] = $row['nama_jurusan'];
    $row_array['keterangan'] = $row['keterangan'];

    array_push($return_arr,$row_array);
}
header('Content-Type: application/json');
echo json_encode($return_arr);

}

?>