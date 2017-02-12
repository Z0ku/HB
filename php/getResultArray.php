<?php
  function getResultArray($result){
    $RA = FALSE;
    $row = $result->fetch_assoc();
    while($row){
      $RA[] = $row;
      $row = $result->fetch_assoc();
    }
    return $RA;
  }
?>
