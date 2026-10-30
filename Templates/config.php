<?php

session_start();
error_reporting(0);
$pagelink = $_SERVER['REQUEST_URI'];
$pagelink_array = explode('/', $pagelink);
$page_active = end($pagelink_array);
define('PAGE_URL', $page_active);
?>
<?php

define('SITE_PATH', 'https://www.globepump.com/');
// define('SITE_PATH', 'http://localhost:8080/globepump.com/');
define('SITE_NAME', "AHMDC Solar Energy");
define('DOMAIN', "");
define('JSV', "javascript:void(0)");

define('PHONE', '+91 95374 19590');
define('EMAIL', 'inquiry@globeseal.com');
define('ADDRESS', 'Head Office :- 615, 6th Floor, Girivar Glean Mall, Odhav Road, Odhav, Ahmedabad - 382415');

define('FACEBOOK', 'javascript:void(0)');
define('LINKDIN', 'javascript:void(0)');
define('YOUTUBE', 'javascript:void(0)');

?>