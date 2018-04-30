
<?php ob_start();
session_start();

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title>abcd</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="body">
        <header class="mainheader">
            <img src="image/cucek.jpg">
            <aside class="word">
                <article>
                    <content>
                COCHIN UNIVERSITY COLLEGE
                      OF ENGINEERING 
                        KUTTANNAD
                         
                        
                        
                    </content>    
                    
                    
                    
                </article>   
                
                
                
            </aside>
            <nav>
                    <ul>
                        <li class="active"> <a href="index.php"> home</a></li> 
                        <!--<li ><a href="reg.php"> student registration</a></li>-->
                       <!-- <li ><a href="cadidate.php"> candidate registration</a></li>-->
                        <li ><a href="a"> contact</a></li> 
                        <!--<li ><a href="show.php"> database</a></li>-->
                    </ul>
           </nav>
            
        </header>   
        <div class="maincontent">
            
         <div class="content">
             <article class="arti"> 
                 <header>
                     <h2> <a href="">LOGIN</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">please fill</p></footer>
                 <content>    
                     <form action="studlogin.php" method="POST">
                         <table>
                             <tr>
                                 <td> register no<br> <input type="text" name="text" placeholder="name" required="required" id="we"></td>
                             </tr>
                         
                             
                       
                             <tr>
                                 <td><br>
                                     &nbsp;<input type="submit" value="submit">
                                     &nbsp;<input type="reset" value="reset">
                                 </td>
                             </tr>
                         
                         </table>
                     </form>
                         
                 </content>  
             </article>
             <article class="arti2">
                 <header>
                     <h2> <a href="">vote management</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">lets vote</p></footer>
                 <content>    
                
                         
                         Over 1000 organizations from 48 countries
                         rely on Simply Voting for their election needs.
                         Our secure protocols, ease-of-use and flexible 
                         solutions transform elections across industries. 
                         Get in touch with us to learn how we can run your next 
                         election together
                    
                 </content>  
               </article>
         </div>
        </div>
        <aside class="top-siderbar">
            <article>
            <h2> vote management</h2>
            <p>
                Over 1000 organizations from 48 countries
                rely on Simply Voting for their election needs.
                Our secure protocols, ease-of-use and flexible
                solutions transform elections across industries. 
                Get in touch with us to learn how we can run your 
                next election together
            </p>
            </article>
        </aside>
        <footer class="mainfooter">all rights &copy; reserved to me</footer>
       
    </body>
</html>
<?php
$user='root';
$pass='';
$db='registration';
$data=new mysqli('localhost',$user,$pass,$db) ;
if($data)
{
    
    if(isset($_POST["text"]))
    { if(!empty($_POST["text"]))
        { $name1=  mysqli_real_escape_string($data,$_POST["text"]);
$name=  htmlentities($name1);
$query="select `reg_no`,`id` from `details` where `reg_no` ='$name'";

$result= mysqli_query($data,$query);

if($result)
{ 
    $a=  mysqli_num_rows($result);
    if($a==1)
    { $query1="select `verified`,`pass`,`ema` from `details` where `reg_no`='$name'";
    $result1= mysqli_query($data,$query1);
    if($result1)
    {
    while($row1=  mysqli_fetch_array($result1,MYSQLI_ASSOC))
    {
        $x=$row1['verified'];
    }
    if($x==0)
        
    {
        
        
        
        echo'<script>alert("an password has been sent to you email id")</script>';
   
     
    
   while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        
    $_SESSION['id']= $row['id'];   
    
      echo "<script> window.location='studentlogin.php';</script>";
    } }  

     else
            echo"<script>alert('you are not  eligible voting !');</script>";
    } }
    
    
 else 
     echo"<script>alert('details not  matched');</script>";
     echo "<script>window.location='studlogin.php';</script>";
}}}
 else 
die();    

 }else
    die();
ob_end_flush();
?>