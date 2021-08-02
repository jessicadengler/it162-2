<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Hounds Tooth Contact Form Page</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/template.css" />
  <link rel="stylesheet" href="css/templatenav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <!--- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <!--- MenuMaker Plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <!--- Icon Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <script src="js/script.js"></script>
 </head>
 <body>
<main>
    <div class="logo">
        <a href="template.html"><img src="images/skulllogowithstar.jpg" alt="skull logo"></a>
    </div>
    <header>
            <nav id="cssmenu">
                <ul>
                   <li><a href="about.html">About Us</a></li>
                  
                  <!--- Dropdown menu for multiple menus-->
                   <li><a href="#">Menu</a>
                        <ul>
                    <li><a href="food.html">Food</a></li>
                    <li><a href="drinks.html">Drinks</a></li>
                    <li><a href="togo.php">Order To Go</a></li>
                        </ul>
                
                   <li><a href="contact.php">Contact</a></li>

                
                   <li><a href="pinball.html">Pinball</a></li>

                   <li><a href="map.html">Find Us</a></li>
            
                
                   <li><a href="merch.html">Shop Merch</a></li>
                  
                </ul>      
        </nav>
     </header>
       <!-- START LEFT COLUMN -->
       <main role="main">
	 <header><h3>Contact Us!</h3></header>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "wolfmouthllc@gmail.com";  //place your/your client's email address here
        $toName = "Anthony"; //place your client's name here
        $website = "Hounds Tooth Public House";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
	?>

     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Jessica Dengler</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site23/it161/fp/contact.php" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
</main>

     
 </body>
</html>