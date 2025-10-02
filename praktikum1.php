<?php
// PHP Array ke JSON (Encode) 
$data = [
    "nama" => "Nova Hanafi Zulkarnain",
    "alamat" => "Kota Semarang",
    "umur" => 20,
    "agama" => "Islam",
    "status" => "Belum Menikah"
];

echo "<h3>PHP Array ke JSON</h3>";
$json = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";


// JSON ke PHP Object (Decode)
echo "<h3>JSON ke PHP Object</h3>";
$obj = json_decode($json);
echo "Nama: " . $obj->nama . "<br>";
echo "Alamat: " . $obj->alamat . "<br>";    
echo "Umur: " . $obj->umur . "<br>";
echo "Agama: " . $obj->agama . "<br>";
echo "Status: " . $obj->status . "<br>";


// JSON ke PHP Array (Decode)
echo "<h3>JSON ke PHP Array</h3>";
$arr = json_decode($json, true);
echo "Nama: " . $arr['nama'] . "<br>";
echo "Alamat: " . $arr['alamat'] . "<br>";
echo "Umur: " . $arr['umur'] . "<br>";
echo "Agama: " . $arr['agama'] . "<br>";
echo "Status: " . $arr['status'] . "<br>";
?>