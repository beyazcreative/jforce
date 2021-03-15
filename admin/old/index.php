<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="contact-clean">
        <form action="index.php?id=1" method="post">
            <div class="form-group"><textarea class="form-control" name="me1" placeholder="
                <?php 
            include "../data/connect/dbcon.php";
            include "../data/connect/put_menu.php";
            echo $m1;
            ?>
                " rows="14"></textarea></div>
            <div class="form-group"><textarea class="form-control" name="me2" placeholder="
                <?php 
            include "../data/connect/dbcon.php";
            include "../data/connect/put_menu.php";
            echo $m2;
            ?>
                " rows="14"></textarea></div>
            <div class="form-group"><textarea class="form-control" name="me3" placeholder="
                <?php 
            include "../data/connect/dbcon.php";
            include "../data/connect/put_menu.php";
            echo $m3;
            ?>

                " rows="14"></textarea></div>
                <div class="form-group"><textarea class="form-control" name="me4" placeholder="
                <?php 
            include "../data/connect/dbcon.php";
            include "../data/connect/put_menu.php";
            echo $m4;
            ?>

                " rows="14"></textarea></div>

            <div class="form-group"><button class="btn btn-primary" type="submit">update </button></div>
        </form>
        <?php
        if ($_GET["id"] == "1"){
            include "../data/up.php";
        }else{
            echo "";
        }
        ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>