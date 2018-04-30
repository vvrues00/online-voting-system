
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
                       
                        <li class="active"> <a href="index.php"> back</a></li
                    </ul>
           </nav>
            
        </header>   
        <form action="result.php" method="post">
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
        <form>
    </body>
</html>




<?php
include 'connect.php';

    if(isset($_POST['sub'])&&isset($_POST['reg'])&&!empty($_POST['sub'])&&!empty($_POST['reg']))
{
$a=$_POST['sub'];
$b=$_POST['reg'];
if($a&&$b)
{$query="select `name`,`votes` from `candidate` where `branch`='$a' and `sem`='$b'";
$result=  mysqli_query($data, $query)or die('not working');
while($row=  mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  echo'<table>';
  echo'<tr>';
  echo'<td>';
  echo $row['name'];
  echo'</td>';
  echo'<td>';
  echo $row['votes'];
  echo '</td>';
  echo '</tr>';
  echo '</table>';
}


}   
}
