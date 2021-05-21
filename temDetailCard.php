<?php
header('Origin:jAjax.com');
header('Access-Control-Allow-Origin:*');

include 'connect.php';

$nama2 = $_POST['nama2'];
$panggilan2 = $_POST['panggilan2'];
$nim2 = $_POST['nim2'];
$alamat2 = $_POST['alamat2'];
$no_telp2 = $_POST['no_telp2'];
$email2 = $_POST['email2'];
$num2 = $_POST['num2'];
$id_prodi2 = $_POST['id_prodi'];
$id_kelas2 = $_POST['id_kelas'];

$img2 = "images/avatar1.png";

$sql1 = "INSERT INTO `mahasiswa`( `nim`, `nama`,   `panggilan`, `alamat`, `no_telp`, `email`, `id_prodi`, `id_kelas`) 
	VALUES ( '$nim2', '$nama2', '$panggilan2', '$alamat2', '$no_telp2','$email2', $id_prodi2, $id_kelas2)";

if (mysqli_query($conn1, $sql1)) {
    echo json_encode(['statusCode' => 200]);
} else {
    echo json_encode(['statusCode' => 201]);
}

$content2 = '
    <div id="detailCard' . $num2 . '" class="detailCard" style="display: none;">
            <div class="detailCardflex">
                <div class="detailCardContent">
                    <span class="close" onclick="btnClose(' . $num2 . ')">&times;</span>
                    <div class="col-50">
                        <div class="card" style="background-color: #181818; display: block;">
                            <div class="image">
                                <img src="' . $img2 . '">
                            </div>
                            <div class="text">
                                <h1>' . $panggilan2 . '</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <h1>About Me</h1>
                        <p>Nama : <a class="isian">' . $nama2 . '</a></p>
                        <p>NIM : <a class="isian">' . $nim2 . '</a></p>
                        <p>Alamat : <a class="isian">' . $alamat2 . '</a></p>
                        </p>
                        <p>Nomor Telepon : <a class="isian">' . $no_telp2 . '</a></p>
                        </p>
                        <p>Email : <a class="isian">' . $email2 . '</a></p>
                        </p>
                        <p>Prodi : <a class="isian">' . $id_prodi2 . '</a></p>
                        </p>
                        <p>Kelas : <a class="isian">' . $id_kelas2 . '</a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    ';




echo $content2;
