//Mengetahui jumlah card
var items = document.getElementsByClassName("detailCard");
console.log("items =" + items.length);
var durasi = 0;


$(document).ready(function () {
  //Menganimasi saat halaman dibuka
  $(".row").fadeIn(3000);

  for (i = 0; i < items.length; i++) {
    $("#card" + i).fadeIn(durasi += 1000);
    console.log("fade " + i);
  }

  //men Submit biodata Baru

  $("#btnSubmit").click(function () {
    submitData();
  })

})


function submitData() {
  var nama = $('#nama').val();
  var panggilan = $('#panggilan').val();
  var nim = $('#nim').val();
  var alamat = $('#alamat').val();
  var no_telp = $('#no_telp').val();
  var email = $('#email').val();

  var dataString = {
    'nama':nama,
    'panggilan':panggilan,
    'nim':nim,
    'alamat':alamat,
    'no_telp':no_telp,
    'email':email
  };
  $.ajax({
    type: "POST",
    url: "http://localhost/pweb-1/control.php",
    data: dataString,
    crossDomain: true,
    cache: false,
    beforeSend: function () {

    },
    success: function (data) {
      alert("success");
    }
  })
}

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
  })
}

function btnClose(nomer) {
  $(document).ready(function () {
    $(".page-1").toggleClass("pageBluractive");
    $("#detailCard" + nomer).slideToggle(300);
  })
}