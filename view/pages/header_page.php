
<body>

    <style>
        .carousel {
            height: 100vh;
        }
        
        .carousel-caption {
            align-items: left !important;
            text-align: left !important;
            top: 40%;
        }
        
        .carousel-indicators {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            position: absolute;
            top: 5em;
            left: 500px;
        }
        
        .carousel-indicators .active {
            background-color: #1784C1;
            width: 50px;
            height: 7px;
        }
        
        .carousel-indicators .indicator {
            width: 50px;
            height: 7px;
        }
        
        .carousel {
            height: 100vh;
        }
        
        .carousel-inner {
            height: 100vh;
        }
        
        .icon-card {
            border: 0px;
        }
        
        a {
            color: #121212;
            text-decoration: none;
        }
        
        a:hover {
            color: #1784C1;
        }
        
         :root {
            --animate-delay: 0.5s;
        }
        
        .webinarlar-title {
            margin-top: 40vh;
            margin-left: 10vw;
            position: absolute;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 3em;
        }
        
        .page-title {
            margin-top: 40vh;
            margin-left: 10vw;
            position: absolute;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 3em;
        }
        
        .mavicizgi {
            height: 10px;
            width: 120px !important;
            background-color: #0097F0;
        }
        
        .text-mavi {
            color: #0097F0;
        }
        
        .btn-info {
            background-color: #0097F0 !important;
        }
        
        .webinarlar-hakkinda {
            background: rgb(23, 132, 193);
            background: linear-gradient(152deg, rgba(23, 132, 193, 1) 0%, rgba(12, 66, 97, 1) 100%);
        }
        
        button {
            border-radius: 0px !important;
        }
        
        .mutlumusteriler {
            background-image: url(img/mutlumusteriler.png);
            background-size: cover;
            height: 40vh;
        }
        
        @media only screen and (max-width:500px) {
            .mutlumusteriler {
                background-image: url(img/mutlumusteriler_mobile.png);
            }
        }
        
        @media only screen and (max-width:500px) {
            .btn-info {
                text-align: center;
            }
        }
        
        @media only screen and (max-width:500px) {
            .webinar_info {
                text-align: center;
            }
        }
        
        @media only screen and (max-width:500px) {
            .webinarlar-hakkinda {
                text-align: center;
            }
        }
        
        @media only screen and (max-width:500px) {
            .siradakiwebinar-sag {
                text-align: center;
            }
        }
        
        @media only screen and (max-width:500px) {
            .iconsection {
                text-align: center;
            }
        }
        
        @media only screen and (max-width:500px) {
            .mutlumusteriler {
                text-align: center;
            }
        }
        
        .banner-img1 {
            background-image: url(img/banner_web1.png);
            background-size: cover;
            height: 100vh;
        }
        
        .banner-img2 {
            background-image: url(img/banner_web2.png);
            background-size: cover;
            height: 100vh;
        }
        
        @media only screen and (max-width:500px) {
            .banner-img1 {
                background-image: url(img/banner_mobile2.png);
            }
        }
        
        .banner-img3 {
            background-image: url(/img/banner_web3.png);
            background-size: cover;
            height: 100vh;
        }
        
        @media only screen and (max-width:500px) {
            .banner-img1 {
                background-image: url(img/banner_mobile3.png);
            }
        }
    </style>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active indicator" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="indicator" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="indicator" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100 banner-img1 justify-content-start text-left"></div>
                <div class="carousel-caption animate__animated animate__fadeInUp col-md-3 mb-5">
                    <h1><?php echo $page_item1;?></h1>
                    <p class="mt-3"><?php echo $page_item2;?></p>
                    <button class="btn mt-3 btn-info text-light btn-md px-5 p-3"><?php echo $page_item3;?></button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block  w-100 banner-img2 justify-content-start text-left"></div>
                <div class="carousel-caption animate__animated animate__fadeInUp  col-md-3 mb-5">
                    <h1><?php echo $page_item1;?></h1>
                    <p><?php echo $page_item2;?></p>
                    <button class="btn mt-3 btn-info text-light btn-md px-5 p-3"><?php echo $page_item3;?></button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block  w-100 banner-img3 justify-content-start text-left"></div>
                <div class="carousel-caption animate__animated animate__fadeInUp  col-md-3 mb-5">
                    <h1><?php echo $page_item1;?></h1>
                    <p><?php echo $page_item2;?></p><br>
                    <button class="btn mt-3 btn-info text-light btn-md px-5 p-3"><?php echo $page_item3;?></button>

                </div>
            </div>
        </div>

    </div>