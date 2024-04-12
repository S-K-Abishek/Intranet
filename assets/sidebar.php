
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
         
<!-- SIDEBAR --> 

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:25%">

    <a href="index.php" class="w3-bar-item w3-button">Home</a>
    <a href="#" class="w3-bar-item w3-button">Policy</a>
    <a href="#" class="w3-bar-item w3-button">Procedure</a>
    
  <div class="w3-dropdown-click">
    <button class="w3-button" onclick="myDropFunc()">
      Documents <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card">
      <a href="view_docs.php" class="w3-bar-item w3-button">View Documents</a>
      <a href="upload.php" class="w3-bar-item w3-button">Upload Documents</a>
    </div>
  </div>

    <a href="#" class="w3-bar-item w3-button">Departments</a>
    <a href="#" class="w3-bar-item w3-button">News and events</a>
    <a href="#" class="w3-bar-item w3-button">Knowledge base</a>
    <a href="#" class="w3-bar-item w3-button">Tasks</a>
    <a href="#" class="w3-bar-item w3-button">Intranet search</a>
    <a href="#" class="w3-bar-item w3-button">Employee directory</a>
    <a href="#" class="w3-bar-item w3-button">Quick links</a>
    <a href="#" class="w3-bar-item w3-button">Contact list</a>
    <a href="#" class="w3-bar-item w3-button">Social features</a>
    <a href="#" class="w3-bar-item w3-button">Image gallery</a>
    <a href="#" class="w3-bar-item w3-button">Questionnaires, polls, and surveys</a>
  
  </div>
    
<script>
  function myDropFunc() {
    var x = document.getElementById("demoDrop");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.previousElementSibling.className += " w3-green";
    } else { 
      x.className = x.className.replace(" w3-show", "");
      x.previousElementSibling.className = 
      x.previousElementSibling.className.replace(" w3-green", "");
    }
  }
  </script>
