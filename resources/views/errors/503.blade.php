<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/comingSoon/logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- <link href="css/style.css" rel="stylesheet" > --}}

    <style>

        *{
            font-family: 'Bebas Neue', sans-serif;
        }

        /* body {
            overflow-y: hidden;
        } */


        .contain{
        padding-left:150px;
        }

        .banner{
            /* background: center / cover no-repeat url("../img/logo1.png"),#707070 35%; */
            background:url("{{ asset('assets/img/comingSoon/main.png') }}");
            height:100vh;
            padding-top: 3rem;
            /* position: relative; */
            background-repeat: no-repeat;
            background-size: cover;
            /* background-position:bottom; */
            background-position:right;

        }

        .main_head {
            color: #FFF;
            font-size: 100px;
            margin-top: 3rem;
        }

        .txt{
            /* font-size: 72px; */
            background: -webkit-linear-gradient(#cf9a3a, #f7dc8f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }



        .frm_txt {
            font-size: 50px;
            font-weight: 400;
            color: #fff;
        }

        .form_txt{
            height: 75px;
            border-radius: 12px;

        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            /* width: 70%; */
            width:600px;
        }


        button#button-addon2 {
            padding: 1rem 2rem;
            clip-path: polygon(100% 0%, 100% 52%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
            position: relative;
            left: -3rem;
            background: -webkit-linear-gradient(#cf9a3a, #f7dc8f);
            border: 0;
            color: #000;
            font-weight: 300!important;
            z-index: 999999;
            font-family: 'Poppins';
            font-size: 20px;
            font-weight: 400;
        }



        img.img-fluid.side_img {
            position: absolute;
            width: 61%;
            bottom: 0;
            right: 0;
            /* height: 100%; */
            /* margin: auto; */
            /* top: 0; */
        }



        /* .clock {
            width: 650px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        } */


        .form {
            padding-top: 2rem;
        }


        /* .days,.hours,.minutes,.seconds {
            position: relative;
            top: 8rem;
            font-size:.9rem;

        } */


        span.flip-clock-dot.top {
            display: none;
        }

        span.flip-clock-dot.bottom {
            display: none;
        }


        .flip-clock-divider .flip-clock-label {
            /* position: absolute;
            top: -1.5em;
            right: -86px; */
            color: #fff!important;
            text-shadow: none;
            font-weight: 100;
            font-family:'Montserrat';

        }


        .flip-clock-wrapper ul li a div div.inn {

            text-shadow: 0 1px 2px #680911!important;

            background-color: #680911!important;
        }


        .logo_img {
            height: 200px!important;
        }


        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            /* width: 70%; */
            border: 1px solid;
            border-right: 0!important;
            width: 600px;
            border-radius: 12px;
            border-top-right-radius: 0!important;
            border-bottom-right-radius: 0!important;
            overflow: hidden;
            border-color: #cbcbcb;
            background:#fff;
        }


        button#button-addon2 {
            padding: 1rem 2rem;
            clip-path: polygon(100% 0%, 100% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
            position: relative;
            left: 0;
            background: -webkit-linear-gradient(#cf9a3a, #f7dc8f);
            border: 0!important;
            color: #000;
            font-weight: 300!important;
            z-index: 999999;
            font-size: 14px!important;
            font-family: 'Poppins';
            font-size: 20px;
            font-weight: 400;
            border-radius: 0;
            padding-left: 30px!important;
        }

        .input-group>.form-control, .input-group>.form-select {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            border: 0!important;
        }
    </style>

    {{-- responcive --}}
    <style>
        @media (max-width: 1200px){
            .banner {
                height:100vh;
            }
        }

        @media (max-width: 992px) {
            .banner{
                background-position: unset;
            }

        }

        @media (max-width:768px){
        .input-group {
            width:90%;
        }

        .main_head {
            color: #FFF;
            font-size: 80px;
            margin-top: 3rem;
            text-align: center;
        }


        /* .flip-clock-divider .flip-clock-label{
            display: none;
        } */



        .contain {
                padding: 0 2rem;
            }


            .banner_des div {
            text-align: center;
            }

        .banner{
            height: 100vh;
            }

            .flip-clock-wrapper ul li a div div.inn {
                position: absolute;
                left: 0;
                z-index: 1;
                width: 100%;
                height: 200%;
                color: #ccc;
                text-shadow: 0 1px 2px #000;
                text-align: center;
                background-color: #333;
                border-radius: 6px;
                font-size:44px!important;
            }

            .flip-clock-wrapper ul {
                position: relative;
                float: left;
                margin: 3px;
                width: 42px!important;
                height: 75px!important;
                font-size: 80px!important;
                font-weight: bold;
                line-height: 32px!important;
                border-radius: 6px;
                /* background: #000; */
            }

            .flip-clock-wrapper {
            text-align: center;
            position: relative;
            width: 100%;
            margin: 1em;
            display: flex!important;
            justify-content: center!important;
            }

            .flip-clock-divider .flip-clock-label {
                position: absolute;
                top: -1.5em;
                right: -47px!important;
                color: black;
                text-shadow: none;
            }

            .flip-clock-divider.minutes .flip-clock-label {
            right: -63px!important;
            }

            .flip-clock-divider.seconds .flip-clock-label {
            right: -65px!important;
            }

        .banner{
                background-position: unset;
            }

        }

        @media (max-width: 576px){

            .form{
                padding-top:0;
            }

            .logo_img {
                height: 150px!important;
            }

            button#button-addon2 {
                    padding: 1rem 1rem;
                    font-size: 12px;
            }

            .input-group {
                    width:100%;
            }

            .main_head {
                color: #FFF;
                font-size: 60px;
                margin-top: 3rem;
                padding-bottom:1rem;
            }

            .banner{
                height: 100vh;
                background-position: unset;
            }


            .flip-clock-wrapper ul li {
                z-index: 1;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 71%!important;
                line-height: 64px!important;
                text-decoration: none !important;
            }

            .flip-clock-wrapper ul li a div div.inn {
                position: absolute;
                left: 0;
                z-index: 1;
                width: 100%;
                height: 200%;
                color: #ccc;
                text-shadow: 0 1px 2px #000;
                text-align: center;
                border-radius: 6px;
                font-size: 30px!important;
            }

            .flip-clock-wrapper .flip{
                box-shadow: none!important;
            }

            .flip-clock-wrapper ul{
                background: 0!important;
            }

            .flip-clock-wrapper {
                text-align: center;
                position: relative;
                width: 93%!important;
                margin: 1em;
            }

            .form_txt {
                height: 50px;
                border-radius: 12px;
            }
        }

        @media(max-width:360px){
        .logo_img {
            height: 150px!important;
        }

        .main_head {
                color: #FFF;
                font-size: 43px;
                margin-top: 3rem;
                text-align: center;
                padding-bottom: 1rem;
            }

        .frm_txt {
            font-size: 35px;
            font-weight: 400;
            color: #fff;
        }

            /* button#button-addon2 {
            padding: 1rem 1rem;
            font-size: 12px;
            left:0;
            } */

        .input-group {
            width: 100%;
        }

        .banner{
            height: 100vh;
            }

            .form{
                padding-top:0;
            }

            .banner{
                background-position: unset;
            }

            .form_txt {
                height: 50px;
                border-radius: 12px;
            }
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
</head>
<body>
      <section class="banner">
        <!-- <img src="img/home.png" alt="" class="img-fluid side_img"> -->
        <div class="container-fluid contain">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner_des">
                        <div>
                            <img src="{{ asset('assets/img/comingSoon/logo.png') }}" alt="" class="img-fluid logo_img">
                        </div>
                        <h1 class="main_head">WE ARE <br>
                            <span class="txt">Coming Soon</span>
                        </h1>
                        <div class="clock"></div>
                        <div class="form">
                            <h1 class="frm_txt">Get Latest Updates</h1>
                            <form>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control form_txt" placeholder="Your Email..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-dark" type="button" id="button-addon2">Submit Now</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-sm-12 col-md-8 col-lg-6"> -->
            </div>
        </div>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
<script>
    $(document).ready(function () {
        let clock;

        // Grab the current date
        let currentDate = new Date();

        // Target future date/24 hour time/Timezone
        let targetDate = moment.tz("2023-08-30 23:59", "Australia/Sydney");

        // Calculate the difference in seconds between the future and current date
        let diff = targetDate / 2000 - currentDate.getTime() / 2000;

        if (diff <= 0) {
            // If remaining countdown is 0
            clock = $(".clock").FlipClock(0, {
                clockFace: "DailyCounter",
                countdown: true,
                autostart: false
            });
            console.log("Date has already passed!")

        } else {
            // Run countdown timer
            clock = $(".clock").FlipClock(diff, {
                clockFace: "DailyCounter",
                countdown: true,
                callbacks: {
                    stop: function () {
                        console.log("Timer has ended!")
                    }
                }
            });

            // Check when timer reaches 0, then stop at 0
            setTimeout(function () {
                checktime();
            }, 2000);

            function checktime() {
                t = clock.getTime();
                if (t <= 0) {
                    clock.setTime(0);
                }
                setTimeout(function () {
                    checktime();
                }, 2000);
            }
        }
    });
</script>
</body>
</html>
