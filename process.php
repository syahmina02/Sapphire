<?php 
require_once('config.php');
?>

<?php

if(isset($_POST)){
      $studentid  = $_POST['studentid'];
      $email      = $_POST['email'];
      $phone      = $_POST['phone'];
      // sha1 function is to decrypt the password shown in the database
      $password   = sha1($_POST['password']);
      $gender     = $_POST['gender']; 

      $sql        = "INSERT INTO users (studentid, email, phone, password, gender) VALUES (?, ?, ?, ?, ?)";
      $stmtinsert = $db->prepare($sql);
      $result     = $stmtinsert->execute([$studentid, $email, $phone, $password, $gender]);
      
      if ($result){
        echo 'Successfully saved.';
      }else{
        echo 'There were errors while saving the data';
      }   
}else{
  echo 'No data';
}