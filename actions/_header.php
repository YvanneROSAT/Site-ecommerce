<?php
require('./db-class.php');
require('./paniers.class.php');
$DB = new DB();
$paniers = new Paniers($DB);
?>