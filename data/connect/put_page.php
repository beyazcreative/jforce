<?php
/**
 * BC WORKS COMPANY
 * UI DEVELOPER YOSEF
 * BACK END DEVELOPER MOHAMMADALI
 */
/**
 *  make query for home page item
 */
$sql = "SELECT id, page1, page2, page3, page4, page5, page6, page7, page8, page9, page10, page11, page12, page13, page14, page15, page16, page17, page18, page19, page20, page21, page22, page23, page24, page25, page26, page27, page28, page29 FROM page";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $page_item1 = $row["page1"];
    global $page_item1;
    $page_item2 = $row["page2"];
    global $page_item2;
    $page_item3 = $row["page3"];
    global $page_item3;
    $page_item4 = $row["page4"];
    global $page_item4;
    $page_item5 = $row["page5"];
    global $page_item5;
    $page_item6 = $row["page6"];
    global $page_item6;
    $page_item7 = $row["page7"];
    global $page_item7;
    $page_item8 = $row["page8"];
    global $page_item8;
    $page_item9 = $row["page9"];
    global $page_item9;
    $page_item10 = $row["page10"];
    global $page_item10;
    $page_item11 = $row["page11"];
    global $page_item11;
    $page_item12 = $row["page12"];
    global $page_item12;
    $page_item13 = $row["page13"];
    global $page_item13;
    $page_item14 = $row["page14"];
    global $page_item14;
    $page_item15 = $row["page15"];
    global $page_item15;
    $page_item16 = $row["page16"];
    global $page_item16;
    $page_item17 = $row["page17"];
    global $page_item17;
    $page_item18 = $row["page18"];
    global $page_item18;
    $page_item19 = $row["page19"];
    global $page_item19;
    $page_item20 = $row["page20"];
    global $page_item20;
    $page_item21 = $row["page21"];
    global $page_item21;
    $page_item22 = $row["page22"];
    global $page_item22;
    $page_item23 = $row["page23"];
    global $page_item23;
    $page_item24 = $row["page24"];
    global $page_item24;
    $page_item25 = $row["page25"];
    global $page_item25;
    $page_item26 = $row["page26"];
    global $page_item26;
    $page_item27 = $row["page27"];
    global $page_item27;
    $page_item28 = $row["page28"];
    global $page_item28;
    $page_item29 = $row["page29"];
    global $page_item29;


  }
} else {
  echo "0 results";
}
$conn->close();