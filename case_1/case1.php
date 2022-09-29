<?php
$data = file_get_contents("data.json");
$res = json_decode($data, true);

echo"1. Buah apa saja yang dimiliki Andi? (fruitName)\n2. Andi memisahkan buahnya menjadi beberapa wadah berdasarkan tipe buah
(fruitType). Berapa jumlah wadah yang dibutuhkan? Dan ada buah apa saja di
masing-masing wadah?\n3. Berapa total stock buah yang ada di masing-masing wadah?\n4. Apakah ada komentar terkait kasus di atas?\n\n";
$pilihan = readline('Masukan pilihan jawaban sesuai nomor (angka 1,2,3,4): ');
 
switch ($pilihan) {
    case 1:
      getBuahAndi();
      break;
    case 2:
        getWadahDanBuah();
      break;
    case 3:
        getStok();
      break;
    case 4:
        getComment();
      break;
    default:
      echo "Pilihan tersedia hanya ada 1,2,3,4. silahkan masukan angka dengan benar!";
}

function getBuahAndi(){
    global $res;

    foreach ($res as $key) {
        print($key["fruitName"] . " ");
    }
}

function getWadahDanBuah(){
    $type = [];
    global $res;

    foreach ($res as $key) {
        if (in_array($key["fruitType"], $type)) {

        }else{
            array_push($type, $key['fruitType']);
        }
    }

    print("------------------------------------------------------------------\n");

    print("Jumblah wadah yang dibutuhkan ". count($type). " wadah, yaitu:\n");
    foreach($type as $t){
        print($t. "\n");
    }
    print("\n");

    print("jenis buah yg ada dimasing-masing wadah:\n");
    for ($i=0; $i < count($type); $i++) { 

        foreach ($res as $key ) {
            if ($key['fruitType'] == $type[$i]) {
                print($key['fruitType']. " = " . $key['fruitName']. "\n");
            }
        }
    }

    print("------------------------------------------------------------------");



}

function getStok(){
    $import = 0;
    $local = 0;

    global $res;
    foreach($res as $r){
        if ($r['fruitType'] == "IMPORT") {
            $import += $r['stock'];
        }else{
            $local += $r['stock'];
        }
    }

    print("Wadah Import = ".$import);
    print("\n");
    print("Wadah Local = ". $local);

}

function getComment(){
    $comment = readline('apakah ada komentar terkait kasus diatas ? ');
    print("komentar (".$comment . ") telah tersampaikan, terimakasih...");
}
?>