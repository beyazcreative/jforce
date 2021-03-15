
    <!-- Header -->


    <header>
        <div class=" container-fluid webinarlar-header col-md-12  container-fluid">
            <h1 class="page-title animate__animated animate__fadeInUp">Webinarlar</h1>
        </div>

    </header>

    <!-- Header ends -->


    <!-- Next Webibar / Siradaki Webinar section -->

    <section class="row mt-5 col-md-10 siradakiWebinar px-3">
        <div class="container siradakiWebinar_sol col-md-5 d-flex justify-content-end">
            <img class="siradakiWebinar_pic animate__animated" src="img/siradakiwebinar_pic.png" alt="">
        </div>
        <div class="container col-md-5 float-left">
            <h4 class="text-mavi"><?php echo $page_item24;?></h4>
            <h1><?php echo $page_item25;?></h1>
            <div class="container"></div>
            <p class="siradakiWebinar-desc"><?php echo $page_item26;?></p>
            <button class="btn btn-info text-light btn-md px-5 p-3">HEMEN KAYIT OLUN!</button>
        </div>
    </section>

    <!-- Next Webibar / Siradaki Webinar section ends -->

    <!-- Webinars Plan Section  -->

    <section class="row mt-5 webinarplani p-5">
        <div class="container col-md-10">
            <div class="mavicizgi my-2"></div>
            <h1 class="webinarplani_title">Sıradaki Webinarlar</h1>
        </div>
        <br>
        <div class="container col-md-10">

            
            <?php
            include "../data/class/webinar_class.php";
            ?>
 

        </div>
    </section>

