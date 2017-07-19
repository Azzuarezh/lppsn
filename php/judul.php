<?php 
include "../config/koneksi.php";

$return_arr = array();
$fetch = mysql_query("SELECT banner_text FROM tb_banner where active=1"); 

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {     
    array_push($return_arr,$row['banner_text']);
}
header('Content-Type: application/json');
echo json_encode(array('banner' => $return_arr));
?>