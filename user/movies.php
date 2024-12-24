<?php
include '../includs/db.php';

$sql = "SELECT * FROM muvies";

$result = $conn->query($sql);

while($row = $result->frtch_assoc()){
    echo"<div>":
    echo "<h3>" . $row['title'] ." </h3>";
    echo"<p>". $row['description']"</p>" ;
    echo"<p>". $row['genre']"</p>" ;
    echo"</div>":
}