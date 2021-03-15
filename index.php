<?php 
$url= $_SERVER['REQUEST_URI'];
$request = $url;
switch ($request) {
    case '/jforce/index.php/webinarlar' :
        header("Location: /jforce/view/webinarlar.php");
        exit();
        break;
     case '/jforce/index.php/tarihcemiz' :
            header("Location: /jforce/view/tarihcemiz.php");
            exit();
            break;
     case '/jforce/index.php/servisler' :
            header("Location: /jforce/view/servisler.php");
            exit();
            break;
    case '/jforce/index.php/hakkimizda' :
            header("Location: /jforce/view/hakkimizda.php");
            exit();
            break;
    case '/jforce/index.php/sagliksigortasi' :
            header("Location: /jforce/view/hakkimizda.php");
            exit();
            break;
    case '/jforce/index.php/anasayfa' :
            header("Location: /jforce/view/main.php");
            exit();
            break;
 case '/jforce/index.php/odullrimiz' :
            header("Location: /jforce/view/odullrimiz.php");
            exit();
            break;
 case '/jforce/index.php/vizyonumuz' :
             header("Location: /jforce/view/vizyonumuz.php");
             exit();
             break;
 case '/jforce/index.php/yonetimsemasi' :
             header("Location: /jforce/view/yonetimsemasi.php");
             exit();
             break;
 case '/jforce/index.php/degerlerimiz' :
             header("Location: /jforce/view/degerlerimiz.php");
             exit();
             break;
 case '/jforce/index.php/hakkimizda' :
             header("Location: /jforce/view/hakkimizda.php");
             exit();
             break;
 case '/jforce/index.php/sagliksigortasi' :
                header("Location: /jforce/view/sagliksigortasi.php");
                exit();
                break;
 case '/jforce/index.php/misyonumuz' :
                 header("Location: /jforce/view/misyonumuz.php");
                 exit();
                break;
 case '/jforce/index.php/basarihikayeleri' :
                 header("Location: /jforce/view/basarihikayeleri.php");
                 exit();
                 break;
    default:
        header("Location: /jforce/view/404.php");
        exit();
        break;
}