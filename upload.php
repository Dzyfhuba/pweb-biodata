<?php

// $image = array("Fadlur.jpg",
//     "Iqbal.jpeg",
//     "Hafidz.jpg",
//     "Afal.jpg",
//     "Wukualam.jpg");
// $nama = array("Ahmad Fadlur Rohman",
//     "Muhammad Iqbal Firdaus",
//     "Hafidz Ubaidillah",
//     "Naufal Alief",
//     "Wukualam");
// $panggilan = array("Fadlur",
//     "Iqbal",
//     "Hafidz",
//     "Afal",
//     "Bolang"
//     );
// $nim = array("190602017",
//     "190602028",
//     "190602043",
//     "190602050",
//     "190602014");
// $alamat = array("Lamongan",
//     "Tirem, Duduksampeyan, Gresik",
//     "Pongangan Rejo, Manyar, Gresik",
//     "Panglima Sudirman VI/7 Sumur Songo Gresik",
//     "JL. Saphire VI / 25 GBA");
// $no_telp = array("089520811987",
//     "083832508425",
//     "089517671541",
//     "085156377367",
//     "081217402016");
// $email = array("4hmad.fadhlur@gmail.com",
//     "muhammadiqbalfirdaus1606@gmail.com",
//     "hafidz21ub@gmail.com",
//     "naufalalief087@gmail.com",
//     "wukualam22@gmail.com");
// $motto = array(" ",
//     "Tidurlah Jika Kamu Lelah",
//     "Tutuplah Mata Ketika Tidur",
//     "Beristirahatlah Sejenak Jika Kamu Lelah Dalam Berproses",
//     "Bubuk Ae Enak"
//     );

include 'connect.php';

if (isset($_FILES['file']['name'])) {
    /* Getting file name */
    $filename = $_FILES['file']['name'];

    /* Location */
    $location = 'data/' . $filename;
    $imageFileType = pathinfo($location, PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    /* Valid extensions */
    $valid_extensions = ['jpg', 'jpeg', 'png'];

    $response = 0;
    /* Check file extension */
    if (in_array(strtolower($imageFileType), $valid_extensions)) {
        /* Upload file */
        if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            $response = $location;
        }
    }

    // echo $response;
    // exit;
}

$nama = $_POST['nama'];
$panggilan = $_POST['panggilan'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$id_prodi = $_POST['id_prodi'];
$id_kelas = $_POST['id_kelas'];

$sql = "INSERT INTO `mahasiswa`( `nama`,   `panggilan`, `alamat`, `nim`, `no_telp`, `email`, `id_prodi`, `id_kelas`) 
	VALUES ('$nama', '$panggilan', '$alamat', '$nim', '$no_telp','$email','$id_prodi','$id_kelas')";
if (mysqli_query($conn, $sql)) {
    echo json_encode(['statusCode' => 200]);
} else {
    echo json_encode(['statusCode' => 201]);
}
mysqli_close($conn);
?>

