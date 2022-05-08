<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";
require_once "layouts/sidebar.php";


$url = array_key_exists('link', $_REQUEST) ? $_REQUEST['link'] : 'home';
// Display result
switch ($url) {
    case "settings":
        include('includes/settings/settings.php');
        break;
    case "about":
        include('includes/about.php');
        break;
    case "category-add":
        include('includes/category/category-add.php');
        break;
    case "category-list":
        include('includes/category/category-list.php');
        break;
    case "subcategory-add":
        include('includes/subcategory/subcategory-add.php');
        break;
    case "subcategory-list":
        include('includes/subcategory/subcategory-list.php');
        break;
    case "announcement-add":
        include('includes/announcement/announcement-add.php');
        break;
    case "announcement-list":
        include('includes/announcement/announcement-list.php');
        break;
    default:
        include('includes/home.php');
}


require_once "layouts/footer.php";
