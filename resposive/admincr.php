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
                 
                 <footer><p class="p-info">please enter</p></footer>
                 <content>    
                     <form action="admincr.php" method="POST">
                         <table>
                             <tr>
                                 <td> name:<br> <input type="text" name="text" placeholder="name" required="required" id="we"></td>
                             </tr>
                         
                               <tr>
                                   <td>department:<br>
                                   <select id="we" name="pass">
                        
                         
                         <option>mechanical engineering</option>
                         <option>civil engineering </option>
                         <option>electronics and communication</option>
                         <option>computer science and engineering</option>
                         <option> information technology</option>
                         <option>electrical and electronics engineering</option>
                         <option>master of computer application</option>
                     </select></br></br>
                                   
                                   
                                   
                                   
                                   </td>
                                   
                               <br>
                               
                               </tr>
                               
                               <tr>
                                   
                                   
                                   <label>email id</br><input type="email" name="email" placeholder="e.g:vrules@gmail.com" id="we"></label>
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
                     <h2> <a href="">online voting</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">vote management</p></footer>
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
            <h2> voting</h2>
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
if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
{$user='root';
$pass='';
$db='registration';
$data=new mysqli('localhost',$user,$pass,$db) ;
if($data)
{
    if(isset($_POST["text"])&& isset($_POST["pass"])&&isset($_POST['email']))
    {$name1=  mysqli_real_escape_string($data,$_POST["text"]);
$reg1=  mysqli_real_escape_string($data,$_POST["pass"]);
$name=  htmlentities($name1);
$email= $_POST['email'];
$pass=mt_rand(10, 1000);
$reg=  htmlentities($reg1);
$query="insert into `admin`(`user`,`sec1`,`pass`,`sec2`)  values('$name','$reg','$pass','$email')";
$result= mysqli_query($data,$query);
if($result)
{  
        echo"<script>alert('admin registered and password sent to corresponding email');</script>";

    $_SESSION['mat']='mat';
    
}
 else {
    echo "denied";
}
    }
}
ob_end_flush();
}
else
{header('location:adminlogin.php') ;  }
?>