<?php 

//Other
define('BASEURL', 'http://'.$_SERVER['HTTP_HOST'].'/kool/');

//Other
define("EMAIL","support@systrailsolutions.com"); //cc
define("EMAIL_HR","hr@systrailsolutions.com");

// define("CONTACT","(91) 91794 72691"); //cc
define("CONTACT","(91) 97528 74163"); //cc
// define("CONTACT_OFFICE","(91) 97549 09476"); 
define("SKYPE","systrailsolutions@gmail.com");
define("ADDRESS","Dheeraj Nagar MR9 Road Indore(MP) India 452010");

//Social Links
define("FACEBOOK","#");
define("LINKDIN","https://www.linkedin.com/company/systrail-solutions/");
define("TWITTER","#");
define("INSTAGRAM","#");
define("GITHUB","#");

$last = explode("/", $_SERVER['SCRIPT_NAME']); 
$pages = end($last);

$activeMenu = 'home-page';
switch ($pages) {
    case 'index.php':
        $activeMenu = 'home-page';
        break;
    case 'about-us.php':
        $activeMenu = 'about-us';
        # code...
        break;
    case 'contact-us.php':
        $activeMenu = 'contact-us';
        # code...
        break;  
    case 'services.php':
        $activeMenu = 'services-page';
        break;         
    default:
        # code...
        break;
}  

?>