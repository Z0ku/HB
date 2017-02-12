<?php
  function exists($data,$table,$col,$conn){
    $sql = "SELECT {$col} FROM {$table} WHERE BINARY {$col}='{$data}'";
    $result = $conn->query($sql);
    if($result->num_rows !== 0){
      return TRUE;
    }else{
      return FALSE;
    }
  }
  function getUserId($username,$conn){
    if(exists($username,"users","username",$conn) !== FALSE){
      $sql = "SELECT user_id FROM users WHERE BINARY username='{$username}'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      return $row['user_id'];
    }else{
      return FALSE;
    }
  }
?>
