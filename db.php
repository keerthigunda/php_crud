<?php
session_start();
$conn=mysqli_init(); 
mysqli_ssl_set($conn, NULL, NULL, '/var/www/html/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL); 
mysqli_real_connect($conn, "app-gk.mysql.database.azure.com", "kgunda@app-gk", "Shanmukha@1992", "php_mysql_crud", 3306);

?>
