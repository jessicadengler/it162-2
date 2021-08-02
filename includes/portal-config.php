<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

we’ll apply a basename() function to strip off any folder info; storing only the page name inside a constant.


*/

// error message for this!!!!!!!!!!! 
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE) {

    case 'index.php':
        $title = "Jessica's IT162 Title Page";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;

    case 'aia.php':
        $title = "Jessica's Final Project AIA (Client work)";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $pageID = 'AIA';
        Break;
    

    case 'contactme.php':
        $title = "Jessica's IT162 Contact Page";
        $logo = 'fa-paper-plane-o';
        $logo_color = ' style="color:#00f"';
        $pageID = 'Contact Jessica';
    break;


    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default    
        $pageID = ''; //default so there's no error

    }

$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['"http://w3schools.com'] = 'W3Schools';
$nav1['https://www.linkedin.com/learning/'] = 'Linked In Learning';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Jessica';

/*here we are creating a function to generate links and keep the highlight on the current page

        <a href="index.php" class="active">Welcome</a>
       <a href="aia.php">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/template.html" target="_blank">Final Project</a>
       <a href="contactme.php">Contact Jessica</a>


*/
function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";
        }

        
    }

    return $myReturn;

}


?>