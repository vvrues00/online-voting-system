

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title>abcd</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <style>
            table{
                
                
              margin-left: 2%;
             padding-top: 2%;
            }
            
            table tr td{
                
               
                padding:0 15px 0 15px;
                
                
            }
            
            </style>
            
    </head>
    <body class="body">
        <header class="mainheader">
           
                
                
          
            <nav>
                    <ul>
                        <li class="active"> <a href="core2.php"> logout</a></li> 
                        <li class="active"> <a href="admin2home.php"> back</a></li
                    </ul>
           </nav>
            
        </header>   
        <form action="delete.php" method="post">
        <label>branch</label>
        <br>
           <select id="we" name="sub">
                        
                         
                         <option>mechanical engineering</option>
                         <option>civil engineering </option>
                         <option>electronics and communication</option>
                         <option>computer science and engineering</option>
                         <option> information technology</option>
                         <option>electrical and electronics engineering</option>
                         <option>master of computer application</option>
                     </select></br></br>
                     <br>
                     
                      <td>
                     <label>
                          semester</br>
                     </label>    <select id="we" name="reg">
                        
                         
                         <option>1</option>
                         <option>2 </option>
                         <option>3</option>
                         <option>4</option>
                         <option> 5</option>
                         <option>6</option>
                         <option>7</option>
                           <option>8</option>
                     </select></br></br>
                 
        <Br>
       
        <input type="submit" name="asd" id="we2" value="submit">
        <br><br>
        <label>please edit candidate</label>
        <input type="text" name="qwerty" id="we">
        <br><br>
        <input type="submit" name="zxc" id="we2" value="submit">
        <form>
    </body>
</html>





<?php
require 'connect.php';
include'core.php';

?>
<?php
if(isset($_SESSION['user']))
{if(isset($_POST['sub'])&&isset($_POST['reg'])&&!empty($_POST['sub'])&&!empty($_POST['reg']))
{
$a=$_POST['sub'];
$b=$_POST['reg'];
if($a&&$b)
{$query="delete from `details` where `branch` ='$a' and `sem` ='$b'";
$result=  mysqli_query($data, $query)or die('not working');
if($result)
{
    
    echo 'deleted';
}
}
else 
    if(isset($_POST['qwerty'])&&isset($_POST['zxc']))
    { if(!empty($_POST['qwerty']))
        {
        $dfg=$_POST['qwerty'];
$query="delete from `candidate` where `regno`='$dfg' ";
$result=  mysqli_query($data, $query)or die('not working');
if($result)
{
    echo 'deleted';
}
}
}
}
}
else
    header('location:adminlogin.php');
?>