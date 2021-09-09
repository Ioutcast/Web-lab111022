<?php

$history = isset($_SESSION['history']) && is_array($_SESSION['history']) ? $_SESSION['history'] : [];
$start = microtime(true);
$setup_script = false;
if (isset($_POST['X']) && isset($_POST['Y']) && isset($_POST['R']) && is_numeric($_POST['Y'])) {
    $y = $_POST['Y'];
    $y = (float)substr(str_ireplace(",", ".", $y), 0, 9);
    $x = $_POST['X'];
    $r = $_POST['R'];
    if(isset($_SERVER) && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST')
          $setup_script = true;
}

?>