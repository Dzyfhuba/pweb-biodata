// function btnClick(nomer) {
//   const pageBlur = document.querySelector(".pageBlur");
//   pageBlur.classList.toggle("active");

//   // const detailPage = document.querySelector('.detailCard');
//   // detailPage.classList.toggle('active');

//   var boten = document.getElementById("detailCard" + nomer);
//   boten.style.display = "block";
// }
// function btnClose(nomer) {
//   var cls = document.getElementById("detailCard" + nomer);
//   cls.style.display = "none";

//   const pageBlur = document.querySelector(".pageBlur");
//   pageBlur.classList.toggle("active");
// }

//Mengetahui jumlah card
var items = document.getElementsByClassName("detailCard");
console.log("items ="+items.length);
var durasi = 0;


$(document).ready(function(){
    //Menganimasi saat halaman dibuka
    $(".row").fadeIn(3000);

    for(i=0;i<items.length;i++){
        $("#card"+i).fadeIn(durasi+=1000);
        console.log("fade "+i);
    }

    //men Submit biodata Baru

    $("#btnSubmit").click(function(){              
            submitData();
    })

})


function submitData(){
    var dataString = '';
    $.ajax({
        type: "POST",
        url:"http://localhost/pweb-1/index.php",
        data:dataString,
        crossDomain:true,
        cache:false,
        beforeSend: function(){

        },
        success:function(data){
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


//Memanggil detailcard sesuai nomer
function btnClick(nomer) {
    $(document).ready(function(){
        $(".page-1").toggleClass("pageBluractive");
        $("#detailCard"+nomer).slideToggle(200);
    })
}

function btnClose(nomer) {
    $(document).ready(function(){
        $(".page-1").toggleClass("pageBluractive");
        $("#detailCard"+nomer).slideToggle(300);
    })
}
