<?php



include 'control.php';


$nama = $_POST['nama'];
$paggilan = $_POST['panggilan'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];





    $content ='
    <div class="card" id="card<?php echo $i; ?>">
                    <div class="image">
                    <img src="images/<?php echo $image[$i]; ?>">

                    </div>
                    <div class="text">
                        <h1><?php echo $nama[$i]; ?></h1>
                        <p><?php echo $nim[$i]; ?> </p>
                        <a class="btn" onclick="btnClick(<?php echo $i; ?>)" style="">Details</a>
                    </div>
                </div>
    ';






?>