<?php
session_start();

// if ($_SESSION['status'] != "login") {
//     echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.php";</script>';
// }

if (!isset($_SESSION['marketing'])) {
    echo '<script language="javascript"> document.location="../index.php";</script>';
}
// alert("Anda harus Login!");
