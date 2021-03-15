<?php
/**
 * BC WORKS COMPANY
 * UI DEVELOPER YOSEF
 * BACK END DEVELOPER MOHAMMADALI
 */
/**
 *  make query for webinar item
 */
$sql = "SELECT id, webinar_item1, webinar_item2, webinar_item3 FROM webinar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo'
    <div class="row col-md-12 float-left webinar_info ">
    <div class="col-md-4">
        <h5 class="webinar_date text-mavi col-md-12"><strong>'.$row['webinar_item1'].'</strong></h5>
    </div>
    <div class="col-md-3">
        <p class=" webinar_title "><strong>'.$row['webinar_item2'].'</strong></p>
    </div>
    <div class="col-md-3">
        <p class="text-muted">'.$row['webinar_item3'].'</p>
    </div>
    <div class="col-md-2"><button class="btn btn-info text-light">Hemen Kayıt Olun!</button></div>

</div>
<hr>
    ';
    
  }
} else {
  echo "0 results";
}
