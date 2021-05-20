<?php
header('Origin:jAjax.com');
header('Access-Control-Allow-Origin:*');

include 'control.php';

$nama2 = $_POST['nama2'];
$paggilan2 = $_POST['panggilan2'];
$nim2 = $_POST['nim2'];
$alamat2 = $_POST['alamat2'];
$no_telp2 = $_POST['no_telp2'];
$email2 = $_POST['email2'];
$num2 = $_POST['num2'];

$img2 = "images/avatar1.png";

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
                                <h1>' . $paggilan2 . '</h1>
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
                    </div>
                </div>
            </div>
        </div>
    ';




echo $content2;
