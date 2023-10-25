<?php
require "class/DB.php";

// site configs
include "div/div_head.php";

// connect to db if not connected
include "include/lib_conn.php";

// header component
include "menu/menu_top.php";

// conditional rendering according to user condition
include "transpage.php";

// footer component
include "div/div_footer.php";
?>

