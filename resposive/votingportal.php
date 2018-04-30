<?php session_start();
 ob_start();
require'connect.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title>abcd</title>
        <link rel="stylesheet" type="text/css" href="style.css">
   
    <style>
            table{
                
                align-self: auto;
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
            <img src="image/cucek.jpg">
            <aside class="word">
                <article>
                    <content>
                
                        <h1> VOTING PORTAL</h1> 
                      
                        <img src='image/aa.jpeg' style='height:150px;width:400px; '>
                        
                        
                    </content>    
                    
                    
                    
                </article>   
                
                
                
            </aside>
            <nav>
                <ul>
                    
                                            <li class="active"> <a href="index.php"> home</a></li> 

                    
                </ul>
           </nav>
            
        </header>   
        <div class="maincontent">
            
         <div class="content">
            
         </div>
        
           
                    
                     <?php
if(isset($_SESSION['a'])&&isset($_SESSION['b']))
{
    $a=$_SESSION['a'];
$b=$_SESSION['b'];


    
   if(!empty($a)&&!empty($b))
   {
       
       $query="select `image`,`name`,`branch`,`sem`,`regno` from `candidate` where `branch`='$a' and `sem`='$b'";
       $result=  mysqli_query($data, $query);
       echo'<table>';
       echo"<form method='post' action='final.php'>";

       
       while($row=  mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
          $reg=$row['regno'];
           echo'<tr>';
          echo'<td>';
           echo '<h2>'.$b=$row['name'].'<h2>';
           echo  $c=$row['sem'].'<br><br>';
            echo  $d=$row['branch'];  
             $s=$row['image'];
             $q="image/";
             $asd=$q.$s;
            echo'<td>';
            echo "<img src='$asd' style='height:150px;width:150px;'>";
//echo"<form method='post' action='final.php'>";

            echo'<input type="radio" name="fan" required="required" value="'.$reg.'" >';
            
           // echo'</form>';
            echo'</td>';
       
       echo'</tr>';
       
   
           
           
       }    
       echo'<input type="submit" value="submit">';
       echo'</form>';

       
       echo'</table';
       }
    
    
    
}
 else {
    header('location:studlogin.php');
}

 ?>
                 
                 
        
        
        
        
        </div>
        
        
        
        
        <footer class="mainfooter">all rights &copy; reserved to me</footer>
       
    </body>
</html>

