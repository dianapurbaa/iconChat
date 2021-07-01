<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- ======= FONT AWESOME ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- ====== STYLE CSS ==========-->
    <link rel="stylesheet" href="assets/css/chatting.css">

    <!-- ===== RESPONSIVE CSS ===== -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- ======== JQUERY ======= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title><?= $title; ?></title>
</head>

<body>

    <?php
    date_default_timezone_set('Asia/Jakarta');

    ?>

    <!-- ======= CHAT BOT ======== -->
    <div class="chat-bot active">
        <!-- class bg secondary -->

        <!-- ======= HEADER MSG ======= -->
        <div class="msg-header bg-warning ">
            <div class="close-button ml-auto" title="Close">
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="msg-header-img">
                <img src="assets/img/bot1.jpg" alt="">
                <!-- <strong>Adiana Chat Bot</strong> -->
                <strong>Adiana ChatBot</strong>
                <strong class="load-chat" id="off-load" style="font-style: italic; color:blue">Typing<img style="margin-left:-20px">" width="50px" height="30px"></strong>
            </div>
        </div>


        <!-- ====== names question -->
        <!-- <div class="question-name mt-5 ">

            <div class="card card-name" style="width: 22rem; height:12rem">
                <div class="card-header bg-info text-light">
                    Kenalan Dulu Dong
                </div>

                <div class="form-group" style="padding:5px">
                    <input id="nama" type="email" name="nama" autocomplete="off" placeholder="Nama" class="form-control">
                </div>


                <div class="form-group">
                    <input id="email" type="email" name="email" autocomplete="off" placeholder="Email" class="form-control">

                </div>
                <div class="form-group">
                    <input id="wa" type="number" name="wa" autocomplete="off" placeholder="Whatsapp" class="form-control">
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4"><button class="btn btn-danger" id="btn-cancel">Cancel</button></div>
                    <div class="col-md-4"><button class="btn btn-info " id="btn-mulai">Mulai</button></div>
                </div>

            </div> -->



        <div class="question-name mt-5 ">
            <div class="card">
                <div class="card-header bg-info text-light">
                    Kenalan dulu yuk!
                </div>

                <div class="list-group list-group-flush " style="padding:5px">
                    <input id=" nama" type="email" name="nama" autocomplete="off" placeholder="Nama" class="form-control">
                </div>

                <div class="list-group list-group-flush " style="padding:5px">
                    <input id="email" type="email" name="email" autocomplete="off" placeholder="Email" class="form-control">
                </div>

                <div class="list-group list-group-flush " style="padding:5px">
                    <input id="wa" type="number" name="wa" autocomplete="off" placeholder="Whatsapp" class="form-control">
                </div>
            </div>

            <div class="row justify-content-center mt-3" style="padding: 5px;">
                <div class="col-xs mr-1">
                    <button class="btn btn-danger" id="btn-cancel">Batal</button>
                </div>
                <div class="col-xs">
                    <button class="btn btn-info " id="btn-mulai">Mulai</button>
                </div>

            </div>


        </div>





        <!-- ======= end name question -->


        <!-- ======== MESSAGE ========== -->

        <div id="openMsg" class="message-active">
            <!-- ======= MSG BOX -->
            <div class="msg-box">



                <!-- === MSG BOT ===== -->
                <div class="msg-bot bg-info text-light mt-2 ml-1 mb-3">
                    <!-- <p>
                        <input type="hidden" value="" id="visitor-name">
                        Hallo <strong id="userName"></strong> selamat datang di Adiana Bot PMB ITDA Yogyakarta, Apakah ada yang bisa saya bantu ?
                        <hr>
                        kunjungi link ini untuk melihat blog selengkapnya <a class="text-primary" href="https://cakdunme.blogspot.com" target="__blank">Cakdun Blog</a>

                    </p> -->

                    <p>
                        <input type="hidden" value="" id="visitor-name">
                        Hallo <strong id="userName"></strong> Saya Adalah Asisten Virtual Kamu, Kamu Boleh bertanya apa saja seputar PMB ITDA
                        misal : Kapan Pendaftaran Berakhir min ?
                        <hr>
                        kunjungi link ini untuk melihat blog selengkapnya <a class="text-primary" href="https://cakdunme.blogspot.com" target="__blank">Cakdun Blog</a>

                    </p>
                </div>


                <!-- ========= MSG USER ======= -->



            </div>



            <!-- ===== FORM INPUT PESAN ====== -->
            <div class="form-input ml-3 mt-1 ">


                <div class="row">
                    <div class="col-md">
                        <div class="border-textrea">
                            <textarea id="form-input" name="msg_user" cols="40" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-md btn-send mt-1">
                        <button type="submit" class="btn-send-chat">

                            <i class="fas fa-paper-plane"></i>

                        </button>

                    </div>
                </div>

                <!-- <in id="form-input" type="text" name="msg_user" autocomplete="off"> -->

            </div>
        </div>

        <!-- ======== END MESSAGE ========== -->

    </div>
    <!-- ======= END CHATBOT ====== -->

    <!-- ====== CHAT BOT ICON ======= -->

    <div class="chat-icon">
        <span>
            <i class="far fa-comments"></i>
        </span>
    </div>

    <!-- ======= END CHAT BOT ICON ======= -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>