<?php

header('Origin:jAjax.com');
header('Access-Control-Allow-Origin:*');

include 'connect.php';

$nama = $_POST['nama'];
$paggilan = $_POST['panggilan'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$num = $_POST['num'];

$img = "images/avatar1.png";

    $content ='
    <div class="card" id="card'.$num.'" style="display:block;">
                    <div class="image">
                    <img src="'.$img.'">

                    </div>
                    <div class="text">
                        <h1>'.$nama.'</h1>
                        <p>'.$nim.'</p>
                        <a class="btn" onclick="btnClick('.$num.')" style="">Details</a>
                    </div>
                </div>
    ';

    echo $content;
