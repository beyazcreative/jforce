<?php
/**
 * BC WORKS COMPANY
 * UI DEVELOPER YOSEF
 * BACK END DEVELOPER MOHAMMADALI
 */
/**
 * get user start
 */
session_start();
$user = $_SESSION['user'] = 'gest';
/**
 * GET DATABASE
 */
include "../data/class/menu_class.php";
include "../data/class/page_class.php";
/**
 * MAIN PAGE 
 */
?>
<?php
if ($user == "gest"){
include 'header.php';
include 'title/homepage_title.php';
include 'menu.php';
include 'pages/header_page.php';
include 'pages/home_mainpage.php';
include 'pages/footer_page.php';
} else {
   echo "You cannot see this website!";
}
/**
 * BC END
 */
?>