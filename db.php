<?php
session_start();
include('html/BaltimoreCyberTrustRoot.crt.pem');
$conn=mysqli_init(); 
mysqli_ssl_set($conn, NULL, NULL, '/www/html/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL); 
mysqli_real_connect($conn, "app-gk.mysql.database.azure.com", "kgunda@app-gk", "Shanmukha@1992", "php_mysql_crud", 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>