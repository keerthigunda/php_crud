<?php
session_start();
$conn=mysqli_init(); 
mysqli_ssl_set($conn, NULL, NULL, '/home/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL); 
mysqli_real_connect($conn, "practice-php-database.mysql.database.azure.com", "kgunda@practice-php-database", "Shanmukha@1992", "php_mysql_crud", 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>