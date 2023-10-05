<?php
  $hostName ='localhost';
  $userName = 'root';
  $password ='';
  $dbname ='blo';

   $conn =  mysqli_connect($hostName,$userName,$password,$dbname);

   $_SESSION=$conn;



?> 