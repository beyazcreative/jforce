<?php
$sql = "SELECT id, post1, post2, post3, post4 FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $post1 = $row["post1"];
    global $post1;
    $post2 = $row["post2"];
    global $post2;
    $post3 = $row["post3"];
    global $post3;
    $post4 = $row["post4"];
    global $post4;

  }
} else {
  echo "0 results";
}
$conn->close();