<?php
session_start();
session_destroy();
$_SESSION = array();

?>
<input type="button" value="戻る" onclick="location.href='課題1-4.php'">