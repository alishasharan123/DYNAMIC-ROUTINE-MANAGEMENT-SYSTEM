<!DOCTYPE html>

<html lang="en">
<head>
  <title>DRMS</title>
  <link rel="stylesheet" media="screen" href="css/style2.css">
    <script type='text/javascript'></script> 
    <style>{
} 
</style>
    
</head>
<body>

<!-- count particles -->
<!-- particles.js container -->

    
<div id="particles-js">
<div id="intro">
<script src="../particles.js"></script>
<script src="js/app.js"></script>
    <div>
<!--login code goes here -->
        <div style="position: relative;">
        <ul>
            <li><a class="active" href="#home">DRMS</a></li>
            <li><a style="font-size=25px;">:Dynamic Routine Management Syatem</a></li>
            <li style="float:right"><a href="#about">About</a></li>
            <li style="float:right"><a href="#news">News</a></li>
            <li style="float:right"><a href="#contact">Contact</a></li>
            </ul>       
    </div>
        <div style="position: absolute; top: 200px; left: 50px; width: 600px; height: 350px;border: 10px solid #004656;">
            <h2 style="font-family:Bradley Hand ITC; font-size:25px; color: skyblue;text-align: center;opacity: 1.0;">
                <i>please login as Head Of Department(HOD)</i></h2>
            




<form method="POST" action="">
                    <h3 style="color: cyan;font-family:cursive;margin-left:70px;font-size:25px;">UserId:
                        <input type="text" name="teacher_id" style="color: black;font-family:cursive;font-size:15px;margin-left:70px"></h3>
                    
                    <h3 style="color: cyan;font-family:cursive;margin-left:70px;font-size:25px;">
                        Password: <input type="password" name="teacher_password" style="color: black;font-family:cursive;font-size:15px;margin-left:45px"></h3><br>
                    
                    <input type="submit" value="SUBMIT" name="teacher_submit" style="color: brown;font-family:chiller;font-size:20px;margin-left:70px;">
            </form>
             <?php
    
    if(isset($_POST['teacher_submit']))
    {
        $tid=$_POST['teacher_id'];
        $tpass=$_POST['teacher_password'];
            if($tid =="teacher" && $tpass=="UIT")
            {
                echo "<script type='text/javascript'>window.open('../../s0.php', '_self')</script>";
            }
    }

?>
        </div>
        <div style="position: absolute; top: 200px; right: 50px; width: 600px; height: 350px;border: 10px solid #004656;">
            <h2 style="font-family:Bradley Hand ITC; font-size:25px; color: skyblue; text-align: center;">
                <i>please enter the semester to view the routine</i></h2>
    
            


<form method="POST" action="../../s2.php">
                    <h3 style="color: cyan;font-family:cursive;margin-left:70px;font-size:25px;">UserId:
                        <select name="entered_sem" style="color: black;font-family:cursive;font-size:15px;margin-left:70px">
                <option>SELECT SEM</option>
                         <option>1ST</option>
                         <option>3RD</option>
                         <option>5TH</option>
                        </select>
    </h3>
                    <br>
                    
                    <input type="submit" value="SUBMIT" name="student_submit" style="color: brown;font-family:chiller;font-size:20px;margin-left:70px;">
            </form>
           
        </div>
    </div>
</div>
</div>  
<footer>COPYRIGHT@Roll--01,19,20,21</footer>
    
    
    
<!-- scripts -->    
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

</body>
    
</html>
