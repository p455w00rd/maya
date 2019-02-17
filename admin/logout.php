<?php
// MENGAKTIFKAN
session_start();


session_destroy();

header("location:../index.php?pesan=logout");
?>