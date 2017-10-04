<?php
include("includes/db.php");

?>
<!DOCTYPE html>
<!--
Template Name: Interlingua
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Interlingua</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">LIBRARY MANAGEMENT SYSTEM</a></h1>
      <p><i>FOR THOSE WHO WANT TO LEARN</p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Praesent:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Faucibus:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
<body background="f.jpg"> 
<center><h1> JUST A SMALL FORM AND WE ARE HERE TO HELP YOU</h1> 
<div class="container">



  <form method="POST" action="">

<table width="500"align="center" bgcolor="#ffffff">
<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3 bgcolor="#cc0066">LOGIN TO CONTINUE:</h3> </label>
</td>
</tr>
    </div>

<div class="form-group">
<tr>

<td>
    
      <label for="email"><h3>EMAIL: </h3></label>
</td>
<td>
      <h3><input type="text" class="form-control" name="email" placeholder="Enter email" required></h3>
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="email"><h3>PASSWORD: </h3></label>
</td>
<td>
      <input type="password" class="form-control" name="pass" placeholder="Enter passsword" required>
</td>
</tr>
<tr>
<td colspan=3><a href="checkout.php?forgot_pass">FORGOT PASSWORD?</a></td>
</tr>
    </div>



</table>
      <!--jayshish code-->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;float:right;">Rgister Student</button>
      <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">

      
    <div class="container1">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2>Register New Students</h2>
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="sname" required>

      <label><b>Department</b></label>
      <input type="text" placeholder="Enter Department Name" name="Sdept" required>
        
        <label><b>Roll No</b></label>
      <input type="text" placeholder="Enter Roll no" name="sroll" required>
        
        <label><b>semester</b></label>
      <input type="text" placeholder="Enter sem" name="ssem" required>
        
        <label><b>contact number</b></label>
      <input type="text" placeholder="Enter contact" name="scontact" required>
        
        <label><b>Session</b></label>
      <input type="text" placeholder="Session " name="Ssession" required>
      
        <button type="submit">Register</button>
         <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>

     
  </form>
</div>
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
<!--upto------>
</script>
<input type="submit" name="login" value="login"/>
</form>    
<?php
global $db;
if(isset($_POST['login']))
{
$s_email=$_POST['email'];
$s_pass=$_POST['pass'];
$sel_s="select * from students where customer_email='$s_email'";
$run_s=mysql_query($sel_s);

if(strcmp($run_s,$s_pass)==0)
{
$_SESSION['customer_email']=$s_email;
echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('student_page.php', '_self')</script>";
}
}
?>

    <h2><button><a href="index.html" target="_blank">GO BACK</a></button></h2>

<br>
<br>
<br>
<br>
    </center>
</body>
</html>