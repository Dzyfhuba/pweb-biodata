//Mengetahui jumlah card
var items = document.getElementsByClassName("detailCard");
console.log("items =" + items.length);
var durasi = 0;

$(document).ready(function () {
  //Menganimasi saat halaman dibuka
  $(".row").fadeIn(3000);

  for (i = 0; i < items.length; i++) {
    $("#card" + i).fadeIn((durasi += 1000));
    console.log("fade " + i);
  }
  --i;

  //men Submit biodata Baru jika id = btnSubmit di click

  $("#btnSubmit").click(function () {
    submitData();
    submitDetailCard();
  });

  function loadTableData() {
    $.ajax({
      url: "loaddata.php",
      type: "POST",
      success: function (data) {
        $("#newCard").append(data);
        $("#newDetailCard").append(data);
      },
    });
  }
  loadTableData();

  //untuk detailcard >> temDetailCard.php
  function submitDetailCard() {
    var nama2 = $("#nama").val();
    var panggilan2 = $("#panggilan").val();
    var nim2 = $("#nim").val();
    var alamat2 = $("#alamat").val();
    var no_telp2 = $("#no_telp").val();
    var email2 = $("#email").val();
    var id_prodi2 = $("#id_prodi").val();
    var id_kelas2 = $("#id_kelas").val();
    var num2 = i;

    var dataString2 = {
      nama2: nama2,
      panggilan2: panggilan2,
      nim2: nim2,
      alamat2: alamat2,
      no_telp2: no_telp2,
      email2: email2,
      id_prodi2: id_prodi2,
      id_kelas2: id_kelas2,
      num2: num2,
    };
    $.ajax({
      type: "POST",
      url: "http://localhost/pweb-biodata/temDetailCard.php",
      data: dataString2,
      crossDomain: true,
      cache: false,
      beforeSend: function () {},
      success: function (data) {
        $("#newDetailCard").append(data); //menampilkan temDetailCard.php di id newDetailCard
      },
    });
  }

  //untuk card >> temporary.php
  function submitData() {
    var nama = $("#nama").val();
    var panggilan = $("#panggilan").val();
    var nim = $("#nim").val();
    var alamat = $("#alamat").val();
    var no_telp = $("#no_telp").val();
    var email = $("#email").val();
    var num = ++i;

    var dataString = {
      nama: nama,
      panggilan: panggilan,
      nim: nim,
      alamat: alamat,
      no_telp: no_telp,
      email: email,
      num: num,
    };

    $.ajax({
      type: "POST",
      url: "http://localhost/pweb-biodata/temporary.php",
      data: dataString,
      crossDomain: true,
      cache: false,
      beforeSend: function () {},
      success: function (data) {
        $("#newCard").append(data); //menampilkan temporary.php di id newCard
        btnClose("Tambah");
        clearInputan();
        console.log(num);
      },
    });
  }

  function clearInputan() {
    $("#nama").val("");
    $("#panggilan").val("");
    $("#nim").val("");
    $("#alamat").val("");
    $("#no_telp").val("");
    $("#email").val("");
  }
});

//Memanggil efect Blur
// $(document).ready(function(){
//     $(".btn").click(function(){
//             $(".page-1").toggleClass("pageBluractive");
//     })
//     $(".close").click(function(){
//             $(".page-1").toggleClass("pageBluractive");
//     })
// })

//Memanggil detailcard sesuai nomer dan effect blur
function btnClick(nomer) {
  $(document).ready(function () {
    $(".page-1").toggleClass("pageBluractive");
    $("#detailCard" + nomer).slideToggle(200);
  });
}

function btnClose(nomer) {
  $(document).ready(function () {
    $(".page-1").toggleClass("pageBluractive");
    $("#detailCard" + nomer).slideToggle(300);
    //clearInputan();
  });
}
