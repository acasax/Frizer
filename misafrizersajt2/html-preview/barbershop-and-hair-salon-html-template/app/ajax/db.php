<?php
define('SITE_ROOT', __DIR__);
$username = 'root';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=frizer_reservation', $username, $password );

?>