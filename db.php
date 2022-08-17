<?php
session_start();
$conn=mysqli_init(); 
mysqli_ssl_set($conn, NULL, NULL, '/www/html/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL); 
mysqli_real_connect($conn, "keerthi-server.mysql.database.azure.com", "yqrolaabei", "BK68C61C3TN6MPI6$", "keerthi-database", 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>