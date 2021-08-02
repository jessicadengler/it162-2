<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Jessica Dengler's Web Developer Examples and Resources</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <!--- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <!--- MenuMaker Plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
  <!--- Icon Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <script src="js/script.js"></script>
 </head>
 <body>
<main>
    <header>
        <h1><a href="index.html">Jessica Dengler's Web Developer Examples and Resources</a></h1>
            <nav id="cssmenu">
                <ul>
                   <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> IT161</a></li>
                   <li><a href="index.html"><i class="fa fa-fw fa-home"></i>BIG Website</a></li>
                
                   <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i>Lightbox II Gallery</a></li>

                 <!--- drop down menu for research pages-->
                   <li><a href="#"> Research Topics</a>
                    <ul>
                        <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                        <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                        <li><a href="forms.html"><i class="fab fa-wpforms"></i> Forms</a></li>
                      
                    </ul>
                 </li>
            
                
                    <!--- Dropdown menu for google tool pages-->
                   <li><a href="#"> Google Tools</a>
                      <ul>
                         <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                         <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                         <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                      </ul>
                   </li>
                   <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Me</a></li>
                </ul>      
        </nav>
     </header>
       <!-- START LEFT COLUMN -->
<section class="fullwidth">
    <main class="wrapper">
     <h2 class="subheader">Contact Jessica</h2>
     
<!-- START HTML FORM -->
<form action="contact.php" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script>
        /**
        * requires reCAPTCHA so user doesn't lose form data 
        *
        * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
        * 
        * In this version, jQuery is required and code will find first form on page and require 
        * the reCAPTCHA for that form using document.forms[0]
        */
    
        function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
    </script>    
  
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
      
      alert(location.href);
      
      
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>

     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Jessica Dengler</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
</main>

     
 </body>
</html>