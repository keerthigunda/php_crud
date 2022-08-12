<?php
session_start();

$conn = mysqli_connect(
  'tasker-gk-server.mysql.database.azure.com',
  'gbjipigazd',
  '82WQWJ32T34325MA$',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
