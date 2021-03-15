<?php
/**
 * BC WORKS COMPANY
 * UI DEVELOPER YOSEF
 * BACK END DEVELOPER MOHAMMADALI
 */
/**
 *  make query for menu item
 */
$sql = "SELECT id, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, m13, m14 FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
        $menu_item1 = $row["m1"];
        $menu_item2 = $row["m2"];
        $menu_item3 = $row["m3"];
        $menu_item4 = $row["m4"];
        $menu_item5 = $row["m5"];
        $menu_item6 = $row["m6"];
        $menu_item7 = $row["m7"];
        $menu_item8 = $row["m8"];
        $menu_item9 = $row["m9"];
        $menu_item10 = $row["m10"];
        $menu_item11 = $row["m11"];
        $menu_item12 = $row["m12"];
        $menu_item13 = $row["m13"];
        $menu_item14 = $row["m14"];
        global $menu_item1;
        global $menu_item2;
        global $menu_item3;
        global $menu_item4;
        global $menu_item5;
        global $menu_item6;
        global $menu_item7;
        global $menu_item8;
        global $menu_item9;
        global $menu_item10;
        global $menu_item11;
        global $menu_item12;
        global $menu_item13;
        global $menu_item14;

  }
} else {
  echo "0 results";
}
$conn->close();