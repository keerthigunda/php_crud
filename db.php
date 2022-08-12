<?php
session_start();
$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, '/var/www/html/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL); 
mysqli_real_connect($con, "app-gk.mysql.database.azure.com", "kgunda@app-gk", "Shanmukha@1992", "php_mysql_crud", 3306);

?>
