<?php 
session_start();
session_destroy();

echo '<script language="javascript">
    document.location = "../pt-ssi";
</script>';
