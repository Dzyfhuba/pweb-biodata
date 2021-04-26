<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,500,600,700,800,900&display=swap'>
        <title>Here Are We</title>

        <!-- <script src="idx.js"></script> -->
        <link rel="stylesheet" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="jquery-3.6.0.js"></script> -->
        <?php include 'control.php' ?>

        <style>
           

        </style>
    </head>
    <body>
        <section class="page-1 pageBlur">
            <div class="row" style="display:none;">      
                <div class="title">
                    <h1 style="font-size: 3em;">Who Are We ?</h1>
                </div>
                <!--perulangan PHP card-->
                <?php for($i = 0; $i < count($nama); $i++) {?>
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
                <?php } ?> <!--akhir perulangan-->

                <!-- <?php $nomer= $i+1; echo "<p>nomer ke $nomer</p> " ?> -->

                <!-- card tambah baru -->
                <div class="card" id="card<?php echo nomer; ?>" style="display:flex;align-items: center; justify-content: center;">
                    <div class="btnAdd" onclick="btnClick('Tambah')">
                        <a class=""  style="">+</a>
                    </div>
                </div>

            </div>
        </section>

<!--perulangan PHP detailcard-->
        <?php for ($i=0; $i < count($nama); $i++) { ?>
        <div id="detailCard<?php echo $i; ?>" class="detailCard" style="display: none;">
            <div class="detailCardflex">
                <div class="detailCardContent">
                    <span class="close" onclick="btnClose(<?php echo $i; ?>)">&times;</span>
                    <div class="col-50">
                        <div class="card" style="background-color: #181818; display: block;">
                            <div class="image">
                                <img src="images/<?php echo $image[$i]; ?>">
                            </div>
                            <div class="text">
                                <h1><?php echo $panggilan[$i]; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <h1>About Me</h1>
                        <p>Nama : <a class="isian"><?php echo $nama[$i]; ?></a></p>
                        <p>NIM : <a class="isian"><?php echo $nim[$i]; ?></a></p>
                        <p>Alamat : <a class="isian"><?php echo $alamat[$i]; ?></a></p></p>
                        <p>Nomor Telepon : <a class="isian"><?php echo $no_telp[$i]; ?></a></p></p>
                        <p>Email : <a class="isian"><?php echo $email[$i]; ?></a></p></p>
                    </div>  
                </div>
            </div>
        </div>
        <?php } ?>

<!-- detailCard tambah Baru -->
        <div id="detailCardTambah" class="detailCard" style="display: none;">
            <div class="detailCardflex">
                <div class="detailCardContent">
                    <span class="close" onclick="btnClose('Tambah')">&times;</span>
                    <div class="col-50">
                         <h1>Insert<br> Biodata</h1>
                    </div>
                    <div class="col-50">

                        <label>Nama : </label><br>
                        <input type="text" id="inNama"></input>
                        <br><br>

                        <label>Nama Panggilan : </label><br>
                        <input type="text" id="panggilan"></input>
                        <br><br>

                        <label>NIM : </label><br>
                        <input type="text" id="nim"></input>
                        <br><br>

                        <label>Alamat : </label><br>
                        <input type="text" id="alamat"></input>
                        <br><br>

                        <label>Nomor Telepon : </label><br>
                        <input type="text" id="nomer"></input>
                        <br><br>

                        <label>Email : </label><br>
                        <input type="email" id="email"></input><br><br><br>

                        <button class="btn" id="btnSubmit">Submit</button>

                    </div>  
                </div>
            </div>
        </div>


    </body>

    <script>
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

    </script>

</html>
