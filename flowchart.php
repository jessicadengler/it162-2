<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Jessica Dengler's IT162 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
     <h1>Jessica's IT162 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.php" class="active">Welcome</a>
       <a href="aia.php">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/template.html" target="_blank">Final Project</a>
       <a href="contactme.php">Contact Jessica</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of an me ziplining upside down in Mexico" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of me sipping a margarita in Mexico" />
       
     <img class="phone" src="images/phone.jpg" alt="Photo of me holding the first crab I ever caught" />
       
       <h2 class="subheader">My flowchart and wireframe</h2>
       
       <a href="https://docs.google.com/document/d/1vybXNUbtcol2z7lebTBIoIRmVjAAhl12gzmiwdLOLjk/edit?usp=sharing" target="_blank">Link to my Google Doc</a>
       
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Jessica Dengler</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
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
     
 </body>
</html>