<?php
  function getResultArray($result){
    $RA;
    $num_rows = $result->num_rows;
    $row = $result->fetch_assoc();
    while($row){
      $RA[] = $row;
      $row = $result->fetch_assoc();
    }
    return $RA;
  }
?>
