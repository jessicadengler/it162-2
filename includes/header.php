<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>

 </head>
 <body>
 <!-- START WRAPPER-->
 <div class="wrapper">
     <header>
     <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>>
     </i>Jessica's IT162 Website</h1>
     <nav class="topnav" id="myTopnav">
     <?=makeLinks($nav1)?>
     <!--
       <a href="index.php" class="active">Welcome</a>
       <a href="aia.php">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/template.html" target="_blank">Final Project</a>
       <a href="contactme.php">Contact Jessica</a>
    -->
       <li class="icon"> <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
       
     </nav>
     </header>
     <!--header ends here -->

     <!--
       THIS IS IF I NEED TO MAKE MY NAV INTO A UL and LI
       <nav>
     <ul class="topnav" id="myTopnav">
       <li><a href="index.php" class="active">Welcome</a></li>
       <li><a href="aia.php">AIA</a></li>
       <li> <a href="big/index.html">BIG</a></li>
       <li><a href="http://w3schools.com" target="_blank">W3 Schools</a></li>
       <li> <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a></li>
       <li><a href="flowchart.php">Flowchart</a></li>
       <li><a href="fp/template.html" target="_blank">Final Project</a></li>
       <li><a href="contactme.php">Contact Jessica</a></li>
       <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
       </ul>
     </nav> -->

<!-- START LEFT COL -->
<!-- <section>
  <h2 class="pageID"><<?=$pageID?></h2> -->