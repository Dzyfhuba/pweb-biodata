<?php

include "connect.php";

$sql = "SELECT nim, nama, panggilan, alamat, no_telp, id_prodi, id_kelas FROM mahasiswa";
$result = $conn1->query($sql);
$sql = "SELECT photo_dir FROM photo";
$result2 = $conn2->query($sql);

if ($result->num_rows > 0) {
  while($data = $result->fetch_assoc()) {
    $nim[] = $data['nim'];
    $nama[] = $data['nama'];
    $panggilan[] = $data['panggilan'];
    $alamat[] = $data['alamat'];
    $no_telp[] = $data['no_telp'];
    $id_prodi[] = $data['id_prodi'];
    $id_kelas[] = $data['id_kelas'];
  }
} else {
  echo "0 results";
}

if ($result2->num_rows > 0){
    while($data = $result2->fetch_assoc()){
        $photo_dir[] = $data['photo_dir'];
    }
} else {
    echo "0 result";
}
$conn1->close();

// $image = ['Fadlur.jpg', 'Iqbal.jpeg', 'Hafidz.jpg', 'Afal.jpg', 'Wukualam.jpg'];
// $nama = [
//     'Ahmad Fadlur Rohman',
//     'Muhammad Iqbal Firdaus',
//     'Hafidz Ubaidillah',
//     'Naufal Alief',
//     'Wukualam',
// ];
// $panggilan = ['Fadlur', 'Iqbal', 'Hafidz', 'Afal', 'Bolang'];
// $nim = ['190602017', '190602028', '190602043', '190602050', '190602014'];
// $alamat = [
//     'Lamongan',
//     'Tirem, Duduksampeyan, Gresik',
//     'Pongangan Rejo, Manyar, Gresik',
//     'Panglima Sudirman VI/7 Sumur Songo Gresik',
//     'JL. Saphire VI / 25 GBA',
// ];
// $no_telp = [
//     '089520811987',
//     '083832508425',
//     '089517671541',
//     '085156377367',
//     '081217402016',
// ];
// $email = [
//     '4hmad.fadhlur@gmail.com',
//     'muhammadiqbalfirdaus1606@gmail.com',
//     'hafidz21ub@gmail.com',
//     'naufalalief087@gmail.com',
//     'wukualam22@gmail.com',
// ];
// $motto = [
//     ' ',
//     'Tidurlah Jika Kamu Lelah',
//     'Tutuplah Mata Ketika Tidur',
//     'Beristirahatlah Sejenak Jika Kamu Lelah Dalam Berproses',
//     'Bubuk Ae Enak',
// ];
