<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

switch ($page) {
    case '1':
        require("home.php");

        break;
    case '2':
        require("profile.php");
        break;
    case '3':
        require("galery.php");
        break;
    case '4':
        require("contact.php");
        break;
}
