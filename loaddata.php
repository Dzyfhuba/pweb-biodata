<?php

include 'connect.php';

$sql =
    'SELECT nim, nama, panggilan, email, alamat, no_telp, id_prodi, id_kelas FROM mahasiswa';
$result = $conn1->query($sql);
$sql = 'SELECT photo_dir FROM photo';
$result2 = $conn2->query($sql);

$img = 'images/avatar1.png';

if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
        $nim[] = $data['nim'];
        $nama[] = $data['nama'];
        $panggilan[] = $data['panggilan'];
        $email[] = $data['email'];
        $alamat[] = $data['alamat'];
        $no_telp[] = $data['no_telp'];
        $id_prodi[] = $data['id_prodi'];
        $id_kelas[] = $data['id_kelas'];
    }
} else {
    echo '0 results';
}

$length = count($nama);

$content1 = '';

for ($i = 0; $i < $length; $i++) {
    $content1 .=
        '
    <div class="card" id="card' .
        $i .
        '" style="display:block;">
                    <div class="image">
                    <img src="' .
        $img[$i] .
        '">

                    </div>
                    <div class="text">
                        <h1>' .
        $nama[$i] .
        '</h1>
                        <p>' .
        $nim[$i] .
        '</p>
                        <a class="btn" onclick="btnClick(' .
        $i .
        ')" style="">Details</a>
                    </div>
                </div>
    ';
}

echo $content1;

// $nama = []; //agar tidak error php karena perlu mengambil jumlah dari nama

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

?>
