<?php
session_start();
session_destroy();
header("location: http://localhost/StockManagement/index1.html");
?>