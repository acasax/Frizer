<?php
    $host = 'localhost';
    $dbname = 'frizer';
    $username = 'root';
    $password = '';


    try
    {
     $db = new PDO('mysql:host=localhost; dbname=frizer;    charset=utf8', 'root', ''); 
       $db->setAttribute(PDO::ATTR_ERRMODE,    PDO::ERRMODE_EXCEPTION); 
       }
             catch (PDOException $ex)
   {
       echo ("Cannot connect to the database!");
   die();
       }
   ?>