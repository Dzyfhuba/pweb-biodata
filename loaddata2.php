<?php

include 'connect.php';

$sql =
    'SELECT nim, nama, panggilan, email, alamat, no_telp, id_prodi, id_kelas FROM mahasiswa';
$result = $conn1->query($sql);

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

$content2 = "";
for ($i = 0; $i < $length; $i++) {
    $content2 .=
        '
  <div id="detailCard' .
        $i .
        '" class="detailCard" style="display: none;">
  <div class="detailCardflex">
      <div class="detailCardContent">
          <span class="close" onclick="btnClose(' .
        $i .
        ')">&times;</span>
          <div class="col-50">
              <div class="card" style="background-color: #181818; display: block;">
                  <div class="image">
                      <img src="' .
        $img .
        '">
                  </div>
                  <div class="text">
                      <h1>' .
        $panggilan[$i] .
        '</h1>
                  </div>
              </div>
          </div>
          <div class="col-50">
              <h1>About Me</h1>
              <p>Nama : <a class="isian">' .
        $nama[$i] .
        '</a></p>
              <p>NIM : <a class="isian">' .
        $nim[$i] .
        '</a></p>
              <p>Alamat : <a class="isian">' .
        $alamat[$i] .
        '</a></p>
              </p>
              <p>Nomor Telepon : <a class="isian">' .
        $no_telp[$i] .
        '</a></p>
              </p>
              <p>Email : <a class="isian">' .
        $email[$i] .
        '</a></p>
              </p>
              <p>Prodi : <a class="isian">' .
        $id_prodi[$i] .
        '</a></p>
              </p>
              <p>Kelas : <a class="isian">' .
        $id_kelas[$i] .
        '</a></p>
              </p>
          </div>
      </div>
  </div>
</div>
      ';
}

echo $content2;