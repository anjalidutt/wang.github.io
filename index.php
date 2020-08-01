<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CS 355 Term Project</title>
  <link rel="icon" href="connect4.png">
  <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="logsign.css">
        <script src="logsign.js"></script>

  <style>

</style>
</head>
<body>
  <div id="topnav">
      <ul>
	      <li><a href="index.php" target="_balnk">Home</a></li>
	      <li><a href="history.php" target="_balnk">History</a></li>
	      <li><a href="rules.php" target="_balnk">Rule</a></li>
	      <li><a href="bio-page.php" target="_balnk">Meet the Developers</a></li>
	      <li><a href="contact-us.php" target="_balnk">Contact-us</a></li>
	      <li class="dropdown">
          <a href="#" class="dropbtn">External Links</a>
          <div class="dropdown-content">
            <a href="https://www.google.com/search?q=connect+4&rlz=1C1JZAP_enUS747US747&oq=connect+4+&aqs=chrome..69i57j69i59l2j0l5.3243j0j8&sourceid=chrome&ie=UTF-8" target="_blank">Link to Google search</a>
            <a href="https://www.mathsisfun.com/games/connect4.html" target="_blank">Link1 to Connect4 game</a>
            <a href="https://papergames.io/en/connect4" target="_blank">Link2 to Connect4 game</a>
            <a href="https://poki.com/en/g/connect-4" target="_blank">Link3 to Connect4 game</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="#" class="dropbtn">Login/Sign Up</a>
          <div class="dropdown-content">
            <a onclick="document.getElementById('id01').style.display='block'">Login</a>
            <a onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
          </div>
        </li>
      </ul>
</div> 
<h1>Connect 4</h1>
<!--7columns X 6 rows-->
<div id="gamepanel">
  <table id="gametable"  onmousedown="myFunction(event)" onmouseup="isWin()">
    <tr id="row0" class="row">
      <td id="slot00" class="col0"></td>
      <td id="slot01" class="col1"></td>
      <td id="slot02" class="col2"></td>
      <td id="slot03" class="col3"></td>
      <td id="slot04" class="col4"></td>
      <td id="slot05" class="col5"></td>
      <td id="slot06" class="col6"></td>
    </tr>
    <tr id="row1" class="row">
      <td id="slot10" class="col0"></td>
      <td id="slot11" class="col1"></td>
      <td id="slot12" class="col2"></td>
      <td id="slot13" class="col3"></td>
      <td id="slot14" class="col4"></td>
      <td id="slot15" class="col5"></td>
      <td id="slot16" class="col6"></td>
    </tr>
    <tr id="row2" class="row">
      <td id="slot20" class="col0"></td>
      <td id="slot21" class="col1"></td>
      <td id="slot22" class="col2"></td>
      <td id="slot23" class="col3"></td>
      <td id="slot24" class="col4"></td>
      <td id="slot25" class="col5"></td>
      <td id="slot26" class="col6"></td>
    </tr>
    <tr id="row3" class="row">
      <td id="slot30" class="col0"></td>
      <td id="slot31" class="col1"></td>
      <td id="slot32" class="col2"></td>
      <td id="slot33" class="col3"></td>
      <td id="slot34" class="col4"></td>
      <td id="slot35" class="col5"></td>
      <td id="slot36" class="col6"></td>
    </tr>
    <tr id="row4" class="row">
      <td id="slot40" class="col0"></td>
      <td id="slot41" class="col1"></td>
      <td id="slot42" class="col2"></td>
      <td id="slot43" class="col3"></td>
      <td id="slot44" class="col4"></td>
      <td id="slot45" class="col5"></td>
      <td id="slot46" class="col6"></td>
    </tr>
    <tr id="row5" class="row">
      <td id="slot50" class="col0"></td>
      <td id="slot51" class="col1"></td>
      <td id="slot52" class="col2"></td>
      <td id="slot53" class="col3"></td> 
      <td id="slot54" class="col4"></td>
      <td id="slot55" class="col5"></td>
      <td id="slot56" class="col6"></td>
    </tr>
  </table>
</div>
<div class="button">
  <button onclick="reset()" >New game</button>
  <button onclick="takeback()">Reverse</button>
    <button onclick= "save()">Save</button>
        <label class="custom-file-upload">
    <input id="file" type="file"/>
    Upload 
</label>
</div>
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="registration.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button class="logsig" type="submit" name="login">Login</button>
      
    </div>

  </form>
</div>
<div id="id02" class="modal">

  <form class="modal-content" action="registration.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
	<label for="name"><b>Full Name</b></label>
      <input type="text" placeholder="Full Name" name="name" required>
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    

      <div class="clearfix">
        <button type="submit" class="signupbtn logsig" naem="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal

</script>
    <script src="index.js"></script>

  </body></html>
