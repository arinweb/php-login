<?php
include_once("db.php");
include_once("header.php");
if ($_GET && $_GET["p"]) {
    $page = strip_tags(trim($_GET["p"]));
    if (file_exists("page/" . $page.".php")) {
        include_once("page/{$page}.php");
    } else {
        include_once("page/home.php");
    }
} else {
    include_once("page/home.php");
}
include_once("footer.php");
?>