<?php
/**
 * BC WORKS COMPANY
 * UI DEVELOPER YOSEF
 * BACK END DEVELOPER MOHAMMADALI
 */
/**
 *  make query for webinar item
 */
$sql = "SELECT id, servis_item1, servis_item2 FROM serves";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo'
    <div class="col-lg-4 col-sm-12">
    <div class="card servislermentorluk p-lg-5 p-md-1 mt-4 animate__animated animate__fadeInUp animate__delay-0.5s">

        <div class="card-body ">

            <h1>'.$row["servis_item1"].'
            </h1>
            <p class="card-text">'.$row["servis_item2"].'
            </p>
        </div>

    </div>
</div>
    ';
    
  }
} else {
  echo "0 results";
}
