<!doctype html>
<?php
$con = @mysql_connect("localhost","root","");
$my_db=mysql_select_db("routine",$con);

?>
<html>
    <head>
        <title>TEACHER</title>
    </head>
    <body>
        <form method="GET" action="">
            <h2>ENTER THE NO OF SUBJECTS</h2>
            
            <input type="text" name="nos" placeholder= " enter the no of subjects here"/>
            <input type="text" name="routine_no" placeholder= "enter routine id in integer"/>
        <input type="submit"  name= "submit" value=" SUBMIT"/>
        </form>
        <?php
        
        if(isset($_GET['submit']))
        {
            $nos=$_GET['nos'];
            $num=$_GET['routine_no'];
        echo "
        <form method='POST' action=''>
        <table> <tr><td> SERIAL NO</td><td>SUBJECT NAME</TD><td>SUBJECT TEACHER</td><tr>";
        for($i=1; $i<=$nos ;$i++)
        {
            $m='sub'.$i;
            $n='fac'.$i;
            echo "<tr><td>sub $i</td><td><input type='text' placeholder='enter subject' name= '$m' /></TD>
            <td><input type='text' placeholder='enter faculty' name= '$n' /></td><tr>";
        }
        echo "</table>";
        
        echo "<input type='submit' name='register' value='submit' />";
         echo " </form>";  
            if(isset($_POST['register']))
            {
                for($j=1;$j<=$nos;$j++)
                {
                    $m='sub'.$j;
                    $n='fac'.$j;
                    $sub=$_POST[$m];
                    $fac=$_POST[$n];
                    $insert="INSERT INTO sub_teacher (routine_no,subject,teacher) VALUES ('$num','$sub','$fac')";
                    $run=mysql_query($insert);
                }
            echo"
                <table>
                <tr><td>day</td><td>10:00-10:50</td><td>10:50-11:40</td><td>11:40-12:30</td><td>12:30-1:20</td><td>1:20-2:10</td><td>2:10-3:00</td><td>3:00-3:50</td><td>3:50-4:40</td><td>4:40-5:30</td></tr>
                
                <tr>
                <td>monday</td>
                </tr>
                <tr>
                <td>tuesday</td>
                </tr>
                <tr>
                <td>wednesday</td>
                </tr>
                <tr>
                <td>thrusday</td>
                </tr>
                <tr>
                <td>friday</td>
                </tr>
                
                </table>
            ";
            }
            
            
        }
        
        ?>

    </body>
</html>